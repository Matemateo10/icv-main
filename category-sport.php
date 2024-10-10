<?php get_header();

include(get_ad_file(1));


// Include secondary nav
$file_path = ABSPATH . 'wp-content/themes/icvtheme/nav/secondary-nav/sport.php';
if (file_exists($file_path)) {
    include($file_path);
}
?>

<section class="container-mainxaside">

    <main class="main-naslovnica">

        <?php include ('stranice/sport/sport.php');
        
        include(get_ad_file(2));

        include ('stranice/sport/nogomet.php');

        include(get_ad_file(3));        

        include ('stranice/sport/rukomet-kosarka.php');

        include(get_ad_file(4));      

        include ('stranice/sport/ostali-sportovi.php');
        
        include(get_ad_file(5));

        include ('stranice/sport/skolski-sport.php');

        include(get_ad_file(6));

        include ('stranice/sport/sportski-vremeplov.php');
        
        ?>

    </main>
    <!-- .main-naslovnica -->
    
</section>
<!-- .container-mainxaside -->

<?php get_footer(); ?>
