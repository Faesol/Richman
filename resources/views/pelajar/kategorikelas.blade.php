@extends('layouts.navbar')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Site Description Here">
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/stack-interface.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/socicon.css" rel="stylesheet" type="text/css" media="all" />
    <!-- <link href="css/lightbox.min.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/flickity.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/jquery.steps.css" rel="stylesheet" type="text/css" media="all" /> -->
    <link href="css/iconsmind.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/theme-red.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/custom.css" rel="stylesheet" type="text/css" media="all" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:200,300,400,400i,500,600,700%7CMerriweather:300,300i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
    
    @section('content')
    <div class="main-container">
        <section class="text-center bg--secondary space--xs">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-lg-6">
                        <h2>Kelas Pemrograman</h2>
                        <p class="lead">
                            Stacks visual style is simple yet distinct, making it an ideal starting point.
                        </p>
                    </div>
                </div>
                <!--end of row-->
            </div>
            <!--end of container-->
        </section>
        <section class="space--xs">
            <div class="container">
                <h3 class="type--bold">Kelas Terbaru</h3>
                <div class="row">
                    @foreach ($data as $item)
                    <div class="col-md-3">
                        <div class="feature feature-1">
                            <a href="single-kelas.html">
                                <img alt="Image" src="{{ URL('/images/'.$data->file_foto) }}">
                            </a>
                            <div class="feature__body boxed boxed--border p-3">
                                <a href="single-kelas.html">
                                    <h5>Java Tutorial for Complete Beginners</h5>
                                </a>
                                <p>
                                    {{$data->diskripsi}}
                                </p>
                                <a href="/kelas/{{$data->IDurl_slug}}" class="btn btn--sm btn--primary mt-2 p-1 pl-3 pr-3">
                                    <span class="btn__text">
                                        Beli Sekarang
                                    </span>
                                </a>
                            </div>
                        </div>
                        <!--end feature-->
                    </div>
                    @endforeach
                </div>
                <!--end of row-->
            </div>
            <!--end of container-->
        </section>
    </div>
@endsection

        <script src="js/jquery-3.1.1.min.js"></script>
        <script src="js/flickity.min.js"></script>
        <script src="js/easypiechart.min.js"></script>
        <script src="js/parallax.js"></script>
        <script src="js/typed.min.js"></script>
        <script src="js/datepicker.js"></script>
        <script src="js/isotope.min.js"></script>
        <script src="js/ytplayer.min.js"></script>
        <script src="js/lightbox.min.js"></script>
        <script src="js/granim.min.js"></script>
        <script src="js/jquery.steps.min.js"></script>
        <script src="js/countdown.min.js"></script>
        <script src="js/twitterfetcher.min.js"></script>
        <script src="js/spectragram.min.js"></script>
        <script src="js/smooth-scroll.min.js"></script>
        <script src="js/scripts.js"></script>
</body>
</html>