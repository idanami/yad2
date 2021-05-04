<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function register_process(Request $request){

        $request->validate([
            'email_register' => 'required|unique:users,email|string|email|max:255',
            'password' => 'required|min:5|max:12',
        ]);

        $email = $request->email_register;
        $fullName = $request->firstname." ".$request->lastname;
        $checkExists = User::where('email','=',$email)->where('name','=',$fullName)->first();
        if($checkExists){
            return "ssss";
        }
        //create acount
        $user= new User();
        $user->name = $fullName;
        $user->email = $email;
        $user->password = $request->password;
        $user->phoneNumber = $request->phoneNumber;
        $user->dateOfBirth = $request->dateOfBirth;
        $user->save();
        return $request->dateOfBirth;
    }
    public function index()
    {
        return 'test';
    }
}
