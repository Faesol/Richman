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
                                    <li class="mr-4">
                                        <a href="/"><span  class="type--uppercase">Home</span></a>  
                                    </li>
                                    <li class="dropdown dropdown--hover mr-4">
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
                                    @guest
                                    @else
                                    @if (Auth::user()->role === "customer") 
                                    <li class="mr-4">
                                        <a href="/kelas-saya"><span  class="type--uppercase">Kelas Saya</span></a>  
                                    </li>
                                    <li class="mr-4">
                                        <a href="/transaksi"><span  class="type--uppercase">Transaksi</span></a>  
                                    </li>
                                    @elseif ( Auth::user()->role  === "agent")
                                    <li class="mr-4">
                                        <a href="/kelola-kelas"><span  class="type--uppercase">Kelola Kelas</span></a>  
                                    </li>
                                    <li class="mr-4">
                                        <a href="/tutor"><span  class="type--uppercase">Dashboard</span></a>  
                                    </li>
                                    @endif
                                    @endguest
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