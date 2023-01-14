@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row justify-content-center">
        
        @php
        foreach ($user as $user)
        {
echo "
        
          
            <div class='card'>
                <div class='card-header'>
                    
                    Dane konta
                <br>
                <a href='/deleteaccount/".Auth::id()."'> <button type='button' class='btn btn-outline-danger'>Kasuj konto</button></a>
                <form action='/settings/save/{{$user->id}}' method='get'>

                        <br> Imię: <input type='text' class='form-control' name='name' value='$user->name'>
                         Nazwisko: <input type='text' class='form-control' name='surname' value='$user->surname'>
                         Data urodzenia: <input type='date' class='form-control' name='date' value='$user->date'>
                         <br>
                        <button type='submit' class='btn btn-primary'>
                         Zapisz
                        </button>
    
                    </form>





        
            </div>
            <br>
       
        
";
    }
    @endphp    



    
    </div>
</div>
@endsection


