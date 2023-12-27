@extends('layouts.master')

@section('title', 'About Our Company')

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
    </style>
    <link rel="stylesheet" href="{{ asset('assets/custom-css/custom-banner-animation.css') }}">
@endpush

@section('content')
    <section class="page-title custom-animation-bg">
        <div id='stars'></div>
        <div id='stars2'></div>
        <div id='stars3'></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block">
                        <h1 style="font-weight: 600">About Our Company</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="about section">
        <div class="container" style="background: white">
            <div class="row">
                <div class="col-md-7">
                    <div class="block">
                        <div class="section-title">
                            <h2>Your Partner for
                                Network Solution</h2>
                            <p>SNS Founded in 2023, we have earning experience, continued success and a well-satisfied
                                clientele. We are powered by highly skilled professionals, across various domains, whose
                                experience can transform organizations.</p>
                        </div>
                        <p>Star Network Solutions (SNS) is formed by passionate, tech-enthusiast and hardworking key people
                            who dreamt of helping people
                            and other businesses by adding technology-driven value to their services. We combine our
                            knowledge and experience along with our expertise of latest innovative tech-solutions to provide
                            better and sustainable business outcomes for our customers and their stakeholders.</p>
                    </div>
                </div><!-- .col-md-7 close -->
                <div class="col-md-5">
                    <div class="block">
                        <img src="{{ asset('assets') }}/images/Web/about-1.png" alt="Img">
                    </div>
                </div><!-- .col-md-5 close -->
            </div>
        </div>
    </section>
    <!-- Wrapper Start -->
    <section class="about section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12 col-sm-12">
                    <div class="block">
                        <div class="section-title">
                            <h2 class="text-center">Our Team Strength</h2>
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
                <div class="col-md-12 col-lg-12 col-sm-12 mt-5">
                    <ul>
                        <li class="list-group-item">Experienced Management from Associated Technology Domain</li>
                        <li class="list-group-item">Cisco Professional Level Certified Resources</li>
                        <li class="list-group-item">Fortinet NSE Certified Resources</li>
                        <li class="list-group-item">Data Center Certified Resources</li>
                        <li class="list-group-item">Experienced Project Management Professional</li>
                        <li class="list-group-item">Dell Certified Resources for Server & Storage Domain</li>
                        <li class="list-group-item">Experienced Resources on Modular DC</li>
                        <li class="list-group-item">Certified Structured Cabling Professional</li>
                        <li class="list-group-item">10+ Experienced Technical & Technicians Team</li>
                        <li class="list-group-item">Experienced Supply Chain Professionals to Ensure Project Smoothness</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="about section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 col-lg-6 col-sm-12">
                    <div class="block mb-3">
                        <div class="section-title">
                            <h2 class="text-center">Our Mission</h2>
                            <div class="text-center">
                                <div class="d-inline-block mx-2 line"></div>
                                <i class="icon ion-star text-warning"></i>
                                <div class="d-inline-block mx-2 line"></div>
                            </div>
                        </div>
                    </div>
                    <div style="padding: 0 5vw">
                        <p>Our mission is to create sustainable and gainful business models to serve our customers. Our core
                            value is maintaining “5S Operation Model” (Support, Strength, Standardization, Sustainability
                            and Success) where we Support our stakeholders to increase their Strength for building
                            Standardized & Sustainable solutions for all of our stakeholders to ascend them to Success.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-sm-12">
                    <div class="block mb-3">
                        <div class="section-title">
                            <h2 class="text-center">Our Vision</h2>
                            <div class="text-center">
                                <div class="d-inline-block mx-2 line"></div>
                                <i class="icon ion-star text-warning"></i>
                                <div class="d-inline-block mx-2 line"></div>
                            </div>
                        </div>
                    </div>
                    <div style="padding: 0 5vw">
                        <p>Our vision is to become one of the top business leaders in terms of providing sustainable
                            technology-based advanced solutions to our customers.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="about section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12 col-sm-12">
                    <div class="block">
                        <div class="section-title">
                            <h2 class="text-center">What We Do</h2>
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
                    <h3>IT SOLUTIONS</h3>
                    <ul>
                        <li><i class="icon ion-checkmark mr-2"></i>IT Security</li>
                        <li><i class="icon ion-checkmark mr-2"></i>Networking</li>
                        <li><i class="icon ion-checkmark mr-2"></i>Backup & Storage</li>
                        <li><i class="icon ion-checkmark mr-2"></i>Server & Virtualization</li>
                    </ul>
                </div>
                <div class="col-md-6 col-lg-6 col-sm-12 mt-5">
                    <h3>IT CONSULTANCY</h3>
                    <p>We partner with our customers to simplify, develop and transform the services supporting their
                        businesses. We ensure the best levels of expert advisory and technical knowledge through a deep-set
                        commitment, comprehensive industry expertise.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="about section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12 col-sm-12">
                    <div class="block">
                        <div class="section-title">
                            <h2 class="text-center">IT Consultancy</h2>
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
                    <h3>Our Approach</h3>
                    <ul>
                        <li><i class="icon ion-checkmark mr-2"></i>We take the time to understand your needs carefully
                            analyzing where our partners are right now and where they want to be in the future.</li>
                        <li><i class="icon ion-checkmark mr-2"></i>We help our partner to identify improvements that can be
                            made and we quantify the benefits to them of making those improvements.</li>
                        <li><i class="icon ion-checkmark mr-2"></i>We work with our partner to implement the agreed
                            solutions. We are not here to tell them what to do but we will be the catalyst that will help
                            them grow and make the changes they want to make.</li>
                    </ul>
                </div>
                <div class="col-md-6 col-lg-6 col-sm-12 mt-5">
                    <h3>Our Services</h3>
                    <ul>
                        <li><i class="icon ion-checkmark mr-2"></i>Design and planning Services</li>
                        <li><i class="icon ion-checkmark mr-2"></i>Implementation Services</li>
                        <li><i class="icon ion-checkmark mr-2"></i>Configuration Optimization Services</li>
                        <li><i class="icon ion-checkmark mr-2"></i>Upgrade and Migration Services</li>
                        <li><i class="icon ion-checkmark mr-2"></i>Design Review and Verification Services</li>
                        <li><i class="icon ion-checkmark mr-2"></i>Application Customization Services</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <div class="counter">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-12">
                    <h2 class="text-white text-center h2" style="font-weight: 700">We’ve worked with some great companies
                        already. We think you
                        should join them in your quest for top talent.</h2>
                </div>
            </div>
            <div class="row mt-3">
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

    <section class="about section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12 col-sm-12">
                    <div class="block">
                        <div class="section-title">
                            <h2 class="text-center">Why Choose Us</h2>
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
                <div class="col-md-12 col-lg-12 col-sm-12 mt-5">
                    <ul>
                        <li class="list-group-item">Strategic partner and trusted adviser</li>
                        <li class="list-group-item">Value for money</li>
                        <li class="list-group-item">Proactive resolution to issues</li>
                        <li class="list-group-item">Small enough to care, large enough to deliver excellence</li>
                        <li class="list-group-item">Adding value, not complication</li>
                        <li class="list-group-item">An accessible team</li>
                        <li class="list-group-item">Ensuring a smooth transition</li>
                        <li class="list-group-item">Specialists to provide you the extra knowledge</li>
                        <li class="list-group-item">Clear communication</li>
                        <li class="list-group-item">The utmost accountability and commitment</li>
                        <li class="list-group-item">Projects completed on time and within budget</li>
                    </ul>
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
@endpush
