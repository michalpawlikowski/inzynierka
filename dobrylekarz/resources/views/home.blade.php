@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row justify-content-center">

      

            <div class="card">
                <br>
                <a href='/add'> <button type="button" class="btn btn-success">Dodaj nowy profil</button> </a>
                <br>
                <div class='card-header'>
                    
                
        <h2>Moje profile: </h2>

        
 


<div class="table-responsive">  
    <table class='table table-bordered table-striped'>
      <thead>
        <tr>
          <th>Nazwa profilu </th>
          <th>Lokalizacje-Usługi-Dni pracy</th>
          <th>Opis</th>
          <th>Skasuj</th>
        </tr>
      </thead>
      <tbody id='myTable'>
          @php
          foreach ($offerlist as $offerlist)
          {
              echo "
          
        <tr>
          
          <td>$offerlist->specializations</td>
          <td><a href='/editprofil/addlocation/$offerlist->id'><button type='button' class='btn btn-outline-success'>Edycja</button></a></td>
          <td><a href='/editprofil/adddescription/$offerlist->id'><button type='button' class='btn btn-outline-success'>Ustaw opis</button></a></td>
          <td> <a href='deleteprofil/$offerlist->id'> <button type='button' class='btn btn-outline-danger'>Kasuj</button></a></td>
        </tr>
        ";
          }
  /*<td><a href='editprofil/$offerlist->id'><button type='button' class='btn btn-outline-success'>Edytuj</button></a></td>*/
          @endphp
      </tbody>
    </table>







    

</div>
</div>
</div>

@endsection


