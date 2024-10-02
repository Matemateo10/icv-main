<?php
    // Include third ad
    $desktop_ad = 'oglas3.php';
    $mobile_ad = 'oglas3-mobile.php';
    $file_path = get_ad_file($desktop_ad, $mobile_ad);
    if (!empty($file_path) && file_exists($file_path)) {
        include($file_path);
    } else {
        echo 'File not found or invalid ad type';
    }
?>