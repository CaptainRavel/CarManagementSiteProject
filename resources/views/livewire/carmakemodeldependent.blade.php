<div class="container">
    <div class="container col-md-8">
<div class="card">
    <div class="card-header">
            <div class="autosized">
                <div class="form-group row" >
                    <label for="make" class="h4 text-center">Marka</label>
                        <select wire:model="selectedMake" class="form-control text-center"    name="make">
                            <option value="" selected>---MARKA---</option>
                            @foreach($makes as $make)
                                <option value="{{ $make->id }}">{{ $make->make }}</option>
                            @endforeach
                        </select>
                    </div>
            <br>
                @if (!is_null($selectedMake))
                <div class="form-group row">
                    <label for="model" class="h4 text-center">Model</label>
                        <select wire:model="selectedModel"class="form-control text-center" name="model">
                            <option value="" class= selected>---MODEL---</option>
                            @foreach($models as $model)
                                <option value="{{ $model->id }}">{{ $model->model }}</option>
                            @endforeach
                        </select>
                @endif
                </div>
            <br>
                <div class="card">
                    <div class="card text-center ">
                    <div class="card-header bg-primary text-white">
                    <h4 class="card-title ">Dane techniczne:</h4>
                    </div>
                </div>
                @if (!is_null($selectedModel))
                    <div class="card">
                    <h6 class="card-text">
                        <br><br>
                        MARKA:
                        @foreach ($car_details as $car)
                        {{ $car->make}}
                        @endforeach
                        <br><br>
                        MODEL:
                        @foreach ($car_details as $car)
                        {{ $car->model}}
                        @endforeach
                        <br><br>
                        GENERACJA:
                        @foreach ($car_details as $car)
                        {{ $car->generation}}
                        @endforeach
                    <br><br>
                        PRODUKOWANY OD:
                        @foreach ($car_details as $car)
                        {{ $car->year_from }}
                        @endforeach
                         DO:
                        @foreach ($car_details as $car)
                        {{ $car->year_to }}
                        @endforeach
                        <br>
                        SERIA:
                        @foreach ($car_details as $car)
                        {{ $car->series}}
                        @endforeach
                        <br>
                        SILNIK:
                        @foreach ($car_details as $car)
                        {{ $car->trim}}
                        @endforeach
                        <br>
                        TYP NADWOZIA:
                        @foreach ($car_details as $car)
                        {{ $car->body_type}}
                        @endforeach
                        <br>
                        LICZBA SIEDZEŃ:
                        @foreach ($car_details as $car)
                        {{ $car->number_of_seats}}
                        @endforeach
                        <br>
                        DŁUGOŚĆ AUTA:
                        @foreach ($car_details as $car)
                        @if($car->lenght_mm == null)
                        ---
                        @else
                        {{ $car->lenght_mm}}mm
                        @endif
                        @endforeach
                        <br>
                        SZEROKOŚĆ AUTA:
                        @foreach ($car_details as $car)
                        @if($car->width_mm == null)
                        ---
                        @else
                        {{ $car->width_mm}}mm
                        @endif
                        @endforeach
                        <br>
                        WYSOKOŚĆ AUTA:
                        @foreach ($car_details as $car)
                        @if($car->height_mm == null)
                        ---
                        @else
                        {{ $car->height_mm}}mm
                        @endif
                        @endforeach
                        <br>
                        ROZSTAW OSI:
                        @foreach ($car_details as $car)
                        @if($car->wheelbase_mm == null)
                        ---
                        @else
                        {{ $car->wheelbase_mm}}mm
                        @endif
                        @endforeach
                        <br>
                        ROZSTAW KÓŁ PRZEDNICH:
                        @foreach ($car_details as $car)
                        @if($car->front_track_mm == null)
                            @if($car->front_track_width_mm != null)
                            {{$car->front_track_width_mm}}mm
                            @else
                            ---
                            @endif
                        @else
                        {{ $car->front_track_mm}}mm
                        @endif
                        @endforeach
                        <br>
                        ROZSTAW KÓŁ TYLNYCH:
                        @foreach ($car_details as $car)
                        @if($car->rear_track_mm == null)
                            @if($car->back_track_width_mm != null)
                            {{$car->back_track_width_mm}}mm
                            @else
                            ---
                            @endif
                        @else
                        {{ $car->rear_track_mm}}mm
                        @endif
                        @endforeach
                        <br>
                        MASA WŁASNA:
                        @foreach ($car_details as $car)
                        @if($car->curb_weight_kg == null)
                        ---
                        @else
                        {{ $car->curb_weight_kg}}mm
                        @endif
                        @endforeach
                        <br>
                        ROZMIAR KÓŁ:
                        @foreach ($car_details as $car)
                        @if($car->wheel_size_r14 == null)
                        ---
                        @else
                        {{ $car->wheel_size_r14}}mm
                        @endif
                        @endforeach
                        <br>
                        PRZEŚWIT:
                        @foreach ($car_details as $car)
                        @if($car->ground_clearance_mm == null)
                            @if($car->clearance_mm != null)
                            {{$car->clearance_mm}}mm
                            @else
                            ---
                            @endif
                        @else
                        {{ $car->ground_clearance_mm}}mm
                        @endif
                        @endforeach
                        <br>
                        MAKSYMALNA MASA PRZYCZEPY Z HAMULCEM:
                        @foreach ($car_details as $car)
                        @if($car->trailer_load_with_brakes_kg == null)
                        ---
                        @else
                        {{ $car->trailer_load_with_brakes_kg}}kg
                        @endif
                        @endforeach
                        <br>
                        MAKSYMALNY ŁADUNEK:
                        @foreach ($car_details as $car)
                        @if($car->payload_kg == null)
                        ---
                        @else
                        {{ $car->payload_kg}}kg
                        @endif
                        @endforeach
                        <br>
                        MAKSYMALNA OBJĘTOŚĆ BAGAŻNIKA:
                        @foreach ($car_details as $car)
                        @if($car->max_trunk_capacity_l == null)
                        ---
                        @else
                        {{ $car->max_trunk_capacity_l}}l
                        @endif
                        @endforeach
                        <br>
                        MINIMALNA OBJĘTOŚĆ BAGAŻNIKA:
                        @foreach ($car_details as $car)
                        @if($car->minimum_trunk_capacity_l == null)
                        ---
                        @else
                        {{ $car->minimum_trunk_capacity_l}}l
                        @endif
                        @endforeach
                        <br>
                        MAKSYMALNY MOMENT OBROTOWY:
                        @foreach ($car_details as $car)
                        @if($car->maximum_torque_n_m == null)
                        ---
                        @else
                        {{ $car->maximum_torque_n_m}}NM
                        @endif
                        @endforeach
                        <br>
                        TYP ZAPŁONU:
                        @foreach ($car_details as $car)
                        @if($car->injection_type == null)
                        ---
                        @else
                        {{ $car->injection_type}}
                        @endif
                        @endforeach
                        <br>
                        WAŁEK ROZRZĄDU:
                        @foreach ($car_details as $car)
                        @if($car->overhead_camshaft == null)
                        ---
                        @else
                        {{ $car->overhead_camshaft}}
                        @endif
                        @endforeach
                        <br>
                        UKŁAD CYLINDRÓW:
                        @foreach ($car_details as $car)
                        @if($car->cylinder_layout == null)
                        ---
                        @else
                        {{ $car->cylinder_layout}}
                        @endif
                        @endforeach
                        <br>
                        LICZBA CYLINDRÓW:
                        @foreach ($car_details as $car)
                        @if($car->number_of_cylinders == null)
                        ---
                        @else
                        {{ $car->number_of_cylinders}}
                        @endif
                        @endforeach
                        <br>
                        STOPIEŃ SPRĘŻANIA:
                        @foreach ($car_details as $car)
                        @if($car->compression_ratio == null)
                        ---
                        @else
                        {{ $car->compression_ratio}}
                        @endif
                        @endforeach
                        <br>
                        TYP PALIWA:
                        @foreach ($car_details as $car)
                        @if($car->engine_type == null)
                        ---
                        @else
                        {{ $car->engine_type}}
                        @endif
                        @endforeach
                        <br>
                        LICZBA WTRYSKÓW NA CYLINDER:
                        @foreach ($car_details as $car)
                        @if($car->valves_per_cylinder == null)
                        ---
                        @else
                        {{ $car->valves_per_cylinder}}
                        @endif
                        @endforeach
                        <br>
                        RODZAJ PRZYSPIESZENIA:
                        @foreach ($car_details as $car)
                        @if($car->boost_type == null)
                        ---
                        @else
                        {{ $car->boost_type}}
                        @endif
                        @endforeach
                        <br>
                        ŚREDNICA CYLINDRA:
                        @foreach ($car_details as $car)
                        @if($car->cylinder_bore_mm == null)
                        ---
                        @else
                        {{ $car->cylinder_bore_mm}}mm
                        @endif
                        @endforeach
                        <br>
                        POŁOŻENIE SILNIKA:
                        @foreach ($car_details as $car)
                        @if($car->engine_placement == null)
                        ---
                        @else
                        {{ $car->engine_placement}}
                        @endif
                        @endforeach
                        <br>
                        OBROTY MAKSYMALNEGO MOMENTU OBROTOWEGO:
                        @foreach ($car_details as $car)
                        @if($car->turnover_of_maximum_torque_rpm == null)
                        ---
                        @else
                        {{ $car->turnover_of_maximum_torque_rpm}}RPM
                        @endif
                        @endforeach
                        <br>
                        MOC MAKSYMALNA:
                        @foreach ($car_details as $car)
                        @if($car->max_power_kw == null)
                        ---
                        @else
                        {{ $car->max_power_kw}}kW
                        @endif
                        @endforeach
                        <br>
                        INTERCOOLER:
                        @foreach ($car_details as $car)
                        @if($car->presence_of_intercoolere == null)
                        Brak
                        @else
                        {{ $car->presence_of_intercooler}}
                        @endif
                        @endforeach
                        <br>
                        POJEMNOŚĆ:
                        @foreach ($car_details as $car)
                        @if($car->capacity_cm3 == null)
                        ---
                        @else
                        {{ $car->capacity_cm3}}cm3
                        @endif
                        @endforeach
                        <br>
                        MOC SILNIKA:
                        @foreach ($car_details as $car)
                        @if($car->engine_hp == null)
                        ---
                        @else
                        {{ $car->engine_hp}}KM
                        @endif
                        @endforeach
                        <br>
                        OBROTY SILNIKA:
                        @foreach ($car_details as $car)
                        @if($car->engine_hp_rpm == null)
                        ---
                        @else
                        {{ $car->engine_hp_rpm}}obr/min.
                        @endif
                        @endforeach
                        <br>
                        KOŁA NAPĘDOWE:
                        @foreach ($car_details as $car)
                        @if($car->drive_wheels == null)
                        ---
                        @else
                        {{ $car->drive_wheels}}
                        @endif
                        @endforeach
                        <br>
                        LICZBA BIEGÓW:
                        @foreach ($car_details as $car)
                        @if($car->number_of_gears == null)
                        ---
                        @else
                        {{ $car->number_of_gears}}
                        @endif
                        @endforeach
                        <br>
                        PROMIEŃ SKRĘTU:
                        @foreach ($car_details as $car)
                        @if($car->turning_circle_m == null)
                        ---
                        @else
                        {{ $car->turning_circle_m}}
                        @endif
                        @endforeach
                        <br>
                        SKRZYNIA BIEGÓW:
                        @foreach ($car_details as $car)
                        @if($car->transmission == null)
                        ---
                        @else
                        {{ $car->transmission}}
                        @endif
                        @endforeach
                        <br>
                        KLASA AUTA:
                        @foreach ($car_details as $car)
                        @if($car->car_class == null)
                        ---
                        @else
                        {{ $car->car_class}}
                        @endif
                        @endforeach
                        <br>
                        ŚREDNIE SPALANIE NA 100KM:
                        @foreach ($car_details as $car)
                        @if($car->mixed_fuel_consumption_per_100_km_l == null)
                        ---
                        @else
                        {{ $car->mixed_fuel_consumption_per_100_km_l}}l/km.
                        @endif
                        @endforeach
                        <br>
                        ZASIĘG:
                        @foreach ($car_details as $car)
                        @if($car->range_km == null)
                        ---
                        @else
                        {{ $car->range_km}}km
                        @endif
                        @endforeach
                        <br>
                        LICZBA DRZWI:
                        @foreach ($car_details as $car)
                        @if($car->number_of_doors == null)
                        ---
                        @else
                        {{ $car->number_of_doors}}
                        @endif
                        @endforeach
                        <br>
                        POJEMNOŚĆ BAKU PALIWA:
                        @foreach ($car_details as $car)
                        @if($car->fuel_tank_capacity_l == null)
                        ---
                        @else
                        {{ $car->fuel_tank_capacity_l}}l
                        @endif
                        @endforeach
                        <br>
                        PRĘDKOŚĆ MAKSYMALNA:
                        @foreach ($car_details as $car)
                        @if($car->max_speed_km_per_h == null)
                        ---
                        @else
                        {{ $car->max_speed_km_per_h}}km/h
                        @endif
                        @endforeach
                        <br>
                        LICZBA OKTANOWA PALIWA:
                        @foreach ($car_details as $car)
                        @if($car->fuel_grade == null)
                        ---
                        @else
                        {{ $car->fuel_grade}}
                        @endif
                        @endforeach
                        <br>
                        TYLNE ZAWIESZENIE:
                        @foreach ($car_details as $car)
                        @if($car->back_suspension == null)
                        ---
                        @else
                        {{ $car->back_suspension}}
                        @endif
                        @endforeach
                        <br>
                        TYLNE HAMULCE:
                        @foreach ($car_details as $car)
                        @if($car->rear_brakes == null)
                        ---
                        @else
                        {{ $car->rear_brakes}}
                        @endif
                        @endforeach
                        <br>
                        PRZEDNIE HAMULCE:
                        @foreach ($car_details as $car)
                        @if($car->front_brakes == null)
                        ---
                        @else
                        {{ $car->front_brakes}}
                        @endif
                        @endforeach
                        <br>
                        PRZEDNIE ZAWIESZENIE:
                        @foreach ($car_details as $car)
                        @if($car->front_suspension == null)
                        ---
                        @else
                        {{ $car->front_suspension}}
                        @endif
                        @endforeach
                        <br>
                        KRAJ POCHODZENIA:
                        @foreach ($car_details as $car)
                        @if($car->country_of_origin == null)
                        ---
                        @else
                        {{ $car->country_of_origin}}
                        @endif
                        @endforeach
                        <br>
                    </h6>
                </div>
                </div>
                @endif
            </div>
            </div>
    </div>
</div>
    </div>
</div>
