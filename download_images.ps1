# PowerShell script to download images from URLs and create mapping
$imageUrls = @{
    'photo-1529253355930-ddbe423a2ac7' = 'mumbai-gateway.jpg'
    'photo-1597074866923-dc0589150358' = 'udaipur-lakes.jpg'
    'photo-1564507592333-c60657eea523' = 'agra-tajmahal.jpg'
    'photo-1512343879784-a960bf40e7f2' = 'goa-beach.jpg'
    'photo-1583422409516-2895a77efded' = 'dwarka-temple.jpg'
    'photo-1609920658906-8223610809ca' = 'somnath-jyotirlinga.jpg'
    'photo-1534567110243-4ec9d01e8410' = 'gir-lion-safari.jpg'
    'photo-1587474260584-136574528ed5' = 'statue-of-unity.jpg'
    'photo-1506905925346-21bda4d32df4' = 'saputara-hill-station.jpg'
    'photo-1582510003544-4d00b7f74220' = 'kutch-white-desert.jpg'
    'photo-1449965408869-eaa3f722e40d' = 'taxi-fleet.jpg'
    'photo-1500530855697-b586d89ba3ee' = 'coastal-drive.jpg'
    'photo-1548013146-72479768bada' = 'dwarka-temple-alt.jpg'
    'photo-1500534314209-a25ddb2bd429' = 'gir-forest.jpg'
}

$downloadDir = "public/images/tours"
if (-not (Test-Path $downloadDir)) {
    New-Item -ItemType Directory -Path $downloadDir -Force | Out-Null
    Write-Host "Created directory: $downloadDir"
}

$failedDownloads = @()
$successCount = 0

foreach ($photoId in $imageUrls.Keys) {
    $filename = $imageUrls[$photoId]
    $filepath = Join-Path $downloadDir $filename
    $url = "https://images.unsplash.com/$photoId`?w=800&q=80"
    
    if (Test-Path $filepath) {
        Write-Host "✓ Already exists: $filename"
        $successCount++
        continue
    }
    
    try {
        Write-Host "Downloading: $filename from Unsplash..."
        Invoke-WebRequest -Uri $url -OutFile $filepath -UseBasicParsing
        Write-Host "✓ Downloaded: $filename"
        $successCount++
    }
    catch {
        Write-Host "✗ Failed to download: $filename"
        $failedDownloads += $filename
    }
}

Write-Host "`n=== Download Summary ==="
Write-Host "Successfully downloaded: $successCount images"
if ($failedDownloads.Count -gt 0) {
    Write-Host "Failed to download:"
    $failedDownloads | ForEach-Object { Write-Host "  - $_" }
}

# Create PHP mapping file
$phpMapping = @"
<?php
// Image URL Mapping - Auto-generated
// Maps old Unsplash URLs to local image paths

return [
    'photo-1529253355930-ddbe423a2ac7' => 'mumbai-gateway.jpg',
    'photo-1597074866923-dc0589150358' => 'udaipur-lakes.jpg',
    'photo-1564507592333-c60657eea523' => 'agra-tajmahal.jpg',
    'photo-1512343879784-a960bf40e7f2' => 'goa-beach.jpg',
    'photo-1583422409516-2895a77efded' => 'dwarka-temple.jpg',
    'photo-1609920658906-8223610809ca' => 'somnath-jyotirlinga.jpg',
    'photo-1534567110243-4ec9d01e8410' => 'gir-lion-safari.jpg',
    'photo-1587474260584-136574528ed5' => 'statue-of-unity.jpg',
    'photo-1506905925346-21bda4d32df4' => 'saputara-hill-station.jpg',
    'photo-1582510003544-4d00b7f74220' => 'kutch-white-desert.jpg',
    'photo-1449965408869-eaa3f722e40d' => 'taxi-fleet.jpg',
    'photo-1500530855697-b586d89ba3ee' => 'coastal-drive.jpg',
    'photo-1548013146-72479768bada' => 'dwarka-temple-alt.jpg',
    'photo-1500534314209-a25ddb2bd429' => 'gir-forest.jpg',
];
?"@

$configDir = "config"
if (-not (Test-Path $configDir)) {
    New-Item -ItemType Directory -Path $configDir -Force | Out-Null
}

$phpMapping | Out-File -FilePath "$configDir/image-mapping.php" -Encoding UTF8
Write-Host "`nCreated config/image-mapping.php for URL mapping"
