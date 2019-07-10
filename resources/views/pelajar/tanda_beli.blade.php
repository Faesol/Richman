@extends('layouts.navbar')
@section('content')
<div class="mb-5">
    <section class="imagebg image--light cover cover-blocks bg--secondary ">
        <div class="background-image-holder hidden-xs" style="background: url(&quot;{{ URL('/asset_home/img/promo-1.jpg') }}&quot;); opacity: 1;">
            <img alt="background" src="{{ URL('/asset_home/img/promo-1.jpg') }}">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-5 ">
                    <div>
                        <h1>Terima Kasih</h1>
                        <p class="lead">
                            Lakukan Pembayaran sesuai metode yang telah dipilih dan upload foto bukti pembayaran di halaman <a href="#">bayar kelas sekarang!</a> 
                        </p>
                        <hr class="short">
                        <p class="lead">
                            BCA : 3170504304 a/n Kevin EA <br>
                            OVO : 089515477777 a/n Kevin EA <br>
                            DANA : 089515477777 a/n Kevin EA <br>
                            Batas pembayaran 3 hari setelah checkout
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