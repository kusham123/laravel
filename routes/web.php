<?php

use Illuminate\Support\Facades\Route;
use App\Models\Customer;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\CustomerController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// call modal and fetch data in route
// Route::get('/customer',function(){
//     $customers = Customer::all();
//     print_r($customers->toArray());
// });

Route::get('/customer',[CustomerController::class,'index']);
Route::post('/customer',[CustomerController::class,'customer']);

// call view page with controller
Route::get('/register',[RegistrationController::class,'index']);
Route::post('/register',[RegistrationController::class,'register']);