<article class="featured mb-60" style="margin-top:0px;">

    <div class="featured-top mb-60">
            
        <?php     
            
        $args = array(
        'category_name' => 'istaknuto',
        'posts_per_page' => 2, // broj postova po stranici
        );

        $query = new WP_Query($args);


        if ($query->have_posts()) {
        $count = 0; // Counter variable

        while ($query->have_posts() && $count < 2) { // Display 2 posts

        $query->the_post();

        // Get the post permalink
        $post_permalink = get_permalink();

        // Trim post title
        $title = get_the_title();     

        // Display your post content here
        ?>

        <div class="featured-main">
            
            <a class="featured-postdiv" href="<?php echo $post_permalink; ?>">
                
                    <?php if (has_post_thumbnail()) {
                        the_post_thumbnail('post-thumbnail', array('class' => 'featured-post-pic'));
                    }?>
                    <!-- .featured-post-pic -->

                    <?php

                            $natuknicaClass = '';

                            if (has_category('promo')){

                                $natuknicaClass = 'natuknica-promo';

                            } elseif (has_category('istaknuto')){

                                $natuknicaClass = 'natuknica';

                            }
                            ?>

                        <div class="<?php echo $natuknicaClass ?>">

                            <?php 
                                $natuknica = '';

                                if (has_category('promo')) {
                                    $natuknica = 'PROMO';
                                } elseif (has_category('istaknuto')) {
                                    $natuknica = 'ISTAKNUTO';
                                }
                            ?>

                            <p><?php echo $natuknica; ?></p>

                        </div>
                        <!-- .natuknica -->

            </a>
            <!-- .featured-postdiv -->

            <?php

            $categoryPromo = '';

            if (has_category('promo')){

                $categoryPromo = 'category-promo';

            } else {

                $categoryPromo = '';

            }

            ?>

            <div class="featured-category" id="<?php echo $categoryPromo ?>">

                <?php

                    // Construct the full path to the file
                    $file_path = ABSPATH . 'wp-content/themes/icvtheme/pomocne/kategorije.php';

                    

                    // Check if the file exists before including it
                    if (file_exists($file_path)) {
                        include($file_path);
                    } else {}

                ?>

            </div>
            <!-- .featured-category -->

            <a class="featured-post-title" href="<?php echo $post_permalink; ?>">

                <h1><?php echo $title; ?></h1>

            </a>
            <!-- .featured-post-title -->


        </div>
        <!-- featured-main mb-30 -->

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
    <!-- .featured-top -->

    <div class="slager-parent">

        <div class="slagerx2 pr-30" id="istaknuto">
                
            <?php     
                
            $args = array(
            'category_name' => 'istaknuto',
            'posts_per_page' => 2, // broj postova po stranici
            'offset' => 2
            );

            $query = new WP_Query($args);

            if ($query->have_posts()) {
            $count = 0; // Counter variable

            while ($query->have_posts() && $count < 2) { // Display 2 posts

            $query->the_post();

            // Get the post permalink
            $post_permalink = get_permalink();

            // Trim post title
            $title = get_the_title();     

            // Display your post content here
            ?>

            <div class="slagerx2-main">
                
                <a class="slagerx2-postdiv" href="<?php echo $post_permalink; ?>">
                    
                        <?php if (has_post_thumbnail()) {
                            the_post_thumbnail('post-thumbnail', array('class' => 'slagerx2-post-pic'));
                        }?>
                        <!-- .slagerx2-post-pic -->

                        <?php

                            $natuknicaClass = '';

                            if (has_category('promo')){

                                $natuknicaClass = 'natuknica-promo';

                            } elseif (has_category('istaknuto')){

                                $natuknicaClass = 'natuknica';

                            }
                            ?>

                        <div class="<?php echo $natuknicaClass ?>">

                            <?php 
                                $natuknica = '';

                                if (has_category('promo')) {
                                    $natuknica = 'PROMO';
                                } elseif (has_category('istaknuto')) {
                                    $natuknica = 'ISTAKNUTO';
                                }
                            ?>

                            <p><?php echo $natuknica; ?></p>

                        </div>
                        <!-- .natuknica -->

                </a>
                <!-- .slagerx2-postdiv -->

                <?php

                    $categoryPromo = '';

                    if (has_category('promo')){

                        $categoryPromo = 'category-promo';

                    } else {

                        $categoryPromo = '';

                    }

                ?>

                <div class="slagerx2-category" id="<?php echo $categoryPromo ?>">

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

                <a class="slagerx2-post-title" href="<?php echo $post_permalink; ?>">

                    <h1><?php echo $title; ?></h1>

                </a>
                <!-- .slagerx2-post-title -->


            </div>
            <!-- slagerx2-main mb-30 -->

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
        <!-- .slagerx2 -->

        <div class="slagerx3 pr-30">
                
            <?php     
                
            $args = array(
            'category_name' => 'istaknuto',
            'posts_per_page' => 3, // broj postova po stranici
            'offset' => 4
            );

            $query = new WP_Query($args);

            if ($query->have_posts()) {
            $count = 0; // Counter variable

            while ($query->have_posts() && $count < 3) { // Display 3 posts

            $query->the_post();

            // Get the post permalink
            $post_permalink = get_permalink();

            // Trim post title
            $title = get_the_title();     

            // Display your post content here
            ?>

            <div class="slagerx3-main">
                
                <a class="slagerx3-postdiv" href="<?php echo $post_permalink; ?>">
                    
                        <?php if (has_post_thumbnail()) {
                            the_post_thumbnail('post-thumbnail', array('class' => 'slagerx3-post-pic'));
                        }?>
                        <!-- .slagerx3-post-pic -->

                        <?php

                            $natuknicaClass = '';

                            if (has_category('promo')){

                                $natuknicaClass = 'natuknica-promo';

                            } elseif (has_category('istaknuto')){

                                $natuknicaClass = 'natuknica';

                            }
                            ?>

                        <div class="<?php echo $natuknicaClass ?>">

                            <?php 
                                $natuknica = '';

                                if (has_category('promo')) {
                                    $natuknica = 'PROMO';
                                } elseif (has_category('istaknuto')) {
                                    $natuknica = 'ISTAKNUTO';
                                }
                            ?>

                            <p><?php echo $natuknica; ?></p>

                        </div>
                        <!-- .natuknica -->

                </a>
                <!-- .slagerx3-postdiv -->

                <?php

                    $categoryPromo = '';

                    if (has_category('promo')){

                        $categoryPromo = 'category-promo';

                    } else {

                        $categoryPromo = '';

                    }

                ?>

                <div class="slagerx3-category" id="<?php echo $categoryPromo ?>">

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

                <a class="slagerx3-post-title" href="<?php echo $post_permalink; ?>">

                    <h1><?php echo $title; ?></h1>

                </a>
                <!-- .slagerx3-post-title -->

            </div>
            <!-- slagerx3-main mb-30 -->


            <?php

            $count++; // Increment the counter
            }
            } else {
            // If no posts are found
            echo 'No posts found.';
            }

            wp_reset_postdata();
            ?>

            <!-- Mjesto za oglas -->
            <div class="slagerx3-main slagerx3-oglas">
        
                <!-- Revive Adserver Asynchronous JS Tag - Generated with Revive Adserver v5.4.1 -->
                <ins data-revive-zoneid="61" data-revive-id="987aaa8bfddb5a07fc66ba2d45209ef6"></ins>
                <script async src="//www.icvads.com/www/delivery/asyncjs.php"></script>
                
            </div>
            <!-- oglas-izmedu -->
        
        </div>
        <!-- .slagerx3 -->
    
    </div>
    <!-- .slager-parent mt-30-->

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

                <!-- Revive Adserver Asynchronous JS Tag - Generated with Revive Adserver v5.4.1 -->
                <ins data-revive-zoneid="188" data-revive-id="987aaa8bfddb5a07fc66ba2d45209ef6"></ins>
                <script async src="//www.icvads.com/www/delivery/asyncjs.php"></script>

                <p>Oglas</p>

            </div>
            <!-- slager-aside-oglas -->

        </div>
        <!-- sticky -->

    </aside>
    <!-- .slager-aside -->

</article>
<!-- .featured mt-30 -->