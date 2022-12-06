@extends('layouts.app')

@section('content')
<div class="container">
    <a href='/add'> <button type="button" class="btn btn-success">Dodaj nowy profil</button> </a>
    <div class="row justify-content-center">
        
        @php
        foreach ($offerlist as $offerlist)
        {
echo "
        <div class='col-md-8'>
          
            <div class='card'>
                <div class='card-header'>
                     ".$offerlist->specializations."  
                     <a href='editprofil/$offerlist->id'><button type='button' class='btn btn-outline-success'>Edytuj</button></a>
                        
                    <a href='deleteprofil/$offerlist->id'> <button type='button' class='btn btn-outline-danger'>Kasuj</button></a>
                </div>
                

        
            </div>
            <br>
        </div>
        
";
    }
    @endphp    
    </div>
</div>
@endsection


