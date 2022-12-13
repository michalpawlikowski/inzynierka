@extends('layouts.app')

@section('content')
<style>
#myInput {
  background-image: url('/css/searchicon.png'); /* Add a search icon to input */
  background-position: 10px 12px; /* Position the search icon */
  background-repeat: no-repeat; /* Do not repeat the icon image */
  width: 100%; /* Full-width */
  font-size: 16px; /* Increase font-size */
  padding: 12px 20px 12px 40px; /* Add some padding */
  border: 1px solid #ddd; /* Add a grey border */
  margin-bottom: 12px; /* Add some space below the input */
}

#myTable {
  border-collapse: collapse; /* Collapse borders */
  width: 100%; /* Full-width */
  border: 1px solid #ddd; /* Add a grey border */
  font-size: 18px; /* Increase font-size */
}

#myTable th, #myTable td {
  text-align: left; /* Left-align text */
  padding: 12px; /* Add padding */
}

#myTable tr {
  /* Add a bottom border to all table rows */
  border-bottom: 1px solid #ddd;
}

#myTable tr.header, #myTable tr:hover {
  /* Add a grey background color to the table header and on hover */
  background-color: #f1f1f1;
}
    </style>
    
<div class="container">
    @include('adminlist')
    <br><br>
    <div class="row justify-content-center">
        

        <div class='col-md-8'>
        
            <div class='card'>
                <div class='card-header'>

                  <h5>Lista usług</h5>
                  <input class='form-control' id='myInput' type='text' placeholder='Szukaj..'>
  <table class='table table-bordered table-striped'>
    <thead>
      <tr>
        <th>Nazwa</th>
        <th>Skasuj</th>
      </tr>
    </thead>
    <tbody id='myTable'>
        @php
        foreach ($listservices as $listservices)
        {
            echo "
        
      <tr>
        
        <td>$listservices->name</td>
        <td><a href='/adminpanel/listspecializations/deleteservices/$listservices->id'> <button type='button' class='btn btn-outline-danger'>Kasuj</button></a></td>
      </tr>
      ";
        }

        @endphp
    </tbody>
  </table>
Dodaj nową usługe:

<form action="/adminpanel/listspecializations/addservices/{{$numberspecializations}}" method="post">
 @csrf
  <input type="text" class="form-control" name="nameservices" placeholder="Nazwa usługi" required>
  
  <button type="submit" class="btn btn-primary">Dodaj</button>
</form>
                    
                </div>
                

        
            </div>
            <br>
        </div>
        

    
    </div>
</div>

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


