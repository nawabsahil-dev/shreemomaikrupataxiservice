<?php
/**
 * Download images from Unsplash and replace URLs with local paths
 * Run: php download_images.php
 */

$imageUrls = [
    'photo-1529253355930-ddbe423a2ac7' => ['name' => 'mumbai-gateway.jpg', 'alt' => 'Mumbai Gateway'],
    'photo-1597074866923-dc0589150358' => ['name' => 'udaipur-lakes.jpg', 'alt' => 'Udaipur Lakes'],
    'photo-1564507592333-c60657eea523' => ['name' => 'agra-tajmahal.jpg', 'alt' => 'Agra Taj Mahal'],
    'photo-1512343879784-a960bf40e7f2' => ['name' => 'goa-beach.jpg', 'alt' => 'Goa Beach'],
    'photo-1583422409516-2895a77efded' => ['name' => 'dwarka-temple.jpg', 'alt' => 'Dwarka Temple'],
    'photo-1609920658906-8223610809ca' => ['name' => 'somnath-jyotirlinga.jpg', 'alt' => 'Somnath Jyotirlinga'],
    'photo-1534567110243-4ec9d01e8410' => ['name' => 'gir-lion-safari.jpg', 'alt' => 'Gir Lion Safari'],
    'photo-1587474260584-136574528ed5' => ['name' => 'statue-of-unity.jpg', 'alt' => 'Statue of Unity'],
    'photo-1506905925346-21bda4d32df4' => ['name' => 'saputara-hill.jpg', 'alt' => 'Saputara Hill Station'],
    'photo-1582510003544-4d00b7f74220' => ['name' => 'kutch-desert.jpg', 'alt' => 'Kutch White Desert'],
    'photo-1449965408869-eaa3f722e40d' => ['name' => 'taxi-fleet.jpg', 'alt' => 'Taxi Fleet'],
    'photo-1500530855697-b586d89ba3ee' => ['name' => 'coastal-drive.jpg', 'alt' => 'Coastal Drive'],
    'photo-1548013146-72479768bada' => ['name' => 'dwarka-temple-alt.jpg', 'alt' => 'Dwarka Temple Alt'],
    'photo-1500534314209-a25ddb2bd429' => ['name' => 'gir-forest.jpg', 'alt' => 'Gir Forest'],
];

$downloadDir = 'public/images/tours';
$baseUrl = 'https://images.unsplash.com';

// Create directory if not exists
if (!is_dir($downloadDir)) {
    mkdir($downloadDir, 0755, true);
    echo "✓ Created directory: $downloadDir\n";
}

$success = 0;
$failed = 0;
$mapping = [];

echo "\n=== Starting Image Download ===\n\n";

foreach ($imageUrls as $photoId => $info) {
    $filename = $info['name'];
    $filepath = "$downloadDir/$filename";
    $url = "$baseUrl/$photoId?w=800&q=80";
    
    if (file_exists($filepath)) {
        echo "✓ Already exists: $filename\n";
        $mapping[$photoId] = "/$downloadDir/$filename";
        $success++;
        continue;
    }
    
    echo "Downloading: $filename... ";
    try {
        $imageData = @file_get_contents($url);
        
        if ($imageData === false) {
            echo "✗ Failed (URL error)\n";
            $failed++;
            continue;
        }
        
        if (file_put_contents($filepath, $imageData) === false) {
            echo "✗ Failed (Write error)\n";
            $failed++;
            continue;
        }
        
        echo "✓ Done\n";
        $mapping[$photoId] = "/$downloadDir/$filename";
        $success++;
        
    } catch (Exception $e) {
        echo "✗ Exception: " . $e->getMessage() . "\n";
        $failed++;
    }
    
    // Be nice to Unsplash
    usleep(200000); // 200ms delay between requests
}

echo "\n=== Summary ===\n";
echo "Successfully downloaded: $success images\n";
echo "Failed: $failed images\n";

// Create mapping file
$mappingFile = 'config/image-mapping.php';
if (!is_dir('config')) {
    mkdir('config', 0755, true);
}

$mappingContent = "<?php\n";
$mappingContent .= "// Auto-generated image mapping\n";
$mappingContent .= "// Maps Unsplash photo IDs to local paths\n";
$mappingContent .= "// Generated: " . date('Y-m-d H:i:s') . "\n\n";
$mappingContent .= "return " . var_export($mapping, true) . ";\n";

file_put_contents($mappingFile, $mappingContent);
echo "\n✓ Created mapping file: $mappingFile\n";

// Create helper function file
$helperContent = "<?php\n\n";
$helperContent .= "/**\n";
$helperContent .= " * Get local image path for Unsplash image\n";
$helperContent .= " * @param string \$unsplashUrl Full unsplash URL or photo ID\n";
$helperContent .= " * @return string Local image path\n";
$helperContent .= " */\n";
$helperContent .= "function getLocalImagePath(\$unsplashUrl) {\n";
$helperContent .= "    \$mapping = include(config_path('image-mapping.php'));\n";
$helperContent .= "    \n";
$helperContent .= "    // Extract photo ID from URL if full URL provided\n";
$helperContent .= "    if (strpos(\$unsplashUrl, 'https://') === 0) {\n";
$helperContent .= "        preg_match('/photo-([\\w-]+)/', \$unsplashUrl, \$matches);\n";
$helperContent .= "        \$photoId = \$matches[1] ?? null;\n";
$helperContent .= "    } else {\n";
$helperContent .= "        \$photoId = \$unsplashUrl;\n";
$helperContent .= "    }\n";
$helperContent .= "    \n";
$helperContent .= "    return \$mapping[\$photoId] ?? \$unsplashUrl;\n";
$helperContent .= "}\n";

@mkdir('app/Helpers', 0755, true);
file_put_contents('app/Helpers/ImageHelper.php', $helperContent);
echo "✓ Created helper function: app/Helpers/ImageHelper.php\n";

echo "\n=== Next Steps ===\n";
echo "1. Update your Blade templates to use local paths\n";
echo "2. Use the mapping in config/image-mapping.php\n";
echo "3. Or use the helper function: getLocalImagePath()\n\n";
?>
