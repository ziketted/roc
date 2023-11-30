@include('side.header')
<div id="ltn__utilize-mobile-menu" class="ltn__utilize ltn__utilize-mobile-menu">
    <div class="ltn__utilize-menu-inner ltn__scrollbar">
        <div class="ltn__utilize-menu-head">
            <div class="site-logo">
                <a href="index.html"><img src="assets/img/logo-2.png" alt="Logo"></a>
            </div>
            <button class="ltn__utilize-close">×</button>
        </div>
        <div class="ltn__utilize-menu-search-form">
            <form action="#">
                <input type="text" placeholder="Recherche...">
                <button><i class="fas fa-search"></i></button>
            </form>
        </div>
        <div class="ltn__utilize-menu">
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
        <div class="ltn__utilize-buttons ltn__utilize-buttons-2">
            <ul>
                <li>
                    <a href="/login" title="My Account">
                        <span class="utilize-btn-icon">
                            <i class="far fa-user"></i>
                        </span>
                        Mon compte
                    </a>
                </li>
            </ul>
        </div>
        <div class="ltn__social-media-2">
            <ul>
                <li><a href="#" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="#" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#" title="Linkedin"><i class="fab fa-linkedin"></i></a></li>
                <li><a href="#" title="Instagram"><i class="fab fa-instagram"></i></a></li>
            </ul>
        </div>
    </div>
</div>
<!-- Utilize Mobile Menu End -->

<div class="ltn__utilize-overlay"></div>

<!-- SLIDER AREA START (slider-6) -->
<div class="ltn__slider-area ltn__slider-3 ltn__slider-6 section-bg-1">
    <div class="ltn__slide-one-active slick-slide-arrow-1 slick-slide-dots-1 arrow-white">
        <!-- ltn__slide-item  -->
        <div class="ltn__slide-item ltn__slide-item-2 ltn__slide-item-3 ltn__slide-item-5 text-color-white bg-image bg-overlay-theme-black-80"
            data-bs-bg="assets/img/slider/41.jpg">
            <div class="ltn__slide-item-inner">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 align-self-center">
                            <div class="slide-item-info">
                                <div class="slide-item-info-inner ltn__slide-animation">
                                    <div class="slide-item-info">
                                        <div class="slide-item-info-inner ltn__slide-animation">
                                            <h6 class="slide-sub-title ltn__secondary-color animated">// INGÉNIEURS ET
                                                MÉCANICIENS DE TALENT</h6>
                                            <h1 class="slide-title animated ">Trouvez le garage idéal à proximité
                                                pour vos besoins automobiles !</h1>
                                            <div class="slide-brief animated">
                                                <p>Une équipe professionnelle et
                                                    disponible est à votre disposition.</p>
                                            </div>
                                            <div class="btn-wrapper animated">
                                                <a href="/service" class="theme-btn-1 btn btn-effect-1">NOS SERVICES</a>
                                                <a href="{{ route('appointement.create') }}" class="btn btn-transparent btn-effect-2 white-color">PRENEZ RENDEZ-VOUS</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="slide-item-img">
                                <img src="assets/img/slider/41-1.png" alt="#">
                                <span class="call-to-circle-1"></span>
                                <!--  -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ltn__slide-item  -->
        <div class="ltn__slide-item ltn__slide-item-2 ltn__slide-item-3 ltn__slide-item-5 text-color-white bg-image bg-overlay-theme-black-80"
            data-bs-bg="assets/img/slider/41.jpg">
            <div class="ltn__slide-item-inner text-right text-end">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 align-self-center">
                            <div class="slide-item-info">
                                <div class="slide-item-info-inner ltn__slide-animation">
                                    <div class="slide-item-info">
                                        <div class="slide-item-info-inner ltn__slide-animation">
                                            <h6 class="slide-sub-title ltn__secondary-color animated">// INGÉNIEURS ET
                                                MÉCANICIENS DE TALENT</h6>
                                            <h1 class="slide-title animated ">Service de voiture professionnel</h1>
                                            <div class="slide-brief animated">
                                                <p></p>
                                            </div>
                                            <div class="btn-wrapper animated">
                                                <a href="/service" class="theme-btn-1 btn btn-effect-1">NOS SERVICES</a>
                                                <a href="{{ route('appointement.create') }}" class="btn btn-transparent btn-effect-2 white-color">PRENEZ RENDEZ-VOUS</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="slide-item-img">
                                <img src="assets/img/slider/41-1.png" alt="#">
                                <span class="call-to-circle-1"></span>
                                <!--  -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--  -->
    </div>
</div>
<!-- SLIDER AREA END -->

<!-- ABOUT US AREA START -->
<div class="ltn__about-us-area pt-80 pb-85">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 align-self-center">
                <div class="about-us-img-wrap about-img-left">
                    <ul class="ltn__parallax-effect-wrap ltn__parallax-effect-active" data-friction-x="0.1"
                        data-friction-y="0.1" data-scalar-x="15" data-scalar-y="25">
                        <li class="layer" data-depth="0.00"></li>
                        <li class="layer" data-depth="0.10">
                            <div class="ltn__effect-img ltn__effect-img-top-left">
                                <img src="assets/img/effect/1.png" alt="#">
                            </div>
                        </li>
                        <li class="layer" data-depth="0.30">
                            <div class="ltn__effect-img ltn__effect-img-top-right">
                                <img src="assets/img/effect/2.png" alt="#">
                            </div>
                        </li>
                        <li class="layer" data-depth="0.50">
                            <div class="ltn__effect-img ltn__effect-img-center-left">
                                <img src="assets/img/effect/3.png" alt="#">
                            </div>
                        </li>
                        <li class="layer" data-depth="0.20">
                            <div class="ltn__effect-img ltn__effect-img-center-right">
                                <img src="assets/img/effect/4.png" alt="#">
                            </div>
                        </li>
                        <li class="layer" data-depth="0.20">
                            <div class="ltn__effect-img ltn__effect-img-bottom-left">
                                <img src="assets/img/effect/5.png" alt="#">
                            </div>
                        </li>
                        <li class="layer" data-depth="0.20">
                            <div class="ltn__effect-img ltn__effect-img-bottom-right">
                                <img src="assets/img/effect/6.png" alt="#">
                            </div>
                        </li>
                        <li class="layer" data-depth="0.50">
                            <div class="wave ltn__animation-wave-5s ltn__effect-img-top-center ">
                                <div class="about-us-img-info">
                                    <div class="about-us-img-info-inner">
                                        <h1><span class="counter">10</span><span>+</span></h1>
                                        <h6><span>Ans</span> d'experience</h6>
                                        <span class="dots-bottom"></span>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 align-self-center">
                <div class="about-us-info-wrap">
                    <div class="section-title-area ltn__section-title-2">
                        <h6 class="section-subtitle ltn__secondary-color">// À propos de nous</h6>
                        <h1 class="section-title">Chez ROC services <span>,</span></h1>
                        <p>nous sommes passionnés par votre
                            satisfaction et nous nous efforçons de rendre vos
                            démarches automobiles plus simples et plus pratiques</p>
                    </div>

                    <p> </p>
                    <hr>
                    <div class="about-call-us">
                        <div class="call-us-icon">
                            <img src="assets/img/icons/7.png" alt="Icon Image">
                        </div>
                        <div class="call-us-info">
                            <p>Vous avez des questions, une préoccupation ?
                                Appelez-nous au :</p>
                            <h2><a href="tel:+243814493939">+243 814 493 939</a> <small> </h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ABOUT US AREA END -->

<!-- WHY CHOOSE US AREA START -->
<div class="ltn__why-choose-us-area section-bg-1 pt-120 pb-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="why-choose-us-info-wrap">
                    <div class="section-title-area ltn__section-title-2">
                        <h6 class="section-subtitle ltn__secondary-color">// Pourquoi nous choisir</h6>
                        <h1 class="">Voici quelques raisons qui font de nous le meilleur choix pour
                            vous<span>:</span></h1>
                        <p></p>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-6">
                            <div class="why-choose-us-feature-item">

                                <div class="why-choose-us-feature-brief">
                                    <h3 ><a href="#"> <span >.</span> Sélection minutieuse des garages</a></h3>
                                    <h3 ><a href="#"> <span class="">.</span>  Simplicité et commodité</a></h3>
                                    <h3 ><a href="#"> <span class="">.</span>  Transparence totalé</a></h3>
                                    <h3 ><a href="#"> <span class="">.</span>  Service client dédié</a></h3>
                                    <h3 ><a href="#"> <span class="">.</span>  Expérience sans tracas</a></h3> <br>
                                    <p>  <a href="/whyus" class="theme-btn-1 btn btn-effect-2">En savoir plus</a> </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="why-choose-us-img-wrap">
                    <div class="why-choose-us-img-1 text-start">
                        <img src="assets/img/others/1.jpg" alt="Image">
                    </div>
                    <div class="why-choose-us-img-2 text-end">
                        <img src="assets/img/others/2.jpg" alt="Image">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- WHY CHOOSE US AREA END -->

<!-- SERVICE AREA START (Service 1) -->
{{-- <div class="ltn__service-area ltn__primary-bg before-bg-1 pt-115 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title-area ltn__section-title-2 text-center">
                    <h6 class="section-subtitle ltn__secondary-color">// Service</h6>
                    <h1 class="section-title white-color">Ce que nous faisons<span>.</span></h1>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-4 col-sm-6">
                <div class="ltn__service-item-1">
                    <div class="service-item-img">
                        <img src="assets/img/service/1.jpg" alt="#">
                        <div class="service-item-icon">
                            <i class="icon-mechanic"></i>
                        </div>
                    </div>
                    <div class="service-item-brief">
                        <h3><a href="#">Améliorations des performances</a></h3>
                        <p></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="ltn__service-item-1">
                    <div class="service-item-img">
                        <img src="assets/img/service/2.jpg" alt="#">
                        <div class="service-item-icon">
                            <i class="icon-car-parts-3"></i>
                        </div>
                    </div>
                    <div class="service-item-brief">
                        <h3><a href="#">Anti rupture de verrouillage</a></h3>
                        <p></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="ltn__service-item-1">
                    <div class="service-item-img">
                        <img src="assets/img/service/3.jpg" alt="#">
                        <div class="service-item-icon">
                            <i class="icon-repair"></i>
                        </div>
                    </div>
                    <div class="service-item-brief">
                        <h3><a href="#">Réparation de voiture accidentée</a></h3>
                        <p></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}
<!-- SERVICE AREA END -->



<!-- CALL TO ACTION START (call-to-action-2) -->
<div class="ltn__call-to-action-area call-to-action-2 pt-20 pb-20" data-bs-bg="img/1.jpg--">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="call-to-action-inner call-to-action-inner-2 text-center">

                        <h2>Pour plus d’informations, contactez-nous au +243990001122</h2>
                        <div class="btn-wrapper">
                            <a class="btn btn-effect-4 btn-white" href="{{route('depannage.index')}}"><i class="fas fa-map"></i>
                                Trouver un garage près de chez moi</a>
                        </div>


                </div>
            </div>
        </div>
    </div>
</div>
<!-- CALL TO ACTION END -->

<!-- FEATURE AREA START ( Feature - 3) -->
<div class="ltn__feature-area pt-115 pb-80" id="services">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title-area ltn__section-title-2 section-title-style-3">
                    <div class="section-brief-in">
                        <p></p>
                    </div>
                    <div class="section-title-in">
                        <h1 class="section-title">Nos services <span>.</span></h1>
                        <p>Nous vous offrons un service professionnel, fiable et de qualité supérieure</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="row  justify-content-center">
                    <div class="col-lg-12 col-md-6 col-12">
                        <div class="ltn__feature-item ltn__feature-item-3 text-right text-end">
                            <div class="ltn__feature-icon">
                                <span><i class="icon-car-parts"></i></span>
                            </div>
                            <div class="ltn__feature-info">
                                <h2><a href="#">Entretien régulier</a></h2>
                                <p></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-6 col-12">
                        <div class="ltn__feature-item ltn__feature-item-3 text-right text-end">
                            <div class="ltn__feature-icon">
                                <span><i class="icon-exterior"></i></span>
                            </div>
                            <div class="ltn__feature-info">
                                <h2><a href="#">Réparations mécaniques</a></h2>
                                <p></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-6 col-12">
                        <div class="ltn__feature-item ltn__feature-item-3 text-right text-end">
                            <div class="ltn__feature-icon">
                                <span><i class="icon-car-parts-6"></i></span>
                            </div>
                            <div class="ltn__feature-info">
                                <h2><a href="#">Système électrique et électronique.</a></h2>
                                <p></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-6 col-12">
                        <div class="ltn__feature-item ltn__feature-item-3 text-right text-end">
                            <div class="ltn__feature-icon">
                                <span><i class="icon-car-parts-5"></i></span>
                            </div>
                            <div class="ltn__feature-info">
                                <h2><a href="#">Services d'inspection
                                    pré-achat</a></h2>
                                <p></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="feature-banner-img text-center mb-30">
                    <img src="assets/img/others/2.png" alt="#">
                </div>
            </div>
            <div class="col-lg-4">
                <div class="row  justify-content-center">
                    <div class="col-lg-12 col-md-6 col-12">
                        <div class="ltn__feature-item ltn__feature-item-3">
                            <div class="ltn__feature-icon">
                                <span><i class="icon-car-parts-7"></i></span>
                            </div>
                            <div class="ltn__feature-info">
                                <h2><a href="#">Réparations carrosserie</a></h2>
                                <p></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-6 col-12">
                        <div class="ltn__feature-item ltn__feature-item-3">
                            <div class="ltn__feature-icon">
                                <span><i class="icon-car-parts-8"></i></span>
                            </div>
                            <div class="ltn__feature-info">
                                <h2><a href="#">Services de pneumatiques</a></h2>
                                <p></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-6 col-12">
                        <div class="ltn__feature-item ltn__feature-item-3">
                            <div class="ltn__feature-icon">
                                <span><i class="icon-car-parts-3"></i></span>
                            </div>
                            <div class="ltn__feature-info">
                                <h2><a href="#">Services de dépannage.</a></h2>
                                <p></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-6 col-12">
                        <div class="ltn__feature-item ltn__feature-item-3">
                            <div class="ltn__feature-icon">
                                <span><i class="icon-car-parts-3"></i></span>
                            </div>
                            <div class="ltn__feature-info">
                                <h2><a href="#">Remorquage et
                                    dépannage d’urgence</a></h2>
                                <p></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- FEATURE AREA END -->

<!-- IMAGE SLIDER AREA START (img-slider-2) -->
{{-- <div class="ltn__img-slider-area ltn__img-slider-2 section-bg-1 pt-115 pb-250">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title-area ltn__section-title-2 text-center">
                    <h6 class="section-subtitle ltn__secondary-color">// Portfolio</h6>
                    <h1 class="section-title">Nous avons fait<span>.</span></h1>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row ltn__image-slider-2-active slick-arrow-1 slick-arrow-1-inner">
            <div class="col-lg-12">
                <div class="ltn__img-slide-item-2">
                    <a href="assets/img/img-slide/1.jpg" data-rel="lightcase:myCollection">
                        <img src="assets/img/img-slide/1.jpg" alt="Image">
                    </a>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="ltn__img-slide-item-2">
                    <a href="assets/img/img-slide/2.jpg" data-rel="lightcase:myCollection">
                        <img src="assets/img/img-slide/2.jpg" alt="Image">
                    </a>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="ltn__img-slide-item-2">
                    <a href="assets/img/img-slide/3.jpg" data-rel="lightcase:myCollection">
                        <img src="assets/img/img-slide/3.jpg" alt="Image">
                    </a>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="ltn__img-slide-item-2">
                    <a href="assets/img/img-slide/4.jpg" data-rel="lightcase:myCollection">
                        <img src="assets/img/img-slide/4.jpg" alt="Image">
                    </a>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="ltn__img-slide-item-2">
                    <a href="assets/img/img-slide/1.jpg" data-rel="lightcase:myCollection">
                        <img src="assets/img/img-slide/1.jpg" alt="Image">
                    </a>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="ltn__img-slide-item-2">
                    <a href="assets/img/img-slide/2.jpg" data-rel="lightcase:myCollection">
                        <img src="assets/img/img-slide/2.jpg" alt="Image">
                    </a>
                </div>
            </div>
        </div>
    </div>
</div> --}}
<!-- IMAGE SLIDER AREA END -->

<!-- CALL TO ACTION START ( Service Form ) -->
{{-- <div class="ltn__service-form-wrap-area">
    <div class="container-fluid ">
        <div class="row">
            <div class="col-xl-11 offset-xl-1">
                <div class="ltn__service-form-area ltn__service-form-1 ltn__service-form-margin bg-image bg-overlay-theme-black-60 pt-115 pb-95"
                    data-bs-bg="assets/img/bg/2.jpg">
                    <div class="row">
                        <div class="col-xl-5 col-lg-12 align-self-center">
                            <div class="ltn__service-form-brief">
                                <div class="section-title-area ltn__section-title-2 mb-0">
                                    <h6 class="section-subtitle white-color">// Appel à l'action</h6>
                                    <h1 class="section-title white-color">Obtenez un service gratuit
                                        De notre part.</h1>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-7 col-lg-12 align-self-center">
                            <div class="ltn__service-form-wrap ltn__service-form-color-white">
                                <form action="#" class="ltn__service-form-box">
                                    <ul>
                                        <li>
                                            <select class="nice-select">
                                                <option>Nom du service</option>
                                                <option>Réparation automobile </option>
                                                <option>Réparation de moteur </option>
                                                <option>Vidange</option>
                                                <option>Lave-Auto</option>
                                            </select>
                                        </li>
                                        <li>
                                            <div class="input-item input-item-date mb-0 ltn__custom-icon">
                                                <input type="text" name="date" placeholder="DATE">
                                            </div>
                                        </li>
                                        <li>
                                            <div class="btn-wrapper">
                                                <button type="submit"
                                                    class="btn theme-btn-1 btn-effect-1 text-uppercase">Demandez
                                                    maintenant</button>
                                            </div>
                                        </li>
                                    </ul>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}
<!-- CALL TO ACTION END -->

<!-- TESTIMONIAL AREA START -->
{{--  --}}<div class="ltn__testimonial-area ltn__testimonial-4 ">
    <div class="container-fluid">

        <div class="ltn__testimonial-area bg-image pt-115 pb-70" data-bg="assets/img/bg/8.jpg">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title-area ltn__section-title-2 text-center">
                            <h6 class="section-subtitle ltn__secondary-color">//  Témoignages</h6>
                            <h1 class="section-title">Commentaires des clients<span>.</span></h1>
                        </div>
                    </div>
                </div>
                <div class="row ltn__testimonial-slider-3-active slick-arrow-1 slick-arrow-1-inner">
                    <div class="col-lg-12">
                        <div class="ltn__testimonial-item ltn__testimonial-item-4">
                            <div class="ltn__testimoni-img">
                                <img src="assets/img/testimonial/6.jpg" alt="#">
                            </div>
                            <div class="ltn__testimoni-info">
                                <p>Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                <h4>Rosalina D. William</h4>
                                <h6>Founder</h6>
                            </div>
                            <div class="ltn__testimoni-bg-icon">
                                <i class="far fa-comments"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="ltn__testimonial-item ltn__testimonial-item-4">
                            <div class="ltn__testimoni-img">
                                <img src="assets/img/testimonial/7.jpg" alt="#">
                            </div>
                            <div class="ltn__testimoni-info">
                                <p>Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                <h4>Rosalina D. William</h4>
                                <h6>Founder</h6>
                            </div>
                            <div class="ltn__testimoni-bg-icon">
                                <i class="far fa-comments"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="ltn__testimonial-item ltn__testimonial-item-4">
                            <div class="ltn__testimoni-img">
                                <img src="assets/img/testimonial/1.jpg" alt="#">
                            </div>
                            <div class="ltn__testimoni-info">
                                <p>Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                <h4>Rosalina D. William</h4>
                                <h6>Founder</h6>
                            </div>
                            <div class="ltn__testimoni-bg-icon">
                                <i class="far fa-comments"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="ltn__testimonial-item ltn__testimonial-item-4">
                            <div class="ltn__testimoni-img">
                                <img src="assets/img/testimonial/2.jpg" alt="#">
                            </div>
                            <div class="ltn__testimoni-info">
                                <p>Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                <h4>Rosalina D. William</h4>
                                <h6>Founder</h6>
                            </div>
                            <div class="ltn__testimoni-bg-icon">
                                <i class="far fa-comments"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="ltn__testimonial-item ltn__testimonial-item-4">
                            <div class="ltn__testimoni-img">
                                <img src="assets/img/testimonial/5.jpg" alt="#">
                            </div>
                            <div class="ltn__testimoni-info">
                                <p>Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                <h4>Rosalina D. William</h4>
                                <h6>Founder</h6>
                            </div>
                            <div class="ltn__testimoni-bg-icon">
                                <i class="far fa-comments"></i>
                            </div>
                        </div>
                    </div>
                    <!--  -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- TESTIMONIAL AREA END -->

<!-- BLOG AREA START (blog-3) -->
{{-- <div class="ltn__blog-area bg-image-top pt-115 " data-bs-bg="assets/img/bg/3.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title-area ltn__section-title-2">
                    <h6 class="section-subtitle white-color">// blog & idées</h6>
                    <h1 class="section-title white-color">Fil d'actualité.</h1>
                </div>
            </div>
        </div>
        <div class="row  ltn__blog-slider-one-active slick-arrow-3 ltn__blog-3-arrow">
            <!-- Blog Item -->
            <div class="col-lg-12">
                <div class="ltn__blog-item ltn__blog-item-3">
                    <div class="ltn__blog-img">
                        <a href="#"><img src="assets/img/blog/1.jpg" alt="#"></a>
                    </div>
                    <div class="ltn__blog-brief">
                        <div class="ltn__blog-meta">
                            <ul>
                                <li class="ltn__blog-author">
                                    <a href="#"><i class="far fa-user"></i>by: Admin</a>
                                </li>
                                <li class="ltn__blog-tags">
                                    <a href="#"><i class="fas fa-tags"></i>Services</a>
                                </li>
                            </ul>
                        </div>
                        <h3 class="ltn__blog-title"><a href="#">Problèmes courants d'huile moteur et solutions</a></h3>
                        <div class="ltn__blog-meta-btn">
                            <div class="ltn__blog-meta">
                                <ul>
                                    <li class="ltn__blog-date"><i class="far fa-calendar-alt"></i>Juin 24, 2023</li>
                                </ul>
                            </div>
                            <div class="ltn__blog-btn">
                                <a href="#">Lire plus</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Blog Item -->
            <div class="col-lg-12">
                <div class="ltn__blog-item ltn__blog-item-3">
                    <div class="ltn__blog-img">
                        <a href="blog-details.html"><img src="assets/img/blog/2.jpg" alt="#"></a>
                    </div>
                    <div class="ltn__blog-brief">
                        <div class="ltn__blog-meta">
                            <ul>
                                <li class="ltn__blog-author">
                                    <a href="#"><i class="far fa-user"></i>by: Admin</a>
                                </li>
                                <li class="ltn__blog-tags">
                                    <a href="#"><i class="fas fa-tags"></i>Services</a>
                                </li>
                            </ul>
                        </div>
                        <h3 class="ltn__blog-title"><a href="#">Comment et quand remplacer les disques de frein</a></h3>
                        <div class="ltn__blog-meta-btn">
                            <div class="ltn__blog-meta">
                                <ul>
                                    <li class="ltn__blog-date"><i class="far fa-calendar-alt"></i>Juillet 23, 2023</li>
                                </ul>
                            </div>
                            <div class="ltn__blog-btn">
                                <a href="#">Lire plus</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Blog Item -->
            <div class="col-lg-12">
                <div class="ltn__blog-item ltn__blog-item-3">
                    <div class="ltn__blog-img">
                        <a href="#"><img src="assets/img/blog/3.jpg" alt="#"></a>
                    </div>
                    <div class="ltn__blog-brief">
                        <div class="ltn__blog-meta">
                            <ul>
                                <li class="ltn__blog-author">
                                    <a href="#"><i class="far fa-user"></i>by: Admin</a>
                                </li>
                                <li class="ltn__blog-tags">
                                    <a href="#"><i class="fas fa-tags"></i>Services</a>
                                </li>
                            </ul>
                        </div>
                        <h3 class="ltn__blog-title"><a href="blog-details.html">Entretien, entretien et réparations de
                                voitures électriques</a></h3>
                        <div class="ltn__blog-meta-btn">
                            <div class="ltn__blog-meta">
                                <ul>
                                    <li class="ltn__blog-date"><i class="far fa-calendar-alt"></i>Août 22, 2023</li>
                                </ul>
                            </div>
                            <div class="ltn__blog-btn">
                                <a href="#">Lire plus</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Blog Item -->
            <div class="col-lg-12">
                <div class="ltn__blog-item ltn__blog-item-3">
                    <div class="ltn__blog-img">
                        <a href="blog-details.html"><img src="assets/img/blog/4.jpg" alt="#"></a>
                    </div>
                    <div class="ltn__blog-brief">
                        <div class="ltn__blog-meta">
                            <ul>
                                <li class="ltn__blog-author">
                                    <a href="#"><i class="far fa-user"></i>by: Admin</a>
                                </li>
                                <li class="ltn__blog-tags">
                                    <a href="#"><i class="fas fa-tags"></i>Services</a>
                                </li>
                            </ul>
                        </div>
                        <h3 class="ltn__blog-title"><a href="blog-details.html">How to Prepare for your First Track
                                Day!</a></h3>
                        <div class="ltn__blog-meta-btn">
                            <div class="ltn__blog-meta">
                                <ul>
                                    <li class="ltn__blog-date"><i class="far fa-calendar-alt"></i>June 24, 2020</li>
                                </ul>
                            </div>
                            <div class="ltn__blog-btn">
                                <a href="blog-details.html">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Blog Item -->
            <div class="col-lg-12">
                <div class="ltn__blog-item ltn__blog-item-3">
                    <div class="ltn__blog-img">
                        <a href="blog-details.html"><img src="assets/img/blog/5.jpg" alt="#"></a>
                    </div>
                    <div class="ltn__blog-brief">
                        <div class="ltn__blog-meta">
                            <ul>
                                <li class="ltn__blog-author">
                                    <a href="#"><i class="far fa-user"></i>by: Admin</a>
                                </li>
                                <li class="ltn__blog-tags">
                                    <a href="#"><i class="fas fa-tags"></i>Services</a>
                                </li>
                            </ul>
                        </div>
                        <h3 class="ltn__blog-title"><a href="#">Comment : faire durer vos pneus plus longtemps</a></h3>
                        <div class="ltn__blog-meta-btn">
                            <div class="ltn__blog-meta">
                                <ul>
                                    <li class="ltn__blog-date"><i class="far fa-calendar-alt"></i>Juin 24, 2023</li>
                                </ul>
                            </div>
                            <div class="ltn__blog-btn">
                                <a href="#">Lire plus</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--  -->
        </div>
    </div>
</div> --}}
<!-- BLOG AREA END -->

<!-- BRAND LOGO AREA START -->
<div class="ltn__brand-logo-area ltn__brand-logo-1 pt-80 pb-110 plr--9">
    <div class="container-fluid">
        <div class="row ltn__brand-logo-active">
            <div class="col-lg-6">
                <div class="ltn__brand-logo-item">
                    <img src="assets/img/brand-logo/toyota-icon.jpg" alt="Brand Logo">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="ltn__brand-logo-item">
                    <img src="assets/img/brand-logo/honda-icon.jpg" alt="Brand Logo">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="ltn__brand-logo-item">
                    <img src="assets/img/brand-logo/infiniti-icon.jpg" alt="Brand Logo">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="ltn__brand-logo-item">
                    <img src="assets/img/brand-logo/nissan-icon.jpg" alt="Brand Logo">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="ltn__brand-logo-item">
                    <img src="assets/img/brand-logo/mini-icon.jpg" alt="Brand Logo">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="ltn__brand-logo-item">
                    <img src="assets/img/brand-logo/lexus-icon.jpg" alt="Brand Logo">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="ltn__brand-logo-item">
                    <img src="assets/img/brand-logo/jaguar-icon.jpg" alt="Brand Logo">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="ltn__brand-logo-item">
                    <img src="assets/img/brand-logo/mazda-icon.jpg" alt="Brand Logo">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- BRAND LOGO AREA END -->

<!-- FOOTER AREA START (ltn__footer-2 ltn__footer-color-1) -->
<footer class="ltn__footer-area ltn__footer-2 ltn__footer-color-1">
    <div class="footer-top-area  section-bg-2">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-md-5">
                    <div class="footer-widget ltn__footer-timeline-widget ltn__footer-timeline-widget-1 bg-image bg-overlay-theme-black-90"
                        data-bs-bg="img/bg/4.jpg">
                        <h6 class="ltn__secondary-color text-uppercase">// Horaire</h6>
                        <h4 class="footer-title">Prenez rendez-vous.</h4>
                        <ul>
                            <li>Lundi <span>07:00 - 20:00</span></li>
                            <li>Mardi <span>07:00 - 20:00</span></li>
                            <li>Mercredi <span>07:00 - 20:00</span></li>
                            <li>Jeudi <span>07:00 - 20:00</span></li>
                            <li>Vendredi <span>07:00 - 20:00</span></li>
                            <li>Samedi <span>07:00 - 20:00</span></li>

                        </ul>
                    </div>
                </div>
                <div class="col-xl-5 col-md-7">
                    <div class="footer-widget footer-menu-widget footer-menu-widget-2-column clearfix">
                        <h4 class="footer-title">Services.</h4>
                        <div class="footer-menu">
                            <ul>
                                <li><a href="#">Dépannage sur route.</a></li>
                                <li><a href="#">Remorquage.</a></li>
                                <li><a href="#">Réparation véhicules.</a></li>
                                <li><a href="#">Entretien Véhicules.</a></li>
                            </ul>
                        </div>
                        <div class="footer-menu">
                            <ul>
                                <li><a href="#">Verrouillage du moteur</a></li>
                                <li><a href="#">Diagnostic pur</a></li>
                                <li><a href="#">Réparation de pneus</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="footer-widget footer-blog-widget">
                        <h4 class="footer-title">Fil d'actualité.</h4>
                        <div class="ltn__footer-blog-item">
                            <div class="ltn__blog-meta">
                                <ul>
                                    <li class="ltn__blog-date"><i class="far fa-calendar-alt"></i> Juin 28, 2024</li>
                                </ul>
                            </div>
                            <h4 class="ltn__blog-title"><a href="/blog1">Entretien et réparations de voitures
                                    électriques</a></h4>
                        </div>
                        <div class="ltn__footer-blog-item">
                            <div class="ltn__blog-meta">
                                <ul>
                                    <li class="ltn__blog-date"><i class="far fa-calendar-alt"></i> Juin 28, 2024</li>
                                </ul>
                            </div>
                            <h4 class="ltn__blog-title"><a href="/blog2">L'importance d'un entretien régulier.</a></h4>
                        </div>
                        <!-- <div class="ltn__footer-blog-item">
                            <div class="ltn__blog-meta">
                                <ul>
                                    <li class="ltn__blog-date"><i class="far fa-calendar-alt"></i> Juin 24, 2023</li>
                                </ul>
                            </div>
                            <h4 class="ltn__blog-title"><a href="#">The branch of biology that
                                deals with the normal.</a></h4>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="ltn__copyright-area ltn__copyright-2">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-12">
                    <div class="site-logo-wrap">
                        <div class="site-logo">
                            <a href="/"><img src="{{asset('assets/img/logo-2.png')}}" alt="Logo" width="100"></a>
                        </div>
                        <div class="get-support ltn__copyright-design clearfix">
                            <div class="get-support-info">
                                <h6>Copyright & Design By</h6>
                                <h4>Affrimative Groups - <span class="current-year"></span></h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12 align-self-center">
                    <div class="ltn__copyright-menu text-end">
                        <ul>
                            <li><a href="#">Conditions d'utilisation</a></li>
                            <li><a href="#">Réclamation</a></li>
                            <li><a href="#">Confidentialité et politique</a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
</footer>
<!-- FOOTER AREA END -->

<!-- MODAL AREA START (Quick View Modal) -->
<div class="ltn__modal-area ltn__quick-view-modal-area">
    <div class="modal fade" id="quick_view_modal" tabindex="-1">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        <!-- <i class="fas fa-times"></i> -->
                    </button>
                </div>
                <div class="modal-body">
                    <div class="ltn__quick-view-modal-inner">
                        <div class="modal-product-item">
                            <div class="row">
                                <div class="col-lg-6 col-12">
                                    <div class="modal-product-img">
                                        <img src="img/product/4.png" alt="#">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-12">
                                    <div class="modal-product-info">
                                        <div class="product-ratting">
                                            <ul>
                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                <li class="review-total"> <a href="#"> ( 95 Reviews )</a></li>
                                            </ul>
                                        </div>
                                        <h3>Brake Conversion Kit</h3>
                                        <div class="product-price">
                                            <span>$149.00</span>
                                            <del>$165.00</del>
                                        </div>
                                        <div class="modal-product-meta ltn__product-details-menu-1">
                                            <ul>
                                                <li>
                                                    <strong>Categories:</strong>
                                                    <span>
                                                        <a href="#">Parts</a>
                                                        <a href="#">Car</a>
                                                        <a href="#">Seat</a>
                                                        <a href="#">Cover</a>
                                                    </span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="ltn__product-details-menu-2">
                                            <ul>
                                                <li>
                                                    <div class="cart-plus-minus">
                                                        <input type="text" value="02" name="qtybutton"
                                                            class="cart-plus-minus-box">
                                                    </div>
                                                </li>
                                                <li>
                                                    <a href="#" class="theme-btn-1 btn btn-effect-1" title="Add to Cart"
                                                        data-bs-toggle="modal" data-bs-target="#add_to_cart_modal">
                                                        <i class="fas fa-shopping-cart"></i>
                                                        <span>ADD TO CART</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="ltn__product-details-menu-3">
                                            <ul>
                                                <li>
                                                    <a href="#" class="" title="Wishlist" data-bs-toggle="modal"
                                                        data-bs-target="#liton_wishlist_modal">
                                                        <i class="far fa-heart"></i>
                                                        <span>Add to Wishlist</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" class="" title="Compare" data-bs-toggle="modal"
                                                        data-bs-target="#quick_view_modal">
                                                        <i class="fas fa-exchange-alt"></i>
                                                        <span>Compare</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <hr>
                                        <div class="ltn__social-media">
                                            <ul>
                                                <li>Share:</li>
                                                <li><a href="#" title="Facebook"><i class="fab fa-facebook-f"></i></a>
                                                </li>
                                                <li><a href="#" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="#" title="Linkedin"><i class="fab fa-linkedin"></i></a>
                                                </li>
                                                <li><a href="#" title="Instagram"><i class="fab fa-instagram"></i></a>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- MODAL AREA END -->

<!-- MODAL AREA START (Add To Cart Modal) -->
<div class="ltn__modal-area ltn__add-to-cart-modal-area">
    <div class="modal fade" id="add_to_cart_modal" tabindex="-1">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="ltn__quick-view-modal-inner">
                        <div class="modal-product-item">
                            <div class="row">
                                <div class="col-12">
                                    <div class="modal-product-img">
                                        <img src="assets/img/product/1.png" alt="#">
                                    </div>
                                    <div class="modal-product-info">
                                        <h5><a href="product-details.html">Brake Conversion Kit</a></h5>
                                        <p class="added-cart"><i class="fa fa-check-circle"></i> Successfully added to
                                            your Cart</p>
                                        <div class="btn-wrapper">
                                            <a href="cart.html" class="theme-btn-1 btn btn-effect-1">View Cart</a>
                                            <a href="checkout.html" class="theme-btn-2 btn btn-effect-2">Checkout</a>
                                        </div>
                                    </div>
                                    <!-- additional-info -->
                                    <div class="additional-info d-none">
                                        <p>We want to give you <b>10% discount</b> for your first order, <br> Use
                                            discount code at checkout</p>
                                        <div class="payment-method">
                                            <img src="assets/img/icons/payment.png" alt="#">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- MODAL AREA END -->

<!-- MODAL AREA START (Wishlist Modal) -->
<div class="ltn__modal-area ltn__add-to-cart-modal-area">
    <div class="modal fade" id="liton_wishlist_modal" tabindex="-1">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="ltn__quick-view-modal-inner">
                        <div class="modal-product-item">
                            <div class="row">
                                <div class="col-12">
                                    <div class="modal-product-img">
                                        <img src="assets/img/product/7.png" alt="#">
                                    </div>
                                    <div class="modal-product-info">
                                        <h5><a href="product-details.html">Brake Conversion Kit</a></h5>
                                        <p class="added-cart"><i class="fa fa-check-circle"></i> Successfully added to
                                            your Wishlist</p>
                                        <div class="btn-wrapper">
                                            <a href="wishlist.html" class="theme-btn-1 btn btn-effect-1">View
                                                Wishlist</a>
                                        </div>
                                    </div>
                                    <!-- additional-info -->
                                    <div class="additional-info d-none">
                                        <p>We want to give you <b>10% discount</b> for your first order, <br> Use
                                            discount code at checkout</p>
                                        <div class="payment-method">
                                            <img src="assets/img/icons/payment.png" alt="#">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- MODAL AREA END -->

</div>
<!-- Body main wrapper end -->

<!-- preloader area start -->
<div class="preloader d-none" id="preloader">
    <div class="preloader-inner">
        <div class="spinner">
            <div class="dot1"></div>
            <div class="dot2"></div>
        </div>
    </div>
</div>
<!-- preloader area end -->

<!-- All JS Plugins -->
<script src="{{asset('assets/js/plugins.js')}}"></script>
<!-- Main JS -->
<script src="{{asset('assets/js/main.js')}}"></script>

</body>

</html>
