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
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
     
	
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&amp;subset=latin-ext" rel="stylesheet">
  

            <script type="text/javascript">
    		function spalanie()
    			{
    				var p = document.getElementById( "p" ).value;
    				var d = document.getElementById( "d" ).value;
    				var out = document.getElementById( "w" );

    				if( isNaN( p ) || isNaN( d ) )
    					out.innerHTML = "Dystans i ilosć paliwa muszą być liczbami!";
    				else
    					{
    						if( d != 0 )
    							{
    								var wynik = ( Math.abs( p ) * 100 ) / Math.abs( d );
    								out.innerHTML = "Spalanie: " + wynik.toFixed( 2 ) + " l/100km";
    							}
    						else
    							out.innerHTML = "Dystans nie może być zerowy!";
    			}
    		}
    	</script>
<!-- Styles -->

    <!-- Navbar --> 
    <nav class="navbar navbar-dark bg-navbar navbar-expand-md">
                <div class="container-fluid">
                                <a class="navbar-brand "  href="/"><img src="{{ URL::to('/img/logo.svg') }}" width="60" height="60" alt="">AutoDane</a>
                                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                     <span class="navbar-toggler-icon"></span>
                                   </button>

                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                      <ul class="navbar-nav ms-auto mb-2 mb-lg-0 mr_right">
                                
                                  <li class="nav-item"><a class="nav-link" href="{{ url('/car_base') }}">Baza aut</a></li>
                                  <li class="nav-item"><a class="nav-link" href="{{ url('/oblicz') }}">Oblicz spalanie</a></li>
                                  @if (Route::has('login'))
                                     @auth
                                         <li class="nav-item"><a class="nav-link"href="{{ url('/user_car') }}">Moje raporty</a></li>
                                         <li class="nav-item dropdown">
                                  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> {{ Auth::user()->name }}</a>
                                      <ul class="dropdown-menu">
                                         <li><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> {{ __('Wyloguj') }} </a> </li>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none"> @csrf </form>
                                         <li><a class="dropdown-item" href="{{ url('/user_account') }}">Moje konto</a></li>
                                         <li><hr class="dropdown-divider"></li>
                                         <li><a class="dropdown-item" href="#">Something else here</a></li>
                                       </ul>
                                </li>
                                    @else
                                         <li class="nav-item"><a class="nav-link" href="{{ route('login') }}" class="nav-link">Zaloguj</a></li>
                                    @if (Route::has('register'))
                                         <li class="nav-item"><a class="nav-link" href="{{ route('register') }}" class="nav-link">Zarejestruj</a></li> 
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
                  </div>
             </div>
    </nav>



    
                          
             
                    
   
  <body style="background-color:#252525">

        <main class="py-4 ">
            @yield('content')
        </main>
   
</body>
</html>
