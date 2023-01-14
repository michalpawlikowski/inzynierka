@extends('layouts.app')

@section('content')
<style>
#table-wrapper {
  position:relative;
}
#table-scroll {
  height:150px;
  overflow:auto;  
  margin-top:20px;
}
#table-wrapper table {
  width:100%;

}
#table-wrapper table * {
  background:yellow;
  color:black;
}
#table-wrapper table thead th .text {
  position:absolute;   
  top:-20px;
  z-index:2;
  height:20px;
  width:35%;
  border:1px solid red;
}

</style>
<div class="container" >
    <div class="row justify-content-center">
       
        
            <div class="container">
              
                <div class='card'>
                    <div class='card-header'>
    
                      <h5>Lista lekarzy</h5>
                      <input class='form-control' id='myInput' type='text' placeholder='Szukaj..'>
                      <div class="table-responsive">       
      <table class='table table-bordered table-striped'>
        <thead>
          <tr>
            <th>Imię</th>
            <th>Nazwisko</th>
            <th>Ulica</th>
            <th>Numer ulicy</th>
            <th>Telefon</th>
            <th>Ocena</th>
            <th>Sprawdź ofertę</th>
            
          </tr>
        </thead>
        <tbody id='myTable'>
          @php
          foreach ($listoffer as $listoffer)
          {
              echo "
          
        <tr>
          
          <td>$listoffer->name1</td>
          <td>$listoffer->surname1</td>
          <td>$listoffer->ulica</td>
          <td>$listoffer->numerulicy</td>
          <td>$listoffer->telefon</td>
          <td>";
            foreach ($ocena as $ocena1)
          {
          if($listoffer->users_id == $ocena1->users_id)
            echo $ocena1->ocena;
          }
            
            echo "</td>
          <td><a href='/search/$listoffer->id1'> <button type='button' class='btn btn-outline-success'>Sprawdź ofertę</button></a></td>
        </tr>
        ";
          }
    
          @endphp



        </div>

        </div>

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
