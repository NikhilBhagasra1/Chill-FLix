<!DOCTYPE html>
<html lang="en">

<head>
    <title>Sign in</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="/css/style.css">
</head>

<body style="background-image: url('/images/hero.jpg');  background-size: cover;">
    <div>
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="/">Chill-Flix</a>
                </div>
            </div>
        </nav>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

    <form id="login-box" method="POST" action="{{ route('login') }}">                        @csrf

        <div class="left-box">
            <br>
            <br>
            <h1> Sign In</h1>

            <input type="text" name="username" placeholder="Username" />

            <input type="password" name="password" placeholder="Password" />
            <input type="submit" name="signup-button" value="Sign in" />
            <p>Not a user yet?</p>
            <a href="/signup" class="submit">Sign Up</a>
        </div>
        <div class="right-box">
            <span class="signinwith">Sign in with<br/>Social Network     </span>

            <button class="social facebook">Log in with Facebook</button>
            <button class="social twitter">Log in with Twitter</button>
            <button class="social google">Log in with Google+</button>


        </div>
        <div class="or">OR</div>
    </form>

</body>

</html>
