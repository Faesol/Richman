@extends('layouts.app')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
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
    <a id="start"></a>
        <!--end bar-->
        <!-- End Header -->
        
		<div class="main-container">
			<section class="switchable">
				<div class="container">
	                <div class="row justify-content-between">
	                    <div class="col-md-6 col-lg-5">
	                        <div class="mt--0">
	                            <h1>Ideal for design conscious startups.</h1>
	                            <p class="lead">
	                                Start building a beautiful site for your startup — right in the comfort of your browser.
	                            </p>
	                            <hr class="short">
	                            <form method="POST" action="{{ route('register') }}">
                                    @csrf
	                                <div class="row">
	                                	<div class="col-12">
                                            <input ttype="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Name">
                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
	                                    </div>
	                                    <div class="col-12">
                                            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email Address">
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
	                                    </div>
	                                    <div class="col-12">
	                                    	Daftar sebagai : &nbsp;
	                                    	<div class="input-radio input-radio--innerlabel">
												<input id="radio-1" type="radio" name="role" value="agent" />
												<label for="radio-1">Pengajar</label>
											</div>
											&nbsp; atau &nbsp;
											<div class="input-radio input-radio--innerlabel">
												<input id="radio-2" type="radio" name="role" value="customer" />
												<label for="radio-2">Murid</label>
											</div>
	                                    </div>
	                                    <div class="col-12">
                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
	                                    </div>
	                                    <div class="col-12">
	                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">
	                                    </div>
	                                    <div class="col-12">
	                                        <button type="submit" class="btn btn--primary type--uppercase">Create Account</button>
	                                    </div>
	                                    <div class="col-12">
	                                        <span class="type--fine-print">By signing up, you agree to the
	                                            <a href="#">Terms of Service</a>
	                                        </span>
	                                    </div>
	                                </div>
	                                <!--end row-->
	                            </form>
	                        </div>
	                    </div>
	                    <div class="col-md-6 col-lg-5">
	                        <img alt="Image" class="border--round box-shadow-wide" src="{{asset ('/asset_home/img/photography-9.jpg')}}">
	                    </div>
	                </div>
	                <!--end of row-->
	            </div>
			</section>
            
        </div>

@endsection

    <script src="{{ asset('../assets_adminlte/js/core.min.js') }}"></script>
    <script src="{{ asset('../assets_adminlte/js/app.min.js')}}"></script>
    <script src="{{ asset('../assets_adminlte/js/script.min.js')}}"></script>
</body>
</html>

