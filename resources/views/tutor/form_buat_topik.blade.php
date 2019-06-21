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
            <h4 class="card-title"><strong>Input</strong> Topik</h4>
            <div class="card-body">
                <form action="/tutor/pengajar_buat_topik/{{$data2->id}}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    {{ method_field('POST') }}
                    <div class="row">
                        <div class="col-md-12">
                            <label>Judul Topik</label>
                            <div class="input-group">
                            <input type="text" class="form-control" name="judul_topik">
                            </div>
                            <br>
                            <input type="hidden" value="{{$data2->id}}" name="id">
                            <label>File Video</label>
                            <div class="input-group file-group">
                                <input type="text" class="form-control file-value" name="file_video" placeholder="Choose Video..." readonly="">
                                <input type="file" multiple="" name="file_video">
                                <span class="input-group-append">
                                    <button class="btn btn-light file-browser" type="button"><i class="fa fa-upload"></i></button>
                                </span>
                            </div>
                            <br>
                            <label>Deskripsi</label>
                            <div class="input-group">
                                <textarea data-provide="summernote" data-min-height="150" name="deskripsi">Some text inside</textarea>
                                <hr>
                            </div>
                            <br>
                            <label>Lampiran Topik</label>
                                <div class="input-group file-group">
                                <input type="text" class="form-control file-value" name="file_lampiran" placeholder="Choose Image..." readonly="">
                                <input type="file" multiple="" name="file_lampiran">
                                <span class="input-group-append">
                                    <button class="btn btn-light file-browser" type="button"><i class="fa fa-upload"></i></button>
                                </span>
                            </div>
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