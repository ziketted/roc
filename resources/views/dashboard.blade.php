@include('admin.header')


<div class="wrapper ">
    <div class="container-fluid  ">
        <br>
        <br>
        <!-- Page-Title -->
        <div class="row ">
            @if (session('status'))
            <div class="container">
                <div class="row justify-content-md-center">

                    <div class="col-md-auto p-3 alert alert-success alert-dismissible fade show" role="alert">
                        <strong><i class="input-item-email ltn__custom-icon"></i> &nbsp;Dépannage !</strong>
                        <br> Vous avez créé le garage avec succès.
                        <br><i><strong>Service ROC.</strong></i>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                </div>
            </div>

            @endif

            <div class="col-sm-12">
                <div class="page-title-box">
                    <div class="row align-items-center">
                        <div class="col-md-8">
                            <h4 class="page-title m-0">Tableau de bord</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-6 col-xl-3">
                <div class="card">
                    <div class="card-heading p-4">
                        <h4 class="m-b-30 m-t-0"> Total garage : <span class="badge badge-secondary p-2">{{ $garageCount
                                }}</span></h4>
                        <div>

                            <div class="float-right">

                            </div>
                            <p class="mt-4 mb-0 text-muted">Tous les garages qui sont partenanires à ROC</p>
                        </div>
                    </div>
                </div>
            </div>
            @if(auth()->user()->profile ==2)
            <div class="col-6 col-xl-3">
                <div class="card">
                    <div class="card-heading p-4">
                        <h4 class="m-b-30 m-t-0"> Total utilisateur : <span class="badge badge-primary p-2">{{
                                $userCount }}</span></h4>
                        <div>

                            <div class="float-right">

                            </div>
                            <p class="mt-4 mb-0 text-muted">Tous utilisateurs qui sont inscrits dans le système ROC</p>
                        </div>
                    </div>
                </div>
            </div>
            @endif


            <div class="col-6 col-xl-3">
                <div class="card">
                    <div class="card-heading p-4">
                        <h4 class="m-b-30 m-t-0"> Total dépannage : <span class="badge badge-secondary">{{
                                $depannageCount
                                }}</span></h4>
                        <div>

                            <div class="float-right">

                            </div>
                            <p class="mt-4 mb-0 text-muted">Tous les dépannages que ROC a résolu.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-xl-3">
                <div class="card">
                    <div class="card-heading p-4">
                        <h4 class="m-b-30 m-t-0"> Total Rendez-vous : <span class="badge badge-secondary">{{
                                $rdv }}</span></h4>
                        <div>

                            <div class="float-right">

                            </div>
                            <p class="mt-4 mb-0 text-muted">Tous les rendez-vous pris par nos (clients) dans le système
                                ROC</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- end row -->

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="m-b-30 m-t-0">Les problèmes à dépanner.</h4>
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
                                    <th>Analyser la demande</th>
                                </tr>
                            </thead>


                            <tbody>
                                @php
                                    $k=1
                                @endphp
                                @foreach ($depannages as $item)

                                <tr>
                                    <td><span class="text-muted">0{{ $k++ }}</span></td>
                                    <td><a href="{{ route('depannage.show', $item->id) }}" class="text-reset"
                                            tabindex="-1">{{ $item->name }} - {{ $item->prenom }}</a>
                                    </td>
                                    <td>
                                        <span class="flag flag-country-us"></span>
                                        {{$item->garage}}
                                    </td>
                                    <td>{{ $item->phone }}</td>

                                    <td>
                                        <span class="badge bg-info me-1 p-1 text-white">{{$item->status}}</span>
                                    </td>
                                    <td>
                                        @if(auth()->user()->profile ==2)
                                        <a href="{{ route('depannage.detail', $item->id) }}" class="btn btn-primary btn-s" d>
                                            <i class="fas fa-eye"></i> Voir détail
                                        </a>
                                        @else
                                            @if($item->price>0)
                                            <a href="{{ route('depannage.detail', $item->id) }}" class="btn btn-dark" >
                                                <i class="fas fa-eye"></i> Voir le détail
                                            </a>
                                            @else
                                            <a href="{{ route('depannage.detail', $item->id) }}" class="btn btn-primary" >
                                                <i class="fas fa-fingerprint"></i> Analyser la demande
                                            </a>
                                            @endif
                                        @endif
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
