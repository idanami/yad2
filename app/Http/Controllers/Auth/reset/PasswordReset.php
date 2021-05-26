<?php

namespace App\Http\Controllers\Auth\reset;

use App\Http\Controllers\Controller;
use App\Mail\SendMailForResetPass;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class PasswordReset extends Controller
{
    public function validatePasswordRequest(Request $request)
    {
        $email = $request->email;
        // return $email;
        // You can add validation login here
        $user = User::whereEmail($email)->first();

        //Check if the user exists
        if ($user) {
            $pass_reset = DB::table('password_resets')->whereEmail($email)->first();

            if($pass_reset){
                DB::table('password_resets')->where('email',$email)
                ->update(['token'=> Str::random(6),'created_at' => Carbon::now()]);
            }else{
                //Create Password Reset Token
                DB::table('password_resets')->insert([
                    'email' => $email,
                    'token' => Str::random(6),
                    'created_at' => Carbon::now()
                ]);
            }

        }else return back()->withErrors(['email' => trans('User does not exist')]);

        //Get the token just created above
        $tokenData = DB::table('password_resets')->where('email', $email)->first();

        // send email reset to user
        Mail::to($email)->send(new SendMailForResetPass($tokenData->token));

        return response()->json($email);


    }
    public function confirmToken(Request $request){

        $check_token_valid = DB::table('password_resets')->where('email',$request->email)->where('token',$request->token__confirm)->first();
        if($check_token_valid != null)
            return true;
        return false;
    }
    public function changePassword(Request $request){
        DB::table('users')->whereEmail($request->email_for_change_pass)->update(['password' => $request->newPassword]);
        return view('publish.publish');
    }

}

