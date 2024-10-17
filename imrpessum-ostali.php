<?php
/**
 * Template Name: Impressum ostali
 *
 * Displays Home page.
 *
 * @package ICV
 * @since ICV 1.0
 */

get_header();

// Construct the full path to the file
$file_path = ABSPATH . 'wp-content/themes/icvtheme/nav/secondary-nav/impressum-sec-nav.php';

// Check if the file exists before including it
if (file_exists($file_path)) {
    include($file_path);
} else {}

?>

<main class="container-impressum">

    <?php include ('stranice/impressum/aside-impressum.php')?>

    <section class="main-other sadrzaj-desno">
    
        <?php

            if (have_posts()) {
                while (have_posts()) {
                    the_post();
                
                $title = get_the_title();

                // Dohvati sirov sadržaj bez automatskih <p> tagova
                $content = get_the_content();

                // Apliciraj wpautop na cijeli kontent
                $styled_content = wpautop($content, $br=false);

                // Dodaj klasu "file-link" elementima koji sadrže u svojoj url putanji: .pdf, .doc, .docx, .xlsx, .xls , .csv, .zip
                $styled_content = preg_replace_callback('/<a\s+(?:[^>]*?\s+)?href=["\']([^"\']+\.pdf|[^"\']+\.doc|[^"\']+\.zip|[^"\']+\.docx|[^"\']+\.odt|[^"\']+\.xlsx|[^"\']+\.xls|[^"\']+\.csv)["\'](?:[^>]*)?>(.*?)<\/a>/i', function ($match) {
                    $file_url = $match[1];
                    $file_extension = pathinfo($file_url, PATHINFO_EXTENSION);
                    $link_text = $match[2];
                    $image_src = get_stylesheet_directory_uri() . '/slike/' . $file_extension . '-icon.png';
                    $styled_link = '<div class="file-link ' . $file_extension . '-style"><img src="' . $image_src . '" alt="' . $file_extension . '-img"><a href="' . $file_url . '">' . $link_text . '</a></div>';
                    return $styled_link;
                }, $styled_content);

                // Dodaj klasu "contains-nbsp" elementima koji sadrže &nbsp; i zamjeni običan <p> element sa <p> elementom koji sadrži klasu "contains-nbsp"
                $styled_content = preg_replace_callback('/<[^>]*>.*?&nbsp;.*?<\/[^>]*>/', function ($match) {
                    return str_replace('<p>', '<p class="contains-nbsp">', $match[0]);
                }, $styled_content);
                
                echo '<div class="template-poveznice">' . $styled_content . '</div>';
                }
            }

        ?>

    </section>
    <!-- .main-impressum .sadrzaj-desno-->

</main>
<!-- .container-mainxaside -->

<?php get_footer();?>