<?php
/**
 * Template Name: Single page - Stranica za pokazivanje postova
 *
 * Displays Single page.
 *
 * @package ICV
 * @since ICV 1.0
 */

?>

<?php get_header(); ?>

<?php

$desktop_ad = 'oglas1.php';
$mobile_ad = 'oglas1-mobile.php';

// Read the ad type from the cookie
$adType = isset($_COOKIE['adType']) ? $_COOKIE['adType'] : 'desktop-ad';

if ($adType === 'desktop-ad') {
    $file_path = ABSPATH . 'wp-content/themes/icvtheme/oglasi/naslovnica/' . $desktop_ad;
} else {
    $file_path = ABSPATH . 'wp-content/themes/icvtheme/oglasi/naslovnica/' . $mobile_ad;
}

if (!empty($file_path) && file_exists($file_path)) {
    include($file_path);
} else {
    echo 'File not found or invalid ad type';
}

?>

<main class="container-mainxaside">

    <section class="main-single">

        <?php 
        
            if(have_posts()){

                the_post();

            }

        ?>

        <div class="single-category <?php 
    $current_url = $_SERVER['REQUEST_URI']; // Get the current URL path

    // Check if the current URL contains "/sport"
    if (strpos($current_url, '/sport') !== false) {
        echo 'sport-category'; // Add a custom class if the URL contains "/sport"
    } elseif (strpos($current_url, '/promo') !== false) {
        echo 'promo-category'; // Add a custom class if the URL contains "/sport"
    } elseif (strpos($current_url, '/posljednji-pozdrav') !== false) {
        echo 'pp-category'; // Add a custom class if the URL contains "/sport"
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
        <!-- .single-category -->

        <h1 id="post-title" class="<?php $current_url = $_SERVER['REQUEST_URI']; // Get the current URL path

            // Check if the current URL contains "/sport"
            if (strpos($current_url, '/sport') !== false) {
                echo 'sport-page'; // Add a custom class if the URL contains "/sport"
            } elseif (strpos($current_url, '/promo') !== false) {
                echo 'promo-page'; // Add a custom class if the URL contains "/sport"
            } elseif (strpos($current_url, '/posljednji-pozdrav') !== false) {
                echo 'pp-page'; // Add a custom class if the URL contains "/sport"
            }
            
            ?>">
            
            <?php the_title();?>
    
        </h1>
        <!-- #post-title -->

        <article class="post-date-single"><?php include('pomocne/date.php')?></article>
        <!-- .post-date-single -->

        <article class="social-sharing">

            <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode(get_permalink()); ?>" target="_blank">
                    
                <img src="<?php echo get_stylesheet_directory_uri();?>/slike/facebook-single.png" alt="facebook-share">
            
            </a>

            <a href="https://twitter.com/intent/tweet?url=<?php echo urlencode(get_permalink()); ?>" target="_blank">
                    
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/slike/twitter-single.png" alt="twitter-share">
                
            </a>
                
            <a href="https://www.linkedin.com/sharing/share-offsite/?url=<?php echo urlencode(get_permalink()); ?>" target="_blank">
                
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/slike/linkendin-single.png" alt="linkendin-share">
            
            </a>
            
            <a href="https://pinterest.com/pin/create/button/?url=<?php echo urlencode(get_permalink()); ?>&media=<?php echo urlencode(get_the_post_thumbnail_url()); ?>&description=<?php echo urlencode(get_the_excerpt()); ?>" target="_blank">
                
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/slike/pinterest-single.png" alt="pinterest-share">
            
            </a>

        </article>
        <!-- social-sharing -->

        <article class="post-pic-single">

            <?php 

                if (has_post_thumbnail()) {
                    // Get the ID of the featured image
                    $thumbnail_id = get_post_thumbnail_id();
                    
                    // Display the featured image
                    the_post_thumbnail('post-thumbnail', array('class' => 'single-mainpic'));
                    
                    // Get the caption of the featured image
                    $caption = wp_get_attachment_caption($thumbnail_id);

            ?>

        </article>

        <article>

        <?php
        
        // Display the caption if it exists
        if ($caption) {
            echo '<article class="caption">';
            echo '<img src="' . get_stylesheet_directory_uri() . '/slike/camera.png" alt="foto">';
            echo '<p class="image-caption">' . esc_html($caption) . '</p>';
            echo '</article>';
        }
        }
        ?>
        </article>

        <article class="post-content">

        <?php
            // Get the post content and apply paragraphs using wpautop
            $post_content = apply_filters('the_content', get_the_content());

            // Explode the post content into an array of paragraphs
            $paragraphs = explode('</p>', $post_content);

            // Total number of paragraphs
            $total_paragraphs = count($paragraphs);

            // Define different ads in an array
            $ads = array(
                '<div id="midasWidget__10666"></div>',
                '<div class="ad"><h1>Advertisement 2</h1><!-- Your ad content goes here --></div>',
                '<div class="ad"><h1>Advertisement 3</h1><!-- Your ad content goes here --></div>',
                '<div class="ad"><h1>Advertisement 4</h1><!-- Your ad content goes here --></div>',
                '<div class="ad"><h1>Advertisement 5</h1><!-- Your ad content goes here --></div>',
                '<div class="ad"><h1>Advertisement 6</h1><!-- Your ad content goes here --></div>',
                // Add more ad entries as needed
            );

            // Set the index for the current ad
            $current_ad_index = 0;

            // Counter variable to keep track of the paragraphs
            $paragraph_counter = 0;

            // Loop through each paragraph
            foreach ($paragraphs as $paragraph) {
                // Increment the paragraph counter
                $paragraph_counter++;

                // Display the paragraph
                echo $paragraph . '</p>';

                // Check if it's time to insert an ad
                if ($paragraph_counter % 2 === 0 && $current_ad_index < count($ads)) {
                    // Insert the current ad
                    echo $ads[$current_ad_index];
                    $current_ad_index++;
                }
            }
    
        ?>

        </article>
        <!-- .post-content -->

        <article>

            <div id="midasWidget__10665"></div>

        </article>

    </section>
    <!-- .main-naslovnica -->

    <aside class="slager-aside">

        <div class="relative">

            <div class="news-section mb-30">

                <div class="news-tabs">

                    <div class="news-tabs-div1">

                        <button class="news-tab active" data-tab="najnovije">Najnovije</button>
                        <!-- .news-tab -->

                    </div>
                    <!-- .news-tabs-div1 -->

                    <div class="news-tabs-div2">
                    
                        <button class="news-tab" data-tab="najcitanije">Najčitanije</button>
                        <!-- news.tab -->

                    </div>
                    <!-- .news.tabs.div2 -->

                </div>
                <!-- .news-tabs -->

                <div class="news-content">

                    <div class="news-tab-content active" id="najnovije">

                        <!-- Najnoviji postovi će se pokazati ovdje -->
                        <?php get_latest_posts(); ?>

                    </div>
                    <!-- .news-tab-content #najnovije-->

                    <div class="news-tab-content" id="najcitanije">

                        <!-- Najcitaniji postovi će se pokazati ovdje -->
                        <?php get_most_read_posts(); ?>

                    </div>
                    <!-- .news-tab-content #najcitanije -->

                </div>
                <!-- .news.content -->

            </div>
            <!-- .news-section .mb-30 -->

        </div>
        <!-- .relative -->

        <div class="sticky">

            <div class="slager-aside-oglas">

                <img src="<?php echo get_stylesheet_directory_uri()?>/slike/obrazuj.png" alt="oglas-šlager">

            </div>
            <!-- slager-aside-oglas -->

            <div class="slager-aside-oglas">

                <img src="<?php echo get_stylesheet_directory_uri()?>/slike/obrazuj.png" alt="oglas-šlager">

            </div>
            <!-- slager-aside-oglas -->

        </div>
        <!-- sticky -->
         
    </aside>
    <!-- .slager-aside -->

    <section class="promo-single">

        <a class="naslov">

            <h1>Promo</h1>

            <p class="icv-naslov mb-30">INFORMATIVNI CENTAR VIROVITICA</p>
            <!-- icv-naslov .mb-30 -->

        </a>
        <!-- .naslov -->

    </section>

    <section class="povezane-vijesti-single">
    
        <article class="naslov">

            <h1>Povezane vijesti</h1>

            <p class="icv-naslov mb-30">INFORMATIVNI CENTAR VIROVITICA</p>
            <!-- .icv-naslov .mb-30 -->

        </article>
        <!-- .naslov -->

        <article class="slagerx4 <?php $current_url = $_SERVER['REQUEST_URI']; // Get the current URL path

            // Check if the current URL contains "/sport"
            if (strpos($current_url, '/sport') !== false) {
                echo 'sport-slagerx3'; // Add a custom class if the URL contains "/sport"
            } elseif (strpos($current_url, '/promo') !== false) {
                echo 'promo-slagerx4'; // Add a custom class if the URL contains "/sport"
            } elseif (strpos($current_url, '/posljednji-pozdrav') !== false) {
                echo 'pp-slagerx4'; // Add a custom class if the URL contains "/sport"
            }
        ?>">

            <?php
            // Get the current post's categories and tags as arrays of term IDs
            $categories = wp_get_post_categories(get_the_ID());

            $promo_category = get_category_by_slug('promo');

            // Check if the post is in the promo category
            if (in_array($promo_category->term_id, $categories)) {
                // If the post is in the promo category, only show related posts from the promo category
                $categories = array($promo_category->term_id);
            }

            // Get the current post's publication date
            $post_date = get_the_date('Y-m-d', get_the_ID());

            // Prepare arguments for the related posts query
            $args = array(
                'post__not_in' => array(get_the_ID()), // Exclude the current post from the results
                'posts_per_page' => 4, // Number of related posts to display
                'orderby' => 'rand', // Display random related posts
                'category__in' => $categories, // Show posts that share at least one category (or only promo if applicable)
                'date_query' => array( // Limit posts to within 10 days before and after the current post date
                    array(
                        'after' => date('Y-m-d', strtotime($post_date . ' -60 days')),
                        'before' => date('Y-m-d', strtotime($post_date . ' +60 days')),
                        'inclusive' => true, // Include posts published on the exact start and end dates
                    ),
                ),
            );

            // Query the related posts
            $related_query = new WP_Query($args);

            // Check if there are related posts
            if ($related_query->have_posts()) {
                while ($related_query->have_posts()) {
                $related_query->the_post();
                // Display the related post information (title, excerpt, etc.)

                // Get the post permalink
                $post_permalink = get_permalink();

                // Trim post title
                $title = get_the_title(); 
                ?>
                
                <div class="slagerx4-main">
                
                    <a class="slagerx4-postdiv" href="<?php echo $post_permalink; ?>">
                        
                            <?php if (has_post_thumbnail()) {
                                the_post_thumbnail('post-thumbnail', array('class' => 'slagerx4-post-pic'));
                            }?>
                            <!-- .slagerx4-post-pic -->

                    </a>
                    <!-- .slagerx4-postdiv -->

                    <div class="slagerx4-category <?php change_category_color();?>">

                        <?php

                            // Construct the full path to the file
                            $file_path = ABSPATH . 'wp-content/themes/icvtheme/pomocne/kategorije.php';

                            // Check if the file exists before including it
                            if (file_exists($file_path)) {
                                include($file_path);
                            } else {}

                        ?>

                    </div>
                    <!-- .slagerx4-category -->

                    <a class="slagerx4-post-title" href="<?php echo $post_permalink; ?>">

                        <h1><?php echo $title; ?></h1>

                    </a>
                    <!-- .slagerx4-post-title -->


                </div>
                <!-- slagerx4-main-->

                <?php
                }
                // Restore the global post data
                wp_reset_postdata();
            } else {
                // No related posts found, you can display a fallback message if needed
                echo '<p>Nema povezanih vijesti</p>';
            }
            ?>

        </article>
        <!-- .slagerx4 -->

    </section>

</main>

<?php get_footer();?>
