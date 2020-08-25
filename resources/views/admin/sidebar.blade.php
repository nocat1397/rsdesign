<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-dark" style="background-color: #000">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto">
    @guest
      <li class="nav-item">
          <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
      </li>
      @if (Route::has('register'))
          <li class="nav-item">
              <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
          </li>
      @endif
  @else
      <li class="nav-item dropdown">
          <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
              {{ Auth::user()->name }} <span class="caret"></span>
          </a>

          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="{{ route('logout') }}"
                 onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();">
                  {{ __('Logout') }}
              </a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
              </form>
          </div>
      </li>
  @endguest
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-color: #000">
    <!-- Brand Logo -->
    <a href="{{url('/home')}}" class="brand-link text-center">
      <h3 class="logo mb-0 pb-0">
        <span class="word1">RS</span>
        <span class="word2">designs</span>
      </h3>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      {{-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="https://img.icons8.com/dotty/80/000000/user.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
        <a href="#" class="d-block">{{Auth::user()->name}}</a>
        </div>
      </div> --}}

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="{{url('project')}}" class="nav-link">
              <i class="fas fa-plus"></i>
              <p>Create Project</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('category')}}" class="nav-link">
              <i class="fas fa-plus"></i>
              <p>Create Category</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{url('update')}}" class="nav-link">
              <i class="fas fa-plus"></i>
              <p>Update Category</p>
            </a>
          </li>
          
          <li class="nav-item">
            <a href="{{url('upload')}}" class="nav-link">
              <i class="fas fa-plus"></i>
              <p>Upload Image</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{url('comment')}}" class="nav-link">
              <i class="fas fa-plus"></i>
              <p>Add Comments</p>
            </a>
          </li>
        </ul> 
            
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
