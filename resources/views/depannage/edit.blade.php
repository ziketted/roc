@include('admin.header')
<div class="wrapper">
    <div class="container-fluid">
        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <div class="row align-items-center">
                        <div class="col-md-8">
                            <h4 class="page-title m-0"></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-7">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title text-dark m-0">Affectation</h3>
                    </div>
                    <div class="card-body">
                     @foreach ($details as $item)
                        <div class="row">
                            <div class="col-6">
                                {{ $item->name }} - {{ $item->prenom }}
                            </div>
                            <div class="col-6">
                                {{ $item->phone }} - {{ $item->mail }}
                            </div>
                        </div>
                        <p class="mb-0">
                            {{ $item->description }} <br>
                            <i> {{ $item->created_at }}</i>
                        </p><br>

                        <hr>

                            <form action="">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Affecter un autre garage</label>
                                    <select class="form-control" id="mySelect" id="exampleFormControlSelect1">
                                        <option value="{{ $item->garage }}">{{ $item->garage }}</option>
                                        @foreach ($garages as $gr)
                                            <option value="{{ $gr->id }}">{{ $gr->garage }}</option>
                                        @endforeach
                                    </select>
                                  </div>

                                  <a href="#" class="btn btn-primary">Affecter au garage </a>

                            </form>
                        @endforeach
                    </div>




                </div>
            </div>
            <div class="col-lg-5">
                <div class="card">
                    <div class="card-header bg-dark">
                        <h2 class="card-title m-0">AUTRES GARAGES PROCHES. <i class="mdi mdi-map-marker-check text-success"></i></h2>
                    </div>
                    <div class="card-body">
                        <ul class="list-group">

                            @forelse ($garages as $item)
                                 <li class="list-group-item d-flex justify-content-between align-items-center">
                                        {{ $item->garage }}
                                     <span class="badge badge-dark badge-pill">{{  number_format($item->distance, 1) }} Km</span>
                                 </li>
                            @empty
                                 <p>Aucun garage n'est plus proche de la position du client <b>roc</b> <i class="mdi mdi-map-marker-check text-success"></i></p>

                            @endforelse


                        </ul>
                    </div>
                </div>
            </div>

        </div>
        <!-- end row -->

        <!-- END -->

    </div>
</div>


