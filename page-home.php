<?php
/**
 * Template Name: Home page - Naslovnica
 *
 * Displays Home page.
 *
 * @package ICV
 * @since ICV 1.0
 */

get_header();

// Sanitize the URL to prevent potential security issues
$current_url = filter_var($_SERVER['REQUEST_URI'], FILTER_SANITIZE_URL);

// Define the mapping of URLs to template files
$template_map = [
    '#^/$#' => 'stranice/naslovnica/naslovnica.php',
    '#^/vijesti/aktualno/#' => 'stranice/vijesti/aktualno-all.php',
    '#^/vijesti/crna-kronika/#' => 'stranice/vijesti/crna-kronika-all.php',
    '#^/vijesti/hrvatska/#' => 'stranice/vijesti/hrvatska-all.php',
    '#^/vijesti/politika/#' => 'stranice/vijesti/politika-all.php',
    '#^/vijesti/zanimljivosti/#' => 'stranice/vijesti/zanimljivosti-all.php',
    '#^/vijesti/vjerski-zivot/#' => 'stranice/vijesti/vjerski-zivot-all.php',
    '#^/vijesti/fotka-dana/#' => 'stranice/vijesti/fotka-dana-all.php',
    '#^/vijesti/#' => 'stranice/vijesti/vijesti-main.php',
    '#^/virovitica/#' => 'stranice/virovitica/virovitica-main.php',
    '#^/zupanije/viroviticko-podravska-zupanija/#' => 'stranice/zupanije/vpz-all.php',
    '#^/zupanije/koprivnicko-krizevacka-zupanija/#' => 'stranice/zupanije/kkz-all.php',
    '#^/zupanije/osjecko-baranjska-zupanija/#' => 'stranice/zupanije/obz-all.php',
    '#^/zupanije/#' => 'stranice/zupanije/zupanije-main.php',
    '#^/opcine/pitomaca-suhopolje-s-bukovica-gradina-lukac#' => 'stranice/opcine/pitomaca-all.php',
    '#^/opcine/orahovica-cacinci-mikleus-zdenci-crnac#' => 'stranice/opcine/orahovica-all.php',
    '#^/opcine/slatina-sopje-cadavica-vocin-n-bukovica#' => 'stranice/opcine/slatina-all.php',
    '#^/opcine/#' => 'stranice/opcine/opcine-main.php',
    '#^/sport/nogomet#' => 'stranice/sport/nogomet-all.php',
    '#^/sport/rukomet-kosarka#' => 'stranice/sport/rukomet-kosarka-all.php',
    '#^/sport/ostali-sportovi#' => 'stranice/sport/ostali-sportovi-all.php',
    '#^/sport/skolski-sport#' => 'stranice/sport/skolski-sport-all.php',
    '#^/sport/sportski-vremeplov#' => 'stranice/sport/sportski-vremeplov-all.php',
    '#^/sport/#' => 'stranice/sport/sport-main.php',
    '#^/promo/#' => 'stranice/promo/promo-main.php',
    '#^/marketing/#' => 'stranice/marketing/marketing-main.php',
    '#^/icv-radio/cestitke-i-zelje#' => 'stranice/icv-radio/cestitke-i-zelje.php',
    '#^/icv-radio/sms-glazbene-zelje#' => 'stranice/icv-radio/sms.php',
    '#^/icv-radio/program#' => 'stranice/icv-radio/program.php',
    '#^/icv-radio/#' => 'stranice/icv-radio/icv-radio-main.php',
    '#^/posljednji-pozdrav/#' => 'stranice/posljednji-pozdrav/posljednji-pozdrav-main.php',
    '#^/impressum/#' => 'stranice/impressum/impressum-main.php',
    '#^/pristup-informacijama/#' => 'stranice/impressum/pristup-informacijama-main.php',
    '#^/pravila-ponasanja/#' => 'stranice/impressum/pravila-ponasanja-main.php',
    '#^/uvjeti-koristenja/#' => 'stranice/impressum/uvjeti-koristenja-main.php',
    '#^/vazni-dokumenti/#' => 'stranice/impressum/vazni-dokumenti-main.php',
    '#^/kontakt/#' => 'stranice/impressum/kontakt-main.php',
];

// Iterate over the template map and find a match
$template_file = null;
foreach ($template_map as $pattern => $template_path) {
    if (preg_match($pattern, $current_url)) {
        $potential_file = get_template_directory() . '/' . $template_path;
        if (file_exists($potential_file)) {
            $template_file = $potential_file;
            break;
        }
    }
}

// Include the matched template file if it exists
if ($template_file) {
    include $template_file;
}

include ('nav/trazilica.php');

get_footer();

