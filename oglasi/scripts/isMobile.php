<?php

// Check the user agent for mobile device
function is_mobile() {
    return preg_match('/Mobile|Android|BlackBerry|IEMobile|Opera Mini/i', $_SERVER['HTTP_USER_AGENT']);
}

// Function to determine which ad to show
function get_ad_file($index) {
    
    $desktop_ad = 'oglas' . $index . '.php';
    $mobile_ad = 'oglas-mobile' . $index . '.php';

    // Get current category object
    $category = get_queried_object();

    // Ensure we're working with a valid category object
    if (is_category() && !empty($category)) {
        // Retrieve the slug of the current category
        $category_slug = $category->slug;
    }
    
    // Set ad type based on mobile or desktop
    if (!isset($_COOKIE['adType'])) {
        $adType = is_mobile() ? 'mobile-ad' : 'desktop-ad';
        setcookie('adType', $adType, time() + 3600, "/"); // Set the cookie for an hour
    } else {
        $adType = $_COOKIE['adType'];
    }

    // Build the file path dynamically using the category slug
    if ($adType === 'desktop-ad') {
        return ABSPATH . 'wp-content/themes/icvtheme/oglasi/' . $category_slug . '/' . $desktop_ad;
    } else {
        return ABSPATH . 'wp-content/themes/icvtheme/oglasi/' . $category_slug . '/' . $mobile_ad;
    }
}
?>
