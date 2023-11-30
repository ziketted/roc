@include('admin.header')
<div class="wrapper ">
    <div class="container-fluid  ">
        <br>

        <div class="row m-5">
            <div class="col-lg-12">
                <div class="p-2">
                    <a href="{{ route('garage.create') }}" class="btn btn-info"> + Ajouter un garage</a>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h4 class="m-b-30 m-t-0">Liste des garages.</h4>

                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap"
                            style="border-collapse: collapse; width: 100%;">
                            <thead>
                                <tr>
                                    <th class="w-1">No.
                                        <!-- Download SVG icon from http://tabler-icons.io/i/chevron-up -->
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-sm icon-thick"
                                            width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                            stroke="currentColor" fill="none" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M6 15l6 -6l6 6" />
                                        </svg>
                                    </th>
                                    <th>Denomination</th>
                                    <th>Gerant</th>
                                    <th>Phone</th>
                                    <th>Garage ? </th>
                                    <th>Option</th>

                                </tr>
                            </thead>


                            <tbody>
                                @foreach ($garages as $item)
                                <tr>

                                    <td><span class="text-muted">0{{ $item->id }}</span></td>
                                    <td><a href="invoice.html" class="text-reset" tabindex="-1">{{ $item->garage }}</a>
                                    </td>
                                    <td>
                                        <span class="fas fas-user"></span>
                                        {{ $item->gerant }}
                                    </td>

                                    <td>
                                        {{ $item->phone }}
                                    </td>
                                    <td>

                                        @if(!$item->is_garage)
                                        <span class="badge text-white  bg-primary"> En attente <i
                                                class="spinner far fa-clock"></i></span>
                                        @else
                                        <span class="badge text-white  bg-info">Certifié <i
                                                class="fas fa-check-circle"></i></span>
                                        @endif
                                    </td>
                                    <td>
                                        <a class="btn btn-success" href="{{ route('garage.show', $item->id) }}">
                                            Voir</a>
                                        @if(!$item->is_garage)
                                            <a class="btn btn-secondary" href="{{ route('garage.edit', $item->id) }}">
                                                Valider
                                            </a>
                                        @endif

                                    </td>


                                    <!-- Modal -->

                                </tr>
                                @endforeach

                            </tbody>
                        </table>

                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@include('admin.footer')
