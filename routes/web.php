<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\Reset\PasswordReset;
use App\Http\Controllers\checkAdvancedExist;
use App\Http\Controllers\GetContact;
use App\Http\Controllers\Home;
use App\Http\Controllers\Post\PostController;
use App\Mail\SendMailForResetPass;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
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

Route::get('/publish', function (){
    return view('publish.publish');
});
Route::get('/add_post', function (){
    return view('publish.add_post');
});

Route::get('/realestate',[Home::class,'realestate']);

Route::post('/mobile_content',[Home::class,'mobileContent']);

Route::post('/check_advanced',[checkAdvancedExist::class,'checkAdvancedExist'])->name('checkAdvanced');
Route::get('/allImageById',[checkAdvancedExist::class,'checkImageExist'])->name('imageById');
Route::get('/firstImageById',[checkAdvancedExist::class,'firstImageById']);
Route::get('/getContact',[GetContact::class,'getContacts']);

Route::post('/newPost',[PostController::class,'newPost']);
Route::get('/check_field',[PostController::class,'checkField']);


Route::post('/register',[RegisterController::class,'register_process']);
Route::post('/login',[LoginController::class,'login_process']);
Route::get('/logout',[LoginController::class,'logout']);
Route::get('/check_login_ajax',[LoginController::class,'login_ajax']);

Route::get('send_verification_code', [PasswordReset::class,'validatePasswordRequest']);
Route::get('check_token', [PasswordReset::class,'confirmToken'])->name('confirmToken');
Route::post('enter_new_pass', [PasswordReset::class,'changePassword']);

