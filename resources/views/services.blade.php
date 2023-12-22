@extends('layouts.master')

@section('title', 'Services')

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
                        <h1 style="font-weight: 600">Services</h1>
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
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-12 col-sm-12 mt-3">
                    <p>We partner with our customers to simplify, develop and transform the services supporting their
                        businesses. We ensure the best levels of expert advisory and technical knowledge through a deep-set
                        commitment, comprehensive industry expertise.</p>
                    <h3 class="text-center mt-5 mb-5" style="font-weight: 600;">OUR IT CONSULTING PROCESS</h3>
                </div>
                <div class="col-md-3 col-lg-3 col-sm-12 mt-3">
                    <h3>ANALYSIS</h3>
                    <p>Our IT consulting advisors study your existing IT solutions and the ways in which your employees use
                        them, identifying problems in workflows and automation.</p>
                </div>
                <div class="col-md-3 col-lg-3 col-sm-12 mt-3">
                    <h3>STRATEGY</h3>
                    <p>The advisors design a roadmap and strategy that will help your business leverage the latest
                        technologies and de-clutter your IT infrastructure. Then, they set IT products and employee KPIs.
                    </p>
                </div>
                <div class="col-md-3 col-lg-3 col-sm-12 mt-3">
                    <h3>PERFORMANCE</h3>
                    <p>Impactful IT consulting services rely on collaboration between the client and the IT consulting
                        company. Our experts will closely analyse your workflows, tracking the performance to discover the
                        pain points. Our IT engineers will then eliminate the impeding elements.</p>
                </div>
                <div class="col-md-3 col-lg-3 col-sm-12 mt-3">
                    <h3>IMPROVEMENTS</h3>
                    <p>After completing the initially set goals, our IT consulting advisors recommend steps for future
                        improvements, as well as assist with implementing them.</p>
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
                            <h2 class="text-center">IT Management Service</h2>
                            <div class="text-center">
                                <div class="d-inline-block mx-2 line"></div>
                                <i class="icon ion-star text-warning"></i>
                                <div class="d-inline-block mx-2 line"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center mt-2">
                <div class="col-md-4 col-lg-4 col-sm-12 mt-3">
                    <h3>SNS Managed IT Provider</h3>
                    <p>SNS is Managed IT provider with over 2 years of experience in implementing infrastructure projects
                        and outsourcing IT functions. Hundreds of customers from our country.</p>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-12 mt-3">
                    <h3>Comprehensive Services</h3>
                    <p>Choosing QAPL as a Managed IT provider, you benefit from a comprehensive service, all components of
                        which are designed to meet your business objectives. Outsourcing IT service design and management,
                        you minimize investment into your own IT infrastructure and its support.</p>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-12 mt-3">
                    <h3>IP Telephony Solution</h3>
                    <p>With Managed IT, you can take advantage of flexible, customizable IT solutions tailored to your
                        business and its ongoing changes.</p>
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
                            <h2 class="text-center">Migration Service</h2>
                            <div class="text-center">
                                <div class="d-inline-block mx-2 line"></div>
                                <i class="icon ion-star text-warning"></i>
                                <div class="d-inline-block mx-2 line"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center mt-2">
                <div class="col-md-6 col-lg-6 col-sm-12 mt-3">
                    <h3>Data center migration</h3>
                    <p>Data Center Migration is the process of deploying and migrating/relocating an existing data center
                        from one operating environment to another without causing data loss, t his relocation process
                        requires no physical movement and is logical.</p>
                </div>
                <div class="col-md-6 col-lg-6 col-sm-12 mt-3">
                    <h3>Customization of IT Solutions</h3>
                    <p>An IT migration is the shifting of data or software from one system to another. Replacing one data
                        storage system with another. Moving from on-premise infrastructure to cloud infrastructure.
                        Replacing a monolithic application with containerized services.</p>
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
                            <h2 class="text-center">Installation & Configuration Service</h2>
                            <div class="text-center">
                                <div class="d-inline-block mx-2 line"></div>
                                <i class="icon ion-star text-warning"></i>
                                <div class="d-inline-block mx-2 line"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center mt-2">
                <div class="col-md-12 col-lg-12 col-sm-12 mt-3">
                    <p>
                        Installation & Configuration Service
                        As your business grows and you take on more employees, the time will come where you need a server to
                        keep your office network and business running efficiently. But with a seemingly endless array of
                        choices and important decisions to be made, you might be wondering where to start. Luckily, setting
                        up a server for a small or mid-sized business (SMB) doesn’t have to be difficult.
                    </p>
                    <p>
                        In this guide, we’ll take you through everything you need to know including what a server is,
                        deciding between hardware or the cloud, choosing the right operating system, and the best way to set
                        it all up.
                    </p>
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
                            <h2 class="text-center">IT Audit</h2>
                            <div class="text-center">
                                <div class="d-inline-block mx-2 line"></div>
                                <i class="icon ion-star text-warning"></i>
                                <div class="d-inline-block mx-2 line"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center mt-2">
                <div class="col-md-12 col-lg-12 col-sm-12 mt-3">
                    <p>
                        An IT audit is the examination and evaluation of an organization’s information technology
                        infrastructure, policies and operations. Information technology audits determine whether IT controls
                        protect corporate assets, ensure data integrity and are aligned with the business’s overall goals.
                    </p>
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
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-12 col-sm-12 mt-3">
                    <ul>
                        <li class="list-group-item">E-commerce Website</li>
                        <li class="list-group-item">POS & Stock Management Software</li>
                        <li class="list-group-item">Inventory Management System</li>
                        <li class="list-group-item">Hotel Booking System</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('js')
@endpush
