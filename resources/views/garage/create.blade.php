@include('admin.header')

    <!-- Page header -->

    <!-- Page body -->
    <div class="wrapper ">
        <div class="container-fluid p-5 ">
            <br>

            <div class="row  ">
                <div class="col-8">
                    <form method="POST" action="{{ route('garage.store')}}" class="card">
                        @csrf
                        <div class="card-body">
                            <h2 >Veuillez renseigner les informations du garage</h2>
                            <hr>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="mb-3">
                                            <label class="form-label">Dénomination Garage</label>
                                            <input type="text" class="form-control" placeholder="Designation du garage"
                                                value="" name="garage" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="row ">
                                    <div class="col-sm-6 ">
                                        <div class="mb-3">
                                            <label class="form-label">Nom du gerant</label>
                                            <input type="text" class="form-control" placeholder="Nom du gerant" value=""
                                                name="gerant" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="mb-3">
                                            <label class="form-label">Email address</label>
                                            <input type="email" class="form-control" placeholder="Email" name="mail">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="form-label">Adresse</label>
                                            <input type="text" class="form-control"
                                                placeholder="Eg: 67 blvd du " value="" name="adresse">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="form-label">Ville</label>
                                            <input type="text" class="form-control" placeholder="Ville"
                                                name="ville" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">

                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="form-label">Téléphone </label>
                                            <input type="test" class="form-control" placeholder="+243 800 000 000"
                                                name="phone" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="form-label">Secteur de base</label>
                                            <input type="test" class="form-control" placeholder="Ex : Remorquage"
                                                name="postal" >
                                        </div>
                                    </div>
                                </div>




                                <div class="row col-8">
                                    <br>
                                    <h3> Localisation </h3>
                                    <hr>
                                </div>


                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label class="form-label">Latitude</label>
                                                <input type="test" class="form-control" placeholder="Ex : -4.34769"
                                                    name="lat" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label class="form-label">Longitude</label>
                                                <input type="test" class="form-control" placeholder="Ex : 15.93487"
                                                    name="lng" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="mb-3 mb-0">
                                                <label class="form-label">A propos du garage</label>
                                                <textarea rows="5" class="form-control" placeholder="Description" name="apropos"
                                                ></textarea>
                                            </div>
                                        </div>
                                    </div>




                                <div class="col-md-4">
                                    <button type="submit" class="btn btn-primary">Enregistrer le garage</button>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-end">

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>






@include('admin.footer')
