<?php

    $desktop_ad = 'oglas1.php';
    $mobile_ad = 'oglas1-mobile.php';

    // Read the ad type from the cookie
    $adType = isset($_COOKIE['adType']) ? $_COOKIE['adType'] : 'desktop-ad';

    if ($adType === 'desktop-ad') {
        $file_path = ABSPATH . 'wp-content/themes/icvtheme/oglasi/zupanije/' . $desktop_ad;
    } else {
        $file_path = ABSPATH . 'wp-content/themes/icvtheme/oglasi/zupanije/' . $mobile_ad;
    }

    if (!empty($file_path) && file_exists($file_path)) {
        include($file_path);
    } else {
        echo 'File not found or invalid ad type';
    }

?>

<?php

// Construct the full path to the file
$file_path = ABSPATH . 'wp-content/themes/icvtheme/nav/secondary-nav/zupanije-sec-nav.php';

// Check if the file exists before including it
if (file_exists($file_path)) {
    include($file_path);
} else {}

?>

<section class="container-mainxaside">

    <main class="main-naslovnica">

        <?php include ('zupanije.php') ?>

            <?php

                $desktop_ad = 'oglas2.php';
                $mobile_ad = 'oglas2-mobile.php';

                // Read the ad type from the cookie
                $adType = isset($_COOKIE['adType']) ? $_COOKIE['adType'] : 'desktop-ad';

                if ($adType === 'desktop-ad') {
                    $file_path = ABSPATH . 'wp-content/themes/icvtheme/oglasi/zupanije/' . $desktop_ad;
                } else {
                    $file_path = ABSPATH . 'wp-content/themes/icvtheme/oglasi/zupanije/' . $mobile_ad;
                }

                if (!empty($file_path) && file_exists($file_path)) {
                    include($file_path);
                } else {
                    echo 'File not found or invalid ad type';
                }

            ?>

        <?php include ('vpz.php') ?>

            <?php

                $desktop_ad = 'oglas3.php';
                $mobile_ad = 'oglas3-mobile.php';

                // Read the ad type from the cookie
                $adType = isset($_COOKIE['adType']) ? $_COOKIE['adType'] : 'desktop-ad';

                if ($adType === 'desktop-ad') {
                    $file_path = ABSPATH . 'wp-content/themes/icvtheme/oglasi/zupanije/' . $desktop_ad;
                } else {
                    $file_path = ABSPATH . 'wp-content/themes/icvtheme/oglasi/zupanije/' . $mobile_ad;
                }

                if (!empty($file_path) && file_exists($file_path)) {
                    include($file_path);
                } else {
                    echo 'File not found or invalid ad type';
                }

        ?>

        <?php include ('kkz.php') ?>

            <?php

                $desktop_ad = 'oglas4.php';
                $mobile_ad = 'oglas4-mobile.php';

                // Read the ad type from the cookie
                $adType = isset($_COOKIE['adType']) ? $_COOKIE['adType'] : 'desktop-ad';

                if ($adType === 'desktop-ad') {
                    $file_path = ABSPATH . 'wp-content/themes/icvtheme/oglasi/zupanije/' . $desktop_ad;
                } else {
                    $file_path = ABSPATH . 'wp-content/themes/icvtheme/oglasi/zupanije/' . $mobile_ad;
                }

                if (!empty($file_path) && file_exists($file_path)) {
                    include($file_path);
                } else {
                    echo 'File not found or invalid ad type';
                }

            ?>

        <?php include ('obz.php') ?>

    </main>
    <!-- .main-naslovnica -->
    
</section>
<!-- .container-mainxaside -->