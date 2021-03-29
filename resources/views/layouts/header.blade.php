<h1>
    <a href="/">COM NOTES</a>
</h1>
<nav class="pc-nav1">
    <ul>
        <li><a href="#">ABOUT</a></li>
        <li><a href="#">SERVICE</a></li>
        <li><a href="#">COMPANY</a></li>
        <li><a href="#">CONTACT</a></li>
        <li><a href="news.php">NEWS</a></li>
        <li><a href="{{ route('register')}}">REGISTER</a></li>
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
<div class="sign-in-block1">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<div class="flexbox">
    <h1></h1>
    <div class="search">
        <div>
        <input type="text" placeholder="Search . . ." required>
        </div>
    </div>
</div>