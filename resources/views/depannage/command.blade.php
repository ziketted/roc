@include('side.header')
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
                        <h1 class="section-title white-color">Dépannage</h1>
                    </div>
                    <div class="ltn__breadcrumb-list">
                        <ul>
                            <li><a href="index.html">Accueil</a></li>
                            <li>Dépannage</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- BREADCRUMB AREA END -->
{{-- VOIS LA DISTANCE, ILS PEUVENT NOUS DIRE LE RAYON QU'IL FAUT PRENDRE --}}
<!-- APPOINTMENT AREA START -->
<div class="ltn__appointment-area p-0">
    <div class="container">
        <div class="row">
           
            @foreach ($garages as $key => $garage )
            <form method="POST" action="{{ route('depannage.store') }}" class="">
                @csrf
                <div class="card-deck">
                    <div class="card">
                        <input type="text" id="disabledTextInput"  name="garage" class="form-control hidden @disabled(true)" style="visibility:hidden; display: none;" value="{{ $garage->id }}">
                        <div class="card-header">

                            <h3 class=" text-secondary"><i class="fas  fa-car text-secondary"></i>&nbsp;{{$garage->garage }}
                            </h3>
                            <p class="font-bold text-secondary text-sm-left" style="font-size: 12px"><i class="fas fa-map-marked-alt text-danger"></i> &nbsp;{{ $garage->adresse }}</p>
                            <p class="card-text tet-truncate" style="font-size: 12px">{{$garage->description}}</p>

                        </div>


                        <div class="card-body">

                            <br>
                            <h3>Votre Identité</h3>

                            <div class="row">
                                <div class="form-group">
                                    <input type="text" name="prenom" class="form-control" placeholder="Quelle est votre Prénom ?" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" placeholder="Quelle est votre Nom ?" required>
                                </div>
                                <div class="form-group">
                                    <input type="email" name="mail" class="form-control" placeholder="Quelle est votre adresse Mail ?" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="phone" class="form-control" placeholder="Donnez votre numéro de téléphone ?" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="description" class="form-control" placeholder="Quelle est votre préoccupation maintenant? " required>
                                </div>
                                <div class="col-4">
                                    <button class="btn theme-btn-1 btn-effect-1 text-uppercase" type="submit">Contactez
                                    maintenant</button>
                                </div>

                            </div>
                        </div>
                        <div class="card-footer p-2">
                            Le service roc vous aide à  résoudre vos problèmes concernant vos véhicules et vos engins.
                        </div>

                    </div>


            </form>
        </div>
    </div>

    @endforeach
</div> <br> <br>
</div>
</div>
@include('side.footer')
