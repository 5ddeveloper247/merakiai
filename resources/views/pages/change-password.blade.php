@extends('includes.master')
@section('content')
    <div class="container login-container">
        <div class="cover">
            <div class="front">
                <img src="{{ asset('assets/images/register.jpg') }}" alt="register" loading="lazy" />
                <div class="text">
                    <span class="text-1">Every new friend is a <br />
                        new adventure</span>
                    <span class="text-2">Let's get connected</span>
                </div>
            </div>
        </div>
        <div class="forms">
            <div class="form-content">
                <div class="signup-form">
                    <div class="title">Change Password</div>
                    <form action="#">
                        <div class="input-boxes">

                            <div class="input-box">
                                <i class="bi bi-lock-fill"></i>
                                <input type="password" placeholder="Enter your password" required />
                            </div>
                            <div class="input-box">
                                <i class="bi bi-lock-fill"></i>
                                <input type="password" placeholder="Confirm your password" required />
                            </div>

                            <div class="button input-box">
                                <input type="submit" value="Submit" />
                            </div>
                            <div class="text sign-up-text">
                                Already have an account? <a href="login">Login</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
