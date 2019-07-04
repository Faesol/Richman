@extends('layouts.navbarhome')
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
    <link href="{{asset ('asset_home/css/theme-red.css')}}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{asset ('asset_home/css/custom.css')}}" rel="stylesheet" type="text/css" media="all" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:200,300,400,400i,500,600,700%7CMerriweather:300,300i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
    @section('content')
    <section class="main-container">
            <div class="container">
                <section class="text-center height-30 mb-5">
                    <div class="container pos-vertical-center">
                        <div class="row">
                            <div class="col-md-8">
                                <h2>{{$data->nama_kelas}}</h2>
                                <p class="lead m-0 p-0" style="font-size: 30px">
                                    <i class="material-icons color--primary m-0">star</i>
                                    <i class="material-icons color--primary m-0">star</i>
                                    <i class="material-icons color--primary m-0">star</i>
                                    <i class="material-icons color--primary m-0">star</i>
                                    <i class="material-icons color--primary m-0">star</i>
                                </p>
                                <p class="lead">
                                    <strong>8328</strong> Murid Sudah Bergabung 
                                </p>
                            </div>
                        </div>
                        <!--end of row-->
                    </div>
                    <!--end of container-->
                </section>
                <section class="switchable feature-large">
                <div class="container">
                    <div class="row justify-content-around">
                        <div class="col-md-4">
                            <img alt="Image" class="border--round box-shadow-wide" src="{{ URL('/images/'.$data->file_foto) }}">
                        </div>
                        <div class="col-md-8 col-lg-8">
                            <div class="mt--1">
                                <h4>Deskripsi Kelas (WYSIWYG)</h4>
                                <p>
                                    {{$data->diskripsi}}
                                </p>

                            </div>
                            <div class="boxed boxed--border bg--secondary boxed--sm box-shadow text-center mt--1">
                                @foreach ($hasil_diskon as $item)
                                    <h1>Harga asli {{$data->harga_kelas}} total diskon {{$item->total}}</h1>
                                @endforeach
                                <h4>Daftar Kelas Sekarang!</h4>
                                <a class="btn btn--primary" href="/pelajar/daftar-kelas">
                                    <span class="btn__text">
                                       DAFTAR SEKARANG!
                                    </span>
                                </a>
                                <h6 class="m-0">Atau</h6>
                                <h4 class="mt-0 pt-0 pb-0 mb-3">Pertanyaan Mengenai Kelas</h4>
                                <a class="btn btn--secondary" href="#">
                                    <span class="btn__text">
                                        FAQ
                                    </span>
                                </a>
                            </div>
                            <h4>Materi Kelas</h4>
                            <ul class="accordion accordion-1" style="min-height: 100.2px;">
                                <li class="">
                                    <div class="accordion__title">
                                        <span class="h5 m-0">1. Intro</span>
                                    </div>
                                    <div class="accordion__content">
                                        <ul style="width: 100%;">
                                            <li class="m-1 p-2 h5">1.1 Introduction</li>
                                            <li class="m-1 p-2 h5">1.2 Siap2 File</li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="">
                                    <div class="accordion__title">
                                        <span class="h5 m-0">2. HTML</span>
                                    </div>
                                    <div class="accordion__content">
                                        <ul style="width: 100%;">
                                            <li class="m-1 p-2 h5">2.1 Introduction</li>
                                            <li class="m-1 p-2 h5">2.2 Siap2 File</li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="">
                                    <div class="accordion__title">
                                        <span class="h5 m-0">3. Penutup</span>
                                    </div>
                                    <div class="accordion__content">
                                    </div>
                                </li>
                            </ul>
                
                            <h4>Pengajar</h4>
                            <div class="testimonial row">
                                <div class="col-lg-3 col-md-4 col-6 text-center">
                                    <img class="testimonial__image" alt="Image" src="{{asset ('assets_pengajar1/img/avatar/1.jpg')}}">
                                </div>
                                <div class="col-lg-9 col-md-8 col-12">
                                    {{--  @foreach($data as $a)
                                    <h4 class="mb-1">{{$a->name}}</h4>
                                    @endforeach  --}}
                                    <span class="h5 mb-1">Interface Designer — Yoke</span>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, hic fugit officia maiores dignissimos iure sint? Dolore hic itaque ratione ipsam. Reprehenderit dolor quisquam nesciunt dolorem dolore, aliquid sequi cum!
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end of row-->
                </div>
                <!--end of container-->
            </section>
            </div>
        </section>
 @endsection
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