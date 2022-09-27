<?php

namespace App\Http\Controllers;

use App\Models\UserRefuels;
use App\Models\UserReprairs;
use Illuminate\Http\Request;

use App\Repositories\RefuelsRepository;
use App\Repositories\ReprairsRepository;
use Illuminate\Support\Facades\Auth;

class UserCarController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function user_raports()
    {
        $user_id = Auth::id();
        $refuel_list = UserRefuels::where('user_id', '=', $user_id)->orderBy('refueling_date', 'desc')->paginate(5, ['*'], 'refuels');
        $reprair_list = UserReprairs::where('user_id', '=', $user_id)->orderBy('reprair_date', 'desc')->paginate(5, ['*'], 'reprairs');
        return view('user_car', ["refuel_list"=>$refuel_list,
                    "reprair_list"=>$reprair_list,
                    "title" => "Moje konto"]);
    }
    
    public function store_refuels(Request $request){
        $refuel_list = new UserRefuels();
        $refuel_list->user_id = Auth::id();
        $refuel_list->fuel = $request->fuel;
        $refuel_list->price = $request->price;
        $refuel_list->refueling_date = $request->date;
        $refuel_list->distance = $request ->distance;
        $refuel_list->save();
    
        return redirect()->route('user_car.reports');
    }

    public function store_reprairs(Request $request){
        $reprair_list = new UserReprairs();
        $reprair_list->user_id = Auth::id();
        $reprair_list->reprair_date = $request->date;
        $reprair_list->car_mileage = $request->mileage;
        $reprair_list->reprair_location = $request->reprair_location;
        $reprair_list->reprair_subject = $request ->reprair_subject;
        $reprair_list->price = $request->price;
        $reprair_list->save();
    
        return redirect()->route('user_car.reports');
    }
}
