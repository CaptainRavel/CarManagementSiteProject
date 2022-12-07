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
    <title>IleZaAuto</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->

    <link href="/css/main.css" rel="stylesheet">
    <link href="/css/bootstrap.css" rel="stylesheet">
    <link href="/css/all.css" rel="stylesheet">
    <!-- icons -->
    <script src="https://kit.fontawesome.com/87cc08ad60.js" crossorigin="anonymous"></script>
    <!--favicon-->
    <link rel="icon" href="favicon.ico" type="image/vnd.microsoft.icon">
           

  
    
</head>
<nav class="navbar navbar-dark bg-navbar navbar-expand-lg">


        <div class="container-fluid float-right ps-5">
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
                          <a class="nav-link" href="{{ route('user_raports.reports') }}"> <li>Moje Raporty</li></a>
                          <a class="nav-link" href="{{ route('user_auto') }}"> <li>Moje Auta</li></a>
                          <a class="nav-link" href="{{ route('user_account') }}"> <li>Moje Konto</li></a>

                          {{--<a class="nav-link" href="{{ url('/user_account') }}"> <li>Witaj {{ Auth::user()->name }}</li></a>--}} 
                          <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> {{ __('') }}<li>Wyloguj</li> </a> 
                          <form id="logout-form" action="{{ route('logout') }}" method="GET" class="d-none"> @csrf </form>        

                          
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


                          
             
                    
   
  <body style="background-color:#252525">

        <main class="main mt-5">

            @yield('content')
        </main>
   
</body>
</html>
