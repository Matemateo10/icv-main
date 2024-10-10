<?php get_header(); 

include(get_ad_file(1));

include(get_secondary_nav_file());
?>

<section class="container-mainxaside">

    <main class="main-naslovnica">

        <?php include ('stranice/zupanije/zupanije.php');
        
        include(get_ad_file(2));

        include ('stranice/zupanije/vpz.php');

        include(get_ad_file(3));        

        include ('stranice/zupanije/kkz.php');

        include(get_ad_file(4));     

        include ('stranice/zupanije/obz.php');

        ?>

    </main>
    <!-- .main-naslovnica -->
    
</section>
<!-- .container-mainxaside -->

<?php get_footer(); ?>
