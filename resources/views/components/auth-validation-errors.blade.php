@props(['errors'])

@if ($errors->any())
    <div {{ $attributes }}>
        <div class="font-medium text-red-600">
            {{ __('') }}
        </div>

        <ul class="mt-3 list-disc list-inside text-sm text-red-600">
            @foreach ($errors->all() as $error)

            <div class="alert alert-warning" role="alert">
                <h4>Message d'erreur</h4>
             <p > {{ $error }}</p>


            </div>
            @endforeach
        </ul>
    </div>
@endif
