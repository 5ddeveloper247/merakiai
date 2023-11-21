<!DOCTYPE html>
<html lang="en">
@include('includes.header', [
    'customTitle' => 'Register',
    'customCSSPath' => asset('assets/bootstrap/css/login.css'),
])
<link rel="stylesheet" href="{{ asset('assets/bootstrap/css/toastr.min.css') }}">

<body>
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
                    <div class="title">Signup</div>
                    <form action="{{ route('register') }} " method="POST">
                        @csrf
                        <div class="input-boxes">
                            <div class="input-box">
                                <i class="bi bi-person-fill"></i>
                                <input type="text" name="name" class="@error('name') is-invalid @enderror"
                                    placeholder="Enter your name" />
                                @error('name')
                                    <span class="invalid-feedback">
                                        <strong>{{ $message }}</strong></span>
                                @enderror
                            </div>
                            <div class="input-box">
                                <i class="bi bi-envelope-fill"></i>
                                <input type="email" name="email" placeholder="Enter your email"
                                    class="@error('email') is-invalid @enderror" />
                                @error('email')
                                    <span class="invalid-feedback">
                                        <strong>{{ $message }}</strong></span>
                                @enderror
                            </div>
                            <div class="input-box">
                                <i class="bi bi-telephone-fill"></i>
                                <input type="number" name="phone" class="@error('phone') is-invalid @enderror"
                                    placeholder="Enter your phone number" />
                                @error('phone')
                                    <span class="invalid-feedback">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>
                            <div class="input-box">
                                <i class="bi bi-lock-fill"></i>
                                <input type="password" name="password" placeholder="Enter your password"
                                    class="@error('password') is-invalid @enderror" />
                                @error('password')
                                    <span class="invalid-feedback">
                                        <strong>{{ $message }}</strong></span>
                                @enderror
                            </div>
                            <div class="input-box">
                                <i class="bi bi-lock-fill"></i>
                                <input type="password" class="@error('password_confirmation') @enderror"
                                    name="password_confirmation" placeholder="Confirm your password" />
                                @error('password_confirmation')
                                    <span class="invalid-feedback">
                                        <strong>{{ $message }}</strong></span>
                                @enderror
                            </div>
                            <div class="term-and-condition">
                                <input type="checkbox" id="term--checkbox" class="term--checkbox me-2" required />
                                <label for="term--checkbox" class="me-1">
                                    I agree to
                                    <a href="privacy-policy" class="text-primary">privacy policy</a> &amp; <a
                                        href="term-condition" class="text-primary">terms</a>
                                </label>
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
    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM="
        crossorigin="anonymous"></script>
    <script src="{{ asset('assets/bootstrap/js/toastr.min.js') }}"></script>
    <script>
        @if (Session::has('success'))
            // Display the success message using Toastr
            toastr.success('{{ Session::get('success') }}');
        @endif
    </script>
    {{-- <script>
        $(document).ready(function() {
            $(".button").click(function(e) {
                e.preventDefault();

                window.location.href = 'plans';
            });
        });
    </script> --}}
</body>

</html>
