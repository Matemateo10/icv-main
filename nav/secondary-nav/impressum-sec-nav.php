<nav class="secondary-nav">

    <?php 

    // Get the current page URL
    $current_url = $_SERVER['REQUEST_URI'];

    // Check if the URL mathces a certain pattern
    if (strpos($current_url, '/impressum/') !== false){

        // Include the corresponding h1 element
        echo '<h1 class="impressum-naslov">Impressum</h1>';

    } elseif (strpos($current_url, '/pristup-informacijama/') !== false){

        // Include the corrensponding h1 element
        echo '<h1 class="impressum-naslov">Pristup informacijama</h1>';

    } elseif (strpos($current_url, '/pravila-ponasanja/') !== false){

        // Include the corrensponding h1 element
        echo '<h1 class="impressum-naslov">Pravila ponašanja</h1>';

    } elseif (strpos($current_url, '/uvjeti-koristenja/') !== false){

        // Include the corrensponding h1 element
        echo '<h1 class="impressum-naslov">Uvjeti korištenja</h1>';

    } elseif (strpos($current_url, '/vazni-dokumenti/') !== false){

        // Include the corrensponding h1 element
        echo '<h1 class="impressum-naslov">Važni dokumenti</h1>';
        
    } elseif (strpos($current_url, '/kontakt/') !== false){

        // Include the corrensponding h1 element
        echo '<h1 class="impressum-naslov">Kontakt</h1>';
        
    }

    ?>


<?php wp_nav_menu( array( 'theme_location' => 'impressum-menu' ) ); ?>

</nav>
<!-- .secondary-nav -->