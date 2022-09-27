@extends('layouts.app')

@section('content')

        <!-- Page Content-->
        <div class="container px-4 px-lg-5 ">
            <!-- Heading Row-->
            <div class="row gx-4 gx-lg-5 align-items-center my-5">
                <div class="col-lg-7"><img class="img-fluid rounded mb-4 mb-lg-0" src="https://images.pexels.com/photos/919073/pexels-photo-919073.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="..." /></div>
                <div class="col-lg-5">
                    <h1 class="font-weight-light">Policz koszty samochodu</h1>
                    <p>Dzięki naszej witrynie sprawnie znajdziesz wszystkie niezbęde infomracje na temat swojego auta. Obliczysz średnie spalanie. Sprawdzisz ile wydałeś na naprawy swojego auta oraz tankowania</p>
                </div>
            </div>
            <!-- Call to Action-->
            <div class="card text-white bg-secondary my-5 py-4 text-center">
                <div class="card-body"><p class="text-white m-0">Ciekawostka o samochodach albo cwany slogan</p></div>
            </div>
            <!-- Content Row-->
            <div class="row gx-4 gx-lg-5">
                <div class="col-md-4 mb-5">
                    <div class="card h-100">
                        <div class="card-body">
                            <h2 class="card-title">Dane o samochodzie</h2>
                            <p class="card-text">Znajdziesz tutaj wszystkie niezbędne dane techniczne o modelu auta.</p>
                        </div>
                        <div class="card-footer"><a class="btn btn-primary text-light d-flex justify-content-center font-weight-bold" href="{{ url('/car_base') }}">Baza aut</a></div>
                    </div>
                </div>
                <div class="col-md-4 mb-5">
                    <div class="card h-100">
                        <div class="card-body">
                            <h2 class="card-title">Oblicz spalanie</h2>
                            <p class="card-text">Oblicz swoje średnie spalanie. Wystarczy ,że podasz przejechany dystans i liczbe zatankowanych litrów</p>
                        </div>
                        <div class="card-footer"><a class="btn btn-primary text-light d-flex justify-content-center font-weight-bold" href="{{ url('/oblicz') }}">Oblicz </a></div>
                    </div>
                </div>
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

        <!-- Footer-->
      
            @endsection
