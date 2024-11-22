<!DOCTYPE html>
<html>
  <head> 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dark Bootstrap Admin </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="admin/vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="admin/vendor/font-awesome/css/font-awesome.min.css">
    <!-- Custom Font Icons CSS-->
    <link rel="stylesheet" href="admin/css/font.css">
    <!-- Google fonts - Muli-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:300,400,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="admin/css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="admin/css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="admin/img/favicon.ico">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
    {{-- header section --}}
   @include('admin.header')
   {{-- end of header section --}}
    <div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->
     @include('admin.sidebar')
     {{-- side nav end --}}
     {{-- body sec --}}
     <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">
            <center>
<h1 style="color: white;">Gallary</h1>
<div class="row">
@foreach ($gallary as $gallary )
<div class="col-md-4">
  <img style="height: 200px; width:300px;" src="/galla/{{ $gallary->image }}">
  <a class="btn btn-danger" href="{{ url('deleteGallary',$gallary->id) }}" >Delete image</a>
</div>
@endforeach
</div>
<form action="{{ url('upload') }}" method="POST" enctype="multipart/form-data" >
    @csrf
    <div style="padding: 10px;">
        <label style="color: white;">Upload Image</label>
        <input type="file" name="image" >

        <input type="submit" class="btn btn-primary " value="Add Image" >
    </div>
</form>
            </center>
          </div>
        </div>
     </div>
     {{-- end of body  --}}
     
       @include('admin.footer')
  </body>
</html>