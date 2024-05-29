<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function index(){
        
        return view('customer');
    }

    public function customer(Request $request){
         print_r($request->all());
         $customer = new Customer;
          $customer->name = $request['name'];
          $customer->email = $request['email'];
        //   $customer->gender = $request['gender'];
          $customer->gender = 'M';
          $customer->address = $request['address'];
          $customer->password = md5('3455');
          $customer->save();
    }
}
