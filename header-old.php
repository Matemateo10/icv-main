<?php
/**
 * Template za header
 *
 *
 * @package ICV
 * @since ICV 1.0
 */

?>
<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta author="ICV Dizajn - Matko Bajan">
    <title><?php wp_title();?></title>
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" >
    <meta property="og:title" content="<?php echo get_the_title(); ?>">
    <meta property="og:description" content="<?php echo get_the_excerpt(); ?>">
    <meta property="og:image" content="<?php echo get_the_post_thumbnail_url(); ?>">
    <meta property="og:url" content="<?php echo get_permalink(); ?>">
    <meta property="og:type" content="article">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    
<nav>


<!-- Dohvaćanje glavne navigacije -->
<?php include ('nav/nav-desktop.php');?>  

<!-- Mjesto za oglas -->
<div class="oglas-izmedu">

    <p>OGLAS</p>

</div>
<!-- .oglas-izmedu -->

<!-- Dohvaćanje pod navigacije ako ju stranica ima (vijesti, županije, općine, sport, icv-radio)-->

<?php 

    // Get the current page URL
    $current_url = $_SERVER['REQUEST_URI'];

    // Check if the URL mathces a certain pattern
    if (strpos($current_url, '/vijesti/') !== false){

        // Include the corresponding file
        include('nav/secondary-nav/vijesti-sec-nav.php');

    } elseif (strpos($current_url, '/zupanije/') !== false){

        include('nav/secondary-nav/zupanije-sec-nav.php');
    
    } elseif (strpos($current_url, '/opcine/') !== false){

        include('nav/secondary-nav/opcine-sec-nav.php');

    } elseif (strpos($current_url, '/sport/') !== false){

        include('nav/secondary-nav/sport-sec-nav.php');

    } elseif (strpos($current_url, '/icv-radio/') !== false){

        include('nav/secondary-nav/icv-radio-sec-nav.php');

    } else {}

?>

</nav>