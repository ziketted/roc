@include('admin.header')
<div  style="margin-top:10% !important;">
    <br><br>



@foreach ($depannages as $item )
<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h3 class="modal-title " id="staticBackdropLabel"><i class="fas fa-car-crash"></i>DEPANNAGE </h3> <button class="btn btn-info ">Etat :   {{ $item->status }}</button>
        </div>

        <div class="modal-body ">
            <form action="{{route('depannage.pricing',$item->id )  }}" method="POST" style="display:inline;">
                @csrf
                <ul class="list-group">
                    <li class="list-group-item bg-warning" aria-current="true">
                        <b>PROBLEME :</b> <br>
                        {{ $item->description }}
                    </li>
                    <li class="list-group-item"> Mr/Me: <b>{{ $item->name }} - {{
                            $item->prenom }}</b></li>
                    <li class="list-group-item">Téléphone :<b>{{ $item->phone }}</b>
                    </li>

                    <li class="list-group-item">
                        <label for="basic-addon1"> Combien peut coûter le service ?
                        </label>
                        <div class="input-group mb-3">
                            <span class="input-group-text">CDF </span>
                            <input type="text" class="form-control" required placeholder="Ex : 2500" aria-label=""
                                aria-describedby="basic-addon1" name="price" value="{{ old('price', $item->price) }}" {{
                                $item->price > 0 ? 'disabled' : '' }}>
                        </div>
                        <i>Donnez le montant que le client paiera en CDF.</i>
                    </li>
                </ul>

                <input type="text" value="{{ $item->id }}" disabled hidden>
        </div>
        @if(auth()->user()->profile ==3 && $item->price==0)


            <div class="modal-footer">
                <button type="submit" class="btn btn-warning btn-lg" style="color: black !important;">Envoyer le devis <i
                        class="far fa-paper-plane"></i></button>
            </div>

        @endif


        </form>
    </div>
</div>

@endforeach
</div>
@include('admin.footer')
