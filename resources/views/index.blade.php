@extends('layouts.app')

@section('content')

<div class="container">
 <!-- panel with foto -->
    <div class= "row my-5 align-items-center">
        <div class="col-md-7 d-none d-md-block"><img class="img-fluid rounded mb-4 mb-lg-0" src="https://images.pexels.com/photos/919073/pexels-photo-919073.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="..." />
        </div>
        <div class="col-12 col-md-5">
                    <h1 class="font-weight-normal text-light text-center">Policz koszty samochodu</h1>
                    <p class="text-light">Dzięki naszej witrynie sprawnie znajdziesz wszystkie niezbęde infomracje na temat swojego auta. Obliczysz średnie spalanie. Sprawdzisz ile wydałeś na naprawy swojego auta oraz tankowania</p>
        </div>
    </div>



    <!--Nowy pasek  kart panel with navigation-->




   

    <!--panel with navigation-->
    <div class="contener">
            <!--dane auta -->
       <div class="row gx-4 ">
            <div class="col-md-4 mb-5">
                        <div class="card h-100">
                          <div class="card-body">
                                <a href="{{ url('/car_base') }}"> <img src="{{ asset('/img/icon/car-17.png') }}" class="rounded mx-auto d-block pb-2" width="64" height="64"><a>
                                <h2 class="card-title">Dane o samochodzie</h2>
                                <p class="card-text">Znajdziesz tutaj wszystkie niezbędne dane techniczne o modelu auta.</p>
                            </div>
                        <div class="card-footer"><a class="btn btn-primary text-light d-flex justify-content-center font-weight-bold" href="{{ url('/car_base') }}">Baza aut</a>
                        </div>
                </div>
            </div>
            <!-- oblicz spalanie -->
            <div class="col-md-4 mb-5">
                    <div class="card h-100">
                        <div class="card-body">
                           <a href="{{ url('/oblicz') }}"> <img src="{{ asset('/img/icon/gas-station.png') }}" class="rounded mx-auto d-block pb-2" width="64px" height="64px"><a>
                            <h2 class="card-title text-center">Oblicz spalanie</h2>
                            <p class="card-text">Oblicz swoje średnie spalanie. Wystarczy ,że podasz przejechany dystans i liczbe zatankowanych litrów</p>
                        </div>
                        <div class="card-footer"><a class="btn btn-primary text-light d-flex justify-content-center font-weight-bold" href="{{ url('/oblicz') }}">Oblicz </a>
                        </div>
                    </div>
            </div>
            <!-- moje raporty -->
            <div class="col-md-4 mb-5">
                    <div class="card h-100">
                        <div class="card-body">
                            <h2 class="card-title">Moje raporty</h2>
                            <p class="card-text">Zapisz wszystkie naprawy jakie prowadzisz. Prowadź dziennik napraw oraz tankowań aby wiedzieć ile kosztuje Cię twój samochód</p>
                        </div>
                        @if (Route::has('login'))
                                @auth
                                  <div class="card-footer"><a class="btn btn-primary text-light d-flex justify-content-center font-weight-bold" href="{{ url('/user_car') }}">Moje raporty</a></div>
                                @else
                                  <div class="card-footer"><a class="btn btn-primary text-light d-flex justify-content-center font-weight-bold" href="{{ url('/user_car') }}">Moje raporty</a></div>
                                  @endauth
                                </div>
                        @endif
                    </div>
     </div>
</div>

                      <!-- Call to Action-->
<div class="card text-white  py-1 text-center">
  <div class="card-body"><p class="text-white m-0">Ciekawostka o samochodach albo cwany slogan</p></div>      
</div>

 
        <!-- Footer-->
      
            @endsection
