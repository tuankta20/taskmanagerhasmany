<?php

namespace App\Http\Controllers;
use App\Customer;
use App\Http\Requests\FormCustomersRequest;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\City;
class CustomerController extends Controller
{
    public function index(){
        $customers = Customer::all();
        return view('index',compact('customers'));
    }

    public function create(){
        $city = City::all();
        return view('create',compact('city'));
    }

    public function store(FormCustomersRequest $request){
        $customers = new Customer();
        $customers->name =$request->input('name');
        $customers->email =$request->input('email');
        $customers->city_id =$request->input('city_id');
        $customers->dob =$request->input('dob');
        $customers->save();
        return redirect()->route('customers');
    }

    public function edit($id){
        $customers = Customer::findOrfail($id);
        $city=City::all();
        return view('edit',compact('customers','city'));
    }

    public function update (Request $request,$id){
        $customers = Customer::find($id);
        $customers->name = $request->input('name');
        $customers->email = $request->input('email');
        $customers->city_id = $request->input('city_id');
        $customers->dob = $request->input('dob');
        $customers->save();
        return redirect()->route('customers');
    }

    public function destroy($id){
        $customers = Customer::FindOrfail($id);
        $customers->delete();
        return redirect()->route('customers');

    }

    public function search(Request $request)
    {
        $keyword = $request->input('keyword');
        if (!$keyword) {
            return redirect()->route('customers');
        }
        $customers = Customer::where('name', 'LIKE', '%' . $keyword . '%')->get();

        $cities = City::all();
        return view('index', compact('customers', 'cities'));
    }
}
