<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\Auth\ForgotPasswordController;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [PageController::class, "index"])->name("index");
Route::get('/change-password', [PageController::class, "changePassword"])->name("change-password");
Route::get('/otp', [PageController::class, "otpViewer"])->name("otp");
Route::get('/register', [PageController::class, "register"])->name("register");
Route::get('/forget-password', [PageController::class, "forgetPassword"])->name("forget-password");
Route::get('/login', [PageController::class, "login"])->name("login");
Route::get('/tools', [PageController::class, "tools"])->name("tools");
Route::get('/payment', [PageController::class, "payment"])->name("payment");
Route::get('/support', [PageController::class, "support"])->name("support");
Route::get('/products', [PageController::class, "products"])->name("products");
Route::get('/pricing', [PageController::class, "pricing"])->name("pricing");
Route::get('/contact', [PageController::class, "contact"])->name("contact");
Route::get('/chat-dashboard', [PageController::class, "chatDasboard"])->name("chat-dasboard");
Route::get('/plans', [PageController::class, "plans"])->name("plans");
Route::get('/privacy-policy', [PageController::class, "privacyPolicy"])->name("privacy-policy");
Route::get('/term-condition', [PageController::class, "termCondition"])->name("term-condition");
Route::post('/forget-password', [ForgotPasswordController::class, "verifyEmail"]);
Route::post('/verify-otp', [ForgotPasswordController::class, "verifyOtp"])->name('verify-otp');
Route::post('/change-password', [ForgotPasswordController::class, "passwordChange"])->name("change-password");
