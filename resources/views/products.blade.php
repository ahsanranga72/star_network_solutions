@extends('layouts.master')

@section('title', 'Our Allience Products')

@push('css')
    <style>
        .section {
            padding: 25px 0 25px 0;
        }

        .line {
            border-top: 2px solid #000;
            width: 50px;
            display: inline-block;
            margin: 0 10px;
            vertical-align: middle;
        }

        .track {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }

        .logo {
            margin: 5px;
        }

        .logo img {
            max-width: 100%;
            height: auto;
            display: block;
            margin: 0 auto;
        }

        .sw-ul {
            display: block;
        }

        @media (max-width: 988px) {
            .sw-ul {
                flex-direction: column;
            }

            .sw-ul li {
                margin-bottom: 10px;
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
                        <h1 style="font-weight: 600">Our Alliance Products</h1>
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
                            <h2 class="text-center">Network & Security</h2>
                            <div class="text-center">
                                <div class="d-inline-block mx-2 line"></div>
                                <i class="icon ion-star text-warning"></i>
                                <div class="d-inline-block mx-2 line"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-12 col-sm-12 mt-3">
                    <div class="track d-flex justify-content-center w-100">
                        <div class="logo">
                            <img src="{{ asset('assets/images/Web/slide-allience/19.png') }}" />
                        </div>
                        <div class="logo">
                            <img src="{{ asset('assets/images/Web/slide-allience/1.png') }}" />
                        </div>
                        <div class="logo">
                            <img src="{{ asset('assets/images/Web/slide-allience/3.png') }}" />
                        </div>
                        <div class="logo">
                            <img src="{{ asset('assets/images/Web/slide-allience/4.png') }}" />
                        </div>
                        <div class="logo">
                            <img src="{{ asset('assets/images/Web/slide-allience/17.png') }}" />
                        </div>
                        <div class="logo">
                            <img src="{{ asset('assets/images/Web/slide-allience/5.png') }}" />
                        </div>
                        <div class="logo">
                            <img src="{{ asset('assets/images/Web/slide-allience/20.png') }}" />
                        </div>
                        <div class="logo">
                            <img src="{{ asset('assets/images/Web/slide-allience/6.png') }}" />
                        </div>
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
                            <h2 class="text-center">Access control & Attendance Systems</h2>
                            <div class="text-center">
                                <div class="d-inline-block mx-2 line"></div>
                                <i class="icon ion-star text-warning"></i>
                                <div class="d-inline-block mx-2 line"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-12 col-sm-12 mt-3">
                    <div class="track d-flex justify-content-center w-100">
                        <div class="logo">
                            <img src="{{ asset('assets/images/Web/slide-allience/11.png') }}" />
                        </div>
                        <div class="logo">
                            <img src="{{ asset('assets/images/Web/slide-allience/9.png') }}" />
                        </div>
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
                            <h2 class="text-center">Security Surveillance</h2>
                            <div class="text-center">
                                <div class="d-inline-block mx-2 line"></div>
                                <i class="icon ion-star text-warning"></i>
                                <div class="d-inline-block mx-2 line"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-12 col-sm-12 mt-3">
                    <div class="track d-flex justify-content-center w-100">
                        <div class="logo">
                            <img src="{{ asset('assets/images/Web/slide-allience/10.png') }}" />
                        </div>
                        <div class="logo">
                            <img src="{{ asset('assets/images/Web/slide-allience/21.png') }}" />
                        </div>
                        <div class="logo">
                            <img src="{{ asset('assets/images/Web/slide-allience/18.png') }}" />
                        </div>
                        <div class="logo">
                            <img src="{{ asset('assets/images/Web/slide-allience/22.png') }}" />
                        </div>
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
                            <h2 class="text-center">Structured Cabling Product</h2>
                            <div class="text-center">
                                <div class="d-inline-block mx-2 line"></div>
                                <i class="icon ion-star text-warning"></i>
                                <div class="d-inline-block mx-2 line"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-12 col-sm-12 mt-3">
                    <div class="track d-flex justify-content-center w-100">
                        <div class="logo">
                            <img src="{{ asset('assets/images/Web/slide-allience/13.png') }}" />
                        </div>
                        <div class="logo">
                            <img src="{{ asset('assets/images/Web/slide-allience/23.png') }}" />
                        </div>
                        <div class="logo">
                            <img src="{{ asset('assets/images/Web/slide-allience/14.png') }}" />
                        </div>
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
                            <h2 class="text-center">Software & Security</h2>
                            <div class="text-center">
                                <div class="d-inline-block mx-2 line"></div>
                                <i class="icon ion-star text-warning"></i>
                                <div class="d-inline-block mx-2 line"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-12 col-sm-12 mt-3">
                    <div class="track d-flex justify-content-center w-100">
                        <div class="logo">
                            <img src="{{ asset('assets/images/Web/slide-allience/24.png') }}" />
                        </div>
                        <div class="logo">
                            <img src="{{ asset('assets/images/Web/slide-allience/8.png') }}" />
                        </div>
                        <div class="logo">
                            <img src="{{ asset('assets/images/Web/slide-allience/7.png') }}" />
                        </div>
                        <div class="logo">
                            <img src="{{ asset('assets/images/Web/slide-allience/25.png') }}" />
                        </div>
                        <div class="logo">
                            <img src="{{ asset('assets/images/Web/slide-allience/26.png') }}" />
                        </div>
                        <div class="logo">
                            <img src="{{ asset('assets/images/Web/slide-allience/27.png') }}" />
                        </div>
                        <div class="logo">
                            <img src="{{ asset('assets/images/Web/slide-allience/28.png') }}" />
                        </div>
                        <div class="logo">
                            <img src="{{ asset('assets/images/Web/slide-allience/29.png') }}" />
                        </div>
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
                            <h2 class="text-center">Robotic Process Automation (RPA)</h2>
                            <div class="text-center">
                                <div class="d-inline-block mx-2 line"></div>
                                <i class="icon ion-star text-warning"></i>
                                <div class="d-inline-block mx-2 line"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-12 col-sm-12 mt-3">
                    <div class="track d-flex justify-content-center w-100">
                        <div class="logo">
                            <img src="{{ asset('assets/images/Web/slide-allience/16.png') }}" />
                        </div>
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
                            <h2 class="text-center">Data Center Product</h2>
                            <div class="text-center">
                                <div class="d-inline-block mx-2 line"></div>
                                <i class="icon ion-star text-warning"></i>
                                <div class="d-inline-block mx-2 line"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-12 col-sm-12 mt-3">
                    <div class="track d-flex justify-content-center w-100">
                        <div class="logo">
                            <img src="{{ asset('assets/images/Web/slide-allience/30.png') }}" />
                        </div>
                        <div class="logo">
                            <img src="{{ asset('assets/images/Web/slide-allience/31.png') }}" />
                        </div>
                        <div class="logo">
                            <img src="{{ asset('assets/images/Web/slide-allience/32.png') }}" />
                        </div>
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
                            <h2 class="text-center">IT Power Products</h2>
                            <div class="text-center">
                                <div class="d-inline-block mx-2 line"></div>
                                <i class="icon ion-star text-warning"></i>
                                <div class="d-inline-block mx-2 line"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-12 col-sm-12 mt-3">
                    <div class="track d-flex justify-content-center w-100">
                        <div class="logo">
                            <img src="{{ asset('assets/images/Web/slide-allience/33.png') }}" />
                        </div>
                        <div class="logo">
                            <img src="{{ asset('assets/images/Web/slide-allience/34.png') }}" />
                        </div>
                        <div class="logo">
                            <img src="{{ asset('assets/images/Web/slide-allience/35.png') }}" />
                        </div>
                        <div class="logo">
                            <img src="{{ asset('assets/images/Web/slide-allience/36.png') }}" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="about section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 col-lg-12 col-sm-12">
                    <div class="block">
                        <div class="section-title">
                            <h2 class="text-center">Software Development</h2>
                            <div class="text-center">
                                <div class="d-inline-block mx-2 line"></div>
                                <i class="icon ion-star text-warning"></i>
                                <div class="d-inline-block mx-2 line"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-lg-12 col-sm-12 mt-3">
                    <ul class="d-flex sw-ul">
                        <li><i class="icon ion-checkmark-circled mx-1"></i>Website Development <span>|</span></li>
                        <li><i class="icon ion-checkmark-circled mx-1"></i>E-commerce Website <span>|</span></li>
                        <li><i class="icon ion-checkmark-circled mx-1"></i>POS & Stock Management Software <span>|</span>
                        </li>
                        <li><i class="icon ion-checkmark-circled mx-1"></i>Inventory Management System <span>|</span></li>
                        <li><i class="icon ion-checkmark-circled mx-1"></i>Hotel Booking System <span>|</span></li>
                        <li><i class="icon ion-checkmark-circled mx-1"></i>Courier management system <span>|</span></li>
                        <li><i class="icon ion-checkmark-circled mx-1"></i>Payroll system <span>|</span></li>
                        <li><i class="icon ion-checkmark-circled mx-1"></i>WordPress hacked & malware infected website
                            Recover</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

@endsection

@push('js')
@endpush
