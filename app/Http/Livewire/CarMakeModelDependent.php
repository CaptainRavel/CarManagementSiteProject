<?php
  
namespace App\Http\Livewire;

use App\Models\CarBase;
use Livewire\Component;
use App\Models\CarMakes;
use App\Models\CarModels;


class CarMakeModelDependent extends Component
{
    public $makes;
    public $models;
    public $car_details;
  
    public $selectedMake = NULL;
    public $selectedModel = NULL;
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function mount()
    {
        $this->makes = CarMakes::all();
        $this->models = collect();
        $this->car_details = collect();
    }
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function render()
    {
        return view('livewire.carmakemodeldependent');
    }
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function updatedSelectedMake($make)
    {
        if (!is_null($make)) {
            $this->models = CarBase::where('make_id', '=', $make)->get();
        }
    }
    public function updatedSelectedModel($model)
    {
        if (!is_null($model)) {
            $this->car_details = CarBase::where('id', '=', $model)->get();
        }
    }
    
}