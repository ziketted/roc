@include('admin.header')
<div class="wrapper ">
    <div class="container-fluid  ">
<br><br><br>
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
        <div class="row m-5">
            <div class="col-lg-12 m-5">
                <div class="card">
                    <div class="card-body">
                        <h4 class="m-b-30 m-t-0"> Les demandes de dévis.</h4>

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
                                    <th>Names </th>
                                    <th>Service à fournir</th>
                                    <th>Phone</th>
                                    <th>Mail</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            @php
                                $k=1
                            @endphp
                            <tbody>
                                @foreach ($quotes as $item)

                                <tr>

                                    <td><span class="text-muted">0{{ $k++ }}</span></td>
                                    <td><a href="#" class="text-reset" tabindex="-1">{{ $item->name }} </a></td>
                                    <td>
                                        <span class="fas fas-user"></span>
                                        {{ $item->service }}
                                    </td>
                                    <td>
                                        {{ $item->phone }}
                                    </td>

                                    <td>
                                        {{ $item->mail }}
                                    </td>

                                    <td>
                                        @if($item->statut=='Validé')
                                        <a class="btn btn-info" href="{{ route('quote.show', $item->id) }}">
                                            <i class="fas fa-user"></i> Voir le détail</a>
                                        @else
                                        <a class="btn btn-success" href="{{ route('quote.show', $item->id) }}">
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
                                                window.location.href = "{{ route('quote.destroy', $item->id) }}";
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
