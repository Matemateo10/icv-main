<nav class="container-nav2nd">

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


    <ul class="vijesti-nav" id="impressum">

        <li>

            <a class="impressum-c-c" href="/impressum">Impressum</a>
            <!-- .impressum-c-c -->

        </li>

        <li>

            <a class="pristup-informacijama-c-c" href="/pristup-informacijama">Pristup informacijama</a>
            <!-- .pristup-informacijama-c-c -->

        </li>

        <li>

            <a class="pravila-ponasanja-c-c" href="/pravila-ponasanja">Pravila ponašanja</a>
            <!-- .pravila-ponasanja-c-c -->

        </li>

        <li>

            <a class="uvjeti-koristenja-c-c" href="/uvjeti-koristenja">Uvjeti korištenja</a>
            <!-- .uvjeti-koristenja-c-c -->

        </li>

        <li>

            <a class="vazni-dokumenti-c-c" href="/vazni-dokumenti">Važni dokumenti</a>
            <!-- .vazni-dokumenti-c-c -->

        </li>

        <li>

            <a class="kontakt-c-c" href="/kontakt">Kontakt</a>
            <!-- .kontakt-c-c -->

        </li>

    </ul>
    <!-- .vijesti-nav #impressum -->

</nav>
<!-- .container-nav -->