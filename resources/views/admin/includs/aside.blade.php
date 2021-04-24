<aside class="main-sidebar sidebar-dark-primary elevation-4 ">
    <!-- Brand Logo -->
    <a href="{{route('home')}}" class="brand-link">
      <img src="{{URL::asset('assets/images/logo_site.png')}}" style="background-color: white" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: 1">
      <span class="brand-text font-weight-light">Visite Algeria</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{URL::asset('dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{auth::user()->name}}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="{{route('home')}}" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                {{-- <i class="right fas fa-angle-left"></i> --}}
              </p>
            </a>
          
          </li>
          <li class="nav-item has-treeview">
            <a href="" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                places 
                <i class="fas fa-angle-left right"></i>
                {{-- <span class="badge badge-info right">6</span> --}}
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('place.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Top Navigation</p>
                </a>
              </li>
             
            </ul>
          </li>
          <li class="nav-item">
            <a href="{{route('categorie.index')}}" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Categories</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{route('driver.index')}}" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Drivers</p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                hotels 
                <i class="fas fa-angle-left right"></i>
                {{-- <span class="badge badge-info right">6</span> --}}
              </p>
            </a>
            <ul class="nav nav-treeview">

              <li class="nav-item">
                <a href="{{route('hotel.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>hotel</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('room.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>room</p>
                </a>
              </li>
             
            </ul>
            <li class="nav-item">
              <a href="{{route('willaya.index')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>willaya</p>
              </a>
            </li>
          </li>
          
        </ul>
       
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>