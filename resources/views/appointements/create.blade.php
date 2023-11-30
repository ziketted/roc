@include('side.header')

<!-- Utilize Cart Menu Start -->

<!-- Utilize Mobile Menu End -->

<div class="ltn__utilize-overlay"></div>

<!-- BREADCRUMB AREA START -->
<div class="ltn__breadcrumb-area ltn__breadcrumb-area-2 ltn__breadcrumb-color-white bg-overlay-theme-black-90 bg-image"
    data-bs-bg="img/bg/9.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="ltn__breadcrumb-inner ltn__breadcrumb-inner-2 justify-content-between">
                    <div class="section-title-area ltn__section-title-2">
                        <h6 class="section-subtitle ltn__secondary-color">/ Bienvenue dans notre société</h6>
                        <h1 class="section-title white-color">Rendez-vous</h1>
                    </div>
                    <div class="ltn__breadcrumb-list">
                        <ul>
                            <li><a href="index.html">Accueil</a></li>
                            <li>Rendez-vous</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- BREADCRUMB AREA END -->

<!-- APPOINTMENT AREA START -->

<div class="ltn__appointment-area pb-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                @if (session('status'))
                <div class="container">
                    <div class="row justify-content-md-center">

                        <div class="col-md-auto p-3 alert alert-success alert-dismissible fade show" role="alert">
                            <strong><i class="input-item-email ltn__custom-icon"></i> &nbsp;RENDEZ-VOUS !</strong>
                            <br> Votre rendez-vous a été soumis avec succès et Nous vous reviendrons après le traitement de votre dossier.
                            <br><i><strong>Service ROC.</strong></i>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    </div>
                </div>

                @endif



                <div class="ltn__appointment-inner">
                    <form method="POST" action="{{ route('appointement.store') }}" class="">
                        @csrf
                        <h6>Informations personnelles</h6>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="input-item input-item-name ltn__custom-icon">
                                    <input type="text" name="firstname" placeholder="Votre prénom" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-item input-item-name ltn__custom-icon">
                                    <input type="text" name="lastname" placeholder="Votre nom" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-item input-item-email ltn__custom-icon">
                                    <input type="email" name="mail" placeholder="Votre adresse mail" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-item input-item-phone ltn__custom-icon">
                                    <input type="text" name="phone" placeholder="Téléphone" required>
                                </div>
                            </div>
                        </div>
                        <h6>Informations sur les véhicules</h6>
                        <div class="row">
                            <div class="col-lg-4 col-md-6">
                                <div class="input-item">
                                    <select class="nice-select" name="mark" required>
                                        <option value="Mark">Mark</option>
                                        <option value="Audi">Audi</option>
                                        <option value="BMW">BMW</option>
                                        <option value="Honda">Honda</option>
                                        <option value="Nissan">Nissan</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="input-item">
                                    <select class="nice-select" name="model" required>
                                        <option value="Monel">Model</option>
                                        <option value="Any">Any</option>
                                        <option value="6 Series (1)">6 Series (1)</option>
                                        <option value="7 Series (1)">7 Series (1)</option>
                                        <option value="8 Series (1)">8 Series (1)</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="input-item">
                                    <select class="nice-select" name="annee" required>
                                        <option>Année</option>
                                        <option value="2015">2015</option>
                                        <option value="2016">2016</option>
                                        <option value="2016">2017</option>
                                        <option value="2018">2018</option>
                                        <option value="2019">2019</option>
                                        <option value="2020">2020</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <p><label class="input-info-save mb-0"><input type="checkbox" name="agree"> Mon
                                        véhicule
                                        n'est pas listé dans le formulaire ci-dessus..</label></p>
                            </div>
                        </div>
                        <h6>De quel type de service avez-vous besoin sur votre véhicule?</h6>
                        <div class="input-item input-item-textarea ltn__custom-icon">
                            <textarea name="description" placeholder="Enter message"></textarea>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-md-6">
                                <h6>Offres spéciales</h6>
                                <div class="input-item">
                                    <select class="nice-select">
                                        <option>Sélectionnez les offres</option>
                                        <option
                                            value="20 $ de rabais sur la recharge ou les réparations de la climatisation">
                                            20 $ de rabais sur la recharge ou les réparations de la climatisation
                                        </option>
                                        <option value="25 $ de rabais sur l'entretien des freins">25 $ de rabais sur
                                            l'entretien des freins</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <h6>Attendre ou déposer</h6>
                                <div class="input-item">
                                    <select class="nice-select" name="">
                                        <option>Choisissez s'il vous plaît</option>
                                        <option value=" En attendant">En attendant</option>
                                        <option value="Restitution du véhicule">Restitution du véhicule</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <h6>Choisissez l'emplacement</h6>
                                <div class="input-item">
                                    <select class="nice-select" name="emplacement">
                                        <option value="Emplacement">Emplacement</option>
                                        <option value="Kinshasa">Kinshasa</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <h6>Premier choix</h6>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="input-item ltn__datepicker">
                                            <div class="input-group date" data-provide="datepicker">
                                                <input type="text" class="form-control" placeholder="Select Date"
                                                    name="premier_choix">
                                                <div class="input-group-addon">
                                                    <i class="far fa-calendar-alt"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-item input-item-time">
                                            <select class="nice-select" name="premier_heure">
                                                <option>HH:MM</option>
                                                <option value="9:00 AM - 11:00 AM">9:00 AM - 11:00 AM</option>
                                                <option value="11:00 AM - 13:00 PM">11:00 AM - 13:00 PM</option>
                                                <option value="13:00 PM - 15:00 PM">13:00 PM - 15:00 PM</option>
                                                <option value="15:00 PM - 17:00 PM">15:00 PM - 17:00 PM</option>
                                                <option value="17:00 PM - 19:00 PM">17:00 PM - 19:00 PM</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <h6>Deuxième choix (facultatif)</h6>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="input-item ltn__datepicker">
                                            <div class="input-group date" data-provide="datepicker">
                                                <input type="text" class="form-control" placeholder="Select Date"
                                                    name="deux_choix">
                                                <div class="input-group-addon">
                                                    <i class="far fa-calendar-alt"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-item input-item-time">
                                            <select class="nice-select" name="deux_heure">
                                                <option>HH:MM</option>
                                                <option value="9:00 AM - 11:00 AM">9:00 AM - 11:00 AM</option>
                                                <option value="11:00 AM - 13:00 PM">11:00 AM - 13:00 PM</option>
                                                <option value="13:00 PM - 15:00 PM">13:00 PM - 15:00 PM</option>
                                                <option value="15:00 PM - 17:00 PM">15:00 PM - 17:00 PM</option>
                                                <option value="17:00 PM - 19:00 PM">17:00 PM - 19:00 PM</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="alert alert-warning" role="alert">
                            Veuillez noter que la date et l'heure que vous avez demandées peuvent ne pas être
                            disponibles. Nous vous contacterons pour confirmer les détails de votre rendez-vous.
                        </div>
                        <div class="btn-wrapper text-center mt-0">
                            <button class="btn theme-btn-1 btn-effect-1 text-uppercase" type="submit">Envoyer</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- APPOINTMENT AREA END -->
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
                            <h4 class="ltn__blog-title"><a href="#">Entretien, entretien et réparations de voitures
                                    électriques</a></h4>
                        </div>
                        <div class="ltn__footer-blog-item">
                            <div class="ltn__blog-meta">
                                <ul>
                                    <li class="ltn__blog-date"><i class="far fa-calendar-alt"></i> Juin 28, 2024</li>
                                </ul>
                            </div>
                            <h4 class="ltn__blog-title"><a href="#">Entretien, entretien et réparations de voitures
                                    électriques</a></h4>
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

</div>
<!-- Body main wrapper end -->

<!-- All JS Plugins -->
<script src="{{asset('assets/js/plugins.js')}}"></script>
<!-- Main JS -->
<script src="{{asset('assets/js/main.js')}}"></script>

</body>

</html>
