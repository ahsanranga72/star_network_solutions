<footer class="footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 col-lg-3 col-sm-6 text-center">
                <img class="mb-2" src="{{ asset('assets/images/Web/footer.png') }}" alt=""
                    style="border-radius: 25%">
                <h2>Our Address</h2>
                <h3>Star Network Solutions</h3>
                <p>Lilyrin Tower House No -39/1, 8th Floor <br> Road No -2, Dhanmondi, Dhaka 1209</p>
            </div>
            <div class="col-md-3 col-lg-3 col-sm-6 text-center">
                <i class="icon ion-android-mail" style="color: #000; font-size:60px;"></i>
                <h2>Our Mailbox</h2>
                <h6>info@snsbd.com</h6>
                <h6>sales@snsbd.com</h6>
            </div>
            <div class="col-md-3 col-lg-3 col-sm-6 text-center">
                <i class="icon ion-ios-telephone" style="color: #000; font-size:60px;"></i>
                <h2>Our Phone</h2>
                <h6>+8801897974300</h6>
            </div>
            <div class="col-md-3 col-lg-3 col-sm-6 text-center">
                <i class="icon ion-information-circled" style="color: #000; font-size:60px;"></i>
                <h2>Informations</h2>
                <h6><a href="{{ route('about-us') }}">About us</a></h6>
                <h6><a href="{{ route('privacy-policy') }}">Privacy policy</a></h6>
            </div>
            <div class="col-md-12 col-lg-12 col-sm-12">
                <p class="copyright mb-0 text-center">
                    <script>
                        document.write(new Date().getFullYear())
                    </script> &copy; SNS, All rights reserved by <a href="{{ route('home') }}">SNS</a>.
                </p>
            </div>
        </div>
    </div>
</footer>
