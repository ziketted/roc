@include('admin.header')


<div class="wrapper mb-5">
    <div class="container-fluid ">
        <br>



        <!-- end row -->

        <div class="row">
            <div class="col-lg-12 m-5">
                <div class="card">
                    <div class="card-body">
                        <h4 class="m-b-30 m-t-0">Nos utilisateurs.</h4>
                        <hr>

                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap"
                            style="border-collapse: collapse; width: 100%;">
                            <thead>
                                <tr>

                                    <th class="w-1">No.
                                    </th>
                                    <th>Noms</th>
                                    <th>Gmail</th>
                                    <th>Téléphone</th>
                                </tr>
                            </thead>


                            <tbody>
                                @foreach ($users as $item)
                                <tr>
                                    <td><span class="text-muted">{{ $item->id }}</span></td>
                                    <td><a href="{{ route('user.show', $item->id) }}" class="text-reset"
                                            tabindex="-1">{{ $item->name }}</a>
                                    </td>
                                    <td>
                                        <span class="flag flag-country-us"></span>
                                        {{$item->email}}
                                    </td>

                                    <td>
                                        <span class="flag flag-country-us"></span>
                                        {{$item->phone}}
                                    </td>

                                </tr>



                                @endforeach

                            </tbody>
                        </table>

                    </div>
                </div>
            </div>

        </div>
        <!-- end container-fluid -->
    </div>


</div>




























@include('admin.footer')
