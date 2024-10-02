<?php

// Check the user agent for mobile device
function is_mobile() {
    return preg_match('/Mobile|Android|BlackBerry|IEMobile|Opera Mini/i', $_SERVER['HTTP_USER_AGENT']);
}

// Function to determine which ad to show
function get_ad_file($desktop_ad, $mobile_ad) {
    if (!isset($_COOKIE['adType'])) {
        $adType = is_mobile() ? 'mobile-ad' : 'desktop-ad';
        setcookie('adType', $adType, time() + 3600, "/"); // Set the cookie for an hour
    } else {
        $adType = $_COOKIE['adType'];
    }

    if ($adType === 'desktop-ad') {
        return ABSPATH . 'wp-content/themes/icvtheme/oglasi/posljednji-pozdrav/' . $desktop_ad;
    } else {
        return ABSPATH . 'wp-content/themes/icvtheme/oglasi/posljednji-pozdrav/' . $mobile_ad;
    }
}

// Include first ad
$desktop_ad = 'oglas1.php';
$mobile_ad = 'oglas1-mobile.php';
$file_path = get_ad_file($desktop_ad, $mobile_ad);
if (!empty($file_path) && file_exists($file_path)) {
    include($file_path);
} else {
    echo 'File not found or invalid ad type';
}

?>

<section class="container-mainxaside mt-30">

    <main class="main-naslovnica">

        <article class="featured">

            <div class="slagerx4 pp-slagerx4">
                
                <?php
                // Query and display posts
                $posts_per_page = 12; // Number of posts per page
                $paged = get_query_var('paged') ? get_query_var('paged') : 1;

                $args = array(
                    'category_name' => 'posljednji-pozdrav',
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
                ?>

                    <div class="slagerx4-main-all">
                        
                        <a class="slagerx4-postdiv-all" href="<?php echo $post_permalink; ?>">
                            <?php if (has_post_thumbnail()) {
                                the_post_thumbnail('post-thumbnail', array('class' => 'slagerx4-post-pic-all'));
                            }?>
                        </a>
                        <!-- .slagerx4-postdiv-all -->

                        <div class="slagerx4-category-all" id="category-posljednji-pozdrav">
                            <?php
                            // Include categories file
                            $file_path = ABSPATH . 'wp-content/themes/icvtheme/pomocne/kategorije.php';
                            if (file_exists($file_path)) {
                                include($file_path);
                            }
                            ?>
                        </div>
                        <!-- .slagerx4-category-all -->

                        <a class="slagerx4-post-title-all" href="<?php echo $post_permalink; ?>">
                            <h1><?php echo $title; ?></h1>
                        </a>
                        <!-- .slagerx4-post-title-all -->

                    </div>
                    <!-- .slagerx4-main-all -->

                <?php
                    $count++; // Increment the counter
                    }

                    // Pagination
                    $big = 999999999; // Set a large value for the 'total' parameter
                    echo '<div class="pagination-pp">';
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
                        <input type="number" class="pp-broj" id="broj-stranice" name="paged" min="1" max="<?php echo $query->max_num_pages; ?>" value="<?php echo $paged; ?>">
                        <input type="submit" class="pp-idi" value="Idi">

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
