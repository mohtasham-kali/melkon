<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid d-flex align-items-center justify-content-between">

        <a href="{{url('/')}}" class="logo d-flex align-items-center  me-auto me-lg-0">
            <img src="home/assets/img/logo.png" alt="">
            <h1>Melkon Art</h1>
        </a>

        <nav id="navbar" class="navbar">
            <ul>
                <li><a href="{{ url('/') }}" class="active">Home</a></li>
                <li><a href="{{ url('/custom') }}">Custom</a></li>
                <li><a href="{{url('/merch')}}">Merch</a></li>
                <li><a href="{{ url('/store') }}">Store</a></li>
                </li>
                <li><a href="{{ url('/contact') }}">Contact</a></li>
                @if(Auth::check())
                <div class="user-menu" style="padding-left: 161px">
                    <div class="dropdown">
                        <a class="dropdown-toggle" href="#" role="button" id="userMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Welcome {{ Auth::user()->name }}
                        </a>
                        <div class="dropdown-menu" style="opacity:70%;" aria-labelledby="userMenuLink">
                            <a class="dropdown-item" style="color:black; margin-right:50px;" href="{{ route('profile.show') }}">My Profile</a>
                            <div class="dropdown-divider"></div>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" style="padding-left: 40px" class="dropdown-item">{{ __('Logout') }}</button>
                            </form>
                        </div>
                    </div>
                </div>
            @else
                <div class="user-menu" style="display: contents; padding-left:120px">
                    <a href="{{ route('login') }}">{{ __('Log in') }}</a>
                    <a href="{{ route('register') }}">{{ __('Register') }}</a>
                </div>
            @endif



            </ul>
        </nav>
            <!-- .navbar -->
            <div class="header-social-links">
                <a class="bi-cart" href="{{url('shopping_cart')}}">$0.0</a>
            </div>
        </div>
        <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
        <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
</div>
</header>
