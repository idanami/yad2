<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function login_process(Request $request){

        //check if name request match in user database
        $user = User::where('email',$request->email)->where('password',$request->password)->first();

        if($user){
            $request->session()->put('LoggedUser',$user->id);
            return 'true';
        }
        return 'flase';
    }
}
