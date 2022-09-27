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
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">

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

      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
          <div class="container px-5">
              <a class="navbar-brand" href="/">AutoDane</a>

              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                      <li class="nav-item"><a class="nav-link" href="{{ url('/car_base') }}">Baza aut</a></li>
                      <li class="nav-item"><a class="nav-link" href="{{ url('/oblicz') }}">Oblicz spalanie</a></li>
                @if (Route::has('login'))
                        @auth
                        <li class="nav-item"><a class="nav-link"href="{{ url('/user_car') }}">Moje raporty</a></li>
                        <li class="nav-item"><a class="nav-link"href="{{ url('/user_account') }}">Moje konto</a></li>
                        <li class="nav-item"> <a class="nav-link" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                          document.getElementById('logout-form').submit();">
                             {{ __('Wyloguj') }}
                         </a> </li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>

                        @else
                          <a href="{{ route('login') }}" class="nav-link">Zaloguj</a>

                            @if (Route::has('register'))
                              <a href="{{ route('register') }}" class="nav-link">Zarejestruj</a>
                            @endif
                          @endauth
                        </div>
                  @endif
                  </ul>
              </div>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                  <span class="navbar-toggler-icon"></span>
              </button>



                  <!-- Right Side Of Navbar -->
                  <ul class="navbar-nav">
                      <!-- Authentication Links -->
                      @guest
                          @if (Route::has('login'))

                          @endif

                          @if (Route::has('register'))

                          @endif
                      @else
                          <li class="nav-item dropdown">
                              <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                  {{ Auth::user()->name }}
                              </a>

                              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                  <a class="dropdown-item" href="{{ route('logout') }}"
                                     onclick="event.preventDefault();
                                                   document.getElementById('logout-form').submit();">
                                      {{ __('Logout') }}
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
          </div>
      </nav>

  <body style="background-color:#f2f2f2">

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
