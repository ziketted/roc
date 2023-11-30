@include('admin.header')
<div class="wrapper ">
    <div class="container-fluid  ">
        <br><br>
        @if (session('status'))
        <div class="row justify-content-md-center ">
            <div class="container">



                <div class="alert alert-success mr-5" role="alert">
                    <button type="button" class="btn btn-outline-secondary btn-sm text-dark float-right "
                        data-bs-dismiss="alert" aria-label="Close">x</button>
                    <h6 class="alert-heading text-dark">RENDEZ-VOUS !</h6>
                    <br>
                    <p class="text-dark"> {{ session('status' ) }} </p>
                    <hr>
                    <p class="mb-0 text-dark">ROC service
                    </p>

                </div>
            </div>

        </div>
        @endif

        <div class="col-lg-12 m-2">

            <div class="card">
                <div class="card-body">
                    <h4 class="m-b-30 m-t-0"></h4>

                    <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap"
                        style="border-collapse: collapse; width: 100%;">
                        <thead>
                            <tr>

                                <th class="w-1">No.
                                    <!-- Download SVG icon from http://tabler-icons.io/i/chevron-up -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-sm icon-thick" width="24"
                                        height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                        fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M6 15l6 -6l6 6" />
                                    </svg>
                                </th>
                                <th>Names </th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Date RDV</th>
                                <th>Statut</th>
                                <th>Action</th>
                            </tr>
                        </thead>


                        <tbody>
                            @foreach ($rdv as $item)
                            <tr>

                                <td><span class="text-muted">0{{ $item->id }}</span></td>
                                <td><a href="#" class="text-reset" tabindex="-1">{{ $item->firstname }} - {{
                                        $item->lastname
                                        }}</a></td>
                                <td>
                                    <span class="fas fas-user"></span>
                                    {{ $item->mail }}
                                </td>
                                <td>
                                    {{ $item->phone }}
                                </td>

                                <td>
                                    {{ $item->premier_choix }}
                                </td>
                                <td>
                                    <span class="badge bg-success me-1"></span> {{ $item->statut }}
                                </td>

                                <td>
                                    @if($item->statut=='Validé')
                                    <a class="btn btn-info" href="{{ route('appointement.show', $item->id) }}">
                                        <i class="fas fa-user"></i> Voir le détail</a>
                                    @else
                                    <a class="btn btn-success" href="{{ route('appointement.show', $item->id) }}">
                                        Valider</a>
                                    <a class="btn btn-primary" onclick="confirmDelete()">
                                        Annuler</a>
                                    @endif

                                </td>

                            </tr>


                            <script>
                                function confirmDelete() {
                                    var result = confirm("Are you sure you want to delete this item?");
                                    if (result) {
                                        if (result) {
                                            window.location.href = "{{ route('appointement.destroy', $item->id) }}";
                                        }
                                    }
                                }
                            </script>
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
