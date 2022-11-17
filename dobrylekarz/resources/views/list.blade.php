@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
       
        @php
        foreach ($listalekarzy as $listalekarzy)
        {
echo "
        <div class='col-md-8'>
           
          
            <div class='card'>
                
           
         
                <div class='card-header'>
                   <a href='list/profil/$listalekarzy->oferta_id'> ".$listalekarzy->name." ".$listalekarzy->surname."</a>
                    <br>
                    Miejscowość: ".$listalekarzy->miasto."
                    <br>
                    Opinia 4,3/5
                </div>
                

               Opis lekarza:
            </div>
            <br>
        </div>
    
";
    }
    @endphp    
        
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
