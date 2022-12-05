<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserRefuels;
use App\Models\UserReprairs;
use App\Models\UserCars;
use App\Models\CarMakes;
use App\Models\CarModels;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

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
        $exist = UserCars::where('user_id', '=', $user_id)->exists();
        $user_cars = UserCars::where('user_id', '=', $user_id)->get();
        return view('user_raports', ["user_cars"=>$user_cars, "exist"=>$exist]);
    }
    public function user_car_raports($car)
    {
        $user_id = Auth::id();
        $car_id=$car;
        $current_car_name= UserCars::select('name')->Where('car_id', '=', $car)->value('name');
        $cars_list = UserCars::Where('user_id', '=', $user_id)->OrderBy('car_id')->get();
        $refuel_list = UserRefuels::where('user_id', '=', $user_id)->where('car_id', '=', $car_id)->orderBy('refueling_date', 'desc')->paginate(5, ['*'], 'refuels');
        $reprair_list = UserReprairs::where('user_id', '=', $user_id)->where('car_id', '=', $car_id)->orderBy('reprair_date', 'desc')->paginate(5, ['*'], 'reprairs');
        return view('user_car_raports', ["refuel_list"=>$refuel_list,
                    "reprair_list"=>$reprair_list, "cars_list"=>$cars_list, "current_car"=>$car, "current_car_name"=>$current_car_name,
                    "title" => "Moje konto"]);
    }
    
    public function store_refuels(Request $request){
        $refuel_list = new UserRefuels();
        $refuel_list->user_id = Auth::id();
        $refuel_list->fuel = $request->fuel;
        $refuel_list->price = $request->price;
        $refuel_list->refueling_date = $request->date;
        $refuel_list->distance = $request->distance;
        $refuel_list->car_id = $request->car_id;
        $refuel_list->save();
    
        return redirect()->route('user_raports.car_reports', $request->car_id);
    }

    public function store_reprairs(Request $request){
        $reprair_list = new UserReprairs();
        $reprair_list->user_id = Auth::id();
        $reprair_list->reprair_date = $request->date;
        $reprair_list->car_mileage = $request->mileage;
        $reprair_list->reprair_location = $request->reprair_location;
        $reprair_list->reprair_subject = $request ->reprair_subject;
        $reprair_list->price = $request->price;
        $reprair_list->car_id = $request->car_id;
        $reprair_list->save();
    
        return redirect()->route('user_raports.car_reports', $request->car_id);
    }
    public function user_auto()
    {
        $user_id = Auth::id();
        $exist = UserCars::where('user_id', '=', $user_id)->exists();
        $user_cars = UserCars::where('user_id', '=', $user_id)->get();
        $cars_count = $user_cars->count();
        return view('user_auto', ["user_cars"=>$user_cars, "exist"=>$exist, "cars_count"=>$cars_count]);
    }

    public function user_add_car()
    {
        return view('add_user_auto');
    }
    public function user_add_car_save(Request $request){
        $request->validate([
            'name' => 'required',
            'car_make' => 'required',
            'car_model' => 'required',
            'production_year' => 'required|integer|min:1900|max:2099',
            'image' => 'mimes:jpg,png,jpeg|max:5048',
        ]);
        if ($request->image != NULL){
        $newImageName = time() . '-' . $request->name . '.' . $request->image->extension();
        $request->image->move(public_path('img/users_car_images'), $newImageName);
        $image = $newImageName;

        }
        else{
        $image = NULL;
        }
        $user_cars = new UserCars();
        $user_cars->user_id = Auth::id();
        $user_cars->name = $request->name;
        $user_cars->car_make = $request->car_make;
        $user_cars->car_model = $request->car_model;
        $user_cars->production_year = $request->production_year;
        $user_cars->oc_date = $request->oc_date;
        $user_cars->tech_rev_date = $request->tech_rev_date;
        $user_cars->image = $image;
        $user_cars->save();
    
        return redirect()->route('user_auto');
    }
    public function edit_user_car($car_id)
    {
        $id = $car_id;
        $user_cars = UserCars::where('car_id', '=', $id)->get();
        return view('edit_user_auto', ['user_cars'=>$user_cars]);
    }
    public function update_user_car(Request $request){
        $request->validate([
            'name' => 'required',
            'car_make' => 'required',
            'car_model' => 'required',
            'production_year' => 'required|integer|min:1900|max:2099',
            'image' => 'mimes:jpg,png,jpeg|max:5048',
        ]);

        $id = $request->car_id;
        $name = $request->name;
        $car_make = $request->car_make;
        $car_model = $request->car_model;
        $production_year = $request->production_year;
        $oc_date = $request->oc_date;
        $tech_rev_date = $request->tech_rev_date;
        if ($request->image != NULL){
            $image_path = UserCars::select('image')->where('car_id', '=', $id)->value('image');
            $file_path = public_path('img/users_car_images/'.$image_path);
            File::delete($file_path);
            
            $newImageName = time() . '-' . $request->name . '.' . $request->image->extension();
            $request->image->move(public_path('img/users_car_images'), $newImageName);
            $image = $newImageName;
        }
        else{
            $image = UserCars::select('image')->where('car_id', '=', $id)->value('image');
        }
        UserCars::where('car_id', '=', $id)->update([
            'name'=>$name,
            'car_make'=>$car_make,
            'car_model'=>$car_model,
            'production_year'=>$production_year,
            'oc_date'=>$oc_date,
            'tech_rev_date'=>$tech_rev_date,
            'image'=>$image,
        ]);
    
        return redirect()->route('user_auto');
    }

    public function destroy_user_car($car_id){

        $id = $car_id;
        $image_path = UserCars::select('image')->where('car_id', '=', $id)->value('image');
        $file_path = public_path('img/users_car_images/'.$image_path);
        if (File::exists($file_path)){
            File::delete($file_path);
            UserCars::where('car_id', '=', $id)->delete();
            UserRefuels::where('car_id', '=', $id)->delete();
            UserReprairs::where('car_id', '=', $id)->delete();
        }
        else{
            UserCars::where('car_id', '=', $id)->delete();
            UserRefuels::where('car_id', '=', $id)->delete();
            UserReprairs::where('car_id', '=', $id)->delete();
        }

        return redirect()->route('user_auto');
    }
}
