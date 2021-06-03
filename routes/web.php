<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\Reset\PasswordReset;
use App\Http\Controllers\checkAdvancedExist;
use App\Http\Controllers\Home;
use App\Http\Controllers\Post\PostController;
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
Route::get('/add_post', function (){
    return view('publish.add_post');
});

Route::get('/realestate',[Home::class,'realestate'])->name('realestate');

Route::post('/mobile_content',[Home::class,'mobileContent']);

Route::get('/check_advanced',[checkAdvancedExist::class,'checkAdvancedExist'])->name('checkAdvanced');
Route::get('/allImageById',[checkAdvancedExist::class,'checkImageExist'])->name('imageById');
Route::get('/firstImageById',[checkAdvancedExist::class,'firstImageById']);

Route::post('/newPost',[PostController::class,'newPost']);


Route::get('/register',[RegisterController::class,'register_process']);
Route::get('/login',[LoginController::class,'login_process']);

Route::get('send_verification_code', [PasswordReset::class,'validatePasswordRequest']);
Route::get('check_token', [PasswordReset::class,'confirmToken'])->name('confirmToken');
Route::post('enter_new_pass', [PasswordReset::class,'changePassword']);

