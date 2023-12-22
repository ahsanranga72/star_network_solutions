@extends('layouts.master')

@section('title', 'Home')

@push('css')
    <style>
        .counter {
            padding: 30px 0;
            text-align: center;
            background: #f8a700;
        }

        .counter-count {
            font-size: 70px;
            font-weight: 900;
            position: relative;
            color: #fff;
            text-align: center;
            display: inline-block;
        }

        .section {
            padding: 25px 0 50px 0;
        }

        .line {
            border-top: 2px solid #000;
            width: 50px;
            display: inline-block;
            margin: 0 10px;
            vertical-align: middle;
        }

        .list-group-item {
            border: none;
        }

        .list-group-item::before {
            content: "";
            display: inline-block;
            width: 15px;
            height: 15px;
            border: 4px solid #000;
            border-radius: 50%;
            margin-right: 10px;
            vertical-align: middle;
            margin-top: -3px;
        }

        .section-allience {
            background-color: #E1E2E2;
            width: 100%;
        }

        .wrapper {
            background-color: #E1E2E2;
            height: 200px;
            overflow: hidden;
            position: relative;
            width: 100%;
            display: flex;
            align-items: center;
            padding: 0 20px;
        }

        .wrapper:before,
        .wrapper:after {
            content: "";
            position: absolute;
            height: 200px;
            width: 150px;
            z-index: 2;
        }

        .wrapper:after {
            right: 0;
            top: 0;
            transform: rotateZ(180deg);
        }

        .wrapper:before {
            left: 0;
            top: 0;
        }

        .wrapper .track {
            display: flex;
            width: calc(150px * 16);
            animation: scroll 15s 0.5s linear infinite;
        }

        .wrapper .logo {
            width: 150px;
            margin: 0 15px;
        }

        .wrapper .logo img {
            height: 90px;
        }

        @keyframes scroll {
            from {
                transform: translateX(0);
            }

            to {
                transform: translateX(calc(-150px * 8));
            }
        }

        a.service .service-item:hover,
        a.service .service-item:hover i {
            background: #f8a700 !important;
            color: #fff;
            border: none;
        }
    </style>
    <style>
        .snow-container {
            position: fixed;
            top: 0;
            left: 0;
            overflow: hidden;
            width: 100vw;
            height: 100vh;
            z-index: 99;
            pointer-events: none;
        }

        .snowflake {
            position: absolute;
            border-radius: 50%;
            opacity: .8;
            pointer-events: none;
            background: linear-gradient(to right, white, violet);
            animation: fall linear infinite, rainbow 5s linear infinite;
        }

        @keyframes fall {
            0% {
                opacity: 0;
                transform: translateY(0);
            }

            10% {
                opacity: 1;
            }

            100% {
                opacity: 0.5;
                transform: translateY(100vh);
            }
        }

        @keyframes diagonal-fall {
            0% {
                opacity: 0;
                transform: translate(0, 0);
            }

            10% {
                opacity: 1;
            }

            100% {
                opacity: 0.25;
                transform: translate(10vw, 100vh);
            }
        }

        @keyframes rainbow {
            0% {
                background-position: 0% 50%;
            }

            100% {
                background-position: 100% 50%;
            }
        }
    </style>
@endpush

@section('content')
    <div class="snow-container"></div>

    <section class="slider" style="
	background: url({{ asset('assets') }}/images/web/home-slider-2.png) no-repeat;">
        <div class="row mx-5">
            <div class="col-md-12">
                <div class="block">
                    <h2 class="animated fadeInUp text-left" style="font-size: 3vw">EMPOWERING YOUR <br> <span
                            style="font-weight: 900; font-size: 5vw;line-height: 65px;">DIGITAL TRANSFORMATION</span>
                    </h2>
                </div>
            </div>
        </div>
    </section>

    <div class="counter">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-4">
                    <div class="count-up">
                        <p class="counter-count"><span class="display-3" style="font-weight: 900">70</span> +</p>
                        <h2 class="text-white" style="font-weight: 700">Our Cilents</h2>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="count-up">
                        <p class="counter-count"><span class="display-3" style="font-weight: 900">50</span> +</p>
                        <h2 class="text-white" style="font-weight: 700">Brands</h2>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="count-up">
                        <p class="counter-count"><span class="display-3" style="font-weight: 900">365</span> +</p>
                        <h2 class="text-white" style="font-weight: 700">Our service Day/Year</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Wrapper Start -->
    <section class="about section">
        <div class="container" style="background: white">
            <div class="row">
                <div class="col-md-12 col-lg-12 col-sm-12">
                    <div class="block">
                        <div class="section-title">
                            <h2 class="text-center">Our Products, Solutions & Services</h2>
                            <div class="text-center">
                                <div class="d-inline-block mx-2 line"></div>
                                <i class="icon ion-star text-warning"></i>
                                <div class="d-inline-block mx-2 line"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center" style="padding: 0 5vw;">
                <div class="col-md-6 col-lg-6 col-sm-12 mt-5">
                    <h3>Complete IT Infrastructure Solution</h3>
                    <ul>
                        <li class="list-group-item">Server & Storage Solution.</li>
                        <li class="list-group-item">Data Center & Related Facilities.</li>
                        <li class="list-group-item">Power & Cooling.</li>
                        <li class="list-group-item">LAN-WAN Wired & Wireless Networking.</li>
                        <li class="list-group-item">Operating System.</li>
                        <li class="list-group-item">Virtualization & Database Implementation.</li>
                        <li class="list-group-item">Entire IT Life-Cycle.</li>
                    </ul>
                </div>
                <div class="col-md-6 col-lg-6 col-sm-12 mt-5">
                    <h3>IT Physical & Cyber Security Solution</h3>
                    <ul>
                        <li class="list-group-item">Network Security.</li>
                        <li class="list-group-item">Physical Security.</li>
                        <li class="list-group-item">Cyber Security.</li>
                        <li class="list-group-item">Protect your whole Enterprise, Inside & Out, Efficiently & Proactively.
                        </li>
                        <li class="list-group-item">Enable the Adoption of New Applications & Technology.</li>
                        <li class="list-group-item">Data & Application Security.</li>
                        <li class="list-group-item">Identity & Access Management.</li>
                    </ul>
                </div>
                <div class="col-md-6 col-lg-6 col-sm-12 mt-5">
                    <h3>Managed IT Operation</h3>
                    <ul>
                        <li class="list-group-item">Remote Onsite Operation Support System.</li>
                        <li class="list-group-item">Annual Maintenance Contract with SLA.</li>
                    </ul>
                </div>
                <div class="col-md-6 col-lg-6 col-sm-12 mt-5">
                    <h3>Professional Services</h3>
                    <ul>
                        <li class="list-group-item">Network Assessment & Optimization.</li>
                        <li class="list-group-item">Project Management: Turn Key Projects.</li>
                        <li class="list-group-item">Network Design & Implementation.</li>
                        <li class="list-group-item">Network Architecture Review.</li>
                        <li class="list-group-item">Wireless Security Testing.</li>
                        <li class="list-group-item">Vulnerability Assessment.</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="section-allience">
        <h2 class="text-center pt-4 text-underline font-weight-bold h2" style="text-decoration: underline;">Our Alliance
            Product</h2>
        <div class="wrapper">
            <div class="track">
                <div class="logo">
                    <img src="{{ asset('assets/images/Web/slide-allience/2.png') }}" />
                </div>
                <div class="logo">
                    <img src="{{ asset('assets/images/Web/slide-allience/3.png') }}" />
                </div>
                <div class="logo">
                    <img src="{{ asset('assets/images/Web/slide-allience/4.png') }}" />
                </div>
                <div class="logo">
                    <img src="{{ asset('assets/images/Web/slide-allience/5.png') }}" />
                </div>
                <div class="logo">
                    <img src="{{ asset('assets/images/Web/slide-allience/6.png') }}" />
                </div>
                <div class="logo">
                    <img src="{{ asset('assets/images/Web/slide-allience/7.png') }}" />
                </div>
                <div class="logo">
                    <img src="{{ asset('assets/images/Web/slide-allience/8.png') }}" />
                </div>
                <div class="logo">
                    <img src="{{ asset('assets/images/Web/slide-allience/9.png') }}" />
                </div>
                <div class="logo">
                    <img src="{{ asset('assets/images/Web/slide-allience/10.png') }}" />
                </div>
                <div class="logo">
                    <img src="{{ asset('assets/images/Web/slide-allience/11.png') }}" />
                </div>
                <div class="logo">
                    <img src="{{ asset('assets/images/Web/slide-allience/12.png') }}" />
                </div>
                <div class="logo">
                    <img src="{{ asset('assets/images/Web/slide-allience/13.png') }}" />
                </div>
                <div class="logo">
                    <img src="{{ asset('assets/images/Web/slide-allience/14.png') }}" />
                </div>
                <div class="logo">
                    <img src="{{ asset('assets/images/Web/slide-allience/15.png') }}" />
                </div>
                <div class="logo">
                    <img src="{{ asset('assets/images/Web/slide-allience/16.png') }}" />
                </div>
                <div class="logo">
                    <img src="{{ asset('assets/images/Web/slide-allience/18.png') }}" />
                </div>
            </div>
        </div>
    </section>
    <!-- Service Start -->
    <section class="service">
        <div class="container" style="background: white">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="section-title" style="margin-bottom: 40px;">
                        <h2 class="text-center" style="margin-bottom: 0">Our Services</h2>
                        <div class="text-center">
                            <div class="d-inline-block mx-2 line"></div>
                            <i class="icon ion-star text-warning"></i>
                            <div class="d-inline-block mx-2 line"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <a href="#" class="service">
                        <div class="card card-body service-item">
                            <i class="icon ion-android-lock"></i>
                            <h4 class="h4 font-weight-bold">IT Security</h4>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <a href="#" class="service">
                        <div class="card card-body service-item">
                            <i class="icon ion-android-globe"></i>
                            <h4 class="h4 font-weight-bold">Networking</h4>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <a href="#" class="service">
                        <div class="card card-body service-item">
                            <i class="icon ion-android-folder-open"></i>
                            <h4 class="h4 font-weight-bold">Backup & Storage</h4>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 mt-lg-5 mt-md-5">
                    <a href="#" class="service">
                        <div class="card card-body service-item">
                            <i class="icon ion-cloud"></i>
                            <h4 class="h4 font-weight-bold">Server & Virtualization</h4>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 mt-lg-5 mt-md-5">
                    <a href="#" class="service">
                        <div class="card card-body service-item">
                            <i class="icon ion-chatbubbles"></i>
                            <h4 class="h4 font-weight-bold">Customer Service</h4>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 mt-lg-5 mt-md-5">
                    <a href="#" class="service">
                        <div class="card card-body service-item">
                            <i class="icon ion-videocamera"></i>
                            <h4 class="h4 font-weight-bold">Digital & Creative</h4>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- Call to action Start -->

    <section class="call-to-action section-sm overly"
        style="
	background: url({{ asset('assets') }}/images/Web/home-slider-1.png) no-repeat;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block">
                        <h2 class="mb-3 h2 font-weight-bold">We’ve worked with some great companies already. We think you
                            should join them in your quest for top talent.</h2>
                    </div>
                </div>
            </div>
    </section>
@endsection

@push('js')
    <script>
        $('.counter-count span').each(function() {
            $(this).prop('Counter', 0).animate({
                Counter: $(this).text()
            }, {

                //chnage count up speed here
                duration: 4000,
                easing: 'swing',
                step: function(now) {
                    $(this).text(Math.ceil(now));
                }
            });
        });
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const snowContainer = document.querySelector(".snow-container");

            const particlesPerThousandPixels = 0.1;
            const fallSpeed = .25;
            const pauseWhenNotActive = true;
            const maxSnowflakes = 200;
            const snowflakes = [];

            let snowflakeInterval;
            let isTabActive = true;

            function resetSnowflake(snowflake) {
                const size = Math.random() * 5 + 1;
                const viewportWidth = window.innerWidth - size; // Adjust for snowflake size
                const viewportHeight = window.innerHeight;

                snowflake.style.width = `${size}px`;
                snowflake.style.height = `${size}px`;
                snowflake.style.left = `${Math.random() * viewportWidth}px`; // Constrain within viewport width
                snowflake.style.top = `-${size}px`;

                const animationDuration = (Math.random() * 3 + 2) / fallSpeed;
                snowflake.style.animationDuration = `${animationDuration}s`;
                snowflake.style.animationTimingFunction = "linear";
                snowflake.style.animationName =
                    Math.random() < 0.5 ? "fall" : "diagonal-fall";

                setTimeout(() => {
                    if (parseInt(snowflake.style.top, 10) < viewportHeight) {
                        resetSnowflake(snowflake);
                    } else {
                        snowflake.remove(); // Remove when it goes off the bottom edge
                    }
                }, animationDuration * 1000);
            }

            function createSnowflake() {
                if (snowflakes.length < maxSnowflakes) {
                    const snowflake = document.createElement("div");
                    snowflake.classList.add("snowflake");
                    snowflakes.push(snowflake);
                    snowContainer.appendChild(snowflake);
                    resetSnowflake(snowflake);
                }
            }

            function generateSnowflakes() {
                const numberOfParticles =
                    Math.ceil((window.innerWidth * window.innerHeight) / 1000) *
                    particlesPerThousandPixels;
                const interval = 5000 / numberOfParticles;

                clearInterval(snowflakeInterval);
                snowflakeInterval = setInterval(() => {
                    if (isTabActive && snowflakes.length < maxSnowflakes) {
                        requestAnimationFrame(createSnowflake);
                    }
                }, interval);
            }

            function handleVisibilityChange() {
                if (!pauseWhenNotActive) return;

                isTabActive = !document.hidden;
                if (isTabActive) {
                    generateSnowflakes();
                } else {
                    clearInterval(snowflakeInterval);
                }
            }

            generateSnowflakes();

            window.addEventListener("resize", () => {
                clearInterval(snowflakeInterval);
                setTimeout(generateSnowflakes, 1000);
            });

            document.addEventListener("visibilitychange", handleVisibilityChange);
        });
    </script>
@endpush
