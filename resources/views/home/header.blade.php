<header>
    <!-- header inner -->
    <div class="header">
       <div class="container">
          <div class="row">
             <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                <div class="full">
                   <div class="center-desk">
                      <div class="logo">
                         <a href="{{ '/' }}"><img src="images/logo.png" alt="#" /></a>
                      </div>
                   </div>
                </div>
             </div>
             <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                <nav class="navigation navbar navbar-expand-md navbar-dark ">
                   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                   <span class="navbar-toggler-icon"></span>
                   </button>
                   <div class="collapse navbar-collapse" id="navbarsExample04">
                      <ul class="navbar-nav mr-auto">
                         <li class="nav-item active">
                            <a class="nav-link" href="{{ '/' }}">Home</a>
                         </li>
                         <li class="nav-item">
                            <a class="nav-link" href="about.html">About</a>
                         </li>
                         <li class="nav-item">
                            <a class="nav-link" href="room.html">Our room</a>
                         </li>
                         <li class="nav-item">
                            <a class="nav-link" href="gallery.html">Gallery</a>
                         </li>
                         <li class="nav-item">
                            <a class="nav-link" href="contact.html">Contact Us</a>
                         </li>
                         @if (Route::has('login'))
                         {{-- <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10"> --}}
                             @auth
                             <form method="POST" action="{{ route('logout') }}">
                              @csrf
                
                              <x-dropdown-link :href="route('logout')"
                                      onclick="event.preventDefault();
                                                  this.closest('form').submit();">
                                  {{ __('Log Out') }}
                              </x-dropdown-link>
                          </form>
                             @else
                              <li class="nav-item">   <a href="{{ route('login') }}" class="nav-link font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a> </li>
         
                                 @if (Route::has('register'))
                                  <li class="nav-item">   <a href="{{ route('register') }}" class="nav-link ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a> </li>
                                 @endif
                             @endauth
                         {{-- </div> --}}
                     @endif
                      </ul>
                   </div>
                </nav>
             </div>
          </div>
       </div>
    </div>
 </header>