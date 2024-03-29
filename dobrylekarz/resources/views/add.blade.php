@extends('layouts.app')

@section('content')
<div class="container">
    
    <div class="row justify-content-center">

        
          
            
            <div class="card">
                <div class="card-header">Dodawanie nowego profilu</div>
                <div class="card-body">
                    <div class="table-responsive">  
                <form action="{{route('home') }}" method="post">
                    @csrf
                    <h3> Wybierz specjalizacje</h3>
                    Specjalizacja: 
                    <select class="js-example-basic-single" name="specializations" style="width: 15%" required>
                        @php
                        foreach ($specializations as $specializations)
                                 {
                                 
                                 echo "<br>  <option value='".$specializations->id."'>".($specializations->name)."</option>";
                                 
                                 }
                      @endphp
                      </select>
                      <br>

      
                   
                   
                    <button type="submit" class="btn btn-primary">
                     Dodaj
                    </button>

                </form>


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
