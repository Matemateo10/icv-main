<article class="featured">

    <a class="naslov" href="/promo">

        <h1 class="promo-border">Promo</h1>
        <!-- .promo-border -->

    </a>
    <!-- .naslov -->

    <p class="icv-naslov mb-30">INFORMATIVNI CENTAR VIROVITICA</p>
    <!-- .icv-naslov .mb-30 -->

    <div class="slagerx4 promo-slagerx4">
                
            <?php
            
            $exclude_category = get_category_by_slug('istaknuto')->term_id;
            $exclude_category2 = get_category_by_slug('istaknuto-vijesti')->term_id;
            $exclude_category3 = get_category_by_slug('istaknuto-virovitica')->term_id;
            $exclude_category4 = get_category_by_slug('istaknuto-zupanije')->term_id;
            $exclude_category5 = get_category_by_slug('istaknuto-opcine')->term_id;
            $exclude_category6 = get_category_by_slug('istaknuto-sport')->term_id;
                
            $args = array(
            'category_name' => 'promo',
            'posts_per_page' => 4, // broj postova po stranici
            'tax_query' => array(
                    array(
                        'taxonomy' => 'category',
                        'field'    => 'id',
                        'terms'    => array($exclude_category, $exclude_category2, $exclude_category3, $exclude_category4, $exclude_category5, $exclude_category6),
                        'operator' => 'NOT IN',
                    ),
                ),
            );

            $query = new WP_Query($args);

            if ($query->have_posts()) {
            $count = 0; // Counter variable

            while ($query->have_posts() && $count < 4) { // Display 4 posts

            $query->the_post();

            // Get the post permalink
            $post_permalink = get_permalink();

            // Trim post title
            $title = get_the_title();     

            // Display your post content here
            ?>

            <div class="slagerx4-main">
                
                <a class="slagerx4-postdiv" href="<?php echo $post_permalink; ?>">
                    
                        <?php if (has_post_thumbnail()) {
                            the_post_thumbnail('post-thumbnail', array('class' => 'slagerx4-post-pic'));
                        }?>
                        <!-- .slagerx4-post-pic -->

                </a>
                <!-- .slagerx4-postdiv -->

                <div class="slagerx4-category" id="category-promo">

                    <?php

                        // Construct the full path to the file
                        $file_path = ABSPATH . 'wp-content/themes/icvtheme/pomocne/kategorije.php';

                        // Check if the file exists before including it
                        if (file_exists($file_path)) {
                            include($file_path);
                        } else {}

                    ?>

                </div>
                <!-- .slagerx3-category -->

                <a class="slagerx4-post-title" href="<?php echo $post_permalink; ?>">

                    <h1><?php echo $title; ?></h1>

                </a>
                <!-- .slagerx3-post-title -->


            </div>
            <!-- slagerx4-main-->

            <?php

            $count++; // Increment the counter
            }
            } else {
            // If no posts are found
            echo 'No posts found.';
            }

            wp_reset_postdata();
            ?>
        
        </div>
        <!-- .slagerx4 -->

</article>
<!-- .featured -->