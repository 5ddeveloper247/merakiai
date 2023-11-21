<?php

namespace App\Http\Controllers\Auth;

use Carbon\Carbon;
use App\Models\User;
use Illuminate\Http\Request;
// use Illuminate\Http\Client\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use App\Http\Controllers\Auth\LocalStorage;

class ForgotPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset emails and
    | includes a trait which assists in sending these notifications from
    | your application to your users. Feel free to explore this trait.
    |
    */

    // use SendsPasswordResetEmails;
    protected function verifyEmail(Request $request)
    {
        $email = $request->email;
        $checkEmail = User::where('email', $email)->first();
        if ($checkEmail) {
            $otpGenerates = rand(100000, 999999);
            $checkEmail->otp = $otpGenerates;
            $checkEmail->otp_generated_at = Carbon::now();
            $checkEmail->save();
            return  redirect('otp')->with('userId', $checkEmail->id);
            // dd($checkEmail, $otpGenerates);
        } else {
            return redirect()->back()->with('error', 'Please Enter Valid Email');
        }
    }
    protected function verifyOtp(request $request)
    {
        $otpString = $request->one . $request->two . $request->three . $request->four . $request->five . $request->six;
        $otpInt = (int)$otpString;
        $userId = LocalStorage->getItem("userId");
        // User::where()
        // dd(LocalStorage->getItem("userId"));
    }
}
