@if(Auth::check())
<div class="user-menu" style="padding-left: 330px">
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
