@extends('layouts.app')

@section('content')
<div class="container">
    
    <div class="row justify-content-center">

        <div class="col-md-8">
          
            
            <div class="card">
                <div class="card-header">Dodanie lokalizacji</div>
                <div class="card-body">
                  
                    
                    <form action="{{route('home') }}" method="post">
                        @csrf
                        
    
          
                        <br>
                        <br>
                        <button type="submit" class="btn btn-primary">
                         Zapisz
                        </button>
    
                    </form>




                </div>
           
        </div>
        
    </div>
</div>
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <script>
        $(document).ready(function() {
            $('.js-example-basic-single').select2();
        });
    </script>
@endsection
