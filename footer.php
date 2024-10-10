<?php
/**
 * Template za footer
 *
 *
 * @package ICV
 * @since ICV 1.0
 */

?>

<?php wp_footer();

include ('nav/trazilica.php');

?>

<footer class="footer container-mainxaside">

    <section class="footer-logo">

        <?php

            // Get the current page URL
            $current_url = filter_var($_SERVER['REQUEST_URI'], FILTER_SANITIZE_URL);

            // Determine the logo image based on the current URL
            $logo_src = get_stylesheet_directory_uri() . '/slike/logo-footer.png'; // Default logo

            $id_sport_promo = '';

            if (strpos($current_url, '/sport') !== false) {

                $logo_src = get_stylesheet_directory_uri() . '/slike/logo-footer-sport.png';
                $id_sport_promo = 'sport-footer';

            } elseif (strpos($current_url, '/promo') !== false) {

                $logo_src = get_stylesheet_directory_uri() . '/slike/logo-footer-promo.png';
                $id_sport_promo = 'promo-footer';

            } elseif (strpos($current_url, '/posljednji-pozdrav') !== false) {

                $logo_src = get_stylesheet_directory_uri() . '/slike/logo-footer-pp.png';
                $id_sport_promo = 'posljednji-pozdrav-footer';

            } else {};

        ?>
        
        <a href="/">

            <img src="<?php echo $logo_src; ?>" alt="ICV">

        </a>

        <p id="<?php echo $id_sport_promo?>">REGIONALNI PORTAL</p>

    </section>
    <!-- footer-logo -->

    <?php wp_nav_menu( array( 'theme_location' => 'footer-menu' ) ); ?>

    <div id="prozor-arrowa" class="<?php $current_url = $_SERVER['REQUEST_URI']; // Get the current URL path

        // Check if the current URL contains "/sport"
        if (strpos($current_url, '/sport') !== false) {
            echo 'prozor-sport'; // Add a custom class if the URL contains "/sport"
        } elseif (strpos($current_url, '/promo') !== false) {
            echo 'prozor-promo'; // Add a custom class if the URL contains "/sport"
        } elseif (strpos($current_url, '/posljednji-pozdrav') !== false) {
            echo 'prozor-pp'; // Add a custom class if the URL contains "/sport"
        }

        ?>">

        <img src="<?php echo get_stylesheet_directory_uri()?>/slike/arrow.png" alt="arrow">

    </div>
    <!-- #prozor-arrowa -->

</footer>