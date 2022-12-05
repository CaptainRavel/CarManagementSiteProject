@extends('layouts.app')

@section('content')

<h3 class='text-center'>Wybierz auto</h3>
<div class="d-flex justify-content-center">
    @if (!$exist)
  <div class="card" >
    <div class="card-body">
      <h5 class="card-title">BRAK AUT</h5>
      <p class="card-text">Nie dodałeś jeszcze żadnego auta, by móc dodawać raporty musisz mieć zapisany conajmniej jeden pojazd!</p>
    </div>
  <div class="card-body">
    <a href="{{ route('user_auto.add_car') }}" class="btn btn-warning" role="button" aria-pressed="true">DODAJ AUTO</a>
  </div>
  </div>
@endif

@if ($exist)  
  @foreach ($user_cars as $user_car)
        <div class="card" style="width: 20rem;" class="">
          @if ($user_car->image == '')
            <img class="card-img-top" src="{{ asset('img/user_car_default.jpg') }}" alt="Card image cap">
          @else
            <img class="card-img-top" src="{{ asset('img/users_car_images/' . $user_car->image) }}" alt="Card image cap">
          @endif
          <div class="card-body">
            <h5 class="card-title">{{ $user_car->name }}</h5>
            {{--  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> --}}
          </div>
            <div class="card-body">
              <a class="btn btn-warning text-light d-flex justify-content-center" style="width: 80%; margin-left: auto; margin-right: auto;" style="width: 50%" href="{{ route('user_raports.car_reports', $user_car->car_id) }}" role="button">WYBIERZ</a>   
            </div>
        </div>
        @endforeach
        @endif
</div>
@endsection
