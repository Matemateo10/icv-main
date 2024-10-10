<section class="container-nav grid-12-nav nav-mob">

    <article class="nav-logo-mob">

        <a id="logo" href="/">
            
            <img src="<?php echo get_stylesheet_directory_uri()?>/slike/icv-logo-mob.png" alt="icv-logo">
        
        </a>
        <!-- #logo -->

    </article>
    <!-- .nav-logo -->

    <article class="menu-mob">

        <a class="posljednji-c-c" href="/posljednji-pozdrav"><img src="<?php echo get_stylesheet_directory_uri(); ?>/slike/cross-white.png" alt="posljednji pozdrav"></a>

        <a target="_blank" href="https://library.foi.hr/lib/knjiga.php?C=130&grupa=Gradska%20knji%9Enica%20i%20%E8itaonica%20Virovitica&vrsta=ZBI&H=virovitica"><img src="<?php echo get_stylesheet_directory_uri(); ?>/slike/vt-list-white.png" alt="virovitički list"></a>

        <a href="javascript:void(0)" id="search-icon-link2">
            
            <img id="search-icon2" src="<?php echo get_stylesheet_directory_uri(); ?>/slike/search-white.png" alt="icv-search">
        
            <img id="close-icon2" src="<?php echo get_stylesheet_directory_uri();?>/slike/close.png" alt="closeicon">
        
        </a>

        <a href="javascript:void(0)">

            <img id="hamburger" onclick="openNav();" src="<?php echo get_stylesheet_directory_uri();?>/slike/menu.png" alt="hamburger">
            <!-- #hamburger -->

        </a>

    </article>

    <?php wp_nav_menu( array( 'theme_location' => 'mob-header-menu' ) ); ?>

</section>
<!-- container-nav grid-12-nav nav-mob -->


