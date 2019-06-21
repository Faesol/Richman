@extends('tutor.app')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,300i" rel="stylesheet">

    <!-- Styles -->
    <link href="../assets_pengajar1/css/core.min.css" rel="stylesheet">
    <link href="../assets_pengajar1/css/app.min.css" rel="stylesheet">
    <link href="../assets_pengajar1/css/style.min.css" rel="stylesheet">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="../assets_pengajar1/img/apple-touch-icon.png">
    <link rel="icon" href="../assets_pengajar1/img/favicon.png">
</head>
<body>
    <br><br><br>
    @section('content')
    <div class="col-12">
        <div class="card">
            <h4 class="card-title"><strong>Input</strong> groups</h4><br>
            <div class="container">
                <a href="/tutor/edit_kelas/{{$data->id}}" class="btn btn-w-md btn-primary" style="width:auto">Ubah Informasi Kelas</a>
                <a href="/tutor/lihat_kelas/{{$data->id}}" class="btn btn-w-md btn-secondary" style="width:auto">Preview</a>
            </div>
            
            <div class="card-body">
                <form action="/tutor/update_kelas/{{$data->id}}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    {{ method_field('put') }}
                    <div class="row">
                    <div class="col-md-6">
                        <label>Nama Kelas</label>
                        <div class="input-group">
                        <input type="text" class="form-control" name="nama_kelas" disabled value="{{ $data->nama_kelas }}">
                        </div>
                        <br>
                        <label>Harga Kelas</label>
                        <div class="input-group">
                        <input type="text" class="form-control" name="harga_kelas" disabled value="{{ $data->harga_kelas}}">
                        </div>
                        <br>
                        <label>Diskon Harga Kelas (Persen)</label>
                        <div class="input-group">
                        <input type="text" class="form-control" name="diskon_harga" disabled value="{{ $data->diskon_harga}}">
                        </div>
                        <br>
                    </div>
                    <div class="col-md-6">
                        <hr class="d-md-none">
                        <label>Pilih Kategori</label>
                        <div >
                        <select class="form-control" name="kategori_kelas">
                            <option value="{{$data->kategori_kelas}}" disabled selected>Pemrograman Default</option>
                            <option value="pemrograman">Pemrograman</option>
                            <option value="multimedia">Multimedia</option>
                            <option value="bisnis">Bisnis</option>
                            <option value="desain">Desain</option>
                        </select>
                        </div>
                        <br>
                        <label>Gambar Kelas</label>
                            <div class="input-group file-group">
                            <input type="text" class="form-control file-value" name="file_foto" disabled value="{{$data->file_foto}}" placeholder="Choose Image..." readonly="">
                            <input type="file" multiple="" name="file_foto" value="{{$data->file_foto}}">
                            <span class="input-group-append">
                                <button class="btn btn-light file-browser" type="button"><i class="fa fa-upload"></i></button>
                            </span>
                        </div>
                        <br>
                        <label>Video Perkenalan Kelas</label>
                        <div class="input-group file-group">
                            <input type="text" class="form-control file-value" name="file_video" disabled value="{{$data->file_video}}" placeholder="Choose Video..." readonly="">
                            <input type="file" multiple="" name="file_video" value="{{$data->file_video}}">
                            <span class="input-group-append">
                                <button class="btn btn-light file-browser" type="button"><i class="fa fa-upload"></i></button>
                            </span>
                        </div>
                        <br>
                    </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label>Deskripsi Kelas</label>
                            <textarea data-provide="summernote" data-min-height="150" name="diskripsi" disabled>{{$data->diskripsi}}</textarea>
                            <hr>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4"></div>
                        <div class="col-md-4"></div>
                        <div class="col-md-4">
                            <input type="submit" class="btn btn-w-md btn-primary" value="Upload" style="float:right">
                        </div>
                    </div>
                </form>
              </div>
              <div class="container">
                <div class="card-body">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="row">
                                <div class="col-md-3">
                                    <h4 ><strong><a href="/tutor/buat-topik/{{$data->id}}" class="btn btn-w-md btn-primary" style="width:auto">Tambah Topik</a></strong></h4>
                                </div>
                                <div class="col-md-9" style="text-align:center">
                                    <h4 style="font-weight:bold">Daftar Topik</h4>
                                </div>
                            </div>
                            
                            <div class="card-body">
                                <table class="table table-striped">
                                    
                                    <thead>
                                        <tr>
                                            <th>Nama Topik</th>
                                            <th>Aksis</th>
                                        </tr>
                                    </thead>
                                    @foreach($data2 as $a)
                                    <tbody>
                                        <tr>
                                            <td>{{$a->judul_topik}}</td>
                                            <td>
                                                <a href="/tutor/edit_kelas/">
                                                    <span class="fa fa-edit">.</span>&nbsp;&nbsp;
                                                </a>
                                                <a href="/tutor/lihat_kelas/">
                                                    <span class="fa fa-eye">.</span>&nbsp;&nbsp;
                                                </a>
                                                <a href="/tutor/penjualan_kelas/">
                                                    <span class="fa fa-money">.</span>&nbsp;&nbsp;
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>

        <!-- Global quickview -->
        <div id="qv-global" class="quickview" data-url="{{asset ('/assets_pengajar1/data/quickview-global.html')}}">
        <div class="spinner-linear">
            <div class="line"></div>
        </div>
        </div>
        <!-- END Global quickview -->
        <script>
      saveSummernote = function(markup) {
        // markup variable is new element html code.
        // You should make an ajax request to save the new value.

        app.toast('New text saved successfully.')
      }
    </script>
    @endsection


</body>
</html>