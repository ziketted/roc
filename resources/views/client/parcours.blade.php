@include('adminclient.header')
<div class="wrapper ">
    <div class="container-fluid  ">
        <br>
        <div class="row m-5">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">

                        <form method="POST" action="{{ route('client.search')}}" class="row">
                            @csrf

                            <div class="col-4">

                                <input type="date" class="form-control" id="inputPassword2"
                                    placeholder="Recherche par nom du garage" name="date" value="{{ $date }}">

                            </div>
                            <div class="col-5">

                                <input type="text" class="form-control" id="inputPassword2"
                                    placeholder="Recherche par nom du garage" name="garage" value="{{ $garage }}">

                            </div>
                            <div class="col-3 text-start">
                                <button type="submit" class="btn btn-info mb-3">Recherchez</button>
                            </div>
                        </form>


                    </div>
                </div>
            </div>

        </div>

        <div class="row  row-cols-md-1 m-5 ">

            <div class="list-group">
                <div class="row">

                    @forelse ($depannages as $item)
                        <div class="col-lg-4 col-sm-bg-info">

                            <a href="#" class="list-group-item list-group-item-action " aria-current="true">
                                @php
                                $created_at = \Carbon\Carbon::parse($item->created_at);
                                @endphp
                                <small class="text-muted mb-5"> {{ $created_at->diffForHumans()}}</small><br>
                                <div class="d-flex w-100 justify-content-between mt-2">

                                    <p class="mb-1"><b><i class="ion ion-md-speedometer" style="text-align: justify;"></i>
                                            &nbsp;OPERATION :</b> <br>{{ $item->description }} </p>


                                </div>

                                <hr>
                                <div class="row">
                                    <div class="col-6">
                                        <h5 class="mb-1 text-uppercase"><i class="mdi mdi-car-back"></i> &nbsp;{{ $item->garage
                                        }}</h5>
                                    </div>
                                    <div class="col-6">
                                        <small class=" fs-5 float-right btn btn-info btn-sm"><b>&nbsp;{{
                                            $item->price }} CDF</b></small>
                                    </div>
                                </div>





                                {{-- <div class="d-flex w-100 justify-content-between">
                                    <div class="star-rating">
                                        <span class="star">★</span>
                                        <span class="star">★</span>
                                        <span class="star">★</span>
                                        <span class="">★</span>
                                        <span class="">★</span>
                                    </div>
                                </div> --}}
                            </a>
                        </div>
                    @empty
                    <div class="row content-justify">
                        <div class="alert alert-info" role="alert">
                            <p class="fs-5"> Aucune information trouvée.</p>
                        </div>
                    </div>

                    @endforelse





                </div>



            </div>

        </div>
    </div>


</div>
@include('adminclient.footer')
