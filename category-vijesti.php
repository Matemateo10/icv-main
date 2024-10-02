<?php get_header(); 

include(get_ad_file(1));

// Include secondary nav
$file_path = ABSPATH . 'wp-content/themes/icvtheme/nav/secondary-nav/vijesti.php';
if (file_exists($file_path)) {
    include($file_path);
}
?>

<section class="container-mainxaside">

    <main class="main-naslovnica">

        <?php include ('stranice/vijesti/vijesti.php');
        
        include(get_ad_file(2));

        include ('stranice/vijesti/aktualno.php');

        include(get_ad_file(3));        

        include ('stranice/vijesti/zanimljivosti.php');

        include(get_ad_file(4));     

        include ('stranice/vijesti/crna-kronika.php');
        
        include(get_ad_file(5));

        include ('stranice/vijesti/hrvatska.php');

        include(get_ad_file(6));

        include ('stranice/vijesti/fotka-dana.php');

        include(get_ad_file(7));

        include ('stranice/vijesti/politika.php');

        include(get_ad_file(8));

        include ('stranice/vijesti/vjerski-zivot.php');

        ?>

    </main>
    <!-- .main-naslovnica -->
    
</section>
<!-- .container-mainxaside -->

<?php get_footer(); ?>
