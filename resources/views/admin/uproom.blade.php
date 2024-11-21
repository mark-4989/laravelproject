<!DOCTYPE html>
<html>
  <head> 
    <base href="/public">

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
        <style>
            label{
                display: inline-block;
                width: 200px;
            }
            .design{
                padding-top: 30px;
            }
            .midddle{
                text-align: center;
                padding-top: 40px;
            }
        </style>
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
<div class="middle">
    <h1>Update Room </h1>
    <form action="{{ url('editroom',$data->id) }}" method="POST" enctype="multipart/form-data" >
        @csrf
        <div class="design">
            <label>Room title</label>
            <input type="text" name="title" value="{{ $data->room_title }}" >
        </div>
        <div class="design">
            <label>Description</label>
            <textarea name="description">{{ $data->description }}</textarea>
        </div>
        <div class="design">
            <label>Price</label>
            <input type="number" name="price" value="{{ $data->price }}" >
        </div>
        <div class="design">
            <label>Room type</label>
            <select name="type">
                <option selected value="{{ $data->room_type }}" >{{ $data->room_type }}</option>
                <option value="regular" > Regular </option>
                <option value="premium" > premium </option>
                <option value="dulex" >  Dulex </option>

            </select>
            
        </div>
        <div class="design">
            <label>Current Image</label>
            <img style="margin: auto;" width="100" src="/room/{{ $data->image }}" alt="">
        </div>
        <div class="design">
            <label>Image</label>
            <input type="file" name="image" >
        </div>
        <div class="design">
            <input type="submit" value="Update Room" >
        </div>
    </form>
</div>
          </div>
        </div>
     </div>
     {{-- end of body  --}}
     
       @include('admin.footer')
  </body>
</html>