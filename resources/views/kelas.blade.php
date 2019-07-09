@extends('layouts.base-app')
@section('content')
<div class="main-container">
    <section class="imagebg image--dark cover cover-blocks bg--secondary"  data-overlay="7">
        <div class="background-image-holder hidden-xs" style="background: url(&quot;{{ URL('/asset_home/img/cover/j-kelly-brito-247570-unsplash.jpg') }}&quot;); opacity: 1;">
            <img alt="background" src="{{ URL('/asset_home/img/cover/j-kelly-brito-247570-unsplash.jpg') }}">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-5 ">
                    <div>
                        <h1 style="text-transform: capitalize;">Kelas {kategori}</h1>
                        <p class="lead">
                            Temukan Kelas - tolong kasi kata-kata disini</a> 
                        </p>
                    </div>
                </div>
            </div>
            <!--end of row-->
        </div>
        <!--end of container-->
    </section>
    <section class="pt-4 mt-2">
        <div class="container">
            <h3 class="type--bold">Kelas Terbaruaaa</h3>
            <div class="row">
                @foreach($data as $data)
                <div class="col-md-3">
                    <div class="feature feature-1">
                        <a href="">
                            <img alt="Image" src="{{ URL('/images/'.$data->file_foto) }}" style="height:190px;">
                        </a>
                        <div class="feature__body boxed boxed--border p-3">
                            <a href="">
                                <h5>{{$data->nama_kelas}}</h5>
                            </a>
                            <p>
                                {{$data->diskripsi}}
                            </p>
                            <a href="/detail-kelas/{{$data->IDurl_slug}}" class="btn btn--sm btn--primary mt-2 p-1 pl-3 pr-3">
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

