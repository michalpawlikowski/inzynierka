@extends('layouts.app')

@section('content')
<div class="container">
    
    <div class="row justify-content-center">

        <div class="col-md-8">
          
            <a href='/editprofil/addlocation/{{$numberprofil}}'> <button type="button" class="btn btn-success">Dodaj lokalizację</button> </a>
            <a href='/editprofil/adddescription/{{$numberprofil}}'> <button type="button" class="btn btn-success">Ustaw opis</button> </a>
            <div class="card">
                <div class="card-header">Edycja profilu</div>
                <div class="card-body">
                  
                    
                  
                        Opis profilu:
                        <textarea id="description" name="description" rows="2" cols="50" readonly>{{$description}}</textarea>
                          




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
