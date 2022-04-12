<!DOCTYPE html>
<!--[if IE 9 ]>
<html <?php language_attributes(); ?> class="ie9 <?php flatsome_html_classes(); ?>"> <![endif]-->
<!--[if IE 8 ]>
<html <?php language_attributes(); ?> class="ie8 <?php flatsome_html_classes(); ?>"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html <?php language_attributes(); ?> class="<?php flatsome_html_classes(); ?>"> <!--<![endif]-->
<head>
    <meta charset="<?php bloginfo('charset'); ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <meta name="cmsmagazine" content="6436b2df9477c3bdde6dd89690ae98b9"/>
    <meta name="ip" content="<?php echo $_SERVER["REMOTE_ADDR"] ?>">
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
    <link rel="profile" href="http://gmpg.org/xfn/11"/>
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>"/>

    <?php wp_head(); ?>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-168903290-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());

        gtag('config', 'UA-168903290-1', {
            'custom_map': {
                'dimension1': 'clientId'
            }
        });
        setTimeout(function () {
            gtag('event', 'Over 15 seconds', {
                event_category: "NoBounce"
            });
        }, 15000);
    </script>
    <!-- Google Tag Manager -->
    <script>(function (w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start':
                    new Date().getTime(), event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-TRFKKFL');
    </script>
    <!-- End Google Tag Manager -->

    <!-- Marquiz script start -->
    <script>
    <?php if ($_SERVER['REQUEST_URI'] == '/blog/%D0%BF%D1%80%D0%B8%D0%B3%D0%BB%D0%B0%D1%88%D0%B0%D0%B5%D0%BC-%D0%BD%D0%B0-%D0%B1%D0%B5%D1%81%D0%BF%D0%BB%D0%B0%D1%82%D0%BD%D1%8B%D0%B9-%D0%B2%D0%B5%D0%B1%D0%B8%D0%BD%D0%B0%D1%80-%D0%B7%D0%B0/'): ?>
        (function (w, d, s, o) {
            var j = d.createElement(s);
            j.async = true;
            j.src = '//script.marquiz.ru/v2.js';
            j.onload = function () {
                if (document.readyState !== 'loading') Marquiz.init(o);
                else document.addEventListener("DOMContentLoaded", function () {
                    Marquiz.init(o);
                });
            };
            d.head.insertBefore(j, d.head.firstElementChild);
        })(window, document, 'script', {
                host: '//quiz.marquiz.ru',
                region: 'eu',
                id: '602f350e7914c10044581a97',
                autoOpen: false,
                autoOpenFreq: 'once',
                openOnExit: true,
                disableOnMobile: false
            }
        );
    <?php elseif ($_SERVER['REQUEST_URI'] == '/blog/%D0%B1%D0%B0%D0%BD%D0%BA%D1%80%D0%BE%D1%82%D1%81%D1%82%D0%B2%D0%BE-%D0%BD%D0%B5%D0%BA%D0%BE%D0%BC%D0%BC%D0%B5%D1%80%D1%87%D0%B5%D1%81%D0%BA%D0%B8%D1%85-%D0%BE%D1%80%D0%B3%D0%B0%D0%BD%D0%B8%D0%B7%D0%B0/'): ?>
        (function (w, d, s, o) {
            var j = d.createElement(s);
            j.async = true;
            j.src = '//script.marquiz.ru/v2.js';
            j.onload = function () {
                if (document.readyState !== 'loading') Marquiz.init(o);
                else document.addEventListener("DOMContentLoaded", function () {
                    Marquiz.init(o);
                });
            };
            d.head.insertBefore(j, d.head.firstElementChild);
        })(window, document, 'script', {
                host: '//quiz.marquiz.ru',
                region: 'eu',
                id: '602f350e7914c10044581a97',
                autoOpen: false,
                autoOpenFreq: 'once',
                openOnExit: true,
                disableOnMobile: false
            }
        );
    <?php elseif ($_SERVER['REQUEST_URI'] == '/blog/%D0%BB%D0%B8%D0%BA%D0%B2%D0%B8%D0%B4%D0%B0%D1%86%D0%B8%D1%8F-%D0%BE%D0%B1%D1%89%D0%B5%D1%81%D1%82%D0%B2%D0%B5%D0%BD%D0%BD%D0%BE%D0%B3%D0%BE-%D0%BE%D0%B1%D1%8A%D0%B5%D0%B4%D0%B8%D0%BD%D0%B5%D0%BD%D0%B8/'): ?>
        (function (w, d, s, o) {
            var j = d.createElement(s);
            j.async = true;
            j.src = '//script.marquiz.ru/v2.js';
            j.onload = function () {
                if (document.readyState !== 'loading') Marquiz.init(o);
                else document.addEventListener("DOMContentLoaded", function () {
                    Marquiz.init(o);
                });
            };
            d.head.insertBefore(j, d.head.firstElementChild);
        })(window, document, 'script', {
                host: '//quiz.marquiz.ru',
                region: 'eu',
                id: '602f350e7914c10044581a97',
                autoOpen: false,
                autoOpenFreq: 'once',
                openOnExit: true,
                disableOnMobile: false
            }
        );
    <?php elseif ($_SERVER['REQUEST_URI'] == '/blog/%D0%BF%D1%80%D0%B8%D0%BD%D1%83%D0%B4%D0%B8%D1%82%D0%B5%D0%BB%D1%8C%D0%BD%D0%B0%D1%8F-%D0%BB%D0%B8%D0%BA%D0%B2%D0%B8%D0%B4%D0%B0%D1%86%D0%B8%D1%8F-%D0%B8%D0%BD%D0%B4%D0%B8%D0%B2%D0%B8%D0%B4%D1%83%D0%B0/'): ?>
        (function (w, d, s, o) {
            var j = d.createElement(s);
            j.async = true;
            j.src = '//script.marquiz.ru/v2.js';
            j.onload = function () {
                if (document.readyState !== 'loading') Marquiz.init(o);
                else document.addEventListener("DOMContentLoaded", function () {
                    Marquiz.init(o);
                });
            };
            d.head.insertBefore(j, d.head.firstElementChild);
        })(window, document, 'script', {
                host: '//quiz.marquiz.ru',
                region: 'eu',
                id: '602f350e7914c10044581a97',
                autoOpen: false,
                autoOpenFreq: 'once',
                openOnExit: true,
                disableOnMobile: false
            }
        );
    <?php elseif ($_SERVER['REQUEST_URI'] == '/services/services-le/'): ?>
        (function(w, d, s, o){
          var j = d.createElement(s); j.async = true; j.src = '//script.marquiz.ru/v2.js';j.onload = function() {
            if (document.readyState !== 'loading') Marquiz.init(o);
            else document.addEventListener("DOMContentLoaded", function() {
              Marquiz.init(o);
            });
          };
          d.head.insertBefore(j, d.head.firstElementChild);
        })(window, document, 'script', {
            host: '//quiz.marquiz.ru',
            region: 'eu',
            id: '5f8423a5d8d13200441acb88',
            autoOpen: 30,
            autoOpenFreq: 'once',
            openOnExit: true,
            disableOnMobile: true
          }
        );
        (function (t, p) {
          window.Marquiz
            ? Marquiz.add([t, p])
            : document.addEventListener("marquizLoaded", function () {
                Marquiz.add([t, p]);
              });
        })("Pop", {
          id: "5f8423a5d8d13200441acb88",
          title: "Пройдите опрос",
          text: "Получите бесплатную консультацию",
          delay: 2,
          textColor: "#ffffff",
          bgColor: "#ff0000",
          svgColor: "#ffffff",
          closeColor: "#ffffff",
          bonusCount: 0,
          bonusText: "",
          type: "side",
          position: "position_top-left",
          rounded: true,
          shadow: "rgba(255, 0, 0, 0)",
          blicked: true,
        });    
    <?php elseif ($_SERVER['REQUEST_URI'] == '/services/bukhgalterskie-uslugi/obsluzhivanie/'): ?>
        (function(w, d, s, o){
          var j = d.createElement(s); j.async = true; j.src = '//script.marquiz.ru/v2.js';j.onload = function() {
            if (document.readyState !== 'loading') Marquiz.init(o);
            else document.addEventListener("DOMContentLoaded", function() {
              Marquiz.init(o);
            });
          };
          d.head.insertBefore(j, d.head.firstElementChild);
        })(window, document, 'script', {
            host: '//quiz.marquiz.ru',
            region: 'eu',
            id: '6102660bfe7cb6003ecc09b9',
            autoOpen: 30,
            autoOpenFreq: 'once',
            openOnExit: true,
            disableOnMobile: true
          }
        );
        (function (t, p) {
          window.Marquiz
            ? Marquiz.add([t, p])
            : document.addEventListener("marquizLoaded", function () {
                Marquiz.add([t, p]);
              });
        })("Pop", {
          id: "6102660bfe7cb6003ecc09b9",
          title: "Рассчитайте за 1 минуту",
          text: "Стоимость бухгалтерии на аутсорсинге",
          delay: 2,
          textColor: "#fff",
          bgColor: "#ec1c23",
          svgColor: "#fff",
          closeColor: "#ffffff",
          bonusCount: 1,
          bonusText: "Вам доступен бонус и скидка",
          type: "side",
          position: "position_top-left",
          rounded: true,
          shadow: "rgba(236, 28, 35, 0)",
          blicked: true,
        });
    <?php elseif (strpos($_SERVER['REQUEST_URI'], 'register-elimination') > 0): ?>
        document.addEventListener("DOMContentLoaded", function () {
            (function (w, d, s, o) {
                var j = d.createElement(s);
                j.async = true;
                j.src = '//script.marquiz.ru/v2.js';
                j.onload = function () {
                    if (document.readyState !== 'loading') Marquiz.init(o);
                    else document.addEventListener("DOMContentLoaded", function () {
                        Marquiz.init(o);
                    });
                };
                d.head.insertBefore(j, d.head.firstElementChild);
            })(window, document, 'script', {
                    host: '//quiz.marquiz.ru',
                    region: 'eu',
                    id: '602f350e7914c10044581a97',
                    autoOpen: false,
                    autoOpenFreq: 'once',
                    openOnExit: true,
                    disableOnMobile: false
                }
            );
        });
    <?php elseif (strpos($_SERVER['REQUEST_URI'], 'licensing') > 0): ?>
    <?php else: ?>
        (function (w, d, s, o) {
            var j = d.createElement(s);
            j.async = true;
            j.src = '//script.marquiz.ru/v2.js';
            j.onload = function () {
                if (document.readyState !== 'loading') Marquiz.init(o);
                else document.addEventListener("DOMContentLoaded", function () {
                    Marquiz.init(o);
                });
            };
            d.head.insertBefore(j, d.head.firstElementChild);
        })(window, document, 'script', {
                host: '//quiz.marquiz.ru',
                region: 'eu',
                id: '5f8423a5d8d13200441acb88',
                autoOpen: false,
                autoOpenFreq: 'once',
                openOnExit: true,
                disableOnMobile: false
            }
        );
        <?php endif; ?>
    </script>
    <!-- Marquiz script end -->
</head>

<body <?php body_class(); // Body classes is added from inc/helpers-frontend.php ?>>
<!-- ROISTAT BEGIN -->

<script>
    jQuery(document).ready(function () {
        jQuery('div.col.medium-4.small-12.large-4 a span').each(function (key, val) {
            if (jQuery(val).text() == 'Скачать анкету') {
                jQuery(val).closest('a').attr('onclick', 'roistat.event.send(\'anketa\');');
            }
        });
        jQuery('.col-inner a span').each(function (key, val) {
            if (jQuery(val).text() == 'Скачать памятку') {
                jQuery(val).closest('a').attr('onclick', 'roistat.event.send(\'pam\');');
            }
        });
    });
</script>
<!-- ROISTAT END -->
<!-- Google Tag Manager (noscript) -->
<noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TRFKKFL"
            height="0" width="0" style="display:none;visibility:hidden"></iframe>
</noscript>
<!-- End Google Tag Manager (noscript) -->
<!--LiveInternet counter-->
<script type="text/javascript">
    new Image().src = "//counter.yadro.ru/hit?r" +
        escape(document.referrer) + ((typeof (screen) == "undefined") ? "" :
            ";s" + screen.width + "*" + screen.height + "*" + (screen.colorDepth ?
            screen.colorDepth : screen.pixelDepth)) + ";u" + escape(document.URL) +
        ";h" + escape(document.title.substring(0, 150)) +
        ";" + Math.random();</script>
<!--/LiveInternet-->
<?php do_action('flatsome_after_body_open'); ?>

<a class="skip-link screen-reader-text" href="#main"><?php esc_html_e('Skip to content', 'flatsome'); ?></a>

<div id="wrapper">

    <?php do_action('flatsome_before_header'); ?>

    <header id="header" class="header <?php flatsome_header_classes(); ?>">
        <div class="header-wrapper">
            <?php get_template_part('template-parts/header/header', 'wrapper'); ?>
        </div><!-- header-wrapper-->
    </header>

    <?php do_action('flatsome_after_header'); ?>

    <main id="main" class="<?php flatsome_main_classes(); ?>">
