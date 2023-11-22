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
                    <div class="title">Enter OTP {{ $userId = session('userId') }}</div>
                    <form action="{{ route('verify-otp') }}" method="POST">
                        @csrf
                        <input type="hidden" id="user_id" name="user_id">
                        <div class="otp-container">
                            <!-- Six input fields for OTP digits -->
                            <input type="text" class="otp-input" name="one" pattern="\d" maxlength="1"
                                required>
                            <input type="text" class="otp-input" name="two" pattern="\d" maxlength="1"
                                required disabled>
                            <input type="text" class="otp-input" name="three" pattern="\d" maxlength="1"
                                required disabled>
                            <input type="text" class="otp-input" name="four" pattern="\d" maxlength="1"
                                required disabled>
                            <input type="text" class="otp-input" name="five" pattern="\d" maxlength="1"
                                required disabled>
                            <input type="text" class="otp-input" name="six" pattern="\d" maxlength="1"
                                required disabled>
                        </div>
                        @if (session('error'))
                            <span class="invalid-feedback mt-3 d-block">
                                <strong>{{ session('error') }}</strong>
                            </span>
                        @endif

                        <div class="button input-box">
                            <input type="submit" value="Submit" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var otpInputs = document.querySelectorAll(".otp-input");
            var emailOtpInputs = document.querySelectorAll(".email-otp-input");

            function setupOtpInputListeners(inputs) {
                inputs.forEach(function(input, index) {
                    input.addEventListener("paste", function(ev) {
                        var clip = ev.clipboardData.getData('text').trim();
                        if (!/^\d{6}$/.test(clip)) {
                            ev.preventDefault();
                            return;
                        }

                        var characters = clip.split("");
                        inputs.forEach(function(otpInput, i) {
                            otpInput.value = characters[i] || "";
                        });

                        enableNextBox(inputs[0], 0);
                        inputs[5].removeAttribute("disabled");
                        inputs[5].focus();
                        updateOTPValue(inputs);
                    });

                    input.addEventListener("input", function() {
                        var currentIndex = Array.from(inputs).indexOf(this);
                        var inputValue = this.value.trim();

                        if (!/^\d$/.test(inputValue)) {
                            this.value = "";
                            return;
                        }

                        if (inputValue && currentIndex < 5) {
                            inputs[currentIndex + 1].removeAttribute("disabled");
                            inputs[currentIndex + 1].focus();
                        }

                        if (currentIndex === 4 && inputValue) {
                            inputs[5].removeAttribute("disabled");
                            inputs[5].focus();
                        }

                        updateOTPValue(inputs);
                    });

                    input.addEventListener("keydown", function(ev) {
                        var currentIndex = Array.from(inputs).indexOf(this);

                        if (!this.value && ev.key === "Backspace" && currentIndex > 0) {
                            inputs[currentIndex - 1].focus();
                        }
                    });
                });
            }

            function enableNextBox(input, currentIndex) {
                var inputValue = input.value;

                if (inputValue === "") {
                    return;
                }

                var nextIndex = currentIndex + 1;
                var nextBox = otpInputs[nextIndex] || emailOtpInputs[nextIndex];

                if (nextBox) {
                    nextBox.removeAttribute("disabled");
                }
            }

            function updateOTPValue(inputs) {
                var otpValue = "";

                inputs.forEach(function(input) {
                    otpValue += input.value;
                });

                if (inputs === otpInputs) {
                    // document.getElementById("verificationCode").value = otpValue;
                } else if (inputs === emailOtpInputs) {
                    document.getElementById("emailverificationCode").value = otpValue;
                }
            }

            setupOtpInputListeners(otpInputs);
            setupOtpInputListeners(emailOtpInputs);

            otpInputs[0].focus(); // Set focus on the first OTP input field
            emailOtpInputs[0].focus(); // Set focus on the first email OTP input field

            otpInputs[5].addEventListener("input", function() {
                updateOTPValue(otpInputs);
            });

            emailOtpInputs[5].addEventListener("input", function() {
                updateOTPValue(emailOtpInputs);
            });
        });
        var userId = "{{ Session('userId') }}";

        var storage_user_id = localStorage.getItem("userId");

        if (storage_user_id == '' || storage_user_id == null) {
            localStorage.setItem("userId", userId);
        }
        // var user_id = localStorage.getItem("userId")
        document.getElementById('user_id').value = storage_user_id;
        console.log(user_id);
    </script>
</body>

</html>
