@include('adminclient.header')
<div class="wrapper ">
    <div class="container-fluid  ">
        <br>
        <div class="row m-5">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">

                        <form class="row ">

                            <div class="col-4">

                                <input type="date" class="form-control" id="inputPassword2"
                                    placeholder="Recherche par nom du garage">

                            </div>
                            <div class="col-5">

                                <input type="text" class="form-control" id="inputPassword2"
                                    placeholder="Recherche par nom du garage">

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
                    @foreach ($depannages as $item)
                    <div class="col-lg-4 col-sm-bg-info">
                        <a href="#" class="list-group-item list-group-item-action " aria-current="true">

                            <div class="d-flex w-100 justify-content-between">

                                <p class="mb-1"><b><i class="ion ion-md-speedometer" style="text-align: justify;"></i> &nbsp;OPERATION :</b> <br>{{ $item->description }} </p>


                            </div>

                            <p class="mb-1 text-start float-left " >  <h5 class="mb-1 text-uppercase"><i class="mdi mdi-car-back"></i> &nbsp;{{ $item->garage }}</h5></p>  <hr>
                            @php
                            $created_at = \Carbon\Carbon::parse($item->created_at);
                            @endphp
                            <small class="text-muted"> {{ $created_at->diffForHumans()}}</small>

                            <div class="d-flex w-100 justify-content-between">
                                <div class="star-rating">
                                    <span class="star">★</span>
                                    <span class="star">★</span>
                                    <span class="star">★</span>
                                    <span class="">★</span>
                                    <span class="">★</span>
                                </div>
                                <small class=" fs-5 btn btn-danger btn-sm " >&nbsp;{{ $item->price }} CDF</small>
                            </div>
                        </a>
                    </div>



                    @endforeach

                </div>



            </div>

        </div>
    </div>


</div>
@include('adminclient.footer')
