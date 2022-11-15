@extends('layouts.app')

@section('content')
<div class="container">
    <a href={{ route('add') }}> <button type="button" class="btn btn-success">Dodaj nowy profil</button> </a>


    <div class="row justify-content-center">

        @php
        foreach ($oferta as $oferta)
        {
echo "
        <div class='col-md-8'>
          
            <div class='card'>
                <div class='card-header'>
                    ".$oferta->specjalizacje."  <br>  ".$oferta->miasta."
                    <button type='button' class='btn btn-outline-success'>Edytuj</button>
                    <button type='button' class='btn btn-outline-danger'>Kasuj</button>
                </div>
                

               Opis:
            </div>
        </div>
";
    }
    @endphp    

<!--
      <div class="col-md-8">

        <div class="card">
            <div class="card-header">{{ __('Proil 2') }} 
                <button type="button" class="btn btn-outline-success">Edytuj</button>
                <button type="button" class="btn btn-outline-danger">Kasuj</button>
            </div>

            <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                
                {{'Kardiolog'}}<br>
                {{'Adres'}}<br>
                {{'Cennik'}}<br>
                {{'Opis'}}<br>
            </div>
        </div>
    </div>
-->

    </div>
</div>
@endsection
