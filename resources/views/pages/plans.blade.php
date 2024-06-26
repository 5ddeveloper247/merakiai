<!DOCTYPE html>
<html lang="en">
@include('includes.header', [
    'customTitle' => 'Plans',
    'customCSSPath' => asset('assets/bootstrap/css/login.css'),
])

<body>
    <div class="container">
        <input class="d-none" type="checkbox" id="flip" />
        <div class="cover">
            <div class="front">
                <img src="{{ asset('assets/images/login.jpg') }}" alt="login" loading="lazy" />
                <div class="text">
                    <span class="text-1">Welcome to the Future<br />AI-Powered Bot <br />Plans</span>
                    <span class="text-2">Let's get connected</span>
                </div>
            </div>
            <div class="back">
                <img src="{{ asset('assets/images/ai_back.jpg') }}" alt="login" loading="lazy" />
                <div class="text">
                    <span class="text-1">Welcome to the Future<br />AI-Powered Bot <br />Plans</span>
                    <span class="text-2">Let's get connected</span>
                </div>
            </div>
        </div>
        <div class="forms">
            <div class="form-content">
                <div class="login-form">
                    <div class="title plan_ai">
                        Select Plan
                        <label onclick="changeDirection()" for="flip" href="#" class=""
                            data-bs-toggle="popover">
                            <i class="bi bi-info-circle-fill fs-6"></i>
                        </label>
                    </div>

                    <form action="#" id="plan_ai">
                        <div class="grid">
                            <label class="card">
                                <input name="plan" value="20" class="radio" type="radio" checked />

                                <span class="plan-details">
                                    <span class="plan-type">Bot 1</span>
                                    <span class="plan-cost">$20<span class="slash">/</span><abbr
                                            class="plan-cycle">mo</abbr></span>
                                </span>
                            </label>
                            <label class="card">
                                <input name="plan" value="50" class="radio" type="radio" />

                                <span class="plan-details" aria-hidden="true">
                                    <span class="plan-type">Bot 2</span>
                                    <span class="plan-cost">$50<span class="slash">/</span><span
                                            class="plan-cycle">mo</span></span>
                                </span>
                            </label>
                            <label class="card">
                                <input name="plan" value="200" class="radio" type="radio" />

                                <span class="plan-details" aria-hidden="true">
                                    <span class="plan-type">Bot 1 + Bot 2</span>
                                    <span class="plan-cost">$200<span class="slash">/</span><span
                                            class="plan-cycle">mo</span></span>
                                </span>
                            </label>
                            <div class="d-flex justify-content-center flex-column flex-md-row gap-3 text-center mt-4">
                                <button class="btn btn-success submit_plan"
                                    onclick="location.href='{{ route('payment') }}'"><i class="bi bi-check2-circle"></i>
                                    Select
                                    Plan</button>
                                <button class="btn text-light try_bot" onclick="location.href='{{ route('payment') }}'"
                                    style="background: var(--color-green);"><i class="bi bi-symmetry-horizontal"></i>
                                    Try Bot <strong>(7 Day
                                        Trial)</strong></button>
                            </div>
                        </div>

                    </form>
                </div>
                <div class="plan_list d-none d-md-block">
                    <label onclick="changeDirection()" for="flip" href="#" class=""
                        style="position: absolute; top: 5px; right: 12px">
                        <i class="bi bi bi-sign-turn-left-fill fs-4"></i>
                    </label>
                    <!--Pricing Plan-->
                    <section class="mb-5">
                        <div
                            class="shadow-none container container-sm container-md container-lg container-xl container-xxl">
                            <div role="list" class="price_card">
                                <div role="listitem" class="" data-aos="flip-left"
                                    data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                                    <div style="background: var(--background)" class="pricing_card_wrap">
                                        <div class="price-card">
                                            <div class="price_card_header">
                                                <h4 style="color: var(--primary-color)" class="price_header_h4">
                                                    Bot 1
                                                </h4>
                                                <p>
                                                    Lorem ipsum, dolor sit amet consectetur adipisicing
                                                    elit. Quod eaque sunt porro.
                                                </p>
                                            </div>
                                            <div class="price_card_body">
                                                <div class="pricing_small_p">
                                                    Get MediNurseAI tailored for your company.
                                                </div>
                                            </div>

                                            <div class="price_card_features">
                                                <h6 class="price_card_feature_heading">
                                                    Everything in Teams, plus:
                                                </h6>
                                                <div class="feature_list">
                                                    <img alt="Check"
                                                        src="{{ asset('assets/images/tick_Check.svg') }}"
                                                        class="feature_list_icon" />
                                                    <div class="price_card_feature">
                                                        No limits on all features
                                                    </div>
                                                </div>
                                                <div class="feature_list">
                                                    <img alt="Check"
                                                        src="{{ asset('assets/images/tick_Check.svg') }}"
                                                        class="feature_list_icon" />
                                                    <div class="price_card_feature">
                                                        No limits on all features
                                                    </div>
                                                </div>
                                                <div class="feature_list">
                                                    <img alt="Check"
                                                        src="{{ asset('assets/images/tick_Check.svg') }}"
                                                        class="feature_list_icon" />
                                                    <div class="price_card_feature">
                                                        No limits on all features
                                                    </div>
                                                </div>
                                                <div class="feature_list">
                                                    <img alt="Check"
                                                        src="{{ asset('assets/images/tick_Check.svg') }}"
                                                        class="feature_list_icon" />
                                                    <div class="price_card_feature">
                                                        No limits on all features
                                                    </div>
                                                </div>
                                                <div class="feature_list">
                                                    <img alt="Check"
                                                        src="{{ asset('assets/images/tick_Check.svg') }}"
                                                        class="feature_list_icon" />
                                                    <div class="price_card_feature">
                                                        No limits on all features
                                                    </div>
                                                </div>
                                                <div class="feature_list">
                                                    <img alt="Check"
                                                        src="{{ asset('assets/images/tick_Check.svg') }}"
                                                        class="feature_list_icon" />
                                                    <div class="price_card_feature">
                                                        Team onboarding & ongoing tech support
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div role="listitem" class="" data-aos="flip-left"
                                    data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                                    <div style="background: var(--background)" class="pricing_card_wrap">
                                        <div class="price-card">
                                            <div class="price_card_header">
                                                <h4 style="color: var(--primary-color)" class="price_header_h4">
                                                    Bot 2
                                                </h4>
                                                <p>
                                                    Lorem ipsum, dolor sit amet consectetur adipisicing
                                                    elit. Quod eaque sunt porro.
                                                </p>
                                            </div>
                                            <div class="price_card_body">

                                                <div class="pricing_small_p">
                                                    Get MediNurseAI tailored for your company.
                                                </div>
                                            </div>

                                            <div class="price_card_features">
                                                <h6 class="price_card_feature_heading">
                                                    Everything in Teams, plus:
                                                </h6>
                                                <div class="feature_list">
                                                    <img alt="Check"
                                                        src="{{ asset('assets/images/tick_Check.svg') }}"
                                                        class="feature_list_icon" />
                                                    <div class="price_card_feature">
                                                        No limits on all features
                                                    </div>
                                                </div>
                                                <div class="feature_list">
                                                    <img alt="Check"
                                                        src="{{ asset('assets/images/tick_Check.svg') }}"
                                                        class="feature_list_icon" />
                                                    <div class="price_card_feature">
                                                        No limits on all features
                                                    </div>
                                                </div>
                                                <div class="feature_list">
                                                    <img alt="Check"
                                                        src="{{ asset('assets/images/tick_Check.svg') }}"
                                                        class="feature_list_icon" />
                                                    <div class="price_card_feature">
                                                        No limits on all features
                                                    </div>
                                                </div>
                                                <div class="feature_list">
                                                    <img alt="Check"
                                                        src="{{ asset('assets/images/tick_Check.svg') }}"
                                                        class="feature_list_icon" />
                                                    <div class="price_card_feature">
                                                        No limits on all features
                                                    </div>
                                                </div>
                                                <div class="feature_list">
                                                    <img alt="Check"
                                                        src="{{ asset('assets/images/tick_Check.svg') }}"
                                                        class="feature_list_icon" />
                                                    <div class="price_card_feature">
                                                        No limits on all features
                                                    </div>
                                                </div>
                                                <div class="feature_list">
                                                    <img alt="Check"
                                                        src="{{ asset('assets/images/tick_Check.svg') }}"
                                                        class="feature_list_icon" />
                                                    <div class="price_card_feature">
                                                        Team onboarding & ongoing tech support
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div role="listitem" class="" data-aos="flip-left"
                                    data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                                    <div style="background: var(--background)" class="pricing_card_wrap">
                                        <div class="price-card">
                                            <div class="price_card_header">
                                                <h4 style="color: var(--primary-color)" class="price_header_h4">
                                                    Bot 1 + Bot 2
                                                </h4>
                                                <p>
                                                    Lorem ipsum, dolor sit amet consectetur adipisicing
                                                    elit. Quod eaque sunt porro.
                                                </p>
                                            </div>
                                            <div class="price_card_body">

                                                <div class="pricing_small_p">
                                                    Get MediNurseAI tailored for your company.
                                                </div>
                                            </div>

                                            <div class="price_card_features">
                                                <h6 class="price_card_feature_heading">
                                                    Everything in Teams, plus:
                                                </h6>
                                                <div class="feature_list">
                                                    <img alt="Check"
                                                        src="{{ asset('assets/images/tick_Check.svg') }}"
                                                        class="feature_list_icon" />
                                                    <div class="price_card_feature">
                                                        No limits on all features
                                                    </div>
                                                </div>
                                                <div class="feature_list">
                                                    <img alt="Check"
                                                        src="{{ asset('assets/images/tick_Check.svg') }}"
                                                        class="feature_list_icon" />
                                                    <div class="price_card_feature">
                                                        No limits on all features
                                                    </div>
                                                </div>
                                                <div class="feature_list">
                                                    <img alt="Check"
                                                        src="{{ asset('assets/images/tick_Check.svg') }}"
                                                        class="feature_list_icon" />
                                                    <div class="price_card_feature">
                                                        No limits on all features
                                                    </div>
                                                </div>
                                                <div class="feature_list">
                                                    <img alt="Check"
                                                        src="{{ asset('assets/images/tick_Check.svg') }}"
                                                        class="feature_list_icon" />
                                                    <div class="price_card_feature">
                                                        No limits on all features
                                                    </div>
                                                </div>
                                                <div class="feature_list">
                                                    <img alt="Check"
                                                        src="{{ asset('assets/images/tick_Check.svg') }}"
                                                        class="feature_list_icon" />
                                                    <div class="price_card_feature">
                                                        No limits on all features
                                                    </div>
                                                </div>
                                                <div class="feature_list">
                                                    <img alt="Check"
                                                        src="{{ asset('assets/images/tick_Check.svg') }}"
                                                        class="feature_list_icon" />
                                                    <div class="price_card_feature">
                                                        Team onboarding & ongoing tech support
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!--Pricing Plan End-->
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM="
        crossorigin="anonymous"></script>
    <script src="assets/bootstrap/js/popper.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>

    <script>
        $(document).ready(function() {
            $('[data-bs-toggle="popover"]').popover({
                trigger: "hover",
                placement: "top",
                html: true,
                content: function() {
                    return `<div class="custom-popover-content">View Packages?</div>`;
                },
            });
        });

        function changeDirection() {
            $(".front").css("transform", "perspective(600px) rotateY(0deg)");
            $(".back").css("transform", "perspective(600px) rotateY(180deg)");

            $('.plan_list').toggleClass('d-none');
        }

        $(".submit_plan").click(function(e) {
            e.preventDefault();
            var datastring = $("#plan_ai").serialize();

            console.log(datastring);
            return false;
            // $.ajax({
            //     type: "POST",
            //     url: "your url.php",
            //     data: datastring,
            //     success: function(data) {
            //           alert('Data send');
            //     }
            // });
        });
        $(document).ready(function() {
            $(".try_bot").click(function(e) {
                e.preventDefault();

                window.location.href = 'payment';
            });
        });
    </script>
</body>

</html>
