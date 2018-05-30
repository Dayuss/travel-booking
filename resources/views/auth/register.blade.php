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
                <div class="title"><h3>{{ __('Register') }}</h3></div>
                <div class="progress hidden" id="login-progress">
                            <div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                                Log In...
                            </div>
                        </div>
                    <div class="alert alert-success hidden" id="login-message" role="alert">
                                        <i class="fa fa-check"></i> Login Success. Please wait for loading.
                                    </div>
                <div class="box">
                   <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="control">
                            <label class="label">{{ __('Name') }}</label>

                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                        </div>

                        <div class="control">
                            <label class="label">{{ __('E-Mail Address') }}</label>

                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>

                        <div class="control">
                            <label class="label">{{ __('Password') }}</label>

                            
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            
                        </div>

                        <div class="control">
                            <label class="label">{{ __('Confirm Password') }}</label>

                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                        </div>

                        <div class="control">
                            <label class="label">{{ __('no_hp') }}</label>

                                <input id="no_hp" type="text" class="form-control{{ $errors->has('no_hp') ? ' is-invalid' : '' }}" name="no_hp" value="{{ old('no_hp') }}" required autofocus>

                                @if ($errors->has('no_hp'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('no_hp') }}</strong>
                                    </span>
                                @endif
                        </div>

                        <div class="control">
                            <label class="label">{{ __('asal') }}</label>

                                <input id="name" type="text" class="form-control{{ $errors->has('asal') ? ' is-invalid' : '' }}" name="asal" value="{{ old('asal') }}" required autofocus>

                                @if ($errors->has('asal'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('asal') }}</strong>
                                    </span>
                                @endif
                        </div>
                        <div class="control mb-0">
                                <button type="submit" class="btn btn-orange">
                                    {{ __('Register') }}
                                </button>
                            </div>
                    </form>
                </div>
                <div class="info-box">
                   <span class="text-left"><a href="login">Login!</a></span>
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
