@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center" >
       
        <main class="py-4">
           

                <h1> Znajdź odpowiedniego specjalistę w swojej okolicy</h1>
            <br>

                <form action="/search" method="post">
                    @csrf
                    
                   

                    <h2>
                   
                    <select class="js-example-basic-single"  style="width: 25%; height:30px" name="specializations" >


                        @php
                        foreach ($specializations as $specializations1)
                                 {
                                 
                                    
                                    echo "<option value ='$specializations1->id'>$specializations1->name </option> ";
                                 
                                 }
                                 
                      @endphp
                      
                       </select>
                    
                    
                   

                    <select class="js-example-basic-single"  style="width: 30%" name="city" >


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
           
        </h2>
        
        <h1> Znajdź odpowiedniego specjalistę w swoim województwie</h1>
           

                <form action="/searchw" method="post">
                    @csrf
                    
                   

                    <h2>
                   
                    <select class="js-example-basic-single"  style="width: 25%; height:30px" name="specializations" >


                        @php
                        foreach ($specializations as $specializations1)
                                 {
                                 
                                    
                                    echo "<option value ='$specializations1->id'>$specializations1->name </option> ";
                                 
                                 }
                                 
                      @endphp
                      
                       </select>
                    
                    
                   

                    <select class="js-example-basic-single"  style="width: 30%" name="woje" >


                        @php
                        foreach ($woje as $woje1)
                                 {
                                    echo "<option value ='$woje1->id'>$woje1->nazwa </option> ";
                                 }
                                 
                      @endphp
                      <br>
                       </select>
                    <br>
                    
                    <button type="submit" class="btn btn-primary">
                        {{'Szukaj' }}
                    </button>

                </form>
           
        </h2>

        <h1> Znajdź odpowiedniego specjalistę po specjalizacji</h1>


        <form action="/searchs" method="post">
            @csrf
            
           

            <h2>
           
            <select class="js-example-basic-single"  style="width: 25%; height:30px" name="specializations" >


                @php
                foreach ($specializations as $specializations1)
                         {
                         
                            
                            echo "<option value ='$specializations1->id'>$specializations1->name </option> ";
                         
                         }
                         
              @endphp
              
               </select>
            
            <br>
            
            <button type="submit" class="btn btn-primary">
                {{'Szukaj' }}
            </button>

        </form>


            

            
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
