<!DOCTYPE html>
<html>


<!-- Mirrored from themenate.com/applicator/dist/login-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 07 Jul 2018 12:06:16 GMT -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Dang nhap</title>

    <!-- Favicon -->
    <link rel="apple-touch-icon" href="/assets/images/logo/apple-touch-icon.html">
    <link rel="shortcut icon" href="/assets/images/logo/favicon.png">

    <!-- core dependcies css -->
    <link rel="stylesheet" href="/assets/vendor/bootstrap/dist/css/bootstrap.css" />
    <link rel="stylesheet" href="/assets/vendor/PACE/themes/blue/pace-theme-minimal.css" />
    <link rel="stylesheet" href="/assets/vendor/perfect-scrollbar/css/perfect-scrollbar.min.css" />

    <!-- page css -->

    <!-- core css -->
    <link href="/assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="/assets/css/themify-icons.css" rel="stylesheet">
    <link href="/assets/css/materialdesignicons.min.css" rel="stylesheet">
    <link href="/assets/css/animate.min.css" rel="stylesheet">
    <link href="/assets/css/app.css" rel="stylesheet">
</head>

<body>
    <div class="app">
        <div class="layout" style="background-image: url('\assets\image\HCM-image.jpg')">
            <div class="container">
                <div class="row full-height align-items-center">
                    <div class="col-md-5 mx-auto">
                        <div class="card">
                            <div class="card-body">
                                <div class="p-15">
                                    <div class="m-b-30">
                                        <img class="img-responsive inline-block" src="https://staticfile.batdongsan.com.vn/images/Logo/ic_logo_2.svg" alt="">
                                        <h2 class="inline-block pull-right m-v-0 p-t-15">Login</h2>
                                    </div>
                                    <p class="m-t-15 font-size-15">Please enter your email and password to login</p>
                                    <form method="POST" action="{{ route('login') }}">
                                        @csrf
                                        <div class="form-group">
                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                            @if(session('error'))
                                            <div class="col-md-12" style="color: red">
                                                {{ session('error') }}
                                            </div>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-8">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                                    <label class="form-check-label" for="remember">
                                                        {{ __('Remember Me') }}
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group row mb-0">
                                            <div class="col-md-6">
                                                <button type="submit" class="btn btn-primary">
                                                    {{ __('Login') }}
                                                </button>
                                            </div>
                                            <div class="col-md-4">
                                                @if (Route::has('password.request'))
                                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                                    {{ __('Forgot Your Password?') }}
                                                </a>
                                                @endif
                                            </div>
                                        </div>
                            
                                    <hr>
                                        
                                        <div class="form-group row mb-0">
                                            <div class="col-md-4">
                                                <h5>Login VIA </h5>
                                            </div>
                                            <div class="col-md-4">
                                                <a href="{{ route('fbRedirect', ['facebook']) }}" class="btn btn-primary"><i class="fa fa-facebook"></i> Facebook</a>
                                            </div>
                                            <div class="col-md-4">
                                                <a href="{{ URL::to('/google-login/google') }}" class="btn btn-danger"><i class="fa fa-google"></i> Google</a>
                                            </div>
                                        </div>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <script src="/assets/js/vendor.js"></script>

    <script src="/assets/js/app.min.js"></script>

    <!-- page js -->

</body>


<!-- Mirrored from themenate.com/applicator/dist/login-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 07 Jul 2018 12:06:16 GMT -->

</html>