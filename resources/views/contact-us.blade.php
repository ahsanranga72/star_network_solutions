@extends('layouts.master')

@section('title', 'Contact us')

@push('css')
    <style>
        .section {
            padding: 25px 0 25px 0;
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
                        <h1 style="font-weight: 600">Contact us</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="contact-form">
        <div class="container">
            <form class="row" id="contact-form" action="{{ route('contact.store') }}" method="post">
                @csrf
                <div class="col-md-6 col-sm-12">
                    <div class="block">
                        <div class="form-group">
                            <input name="name" type="text" class="form-control" placeholder="Your Name" required>
                        </div>
                        <div class="form-group">
                            <input name="email" type="email" class="form-control" placeholder="Email Address" required>
                        </div>
                        <div class="form-group">
                            <input name="subject" type="text" class="form-control" placeholder="Subject" required>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="block">
                        <div class="form-group-2">
                            <textarea name="message" class="form-control" rows="4" placeholder="Your Message" required></textarea>
                        </div>
                        <button class="btn btn-default" type="submit">Send Message</button>
                    </div>
                </div>
            </form>
            <div class="contact-box row">
                <div class="col-md-6 col-sm-12">
                    <div class="block">
                        <h2>Stop By For A visit</h2>
                        <ul class="address-block">
                            <li class="d-flex">
                                <div>
                                    <i class="ion-ios-location-outline"></i>
                                </div>
                                <span>Lilyrin Tower House No -39/1, <br> 8th Floor
                                    Road No -2, Dhanmondi, Dhaka 1209</span>
                            </li>
                            <li>
                                <i class="ion-ios-email-outline"></i>Email: info@snsbd.com
                            </li>
                            <li>
                                <i class="ion-ios-email-outline"></i>Email: sales@snsbd.com
                            </li>
                            <li>
                                <i class="ion-ios-telephone-outline"></i>Phone: +88 01897 974 300
                            </li>
                            <li>
                                <i class="ion-ios-telephone-outline"></i>Phone: +88 01897 974 301
                            </li>
                            <li>
                                <i class="ion-ios-telephone-outline"></i>Phone: +88 01897 974 302
                            </li>
                        </ul>
                        <ul class="social-icons">
                            <li>
                                <a href="#"><i class="ion-social-googleplus-outline"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="ion-social-linkedin-outline"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="ion-social-pinterest-outline"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="ion-social-dribbble-outline"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="ion-social-twitter-outline"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="ion-social-facebook-outline"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 mt-5 mt-md-0">
                    <div class="block" style="height: 40vh;">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3652.2533758955074!2d90.37497547533557!3d23.73834237867866!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b9607324d8f1%3A0x42432766bb60ed28!2sLilyrin%20Tower!5e0!3m2!1sen!2sbd!4v1703239703462!5m2!1sen!2sbd"
                            width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('js')
@endpush
