<header class="header">   
    <nav class="navbar navbar-expand-lg">
    
      <div class="container-fluid d-flex align-items-center justify-content-between">
        <div class="navbar-header">
          <!-- Navbar Header--><a href="index.html" class="navbar-brand">
            <div class="brand-text brand-big visible text-uppercase"><strong style="color: white;">Admin</strong></div>
            <div class="brand-text brand-sm"><strong>A</strong></div></a>
          <!-- Sidebar Toggle Btn-->
          <button class="sidebar-toggle"><i class="fa fa-long-arrow-left"></i></button>
        </div>
        <div class="right-menu list-inline no-margin-bottom">    
          <x-dropdown-link :href="route('profile.edit')">
            {{ __('Profile') }}
        </x-dropdown-link>

          <!-- Log out               -->
          <div class="list-inline-item logout">
            <form method="POST" action="{{ route('logout') }}" style="color: white;">
              @csrf

              <x-dropdown-link :href="route('logout')"
                      onclick="event.preventDefault();
                                  this.closest('form').submit();">
                  {{ __('Log Out') }}
              </x-dropdown-link>
          </form>
            {{-- <x-app-layout></x-app-layout> --}}
          </div>
        </div>
      </div>
    </nav>
</header>