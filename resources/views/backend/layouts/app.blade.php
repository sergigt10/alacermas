<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Administració de la web</title>

    <!-- Scripts -->
    <!-- <script src="{{ asset('js/app.js') }}" defer></script> -->

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    @yield('styles')

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('backend/vendors/iconfonts/mdi/font/css/materialdesignicons.min.css') }}">
    <!-- <link rel="stylesheet" href="{{ asset('backend/vendors/css/vendor.bundle.base.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/vendors/css/vendor.bundle.addons.css') }}"> -->
    <link rel="stylesheet" href="{{ asset('backend/css/mim/style.css') }}">
    <link rel="shortcut icon" href="{{ asset('backend/images/favicon.ico') }}" />
</head>

<body>
    <div class="container-scroller">
        <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                <a class="navbar-brand brand-logo" href="{{ route('backend.inici.index') }}"><img src="{{ asset('backend/images/logo.png') }}" alt="logo"/></a>
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-center">
                <ul class="navbar-nav navbar-nav-left">
                    <a href="https://www.alacermas.com" target="_blank" style="color:black">Veure pàgina web</a>
                </ul>
                <ul class="navbar-nav navbar-nav-right">
                    <li class="nav-item nav-profile dropdown mr-0 mr-sm-2">
                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
                        <span class="nav-profile-name">Administrador</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <i class="mdi mdi-logout text-primary"></i>
                            Tancar sessió
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                    </li>
                </ul>
                <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                    <span class="mdi mdi-menu"></span>
                </button>
            </div>
        </nav>
        <div class="container-fluid page-body-wrapper">
            <div id="right-sidebar" class="settings-panel"></div>
            
            <!-- NAVBAR INICI -->
            <nav class="sidebar sidebar-offcanvas" id="sidebar">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('backend.inici.index') }}">
                            <i class="mdi mdi-home menu-icon"></i>
                            <span class="menu-title">
                                Inici
                            </span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#general-pages-1" <?php echo (strpos($_SERVER['REQUEST_URI'] ,"quisoms") !== false) ? 'aria-expanded="true"' : 'aria-expanded="false"'; ?> aria-controls="general-pages-1">
                            <i class="mdi mdi-help-circle menu-icon"></i>
                            <span class="menu-title">Qui som</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div <?php echo (strpos($_SERVER['REQUEST_URI'] ,"quisoms") !== false) ? 'class="collapse show"' : 'class="collapse"'; ?> id="general-pages-1">
                            <!-- <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> 
                                    <a class="nav-link {{ (request()->is('backend/quisoms/create')) ? 'active' : '' }}" href="{{ route('backend.quisoms.create') }}">
                                        Inserir
                                    </a>
                                </li>
                            </ul> -->
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> 
                                    <a class="nav-link {{ ( (request()->is('backend/quisoms')) ||  (request()->is('backend/quisoms/*/edit'))) ? 'active' : '' }}" href="{{ url('backend/quisoms/1/edit') }}">
                                        Modificar
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#general-pages-2" <?php echo (strpos($_SERVER['REQUEST_URI'] ,"serveis") !== false) ? 'aria-expanded="true"' : 'aria-expanded="false"'; ?> aria-controls="general-pages-2">
                            <i class="mdi mdi-buffer menu-icon"></i>
                            <span class="menu-title">Serveis</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div <?php echo (strpos($_SERVER['REQUEST_URI'] ,"serveis") !== false) ? 'class="collapse show"' : 'class="collapse"'; ?> id="general-pages-2">
                            <!-- <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> 
                                    <a class="nav-link {{ (request()->is('backend/serveis/create')) ? 'active' : '' }}" href="{{ route('backend.serveis.create') }}">
                                        Inserir
                                    </a>
                                </li>
                            </ul> -->
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> 
                                    <a class="nav-link {{ ( (request()->is('backend/serveis')) ||  (request()->is('backend/serveis/*/edit'))) ? 'active' : '' }}" href="{{ url('backend/serveis/1/edit') }}">
                                        Modificar
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#general-pages-3" <?php echo (strpos($_SERVER['REQUEST_URI'] ,"histories") !== false) ? 'aria-expanded="true"' : 'aria-expanded="false"'; ?> aria-controls="general-pages-3">
                            <i class="mdi mdi-book-open-variant menu-icon"></i>
                            <span class="menu-title">Història</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div <?php echo (strpos($_SERVER['REQUEST_URI'] ,"histories") !== false) ? 'class="collapse show"' : 'class="collapse"'; ?> id="general-pages-3">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> 
                                    <a class="nav-link {{ (request()->is('backend/histories/create')) ? 'active' : '' }}" href="{{ route('backend.histories.create') }}">
                                        Inserir
                                    </a>
                                </li>
                            </ul>
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> 
                                    <a class="nav-link {{ ( (request()->is('backend/histories')) ||  (request()->is('backend/histories/*/edit'))) ? 'active' : '' }}" href="{{ route('backend.histories.index') }}">
                                        Modificar
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#general-pages-videoclip" <?php echo (strpos($_SERVER['REQUEST_URI'] ,"certificacions") !== false) ? 'aria-expanded="true"' : 'aria-expanded="false"'; ?> aria-controls="general-pages-videoclip">
                            <i class="mdi mdi-certificate menu-icon"></i>
                            <span class="menu-title">Certificacions</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div <?php echo (strpos($_SERVER['REQUEST_URI'] ,"certificacions") !== false) ? 'class="collapse show"' : 'class="collapse"'; ?> id="general-pages-videoclip">
                            <!-- <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> 
                                    <a class="nav-link {{ (request()->is('backend/certificacions/create')) ? 'active' : '' }}" href="{{ route('backend.certificacions.create') }}">
                                        Inserir
                                    </a>
                                </li>
                            </ul> -->
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> 
                                    <a class="nav-link {{ ( (request()->is('backend/certificacions')) ||  (request()->is('backend/certificacions/*/edit'))) ? 'active' : '' }}" href="{{ url('backend/certificacions/1/edit') }}">
                                        Modificar
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#general-pages-4" <?php echo (strpos($_SERVER['REQUEST_URI'] ,"centres") !== false) ? 'aria-expanded="true"' : 'aria-expanded="false"'; ?> aria-controls="general-pages-4">
                            <i class="mdi mdi-settings menu-icon"></i>
                            <span class="menu-title">Centres</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div <?php echo (strpos($_SERVER['REQUEST_URI'] ,"centres") !== false) ? 'class="collapse show"' : 'class="collapse"'; ?> id="general-pages-4">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> 
                                    <a class="nav-link {{ (request()->is('backend/centres/create')) ? 'active' : '' }}" href="{{ route('backend.centres.create') }}">
                                        Inserir
                                    </a>
                                </li>
                            </ul>
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> 
                                    <a class="nav-link {{ ( (request()->is('backend/centres')) ||  (request()->is('backend/centres/*/edit'))) ? 'active' : '' }}" href="{{ route('backend.centres.index') }}">
                                        Modificar
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#general-pages-5" <?php echo (strpos($_SERVER['REQUEST_URI'] ,"categories") !== false) ? 'aria-expanded="true"' : 'aria-expanded="false"'; ?> aria-controls="general-pages-5">
                            <i class="mdi mdi-source-pull menu-icon"></i>
                            <span class="menu-title">Categories prod.</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div <?php echo (strpos($_SERVER['REQUEST_URI'] ,"categories") !== false) ? 'class="collapse show"' : 'class="collapse"'; ?> id="general-pages-5">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> 
                                    <a class="nav-link {{ (request()->is('backend/categories/create')) ? 'active' : '' }}" href="{{ route('backend.categories.create') }}">
                                        Inserir
                                    </a>
                                </li>
                            </ul>
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> 
                                    <a class="nav-link {{ ( (request()->is('backend/categories')) ||  (request()->is('backend/categories/*/edit'))) ? 'active' : '' }}" href="{{ route('backend.categories.index') }}">
                                        Modificar
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#general-pages-6" <?php echo (strpos($_SERVER['REQUEST_URI'] ,"productes") !== false || strpos($_SERVER['REQUEST_URI'] ,"taules") !== false ) ? 'aria-expanded="true"' : 'aria-expanded="false"'; ?> aria-controls="general-pages-6">
                            <i class="mdi mdi-apps menu-icon"></i>
                            <span class="menu-title">Productes</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div <?php echo (strpos($_SERVER['REQUEST_URI'] ,"productes") !== false || strpos($_SERVER['REQUEST_URI'] ,"taules") !== false ) ? 'class="collapse show"' : 'class="collapse"'; ?> id="general-pages-6">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> 
                                    <a class="nav-link {{ (request()->is('backend/productes/create')) ? 'active' : '' }}" href="{{ route('backend.productes.create') }}">
                                        Inserir producte
                                    </a>
                                </li>
                            </ul>
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> 
                                    <a class="nav-link {{ ( (request()->is('backend/productes')) ||  (request()->is('backend/productes/*/edit'))) ? 'active' : '' }}" href="{{ route('backend.productes.index') }}">
                                        Modificar producte
                                    </a>
                                </li>
                            </ul>
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> 
                                    <a class="nav-link {{ (request()->is('backend/taules/create')) ? 'active' : '' }}" href="{{ route('backend.taules.create') }}">
                                        Inserir taula
                                    </a>
                                </li>
                            </ul>
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> 
                                    <a class="nav-link {{ ( (request()->is('backend/taules')) ||  (request()->is('backend/taules/*/edit'))) ? 'active' : '' }}" href="{{ route('backend.taules.index') }}">
                                        Modificar taula
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </nav>
            <!-- NAVBAR FI -->

            @yield('content')
            
            <footer class="footer">
                <div class="d-sm-flex justify-content-center justify-content-sm-between">
                    <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Disseny web: <a style="color: black;" target="_blank" href="https://www.webmastervic.com" target="_blank">Webmastervic</a></span>
                </div>
            </footer>
        </div>
    </div>
</div>
    <script src="{{ asset('backend/vendors/js/vendor.bundle.base.js') }}"></script>
    <script src="{{ asset('backend/vendors/js/vendor.bundle.addons.js') }}"></script>
    <!-- <script src="{{ asset('backend/js/off-canvas.js') }}"></script>
    <script src="{{ asset('backend/js/hoverable-collapse.js') }}"></script>
    <script src="{{ asset('backend/js/template.js') }}"></script>
    <script src="{{ asset('backend/js/settings.js') }}"></script>
    <script src="{{ asset('backend/js/todolist.js') }}"></script> -->
    @yield('scripts')
</body>
</html>
