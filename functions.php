<?php

// Loading in stylesheets

function enqueue_icv_styles() {
    wp_enqueue_style('icv-style', get_stylesheet_directory_uri() . '/style.css');
    wp_enqueue_style('nav-desktop-style', get_stylesheet_directory_uri() . '/style/nav-desktop.css');
    wp_enqueue_style('error-style', get_stylesheet_directory_uri() . '/style/error.css');
    wp_enqueue_style('naslovnica-style', get_stylesheet_directory_uri() . '/style/naslovnica.css');
    wp_enqueue_style('featured-style', get_stylesheet_directory_uri() . '/style/featured.css');
    wp_enqueue_style('footer-style', get_stylesheet_directory_uri() . '/style/footer.css');
    wp_enqueue_style('marketing-style', get_stylesheet_directory_uri() . '/style/marketing.css');
    wp_enqueue_style('impressum-style', get_stylesheet_directory_uri() . '/style/impressum.css');
    wp_enqueue_style('single-style', get_stylesheet_directory_uri() . '/style/single.css');
    wp_enqueue_style('trazilica-page-style', get_stylesheet_directory_uri() . '/style/trazilica.css');
    wp_enqueue_style('tablet-style', get_stylesheet_directory_uri() . '/style/tablet.css');

    // Enqueue Google fonts last
    wp_enqueue_style('Roboto', 'https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap', [], null, 'all');
    wp_enqueue_style('Open Sans', 'https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap', [], null, 'all');
    wp_enqueue_style('Merriweather', 'https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&display=swap', [], null, 'all');
}
add_action('wp_enqueue_scripts', 'enqueue_icv_styles');
// Loading in JavaScript

function enqueue_custom_scripts(){
    
    // Enqueue jQuery from the Google CDN
    wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js', array(), '3.3.1', false);

    // Color change of navigation/footer elements depending where user is
    wp_enqueue_script('color-change', get_template_directory_uri() . '/js/color-change.js', array(), null, true);

    // Najnovije-najcitanije
    wp_enqueue_script('najnovije-najcitanije', get_template_directory_uri() . '/js/najnovije-najcitanije.js', array(), null, true);

    // Table.js
    wp_enqueue_script('table', get_template_directory_uri() . '/js/table.js', array(), null, true);

    // Marketing.js
    wp_enqueue_script('marketing', get_template_directory_uri() . '/js/marketing.js', array(), null, true);

    // Oglas.js
    wp_enqueue_script('oglas.js', get_template_directory_uri() . '/js/oglas.js', array(), null, true );

    // Trazilica.js
    wp_enqueue_script('trazilica.js', get_template_directory_uri() . '/js/trazilica.js', array(), null, true );

    // Trazilica2.js
    wp_enqueue_script('trazilica2.js', get_template_directory_uri() . '/js/trazilica2.js', array(), null, true );

    // OpenNav.js
    wp_enqueue_script('openNav.js', get_template_directory_uri() . '/js/openNav.js', array(), null, true );

    // shrinkNav.js
    wp_enqueue_script('shrinkNav.js', get_template_directory_uri() . '/js/shrinkNav.js', array(), null, true );

    // adjustHeight.js
    wp_enqueue_script('adjustHeight.js', get_template_directory_uri() . '/js/adjustHeight.js', array(), null, true );

    // youtubeEmbed.js
    wp_enqueue_script('youtubeEmbed.js', get_template_directory_uri() . '/js/youtubeEmbed.js', array(), null, true );

    // scrollToTop.js
    wp_enqueue_script('scrollToTop.js', get_template_directory_uri() . '/js/scrollToTop.js', array(), null, true);

    wp_enqueue_script('myAjaxScript.js', get_template_directory_uri() . '/js/myAjaxScript.js', array('jquery'), null, true);

}
add_action( 'wp_enqueue_scripts', 'enqueue_custom_scripts' );

// Adding post thumbnail

function icv_setup(){

    // Dodaj "featured image support"
    add_theme_support('post-thumbnails');

}

add_action('after_setup_theme', 'icv_setup');

// Adding Title-tag

function my_theme_setup(){

    add_theme_support('title-tag');

}

add_action('afrer_setup_theme', 'my_theme_setup');

// Remove thumbnail dimensions

function remove_thumbnail_dimensions($html, $post_id, $post_thumbnail_id, $size, $attr) {

    // Remove width and height attributes
    $html = preg_replace('/(width|height)=\"\d*\"\s/', "", $html);

    // Remove srcset attribute
    $html = preg_replace('/srcset=\".*\"\s/', "", $html);

    return $html;
}

add_filter('post_thumbnail_html', 'remove_thumbnail_dimensions', 10, 5);

//
//
// Registracija menua
function register_icv_menus() {
    register_nav_menu('footer-menu',__( 'Footer Menu' ));
  }
  add_action( 'init', 'register_icv_menus' );


//
//
// Excerpt limit
function custom_excerpt_length($excerpt) {
    return 30; // Change this number to the number of words you want in the excerpt
}
add_filter('excerpt_length', 'custom_excerpt_length', 999);

// Adding Error Page

function custom_error_page_redirect() {
    if (is_404()) { // Customize this condition based on the error type you want to handle
        status_header(200); // Set the status header
        include(get_template_directory() . '/404.php'); // Include your custom error page template
        exit();
    }
}
add_action('template_redirect', 'custom_error_page_redirect');

// Definira URL u slučaju ako su dvije kategorije odabrane, prednost će imati $preferred_categories
// Na taj način URL će biti uvijek isti iako ide na šlager. Što znači, ako je su odabrane aktualno i istaknuto, prednost ce uvijek imati aktualno te ce URL u sebi imati /aktualno/
//
function custom_post_link_category($cat, $cats, $post) {
    // Define the preferred categories in order of preference
    $preferred_categories = array('aktualno', 'crna-kronika', 'hrvatska', 'politika', 'zanimljivosti', 'fotka-dana', 'vjerski-zivot', 'virovitica', 'viroviticko-podravska-zupanija', 'koprivnicko-krizevacka-zupanija', 'osjecko-baranjska-zupanija', 'pitomaca-suhopolje-gradina-spisic-bukovica-lukac', 'orahovica-cacinci-mikleus-zdenci-crnac', 'slatina-sopje-cadavica-vocin-nova-bukovica', 'nogomet', 'kosarka-rukomet', 'ostali-sportovi', 'sportski-vremeplov', 'promo', 'icv-radio', 'posljednji-pozdrav');
    
    // Define the categories to exclude
    $exclude_categories = array('istaknuto', 'istaknuto-vijesti', 'istaknuto-zupanije', 'istaknuto-opcine', 'istaknuto-sport');

    // Loop through the preferred categories first
    foreach ($preferred_categories as $preferred_category_slug) {
        foreach ($cats as $category) {
            if ($category->slug === $preferred_category_slug) {
                return $category;
            }
        }
    }

    // If no preferred category is found, loop through and return the first non-excluded category
    foreach ($cats as $category) {
        if (!in_array($category->slug, $exclude_categories)) {
            return $category;
        }
    }

    // If all categories are excluded, return the default category
    return $cat;
}

// Hook into the 'post_link_category' filter
add_filter('post_link_category', 'custom_post_link_category', 10, 3);


//
//
// Logika za handlanje post countera i najnovije / najčitanije
//
//

// Funkcija za praćenje broja pregleda posta pomoću kolačića
// Sprema kolačić koji traje sat vremena - što znači da se broj pregleda posta neće povećavati na svaki klik, 
// nego samo jednom po korisniku u periodu od sat vremena kako bi se smanjila potrošnja resursa
function track_post_views($post_id) {
    if (!is_single()) {
        return;
    }

    if (empty($post_id)) {
        global $post;
        $post_id = $post->ID;
    }

    // Define a unique cookie name for this post
    $cookie_name = 'post_viewed_' . $post_id;

    // Check if the cookie is set
    if (!isset($_COOKIE[$cookie_name])) {
        // Increment the post view count
        $count_key = 'post_views_count';
        $count = get_post_meta($post_id, $count_key, true);

        if ($count == '') {
            $count = 0;
            delete_post_meta($post_id, $count_key);
            add_post_meta($post_id, $count_key, '0');
        } else {
            $count++;
            update_post_meta($post_id, $count_key, $count);
        }

        // Set the cookie to expire in 24 hours
        setcookie($cookie_name, 'true', time() + 3600, '/');
    }
}
add_action('template_redirect', 'track_post_views');


// Function to track post views using cookies - sa error logovima
/*function track_post_views($post_id) {
    if (!is_single()) {
        error_log('Not a single post page.');
        return;
    }

    if (empty($post_id)) {
        global $post;
        $post_id = $post->ID;
    }

    // Define a unique cookie name for this post
    $cookie_name = 'post_viewed_' . $post_id;

    // Check if the cookie is set
    if (!isset($_COOKIE[$cookie_name])) {
        // Increment the post view count
        $count_key = 'post_views_count';
        $count = get_post_meta($post_id, $count_key, true);

        if ($count == '') {
            $count = 0;
            delete_post_meta($post_id, $count_key);
            add_post_meta($post_id, $count_key, '0');
        } else {
            $count++;
            update_post_meta($post_id, $count_key, $count);
        }

        // Log the view increment
        error_log('Incremented view count for post ID ' . $post_id . '. New count: ' . $count);

        // Set the cookie to expire in 1 hour
        setcookie($cookie_name, 'true', time() + 3600, '/');
        
        // Log the cookie setting
        error_log('Set cookie for post ID ' . $post_id . ' with name ' . $cookie_name);
    } else {
        // Log that the cookie already exists
        error_log('Cookie already exists for post ID ' . $post_id);
    }
}
add_action('template_redirect', 'track_post_views');*/

// Function to display post views
function get_post_views($post_id) {
    $count_key = 'post_views_count';
    $count = get_post_meta($post_id, $count_key, true);
    if ($count == '') {
        delete_post_meta($post_id, $count_key);
        add_post_meta($post_id, $count_key, '0');
        return '0 View';
    }
    return $count . ' Views';
}

// NAJNOVIJE //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//
// Function to get the latest posts
function get_latest_posts() {
    $exclude_category_slug = 'istaknuto'; // The slug of the category to exclude

    $args = array(
        'post_type' => 'post',
        'posts_per_page' => 5,
        'category__not_in' => array(get_category_by_slug($exclude_category_slug)->term_id),
    );

    $query = new WP_Query($args);

    if ($query->have_posts()) {
        while ($query->have_posts()) {
            $query->the_post();
            ?>
            <div class="post-item">

                <div class="post-item-div <?php 

                    // Get the current post categories
                    $categories = get_the_category();

                    // Check if the post belongs to the "Sport" category or its subcategories
                    $sport_category_id = get_cat_ID('Sport'); // Get the ID of the "Sport" category
                    
                    // Initialize a flag to determine if the post belongs to Sport or its subcategories
                    $is_sport_category = false;

                    // Loop through the categories of the post
                    foreach ($categories as $category) {
                        // Check if the category is "Sport" or a subcategory of "Sport"
                        if ($category->term_id == $sport_category_id || cat_is_ancestor_of($sport_category_id, $category->term_id)) {
                            $is_sport_category = true;
                            break;
                        }
                    }

                    // Add the class if it's in the Sport category or a subcategory
                    if ($is_sport_category) {
                        echo 'sport-category'; 
                    }
                ?>">

                    <?php

                        // Construct the full path to the file
                        $file_path = ABSPATH . 'wp-content/themes/icvtheme/pomocne/kategorije.php';

                        // Check if the file exists before including it
                        // if (file_exists($file_path)) {
                           include($file_path);
                        //} else {}

                    ?>

                </div>
                <!-- -->

                <a class="news-naslov" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>

            </div>
            <?php
        }
        wp_reset_postdata();
    } else {
        echo '<p>No posts found.</p>';
    }
}

// NAJČITANIJE ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//
// Function to get the most read posts in the past 7 days
// uzima podatke od funkcije track_post_views() i na taj način određuje šta je načitanije.
function get_most_read_posts() {
    $exclude_category_slug = 'istaknuto'; // The slug of the category to exclude

    // Get the category ID for exclusion
    $exclude_category_id = get_category_by_slug($exclude_category_slug)->term_id;

    // Arguments for the query
    $args = array(
        'post_type' => 'post',
        'posts_per_page' => 5,
        'meta_key' => 'post_views_count', // see line 232
        'orderby' => 'meta_value_num',
        'order' => 'DESC',
        'date_query' => array(
            array(
                'after' => '100 days ago', // Adjust this as necessary
                'inclusive' => true,
            ),
        ),
        'category__not_in' => array($exclude_category_id),
    );

    // Execute the query
    $query = new WP_Query($args);

    if ($query->have_posts()) {
        while ($query->have_posts()) {
            $query->the_post();
            ?>
            <div class="post-item">

                <div class="post-item-div <?php 
                
                    // Get the current post categories
                    $categories = get_the_category();

                    // Check if the post belongs to the "Sport" category or its subcategories
                    $sport_category_id = get_cat_ID('Sport'); // Get the ID of the "Sport" category
                    
                    // Initialize a flag to determine if the post belongs to Sport or its subcategories
                    $is_sport_category = false;

                    // Loop through the categories of the post
                    foreach ($categories as $category) {
                        // Check if the category is "Sport" or a subcategory of "Sport"
                        if ($category->term_id == $sport_category_id || cat_is_ancestor_of($sport_category_id, $category->term_id)) {
                            $is_sport_category = true;
                            break;
                        }
                    }

                    // Add the class if it's in the Sport category or a subcategory
                    if ($is_sport_category) {
                        echo 'sport-category'; 
                    }
                ?>">

                    <?php

                        // Construct the full path to the file
                        $file_path = ABSPATH . 'wp-content/themes/icvtheme/pomocne/kategorije.php';

                        // Check if the file exists before including it
                        if (file_exists($file_path)) {
                            include($file_path);
                        } else {}

                    ?>

                </div>
                <!-- -->

                <a class="news-naslov" href="<?php the_permalink(); ?>"><?php the_title(); ?></a><!--<?php echo get_post_views(get_the_ID()); ?>-->

            </div>
            <?php
        }
        wp_reset_postdata();
    } else {
        echo '<p>No posts found.</p>';
    }
}
//
function load_more_posts() {
    // Get current page and increment it
    $paged = isset($_POST['page']) ? intval($_POST['page']) + 1 : 1;
    $search_query = isset($_POST['search_query']) ? sanitize_text_field($_POST['search_query']) : '';

    $args = array(
        'post_type' => 'post',
        's' => $search_query,
        'posts_per_page' => 10,
        'paged' => $paged,
    );

    $search_query = new WP_Query($args);

    if ($search_query->have_posts()) :
        while ($search_query->have_posts()) : $search_query->the_post();
            // Include your HTML for each post result, matching the format used in your template
            ?>
            <div class="trazilica-rezultati-link">
                <a class="trazilica-pic-link" href="<?php echo get_permalink(); ?>">
                    <div class="trazilica-pic-container">
                        <?php if (has_post_thumbnail()) {
                            the_post_thumbnail('post-thumbnail', array('class' => 'trazilica-pic'));
                        } ?>
                    </div>
                </a>
                <div class="trazilica-post-page">
                    <a class="trazilica-post-title" href="<?php echo get_permalink(); ?>">
                        <h1><?php the_title(); ?></h1>
                        <p><?php echo get_the_excerpt(); ?></p>
                    </a>
                </div>
            </div>
            <?php
        endwhile;
    endif;

    wp_reset_postdata();
    die(); // Required to terminate and send the response
}
add_action('wp_ajax_load_more_posts', 'load_more_posts');
add_action('wp_ajax_nopriv_load_more_posts', 'load_more_posts');

//
//
// Function to determine which ad to show
function get_ad_file($index) {
    
    $desktop_ad = 'oglas' . $index . '.php';
    $mobile_ad = 'oglas-mobile' . $index . '.php';

    // Get current category object
    $category = get_queried_object();

    // Ensure we're working with a valid category object
    if (is_category() && !empty($category)) {
        // Retrieve the slug of the current category
        $category_slug = $category->slug;
    }
    
    // Set ad type based on mobile or desktop
    if (!isset($_COOKIE['adType'])) {
        $adType = is_mobile() ? 'mobile-ad' : 'desktop-ad';
        setcookie('adType', $adType, time() + 3600, "/"); // Set the cookie for an hour
    } else {
        $adType = $_COOKIE['adType'];
    }

    // Build the file path dynamically using the category slug
    if ($adType === 'desktop-ad') {
        return ABSPATH . 'wp-content/themes/icvtheme/oglasi/' . $category_slug . '/' . $desktop_ad;
    } else {
        return ABSPATH . 'wp-content/themes/icvtheme/oglasi/' . $category_slug . '/' . $mobile_ad;
    }
}

?>