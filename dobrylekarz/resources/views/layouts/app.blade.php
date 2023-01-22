<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Dobrylekarz') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<script src="http://maps.googleapis.com/maps/api/js?sensor=false&amp;libraries=places" type="text/javascript"></script>
    <script type="text/javascript">
        function initialize() {
            var options = {
                types: ['(cities)'],
                componentRestrictions: {country: "us"}
            };
            var input = document.getElementById('searchTextField');
            var autocomplete = new google.maps.places.Autocomplete(input , options);
        }
        google.maps.event.addDomListener(window, 'load', initialize);
    </script>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Dobrylekarz') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Zaluguj się') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Zarejestruj się') }}</a>
                                </li>
                            @endif
                        @else
                     
                            <li class="nav-item dropdown">
                                 
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name . ' ' .Auth::user()->surname}}
                                  
                                </a>
                                
                           

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">

                                    @if (Auth::user()->activated == 0)
                                    <b>{{'Konto nieaktywne'}}</b>

                            
                                    <a onclick="myFunction()" class="dropdown-item" >
                                        {{ __('Moje profile') }}
                                    </a>
                                    @endif

                                    @if (Auth::user()->status == 1)
                                    <a href={{ route('adminpanel') }} class="dropdown-item" >
                                        {{ __('Panel administratora') }}
                                    </a>
                                    @endif

                                    @if (Auth::user()->activated == 1 &&Auth::user()->status == 0)
                                    <a href={{ route('home') }} class="dropdown-item" >
                                        {{ __('Moje profile') }}
                                    </a>
                                    @endif

                                    <a href={{ route('settings') }} class="dropdown-item" >
                                        {{ __('Ustawienia konta') }}
                                    </a>


                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Wyloguj') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>

                            </li>



                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <script>
        function myFunction() {
          alert("Poczekaj na aktywacje konta");
        }
        </script>
</body>
</html>
