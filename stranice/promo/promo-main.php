<?php

    // Construct the full path to the file
    $file_path = ABSPATH . 'wp-content/themes/icvtheme/oglasi/promo/oglas1.php';

    // Check if the file exists before including it
    if (file_exists($file_path)) {
        include($file_path);
    } else {}

?>


<section class="container-mainxaside">

    <main class="main-naslovnica">

        <article class="featured">

            <div class="slagerx4-all promo-slagerx4">
                        
                    <?php
                    
                    $posts_per_page = 12; // broj postova po stranici
                    if (get_query_var('paged')) {
                        $paged = get_query_var('paged');
                    } else {
                        $paged = 1;
                    }

                    $exclude_category = get_category_by_slug('istaknuto')->term_id;

                    $args = array(
                        'category_name' => 'promo',
                        'posts_per_page' => $posts_per_page,
                        'paged' => $paged,
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'category',
                                'field'    => 'id',
                                'terms'    => array($exclude_category),
                                'operator' => 'NOT IN',
                            ),
                        ),
                    );
                        
                    $query = new WP_Query($args);

                    if ($query->have_posts()) {
                    $count = 0; // Counter variable

                    while ($query->have_posts()) {

                    $query->the_post();

                    // Get the post permalink
                    $post_permalink = get_permalink();

                    // Trim post title
                    $title = get_the_title();     

                    // Display your post content here
                    ?>

                    <div class="slagerx4-main-all">
                        
                        <a class="slagerx4-postdiv-all" href="<?php echo $post_permalink; ?>">
                            
                                <?php if (has_post_thumbnail()) {
                                    the_post_thumbnail('post-thumbnail', array('class' => 'slagerx4-post-pic-all'));
                                }?>
                                <!-- .slagerx4-post-pic -->

                        </a>
                        <!-- .slagerx4-postdiv -->

                        <div class="slagerx4-category-all" id="category-promo">

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

                        <a class="slagerx4-post-title-all" href="<?php echo $post_permalink; ?>">

                            <h1><?php echo $title; ?></h1>

                        </a>
                        <!-- .slagerx3-post-title -->


                    </div>
                    <!-- slagerx4-main-->

                    <?php

                    $count++; // Increment the counter
                    }
                    
                    // Pagination
                    $big = 999999999; // Set a large value for the 'total' parameter
                    echo '<div class="pagination-promo">';
                    echo paginate_links(array(
                        'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
                        'format' => '?paged=%#%',
                        'current' => max(1, $paged),
                        'total' => $query->max_num_pages,
                        'prev_text' => '&laquo;',
                        'next_text' => '&raquo;',
                    ));
                    echo '</div>';?>

                    <!-- Navigacija po stranicama -->
                    <div class="navigacija-stranica">

                    <form action="" method="get">

                        <label for="broj-stranice">Pretraži po broju stranice:</label>
                        <input type="number" class="promo-broj" id="broj-stranice" name="paged" min="1" max="<?php echo $query->max_num_pages; ?>" value="<?php echo $paged; ?>">
                        <input type="submit" class="promo-idi" value="Idi">

                    </form>

                    </div>
                    
                    <?php

                    wp_reset_postdata();

                    } else {
                    // If no posts are found
                    echo 'No posts found.';
                    }
                    ?>
                
            </div>
            <!-- .slagerx4 -->

        </article>
        <!-- .featured -->
        
    </main>
    <!-- .main-naslovnica -->

</section>
<!-- .container-mainxaside -->