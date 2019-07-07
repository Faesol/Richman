@extends('layouts.navbar')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
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
                    <h3 class="type--bold">Kelas Terbaru</h3>
                    <div class="row">
                        @foreach($data as $data)
                        <div class="col-md-3">
                            <div class="feature feature-1">
                                <a href="/pelajar/detail-kelas/{{$data->IDurl_slug}}">
                                    <img alt="Image" src="{{ URL('/images/'.$data->file_foto) }}">
                                </a>
                                <div class="feature__body boxed boxed--border p-3">
                                    <a href="/pelajar/detail-kelas/{{$data->IDurl_slug}}">
                                        <h5>{{$data->nama_kelas}}</h5>
                                    </a>
                                    <p>
                                        {{$data->diskripsi}}
                                    </p>
                                    <a href="/pelajar/detail-kelas/{{$data->IDurl_slug}}" class="btn btn--sm btn--primary mt-2 p-1 pl-3 pr-3">
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
        {{--  @include('layouts.footer')  --}}
@endsection
</body>
</html>


