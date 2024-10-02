<?php

// Check the user agent for mobile device
function is_mobile() {
    return preg_match('/Mobile|Android|BlackBerry|IEMobile|Opera Mini/i', $_SERVER['HTTP_USER_AGENT']);
}

// Function to determine which ad to show
function get_ad_file($desktop_ad, $mobile_ad) {
    if (!isset($_COOKIE['adType'])) {
        $adType = is_mobile() ? 'mobile-ad' : 'desktop-ad';
        setcookie('adType', $adType, time() + 3600, "/"); // Set the cookie for an hour
    } else {
        $adType = $_COOKIE['adType'];
    }

    if ($adType === 'desktop-ad') {
        return ABSPATH . 'wp-content/themes/icvtheme/oglasi/opcine/' . $desktop_ad;
    } else {
        return ABSPATH . 'wp-content/themes/icvtheme/oglasi/opcine/' . $mobile_ad;
    }
}

// Include first ad
$desktop_ad = 'oglas1.php';
$mobile_ad = 'oglas1-mobile.php';
$file_path = get_ad_file($desktop_ad, $mobile_ad);
if (!empty($file_path) && file_exists($file_path)) {
    include($file_path);
} else {
    echo 'File not found or invalid ad type';
}

?>

<?php
// Include secondary nav
$file_path = ABSPATH . 'wp-content/themes/icvtheme/nav/secondary-nav/opcine.php';
if (file_exists($file_path)) {
    include($file_path);
}
?>

<section class="container-mainxaside">

    <main class="main-naslovnica">

        <?php include ('opcine.php') ?>

        <?php
            // Include second ad
            $desktop_ad = 'oglas2.php';
            $mobile_ad = 'oglas2-mobile.php';
            $file_path = get_ad_file($desktop_ad, $mobile_ad);
            if (!empty($file_path) && file_exists($file_path)) {
                include($file_path);
            } else {
                echo 'File not found or invalid ad type';
            }
        ?>

        <?php include ('pitomaca.php') ?>

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

        <?php include ('orahovica.php') ?>

        <?php
            // Include fourth ad
            $desktop_ad = 'oglas4.php';
            $mobile_ad = 'oglas4-mobile.php';
            $file_path = get_ad_file($desktop_ad, $mobile_ad);
            if (!empty($file_path) && file_exists($file_path)) {
                include($file_path);
            } else {
                echo 'File not found or invalid ad type';
            }
        ?>

        <?php include ('slatina.php') ?>

    </main>
    <!-- .main-naslovnica -->
    
</section>
<!-- .container-mainxaside -->
