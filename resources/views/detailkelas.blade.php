@extends('layouts.base-app')
@section('content')
    <section class="imagebg image--dark cover cover-blocks bg--secondary"  data-overlay="7">
        <div class="background-image-holder hidden-xs" style="background: url(&quot;{{ URL('/asset_home/img/cover/j-kelly-brito-247570-unsplash.jpg') }}&quot;); opacity: 1;">
            <img alt="background" src="{{ URL('/asset_home/img/cover/j-kelly-brito-247570-unsplash.jpg') }}">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-8 mx-auto text-center">
                    <h2>{{$data->nama_kelas}}</h2>
                    <p class="lead m-0 p-0" style="font-size: 30px">
                        <i class="material-icons color-white m-0">star</i>
                        <i class="material-icons color-white m-0">star</i>
                        <i class="material-icons color-white m-0">star</i>
                        <i class="material-icons color-white m-0">star</i>
                        <i class="material-icons color-white m-0">star</i>
                    </p>
                    <p class="lead">
                        <strong class="text-white">8328</strong> Murid Sudah Bergabung 
                    </p>
                </div>
            </div>
            <!--end of row-->
        </div>
        <!--end of container-->
    </section>
    <section class="main-container pt-0">
            <div class="container">                
                <section class="switchable feature-large pt-0">
                <div class="container">
                    <div class="row justify-content-around">
                        <div class="col-md-4 pt-5">
                            <img alt="Image" class="border--round box-shadow-wide" src="{{ URL('/images/'.$data->file_foto) }}">
                        </div>
                        <div class="col-md-8 col-lg-8">
                            <div class="mt--1">
                                <h3>Deskripsi Kelas (WYSIWYG)</h3>
                                <p>
                                    {{$data->diskripsi}}
                                </p>

                            </div>
                            <div class="boxed boxed--border bg--secondary boxed--sm box-shadow text-center mt--1">
                                @foreach ($hasil_diskon as $item)
                                    <h1>Harga asli {{$data->harga_kelas}} total diskon {{$item->total}}</h1>
                                @endforeach
                                @if ($cektransaksi == "[]")
                                    <h4>Daftar Kelas Sekarang!</h4>
                                    <a class="btn btn--primary" href="/kelas/{{$data->id}}">
                                        <span class="btn__text">
                                        DAFTAR SEKARANG!
                                        </span>
                                    </a>
                                    <h6 class="m-0">Atau</h6>
                                @endif
                                <h4 class="mt-0 pt-0 pb-0 mb-3">Pertanyaan Mengenai Kelas</h4>
                                <a class="btn btn--secondary" href="#">
                                    <span class="btn__text">
                                        FAQ
                                    </span>
                                </a>
                            </div>
                            <h4>Materi Kelas</h4>
                            <ul class="list-topik">
                                @if ($cektransaksi == "[]")
                                    @foreach ($topik as $item)
                                        <li><a>{{$item->judul_topik}}</a></li>
                                    @endforeach
                                @else 
                                    @foreach ($topik as $item)
                                        <li><a href="/buka-topik/{{$item->id_kelas}}/{{$item->id}}">{{$item->judul_topik}}</a></li>
                                    @endforeach
                                @endif
                            </ul>
                            <h4>Profil Pengajar</h4>
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