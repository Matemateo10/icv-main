<?php

    $desktop_ad = 'oglas1.php';
    $mobile_ad = 'oglas1-mobile.php';

    // Read the ad type from the cookie
    $adType = isset($_COOKIE['adType']) ? $_COOKIE['adType'] : 'desktop-ad';

    if ($adType === 'desktop-ad') {
        $file_path = ABSPATH . 'wp-content/themes/icvtheme/oglasi/sport/' . $desktop_ad;
    } else {
        $file_path = ABSPATH . 'wp-content/themes/icvtheme/oglasi/sport/' . $mobile_ad;
    }

    if (!empty($file_path) && file_exists($file_path)) {
        include($file_path);
    } else {
        echo 'File not found or invalid ad type';
    }

?>

<?php

// Construct the full path to the file
$file_path = ABSPATH . 'wp-content/themes/icvtheme/nav/secondary-nav/sport-sec-nav.php';

// Check if the file exists before including it
if (file_exists($file_path)) {
    include($file_path);
} else {}

?>

<section class="container-mainxaside">

    <main class="main-naslovnica">

        <?php include ('sport.php') ?>

        <?php

            $desktop_ad = 'oglas2.php';
            $mobile_ad = 'oglas2-mobile.php';

            // Read the ad type from the cookie
            $adType = isset($_COOKIE['adType']) ? $_COOKIE['adType'] : 'desktop-ad';

            if ($adType === 'desktop-ad') {
                $file_path = ABSPATH . 'wp-content/themes/icvtheme/oglasi/sport/' . $desktop_ad;
            } else {
                $file_path = ABSPATH . 'wp-content/themes/icvtheme/oglasi/sport/' . $mobile_ad;
            }

            if (!empty($file_path) && file_exists($file_path)) {
                include($file_path);
            } else {
                echo 'File not found or invalid ad type';
            }

        ?>

        <?php include ('nogomet.php') ?>

        <?php

            $desktop_ad = 'oglas3.php';
            $mobile_ad = 'oglas3-mobile.php';

            // Read the ad type from the cookie
            $adType = isset($_COOKIE['adType']) ? $_COOKIE['adType'] : 'desktop-ad';

            if ($adType === 'desktop-ad') {
                $file_path = ABSPATH . 'wp-content/themes/icvtheme/oglasi/sport/' . $desktop_ad;
            } else {
                $file_path = ABSPATH . 'wp-content/themes/icvtheme/oglasi/sport/' . $mobile_ad;
            }

            if (!empty($file_path) && file_exists($file_path)) {
                include($file_path);
            } else {
                echo 'File not found or invalid ad type';
            }

        ?>

        <?php include ('rukomet-kosarka.php') ?>

        <?php

            $desktop_ad = 'oglas4.php';
            $mobile_ad = 'oglas4-mobile.php';

            // Read the ad type from the cookie
            $adType = isset($_COOKIE['adType']) ? $_COOKIE['adType'] : 'desktop-ad';

            if ($adType === 'desktop-ad') {
                $file_path = ABSPATH . 'wp-content/themes/icvtheme/oglasi/sport/' . $desktop_ad;
            } else {
                $file_path = ABSPATH . 'wp-content/themes/icvtheme/oglasi/sport/' . $mobile_ad;
            }

            if (!empty($file_path) && file_exists($file_path)) {
                include($file_path);
            } else {
                echo 'File not found or invalid ad type';
            }

        ?>

        <?php include ('ostali-sportovi.php') ?>

        <?php

            $desktop_ad = 'oglas5.php';
            $mobile_ad = 'oglas5-mobile.php';

            // Read the ad type from the cookie
            $adType = isset($_COOKIE['adType']) ? $_COOKIE['adType'] : 'desktop-ad';

            if ($adType === 'desktop-ad') {
                $file_path = ABSPATH . 'wp-content/themes/icvtheme/oglasi/sport/' . $desktop_ad;
            } else {
                $file_path = ABSPATH . 'wp-content/themes/icvtheme/oglasi/sport/' . $mobile_ad;
            }

            if (!empty($file_path) && file_exists($file_path)) {
                include($file_path);
            } else {
                echo 'File not found or invalid ad type';
            }

        ?>
        
        <?php include ('skolski-sport.php') ?>

        <?php

            $desktop_ad = 'oglas6.php';
            $mobile_ad = 'oglas6-mobile.php';

            // Read the ad type from the cookie
            $adType = isset($_COOKIE['adType']) ? $_COOKIE['adType'] : 'desktop-ad';

            if ($adType === 'desktop-ad') {
                $file_path = ABSPATH . 'wp-content/themes/icvtheme/oglasi/sport/' . $desktop_ad;
            } else {
                $file_path = ABSPATH . 'wp-content/themes/icvtheme/oglasi/sport/' . $mobile_ad;
            }

            if (!empty($file_path) && file_exists($file_path)) {
                include($file_path);
            } else {
                echo 'File not found or invalid ad type';
            }

        ?>

        <?php include ('sportski-vremeplov.php') ?>

    </main>
    
</section>
<!-- .container-mainxaside -->