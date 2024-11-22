<nav id="sidebar">
    <!-- Sidebar Header-->
    <div class="sidebar-header d-flex align-items-center">
      {{-- <div class="avatar"><img src="admin/img/avatar-6.jpg" alt="..." class="img-fluid rounded-circle"></div>
      <div class="title">
        <h1 class="h5">Mark Stephen</h1>
        <p>Web Designer</p>
      </div> --}}
      {{-- <x-slot name="trigger"> --}}
        <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
            <div>{{ Auth::user()->name }}</div>
        </button>
    {{-- </x-slot> --}}
    </div>
    <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
    <ul class="list-unstyled">
            <li class="active"><a href="{{ url('room') }}"> <i class="icon-home"></i>Home </a></li>
           
            <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-windows"></i>Rooms</a>
              <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                <li><a href="/createroom">Create rooms </a></li>
                <li><a href="/showroom">View Rooms</a></li>
              </ul>
            </li> 
            <li><a href="{{ url('/bookings') }}"> <i class="icon-home"></i>Bookings </a></li>
            <li><a href="{{ url('view_gallary') }}"> <i class="icon-home"></i>Gallery </a></li>


    </ul>
    
  </nav>
  <!-- Sidebar Navigation end-->