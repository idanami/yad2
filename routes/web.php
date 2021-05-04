<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\Reset\PasswordReset;
use App\Http\Controllers\Register;
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
Route::get('/realestate', function (){
    return view('home.realestate');
});

Route::get('/publish', function (){
    return view('publish.publish');
});

Route::post('/register',[RegisterController::class,'register_process']);
Route::post('/login',[LoginController::class,'login_process']);
Route::post('/test',[Register::class,'index']);
// Route::post('reset_password_without_token', [PasswordReset::class,'validatePasswordRequest']);
Route::get('send-verification_code', [PasswordReset::class,'validatePasswordRequest'])->name('sendVarificationCode');
Route::get('check_token', [PasswordReset::class,'confirmToken'])->name('confirmToken');
Route::post('enter_new_pass', [PasswordReset::class,'changePassword']);

// Route::get('/test',[Register::class,'index']);
// Route::get('/register',[RegisterController::class,'index']);
// Route::post('/login_process',[Login_con::class,'process_login']);
