@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card">
                <div class="card-header">{{ __('Proil 1') }} 
                    <button type="button" class="btn btn-outline-success">Edytuj</button>
                    <button type="button" class="btn btn-outline-danger">Kasuj</button>
                </div>
                

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    
                    {{'Dentysta'}}<br>
                    {{'Adres'}}<br>
                    {{'Cennik'}}<br>
                    {{'Opis'}}<br>
                </div>
            </div>
        </div>

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
        
    </div>
</div>
@endsection
