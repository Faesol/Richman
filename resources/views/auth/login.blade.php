@extends('layouts.app')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Responsive admin dashboard and web application ui kit. ">
    <meta name="keywords" content="login, signin">

    <title>Login Page 1 &mdash; TheAdmin</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,300i" rel="stylesheet">

    <!-- Styles -->
    <link href="{{asset ('../assets_adminlte/css/core.min.css')}}" rel="stylesheet">
    <link href="{{asset ('../assets_adminlte/css/app.min.css')}}" rel="stylesheet">
    <link href="{{asset ('../assets_adminlte/css/style.min.css')}}" rel="stylesheet">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="{{asset ('../assets_adminlte/img/apple-touch-icon.png')}}">
    <link rel="icon" href="{{asset ('../assets_adminlte/img/favicon.png')}}">
</head>
<body>
@section('content')  
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-lg-5 mx-auto text-center">
                    <h2>Login to continue</h2>
                        <p class="lead">
                            Welcome back, sign in with your existing Stack account credentials
                        </p>
                        <form class="form-type-material" method="POST" action="{{ route('login') }}">
                            @csrf
                            @if ($message = Session::get('success'))
                                <div class="alert alert-success">
                                    <p>
                                        {{ $message }}
                                    </p>
                                </div>
                            @endif
                            @if ($message = Session::get('warning'))
                                <div class="alert alert-warning">
                                    <p>
                                        {{ $message }}
                                    </p>
                                </div>
                            @endif
                            <div class="row">
                                <div class="col-md-12">
                                    <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="email">
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-md-12">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">
                                </div>
                                <div class="col-md-12">
                                    <button class="btn btn--primary type--uppercase" type="submit">Login</button>
                                </div>
                            </div>
                            <!--end of row-->
                        </form>
                        <span class="type--fine-print block">Dont have an account yet?
                            <a href="page-accounts-create-1.html">Create account</a>
                        </span>
                        <span class="type--fine-print block">Forgot your username or password?
                            <a href="page-accounts-recover.html">Recover account</a>
                        </span>
                    </div>
                </div>
            </div>
        </section>
    @endsection

    <script src="{{ asset('../assets_adminlte/js/core.min.js') }}"></script>
    <script src="{{ asset('../assets_adminlte/js/app.min.js')}}"></script>
    <script src="{{ asset('../assets_adminlte/js/script.min.js')}}"></script>
</body>
</html>
