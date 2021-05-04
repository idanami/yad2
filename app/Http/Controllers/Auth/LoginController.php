<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login_process(Request $request){

        //check if name request match in user database
        $user = User::where('email',$request->email__login)->where('password',$request->password__login)->first();

        if($user){
            //this acount is exist
            // if(Hash::check($request->password,$user->password)){
            //     //password is match
            //     $request->session()->put('LoggedUser',$user->id);
            //     if($request->name == 'master' && $request->password == 'master')
            //         return redirect('/cinema-home_master');
            //     return redirect('/cinema-home');
            // }
            // return back()->with('fail','no match pass');
        }
        return 'hel no';
        // return back()->with('fail','no found acount');
    }
}
