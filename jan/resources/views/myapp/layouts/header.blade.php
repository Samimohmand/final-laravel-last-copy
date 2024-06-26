<nav class="navbar">
        <div class="navbar-left">
            <a href="index.html" class="logo"><img src="./asset/image/best-logo.png" alt=""></a>
           
        </div>
        <div class="navbar-center">
    <ul>
        <li><a href="{{ url('/') }}">Home</a></li>
        <li><a href="{{ url('/products') }}">Shop product</a></li>
        <li><a href="{{ url('/idea') }}">Get idea</a></li>
        <li><a href="{{url('/cart_page')}}">Cart</a></li>

        @if(Auth::check() && Auth::user()->userType == 1)
            <li><a href="{{ url('/designerdashboard') }}">Admin</a></li>
        @endif
        <li><a href="#">About</a></li>
        <li><a href="#">Contact</a></li>
        @if(Auth::check() && Auth::user()->userType == 2)
        <li><a href="{{url('/second_dash') }}">Admin</a></li>
        @endif
    </ul>
</div>
       

        <div class="navbar-right">
            <div class="online"  style="display: flex;">
            @if(Auth::check())
            <p style="margin-top: 0.6em; margin-right:1em;">{{ Auth::user()->name }}</p>
        @else
            <p style="margin-top: 0.6em; margin-right:1em;">Guest</p>
        @endif
                <img src="asset/image/user-1.png" alt="" class="nav-profile-img" onclick="toggleMenu()">  
                <!-- show the profile iamge in the bio -->
            </div>
        </div>


        
     @if(Auth::check())
    <div class="profile-menu-wrap" id="profileMenu">
        <div class="profile-menu">
            <div class="user-info">
                <img src="{{ Auth::user()->image ? asset('storage/' . Auth::user()->image) : asset('asset/image/default-user.png') }}" alt="">
                <div>
                    <h3>{{ Auth::user()->name }}</h3>
                    <a href="social website/profile.html">see your profile</a>
                </div>
            </div>
            <hr>
            <a href="#" class="profile-menu-link">
                <img src="asset/image/feedback.png" alt="">
                <p>Give feedback</p>
                <span>></span>
            </a>
            <a href="#" class="profile-menu-link">
                <img src="asset/image/setting.png" alt="">
                <p>setting & privacy</p>
                <span>></span>
            </a>
            <a href="#" class="profile-menu-link">
                <img src="asset/image/help.png" alt="">
                <p>help & support</p>
                <span>></span>
            </a>
            <a href="#" class="profile-menu-link">
                <img src="asset/image/display.png" alt="">
                <p>display & Accessibility</p>
                <span>></span>
            </a>
            <a href="{{ route('logout') }}" class="profile-menu-link"
               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <img src="asset/image/logout.png" alt="">
                <p>Logout</p>
                <span>></span>
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>
    </div>
@endif


    </nav>
    <!-------------------     end of the profile section  -->