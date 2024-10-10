    <form role="search" method="get" class="trazilica-forma" id="trazilica-forma" action="<?php echo esc_url(home_url('/')); ?>">

        <label for="search-field" class="search-field">

            <input type="text" id="search-field" class="search-field" placeholder="Pretraži vijesti..." value="<?php echo get_search_query(); ?>" name="s" />

        </label>

        <div class="search-button">

            <button type="submit" id="search-button">

                <img id="search-icon" src="<?php echo get_stylesheet_directory_uri(); ?>/slike/search.png" alt="icv-search">

            </button>

        </div>

    </form>
    
<div class="overlay"></div>
<div onclick="openNav()" class="overlay-hamburger-nav"></div>


