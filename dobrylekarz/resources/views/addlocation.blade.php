@extends('layouts.app')

@section('content')
<div class="container">
    
    <div class="row justify-content-center">

        <div class="col-md-8">
          
            
            <div class="card">
                <div class="card-header">Dodanie lokalizacji</div>
                <div class="card-body">
                  
                    
                    <h5>Lista obecnych lokalizacji</h5>
                    <input class='form-control' id='myInput' type='text' placeholder='Szukaj..'>
    <table class='table table-bordered table-striped'>
      <thead>
        <tr>
          <th>Lokalizacja</th>
          <th>Ulica</th>
          <th>Numer</th>
          <th>Usługi</th>
          <th>Skasuj</th>
        </tr>
      </thead>
      <tbody id='myTable'>
        @php
        foreach ($location as $location)
        {
            echo "
        
      <tr>
        
        <td>$location->miasto</td>
        <td>$location->ulica</td>
        <td>$location->numerulicy</td>
        <td><a href='/editprofil/addlocation/addservices/$location->id'><button type='button' class='btn btn-outline-success'>Wyświetl usługi</button></a>
        <td><a href='/editprofil/addlocation/deletecities/$location->id/$numberprofil'> <button type='button' class='btn btn-outline-danger'>Kasuj lokalizacje</button></a></td>
      </tr>
      ";
        }

        @endphp



      </tbody>
    </table>
  Dodaj nową lokalizację:
  
  <form action="/editprofil/addlocation/addcities/{{$numberprofil}}" method="post">


   @csrf
   <select class="js-example-basic-single" name="miasto">


    @php
    foreach ($listcities as $listcities)
             {
             
                
                echo "<option value ='$listcities->id'>$listcities->nazwa </option> ";
             
             }
             
  @endphp
  <br>
   </select>
   <br>
   Ulica: <input type="text" class="form-control" name="ulica" placeholder="Nazwa ulicy" required>
   Numer: <input type="text" class="form-control" name="numerulicy" placeholder="Numer ulicy" required>
    <button type="submit" class="btn btn-primary">Dodaj</button>
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
    <script>
        $(document).ready(function(){
          $("#myInput").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("#myTable tr").filter(function() {
              $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
          });
        });
        </script>

@endsection
