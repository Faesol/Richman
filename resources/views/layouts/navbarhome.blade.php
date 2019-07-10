<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Site Description Here">
    <link href="{{asset ('asset_home/css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{asset ('asset_home/css/stack-interface.css')}}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{asset ('asset_home/css/socicon.css')}}" rel="stylesheet" type="text/css" media="all" />
    <!-- <link href="{{asset ('assets_home/css/lightbox.min.css')}}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{asset ('asset_home/css/flickity.css')}}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{asset ('asset_home/css/jquery.steps.css')}}" rel="stylesheet" type="text/css" media="all" /> -->
    <link href="{{asset ('asset_home/css/iconsmind.css')}}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{asset ('asset_home/css/theme-charcoal.css')}}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{asset ('asset_home/css/custom.css')}}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{asset ('asset_home/style.css')}}" rel="stylesheet" type="text/css" media="all" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:200,300,400,400i,500,600,700%7CMerriweather:300,300i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
    <!-- Start Header -->
        <a id="start"></a>
        <!--end bar-->
        <!-- End Header -->
        <div class="nav-container ">
            <div class="bar bar--sm bar-1 visible-xs">
                <div class="container">
                    <div class="row">
                        <div class="col-9 col-md-10 text-right">
                            <a href="#" class="hamburger-toggle" data-toggle-class="#menu2;hidden-xs hidden-sm">
                                <i class="icon icon--sm stack-interface stack-menu"></i>
                            </a>
                        </div>
                    </div>
                    <!--end of row-->
                </div>
                <!--end of container-->
            </div>
            <nav id="menu2" class="bar bar-1 hidden-xs ">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-9 order-lg-1">
                            <div class="bar__module">
                                <ul class="menu-horizontal text-left">
                                    <li class="mr-5">
                                        <a href="/"><span  class="type--uppercase">HomeHAHA</span></a>  
                                    </li>
                                    <li class="dropdown dropdown--hover">
                                        <span class="dropdown__trigger type--uppercase">Kelas</span>
                                        <div class="dropdown__container">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-md-3 dropdown__content dropdown__content--xs">
                                                        <div class="row justify-content-end">
                                                            <div class="col-lg-12">
                                                                <ul class="menu-vertical">
                                                                    <li>
                                                                        <a href="/programming">
                                                                            <h6 class="type--uppercase">Kelas Pemrograman</h6>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="/multimedia">
                                                                            <h6 class="type--uppercase">Kelas Multimedia</h6>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <!--end of col-->
                                                        </div>
                                                        <!--end of row-->
                                                    </div>
                                                    <!--end dropdown content-->
                                                </div>
                                            </div>
                                        </div>
                                        <!--end dropdown container-->
                                    </li> 
                                    if (Auth::user()->role === "customer") 
                                    <li>
                                        <a href="">HAHA</a>
                                    </li>
                                    @endif
                                </ul>
                            </div>
                            <!--end module-->
                        </div>
                        <div class="col-lg-3 text-right text-left-xs text-left-sm order-lg-3">
                            <div class="bar__module">
                                @guest
                                    <a class="btn btn--sm btn--primary type--uppercase" href="{{ route('login') }}">
                                        <span class="btn__text">
                                            {{ __('Login') }}
                                        </span>
                                    </a>
                                    @if (Route::has('register'))
                                        <a class="btn btn--sm type--uppercase" href="{{ route('register') }}">
                                            <span class="btn__text">
                                                {{ __('Register') }}
                                            </span>
                                        </a>
                                    @endif
                                    @else
                                    <div class="dropdown">
                                        <span class="dropdown__trigger">
                                            @if ( Auth::user()->role ===  "customer")
                                            <p style="font-weight: bold">{{ "Pelajar :" }} {{ Auth::user()->name }}</p> 
                                            @elseif ( Auth::user()->role ===  "agent")
                                            <p style="font-weight: bold">{{ "Pengajar :" }} {{ Auth::user()->name }}</p>
                                            @endif
                                        </span>
                                        <div class="dropdown__container">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-md-3 col-lg-2 dropdown__content">
                                                        <ul class="menu-vertical">
                                                            <li>
                                                                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                                                    {{ __('Logout') }}
                                                                </a>
                                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                                    @csrf
                                                                </form>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div><!--end row-->
                                            </div><!--end container-->
                                        </div><!--end dropdown container-->
                                    </div>
                                @endguest
                            </div>
                            <!--end module-->
                        </div>
                    </div>
                    <!--end of row-->
                </div>
                <!--end of container-->
            </nav>
        

        <main class="py-4">
            @yield('content')
        </main>
        
         <!-- Start Footer -->
        <footer class="footer-3 text-center-xs space--xs ">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <img alt="Image" class="logo" src="{{asset ('asset_home/img/logo-dark.png')}}" />
                        <ul class="list-inline list--hover">

                            <li class="list-inline-item">
                                <a href="#">
                                    <span class="type--fine-print">help@stack.io</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-6 text-right text-center-xs">
                        <ul class="social-list list-inline list--hover">
                            <li class="list-inline-item">
                                <a href="#">
                                    <i class="socicon socicon-google icon icon--xs"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">
                                    <i class="socicon socicon-twitter icon icon--xs"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">
                                    <i class="socicon socicon-facebook icon icon--xs"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">
                                    <i class="socicon socicon-instagram icon icon--xs"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!--end of row-->
                <div class="row">
                    <div class="col-md-6">
                        <p class="type--fine-print">
                            Supercharge your web workflow
                        </p>
                    </div>
                    <div class="col-md-6 text-right text-center-xs">
                        <span class="type--fine-print">&copy;
                            <span class="update-year"></span> Stack Inc.</span>
                        <a class="type--fine-print" href="#">Privacy Policy</a>
                        <a class="type--fine-print" href="#">Legal</a>
                    </div>
                </div>
                <!--end of row-->
            </div>
            <!--end of container-->
        </footer>

        </div>
        <script src="{{asset ('asset_home/js/jquery-3.1.1.min.js')}}"></script>
        <script src="{{asset ('asset_home/js/flickity.min.js')}}"></script>
        <script src="{{asset ('asset_home/js/easypiechart.min.js')}}"></script>
        <script src="{{asset ('asset_home/js/parallax.js')}}"></script>
        <script src="{{asset ('asset_home/js/typed.min.js')}}"></script>
        <script src="{{asset ('asset_home/js/datepicker.js')}}"></script>
        <script src="{{asset ('asset_home/js/isotope.min.js')}}"></script>
        <script src="{{asset ('asset_home/js/ytplayer.min.js')}}"></script>
        <script src="{{asset ('asset_home/js/lightbox.min.js')}}"></script>
        <script src="{{asset ('asset_home/js/granim.min.js')}}"></script>
        <script src="{{asset ('asset_home/js/jquery.steps.min.js')}}"></script>
        <script src="{{asset ('asset_home/js/countdown.min.js')}}"></script>
        <script src="{{asset ('asset_home/js/twitterfetcher.min.js')}}"></script>
        <script src="{{asset ('asset_home/js/spectragram.min.js')}}"></script>
        <script src="{{asset ('asset_home/js/smooth-scroll.min.js')}}"></script>
        <script src="{{asset ('asset_home/js/scripts.js')}}"></script>
</body>
</html>