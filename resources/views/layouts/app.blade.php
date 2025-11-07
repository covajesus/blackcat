<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta content="IE=edge" http-equiv="X-UA-Compatible">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
        <!-- ========== SEO ========== -->
        <title>Black Cat Hostal - Hostal Boutique</title>
        <meta content="{{ __('messages.meta_description') }}" name="description">
        <meta content="hotel, hostal, hostal black cat chile, hostal black cat santiago, alojamiento en chile, hostal en chile, hospedaje económico en chile, hostal con buena ubicación, hostal céntrico en chile, hostal con desayuno incluido, mejor hostal en chile, hostal en santiago centro, alojamiento en barrio bellavista, alojamiento en barrio brasil, alojamiento en providencia, hospedaje cerca del metro santiago, hostal cerca del centro histórico de santiago, hostal cerca de terminal de buses santiago, alojamiento cerca de atractivos turísticos, hostal cerca del aeropuerto de santiago, hostal en chile para mochileros, hostal para viajeros en chile, alojamiento económico en chile, hostal con mejor relación precio-calidad, hostal limpio y cómodo, habitaciones compartidas y privadas, hostal con wifi gratis, hostal con ambiente familiar, hospedaje con atención personalizada, hostal con espacios comunes, alojamiento para turistas internacionales, ambiente acogedor y seguro, turismo responsable en chile, vive la experiencia black cat, conoce chile desde nuestro hostal, comunidad de viajeros, reserva online hostal black cat, alojamiento turístico chile 2025, turismo económico en chile, mejores hostales en chile, hostales recomendados por viajeros, dónde alojarse en santiago, guía de hospedaje en chile, hostales con buena reputación" name="keywords">
        <meta content="Black Cat Hostal" name="author">
        
        <!-- ========== ROBOTS & CANONICAL ========== -->
        <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
        <meta name="googlebot" content="index, follow">
        <meta name="bingbot" content="index, follow">
        <link rel="canonical" href="{{ url()->current() }}">
        
        <!-- ========== OPEN GRAPH ========== -->
        <meta property="og:type" content="website">
        <meta property="og:title" content="Black Cat Hostal - Hostal Boutique en Santiago Chile">
        <meta property="og:description" content="{{ __('messages.meta_og_description') }}">
        <meta property="og:image" content="{{ asset('public/frontend/images/logo_header.png') }}">
        <meta property="og:url" content="{{ url()->current() }}">
        <meta property="og:site_name" content="Black Cat Hostal">
        <meta property="og:locale" content="es_CL">
        
        <!-- ========== TWITTER CARDS ========== -->
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="Black Cat Hostal - Santiago Chile">
        <meta name="twitter:description" content="{{ __('messages.meta_twitter_description') }}">
        <meta name="twitter:image" content="{{ asset('public/frontend/images/logo_header.png') }}">
        
        <!-- ========== GEO TAGS ========== -->
        <meta name="geo.region" content="CL-RM">
        <meta name="geo.position" content="-33.4489,-70.6693">
        <meta name="ICBM" content="-33.4489,-70.6693">
        <meta name="geo.placename" content="Santiago, Chile">
        
        <!-- ========== ADDITIONAL META TAGS ========== -->
        <meta name="application-name" content="Black Cat Hostal">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="theme-color" content="#ffffff">
        <meta name="format-detection" content="telephone=no">
        
        <!-- ========== FAVICON ========== -->
        <link rel="icon" href="{{ asset('public/frontend/images/favicon.ico') }}">
        <!-- ========== STYLESHEETS ========== -->
        <link rel="stylesheet" href="{{ asset('public/frontend/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('public/frontend/css/bootstrap-select.min.css') }}">
        <link rel="stylesheet" href="{{ asset('public/frontend/css/jquery.mmenu.css') }}">
        <link rel="stylesheet" href="{{ asset('public/frontend/revolution/css/layers.css') }}">
        <link rel="stylesheet" href="{{ asset('public/frontend/revolution/css/settings.css') }}">
        <link rel="stylesheet" href="{{ asset('public/frontend/revolution/css/navigation.css') }}">
        <link rel="stylesheet" href="{{ asset('public/frontend/css/animate.min.css') }}">
        <link rel="stylesheet" href="{{ asset('public/frontend/css/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('public/frontend/css/daterangepicker.css') }}">
        <link rel="stylesheet" href="{{ asset('public/frontend/css/magnific-popup.css') }}">
        <link rel="stylesheet" href="{{ asset('public/frontend/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('public/frontend/css/responsive.css') }}">

        @include('partials.analytics')

        <!-- ========== ICON FONTS ========== -->
        <link href="{{ asset('public/frontend/fonts/font-awesome.min.css') }}" rel="stylesheet">
        <link href="{{ asset('public/frontend/fonts/flaticon.css') }}" rel="stylesheet">
        <!-- ========== GOOGLE FONTS ========== -->
        <link href="https://fonts.googleapis.com/css?family=Oswald:400,500,600,700%7CRoboto:100,300,400,400i,500,700" rel="stylesheet">
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>
        <style>
            @media (max-width: 767px) {
                .modal-dialog-centered {
                    margin: auto;
                }

                .modal-lg {
                    max-width: 85%;
                }

                .modal {
                    z-index: 9999 !important;
                    background-color:transparent!important;
                }

                .modal_image {
                    height: 6px !important;
                }

                #panamerican_words {
                    font-size: 20px !important;
                }
            }

            @media (min-width: 768px) {
                .modal-lg {
                    max-width: 35% !important;
                }

                .modal_image {
                    height: 600px !important;
                }
            }
        </style>

        <!-- Facebook Pixel Code -->
        <script>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
        n.callMethod.apply(n,arguments):n.queue.push(arguments)};
        if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
        n.queue=[];t=b.createElement(e);t.async=!0;
        t.src=v;s=b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t,s)}(window,document,'script',
        'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '2030552940632653'); 
        fbq('track', 'PageView');
        </script>
        <noscript>
        <img height="1" width="1" 
        src="https://www.facebook.com/tr?id=2030552940632653&ev=PageView
        &noscript=1"/>
        </noscript>
        <!-- End Facebook Pixel Code -->

        <!-- ========== STRUCTURED DATA ========== -->
        <script type="application/ld+json">
        {
          "@context": "https://schema.org",
          "@type": "LodgingBusiness",
          "name": "Black Cat Hostal",
          "alternateName": "Hostal Boutique Black Cat",
          "image": "{{ asset('public/frontend/images/logo_header.png') }}",
          "description": "Hostal Boutique Black Cat exclusiva hotelería, ubicado en el corazón de Santiago en el patrimonial Barrio Brasil, siendo un punto cultural para iniciar tu viaje.",
          "address": {
            "@type": "PostalAddress",
            "streetAddress": "Compañía de Jesús 1921",
            "addressLocality": "Santiago",
            "addressRegion": "Región Metropolitana",
            "postalCode": "8330678",
            "addressCountry": "CL"
          },
          "geo": {
            "@type": "GeoCoordinates",
            "latitude": -33.4489,
            "longitude": -70.6693
          },
          "telephone": "+56949105984",
          "email": "reservas@blackcathostal.com",
          "url": "https://www.blackcathostal.com",
          "priceRange": "$$",
          "starRating": {
            "@type": "Rating",
            "ratingValue": "4.5"
          },
          "amenityFeature": [
            {"@type": "LocationFeatureSpecification", "name": "Free WiFi", "value": true},
            {"@type": "LocationFeatureSpecification", "name": "Breakfast", "value": true},
            {"@type": "LocationFeatureSpecification", "name": "Air conditioning", "value": true},
            {"@type": "LocationFeatureSpecification", "name": "Parking", "value": true},
            {"@type": "LocationFeatureSpecification", "name": "Kitchen facilities", "value": true}
          ],
          "sameAs": [
            "https://www.facebook.com/blackcathostalboutique",
            "https://www.instagram.com/blackcathostal",
            "https://www.linkedin.com/company/blackcathostal/"
          ]
        }
        </script>
    </head>
    <body>

        <!-- ========== PRELOADER ========== -->

        <!-- ========== MOBILE MENU ========== -->
        <nav id="mobile-menu"></nav>
        <!-- ========== WRAPPER ========== -->
        <div class="wrapper">
        <!-- ========== TOP MENU ========== -->
        <div class="topbar">
            <div class="container">
            <div class="welcome-mssg">
                {{ __('messages.welcome_message') }}
            </div>
            <div class="top-right-menu">
                <ul class="top-menu">
                <li class="d-none d-md-inline">
                    <a href="tel:+56949105984">
                    <i class="fa fa-phone"></i>+56 9 49105984
                    </a>
                </li>
                <li class="d-none d-md-inline">
                    <a href="mailto:reservas@blackcathostal.com">
                    <i class="fa fa-envelope-o "></i>reservas@blackcathostal.com</a>
                </li>
                <li class="language-menu">
                    <a href="#" class="active-language">
                        <img src="{{ asset('public/frontend/images/icons/flags/' . (app()->getLocale() == 'es' ? 'es' : (app()->getLocale() == 'en' ? 'gb' : 'br')) . '.png') }}" alt="Flag">
                        {{ __('messages.' . (app()->getLocale() == 'es' ? 'spanish' : (app()->getLocale() == 'en' ? 'english' : 'portuguese'))) }}
                    </a>
                    <ul class="languages">
                        @if(app()->getLocale() != 'es')
                        <li class="language">
                            <a href="{{ route('lang.switch', 'es') }}">
                                <img src="{{ asset('public/frontend/images/icons/flags/es.png') }}" alt="Bandera de España" title="Cambiar idioma a español">{{ __('messages.spanish') }}
                            </a>
                        </li>
                        @endif
                        @if(app()->getLocale() != 'en')
                        <li class="language">
                            <a href="{{ route('lang.switch', 'en') }}">
                                <img src="{{ asset('public/frontend/images/icons/flags/gb.png') }}" alt="Bandera de Reino Unido" title="Switch language to English">{{ __('messages.english') }}
                            </a>
                        </li>
                        @endif
                        @if(app()->getLocale() != 'pt')
                        <li class="language">
                            <a href="{{ route('lang.switch', 'pt') }}">
                                <img src="{{ asset('public/frontend/images/icons/flags/br.png') }}" alt="Bandera de Brasil" title="Mudar idioma para português">{{ __('messages.portuguese') }}
                            </a>
                        </li>
                        @endif
                    </ul>
                </li>
                </ul>
            </div>
            </div>
        </div>
        <!-- ========== HEADER ========== -->
        <header class="horizontal-header sticky-header" data-menutoggle="991"
        style="
            background:
            linear-gradient(27deg, #151515 5px, transparent 5px) 0 5px,
            linear-gradient(207deg, #151515 5px, transparent 5px) 10px 0px,
            linear-gradient(27deg, #222 5px, transparent 5px) 0px 10px,
            linear-gradient(207deg, #222 5px, transparent 5px) 10px 5px,
            linear-gradient(90deg, #1b1b1b 10px, transparent 10px),
            linear-gradient(#1d1d1d 25%, #1a1a1a 25%, #1a1a1a 50%, transparent 50%, transparent 75%, #242424 75%, #242424);
            background-color: #131313;
            background-size: 20px 20px;
        "
        >
            <div class="container">
            <!-- BRAND -->
            <div class="brand">
                <div class="logo">
                <a href="{{ url('/') }}">
                    <img src="{{ asset('public/frontend/images/logo_header.png') }}" alt="Black Cat Hostal">
                </a>
                </div>
            </div>
            <!-- MOBILE MENU BUTTON -->
            <div id="toggle-menu-button" class="toggle-menu-button">
                <span class="line"></span>
                <span class="line"></span>
                <span class="line"></span>
            </div>
            <!-- MAIN MENU -->
            <nav id="main-menu" class="main-menu">
                <ul class="menu">
                @if(request()->is('') ? 'active' : '')
                    <li class="menu-item active">
                @else
                    <li class="menu-item">
                @endif
                    <a href="{{ url('/') }}">{{ __('messages.home') }}</a>
                </li>
                @if(request()->is('aboutus') ? 'active' : '')
                    <li class="menu-item active">
                @else
                    <li class="menu-item">
                @endif
                    <a href="{{ url('aboutus') }}">{{ __('messages.about') }}</a>
                </li>
                <li class="menu-item dropdown">
                    <a href="#">{{ __('messages.rooms') }}</a>
                    <ul class="submenu">
                        <li class="menu-item">
                            <a href="{{ url('room/detail/family') }}">{{ __('messages.family_room') }}</a>
                        </li>
                        <li class="menu-item">
                            <a href="{{ url('room/detail/king-queen') }}">{{ __('messages.king_queen_room') }}</a>
                        </li>
                        <li class="menu-item">
                            <a href="{{ url('room/detail/superior-king') }}">{{ __('messages.superior_king_room') }}</a>
                        </li>
                        <li class="menu-item">
                            <a href="{{ url('room/detail/twin') }}">{{ __('messages.twin_room') }}</a>
                        </li>
                        <li class="menu-item">
                            <a href="{{ url('room/detail/reduce') }}">{{ __('messages.reduced_mobility_room') }}</a>
                        </li>
                    </ul>
                </li>
                
                @if(request()->is('contactus') ? 'active' : '')
                    <li class="menu-item active">
                @else
                    <li class="menu-item">
                @endif
                    <a href="{{ url('contactus') }}">{{ __('messages.contact') }}</a>
                </li>
                <li class="menu-item menu-btn">
                    <a href="https://reservas.fnsbooking.com/busqueda.php?accion=N&release=6&datos=111188682----------------&idioma={{ app()->getLocale() }}&fecha_entrada=&fecha_salida=&orden=&pfe=2326&currency=&oferta_id=&tipo_habitacion_id=&bookingonline=&ocupacion=&ciudad=&entrada=21%2F11%2F2020&salida=28%2F11%2F2020" class="btn">
                        <i class="fa fa-calendar"></i>
                        {{ __('messages.reserve') }}
                    </a>
                 </li>
            </ul>
        </nav>
        </div>
    </header>

        @yield('content')

        <!-- ========== FOOTER ========== -->
        <footer>
            <div class="footer-widgets" style="
                    background:
                    linear-gradient(27deg, #151515 5px, transparent 5px) 0 5px,
                    linear-gradient(207deg, #151515 5px, transparent 5px) 10px 0px,
                    linear-gradient(27deg, #222 5px, transparent 5px) 0px 10px,
                    linear-gradient(207deg, #222 5px, transparent 5px) 10px 5px,
                    linear-gradient(90deg, #1b1b1b 10px, transparent 10px),
                    linear-gradient(#1d1d1d 25%, #1a1a1a 25%, #1a1a1a 50%, transparent 50%, transparent 75%, #242424 75%, #242424);
                    background-color: #131313;
                    background-size: 20px 20px;
                ">
                <div class="container">
                    <div class="row">
                        <!-- WIDGET -->
                        <div class="col-md-3">
                            <div class="footer-widget">
                                <img src="{{ asset('public/frontend/images/icons/sernatur.png') }}" alt="SERNATUR Chile - Servicio Nacional de Turismo" title="Certificado por SERNATUR Chile" loading="lazy">
                            </div>
                        </div>
                        <!-- WIDGET -->
                        <div class="col-md-3">
                        </div>
                        <!-- WIDGET -->
                        <div class="col-md-3">
                            <div class="footer-widget">
                            <h3>{{ __('messages.links') }}</h3>
                            <div class="inner">
                                <ul class="useful-links">
                                <li>
                                    <a href="{{ url('/') }}">{{ __('messages.breadcrumb_home') }}</a>
                                </li>
                                <li>
                                    <a href="{{ url('aboutus') }}">{{ __('messages.breadcrumb_about') }}</a>
                                </li>
                                <li>
                                    <a href="http://jisparking.buk.cl/cul_partner_complaint/tickets/new">{{ __('messages.complaints_channel') }}</a>
                                </li>
                                <li>
                                    <a href="{{ url('contactus') }}">{{ __('messages.breadcrumb_contact') }}</a>
                                </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- WIDGET -->
                    <div class="col-md-3">
                        <div class="footer-widget">
                        <h3>Contáctanos</h3>
                        <div class="inner">
                            <ul class="contact-details" style="font-family: 'Roboto', sans-serif;">
                            <li>
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                Compañia de Jesús 1921 <br>Barrio Brasil - Santiago</li>
                            <li>
                                <i class="fa fa-phone" aria-hidden="true"></i>
                                +56 9 49105984
                            </li>
                            <li>
                                <i class="fa fa-globe"></i>
                                www.blackcathostal.com</li>
                            <li>
                                <i class="fa fa-envelope"></i>
                                <a href="mailto:reservas@blackcathostal.com">reservas@blackcathostal.com</a>
                            </li>
                            </ul>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
                <!-- SUBFOOTER -->
                <div class="subfooter" style="color: #000 !important;">
                <div class="container">
                    <div class="row">
                    <div class="col-md-6">
                        <div class="copyrights">&copy; 2023 Black Cat Hostal. {{ __('messages.all_rights_reserved') }}</div>
                    </div>
                    <div class="col-md-6">
                        <div class="social-media">
                        <a class="facebook" data-original-title="Facebook" data-toggle="tooltip" href="https://www.facebook.com/blackcathostalboutique">
                            <i class="fa fa-facebook"></i>
                        </a>
                        <a class="linkedin" data-original-title="Linkedin" data-toggle="tooltip" href="https://www.linkedin.com/company/blackcathostal/">
                            <i class="fa fa-linkedin"></i>
                        </a>
                        <a class="instagram" data-original-title="Instagram" data-toggle="tooltip" href="https://www.instagram.com/blackcathostal">
                            <i class="fa fa-instagram"></i>
                        </a>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <!-- ========== CONTACT NOTIFICATION ========== -->
    <div id="contact-notification" class="notification fixed"></div>
    <!-- ========== BACK TO TOP ========== -->
    <div class="back-to-top">
    <i class="fa fa-angle-up" aria-hidden="true"></i>
    </div>

    <!-- ========== JAVASCRIPT ========== -->
    <script src="https://kit.fontawesome.com/31c1b74049.js" crossorigin="anonymous"></script>
    <script src="{{ asset('public/frontend/js/jquery.min.js') }}"></script>
    <script src="{{ asset('public/frontend/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('public/frontend/js/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('public/frontend/js/jquery.mmenu.js') }}"></script>
    <script src="{{ asset('public/frontend/js/jquery.inview.min.js') }}"></script>
    <script src="{{ asset('public/frontend/js/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('public/frontend/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('public/frontend/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('public/frontend/js/owl.carousel.thumbs.min.js') }}"></script>
    <script src="{{ asset('public/frontend/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('public/frontend/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('public/frontend/js/masonry.pkgd.min.js') }}"></script>
    <script src="{{ asset('public/frontend/js/wow.min.js') }}"></script>
    <script src="{{ asset('public/frontend/js/countup.min.js') }}"></script>
    <script src="{{ asset('public/frontend/js/moment.min.js') }}"></script>
    <script src="{{ asset('public/frontend/js/daterangepicker.js') }}"></script>
    <script src="{{ asset('public/frontend/js/parallax.min.js') }}"></script>
    <script src="{{ asset('public/frontend/js/smoothscroll.min.js') }}"></script>
    <script src="{{ asset('public/frontend/js/instafeed.min.js') }}"></script>
    <script src="{{ asset('public/frontend/js/main.js') }}"></script>
    <!-- ========== REVOLUTION SLIDER ========== -->
    <script src="{{ asset('public/frontend/revolution/js/jquery.themepunch.tools.min.js') }}"></script>
    <script src="{{ asset('public/frontend/revolution/js/jquery.themepunch.revolution.min.js') }}"></script>
    <script src="{{ asset('public/frontend/revolution/js/extensions/revolution.extension.actions.min.js') }}"></script>
    <script src="{{ asset('public/frontend/revolution/js/extensions/revolution.extension.carousel.min.js') }}"></script>
    <script src="{{ asset('public/frontend/revolution/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
    <script src="{{ asset('public/frontend/revolution/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
    <script src="{{ asset('public/frontend/revolution/js/extensions/revolution.extension.migration.min.js') }}"></script>
    <script src="{{ asset('public/frontend/revolution/js/extensions/revolution.extension.navigation.min.js') }}r"></script>
    <script src="{{ asset('public/frontend/revolution/js/extensions/revolution.extension.parallax.min.js') }}"></script>
    <script src="{{ asset('public/frontend/revolution/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
    <script src="{{ asset('public/frontend/revolution/js/extensions/revolution.extension.video.min.js') }}"></script>
    
    <!-- Sojern Tag v6_js, Pixel Version: 1 -->
    <script src='https://static.sojern.com/utils/sjrn_autocx.js'></script>
    <script>
    (function () {
        /* Please fill the following values. */ 
        var sjrId = '370803'; if(window.location.pathname == '/') 
        {
        sjrId = '370802';
        } 
    else if (window.location.pathname.includes('room')){
        sjrId = '370805';
        }
        var params = {
        hd1: "", /* Check In Date. Format yyyy-mm-dd. Ex: 2015-02-14 */
        hd2: "", /* Check Out Date. Format yyyy-mm-dd. Ex: 2015-02-14 */
        hc1: "", /* Destination City */
        hn1: "", /* Destination Country */
        hb: "", /* Hotel Brand */
        hpid: "", /* Property ID */
        t: "", /* Number of Travelers */
        sha256_eml: "", /* Hashed Email SHA256 */
        sha1_eml: "", /* Hashed Email SHA1 */
        md5_eml: "", /* Hashed Email MD5 */
        ccid: "" /* Client Cookie id */
        };

        /* Please do not modify the below code. */
        try{params = Object.assign({}, sjrn_params, params);}catch(e){}
        var cid = [];
        var paramsArr = [];
        var cidParams = [];
        var pl = document.createElement('iframe');
        var defaultParams = {"vid":"hot","et":"hpr"};
        for(key in defaultParams) { params[key] = defaultParams[key]; };
        for(key in cidParams) { cid.push(params[cidParams[key]]); };
        params.cid = cid.join('|');
        for(key in params) { paramsArr.push(key + '=' + encodeURIComponent(params[key])) };
        pl.type = 'text/html';
        pl.setAttribute('style','height:0; width: 0; display:none;');
        pl.async = true;
        pl.src = 'https://static.sojern.com/cip/w/s?id=' + sjrId + '&f_v=v6_js&p_v=1&' + paramsArr.join('&');
        (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(pl);
        })();
    </script>
    <!-- End Sojern Tag -->

    <!-- reCAPTCHA Enterprise Handler -->
    <script>
        // Auto-cerrar alertas después de 5 segundos
        document.addEventListener('DOMContentLoaded', function() {
            setTimeout(function() {
                const alerts = document.querySelectorAll('.alert.alert-dismissible');
                alerts.forEach(function(alert) {
                    if (alert.classList.contains('show')) {
                        const closeBtn = alert.querySelector('.close');
                        if (closeBtn) {
                            closeBtn.click();
                        }
                    }
                });
            }, 5000);
            
            // Verificar que reCAPTCHA se cargue correctamente
            if (typeof grecaptcha !== 'undefined') {
                console.log('reCAPTCHA cargado correctamente');
            } else {
                console.error('reCAPTCHA no se pudo cargar');
            }
        });
        
        // Callbacks para reCAPTCHA estándar con debugging
        var onloadCallback = function() {
            console.log('reCAPTCHA onload callback ejecutado');
        };
        
        var verifyCallback = function(response) {
            console.log('reCAPTCHA verificado correctamente:', response.substring(0, 50) + '...');
            
            // Verificar que el token se esté agregando al formulario
            const forms = document.querySelectorAll('form[action*="message/store"]');
            forms.forEach(function(form) {
                const hiddenInput = form.querySelector('textarea[name="g-recaptcha-response"]');
                if (hiddenInput) {
                    console.log('Token reCAPTCHA encontrado en formulario:', hiddenInput.value.substring(0, 50) + '...');
                } else {
                    console.error('NO se encontró el campo g-recaptcha-response en el formulario');
                }
            });
        };
        
        var expiredCallback = function() {
            console.warn('reCAPTCHA expiró');
            alert('El reCAPTCHA ha expirado. Por favor, complételo nuevamente.');
        };
        
        // Debugging adicional para verificar el estado del formulario antes del envío
        document.addEventListener('DOMContentLoaded', function() {
            const forms = document.querySelectorAll('form[action*="message/store"]');
            forms.forEach(function(form) {
                form.addEventListener('submit', function(e) {
                    const recaptchaResponse = form.querySelector('textarea[name="g-recaptcha-response"]');
                    console.log('Enviando formulario...');
                    console.log('reCAPTCHA response al enviar:', recaptchaResponse ? recaptchaResponse.value.substring(0, 50) + '...' : 'NO ENCONTRADO');
                    
                    if (!recaptchaResponse || !recaptchaResponse.value) {
                        alert('Por favor complete la verificación reCAPTCHA antes de enviar.');
                        e.preventDefault();
                        return false;
                    }
                });
            });
        });
    </script>

</body>
</html>