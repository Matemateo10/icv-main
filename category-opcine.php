<?php get_header();

include(get_ad_file(1));


// Include secondary nav
$file_path = ABSPATH . 'wp-content/themes/icvtheme/nav/secondary-nav/opcine.php';
if (file_exists($file_path)) {
    include($file_path);
}
?>

<section class="container-mainxaside">

    <main class="main-naslovnica">

        <?php include ('stranice/opcine/opcine.php');
        
        include(get_ad_file(2));

        include ('stranice/opcine/pitomaca.php');

        include(get_ad_file(3));        

        include ('stranice/opcine/orahovica.php');

        include(get_ad_file(4));      

        include ('stranice/opcine/slatina.php') ?>

    </main>
    <!-- .main-naslovnica -->
    
</section>
<!-- .container-mainxaside -->

<?php get_footer(); ?>
