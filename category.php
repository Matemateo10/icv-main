<?php

get_header(); 

if (is_category(array('aktualno','crna-kronika','hrvatska','politika','zanimljivosti','fotka-dana','vjerski-zivot','virovitica','viroviticko-podravska-zupanija','koprivnicko-krizevacka-zupanija','osjecko-baranjska-zupanija','pitomaca-suhopolje-s-bukovica-gradina-lukac','orahovica-cacinci-mikleus-zdenci-crnac','slatina-sopje-cadavica-vocin-n-bukovica','nogomet','rukomet-kosarka','ostali-sportovi','skolski-sport','sportski-vremeplov','promo','icv-radio','icv-price','posljednji-pozdrav', 'promo', 'posljednji-pozdrav'))) {

    include(get_ad_file(1));

} else{  
 
}

if (is_category(array('aktualno','crna-kronika','hrvatska','politika','zanimljivosti','fotka-dana','vjerski-zivot','virovitica','viroviticko-podravska-zupanija','koprivnicko-krizevacka-zupanija','osjecko-baranjska-zupanija','pitomaca-suhopolje-s-bukovica-gradina-lukac','orahovica-cacinci-mikleus-zdenci-crnac','slatina-sopje-cadavica-vocin-n-bukovica','nogomet','rukomet-kosarka','ostali-sportovi', 'skolski-sport', 'sportski-vremeplov','icv-radio'))) {
    include(get_secondary_nav_file());

} else{   
}


?>

<section class="container-mainxaside">

    <main class="main-naslovnica">

        <article class="featured">
         
            <a class="naslov" href="<?php

                $current_category = get_queried_object();

                echo get_category_link($current_category->term_id);

            ?>">

                <h1><?php echo $current_category->name;?></h1>
                
            </a>
            <!-- .naslov -->

            <p class="icv-naslov mb-60">INFORMATIVNI CENTAR VIROVITICA</p>

            <div class="slagerx4-all">
            
                <?php
                // Query and display posts from the current category
                $posts_per_page = 24; // Number of posts per page
                $paged = get_query_var('paged');
                if (!$paged) {
                    $paged = 1;
                }

                // Get the current category object
                $current_category = get_queried_object();

                // Prepare query arguments using the category slug
                $args = array(
                    'category_name' => $current_category->slug, // Get posts using the current category slug
                    'posts_per_page' => $posts_per_page,
                    'paged' => $paged,
                    'no_found_rows' => false,
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
                            } else {
                                // If there is no featured image, display a default image from your folder
                                $default_image_url = get_stylesheet_directory_uri() . '/slike/default.jpg';
                                echo '<img src="' . $default_image_url . '" class="slagerx4-post-pic-all" alt="Default">';
                            }?>
                        </a>
                        <!-- .slagerx4-postdiv-all -->

                        <div class="slagerx4-category-all <?php change_category_color(); ?>">
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
                    $big = 999999; // Set a large value for the 'total' parameter

                    // Output the pagination links wrapped in a div with a custom class
                    ?><div class="<?php change_pagination_color()?>"><?php
                    echo paginate_links(array(
                        'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
                        'format' => '?paged=%#%',
                        'current' => max(1, get_query_var('paged')),
                        'total' => $query->max_num_pages,
                        'prev_text' => '&laquo;',
                        'next_text' => '&raquo;',
                    ));?>
                    </div>
                    

                    <!-- Navigacija po stranicama -->
                    <div class="navigacija-stranica">

                        <form action="" method="get">

                            <label for="broj-stranice">Pretraži po broju stranice:</label>
                            <input type="number" class="<?php change_pagination_broj();?>" id="broj-stranice" name="paged" min="1" max="<?php echo $query->max_num_pages; ?>" value="<?php echo $paged; ?>">
                            <input type="submit" class="<?php change_pagination_idi();?>" value="Idi">

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

<?php get_footer(); ?>
