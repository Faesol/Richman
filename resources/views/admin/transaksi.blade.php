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
                                            <th>Id Kelas</th>
                                            <th>Metode Transaksi</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($data as $item)
                                        <tr>
                                            <th scope="row"></th>
                                            <td>{{$item->id_kelas}}</td>
                                            <td>{{$item->methode_transaksi}}</td>
                                            <td>
                                                @if($item->status == 0)
                                                <a href="/admin/transaksi/approve/{{$item->id}}" class="btn btn-info">Approve</a>
                                                @else
                                                <a href="/admin/transaksi/reject/{{$item->id}}" class="btn btn-success">Reject</a>
                                                @endif
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