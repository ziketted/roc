@include('admin.header')
<div class="wrapper ">
    <div class="container-fluid  ">
        <br>
        <div class="row m-5">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="m-b-30 m-t-0"> Les dépannages.</h4>
                        <hr>
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
                                    <th>Noms</th>
                                    <th>Garage choisi</th>
                                    <th>Téléphone</th>
                                    <th>Status</th>
                                    <th>Date</th>
                                </tr>
                            </thead>

                            @php
                                $k=1
                            @endphp
                            <tbody>
                                @foreach ($depannages as $item)

                                <tr>
                                    <td><span class="text-muted">0{{ $k++}}</span></td>
                                    <td><a href="invoice.html" class="text-reset" tabindex="-1">{{ $item->name }} - {{
                                            $item->prenom }}</a>
                                    </td>
                                    <td>
                                        <span class="flag flag-country-us"></span>
                                        {{$item->garage}}
                                    </td>
                                    <td>{{ $item->phone }}</td>

                                    <td>
                                        <span class="badge bg-secondary me-1 p-1 text-white">{{ $item->status }}</span>
                                    </td>
                                    <td>
                                        {{ $item->created_at }}
                                    </td>
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
