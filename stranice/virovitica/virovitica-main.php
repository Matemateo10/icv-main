<?php

    $desktop_ad = 'oglas1.php';
    $mobile_ad = 'oglas1-mobile.php';

    // Read the ad type from the cookie
    $adType = isset($_COOKIE['adType']) ? $_COOKIE['adType'] : 'desktop-ad';

    if ($adType === 'desktop-ad') {
        $file_path = ABSPATH . 'wp-content/themes/icvtheme/oglasi/virovitica/' . $desktop_ad;
    } else {
        $file_path = ABSPATH . 'wp-content/themes/icvtheme/oglasi/virovitica/' . $mobile_ad;
    }

    if (!empty($file_path) && file_exists($file_path)) {
        include($file_path);
    } else {
        echo 'File not found or invalid ad type';
    }

?>


<section class="container-mainxaside">

    <main class="main-naslovnica">

        <?php 
        if (get_query_var('paged')) {

            $paged = get_query_var('paged');

        } else {

            $paged = 1;

        }

        if ($paged == 1) {

            include ('virovitica.php'); ?>

        <?php

            $desktop_ad = 'oglas2.php';
            $mobile_ad = 'oglas2-mobile.php';

            // Read the ad type from the cookie
            $adType = isset($_COOKIE['adType']) ? $_COOKIE['adType'] : 'desktop-ad';

            if ($adType === 'desktop-ad') {
                $file_path = ABSPATH . 'wp-content/themes/icvtheme/oglasi/virovitica/' . $desktop_ad;
            } else {
                $file_path = ABSPATH . 'wp-content/themes/icvtheme/oglasi/virovitica/' . $mobile_ad;
            }

            if (!empty($file_path) && file_exists($file_path)) {
                include($file_path);
            } else {
                echo 'File not found or invalid ad type';
            }

        ?>


            <?php
        }

        ?>

        <?php include ('virovitica-all.php') ?>

    </main>
    <!-- .main-naslovnica -->
    
</section>
<!-- .container-mainxaside -->