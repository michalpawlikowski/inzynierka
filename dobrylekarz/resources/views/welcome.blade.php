@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
       
        <main class="py-4">
            <div class="container">
                <form action="/search" method="post">
                    @csrf
                    
                   

                    Specjalizacja:

                    <select class="js-example-basic-single" name="specializations">


                        @php
                        foreach ($specializations as $specializations)
                                 {
                                 
                                    
                                    echo "<option value ='$specializations->id'>$specializations->name </option> ";
                                 
                                 }
                                 
                      @endphp
                      <br>
                       </select>
                    <br>
                    Miasto:

                    <select class="js-example-basic-single" name="city">


                        @php
                        foreach ($miasta as $miasta)
                                 {
                                    echo "<option value ='$miasta->id'>$miasta->nazwa </option> ";
                                 }
                                 
                      @endphp
                      <br>
                       </select>
                    <br>
                    <button type="submit" class="btn btn-primary">
                        {{'Szukaj' }}
                    </button>
                </form>
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
