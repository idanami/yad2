<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\Reset\PasswordReset;
use App\Http\Controllers\Home;
use App\Http\Controllers\Register;
use App\Models\PropertyList;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
// Route::get('/', function () {
//     $property_lists =  PropertyList::first();
//     return view('home.mobile_content')->with('property_lists',$property_lists);
// });
Route::get('/publish', function (){
    return view('publish.publish');
});

Route::get('/realestate',[Home::class,'realestate']);
Route::post('/mobile_content',[Home::class,'mobileContent']);

Route::post('/register',[RegisterController::class,'register_process']);
Route::post('/login',[LoginController::class,'login_process']);
Route::post('/test',[Register::class,'index']);
// Route::post('reset_password_without_token', [PasswordReset::class,'validatePasswordRequest']);
Route::get('send-verification_code', [PasswordReset::class,'validatePasswordRequest'])->name('sendVarificationCode');
Route::get('check_token', [PasswordReset::class,'confirmToken'])->name('confirmToken');
Route::post('enter_new_pass', [PasswordReset::class,'changePassword']);

