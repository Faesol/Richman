@extends('tutor.app')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <br><br>
    @section('content')
    <main class="main-container">
        <div class="main-content">
            <div class="card">
                <h4 class="card-title">Daftar Kelas <br>
                    <a href="/tutor/buat-kelas" class="btn btn-w-md btn-primary" style="width:auto">Buat Kelas Baru</a>
                    {{--  <button class="btn btn-w-md btn-primary" style="width:auto">Buat Kelas Baru</button>  --}}
                </h4>
                <div class="card-body">
                    <div class="col-lg-12">
                        <div class="card">
                            <h4 class="card-title"><strong>Striped</strong></h4>
                            <div class="card-body">
                                <table class="table table-striped">
                                    
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Nama Kelas</th>
                                            <th>Harga Kelas</th>
                                            <th>Diskon Kelas</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($data as $a)
                                        <tr>
                                            <th scope="row">{{$a->id}}</th>
                                            <td><a href="/tutor/detail_kelas/{{$a->id}}">{{$a->nama_kelas}}</a></td>
                                            <td>{{$a->harga_kelas}}</td>
                                            <td>{{$a->diskon_harga}}%</td>
                                            <td>
                                                <a href="/tutor/detail_kelas/{{$a->id}}">
                                                    <span class="fa fa-edit">.</span>&nbsp;&nbsp;
                                                </a>
                                                <a href="/tutor/lihat_kelas/{{$a->id}}">
                                                    <span class="fa fa-eye">.</span>&nbsp;&nbsp;
                                                </a>
                                                <a href="/tutor/penjualan_kelas/{{$a->id}}">
                                                    <span class="fa fa-money">.</span>&nbsp;&nbsp;
                                                </a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                    
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/.main-content -->
    @endsection
</body>
</html>