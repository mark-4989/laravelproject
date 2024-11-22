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
        <style>
            .tabled{
                border: 2px solid white;
                margin: auto; 
                width: 80%;
                text-align: center;
                margin-top: 40px;
            }
            .thd{
                background-color: white;
                padding: 1.3rem;
            }
            tr{
                border: 2px solid white;
            }
            td{
                padding: 10px;
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
     <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">
<table class="tabled">
    <tr>
        <th class="thd">Room Title</th>
        <th class="thd">Description</th>
        <th class="thd">price</th>
        <th class="thd">Room Type</th>
        <th class="thd">Image </th> 
        <th class="thd">Action </th> 

    </tr>

  @foreach ($data as $data)
      
    <tr>
        <td>{{ $data->room_title }}</td>
        <td>{{ $data->description }}</td>
        <td>{{ $data->price }}$</td>
        <td>{{ $data->room_type }}</td>
        <td> <img width="100" src="room/{{ $data->image }}" > </td>
        <td><a onclick="return confirm('Are you Sure You want to delete this Room');" class="btn btn-danger" href="{{ url('destroy',$data->id) }}" >Delete </a>
        <a class="btn btn-warning" href="{{url('uproom',$data->id)}}" >Update</a>
        </td>
    </tr>
    @endforeach  

</table>
          </div>
        </div>
     </div>
     
      
  </body>
</html>