<section class="container-mainxaside">

    <main class="main-naslovnica">

        <?php 
        if (get_query_var('paged')) {

            $paged = get_query_var('paged');

        } else {

            $paged = 1;

        }

        if ($paged == 1) {

            include ('virovitica.php'); 

            include (get_ad_file(2));

        }

        include ('virovitica-all.php') ?>

    </main>
    <!-- .main-naslovnica -->
    
</section>
<!-- .container-mainxaside -->