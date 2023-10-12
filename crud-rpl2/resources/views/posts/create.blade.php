<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" contect="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title> Tambah Data Post - aku.com</title>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body style="background: lightgray">
  <div class="container mt-5 mb-5">
  <div class="row">
  <div class="col-md-12">
  <div class="card border-0 shadow rounded">
  <div class="card-body">
  <form action="{{ route('posts.store')}}" method="POST" enctype="multipart/form-data">
     @csrf
     <div class="form-group">
       <label class="font-weight-bold">GAMBAR</label>
    <input type="file" class="form-control @error('image') is-invalid @enderror" name="image">
    <!--error message untuk title-->
    @error('image')
      <div class="alert alert-danger mt-2">
        {{$message}}
    </div>
    @enderror
</div>
<div class="form-group">
 <label class="font-weght-bold">JUDUL</labe>
 <input type="text" class="form-control @error('title') is-invalid @enderror "name="title" value="{{ old('title')}}" placehorde="Masukkan Judul Post">
      @error('title')
       <div class="alert alert-danger mt-2">
       {{ $message}}
    </div>
    @enderror
</div>
<div class="form-group">
    <label class="font-weight-bold">KONTEN</label>
    <textarea class="form-control @error('contecnt') is-invalid @enderror" name="content" rows="5" placeholder="masukkan konten post">{{ old('content')}}</textarea>
    <!--error message untuk content-->
    @error('content')
       <div class="alert alert-danger mt-2">
        {{$message}}
    </div>
    @enderror
    </div>
    <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
    <button type="reset" class="btn btn-md btn-warning">RESET</button>
</form>
</div>
</div>
</div>
</div>
</div>
 <script scr="https://cdnjs.cludflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js'></script>
 <script scr="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
 <script>
    CKEDITOR.replace('content ');
    </script>
    </body>
    </html>