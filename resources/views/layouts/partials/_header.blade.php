<header class="navigation">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <nav class="navbar navbar-expand-lg p-0">
                    <a class="navbar-brand" href="{{ route('home') }}">
                        <img src="{{ asset('assets') }}/logo.png" width="300" alt="Logo">
                    </a>

                    <button class="navbar-toggler collapsed" type="button" data-toggle="collapse"
                        data-target="#navbarsExample09" aria-controls="navbarsExample09" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="ion-android-menu"></span>
                    </button>

                    <div class="collapse navbar-collapse ml-auto" id="navbarsExample09">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item {{ request()->route()->getName() == 'home'? 'active': '' }}">
                                <a class="nav-link" href="{{ route('home') }}">Home</a>
                            </li>
                            <li class="nav-item {{ request()->route()->getName() == 'about-us'? 'active': '' }}">
                                <a class="nav-link" href="{{ route('about-us') }}">About us</a>
                            </li>
                            <li class="nav-item {{ request()->route()->getName() == 'products'? 'active': '' }}">
                                <a class="nav-link" href="{{ route('products') }}">Products</a>
                            </li>
                            <li class="nav-item {{ request()->route()->getName() == 'solutions'? 'active': '' }}">
                                <a class="nav-link" href="{{ route('solutions') }}">Solutions</a>
                            </li>
                            <li class="nav-item {{ request()->route()->getName() == 'services'? 'active': '' }}">
                                <a class="nav-link" href="{{ route('services') }}">Services</a>
                            </li>
                            <li class="nav-item {{ request()->route()->getName() == 'customers'? 'active': '' }}">
                                <a class="nav-link" href="{{ route('customers') }}">Customers</a>
                            </li>
                            <li class="nav-item {{ request()->route()->getName() == 'contact-us'? 'active': '' }}">
                                <a class="nav-link" href="{{ route('contact-us') }}">Contact us</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
