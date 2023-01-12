@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center" >
       
        <main class="py-4">
            <div class="container">

                <h1> Znajdź odpowiedniego specjalistę w swojej okolicy</h1>


                <form action="/search" method="post">
                    @csrf
                    
                   

                    Specjalizacja:
                    <br>
                    <select class="js-example-basic-single"  style="width: 15%" name="specializations" >


                        @php
                        foreach ($specializations as $specializations1)
                                 {
                                 
                                    
                                    echo "<option value ='$specializations1->id'>$specializations1->name </option> ";
                                 
                                 }
                                 
                      @endphp
                      <br>
                       </select>
                    <br>
                    Miasto:
<br>
                    <select class="js-example-basic-single"  style="width: 15%" name="city" >


                        @php
                        foreach ($miasta as $miasta1)
                                 {
                                    echo "<option value ='$miasta1->id'>$miasta1->nazwa </option> ";
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
