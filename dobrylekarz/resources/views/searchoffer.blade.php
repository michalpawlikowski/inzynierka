@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
       
        <main class="py-4">
            <div class="container">
              
                @php

foreach ($userinfo as $userinfo)

{

echo "<h3>$userinfo->name1 $userinfo->surname1</h3>
<br>
Opis:  $userinfo->description
";

}




                foreach ($listoffer as $listoffer)
                {
        echo "
                <div class='col-md-8'>
                  
                    <div class='card'>
                        <div class='card-header'>
                             
                            <br>
                             $listoffer->nazwa
                            
                             
                             <br>
                                adres: $listoffer->ulica $listoffer->numerulicy
                            <br>
                                        
                                    ";
                                
                                    foreach ($servicesoffer as $servicesoffer1)
                                    {
                                        if($servicesoffer1->adres == $listoffer->id)
                                        {
                                            echo "$servicesoffer1->usluga  <br>";
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


            </div>
        </main>
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
