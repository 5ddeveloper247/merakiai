<!DOCTYPE html>
<html lang="en">
@include('includes.header', [
    'customTitle' => 'Login',
    'customCSSPath' => asset('assets/bootstrap/css/login.css'),
])

<body>
    <div class="container">
        <div class="cover">
            <div class="front">
                <img src="{{ asset('assets/images/login.jpg') }}" alt="login" loading="lazy" />
                <div class="text">
                    <span class="text-1">Welcome to the Future<br />AI-Powered Bot <br />Login</span>
                    <span class="text-2">Let's get connected</span>
                </div>
            </div>

        </div>
        <div class="forms">
            <div class="form-content">
                <div class="login-form">
                    <div class="title">Login</div>
                    <form action="{{ route('login') }}" method="POST">
                        @csrf
                        <div class="input-boxes">
                            <div class="input-box">
                                <i class="bi bi-envelope-fill"></i>
                                <input type="text" name="email" class="@error('email') is-invalid @enderror"
                                    placeholder="Enter your email" />
                                @error('email')
                                    <span class="invalid-feedback">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="input-box">
                                <i class="bi bi-lock-fill"></i>
                                <input type="password" name="password" class="@error('password') is-invalid @enderror"
                                    placeholder="Enter your password" />
                                @error('password')
                                    <span class="invalid-feedback">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="text"><a href="forget-password">Forgot password?</a></div>
                            <div class="button input-box">
                                <input type="submit" value="Submit" />
                            </div>
                            <div class="text sign-up-text">
                                Don't have an account? <a href="{{ route('register') }}">Signup</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
