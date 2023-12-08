<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Réseau organisé des consommateurs</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Place favicon.png in the root directory -->
    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon" />
    <!-- Font Icons css -->
    <link rel="stylesheet" href="{{asset('assets/css/font-icons.css')}}">
    <!-- plugins css -->
    <link rel="stylesheet" href="{{asset('assets/css/plugins.css')}}">
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <!-- Responsive css -->
    <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">
</head>

<body>
    <!--[if lte IE 9]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->

    <!-- Add your site or application content here -->

    <!-- Body main wrapper start -->
    <div class="body-wrapper">

        <!-- HEADER AREA START (header-4) -->
        <header class="ltn__header-area ltn__header-4 ltn__header-6 ltn__header-transparent gradient-color-2">
            <!-- ltn__header-top-area start -->
            <div class="ltn__header-top-area top-area-color-white">
                <div class="container">
                    <div class="row">
                        <div class="col-md-7">
                            <div class="ltn__top-bar-menu">
                                <ul>
                                    <li><a href="mailto:info@webmail.com?Subject=Flower%20greetings%20to%20you"><i
                                                class="icon-mail"></i> contact@roc.com</a></li>
                                    <li><a href="locations.html"><i class="icon-placeholder"></i> Kinshasa - Gombe | 76 avenue de la justice, commune de la Gombe</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="top-bar-right text-end">
                                <div class="ltn__top-bar-menu">
                                    <ul>
                                        <li>
                                            <!-- ltn__language-menu -->
                                            <div class="ltn__drop-menu ltn__currency-menu ltn__language-menu">
                                                <ul>
                                                   @guest
                                                     <li><a href="{{route('login')}}"><span class="active-currency">Se
                                                                 connecter</span></a>
                                                    @else
                                                        <li><a href="{{route('login')}}"><span class="active-currency">Mon compte</span></a>
                                                   @endguest

                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li>
                                            <!-- ltn__social-media -->
                                            <div class="ltn__social-media">
                                                <ul>
                                                    <li><a href="#" title="Facebook"><i
                                                                class="fab fa-facebook-f"></i></a></li>
                                                    <li><a href="#" title="Twitter"><i class="fab fa-twitter"></i></a>
                                                    </li>

                                                    <li><a href="#" title="Instagram"><i
                                                                class="fab fa-instagram"></i></a></li>
                                                    <li><a href="#" title="Dribbble"><i class="fab fa-dribbble"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ltn__header-top-area end -->
            <!-- ltn__header-middle-area start -->
            <div class="ltn__header-middle-area ltn__header-sticky ltn__sticky-bg-black ltn__logo-right-menu-option">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="site-logo-wrap">
                                <div class="site-logo">
                                    <a href="/"><img src="{{asset('assets/img/logo-2.png')}}" alt="Logo"
                                            width="100"></a>
                                </div>
                                <div class="get-support clearfix get-support-color-white">
                                    <div class="get-support-icon">
                                        <i class="icon-call"></i>
                                    </div>
                                    <div class="get-support-info">
                                        <h6>Nous contactez</h6>
                                        <h4><a href="tel:+243 814493939">+243 814493939</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col header-menu-column menu-color-white">
                            <div class="header-menu d-none d-xl-block">
                                <nav>
                                    <div class="ltn__main-menu">
                                        <ul>
                                            <li><a href="/">Accueil</a></li>
                                            <li><a href="/appointement/create">Rendez-vous</a></li>
                                            <li><a href="/service">Services</a></li>
                                            <li><a href="{{route('quote.create')}}">Contact</a></li>
                                            <li><a href="/about">A propos de nous</a></li>
                                            <li class="special-link"><a
                                                    href="{{route('depannage.index')}}">Trouvez un garage </a>
                                            </li>
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                        </div>
                        <!-- Mobile Menu Button -->
                        <div class="mobile-menu-toggle menu-btn-white menu-btn-border--- d-xl-none">
                            <a href="#ltn__utilize-mobile-menu" class="ltn__utilize-toggle">
                                <svg viewBox="0 0 800 600">
                                    <path
                                        d="M300,220 C300,220 520,220 540,220 C740,220 640,540 520,420 C440,340 300,200 300,200"
                                        id="top"></path>
                                    <path d="M300,320 L540,320" id="middle"></path>
                                    <path
                                        d="M300,210 C300,210 520,210 540,210 C740,210 640,530 520,410 C440,330 300,190 300,190"
                                        id="bottom" transform="translate(480, 320) scale(1, -1) translate(-480, -318) ">
                                    </path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ltn__header-middle-area end -->
        </header>
