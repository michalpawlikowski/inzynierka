@extends('layouts.app')

@section('content')
<div class="container">
    @include('adminlist')
    <div class="row justify-content-center">
        

        <div class='col-md-8'>
          
            <div class='card'>
                <div class='card-header'>
                    Edycja użytwkownika



                </div>
                
                @php
                foreach ($user as $user)
                {
        echo "
               
                        
                        <form action='/adminpanel/listuser/edit/save/$user->id' method='get'>
        
                                <br> Imię: <input type='text' class='form-control' name='name' value='$user->name'>
                                 Nazwisko: <input type='text' class='form-control' name='surname' value='$user->surname'>
                                 Data urodzenia: <input type='date' class='form-control' name='date' value='$user->date'>
                                 Email: <input type='text' class='form-control' name='email' value='$user->email'>
                                 <br>
                                <button type='submit' class='btn btn-primary'>
                                 Zapisz
                                </button>
            
                            </form>
        
        
        
        
        
                
                 
                
        ";
            }
            @endphp    
        
            </div>
            <br>
        </div>
        

    
    </div>
</div>
@endsection


