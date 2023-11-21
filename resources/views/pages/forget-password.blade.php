<!DOCTYPE html>
<html lang="en">
@include('includes.header', [
    'customTitle' => 'Register',
    'customCSSPath' => asset('assets/bootstrap/css/login.css'),
])

<body>
    <div class="container">
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
                    <div class="title">Forget Password</div>
                    <form action="{{ route('forget-password') }}" method="POST">
                        @csrf
                        <div class="input-boxes">
                            <div class="input-box">
                                <i class="bi bi-envelope-fill"></i>
                                <input type="email" name="email" placeholder="Enter your email" />

                                @if (session('error'))
                                    <span class="invalid-feedback d-block">
                                        <strong> {{ session('error') }}</strong>
                                    </span>
                                @endif
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
</body>

</html>
