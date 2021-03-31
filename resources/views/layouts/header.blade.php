<h1>
    <a href="{{route('home')}}">COM NOTES</a>
</h1>
<nav class="pc-nav1">
    <ul>
        <li><a href="#">ABOUT</a></li>
        <li><a href="#">SERVICE</a></li>
        <li><a href="#">COMPANY</a></li>
        <li><a href="#">CONTACT</a></li>
        <li><a href="news.php">NEWS</a></li>
        @guest
            @if (Route::has('login'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
            @endif
            
            @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
            @endif
        @else
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }}
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </li>
        @endguest
    </ul>
</nav>
<nav class="pc-nav2">
    <ul>
        <li><a href="#" class="flowbtn10"><i class="fab fa-twitter"></i></a></li>
        <li><a href="#" class="flowbtn10"><i class="fab fa-instagram"></i></a></li>
        <li><a href="#" class="flowbtn10"><i class="fab fa-facebook-f"></i></a></li>
        <li><a href="#" class="flowbtn10"><i class="fas fa-rss"></i></a></li>
        <li><a href="#" class="flowbtn10"><i class="far fa-envelope"></i></a></li>
    </ul>
</nav>
<div class="flexbox">
    <h1></h1>
    <div class="search">
        <div>
        <input type="text" placeholder="Search . . ." required>
        </div>
    </div>
</div>