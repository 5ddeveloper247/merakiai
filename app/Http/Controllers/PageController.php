<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    public function index()
    {
        // $user = Auth::user();
        // dd($user);
        $data['customTitle'] = "Home";
        return view("pages.index")->with($data);
    }
    public function login()
    {
        $data['customTitle'] = "Login";
        return view("pages.login")->with($data);
    }
    public function pricing()
    {
        $data['customTitle'] = "Pricing";
        return view("pages.pricing")->with($data);
    }
    public function privacyPolicy()
    {
        $data['customTitle'] = "Privacy Policy";
        return view("pages.privacy-policy")->with($data);
    }
    public function plans()
    {
        $data['customTitle'] = "Plans";
        return view("pages.plans")->with($data);
    }
    public function tools()
    {
        $data['customTitle'] = "Tools";
        return view("pages.tools")->with($data);
    }
    public function termCondition()
    {
        $data['customTitle'] = "Terms & Conditions";
        return view("pages.term-condition")->with($data);
    }
    public function chatDasboard()
    {
        $data['customTitle'] = "Dashboard";
        return view("pages.chat-dashboard")->with($data);
    }
    public function forgetPassword()
    {
        $data['customTitle'] = "Forget Password";
        return view("pages.forget-password")->with($data);
    }
    public function contact()
    {
        $data['customTitle'] = "Contact";
        return view("pages.contact")->with($data);
    }
    public function payment()
    {
        $data['customTitle'] = "Payment";
        return view("pages.payment")->with($data);
    }
    public function products()
    {
        $data['customTitle'] = "Products";
        return view("pages.products")->with($data);
    }
    public function register()
    {
        $data['customTitle'] = "Register";
        return view("pages.register")->with($data);
    }
    public function support()
    {
        $data['customTitle'] = "Support";
        return view("pages.support")->with($data);
    }
}
