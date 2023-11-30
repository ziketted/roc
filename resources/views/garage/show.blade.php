
@include('admin.header')

<!-- Your content goes here -->



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
            <div class="col-lg-12">
                <div class="card">
                    <!-- <div class="panel-heading">
                        <h4>Invoice</h4>
                    </div> -->
                    <div class="card-body">

                     @foreach ($garages as $item)
                           <div class="row">
                               <div class="col-12">
                                   <div class="invoice-title">
                                       <h4 class="float-right">Numéro  : {{$item->id}}</h4>
                                       <h3 class="m-t-0">{{ $item->garage }}</h3>
                                   </div>
                                   <hr>
                                   <div class="row">
                                       <div class="col-6">
                                           <address>
                                               <strong>Gérant:</strong><br>
                                               {{ $item->gerant }}<br>
                                               {{$item->adresse}}
                                           </address>
                                       </div>
                                       <div class="col-6 text-right">
                                           <address>
                                               <strong>Info.</strong><br>
                                               {{$item->postal}}<br>
                                               {{$item->ville}}<br>
                                               {{$item->phone}}<br>
                                           </address>
                                       </div>
                                   </div>

                               </div>
                           </div>
                     @endforeach

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-title text-dark m-0"><strong>Les dépannages</strong></h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead>
                                                <tr>
                                                    <td><strong>Item</strong></td>
                                                    <td class="text-center"><strong>Client</strong></td>
                                                    <td class="text-center"><strong>Téléphone</strong>
                                                    </td>
                                                    <td class="text-center"><strong>Date</strong>
                                                    </td>
                                                    <td class="text-right"><strong>Montant payé.</strong></td>
                                                </tr>
                                                </thead>
                                                <tbody>

                                               @forelse ( $depannages_all as $item )
                                               <tr>
                                                <td>{{ $item->id }}</td>
                                                <td class="text-center">{{ $item->name }}</td>
                                                <td class="text-center">{{ $item->phone }}</td>
                                                <td class="text-center">{{ $item->created_at }}</td>
                                                <td class="text-right">{{ $item->price }} fc</td>
                                            </tr>
                                               @empty
                                                <p>Aucun dépannage effectué.</p>
                                               @endforelse



                                                </tbody>
                                            </table>
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div> <!-- end row -->
                    </div> <!-- panel body -->
                </div> <!-- end panel -->

            </div> <!-- end col -->

        </div>
        <!-- end row -->





    </div>
    </div>
    <!-- end wrapper -->

@include('admin.footer')
