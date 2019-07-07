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
            <h1>Kelas saya</h1>
            <table>
                <tr style="font-weight:bold">
                    <td>Nama Kelas</td>
                    <td>Harga Kelas</td>
                    <td>Methode Pembayaran</td>
                    <td>Status</td>
                </tr>
                @foreach ($data as $item)
                <tr>
                        <td>{{$item->kelas->nama_kelas}}</td>
                        <td>{{$item->kelas->harga_kelas}}</td>
                        <td>{{$item->methode_transaksi}}</td>
                        @if( $item->status == 0)
                            <td><a href="/pelajar/bayar-kelas/{{$item->id_kelas}}" class="btn btn-warning">Bayar Kelas</a></td> 
                        @else
                            <td><a href="" class="btn btn-success">Open Your Class</a></td>
                        @endif
                </tr>
                @endforeach
            </table>
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