@include('adminclient.header')
<div class="wrapper pt-2">
    <div class="container-fluid">
        @foreach ($depannages as $item)
        <div class="row justify-content-center mt-5">
            <div class="col-lg-10">
                <div class="card text-end ">
                    <div class="row g-0">
                        <div class="col-md-4  bg-warning d-flex justify-content-center align-items-center">
                            <img src="assets/img/others/6.png" class="img-fluid rounded-start " alt="...">
                        </div>
                        <div class="col-md-8 ">

                            <div class="card-body justify-content-md-start">
                                <h2 class="card-title text-secondary fs-1 text-uppercase">
                                        <span class="spinner-border spinner-border-sm" role="status"
                                            aria-hidden="true"></span>
                                        <span class="visually-hidden">DEPANNAGE ENCOURS...</span><br>
                                        <span class="badge badge-info">Etat : {{ $item->status }}</span>
                                     </h2> <hr>

                                <p class="fw-bold"> <b>DESCRIPTION : </b> <br>
                                    {{ $item->description }}
                                    <br><b>GARAGE</b> : {{ $item->garage }} <br> <br>

                                    Prix à payer : <button class="btn btn-secondary">{{ $item->price }} CDF</button>
                                    <hr>
                                </p>
                                @php
                                $created_at = \Carbon\Carbon::parse($item->created_at);
                                @endphp
                                <p class="text-body-secondary fs-8 text-decoration-none justify-content-md-end">Il y a
                                    {{ $created_at->diffForHumans()}}</p>
                            </div>
                            @if($item->status=='Encours')
                            <div class="row justify-content-md-end m-1">

                                    <div class="d-grid gap-2 d-md-flex justify-content-md-end m-3 ">
                                        <a href="{{ route('depannage.annuler', $item->id) }}" class="btn btn-primary me-md-2" type="button">Refuser le devis</a>
                                    </div>

                                    <div class="d-grid gap-2 d-md-flex justify-content-md-end m-3 ">
                                        <a href="{{ route('depannage.valider', $item->id) }}" class="btn btn-info me-md-2" type="button">Accepter le devis</a>
                                    </div>

                            </div>


                            @elseif($item->status=='Soumis')

                            <div class="d-grid gap-2 d-md-flex justify-content-md-end m-3 ">
                                <a href="{{ route('depannage.accepter', $item->id) }}" class="btn btn-warning me-md-2" style="color:black !important;"
                                    type="button"><i class="fas fa-calendar-check"></i>&nbsp;Valider le dépannage</a>
                            </div>
                            @else

                            @endif

                        </div>

                    </div>

                </div>
            </div>

        </div>
        @endforeach
        <br><br>
        <div class="row row-cols-1 row-cols-md-2 g-4 justify-content-center m-2">
            <div class="col-lg-10">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card   bg-warning">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="assets/img/others/2.jpg" style="height:11rem;"
                                        class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title" style="color: black !important; ">Trouvez un garage.</h5>
                                        <p class="card-text">Notre réseau compte des garagistes fiables et compétents
                                            partout à Kinshasa. </p>
                                        <a class="btn btn-info " href="{{ route('depannage.index') }}"><i
                                                class="fas fa-search-location"></i> Recherchez un garage.</a>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card   bg-warning">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="assets/img/others/9.jpg" style="height:11rem;"
                                        class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title" style="color: black !important; ">Devenez un garage.</h5>
                                        <p class="card-text">Une démarche et formalité lèger pour rejoindre la grande
                                            communauté ROC. </p>
                                        <a class="btn btn-info " href="{{ route('garage.create') }}"><i
                                                class="fas fa-car"></i> Devenez un garage.</a>

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


@include('adminclient.footer')
