@extends('layouts.app')
@section('contents')
    <body>
        <div class="container" id="homePageContainer">
            <h1></h1> 
            <p><strong>Please Log In!!!</strong></p>
            <!-- サインインしたいとき -->
            <form action="{{ route('register') }}" method="post" id = "signUpForm" >
                <p>興味ある？</p>
                <!--fieldsetはフォームや入力コントロールの内容をまとめる。情報の入力欄を作成できる。-->
                <fieldset class="form-group">
                    <input class="form-control" type="mail" name="mail" placeholder="Your Email">
                </fieldset>
                <fieldset class="form-group">
                    <input class="form-control" type="password" name="password" placeholder="Password">
                </fieldset>
                <fieldset class="form-group">
                    <input class="form-control" type="text" name="name" placeholder="IDname">
                </fieldset>
                <fieldset class="form-group">
                    <input class="form-control" type="text" name="goal" placeholder="IDname">
                </fieldset>
                <fieldset class="form-group">
                    <input class="form-control" type="text" name="dream" placeholder="IDname">
                </fieldset>
                <fieldset class="form-group">
                    <input class="form-control" type="text" name="profile" placeholder="IDname">
                </fieldset>
                <fieldset class="form-group">
                    <input class="form-control" type="text" name="" placeholder="IDname">
                </fieldset>
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="stayLoggedIn" value=1> Stay logged in
                    </label>
                </div>
                <fieldset class="form-group">
                    <input type="hidden" name="signUp" value="1">
                    <input class="btn btn-success" type="submit" name="submit" value="Sign Up!">    
                </fieldset>
                <p><a class="toggleForms">Log in</a></p>
            </form>
            <!-- ログインしたいとき -->
            <form action="{{ route('login') }}" method="post" id = "logInForm">
                <p>ログインしてね</p>
                <fieldset class="form-group">
                    <input class="form-control" type="email" name="email" placeholder="Your Email">
                </fieldset>
                <fieldset class="form-group">
                    <input class="form-control"type="password" name="password" placeholder="Password">
                </fieldset>
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="stayLoggedIn" value=1> Stay logged in
                    </label>
                </div>
                    <input type="hidden" name="signUp" value="0">
                <fieldset class="form-group">
                            <input class="btn btn-success" type="submit" name="submit" value="Log In!">
                </fieldset>
            <p><a class="toggleForms">Sign up</a></p>
            </form>                    
        </div>
        <!-- jQuery first, then Bootstrap JS. -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js" integrity="sha384-vZ2WRJMwsjRMW/8U7i6PWi6AlO1L79snBrmgiDpgIWJ82z8eA5lenwvxbMV1PAh7" crossorigin="anonymous"></script>
        <script src="{{ asset('/js/CAM.js') }}"></script> 
    </body>
@endsection