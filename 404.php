<?php get_header(); ?>

<div class="error-container">

    <h1>POGREŠKA</h1>
    <p>404 - URL, datoteka ili mapa nije pronađena.</p>
    <p>Molimo <a href="<?php echo esc_url(home_url('/')); ?>">kliknite ovdje</a> kako biste se vratili na početnu stranicu.</p>

</div>

<?php wp_footer();

get_footer();?>