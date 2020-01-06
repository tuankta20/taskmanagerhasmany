<?php

namespace App\Http\Controllers;
use App\City;
use App\Customer;
use App\Http\Requests\FormCityRequest;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Collection;

class CityController extends Controller
{
       public function index(){

           $cities = City::all();
           return view('cities.index',compact('cities'));
       }

       public function create(){
           return view('cities.create');
       }

       public function store(FormCityRequest $request){
           $city = new City();
           $city->name = $request->name;
           $city->save();
           return redirect()->route('cities');
       }

       public function edit($id)
       {
          $city = City::find($id);
          return view('cities.edit',compact('city'));
       }

       public function update(FormCityRequest $request,$id){
           $city = City::find($id);
           $city->name = $request->name;
           $city->save();

           return redirect()->route('cities');
       }

       public function destroy($id){
           $city = City::find($id);
           $city->delete();

           return redirect()->route('cities');
       }
}
