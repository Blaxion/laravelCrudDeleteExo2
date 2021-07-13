<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index(){
        $cars=Car::all();
        return view('votreconcessionnaire',compact('cars'));
    }
    public function create(){
        return view('pages.createcar');
    }
    public function store(Request $request){
        $store = new Car;
        $store->brand = $request->brand;
        $store->year = $request->year;
        $store->color = $request->color;
        $store->price = $request->price;
        $store->discount = $request->discount;
        $store->save();
        return redirect ('/createcar');
    }
    public function destroy($id){
        $destroy = Car::find($id);
        $destroy->delete();
        return redirect ('/');
    }
}
