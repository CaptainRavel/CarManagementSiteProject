<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="author" content="" />
    <title>AutoDane</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->

    <link href="/css/main.css" rel="stylesheet">
    <link href="/css/bootstrap.css" rel="stylesheet">

           

  
    
</head>
<nav class="navbar navbar-dark bg-navbar navbar-expand-lg ">


        <div class="container-fluid float-right ps-6">
                                <a class="navbar-brand" style:"margin-left:35%" href="/"><img src="{{ URL::to('/img/icon/logo.png') }}" width="250" alt=""></a>
                                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                     <span class="navbar-toggler-icon"></span>
                                   </button>
        </div>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="menu navbar-nav ms-auto mb-2 mb-lg-0 mr_right">
                          <a class="nav-link" href="{{ url('/car_base') }}"> <li> Baza aut</li></a>    
                          <a class="nav-link" href="{{ url('/oblicz') }}"> <li> Kalkulator spalania</li></a>        
                    @if (Route::has('login'))
                    @auth           
                        @can('isAdmin')
                            <a class="nav-link" href="{{ url('/admin_panel') }}"> <li>Panel Administratora</li></a>    
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> {{ __('Wyloguj') }} <li>Wyloguj</li></a>
                            <form id="logout-form" action="{{ route('logout') }}" method="GET" class="d-none"> @csrf </form>
                        @endcan
                        @can('isUser')             
                          <a class="nav-link" href="{{ url('/user_car') }}"> <li>Moje Raporty</li></a>
                          <a class="nav-link" href="{{ url('/user_account') }}"> <li>Moje Konto</li></a>

                          <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> {{ __('') }}<li>Wyloguj</li> </a> 
                                            <form id="logout-form" action="{{ route('logout') }}" method="GET" class="d-none"> @csrf </form>

                          <a class="nav-link" href="{{ url('/user_account') }}"> <li>Witaj {{ Auth::user()->name }}</li></a>           

                          
                        @endcan 



                                    @else
                                        <a class="nav-link" href="{{ route('login') }}"><li>Zaloguj</li></a>
                                    @if (Route::has('register'))
                                         <a class="nav-link" href="{{ route('register') }}"><li>Zarejestruj</li></a>
                                    
                                    @endif
                                     @endauth
                                    @endif

                                @guest
                                    @if (Route::has('login'))

                                    @endif

                                     @if (Route::has('register'))

                                     @endif
                                  @else
                                
                            @endguest   
                            

                  </ul>
       
         
  
</nav>

<style>
    /*!
 * Load Awesome v1.1.0 (http://github.danielcardoso.net/load-awesome/)
 * Copyright 2015 Daniel Cardoso <@DanielCardoso>
 * Licensed under MIT
 */
.la-ball-spin-clockwise,
.la-ball-spin-clockwise > div {
    position: relative;
    -webkit-box-sizing: border-box;
       -moz-box-sizing: border-box;
            box-sizing: border-box;
}
.la-ball-spin-clockwise {
    display: block;
    font-size: 0;
    color: #fff;
}
.la-ball-spin-clockwise.la-dark {
    color: #333;
}
.la-ball-spin-clockwise > div {
    display: inline-block;
    float: none;
    background-color: currentColor;
    border: 0 solid currentColor;
}
.la-ball-spin-clockwise {
    width: 32px;
    height: 32px;
}
.la-ball-spin-clockwise > div {
    position: absolute;
    top: 50%;
    left: 50%;
    width: 8px;
    height: 8px;
    margin-top: -4px;
    margin-left: -4px;
    border-radius: 100%;
    -webkit-animation: ball-spin-clockwise 1s infinite ease-in-out;
       -moz-animation: ball-spin-clockwise 1s infinite ease-in-out;
         -o-animation: ball-spin-clockwise 1s infinite ease-in-out;
            animation: ball-spin-clockwise 1s infinite ease-in-out;
}
.la-ball-spin-clockwise > div:nth-child(1) {
    top: 5%;
    left: 50%;
    -webkit-animation-delay: -.875s;
       -moz-animation-delay: -.875s;
         -o-animation-delay: -.875s;
            animation-delay: -.875s;
}
.la-ball-spin-clockwise > div:nth-child(2) {
    top: 18.1801948466%;
    left: 81.8198051534%;
    -webkit-animation-delay: -.75s;
       -moz-animation-delay: -.75s;
         -o-animation-delay: -.75s;
            animation-delay: -.75s;
}
.la-ball-spin-clockwise > div:nth-child(3) {
    top: 50%;
    left: 95%;
    -webkit-animation-delay: -.625s;
       -moz-animation-delay: -.625s;
         -o-animation-delay: -.625s;
            animation-delay: -.625s;
}
.la-ball-spin-clockwise > div:nth-child(4) {
    top: 81.8198051534%;
    left: 81.8198051534%;
    -webkit-animation-delay: -.5s;
       -moz-animation-delay: -.5s;
         -o-animation-delay: -.5s;
            animation-delay: -.5s;
}
.la-ball-spin-clockwise > div:nth-child(5) {
    top: 94.9999999966%;
    left: 50.0000000005%;
    -webkit-animation-delay: -.375s;
       -moz-animation-delay: -.375s;
         -o-animation-delay: -.375s;
            animation-delay: -.375s;
}
.la-ball-spin-clockwise > div:nth-child(6) {
    top: 81.8198046966%;
    left: 18.1801949248%;
    -webkit-animation-delay: -.25s;
       -moz-animation-delay: -.25s;
         -o-animation-delay: -.25s;
            animation-delay: -.25s;
}
.la-ball-spin-clockwise > div:nth-child(7) {
    top: 49.9999750815%;
    left: 5.0000051215%;
    -webkit-animation-delay: -.125s;
       -moz-animation-delay: -.125s;
         -o-animation-delay: -.125s;
            animation-delay: -.125s;
}
.la-ball-spin-clockwise > div:nth-child(8) {
    top: 18.179464974%;
    left: 18.1803700518%;
    -webkit-animation-delay: 0s;
       -moz-animation-delay: 0s;
         -o-animation-delay: 0s;
            animation-delay: 0s;
}
.la-ball-spin-clockwise.la-sm {
    width: 16px;
    height: 16px;
}
.la-ball-spin-clockwise.la-sm > div {
    width: 4px;
    height: 4px;
    margin-top: -2px;
    margin-left: -2px;
}
.la-ball-spin-clockwise.la-2x {
    width: 64px;
    height: 64px;
}
.la-ball-spin-clockwise.la-2x > div {
    width: 16px;
    height: 16px;
    margin-top: -8px;
    margin-left: -8px;
}
.la-ball-spin-clockwise.la-3x {
    width: 96px;
    height: 96px;
}
.la-ball-spin-clockwise.la-3x > div {
    width: 24px;
    height: 24px;
    margin-top: -12px;
    margin-left: -12px;
}
/*
 * Animation
 */
@-webkit-keyframes ball-spin-clockwise {
    0%,
    100% {
        opacity: 1;
        -webkit-transform: scale(1);
                transform: scale(1);
    }
    20% {
        opacity: 1;
    }
    80% {
        opacity: 0;
        -webkit-transform: scale(0);
                transform: scale(0);
    }
}
@-moz-keyframes ball-spin-clockwise {
    0%,
    100% {
        opacity: 1;
        -moz-transform: scale(1);
             transform: scale(1);
    }
    20% {
        opacity: 1;
    }
    80% {
        opacity: 0;
        -moz-transform: scale(0);
             transform: scale(0);
    }
}
@-o-keyframes ball-spin-clockwise {
    0%,
    100% {
        opacity: 1;
        -o-transform: scale(1);
           transform: scale(1);
    }
    20% {
        opacity: 1;
    }
    80% {
        opacity: 0;
        -o-transform: scale(0);
           transform: scale(0);
    }
}
@keyframes ball-spin-clockwise {
    0%,
    100% {
        opacity: 1;
        -webkit-transform: scale(1);
           -moz-transform: scale(1);
             -o-transform: scale(1);
                transform: scale(1);
    }
    20% {
        opacity: 1;
    }
    80% {
        opacity: 0;
        -webkit-transform: scale(0);
           -moz-transform: scale(0);
             -o-transform: scale(0);
                transform: scale(0);
    }
}
</style>


    
                          
             
                    
   
  <body style="background-color:#252525">

        <main class="main mt-5">

            @yield('content')
        </main>
   
</body>
</html>
