<?php get_header(); ?>

<?php include ('nav/trazilica.php');?>

<main class="container-mainxaside">
    <h1 class="trazilica-naslov mt-30 mb-30">Rezultati pretrage za: "<?php echo htmlspecialchars(get_search_query()); ?>"</h1>

    <div class="trazilica-rezultati-container" id="search-results-container">
        <?php
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        $args = array(
            'post_type' => 'post', // Only include posts
            's' => get_search_query(),
            'posts_per_page' => 10, // Number of items to show initially
            'paged' => $paged
        );
        $search_query = new WP_Query($args);

        if ($search_query->have_posts()) {
            while ($search_query->have_posts()) {
                $search_query->the_post();

                // Get the post permalink
                $post_permalink = get_permalink();

                // Trim post title
                $title = get_the_title(); 
                
                $excerpt = get_the_excerpt();

            ?>
                
                <div class="trazilica-rezultati-link">
                
                    <a class="trazilica-pic-link" href="<?php echo $post_permalink; ?>">

                        <div class="trazilica-pic-container">
                        
                            <?php if (has_post_thumbnail()) {
                                the_post_thumbnail('post-thumbnail', array('class' => 'trazilica-pic'));
                            }?>
                            <!-- .trazilica-pic -->

                        </div>    

                    </a>
                    <!-- .trazilica-pic-container -->

                    <div class="trazilica-post-page">

                        <div class="trazilica-category 
                        
                        <?php 
                            // Define the parent category (e.g., 'sport')
                            $sport_parent_category_id = get_category_by_slug('sport')->term_id; 

                            // Get all the categories assigned to the current post
                            $post_categories = get_the_category();

                            // Flag to check if any category is a child of 'sport'
                            $is_sport_category = false;

                            // Loop through post categories and check if any has the parent as 'sport'
                            foreach ($post_categories as $category) {
                                // Check if this category or its ancestors belong to 'sport'
                                if ($category->parent == $sport_parent_category_id || $category->term_id == $sport_parent_category_id) {
                                    $is_sport_category = true;
                                    break;
                                }
                            }

                            // Output the class based on the category
                            if ($is_sport_category) {
                                echo 'sport-category'; // Custom class for 'sport' and its child categories
                            } elseif (has_category('promo')) {
                                echo 'promo-category'; // Custom class for the 'promo' category
                            } elseif (has_category('posljednji-pozdrav')) {
                                echo 'pp-category'; // Custom class for the 'posljednji-pozdrav' category
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
                        <!-- .slagerx2-category -->

                        <a class="trazilica-post-title" href="<?php echo $post_permalink; ?>">

                            <h1><?php echo $title; ?></h1>

                            <p><?php echo $excerpt; ?></p>

                        </a>
                        <!-- .slagerx2-post-title -->

                    </div>    

                </div>
                <!-- slagerx2-main mb-30 -->
        
        <?php }
            // Output "Load More" button
            $total_pages = $search_query->max_num_pages;
            if ($total_pages > 1 && $paged < $total_pages) { ?>
                <div class="load-more-container">
                    <button id="load-more-btn" data-current-page="<?php echo $paged; ?>" data-total-pages="<?php echo $total_pages; ?>">Učitaj više</button>
                </div>
            <?php }

            wp_reset_postdata();
        } else {
            echo '<p class="trazilica-nema-rez">Nema rezultata.</p>';
        }
        ?>
    </div>
</main>

<?php get_footer(); ?>
