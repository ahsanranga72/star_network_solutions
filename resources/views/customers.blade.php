@extends('layouts.master')

@section('title', 'Customers')

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
                        <h1 style="font-weight: 600">Customers</h1>
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
                            <h2 class="text-center">Our Valuable Customers</h2>
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
                    <div class="track">
                        <div class="logo">
                            <img src="{{ asset('assets/images/Web/customers/1.png') }}" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('js')
@endpush
