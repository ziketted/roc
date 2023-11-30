@include('admin.header')

<!-- Your content goes here -->



<div class="wrapper">
    <div class="container-fluid">
        <!-- Page-Title -->
        <div class="row">



            {{-- @if (session('success')) @endif --}}
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <!-- <div class="panel-heading">
                        <h4>Invoice</h4>
                    </div> -->
                    <div class="card-body">

                        @foreach ($appointements as $item)
                        <div class="row">
                            <h3 class="float-left">Rendez-vous N° : {{$item->id}}</h3>


                            <div class="col-12">


                                <hr>
                                <div class="row">
                                    <div class="col-6">
                                        <address>
                                            <strong>Identité :</strong><br>
                                            {{ $item->firstname }} - {{ $item->lastname }}<br>
                                            {{$item->mail}}
                                        </address>
                                    </div>
                                    <div class="col-6 text-right">
                                        <address>
                                            <strong>Adresse :</strong><br>
                                            {{$item->emplacement}}<br>
                                            {{$item->phone}}<br>
                                        </address>
                                    </div>
                                </div>

                            </div>
                        </div>


                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-title text-dark m-0"><strong>Détails : </strong></h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <td class="text-left"><strong>MODELE</strong></td>
                                                        <td class="text-left"><strong>MARK</strong></td>
                                                        <td class="text-left"><strong>ANNEE</strong></td>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="text-left">{{$item->model }}</td>
                                                        <td class="text-left">{{ $item->mark }}</td>
                                                        <td class="text-left">{{ $item->annee }}</td>
                                                    </tr>
                                                </tbody>
                                                <thead>
                                                    <tr>
                                                        <td class="text-left"><strong>OFFRE SPECIAL</strong></td>
                                                        <td class="text-left"><strong>PREMIER CHOIX</strong></td>
                                                        <td class="text-left"><strong>PREMIERE HEURE</strong></td>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="text-left">{{$item->offrespecial }}</td>
                                                        <td class="text-left">{{ $item->premier_choix }}</td>
                                                        <td class="text-left">{{ $item->premier_heure }}</td>
                                                    </tr>
                                                </tbody>
                                                <thead>
                                                    <tr>
                                                        <td class="text-left"><strong>AGREEL</strong></td>
                                                        <td class="text-left"><strong>DEUXIEME CHOIX</strong></td>
                                                        <td class="text-left"><strong>DEUXIEME HEURE</strong></td>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="text-left">{{$item->agree }}</td>
                                                        <td class="text-left">{{ $item->deux_choix }}</td>
                                                        <td class="text-left">{{ $item->deux_heure }}</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>


                                    </div>

                                </div>
                            </div>
                            @if($item->statut !='Validé')
                            <div class="row m-5">
                                <a href="{{ route('appointement.valider',$item->id ) }}" class="btn btn-info"> Valider
                                    le rendez-vous</a>
                            </div>
                            @endif

                        </div>
                        @endforeach
                        <!-- end row -->
                    </div> <!-- panel body -->
                </div> <!-- end panel -->

            </div> <!-- end col -->

        </div>
        <!-- end row -->





    </div>
</div>
<!-- end wrapper -->

@include('admin.footer')
