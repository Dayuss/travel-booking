<!DOCTYPE html>
<html>

<head>
    <title>Flat Admin - Bootstrap Themes</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" type="text/css" href="{{ asset("css/bootstrap.min.css") }}">
    <link rel="stylesheet" type="text/css" href="{{ asset("css/animate.css") }}">
    <link rel="stylesheet" type="text/css" href="{{ asset("css/font-awesome.min.css") }}">
    <link rel="stylesheet" type="text/css" href="{{ asset("css/login.css") }}">
    <link rel="stylesheet" type="text/css" href="{{ asset("css/theme.css") }}">

    <script type="text/javascript" src="{{ asset("js/jquery-2.1.3.min.js") }}"></script>
    <script type="text/javascript" src="{{ asset("js/bootstrap.min.js") }}"></script>
</head>

<body>

    <div class="container">
        <div class="login-box">
                <div class="title"><h3>{{ __('Login') }}</h3></div>
                <div class="progress hidden" id="login-progress">
                            <div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                                Log In...
                            </div>
                        </div>
                    <div class="alert alert-success hidden" id="login-message" role="alert">
                                        <i class="fa fa-check"></i> Login Success. Please wait for loading.
                                    </div>
                <div class="box">
                    <form method="POST" action="{{ route('login') }}">
                    @csrf                        
                        
                        <div class="control">
                            <div class="label">Email</div>
                                <input id="email" type="email" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                        </div>
                        <div class="control">
                            <div class="label">Password</div>
                                <input id="password" type="password" class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                        </div>

                        <div class="login-button">
                            <input type="submit" class="btn btn-orange" value="{{ __('Login') }}">
                        </div>

                    </form>
                </div>
                <div class="info-box">
                   <span class="text-left"><a href="register">Create new account</a></span>
                   <div class="clear-both"></div>
                </div>
        </div>
    </div>
    <script type="text/javascript">
        $(function() {
            $("#login-form").submit(function() {
                $("#login-progress").removeClass("hidden");

                setTimeout(function(){
                    $("#login-progress").addClass("hidden");
                    $("#login-message").removeClass("hidden");
                    setTimeout(function(){
                        window.location.assign("index.html")
                    },1000);
                },1000);
                return false;
            });
        });
    </script>
</body>

</html>
