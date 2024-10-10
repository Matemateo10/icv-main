<section class="container-nav grid-12-nav nav-desktop">

    <article class="nav-logo">

        <a id="logo" href="/">
            
            <img src="<?php echo get_stylesheet_directory_uri()?>/slike/icv-logo.png" alt="icv-logo">
        
        </a>
        <!-- #logo -->

    </article>
    <!-- .nav-logo -->

    <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?> 

    <article class="social">

        <a href="https://www.facebook.com/" target="_blank">
            
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/slike/facebook.png" alt="icv-facebook">
        
        </a>
        
        <a href="https://www.instagram.com/" target="_blank">
            
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/slike/instagram.png" alt="icv-instagram">
        
        </a>

        <a href="https://www.youtube.com/" target="_blank">
            
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/slike/youtube.png" alt="icv-youtube">
        
        </a>

        <a href="javascript:void(0)" id="search-icon-link">
            
            <img id="search-icon" src="<?php echo get_stylesheet_directory_uri(); ?>/slike/search.png" alt="icv-search">
        
            <img id="close-icon" src="<?php echo get_stylesheet_directory_uri();?>/slike/close.png" alt="closeicon">

        </a>

    </article>
    <!-- .social -->


</section>
<!-- .container .grid-12 -->