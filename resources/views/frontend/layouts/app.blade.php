<!DOCTYPE html>
<html lang="{{ Config::get('app.locale') }}">
<head>
    <!-- Meta Options -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- SEO -->
    {!! SEO::generate() !!}

    <!-- estils personalitzats -->
    @yield('styles')

    <meta name="theme-color" content="#0b3f62">

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/bootstrap.min.css') }}">
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('frontend/assets/images/heading-icon.png') }}">
    <!-- Owl Carousal -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/owl.theme.default.min.css') }}">
    <!-- Animate on scroll -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/aos.css') }}">
    <!-- Fancy Box -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/jquery.fancybox.min.css') }}">
    <!-- Nice Select -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/nice-select.css') }}">
    <!-- Stylesheet -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/style-dark.css') }}">
    <!-- Colors -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/color.css') }}">
    <!-- Responsive -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/responsive.css') }}">
    <!-- Font Awesome 5 -->
    <script src="https://kit.fontawesome.com/27a041baf1.js" crossorigin="anonymous"></script>
</head>
 
<body>
    <!-- Loader Start -->
  <div class="preloader"> 
    <figure>
      <img src="{{ asset('frontend/assets/images/pre.jpg') }}" alt="Alacermas acero inoxidable"> 
    </figure>
  </div>
  <!-- Loader End -->
  
    <header class="header-style-one" >
        <div class="container">
            <div class="row">
                <div class="desktop-nav" id="stickyHeader">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="d-flex-all justify-content-between">
                                    <div class="header-logo">
                                        <a href="{{ route('frontend.inici.index') }}">
                                            <figure>
                                                <img src="{{ asset('frontend/assets/images/logo.png') }}" alt="Alacermas acero inoxidable">
                                            </figure>
                                        </a>
                                    </div>
                                    <div class="nav-bar">
                                        <ul>
                                            <li>
                                                <a href="{{ route('frontend.inici.index') }}">INICIO</a>
                                            </li>
                                            <li class="menu-item-has-children">
                                                <a href="JavaScript:void(0)">EMPRESA</a>
                                                <ul class="sub-menu">
                                                    <li><a href="{{ route('frontend.quisom.index') }}">QUIÉNES SOMOS</a></li>
                                                    <li><a href="{{ route('frontend.serveis.index') }}">SERVICIOS</a></li>
                                                    <li><a href="{{ route('frontend.historia.index') }}">HISTORIA</a></li>
                                                    <li><a href="{{ route('frontend.certificacions.index') }}">CERTIFICACIONES</a></li>
                                                    <li><a href="{{ route('frontend.treballaAmbNosaltres.index') }}">TRABAJA CON NOSOTROS</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item-has-children">
                                                <a href="JavaScript:void(0)">PRODUCTOS</a>
                                                <ul class="sub-menu">
                                                    <li><a href="{{ route('frontend.productes.index', ['categoria' => 'acero-inoxidable']) }}">ACERO INOXIDABLE</a></li>
                                                    <li><a href="{{ route('frontend.productes.index', ['categoria' => 'normalizados-inoxidable']) }}">NORMALIZADOS INOXIDABLE</a></li>
                                                    <li><a href="{{ route('frontend.productes.index', ['categoria' => 'suministros-industriales']) }}">SUMINISTROS INDUSTRIALES</a></li>
                                                    <li><a href="{{ route('frontend.productes.index', ['categoria' => 'aluminio']) }}">ALUMINIO</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="{{ route('frontend.centres.index') }}">CENTROS</a>
                                            </li>
                                            <li>
                                                <a href="{{ route('frontend.contacte.index') }}">CONTACTO</a>
                                            </li>
                                        </ul>
                                        <div class="extras">
                                            <div class="theme-color">
                                                <img src="" alt="" id="theme-icon" style="display:none;">
                                            </div>
                                            <a href="javascript:void(0)" id="mobile-menu" class="menu-start">
                                                <svg id="ham-menu" viewBox="0 0 100 100"> <path class="line line1" d="M 20,29.000046 H 80.000231 C 80.000231,29.000046 94.498839,28.817352 94.532987,66.711331 94.543142,77.980673 90.966081,81.670246 85.259173,81.668997 79.552261,81.667751 75.000211,74.999942 75.000211,74.999942 L 25.000021,25.000058" /> <path class="line line2" d="M 20,50 H 80" /> <path class="line line3" d="M 20,70.999954 H 80.000231 C 80.000231,70.999954 94.498839,71.182648 94.532987,33.288669 94.543142,22.019327 90.966081,18.329754 85.259173,18.331003 79.552261,18.332249 75.000211,25.000058 75.000211,25.000058 L 25.000021,74.999942" /> </svg>
                                            </a>
                                            <a href="javascript:void(0)" id="desktop-menu" class="menu-start">
                                                <svg id="ham-menue" viewBox="0 0 100 100"> <path class="line line1" d="M 20,29.000046 H 80.000231 C 80.000231,29.000046 94.498839,28.817352 94.532987,66.711331 94.543142,77.980673 90.966081,81.670246 85.259173,81.668997 79.552261,81.667751 75.000211,74.999942 75.000211,74.999942 L 25.000021,25.000058" /> <path class="line line2" d="M 20,50 H 80" /> <path class="line line3" d="M 20,70.999954 H 80.000231 C 80.000231,70.999954 94.498839,71.182648 94.532987,33.288669 94.543142,22.019327 90.966081,18.329754 85.259173,18.331003 79.552261,18.332249 75.000211,25.000058 75.000211,25.000058 L 25.000021,74.999942" /> </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mobile-nav" id="mobile-nav">
                    <div class="res-log">
                        <a href="{{ route('frontend.inici.index') }}">
                            <img src="{{ asset('frontend/assets/images/logo.png') }}" alt="Alacermas acero inoxidable">
                        </a>
                    </div>
                    <ul>
                        <li>
                            <a href="{{ route('frontend.inici.index') }}">INICIO</a>
                        </li>
                        <li class="menu-item-has-children"><a href="JavaScript:void(0)">EMPRESA</a>
                            <ul class="sub-menu">
                                <li><a href="{{ route('frontend.quisom.index') }}">QUIÉNES SOMOS</a></li>
                                <li><a href="{{ route('frontend.serveis.index') }}">SERVICIOS</a></li>
                                <li><a href="{{ route('frontend.historia.index') }}">HISTORIA</a></li>
                                <li><a href="{{ route('frontend.certificacions.index') }}">CERTIFICACIONES</a></li>
                                <li><a href="{{ route('frontend.treballaAmbNosaltres.index') }}">TRABAJA CON NOSOTROS</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="javascript:void(0)">PRODUCTOS</a>
                            <ul class="sub-menu">
                                <li><a href="{{ route('frontend.productes.index', ['categoria' => 'acero-inoxidable']) }}">ACERO INOXIDABLE</a></li>
                                <li><a href="{{ route('frontend.productes.index', ['categoria' => 'normalizados-inoxidable']) }}">NORMALIZADOS INOXIDABLE</a></li>
                                <li><a href="{{ route('frontend.productes.index', ['categoria' => 'suministros-industriales']) }}">SUMINISTROS INDUSTRIALES</a></li>
                                <li><a href="{{ route('frontend.productes.index', ['categoria' => 'aluminio']) }}">ALUMINIO</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="{{ route('frontend.centres.index') }}">CENTROS</a>
                        </li>
                        <li>
                            <a href="{{ route('frontend.contacte.index') }}">CONTACTO</a>
                        </li>
                    </ul>
                    <a href="JavaScript:void(0)" id="res-cross"></a>
                </div>
                <div class="mobile-nav desktop-menu">
                    <h2>Distribución de productos de Acero Inoxidable</h2>
                    <p class="des">Aluminio, metales no férricos, plásticos técnicos y todos los suministros industriales que pueden intervenir en los procesos de transformación de estos materiales.</p>
                    <figure>
                        <img src="{{ asset('frontend/assets/images/centre.jpg') }}" alt="Alacermas acero inoxidable">
                    </figure>
                    <h3><a href="https://goo.gl/maps/MDyCyUJK6KG4EMEy5" target="_blank" style="color: #4065bc">Ver ubicación</a></h3>
                    <p class="num">+34 93 562 08 18</p>
                    <p class="adrs">Polígono Industrial Ronda, Ronda de la Agricultura, 15 <br>08503 Gurb (Barcelona) </p>
                    <div class="social-medias">
                        <a href="https://twitter.com/alacermas" target="_blank"><i class="fab fa-twitter"></i></a>
                        <a href="https://es.linkedin.com/company/alacer-mas-s.a." target="_blank"><i class="fab fa-linkedin"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    @yield('content')

    <footer class="footer-style-one">
        <div class="footer-p-2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="footer-col">
                            <h3>Información legal</h3>
                            <p><a href="{{ route('frontend.avisLegal.index') }}" style="color:#b7b7b7">Aviso legal</a></p>
                            <p><a href="{{ route('frontend.politicaCookies.index') }}" style="color:#b7b7b7">Política de cookies</a></p>
                            <p><a href="{{ route('frontend.politicaPrivacitat.index') }}" style="color:#b7b7b7">Política de privacidad</a></p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="footer-col">
                            <h3>Contacto</h3>
                            <ul>
                                <li>
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="79" height="94" viewBox="0 0 79 94"> <defs> <clipPath id="clip-location_B"> <rect width="79" height="94"/> </clipPath> </defs> <g id="location_B" data-name="location B" clip-path="url(#clip-location_B)"> <path id="Path_121" data-name="Path 1" d="M962.855,575.375a3,3,0,0,1-2.1-.861l-26.263-25.826c-11.03-11.993-13.791-27.653-7.492-42a38.334,38.334,0,0,1,34.959-23.117l1.346.009c15.262,0,27.868,8.452,33.722,22.609,6.152,14.878,3.046,31.554-7.912,42.485-.528.555-24.064,25.75-24.064,25.75a3,3,0,0,1-2.129.951Zm-.9-85.8A31.924,31.924,0,0,0,932.49,509.1c-5.313,12.1-2.954,25.342,6.31,35.419l23.963,23.559c15.027-16.085,20.179-21.585,22.274-23.488l-.164-.165c9.233-9.209,11.825-23.318,6.605-35.944a29.677,29.677,0,0,0-28.177-18.9Z" transform="translate(-922.725 -482.15)"/> <path id="Path_23" data-name="Path 2" d="M15,6a9,9,0,1,0,9,9,9.01,9.01,0,0,0-9-9m0-6A15,15,0,1,1,0,15,15,15,0,0,1,15,0Z" transform="translate(25 26)"/> </g> </svg>
                                    <p>Polígono Industrial Ronda, Ronda de la Agricultura, 15 08503 Gurb (Barcelona)</p>
                                </li>
                                <li>
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="40" height="62" viewBox="0 0 40 62"> <defs> <clipPath id="dasdasdasd"> <rect width="40" height="62"/> </clipPath> </defs> <g id="Mobsdfsdfsdfsdfile" clip-path="url(#dasdasdasd)"> <path id="Path_331" data-name="Path 1" d="M10,6a4,4,0,0,0-4,4V50a4,4,0,0,0,4,4H28a4,4,0,0,0,4-4V10a4,4,0,0,0-4-4H10m0-6H28A10,10,0,0,1,38,10V50A10,10,0,0,1,28,60H10A10,10,0,0,1,0,50V10A10,10,0,0,1,10,0Z" transform="translate(1 1)"/> <path id="Path_2" data-name="Path 2" d="M2.5,0h7a2.5,2.5,0,0,1,0,5h-7a2.5,2.5,0,0,1,0-5Z" transform="translate(14 48)"/> </g> </svg>
                                    <p>Ventas:<br> +34 93 562 08 18 - 93 889 03 28</p>
                                </li>
                                <li>
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="40" height="62" viewBox="0 0 40 62"> <defs> <clipPath id="dasdasdasd"> <rect width="40" height="62"/> </clipPath> </defs> <g id="Mobsdfsdfsdfsdfile" clip-path="url(#dasdasdasd)"> <path id="Path_331" data-name="Path 1" d="M10,6a4,4,0,0,0-4,4V50a4,4,0,0,0,4,4H28a4,4,0,0,0,4-4V10a4,4,0,0,0-4-4H10m0-6H28A10,10,0,0,1,38,10V50A10,10,0,0,1,28,60H10A10,10,0,0,1,0,50V10A10,10,0,0,1,10,0Z" transform="translate(1 1)"/> <path id="Path_2" data-name="Path 2" d="M2.5,0h7a2.5,2.5,0,0,1,0,5h-7a2.5,2.5,0,0,1,0-5Z" transform="translate(14 48)"/> </g> </svg>
                                    <p>Administración:<br>+34 93 886 39 31</p>
                                </li>
                                <li>
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="102" height="93" viewBox="0 0 102 93"> <defs> <clipPath id="clip-Email_B"> <rect width="102" height="93"/> </clipPath> </defs> <g id="Email_B" data-name="Email B" clip-path="url(#clip-Email_B)"> <path id="Path_1444" data-name="Path 1" d="M969.85,550.4,927.766,528.2l2.8-5.307,39.229,20.7,37.712-20.677,2.885,5.261Z" transform="translate(-918 -492)"/> <path id="Path_24" data-name="Path 2" d="M969.562,494.385l48.391,25.361,0,1.818c-.023,17.272-.043,42.814-.012,47.124l.012.024v.709c0,5.426-1.516,9.425-4.508,11.885a10.4,10.4,0,0,1-6.575,2.344l-75.5-.016c-3.557.071-5.965-.931-7.717-2.752-2.4-2.5-3.517-6.391-3.317-11.577l.065-1.194c.116-5.315.029-29.954-.067-46.535l-.011-1.842Zm42.386,28.988-42.411-22.227-43.2,22.238c.189,32.939.239,42.8-.143,46.148l.13.005c-.168,4.351.8,6.309,1.645,7.185a3.342,3.342,0,0,0,2.458.984l76.043-.071a4.65,4.65,0,0,0,3.16-.963c1.517-1.248,2.319-3.754,2.319-7.25h.09C1011.893,566.689,1011.9,557.566,1011.947,523.373Z" transform="translate(-918 -492)"/> </g> </svg>
                                    <p>alacermas@alacermas.com</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="footer-col">
                        <h3>Horarios</h3>
                            <p>
                                Mañanas: 08:00h - 13:00h<br>
                                Tardes: 15:00h - 18:30h<br>
                                Viernes tarde: 15:00h - 18:00h<br>
                                Sábados y Domingos: Cerrado
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-p-3 rights">
            <div class="container">
                <div class="row">
                    <div class="footer-col">
                        <p>Alacer Mas {{ now()->year }}</p>
                        <div class="social-medias">
                            <a href="https://twitter.com/alacermas" target="_blank"><i class="fab fa-twitter"></i></a>
                            <a href="https://es.linkedin.com/company/alacer-mas-s.a." target="_blank"><i class="fab fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <button id="scrollTop" class="scrollTopStick">
        <i class="fa-solid fa-arrow-up" style="color: #FFF"></i>
    </button>
    <!-- Jquery -->
    <script src="{{ asset('frontend/assets/js/jquery.min.js') }}"></script>
    <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
    <!-- Waypoint -->
    <script src="{{ asset('frontend/assets/js/jquery.waypoints.min.js') }}"></script>
    <!-- Counter -->
    <script src="{{ asset('frontend/assets/js/jquery.counterup.min.js') }}"></script>
    <!-- Bootstrap Js -->
    <script src="{{ asset('frontend/assets/js/bootstrap.min.js') }}"></script>
    <!-- Fancybox Js -->
    <script src="{{ asset('frontend/assets/js/jquery.fancybox.min.js') }}"></script>
    <!-- Nice Select Js -->
    <script src="{{ asset('frontend/assets/js/jquery.nice-select.js') }}"></script>
    <!-- Animate on scroll Js -->
    <script src="{{ asset('frontend/assets/js/aos.js') }}"></script>
    <!-- Owl Carousal Js -->
    <script src="{{ asset('frontend/assets/js/owl.carousel.min.js') }}"></script>
    <!-- Custom Js -->
    <script src="{{ asset('frontend/assets/js/custom.js') }}"></script>

    @yield('scripts')

</body>
</html>
