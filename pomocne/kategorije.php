<?php
    // Define an associative array to map category slugs to their respective URLs
    $category_links = array(
        'aktualno' => '/vijesti/aktualno',
        'crna-kronika' => '/vijesti/crna-kronika',
        'hrvatska' => '/vijesti/hrvatska',
        'politika' => '/vijesti/politika',
        'zanimljivosti' => '/vijesti/zanimljivosti',
        'fotka-dana' => '/vijesti/fotka-dana',
        'vjerski-zivot' => '/vijesti/vjerski-zivot',
        'virovitica' => '/virovitica',
        'viroviticko-podravska-zupanija' => '/zupanije/viroviticko-podravska-zupanija',
        'koprivnicko-krizevacka-zupanija' => '/zupanije/koprivnicko-krizevacka-zupanija',
        'osjecko-baranjska-zupanija' => '/zupanije/osjecko-baranjska-zupanija',
        'pitomaca-suhopolje-s-bukovica-gradina-lukac' => '/opcine/pitomaca-suhopolje-s-bukovica-gradina-lukac',
        'orahovica-cacinci-mikleus-zdenci-crnac' => '/opcine/orahovica-cacinci-mikleus-zdenci-crnac',
        'slatina-sopje-cadavica-vocin-n-bukovica' => '/opcine/slatina-sopje-cadavica-vocin-n-bukovica',
        'nogomet' => '/sport/nogomet',
        'rukomet-kosarka' => '/sport/rukomet-kosarka',
        'ostali-sportovi' => '/sport/ostali-sportovi',
        'skolski-sport' => '/sport/skolski-sport',
        'sportski-vremeplov' => '/sport/sportski-vremeplov',
        'promo' => '/promo',
        'icv-radio' => '/icv-radio',
        'posljednji-pozdrav' => '/posljednji-pozdrav',
        'icv-price' => '/icv-price',
        // Add more categories here as needed
    );

    // Define categories to exclude
    $exclude_categories = array('istaknuto', 'istaknuto-vijesti', 'istaknuto-virovitica', 'istaknuto-zupanije', 'istaknuto-opcine', 'istaknuto-sport', 'featured');

    // Get the categories for the current post
    $categories = get_the_category();

    if ( ! empty( $categories ) ) {
        foreach ( $categories as $category ) {
            // Check if the category should be excluded
            if ( ! in_array( $category->slug, $exclude_categories ) ) {
                // Check if the category slug exists in the $category_links array
                if ( array_key_exists( $category->slug, $category_links ) ) {
                    $category_link = $category_links[ $category->slug ];
                } else {
                    // Default link if the category is not in the $category_links array
                    $category_link = get_category_link( $category->term_id );
                }

                echo '<a class="MyCategory" href="' . esc_url( $category_link ) . '">' . '<span>//' . '&nbsp;' . esc_html( $category->name ) . '</span></a>';
            }
        }
    }
?>
