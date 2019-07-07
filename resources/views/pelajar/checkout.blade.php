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
<div class="container mb-5">
        <section>
            <div class="row">
                <div class="col-12 col-md-8 mx-auto">
                    <h3>Checkout Pendaftaran Kelas</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reiciendis quidem minus vitae itaque temporibus accusamus quo iste vero?.</p>
                    <h4>Pilih Metode Pembayaran :</h4>
                    <form action="/pelajar/beli-kelas/{{$data->id}}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    {{ method_field('POST') }}
                        <div class="row">
                            <input type="hidden" name="id_kelas" value="{{$data->id}}">
                            <div class="col-3">
                                <div class="input-radio input-radio--innerlabel w-100">
                                    <input id="radio-1" type="radio" name="methode_transaksi" value="bank">
                                    <label for="radio-1" class="py-3 w-100" style="height: auto;"><h5 class="mb-0">BANK TRANSFER</h5></label>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="input-radio input-radio--innerlabel w-100">
                                    <input id="radio-2" type="radio" name="methode_transaksi" value="ovo">
                                    <label for="radio-2" class="py-3 w-100" style="height: auto;"><h5 class="mb-0">OVO</h5></label>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="input-radio input-radio--innerlabel w-100">
                                    <input id="radio-3" type="radio" name="methode_transaksi" value="dana">
                                    <label for="radio-3" class="py-3 w-100" style="height: auto;"><h5 class="mb-0">DANA</h5></label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-3 mr-auto">
                                <button type="submit" class="btn btn--lg btn--primary py-2" style="height:auto;"><span class="btn__text">Bayar Sekarang!</span></button>
                            </div>
                        </div>
                    </form>
                    <hr>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-8 mx-auto">
                    <div class="boxed boxed--border cart-total bg--secondary mt-0">
                        <div class="row">
                            <div class="col-12">
                                <h4>Detail Checkout</h4>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                <span class="h4 mb-0">Kelas:</span>
                            </div>
                            <div class="col-8 text-right">
                                <span class="h4 mb-0"><strong>Belajar HTML</strong></span>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-4">
                                <span class="h4 mb-0">Total:</span>
                            </div>
                            <div class="col-8 text-right">
                                <span class="h4 mb-0"><strong>Rp. 1,028.98</strong></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
    </div>      
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