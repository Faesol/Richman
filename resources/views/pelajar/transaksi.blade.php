@extends('layouts.base-app')
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
                            <td><a href="/bayar-kelas/{{$item->id_kelas}}" class="btn btn-warning">Bayar Kelas</a></td> 
                        @else
                            <td><a href="/buka-kelas/{{$item->id_kelas}}" class="btn btn-success">Open Your Class</a></td>
                        @endif
                </tr>
                @endforeach
            </table>
        </section>
        
    </div>      
@endsection