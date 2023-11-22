<?php

namespace App\Http\Controllers\Auth;

use Carbon\Carbon;
use App\Models\User;
use Illuminate\Http\Request;
// use Illuminate\Http\Client\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;

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
    protected function verifyOtp(Request $request)
    {
        $otpString = $request->one . $request->two . $request->three . $request->four . $request->five . $request->six;
        $otpInt = $otpString;
        $userId = $request->user_id;
        $user = User::findOrFail($userId);
        // dd($user);
        if ($user->otp === $otpInt) {
            return redirect("change-password");
        } else {
            // dd("didn't match");
            return redirect()->back()->with("error", "OTP didn't matched");
        }
        // dd($userId);
        // dd(LocalStorage->getItem("userId"));
    }
    protected function passwordChange(Request $request)
    {
        dd($request->all());
    }
}
