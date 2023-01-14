@extends('layouts.app')

@section('content')
<style>
    table {
      border-spacing: 0;
      width: 100%;
      border: 1px solid #ddd;
    }
    
    th {
      cursor: pointer;
    }
    
    th, td {
      text-align: left;
      padding: 16px;
    }
    
    tr:nth-child(even) {
      background-color: #f2f2f2
    }
    </style>
<div class="container">
    <div class="row justify-content-center">
       
        <main class="py-4">
            <div class="container">
              
                @php

foreach ($userinfo as $userinfo)

{

echo "<h3>$userinfo->name1 $userinfo->surname1</h3> 

Opis:  $userinfo->description
";

}




                foreach ($listoffer as $listoffer)
                {
        echo "
                <div class='col-md-8'>
                  
                    <div class='card'>
                        <div class='card-header'>
                             
                            
                            <b> Miejscowość:</b> $listoffer->nazwa
                            
                             
                             <br>
                             &nbsp &nbsp<b> Adres: </b> $listoffer->ulica $listoffer->numerulicy
                                <br>
                                &nbsp  &nbsp&nbsp<b>Telefon: </b> $listoffer->telefon 
                            <br>
                                        
                                    ";
                                   
                                $jeden=0;
                                    foreach ($servicesoffer as $servicesoffer1)
                                    {
                                        
                                        
                                        if($servicesoffer1->adres == $listoffer->id)
                                        {
                                            if($jeden == 0)
                                            {
                                                echo "<b>Dostępne usługi:</b> <br>";
                                                $jeden++;
                                            }
                                            echo " &nbsp &nbsp  -$servicesoffer1->usluga";
                                            if($servicesoffer1->cena == 0)
                                            {
                                                echo "<br>";
                                            }
                                            else
                                            {
                                                echo "- $servicesoffer1->cena zł <br>";
                                            }
                                            
                                            
                                        }
                                    }
                                   
                                    $jedenn=0;
                                    foreach ($days as $days1)
                                    {
                                        


                                        
                                        
                                        if($days1->adres == $listoffer->id)
                                        {
                                           
                                            if($jedenn == 0)
                                            {
                                                echo "<b>Dni pracy:</b> <br>";
                                                $jedenn++;
                                            }
                                              
                                            
                                            echo " &nbsp &nbsp  -$days1->dzien: $days1->od - $days1->do <br>
                                            ";
                                          
                                            
                                            
                                        }
                                    }


                          echo "        
                        </div>
                        
        
                
                    </div>
                    <br>
                </div>
                
        ";
            }
            
            
            @endphp    
       

                Dodaj swoją opinię: 
                <form action="/search/addopinion/{{$number}}/{{$iduser}}" method="post">
                    @csrf
                    Imię i nazwisko: <input type="text" class="form-control" name="name" placeholder="Imię i nazwisko" required>
                    Opis:<input type="text" class="form-control" name="describe" placeholder="Opis"  maxlength="255" required>
                    Ocena: <br>
                    <select  name="ocena" class='table table-bordered table-striped' style="width: 5%">

                        <option value ='1'>1 </option> 
                        <option value ='2'>2 </option> 
                        <option value ='3'>3 </option> 
                        <option value ='4'>4 </option> 
                        <option value ='5'>5 </option>
                        
                       </select>

<br>
                     <button type="submit" class="btn btn-primary">Dodaj</button>
                   </form>

            </div>
        </main>
        <h5>Oceny   (@php

            foreach ($srednia as $srednia)
            {
                echo $srednia   ->ocena;
            }
            @endphp):</h5>
        <br> 
        <table id="myTable">
            <tr>
            <th>Pacjent</th>
            <th>Opis</th>
            <th>Ocena</th>
            </tr>
        @php

foreach ($oceny as $oceny)
{
            echo "<tr>
                <th>  $oceny->user </th>
                <th>  $oceny->opis </th>
                <th>  $oceny->ocena </th>
</tr>
            ";
}
@endphp
        </table>
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
