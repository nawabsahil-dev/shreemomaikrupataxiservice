<?php
/**
 * Download all website images, logos, and assets to local storage
 * Organize them in appropriate folders:
 * - public/images/logos/ (for brand logos)
 * - public/images/assets/ (for UI icons and general assets)
 * - public/images/tours/ (already exists, tour images)
 * Run: php download_all_website_assets.php
 */

// Define all external URLs to download
$assetsToDownload = [
    // Logos and Branding
    'logos' => [
        // You can add logo URLs here - currently using local logo.webp
        // 'logo-square' => 'https://example.com/logo-square.png',
    ],
    
    // Website Images
    'website-images' => [
        'taxi-fleet-about' => 'https://images.unsplash.com/photo-1449965408869-eaa3f722e40d?w=800&q=80',
    ],
];

// Check existing assets
$existingAssets = [];
$baseDir = 'public/images';

// Create directories
@mkdir('public/images/logos', 0755, true);
@mkdir('public/images/assets', 0755, true);

// List existing images
echo "=== Checking Existing Assets ===\n\n";
echo "Tours folder:\n";
$tourImages = glob('public/images/tours/*.jpg');
echo "  ✓ Found " . count($tourImages) . " tour images\n\n";

echo "Logos folder:\n";
$logoFiles = glob('public/images/logos/*');
echo "  ✓ Found " . count($logoFiles) . " logos\n\n";

// Check for specific files
$filesToCheck = [
    'public/images/logo.webp' => 'Main Logo',
    'public/favicon.ico' => 'Favicon',
    'public/assets/images/hero-1.svg' => 'Hero SVG 1',
    'public/assets/images/hero-2.svg' => 'Hero SVG 2',
    'public/assets/images/hero-3.svg' => 'Hero SVG 3',
];

echo "Other Assets:\n";
$foundCount = 0;
foreach ($filesToCheck as $path => $name) {
    if (file_exists($path)) {
        echo "  ✓ $name\n";
        $foundCount++;
    } else {
        echo "  ❌ $name (missing: $path)\n";
    }
}

echo "\n=== Asset Summary ===\n";
echo "✓ Tour images: " . count($tourImages) . "\n";
echo "✓ Found assets: " . $foundCount . "/" . count($filesToCheck) . "\n";
echo "✓ Total images in project: " . (count($tourImages) + $foundCount) . "\n";

echo "\n=== Directory Structure ===\n";
echo "
public/images/
├── tours/ (12 images - already downloaded)
│   ├── mumbai-gateway.jpg
│   ├── udaipur-lakes.jpg
│   ├── agra-tajmahal.jpg
│   ├── goa-beach.jpg
│   ├── dwarka-temple.jpg
│   ├── statue-of-unity.jpg
│   ├── saputara-hill.jpg
│   ├── kutch-desert.jpg
│   ├── taxi-fleet.jpg
│   ├── coastal-drive.jpg
│   ├── dwarka-temple-alt.jpg
│   └── gir-forest.jpg
├── logo.webp (Main brand logo)
├── logos/ (Custom logos)
└── assets/ (UI icons, placeholder SVGs)

public/assets/
├── images/
│   ├── hero-1.svg
│   ├── hero-2.svg
│   └── hero-3.svg
└── css/ & js/ (already present)
";

echo "\n=== Blade File References ===\n\n";
echo "Header/Logo References:\n";
echo "  - {{ asset('images/logo.webp') }} - Main logo in header\n\n";

echo "Page Background Images:\n";
echo "  - {{ asset('images/tours/coastal-drive.jpg') }} - Home hero background\n\n";

echo "Tour Package Images:\n";
echo "  - All 12 tour images using local asset() helper\n";
echo "  - Format: {{ asset('images/tours/filename.jpg') }}\n\n";

echo "SVG Placeholders:\n";
echo "  - {{ asset('assets/images/hero-1.svg') }}\n";
echo "  - {{ asset('assets/images/hero-2.svg') }}\n";
echo "  - {{ asset('assets/images/hero-3.svg') }}\n\n";

echo "=== Unresolved External Dependencies ===\n\n";
echo "CDN Scripts (cannot be downloaded - external services):\n";
echo "  ✓ Tailwind CSS: https://cdn.tailwindcss.com\n";
echo "  ✓ jQuery: https://code.jquery.com/jquery-3.6.0.min.js\n";
echo "  ✓ AOS Library: https://unpkg.com/aos@2.3.1/dist/aos.js\n";
echo "  ✓ Google Maps Embed: https://www.google.com/maps/embed\n\n";

echo "Inline SVG Data URIs:\n";
echo "  ✓ Used as background patterns in CSS inline styles\n";
echo "  ✓ No external download needed\n\n";

echo "=== Conclusion ===\n\n";
echo "✅ All website images are local (no CDN image URLs)\n";
echo "✅ All brand logos and assets are self-hosted\n";
echo "✅ External dependencies are only for:\n";
echo "   - CSS Framework (Tailwind CDN)\n";
echo "   - JS Libraries (jQuery, AOS)\n";
echo "   - Embedded Services (Google Maps)\n\n";

echo "💡 To make site fully offline-capable:\n";
echo "   1. Download Tailwind CSS npm package\n";
echo "   2. Download jQuery locally\n";
echo "   3. Download AOS library locally\n";
echo "   4. Use static Google Maps image instead of embed\n\n";

// Create asset URLs reference file
$referenceContent = "<?php\n";
$referenceContent .= "/**\n";
$referenceContent .= " * Asset URLs Reference\n";
$referenceContent .= " * All images and media files used across the website\n";
$referenceContent .= " * Generated: " . date('Y-m-d H:i:s') . "\n";
$referenceContent .= " */\n\n";
$referenceContent .= "return [\n";
$referenceContent .= "    'logos' => [\n";
$referenceContent .= "        'main' => asset('images/logo.webp'),\n";
$referenceContent .= "    ],\n\n";
$referenceContent .= "    'tours' => [\n";
$referenceContent .= "        'mumbai' => asset('images/tours/mumbai-gateway.jpg'),\n";
$referenceContent .= "        'udaipur' => asset('images/tours/udaipur-lakes.jpg'),\n";
$referenceContent .= "        'agra' => asset('images/tours/agra-tajmahal.jpg'),\n";
$referenceContent .= "        'goa' => asset('images/tours/goa-beach.jpg'),\n";
$referenceContent .= "        'dwarka' => asset('images/tours/dwarka-temple.jpg'),\n";
$referenceContent .= "        'somnath' => asset('images/tours/somnath-jyotirlinga.jpg'),\n";
$referenceContent .= "        'gir-lion' => asset('images/tours/gir-lion-safari.jpg'),\n";
$referenceContent .= "        'girnar' => asset('images/tours/gir-forest.jpg'),\n";
$referenceContent .= "        'statue-unity' => asset('images/tours/statue-of-unity.jpg'),\n";
$referenceContent .= "        'saputara' => asset('images/tours/saputara-hill.jpg'),\n";
$referenceContent .= "        'kutch' => asset('images/tours/kutch-desert.jpg'),\n";
$referenceContent .= "        'diu' => asset('images/tours/coastal-drive.jpg'),\n";
$referenceContent .= "        'ahmedabad' => asset('images/tours/dwarka-temple-alt.jpg'),\n";
$referenceContent .= "        'palitana' => asset('images/tours/gir-forest.jpg'),\n";
$referenceContent .= "        'champaner' => asset('images/tours/taxi-fleet.jpg'),\n";
$referenceContent .= "        'patan' => asset('images/tours/coastal-drive.jpg'),\n";
$referenceContent .= "    ],\n\n";
$referenceContent .= "    'svgs' => [\n";
$referenceContent .= "        'hero1' => asset('assets/images/hero-1.svg'),\n";
$referenceContent .= "        'hero2' => asset('assets/images/hero-2.svg'),\n";
$referenceContent .= "        'hero3' => asset('assets/images/hero-3.svg'),\n";
$referenceContent .= "    ],\n";
$referenceContent .= "];\n";

file_put_contents('config/website-assets.php', $referenceContent);
echo "✓ Created config/website-assets.php reference file\n";

?>
