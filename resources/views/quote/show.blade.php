@include('admin.header')

<!-- Your content goes here -->



<div class="wrapper">
    <div class="container-fluid">
        <!-- Page-Title -->
        <div class="row">



            {{-- @if (session('success')) @endif --}}
        </div>

        <div class="row">
            <div class="col-lg-12 m-5">
                <!-- end panel -->
                <div class="d-flex justify-content-center container-fluid ">
                    @foreach ($quotes as $item)
                        <div class="card" style="width: 50rem;">
                            <div class="card-header">
                                <h3 class="float-left">DEVIS N° : {{$item->id}}</h3>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    <address>
                                        <strong>Identité :</strong><br>
                                        {{ $item->name }}
                                    </address>
                                </li>
                                <li class="list-group-item"> {{$item->mail}}</li>
                                <li class="list-group-item"> {{$item->phone}}</li>
                                <li class="list-group-item"> Service : {{$item->service}}</li>
                                <li class="list-group-item"> <b>Description :</b> <br>{{$item->description}}</li>
                                <li class="list-group-item">
                                    @if($item->statut !='Validé')
                                    <div class="">
                                        <a href="{{ route('quote.valider',$item->id ) }}" class="btn btn-secondary"> Traiter le dossier</a>
                                    </div>
                                    @endif
                                </li>
                            </ul>
                        </div>
                    @endforeach

                </div>


            </div> <!-- end col -->

        </div>
        <!-- end row -->





    </div>
</div>
<!-- end wrapper -->

@include('admin.footer')
