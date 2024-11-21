<!DOCTYPE html>
<html lang="en">
   <head>
    <base href="/public">
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>keto</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
      <style>
        label
        {
            display: inline-block;
            width: 200px;
        }
        input 
        {
width: 100%;
        }
      </style>
   </head>
   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#"/></div>
      </div>
      <!-- end loader -->
      <!-- header -->
      @include('home.header')
      <!-- end header inner -->
      <!-- end header -->
      <div  class="our_room">
        <div class="container">
           <div class="row">
              <div class="col-md-12">
                 <div class="titlepage">
                    <h2>Our Room</h2>
                    <p>Lorem Ipsum available, but the majority have suffered </p>
                 </div>
              </div>
           </div>
           <div class="row">
         
              
          
              <div class="col-md-8">
                 <div id="serv_hover"  class="room">
                    <div style="padding: 10px;" class="room_img">
                       <figure><img style="height: 300px; width:800px" src="/room/{{ $room->image }} " alt="#"/></figure>
                    </div>
                    <div class="bed_room">
                       <h2>{{ $room->room_title }}</h2>
                       <p style="padding: 10px" >{{ $room->description }}</p>
                       <h4>{{ $room->room_type }}</h4>
                       <h3>{{ $room->price  }}</h3>
                       
                    </div>
                 </div>
              </div>
       <div class="col-md-4" >
        <h1 style="font-size: 40px;" >Book Room</h1>

        @if (session()->has('message'))
        <div class="alert alert-success">
         <button type="button" class="close" data-bs-dismiss="alert" >X</button>
           {{ session()->get('message') }}
        </div>
        @endif

        @if ($errors)

        @foreach ($errors->all() as $errors )

        <li style="color: red;">
         {{ $errors }}
        </li>
           
        @endforeach
           
        @endif
        <form action="{{ url('create',$room->id) }} " method="POST" >
         @csrf
         <div>
            <label>Name</label>
            <input type="text" name="name" @if(Auth::id()) value="{{ Auth::user()->name }}" @endif >
         </div>
         <div>
            <label>Email</label>
            <input type="email" name="email" @if(Auth::id()) value="{{ Auth::user()->email }}" @endif >
         </div>
         <div>
            <label>Phone</label>
            <input type="number" name="phone" @if(Auth::id()) value="{{ Auth::user()->phone }}" @endif >
         </div>
         <div>
            <label>Start Date</label>
            <input type="date" name="startdate" id="startdate" >
         </div>
         <div>
            <label>End Date</label>
            <input type="date" name="enddate" id="enddate" >
         </div>
         <div style="padding-top: 20px;">
            <input type="submit" class="btn btn-primary" value="Book Room" >
         </div>
        </form>
       </div>
              
           </div>

        </div> 
     </div>
      <!--  footer -->
      @include('home.footer')
      <script>
        $(function(){
         var dtToday = new Date();
 
 var month = dtToday.getMonth() + 1;

 var day = dtToday.getDate();

 var year = dtToday.getFullYear();

 if(month < 10)
     month = '0' + month.toString();

 if(day < 10)
  day = '0' + day.toString();

 var maxDate = year + '-' + month + '-' + day;
 $('#startDate').attr('min', maxDate);
 $('#endDate').attr('min', maxDate);
})
      </script>
   </body>
</html>