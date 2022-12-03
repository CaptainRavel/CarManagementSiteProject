@extends('layouts.app')

@section('content')

@foreach ($user_cars as $user_car )
<div class="card">
                    <div class="card text-center">
                        <div class="card-header">
                            <h3 class="card-title">Dodaj auto</h3>
                        </div>
                        <form action="{{ route('user_auto.update_car') }}" method="POST" enctype="multipart/form-data" role="form">
                            {{ csrf_field() }}
                            <input type="hidden", name="car_id" value="{{$user_car->car_id}}">
                                <div class="pt-3 autosized">
                                    <div class="form-group">
                                        <label for="image">Zdjęcie</label>
                                        <input class="form-control" style="width: 80%; margin-left: auto; margin-right: auto; "  type="file" id="image" name="image" value="{{ $user_car->image }}">
                                    </div> 
                                    <div class="form-group">
                                        <label for="name">Nazwa</label>
                                        <input class="form-control" style="width: 80%; margin-left: auto; margin-right: auto; "  type="text" id="name" name="name" required="required" minlength="3" value="{{ $user_car->name }}">
                                    </div>
                                    <div class="form-group">
                                      <label for="car_make">Marka</label>
                                      <input class="form-control" style="width: 80%; margin-left: auto; margin-right: auto; "  type="text" id="car_make" name="car_make" required="required" minlength="2" value="{{ $user_car->car_make }}">
                                  </div>
                                  <div class="form-group">
                                    <label for="car_model">Model</label>
                                    <input class="form-control" style="width: 80%; margin-left: auto; margin-right: auto; "  type="text" id="car_model" name="car_model" required="required" minlength="2" value="{{ $user_car->car_model }}">
                                </div>
                                    <div class="form-group">
                                        <label for="production_year">Rok produkcji</label>
                                        <input class="form-control" style="width: 80%; margin-left: auto; margin-right: auto;" type="number" min="1900" max="2099" step="1" value="{{ $user_car->production_year }}" class="form-control" name="production_year" />
                                    </div>
                                </div>
                                <div class="form-group">
                                  <label for="oc_date">Data ubezpieczenia</label>
                                  <input class="form-control" style="width: 80%; margin-left: auto; margin-right: auto;" type="date" class="form-control" name="oc_date" value="{{ $user_car->oc_date }}" />
                              </div>
                              <div class="form-group">
                                <label for="tech_rev_date">Data badań technicznych</label>
                                <input class="form-control" style="width: 80%; margin-left: auto; margin-right: auto;" type="date" class="form-control" name="tech_rev_date" value="{{ $user_car->tech_rev_date }}" />
                            </div>
                            <input style="width: 80%; margin-left: auto; margin-right: auto;" type="submit" value="Zapisz zmiany" class="btn btn-warning text-light d-flex justify-content-center"/><br>
                        </form>
                    </div>
                </div>
            </div>
            @endforeach
@endsection
