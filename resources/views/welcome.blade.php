

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    {{--  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Site Description Here">
    <link href="{{asset ('asset_home/css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{asset ('asset_home/css/stack-interface.css')}}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{asset ('asset_home/css/socicon.css')}}" rel="stylesheet" type="text/css" media="all" />
    <!-- <link href="{{asset ('assets_home/css/lightbox.min.css')}}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{asset ('asset_home/css/flickity.css')}}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{asset ('asset_home/css/jquery.steps.css')}}" rel="stylesheet" type="text/css" media="all" /> -->
    <link href="{{asset ('asset_home/css/iconsmind.css')}}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{asset ('asset_home/css/theme-red.css')}}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{asset ('asset_home/css/custom.css')}}" rel="stylesheet" type="text/css" media="all" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:200,300,400,400i,500,600,700%7CMerriweather:300,300i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">  --}}
</head>
<body>
    @extends('layouts.app')
    @section('content')
    <div class="main-container">
            <section class="cover cover-features imagebg space--md pb-5" data-overlay="4">
                <div class="background-image-holder">
                    <img alt="background" src="{{asset('asset_home/img/cover/j-kelly-brito-247570-unsplash.jpg')}}">
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-9 col-lg-7">
                            <div class="typed-headline">
                                <span class="h1 inline-block">projectX Marketing</span>
                                <span class="h1 inline-block typed-text typed-text--cursor color--primary" data-typed-strings="words,or,sentences,to type"></span>
                            </div>
        
                            <p class="lead">
                                projectX merupakan sebuah platform kelas online yang membantu kamu memperoleh Ilmu dengan mudah dan fleksibel.
                            </p>
                            <a class="btn btn--primary type--uppercase" href="#">
                                <span class="btn__text">
                                    Gabung ke Kelas Sekarang
                                </span>
                            </a>
                        </div>
                    </div>
                    <!--end of row-->
                    <div class="row">
                        <div class="col-md-4">
                            <div class="feature feature-2 boxed boxed--border bg--white">
                                <i class="icon icon-Clock-Back color--primary"></i>
                                <div class="feature__body">
                                    <h5 class="m-0 color--primary">Fitur 1</h5>
                                    <p>
                                        Save time with a multitude of styled components designed to showcase your content
                                    </p>
                                </div>
                            </div>
                            <!--end feature-->
                        </div>
                        <div class="col-md-4">
                            <div class="feature feature-2 boxed boxed--border bg--white">
                                <i class="icon icon-Duplicate-Window color--primary"></i>
                                <div class="feature__body">
                                    <h5 class="m-0 color--primary">Fitur 2</h5>
                                    <p>
                                        Construct mockups or production-ready pages in-browser with Variant Page Builder
                                    </p>
                                </div>
                            </div>
                            <!--end feature-->
                        </div>
                        <div class="col-md-4">
                            <div class="feature feature-2 boxed boxed--border bg--white">
                                <i class="icon icon-Life-Jacket color--primary"></i>
                                <div class="feature__body">
                                    <h5 class="m-0 color--primary">Fitur 3</h5>
                                    <p>
                                        Take comfort in 6 months included support with a dedicated support forum
                                    </p>
                                </div>
                            </div>
                            <!--end feature-->
                        </div>
                    </div>
                    <!--end of row-->
                </div>
                <!--end of container-->
            </section>
            <section class=" ">
                <div class="container">
                    <h3 class="type--bold">Kelas Terbarui</h3>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="feature feature-1">
                                <a href="">
                                    <img alt="Image" src="{{asset('asset_home/img/blog-1.jpg')}}">
                                </a>
                                <div class="feature__body boxed boxed--border p-3">
                                    <a href="">
                                        <h5>Java Tutorial for Complete Beginners</h5>
                                    </a>
                                    <p>
                                        John Purcell
                                    </p>
                                    <a href="#" class="btn btn--sm btn--primary mt-2 p-1 pl-3 pr-3">
                                        <span class="btn__text">
                                            Beli Sekarang
                                        </span>
                                    </a>
                                </div>
                            </div>
                            <!--end feature-->
                        </div>
                        <div class="col-md-3">
                            <div class="feature feature-1">
                                <a href="">
                                    <img alt="Image" src="{{asset('asset_home/img/inner-5.jpg')}}">
                                </a>
                                <div class="feature__body boxed boxed--border p-3">
                                    <a href="">
                                        <h5>Modern Aesthetic</h5>
                                    </a>
                                    <p>
                                        A highly adaptable look thats simple
                                    </p>
                                    <a href="#" class="btn btn--sm btn--primary mt-2 p-1 pl-3 pr-3">
                                        <span class="btn__text">
                                            Beli Sekarang
                                        </span>
                                    </a>
                                </div>
                            </div>
                            <!--end feature-->
                        </div>
                        <div class="col-md-3">
                            <div class="feature feature-1">
                                <a href="">
                                    <span class="label bg--primary">Best Seller</span>
                                </a>
                                <img alt="Image" src="{{asset('asset_home/img/inner-4.jpg')}}">
                                <div class="feature__body boxed boxed--border p-3">
                                    <a href="">
                                        <h5>Beautiful markup</h5>
                                    </a>
                                    <p>
                                        Following BEM conventions for readability
                                    </p>
                                    <a href="#" class="btn btn--sm btn--primary mt-2 p-1 pl-3 pr-3">
                                        <span class="btn__text">
                                            Beli Sekarang
                                        </span>
                                    </a>
                                </div>
                            </div>
                            <!--end feature-->
                        </div>
                        <div class="col-md-3">
                            <div class="feature feature-1">
                                <a href="">
                                    <span class="label bg--primary">Best Seller</span>
                                </a>
                                <img alt="Image" src="{{asset('asset_home/img/inner-4.jpg')}}">
                                <div class="feature__body boxed boxed--border p-3">
                                    <a href="">
                                        <h5>Membuat Aplikasi Android dengan React Native dan Expo</h5>
                                    </a>
                                    <p>
                                        Following BEM conventions for readability
                                    </p>
                                    <a href="#" class="btn btn--sm btn--primary mt-2 p-1 pl-3 pr-3">
                                        <span class="btn__text">
                                            Beli Sekarang
                                        </span>
                                    </a>
                                </div>
                            </div>
                            <!--end feature-->
                        </div>
                        <div class="col-md-3">
                            <div class="feature feature-1">
                                <a href="">
                                    <img alt="Image" src="{{asset('asset_home/img/blog-1.jpg')}}">
                                </a>
                                <div class="feature__body boxed boxed--border p-3">
                                    <a href="">
                                        <h5>Java Tutorial for Complete Beginners</h5>
                                    </a>
                                    <p>
                                        John Purcell
                                    </p>
                                    <a href="#" class="btn btn--sm btn--primary mt-2 p-1 pl-3 pr-3">
                                        <span class="btn__text">
                                            Beli Sekarang
                                        </span>
                                    </a>
                                </div>
                            </div>
                            <!--end feature-->
                        </div>
                        <div class="col-md-3">
                            <div class="feature feature-1">
                                <a href="">
                                    <img alt="Image" src="{{asset('asset_home/img/inner-5.jpg')}}">
                                </a>
                                <div class="feature__body boxed boxed--border p-3">
                                    <a href="">
                                        <h5>Modern Aesthetic</h5>
                                    </a>
                                    <p>
                                        A highly adaptable look thats simple
                                    </p>
                                    <a href="#" class="btn btn--sm btn--primary mt-2 p-1 pl-3 pr-3">
                                        <span class="btn__text">
                                            Beli Sekarang
                                        </span>
                                    </a>
                                </div>
                            </div>
                            <!--end feature-->
                        </div>
                        <div class="col-md-3">
                            <div class="feature feature-1">
                                <a href="">
                                    <span class="label bg--primary">Best Seller</span>
                                </a>
                                <img alt="Image" src="{{asset('asset_home/img/inner-4.jpg')}}">
                                <div class="feature__body boxed boxed--border p-3">
                                    <a href="">
                                        <h5>Beautiful markup</h5>
                                    </a>
                                    <p>
                                        Following BEM conventions for readability
                                    </p>
                                    <a href="#" class="btn btn--sm btn--primary mt-2 p-1 pl-3 pr-3">
                                        <span class="btn__text">
                                            Beli Sekarang
                                        </span>
                                    </a>
                                </div>
                            </div>
                            <!--end feature-->
                        </div>
                    </div>
                    <!--end of row-->
                </div>
                <!--end of container-->
            </section>
            <section class="bg--secondary">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="text-block">
                                <h4>Frequently Asked Questions</h4>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="text-block">
                                <h5>How do refunds work?</h5>
                                <p>
                                    Open a
                                    <a href="#">refund request</a> with us and we can work with you to resolve it ASAP.
                                </p>
                            </div>
                            <div class="text-block">
                                <h5>Can I pay using AMEX?</h5>
                                <p>
                                    Yes, we accept all major credit cards, including AMEX, so rack up those points!
                                </p>
                            </div>
                            <div class="text-block">
                                <h5>Is there a bulk-buy discount?</h5>
                                <p>
                                    We have corporate and enterprise arrangements that our pricing team can assist with on a case-by-case basis.
                                    <a href="#">Contact Us</a> for info.
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="text-block">
                                <h5>Is there a minimum contract term?</h5>
                                <p>
                                    No! The beauty of our service is that you can cancel anytime you need to &mdash; no questions asked.
                                </p>
                            </div>
                            <div class="text-block">
                                <h5>Do I need an SSL certificate?</h5>
                                <p>
                                    This depends on whether your plan to process the payment on your site or not. We recommend using a third-party provider to unburden yourself.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!--end of row-->
                </div>
                <!--end of container-->
            </section>
            
        </div>
        @endsection

        {{--  <script src="{{asset ('asset_home/js/jquery-3.1.1.min.js')}}"></script>
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
        <script src="{{asset ('asset_home/js/scripts.js')}}"></script>  --}}
</body>
</html>