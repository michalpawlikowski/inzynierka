@extends('layouts.app')

@section('content')
<div class="container">
    @include('adminlist')
    <div class="row justify-content-center">
        

        
          
            <div class='card'>
                <div class='card-header'>
                   <h5> Edycja użytwkownika</h5>
                @php
                foreach ($user as $user)
                {
        echo "
               
                        
                        <form action='/adminpanel/listuser/edit/save/$user->id' method='get'>
        
                                <br> Imię: <input type='text' class='form-control' name='name' value='$user->name'>
                                 Nazwisko: <input type='text' class='form-control' name='surname' value='$user->surname'>
                                 Data urodzenia: <input type='date' class='form-control' name='date' value='$user->date'>
                                 Email: <input type='text' class='form-control' name='email' value='$user->email'>
                                 Telefon: <input type='text' class='form-control' name='telephone' value='$user->telephone'>
                                <button type='submit' class='btn btn-primary'>
                                 Zapisz
                                </button>
            
                            </form>
        
        
        
        
        
                
                 
                
        ";
            }
            @endphp    
        
            </div>
         
        
        </div>

    
    </div>
</div>
@endsection


