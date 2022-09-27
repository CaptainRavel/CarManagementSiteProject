@extends('layouts.app')

@section('content')

<div class="container">
    <div class="container px-4 px-lg-6">
        <div class="row gx-2 gx-lg-5 my-5">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card text-center">
                        <div class="card-header">
                            <h3 class="card-title" class='text-center'>Twoje raporty splania</h3>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Data</th>
                                            <th>Paliwo</th>
                                            <th>Dystans</th>
                                            <th>Cena</th>
                                            <th>Spalanie</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($refuel_list as $refuel)
                                            <tr>
                                                <th scope="row">{{ $refuel->refueling_date}}</th>
                                                <td>{{ $refuel->fuel}} l</td>
                                                <td>{{ $refuel->distance}} km</td>
                                                <td>{{ $refuel->price}} zł</td>
                                                <td>{{ round($refuel->fuel / $refuel->distance * 100, 2)}} l/100km</td>
                                            </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                {{ $refuel_list->appends(['reprairs' => $reprair_list->currentPage()])->links() }}
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="card">
                    <div class="card text-center">
                        <div class="card-header">
                            <h3 class="card-title">Dodaj raport spalania</h3>
                        </div>
                        <form action="{{ route('user_car.store_refuels') }}" method="POST" role="form">
                            {{ csrf_field() }}
                                <div class="pt-3 autosized">
                                    <div class="form-group">
                                        <label for="fuel">Ilość paliwa (litry)</label>
                                        <input class="form-control" style="width: 80%; margin-left: auto; margin-right: auto; "  type="number" id="fuel" name="fuel" required="required" min="0.1" max="999999" step="0.1">
                                    </div>
                                    <div class="form-group">
                                        <label for="price">Cena</label>
                                        <input class="form-control" style="width: 80%; margin-left: auto; margin-right: auto; " type="number" id="price" name="price" required="required" min="0.01" max="999999" step="0.01">
                                    </div>
                                    <div class="form-group">
                                        <label for="distance">Pokonany dystans (kilometry)</label>
                                        <input  class="form-control" style="width: 80%; margin-left: auto; margin-right: auto; " type="number" id="distance" name="distance" required="required" min="1" max="9999999" step="1">
                                    </div>
                                    <div class="form-group">
                                        <label for="date">Data tankowania</label>
                                        <input class="form-control" style="width: 80%; margin-left: auto; margin-right: auto;" type="date" class="form-control" required="required" name="date" />
                                    </div>
                                </div>
                            <input style="width: 80%; margin-left: auto; margin-right: auto;" type="submit" value="Dodaj raport" class="btn btn-primary text-light d-flex justify-content-center"/><br>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card">
                    <div class="card text-center">
                        <div class="card-header">
                            <h3 class="card-title" class='text-center'>Twoje raporty napraw</h3>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Data</th>
                                            <th>Przebieg</th>
                                            <th>Miejsce</th>
                                            <th>Przedmiot naprawy</th>
                                            <th>Cena</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($reprair_list as $reprair)
                                            <tr>
                                                <th scope="row">{{ $reprair->reprair_date}}</th>
                                                <td>{{ $reprair->car_mileage}} km</td>
                                                <td  white-space:nowrap;
                                                    overflow:hidden;
                                                    text-overflow:ellipsis;>{{ $reprair->reprair_location}}</td>
                                                <td  white-space:nowrap;
                                                    overflow:hidden;
                                                    text-overflow:ellipsis;>{{ $reprair->reprair_subject}}</td>
                                                <td>{{ $reprair->price}} zł</td>
                                            </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                {{ $reprair_list->appends(['refuels' => $refuel_list->currentPage()])->links() }}
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="card">
                    <div class="card text-center">
                        <div class="card-header">
                            <h3 class="card-title">Dodaj raport naprawy</h3>
                        </div>
                        <form action="{{ route('user_car.store_reprairs') }}" method="POST" role="form">
                            {{ csrf_field() }}
                                <div class="pt-3 autosized">
                                    <div class="form-group">
                                        <label for="reprair_subject">Przedmiot naprawy</label>
                                        <input class="form-control" style="width: 80%; margin-left: auto; margin-right: auto;" type="text" class="form-control" name="reprair_subject" required="required"/>
                                    </div>
                                    <div class="form-group">
                                        <label for="reprair_location">Miejsce naprawy</label>
                                        <input class="form-control" style="width: 80%; margin-left: auto; margin-right: auto;"type="text" class="form-control" name="reprair_location" required="required" />
                                    </div>
                                    <div class="form-group">
                                        <label for="mileage">Aktualny przebieg</label>
                                        <input class="form-control" style="width: 80%; margin-left: auto; margin-right: auto;" type="number" id="mileage" name="mileage" required="required" min="1" max="9999999" step="1">
                                    </div>
                                    <div class="form-group">
                                        <label for="price">Cena</label>
                                        <input class="form-control" style="width: 80%; margin-left: auto; margin-right: auto;" type="number" id="price" name="price" required="required" min="0.01" max="999999" step="0.01">
                                    </div>
                                    <div class="form-group">
                                        <label for="date">Data naprawy</label>
                                        <input class="form-control" style="width: 80%; margin-left: auto; margin-right: auto;" type="date" class="form-control" name="date" required="required" />
                                    </div>
                                </div>
                            <input class="btn btn-primary text-light d-flex justify-content-center" style="width: 80%; margin-left: auto; margin-right: auto;" type="submit" value="Dodaj raport" /><br>
                        </form>
                    </div>
                </div>
            </div>
            </div>

@endsection
