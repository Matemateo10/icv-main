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
    <title><?php wp_title(); ?></title>
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="<?php echo get_the_title(); ?>">
    <meta property="og:description" content="<?php echo get_the_excerpt(); ?>">
    <meta property="og:image" content="<?php echo get_the_post_thumbnail_url(); ?>">
    <meta property="og:url" content="<?php echo get_permalink(); ?>">
    <meta property="og:type" content="article">

    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo get_the_title(); ?>">
    <meta name="twitter:description" content="<?php echo get_the_excerpt(); ?>">
    <meta name="twitter:image" content="<?php echo get_the_post_thumbnail_url(); ?>">
    <meta name="twitter:url" content="<?php echo get_permalink(); ?>">

    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

    <nav class="nav-main" id="navbar">

        <!-- Dohvaćanje glavne navigacije -->
        <?php include('nav/nav-desktop.php'); ?>

        <!-- Dohvaćanje mobilne navigacije -->
        <?php include('nav/nav-mobile.php'); ?>

    </nav>

    <div id="myNav" class="izbornik-main"> 

        <div class="close-menu-mob">
            <div class="social-mob">
                <a href="https://www.facebook.com/" target="_blank">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/slike/facebook.png" alt="icv-facebook">
                </a>
                <a href="https://www.instagram.com/" target="_blank">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/slike/instagram.png" alt="icv-instagram">
                </a>
                <a href="https://www.youtube.com/" target="_blank">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/slike/youtube.png" alt="icv-youtube">
                </a>
            </div>
            <!-- social -->

            <div class="close-div">
                <a href="javascript:void(0)" id="closebtn" class="closebtn" onClick="openNav();">&times;</a>
            </div>
            <!-- .close-div -->

        </div>
        <!-- .close-menu-mob -->

        <div class="overlay-content">

            <div class="nav-mobile">

                <a class="nav-mobile-1" href="/"><span class="gumb-red"></span>Naslovnica</a>

            </div>

            <div class="nav-mobile">

                <a class="vijesti-c-c nav-mobile-1" href="/vijesti"><span class="gumb-red"></span>Vijesti</a>

                <a class="mobile-2" onclick="toggleMobDropdown();"><img class="arrow-mobile" id="arrow-mobile-1" src="<?php echo get_stylesheet_directory_uri(); ?>/slike/down-arrow.png" alt="down-arrow"></a>

                <div id="dropdown-mobile-1">

                    <ul id="dropdown-mobile-ul">

                        <li>

                            <a class="aktualno-c-c" href="vijesti/aktualno">Aktualno</a>

                        </li>

                        <li>

                            <a class="crna-kronika-c-c" href="vijesti/crna-kronika">Crna Kronika</a>

                        </li>

                        <li>

                            <a class="hrvatska-c-c" href="vijesti/hrvatska">Hrvatska</a>

                        </li>

                        <li>

                            <a class="politika-c-c" href="vijesti/politika">Politika</a>

                        </li>

                        <li>

                            <a class="zanimljivosti-c-c" href="vijesti/zanimljivosti">Zanimljivosti</a>

                        </li>

                        <li>

                            <a class="vjerski-zivot-c-c" href="vijesti/vjerski-zivot">Vjerski život</a>

                        </li>

                        <li>

                            <a class="fotka-dana-c-c" href="vijesti/fotka-dana">Fotka dana</a>

                        </li>

                    </ul>

                </div>

            </div>
            <!-- .nav-mobile -->

            <div class="nav-mobile">

                <a class="virovitica-c-c nav-mobile-1" href="/virovitica"><span class="gumb-red"></span>Virovitica</a>

            </div>
            <!-- nav-mobile -->

            <div class="nav-mobile">

                <a class="zupanije-c-c nav-mobile-1" href="/zupanije"><span class="gumb-red"></span>Županije</a>

                <a class="mobile-2" onclick="toggleMobDropdown2();"><img class="arrow-mobile" id="arrow-mobile-2" src="<?php echo get_stylesheet_directory_uri(); ?>/slike/down-arrow.png" alt="down-arrow"></a>

                <div id="dropdown-mobile-2">

                    <ul id="dropdown-mobile-ul">

                        <li>

                            <a class="vpz-c-c" href="zupanije/viroviticko-podravska-zupanija">Virovitičko-podravska županija</a>

                        </li>

                        <li>

                            <a class="kkz-c-c" href="zupanije/koprivnicko-krizevacka-zupanija">Koprivničko-križevačka županija</a>

                        </li>

                        <li>

                            <a class="obz-c-c" href="zupanije/osjecko-baranjska-zupanija">Osječko-baranjska županija</a>

                        </li>

                    </ul>

                </div>

            </div>
            <!-- nav-mobile -->

            <div class="nav-mobile">

                <a class="opcine-c-c nav-mobile-1" href="/opcine"><span class="gumb-red"></span>Općine</a>

                <a class="mobile-2" onclick="toggleMobDropdown3()"><img class="arrow-mobile" id="arrow-mobile-3" src="<?php echo get_stylesheet_directory_uri(); ?>/slike/down-arrow.png" alt="down-arrow"></a>

                <div id="dropdown-mobile-3">

                    <ul id="dropdown-mobile-ul">

                        <li>

                            <a class="pitomaca-c-c" href="opcine/pitomaca-suhopolje-s-bukovica-gradina-lukac">Pitomača - Suhopolje - Špišić Bukovica - Gradina - Lukač</a>

                        </li>

                        <li>

                            <a class="orahovica-c-c" href="opcine/orahovica-cacinci-mikleus-zdenci-crnac">Orahovica - Čačinci - Mikleuš - Zdenci - Crnac</a>

                        </li>

                        <li>

                            <a class="slatinca-c-c" href="opcine/slatina-sopje-cadavica-vocin-n-bukovica">Slatina - Sopje - Čađavica - Voćin - Nova Bukovica</a>
                            <!-- .slatina-c-c -->

                        </li>

                    </ul>
                    <!-- dropdown-mobile1 -->

                </div>
                <!-- dropdown-mobile -->

            </div>

            <div class="nav-mobile">

                <a class="sport-c-c nav-mobile-1" href="/sport"><span class="gumb-green"></span>Sport</a>

                <a class="mobile-2" onclick="toggleMobDropdown4()"><img class="arrow-mobile" id="arrow-mobile-4" src="<?php echo get_stylesheet_directory_uri(); ?>/slike/down-arrow.png" alt="down-arrow"></a>

                <div id="dropdown-mobile-4">

                    <ul id="dropdown-mobile-ul" class="sport-ul">

                        <li>

                            <a class="nogomet-c-c" href="sport/nogomet">Nogomet</a>
                            <!-- .nogomet-c-c -->

                        </li>

                        <li>

                            <a class="kosarka-c-c" href="sport/rukomet-kosarka">Rukomet - Košarka</a>
                            <!-- .kosarka-c-c -->

                        </li>

                        <li>

                            <a class="ostali-sportovi-c-c" href="sport/ostali-sportovi">Ostali sportovi</a>
                            <!-- .ostali-sportovi-c-c -->

                        </li>

                        <li>

                            <a class="skolski-sport-c-c" href="sport/skolski-sport">Školski sport</a>
                            <!-- skolski-sport-c-c -->

                        </li>

                        <li>

                            <a class="sportski-vremeplov-c-c" href="sport/sportski-vremeplov">Sportski vremeplov</a>
                            <!-- .sportski-vremeplov-c-c -->

                        </li>


                    </ul>
                    <!-- dropdown-mobile1 -->

                </div>
                <!-- dropdown-mobile -->

            </div>
            <!-- nav-mobile -->

            <div class="nav-mobile">

                <a class="nav-mobile-1" href="/marketing"><span class="gumb-red"></span>Marketing</a>

            </div>
            <!-- nav-mobile -->

            <div class="nav-mobile">

                <a class="nav-mobile-1" href="/marketing"><span class="gumb-red"></span>ICV-radio</a>

                <a class="mobile-2" onclick="toggleMobDropdown5()"><img class="arrow-mobile" id="arrow-mobile-5" src="<?php echo get_stylesheet_directory_uri(); ?>/slike/down-arrow.png" alt="down-arrow"></a>

                <div id="dropdown-mobile-5">

                    <ul id="dropdown-mobile-ul">

                        <li>

                            <a class="cestitke-c-c" href="icv-radio/cestitke-i-zelje">Čestitke i želje</a>
                            <!-- .cestitke-c-c -->

                        </li>

                        <li>

                            <a class="sms-c-c" href="icv-radio/sms-glazbene-zelje">SMS glazbene želje</a>
                            <!-- .sms-c-c -->

                        </li>

                        <li>

                            <a class="program-c-c" href="icv-radio/program">Program</a>
                            <!-- .program-c-c -->

                        </li>

                        <li>

                            <a target="_blank" href="https://www.icv.hr/radio/">Streaming</a>
                            <!-- .streaming-c-c -->

                        </li>

                    </ul>
                    <!-- dropdown-mobile1 -->

                </div>
                <!-- dropdown-mobile -->

            </div>
            <!-- nav-mobile -->

            <div class="impressum-mob">

                <a href="/impressum"><span class="gumb-red"></span>Impressum</a>

                <a href="/pristup-informacijama"><span class="gumb-red"></span>Pristup informacijama</a>

                <a href="/pravila-ponasanja"><span class="gumb-red"></span>Pravila ponašanja</a>

                <a href="/uvjeti-koristenja"><span class="gumb-red"></span>Uvjeti korištenja</a>

                <a href="/vazni-dokumenti"><span class="gumb-red"></span>Važni dokumenti</a>

                <a href="/kontakt"><span class="gumb-red"></span>Kontakt</a>

            </div>
            <!-- impressum-mob -->

            <div class="imas-vijest">

                <h4>IMAŠ VIJEST?</h4>

                <p>Snimi, prijavi, dojavi, pošalji i postani naš čitatelj reporter!</p>

                <p>Pošalji vijest na e-mail:</p>

                <p><span style="color:red;">vijesti@icv.hr</span></p>

            </div>

        </div>
        <!-- nav-mobile -->

        <a class="radio-mob" href="/radio">

            <img src="<?php echo get_stylesheet_directory_uri(); ?>/slike/icvradio.jpg" alt="radio">

        </a>
        <!-- radio-mob -->



    </div>
    <!-- overlay-content -->

    </div>
    <!-- #myNav .overlay -->

    <?php include('nav/trazilica.php'); ?>