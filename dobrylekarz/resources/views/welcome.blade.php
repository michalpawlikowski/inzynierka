@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
       
        <main class="py-4">
            <div class="container">
                <form action="" method="get">
                    @csrf
                    <b> Opcja 1</b>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            NFZ
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                        <label class="form-check-label" for="flexCheckChecked">
                            Płatny
                        </label>
                    </div>

                    Specjalizacja:

                    <select class="js-example-basic-single" name="specjalizacja">


                 


                    </select>
                    <br>
                    Miasto:

                    <select class="js-example-basic-single" name="miasto">




                    </select>
                    <br>
                    <button type="submit" class="btn btn-primary">
                        {{'Szukaj' }}
                    </button>

                </form>

            </div>
        </main>
        
    </div>

    <div class = "row">
        <input id="searchTextField" type="text" size="50" placeholder="Enter a location" autocomplete="on">
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
