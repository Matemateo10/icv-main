<?php

$desktop_ad = 'oglas1.php';
$mobile_ad = 'oglas1-mobile.php';

// Check the user agent for mobile device
function is_mobile() {
    return preg_match('/Mobile|Android|BlackBerry|IEMobile|Opera Mini/i', $_SERVER['HTTP_USER_AGENT']);
}

// Read the ad type from the cookie or detect it
if (!isset($_COOKIE['adType'])) {
    $adType = is_mobile() ? 'mobile-ad' : 'desktop-ad';
    setcookie('adType', $adType, time() + 3600, "/"); // Set the cookie for an hour
} else {
    $adType = $_COOKIE['adType'];
}

// Determine the file path based on the ad type
if ($adType === 'desktop-ad') {
    $file_path = ABSPATH . 'wp-content/themes/icvtheme/oglasi/naslovnica/' . $desktop_ad;
} else {
    $file_path = ABSPATH . 'wp-content/themes/icvtheme/oglasi/naslovnica/' . $mobile_ad;
}

if (!empty($file_path) && file_exists($file_path)) {
    include($file_path);
} else {
    echo 'File not found or invalid ad type';
}
?>


<section class="container-mainxaside-main">

    <main class="main-naslovnica">

        <?php include ('featured.php') ?>

        <?php

            $desktop_ad = 'oglas2.php';
            $mobile_ad = 'oglas2-mobile.php';

            // Read the ad type from the cookie
            $adType = isset($_COOKIE['adType']) ? $_COOKIE['adType'] : 'desktop-ad';

            if ($adType === 'desktop-ad') {
                $file_path = ABSPATH . 'wp-content/themes/icvtheme/oglasi/naslovnica/' . $desktop_ad;
            } else {
                $file_path = ABSPATH . 'wp-content/themes/icvtheme/oglasi/naslovnica/' . $mobile_ad;
            }

            if (!empty($file_path) && file_exists($file_path)) {
                include($file_path);
            } else {
                echo 'File not found or invalid ad type';
            }

        ?>

        <?php include ('vijesti.php') ?>

            <?php

                $desktop_ad = 'oglas3.php';
                $mobile_ad = 'oglas3-mobile.php';

                // Read the ad type from the cookie
                $adType = isset($_COOKIE['adType']) ? $_COOKIE['adType'] : 'desktop-ad';

                if ($adType === 'desktop-ad') {
                    $file_path = ABSPATH . 'wp-content/themes/icvtheme/oglasi/naslovnica/' . $desktop_ad;
                } else {
                    $file_path = ABSPATH . 'wp-content/themes/icvtheme/oglasi/naslovnica/' . $mobile_ad;
                }

                if (!empty($file_path) && file_exists($file_path)) {
                    include($file_path);
                } else {
                    echo 'File not found or invalid ad type';
                }

            ?>

        <?php include ('promo.php') ?>

            <?php

                $desktop_ad = 'oglas4.php';
                $mobile_ad = 'oglas4-mobile.php';

                // Read the ad type from the cookie
                $adType = isset($_COOKIE['adType']) ? $_COOKIE['adType'] : 'desktop-ad';

                if ($adType === 'desktop-ad') {
                    $file_path = ABSPATH . 'wp-content/themes/icvtheme/oglasi/naslovnica/' . $desktop_ad;
                } else {
                    $file_path = ABSPATH . 'wp-content/themes/icvtheme/oglasi/naslovnica/' . $mobile_ad;
                }

                if (!empty($file_path) && file_exists($file_path)) {
                    include($file_path);
                } else {
                    echo 'File not found or invalid ad type';
                }

            ?>
        
        <?php include ('virovitica.php') ?>

            <?php

                $desktop_ad = 'oglas5.php';
                $mobile_ad = 'oglas5-mobile.php';

                // Read the ad type from the cookie
                $adType = isset($_COOKIE['adType']) ? $_COOKIE['adType'] : 'desktop-ad';

                if ($adType === 'desktop-ad') {
                    $file_path = ABSPATH . 'wp-content/themes/icvtheme/oglasi/naslovnica/' . $desktop_ad;
                } else {
                    $file_path = ABSPATH . 'wp-content/themes/icvtheme/oglasi/naslovnica/' . $mobile_ad;
                }

                if (!empty($file_path) && file_exists($file_path)) {
                    include($file_path);
                } else {
                    echo 'File not found or invalid ad type';
                }

            ?>

        <?php include ('icv-price.php') ?>

            <?php

                $desktop_ad = 'oglas6.php';
                $mobile_ad = 'oglas6-mobile.php';

                // Read the ad type from the cookie
                $adType = isset($_COOKIE['adType']) ? $_COOKIE['adType'] : 'desktop-ad';

                if ($adType === 'desktop-ad') {
                    $file_path = ABSPATH . 'wp-content/themes/icvtheme/oglasi/naslovnica/' . $desktop_ad;
                } else {
                    $file_path = ABSPATH . 'wp-content/themes/icvtheme/oglasi/naslovnica/' . $mobile_ad;
                }

                if (!empty($file_path) && file_exists($file_path)) {
                    include($file_path);
                } else {
                    echo 'File not found or invalid ad type';
                }

            ?>

        <?php include ('zupanije.php') ?>

            <?php

                $desktop_ad = 'oglas7.php';
                $mobile_ad = 'oglas7-mobile.php';

                // Read the ad type from the cookie
                $adType = isset($_COOKIE['adType']) ? $_COOKIE['adType'] : 'desktop-ad';

                if ($adType === 'desktop-ad') {
                    $file_path = ABSPATH . 'wp-content/themes/icvtheme/oglasi/naslovnica/' . $desktop_ad;
                } else {
                    $file_path = ABSPATH . 'wp-content/themes/icvtheme/oglasi/naslovnica/' . $mobile_ad;
                }

                if (!empty($file_path) && file_exists($file_path)) {
                    include($file_path);
                } else {
                    echo 'File not found or invalid ad type';
                }

            ?>

        <?php include ('opcine.php') ?>

            <?php

                $desktop_ad = 'oglas8.php';
                $mobile_ad = 'oglas8-mobile.php';

                // Read the ad type from the cookie
                $adType = isset($_COOKIE['adType']) ? $_COOKIE['adType'] : 'desktop-ad';

                if ($adType === 'desktop-ad') {
                    $file_path = ABSPATH . 'wp-content/themes/icvtheme/oglasi/naslovnica/' . $desktop_ad;
                } else {
                    $file_path = ABSPATH . 'wp-content/themes/icvtheme/oglasi/naslovnica/' . $mobile_ad;
                }

                if (!empty($file_path) && file_exists($file_path)) {
                    include($file_path);
                } else {
                    echo 'File not found or invalid ad type';
                }

            ?>

        <?php include ('sport.php') ?>

            <?php

                $desktop_ad = 'oglas9.php';
                $mobile_ad = 'oglas9-mobile.php';

                // Read the ad type from the cookie
                $adType = isset($_COOKIE['adType']) ? $_COOKIE['adType'] : 'desktop-ad';

                if ($adType === 'desktop-ad') {
                    $file_path = ABSPATH . 'wp-content/themes/icvtheme/oglasi/naslovnica/' . $desktop_ad;
                } else {
                    $file_path = ABSPATH . 'wp-content/themes/icvtheme/oglasi/naslovnica/' . $mobile_ad;
                }

                if (!empty($file_path) && file_exists($file_path)) {
                    include($file_path);
                } else {
                    echo 'File not found or invalid ad type';
                }

            ?>

        <?php include ('icv-radio.php') ?>

    </main>
    
</section>
<!-- .container-mainxaside -->