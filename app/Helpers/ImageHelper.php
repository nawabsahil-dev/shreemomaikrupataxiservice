<?php

/**
 * Get local image path for Unsplash image
 * @param string $unsplashUrl Full unsplash URL or photo ID
 * @return string Local image path
 */
function getLocalImagePath($unsplashUrl) {
    $mapping = include(config_path('image-mapping.php'));
    
    // Extract photo ID from URL if full URL provided
    if (strpos($unsplashUrl, 'https://') === 0) {
        preg_match('/photo-([\w-]+)/', $unsplashUrl, $matches);
        $photoId = $matches[1] ?? null;
    } else {
        $photoId = $unsplashUrl;
    }
    
    return $mapping[$photoId] ?? $unsplashUrl;
}
