@extends('layouts.master')

@section('title', 'Solutions')

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
                        <h1 style="font-weight: 600">Solutions</h1>
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
                            <h2 class="text-center">IT Security</h2>
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
                    <p>Today’s network architecture is complex and is faced with a threat environment that is always
                        changing and attackers that are always trying to find and exploit vulnerabilities. These
                        vulnerabilities can exist in a broad number of areas, including devices, data, applications, users
                        and locations. For this reason, there are many network security management tools and applications in
                        use today that address individual threats and exploits and also regulatory non-compliance and we
                        represents few of the world leading product to secure customer business operation.</p>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-12 mt-3">
                    <h3>NGFW /UTM</h3>
                    <p>The Next Generation Firewall (NGFW) was developed with the motivation to solve the performance
                        deficiency reported by the UTMs, delivering application control features and deep packet inspection
                        in a highly performing and cohesive architecture. <br>
                        Although the concepts present substantial differences, there is still some difficulty in
                        understanding them.</p>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-12 mt-3">
                    <h3>Email Security</h3>
                    <p>Email security is a term for describing different procedures and techniques for protecting email
                        accounts, content, and communication against unauthorized access, loss or compromise. Email is often
                        used to spread malware, spam and phishing attacks.</p>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-12 mt-3">
                    <h3>DLP Solution</h3>
                    <p>A decade in the DLP landscape. On-premise full Data Loss Prevention for Enterprise & SMBs. DLP for
                        Enterprise & SMBs. Available as hardware & virtual appliance, or as cloud. Award-winning DLP.
                        Cross-platform DLP. Services: GDPR Compliance, HIPAA Compliance.</p>
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
                            <h2 class="text-center">Networking</h2>
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
                    <p>In today’s world, effective data communications is the key to ensure the reliable dissemination of
                        information. Communication solutions depend on highly adaptive and resilient network infrastructure
                        and information security platforms to deliver information accurately and securely. Robust Networking
                        Infrastructure drives operational effectiveness and end user productivity. We provide network
                        infrastructure solutions which deliver reliable connectivity, high performance and easy integration
                        in existing networks. Our network solutions help lower network operating costs. All of our solutions
                        include training, maintenance and support options to ensure trouble free operations of your network
                        infrastructure.</p>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-12 mt-3">
                    <h3>Wi-Fi Solutions</h3>
                    <p>TFor many businesses, the thought of outsourcing its IT security services to a third-party presents
                        major security risks and represents a sense of no control.</p>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-12 mt-3">
                    <h3>Audio/Video Conferencing</h3>
                    <p>This is a very broad category of online tools, incorporating a range of options from free one-to-one
                        audio conferencing all the way to more sophisticated and expensive tools such as Polycom which allow
                        multiple sites with entire classes participating using video and audio.</p>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-12 mt-3">
                    <h3>IP Telephony Solution</h3>
                    <p>IP telephony (Internet Protocol telephony) is a term used to describe technologies that use a variety
                        of protocols to exchange voice, fax, and other forms of information, traditionally carried over the
                        Public Switched Telephone Network (PSTN).</p>
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
                            <h2 class="text-center">Backup & Storage</h2>
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
                    <h4>Backup</h4>
                    <h4 class="mt-3">Storage</h4>
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
                            <h2 class="text-center">Server & Virtualization</h2>
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
                    <p>
                        Server & Virtualization consulting services offered by QAPL enables your IT infrastructure to
                        achieve a high performance, reliability, connectivity and scalability. QAPL enjoys a prominent
                        position in the industry of Server Storage consulting by leveraging its strong business relations
                        with the industry leading vendors. At QAPL, we help our customers design and implement distributed
                        server storage with or without Virtualization and deploy information integration strategy to cut
                        unnecessary resource investment and IT expense as well as enhance the efficiencies of data usage.
                    </p>
                    <h4 class="mt-3">Server</h4>
                    <h4 class="mt-3">Virtualization</h4>
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
                    <h4 class="text-center">Automation software to end repetitive tasks and make digital transformation a
                        reality.</h4>
                    <h3 class="mt-3 mb-3 text-center">What is robotic process automation?</h3>
                    <p>Robotic process automation (RPA) is a software technology that makes it easy to build, deploy, and
                        manage software robots that emulate humans actions interacting with digital systems and software.
                        Just like people, software robots can do things like understand what’s on a screen, complete the
                        right keystrokes, navigate systems, identify and extract data, and perform a wide range of defined
                        actions. But software robots can do it faster and more consistently than people, without the need to
                        get up and stretch or take a coffee break.
                    </p>
                </div>
            </div>
        </div>
    </section>


@endsection

@push('js')
@endpush
