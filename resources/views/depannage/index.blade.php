@include('side.header')

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
<div class="ltn__appointment-area pb-120">
    <div class="container">
        <div class="row">
            @if (session('message'))
            <div class="container">
                <div class="row justify-content-md-center">

                    <div class="col-md-auto p-3 alert alert-success alert-dismissible fade show" role="alert">
                        <strong><i class="input-item-email ltn__custom-icon"></i> &nbsp;Dépannage !</strong>
                        <br> Votre demande a été soumise avec succès et Nous vous reviendrons après le traitement de votre dossier.
                        <br><i><strong>Service ROC.</strong></i>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                </div>
            </div>

            @endif

            <div class="pb-10 pt-10">
                <h1><i class="fas fa-map-marked-alt"></i>Les garages qui sont plus proche de vous entre 0km à 2km
                </h1>
            </div>
            @forelse ( $nears as $number )

            <div class="col-lg-3">
                <div class="card">
                    <h5 class="card-header text-secondary">Distance à <span class="badge bg-success">{{ number_format($number->distance, 1)}} Km</span> </h5>
                    <div class="card-body">
                      <h5 class="card-title text-uppercase"><i class="fas  fa-car text-secondary"></i>&nbsp;{{ $number->garage }}</h5>
                      <p class="font-bold text-secondary text-sm-left" style="font-size: 12px"><i class="fas fa-map-marked-alt"></i> &nbsp;{{ $number->adresse }}</p>
                      <p class="card-text text-truncate " style="font-size: 10px; ">{{ $number->description }}</p>
                      <a href="{{ route('depannage.command', $number->id) }}" class="btn btn-primary">Alerter
                        maintenant</a>
                    </div>
                  </div>
            </div>
            <br>

            @empty
            <div class="col-lg-12">
                <div class="ltn__state-location">
                    <p class="ltn__state-location-title">Aucun garage ne se trouve à cette distance.</p>
                </div>
            </div><br>
            @endforelse


                <br><br>
            <div class="pb-20 pt-20">
                <h1><i class="fas fa-map-marked-alt"></i> Distance supérieure à 3km </h1>
            </div>

            @forelse ($away as $number )
            <div class="col-lg-3">
                <div class="card">
                    <h5 class="card-header text-secondary">Distance à <span class="badge bg-danger">{{ number_format($number->distance, 1)}} Km</span> </h5>
                    <div class="card-body">
                      <h5 class="card-title text-uppercase"><i class="fas  fa-car text-secondary"></i>&nbsp;{{ $number->garage }}</h5>
                      <p class="font-bold text-secondary text-sm-left" style="font-size: 12px"><i class="fas fa-map-marked-alt"></i> &nbsp;{{ $number->adresse }}</p>
                      <p class="card-text text-truncate " style="font-size: 10px; ">{{ $number->description }}</p>
                      <a href="{{ route('depannage.command', $number->id) }}" class="btn btn-primary">Alerter
                        maintenant</a>
                    </div>
                  </div>
            </div>

            @empty

            <div class="col-lg-12">
                <div class="ltn__state-location">
                    <p class="ltn__state-location-title">Aucun garage ne se trouve au-delà de cette distance.</p>
                </div>
            </div>
            @endforelse

        </div>
    </div>
</div>
@include('side.footer')
