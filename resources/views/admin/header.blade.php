<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>ROC</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta content="Admin Dashboard" name="description" />
    <meta content="ThemeDesign" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">

    <!--Morris Chart CSS -->
    <link rel="stylesheet" href="assets/plugins/morris/morris.css">

    <link rel="stylesheet" href="{{ asset('assets/plugins/morris/morris.css') }}">
    <link href="{{asset('assets/admin/plugins/datatables/jquery.dataTables.min.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{asset('assets/admin/plugins/datatables/buttons.bootstrap4.min.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{asset('assets/admin/plugins/datatables/fixedHeader.bootstrap4.min.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{asset('assets/admin/plugins/datatables/responsive.bootstrap4.min.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{asset('assets/admin/plugins/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{asset('assets/admin/plugins/datatables/scroller.bootstrap4.min.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{asset('assets/admin/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/admin/css/icons.css') }}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/admin/css/style.css') }}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/admin/plugins/timepicker/bootstrap-timepicker.min.css') }}" rel="stylesheet">
    <link href="{{asset('assets/admin/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css') }}"
        rel="stylesheet">
    <link href="{{asset('assets/admin/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css') }}"
        rel="stylesheet">
    <link href="{{asset('assets/admin/plugins/bootstrap-touchspin/css/jquery.bootstrap-touchspin.min.css') }}"
        rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <script src="{{asset('https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js')}}"></script>
    <script src="{{ asset('https://code.jquery.com/jquery-3.6.0.min.js') }}"></script>

    <!-- Bootstrap CSS v5.2.1 -->

</head>

<body>

    <div class="header-bg bg-dark">
        <!-- Navigation Bar-->
        <header id="topnav">
            <div class="topbar-main">
                <div class="container-fluid">

                    <!-- Logo-->
                    <div>
                        <a href="/" class="logo text-primary m-2 p-1 d-flex align-items-end">
                            {{-- <img src="assets/images/logo-light.png" class="logo-lg" alt="" height="26">
                            <img src="assets/images/logo-sm.png" class="logo-sm" alt="" height="28"> --}}
                            <img src="{{ asset('assets/img/logo-2.png') }}" alt="Roc service" height="80">

                        </a>
                    </div>
                    <!-- End Logo-->

                    <div class="menu-extras topbar-custom navbar p-0">

                        <ul class="mb-0 nav navbar-right ml-auto list-inline">

                            <li class="list-inline-item notification-list d-none d-sm-inline-block">
                                <a href="#" id="btn-fullscreen"
                                    class="waves-effect waves-light notification-icon-box"><i
                                        class="fas fa-expand"></i></a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle profile waves-effect waves-light"
                                    data-toggle="dropdown" aria-expanded="true">
                                    <img src="{{ asset('assets/admin/images/users/avatar-1.jpg') }}" alt="user-img"
                                        class="rounded-circle">
                                    <span class="profile-username">
                                        {{Auth::user()->email}} <span class="mdi mdi-chevron-down font-15"></span>
                                    </span>
                                </a>
                                <ul class="dropdown-menu">

                                    <li class="dropdown-divider"></li>
                                    <li>
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf

                                            <a href="route('logout')" onclick="event.preventDefault();
                                                            this.closest('form').submit();" class="dropdown-item">
                                                {{ __('Déconnexion') }}
                                            </a>
                                        </form>
                                    </li>
                                </ul>
                            </li>

                            <li class="menu-item dropdown notification-list list-inline-item">
                                <!-- Mobile menu toggle-->
                                <a class="navbar-toggle nav-link">
                                    <div class="lines">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </div>
                                </a>
                                <!-- End mobile menu toggle-->
                            </li>

                        </ul>

                    </div>
                    <!-- end menu-extras -->

                    <div class="clearfix"></div>

                </div>
                <!-- end container -->
            </div>
            <!-- end topbar-main -->

            <!-- MENU Start -->
            <div class="navbar-custom ">
                <div class="container-fluid">

                    <div id="navigation">

                        <!-- Navigation Menu-->
                        <ul class="navigation-menu">

                            <li class="has-submenu">
                                <a href="{{route('dashboard')}}"><i class="ti-home"></i> Tableau de bord</a>
                            </li>

                            @if ( auth()->user()->profile == 2)
                            <li class="has-submenu" class="text-white">
                                <a href="{{ route('garage.index') }}"><i class="ion ion-md-car"></i> GARAGES <i
                                        class="mdi mdi-chevron-down mdi-drop"></i></a>
                             {{--    <ul class="submenu megamenu">
                                    <li>
                                        <ul>
                                            <li><a href="{{ route('garage.create') }}">+ Nouveau</a></li>
                                            <hr>
                                            <li><a href="{{ route('garage.index') }}">Nos garages</a></li>
                                        </ul>
                                    </li>

                                </ul>
                            </li> --}}
                            @endif
                            @if ( auth()->user()->profile == 3)
                            <li class="has-submenu" class="text-white">
                                <a href="{{ route('garage.profile') }}"><i class="ion ion-md-calendar"></i>MON GARAGE </a>
                            </li>
                            @endif
                            @if ( auth()->user()->profile ==2)
                            <li class="has-submenu" class="text-white">
                                <a href="{{ route('appointement.index') }}"><i class="ion ion-md-calendar"></i> LES
                                    RENDEZ-VOUS</a>
                            </li>
                            <li class="has-submenu" class="text-white">
                                <a href="{{ route('quote.index') }}"><i class="ti-files"></i> CONTACT </a>
                            </li>
                            @endif

                            <li class="has-submenu" class="text-white">
                                <a href="{{ route('depannage.stack') }}"><i class="ti-settings"></i> DEPANNAGES </a>

                            </li>
                            @if ( auth()->user()->profile ==2)
                            <li class="has-submenu" class="text-white">
                                <a href="{{ route('user.index') }}"><i class="ti-user"></i> UTILISATEURS <i></a>

                            </li>
                            @endif

                        </ul>
                        <!-- End navigation menu -->
                    </div>
                    <!-- end #navigation -->
                </div>
                <!-- end container -->
            </div>
            <!-- end navbar-custom -->
        </header>
        <!-- End Navigation Bar-->

    </div>
    <!-- header-bg -->
