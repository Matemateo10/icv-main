<?php

    $desktop_ad = 'oglas1.php';
    $mobile_ad = 'oglas1-mobile.php';

    // Read the ad type from the cookie
    $adType = isset($_COOKIE['adType']) ? $_COOKIE['adType'] : 'desktop-ad';

    if ($adType === 'desktop-ad') {
        $file_path = ABSPATH . 'wp-content/themes/icvtheme/oglasi/sport/rukomet-kosarka/' . $desktop_ad;
    } else {
        $file_path = ABSPATH . 'wp-content/themes/icvtheme/oglasi/sport/rukomet-kosarka/' . $mobile_ad;
    }

    if (!empty($file_path) && file_exists($file_path)) {
        include($file_path);
    } else {
        echo 'File not found or invalid ad type';
    }

?>

<?php

// Construct the full path to the file
$file_path = ABSPATH . 'wp-content/themes/icvtheme/nav/secondary-nav/sport-sec-nav.php';

// Check if the file exists before including it
if (file_exists($file_path)) {
    include($file_path);
} else {}

?>

<section class="container-mainxaside">

    <main class="main-naslovnica">

        <article class="featured">

            <div class="slagerx4-all">
                        
                    <?php
                    
                    $posts_per_page = 12; // broj postova po stranici
                    if (get_query_var('paged')) {
                        $paged = get_query_var('paged');
                    } else {
                        $paged = 1;
                    }

                    $args = array(
                        'category_name' => 'rukomet-kosarka',
                        'posts_per_page' => $posts_per_page,
                        'paged' => $paged,
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
                                <!-- .slagerx4-post-pic-all -->

                        </a>
                        <!-- .slagerx4-postdiv-all -->

                        <div class="slagerx4-category-all" id="category-sport">

                            <?php

                                // Construct the full path to the file
                                $file_path = ABSPATH . 'wp-content/themes/icvtheme/pomocne/kategorije.php';

                                // Check if the file exists before including it
                                if (file_exists($file_path)) {
                                    include($file_path);
                                } else {}

                            ?>

                        </div>
                        <!-- .slagerx3-category-all -->

                        <a class="slagerx4-post-title-all" href="<?php echo $post_permalink; ?>">

                            <h1><?php echo $title; ?></h1>

                        </a>
                        <!-- .slagerx3-post-title-all -->


                    </div>
                    <!-- slagerx4-main-all -->

                    <?php

                    $count++; // Increment the counter
                    }
                    
                    // Pagination
                    $big = 999999999; // Set a large value for the 'total' parameter
                    echo '<div class="pagination-sport">';
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
                        <input type="number" class="sport-broj" id="broj-stranice" name="paged" min="1" max="<?php echo $query->max_num_pages; ?>" value="<?php echo $paged; ?>">
                        <input type="submit" class="sport-idi" value="Idi">

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
                <!-- .slagerx4-all -->

        </article>
        <!-- .featured -->
        
    </main>
    <!-- .main-naslovnica -->

</section>
<!-- .container-mainxaside -->