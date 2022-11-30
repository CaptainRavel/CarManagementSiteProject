
<div class="container">
    <div class="container col-md-8">
<div class="card">
    <div wire:loading>
        <div style="display: flex; justify-content: center; align-items: center; background-color: black;
        position: fixed; top: 0px; left: 0px; z-index: 9999; width: 100%; height: 100%; opacity: .75;">
            <div class="la-ball-spin-clockwise la-2x">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
    </div>
    <div class="card-header">
            <div class="autosized">
                <div class="form-group row" >
                    <label for="make" class="h4 text-center">Marka</label>
                        <select wire:model="selectedMake" class="form-control text-center" name="make">
                            <option value=NULL class="selected">WYBIERZ</option>
                            @foreach($makes as $make)
                                <option value="{{ $make->id_car_make }}">{{ $make->name }}</option>
                            @endforeach
                        </select>
                    </div>
            <br>
            @if($makes != NULL)
            <div class="form-group row" >
                <label for="model" class="h4 text-center">Model</label>
                    <select wire:model="selectedModel" class="form-control text-center" name="model">
                        <option value=NULL class="selected">WYBIERZ</option>
                        @foreach($models as $model)
                            <option value="{{ $model->id_car_model }}">{{ $model->name }}</option>
                        @endforeach
                    </select>
                </div>   
            @endif
            <br>
            @if ($models != NULL)
            <div class="form-group row" >
                <label for="generation" class="h4 text-center">Generacja</label>
                    <select wire:model="selectedGeneration" class="form-control text-center" name="generation">
                        <option value=NULL class="selected">WYBIERZ</option>
                        @foreach($generations as $generation)
                            <option value="{{ $generation->id_car_generation }}">{{ $generation->name }} [{{ $generation->year_begin }}-{{ $generation->year_end }}]</option>
                        @endforeach
                    </select>
                </div>   
            @endif
            <br>
            @if ($generations != NULL)
            <div class="form-group row" >
                <label for="serie" class="h4 text-center">Seria</label>
                    <select wire:model="selectedSerie" class="form-control text-center" name="serie">
                        <option value=NULL class="selected">WYBIERZ</option>
                        @foreach($series as $serie)
                            <option value="{{ $serie->id_car_serie }}">{{ $serie->name }}</option>
                        @endforeach
                    </select>
                </div>   
            @endif
            <br>
            @if ($series != NULL)
            <div class="form-group row" >
                <label for="trim" class="h4 text-center">Wersja silnika</label>
                    <select wire:model="selectedTrim" class="form-control text-center" name="trim">
                        <option value=NULL class="selected">WYBIERZ</option>
                        @foreach($trims as $trim)
                            <option value="{{ $trim->id_car_trim }}">{{ $trim->name }}</option>
                        @endforeach
                    </select>
                </div>   
            @endif
            <br>
           {{-- @if ($trims != NULL)
            <div class="form-group row" >
                <label for="equipments" class="h4 text-center">Wersja wyposażenia</label>
                    <select wire:model="selectedEquipment" class="form-control text-center" name="equipment">
                        <option value=NULL class="selected">WYBIERZ</option>
                        @foreach($equipments as $equipment)
                            <option value="{{ $equipment->id_car_equipment }}">{{ $equipment->equip_name }} {{ $equipment->year }}</option>
                        @endforeach
                    </select>
                </div>   
            @endif
            <br> --}}
            <table class="table">
                <thead>
                    <tr>
                        <th>SPECYFIKACJA</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($specs as $spec)
                        <tr>
                            <td>{{ $spec->spec_name }}</td>
                            <td>{{ $spec->value }}</td>
                            @if ($spec->unit == 'NULL')
                                <td></td> 
                                @else
                                <td>{{ $spec->unit }}</td>
                            @endif
                        </tr>
                @endforeach
                </tbody>
            </table>
            {{--<br>
            <table class="table">
                <thead>
                    <tr>
                        <th>WYPOSAŻENIE</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($options as $option)
                        <tr>
                            <td>{{ $option->equip_val_name }}</td>
                            @if ($option->is_base == 1)
                                <td>bazowe</td> 
                                @else
                                <td>opcjonalne</td>
                            @endif
                        </tr>
                @endforeach
                </tbody>
            </table>--}}
    </div>
</div>
</div>
</div>