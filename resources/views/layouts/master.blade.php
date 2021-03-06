<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Starter</title>

  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body class="hold-transition sidebar-mini">
  <div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="/home" class="nav-link">Home</a>
        </li>
      </ul>
      <!-- Right Side Of Navbar -->
      <ul class="navbar-nav ml-auto">
        <!-- Authentication Links -->
        @guest
            @if (Route::has('login'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
            @endif
            
            @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
            @endif
        @else
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }}
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </li>
        @endguest
    </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="index3.html" class="brand-link">
        <span class="brand-text font-weight-light">Invoice Project</span>
      </a>

      <!-- Sidebar -->
      {{-- <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block">Alexander Pierce</a>
          </div>
        </div> --}}

        <!-- SidebarSearch Form -->
        <div class="form-inline">
          <div class="input-group" data-widget="sidebar-search">
            <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
              <button class="btn btn-sidebar">
                <i class="fas fa-search fa-fw"></i>
              </button>
            </div>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item menu-open">
              <a href="#" class="nav-link active">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  Tables
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{route('products.index')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Product</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{route('invoices.index')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Invoice</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{route('invoices.index')}}" class="nav-link">
                    {{-- <i class="far fa-circle nav-icon"></i> --}}
                    <p></p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{route('invoices.index')}}" class="nav-link">
                    {{-- <i class="far fa-circle nav-icon"></i> --}}
                    <p></p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{route('invoices.index')}}" class="nav-link">
                    {{-- <i class="far fa-circle nav-icon"></i> --}}
                    <p></p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{route('invoices.index')}}" class="nav-link">
                    {{-- <i class="far fa-circle nav-icon"></i> --}}
                    <p></p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{route('invoices.index')}}" class="nav-link">
                    {{-- <i class="far fa-circle nav-icon"></i> --}}
                    <p></p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{route('invoices.index')}}" class="nav-link">
                    {{-- <i class="far fa-circle nav-icon"></i> --}}
                    <p></p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{route('invoices.index')}}" class="nav-link">
                    {{-- <i class="far fa-circle nav-icon"></i> --}}
                    <p></p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{route('invoices.index')}}" class="nav-link">
                    {{-- <i class="far fa-circle nav-icon"></i> --}}
                    <p></p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{route('invoices.index')}}" class="nav-link">
                    {{-- <i class="far fa-circle nav-icon"></i> --}}
                    <p></p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{route('invoices.index')}}" class="nav-link">
                    {{-- <i class="far fa-circle nav-icon"></i> --}}
                    <p></p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{route('invoices.index')}}" class="nav-link">
                    {{-- <i class="far fa-circle nav-icon"></i> --}}
                    <p></p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{route('invoices.index')}}" class="nav-link">
                    {{-- <i class="far fa-circle nav-icon"></i> --}}
                    <p></p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{route('invoices.index')}}" class="nav-link">
                    {{-- <i class="far fa-circle nav-icon"></i> --}}
                    <p></p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{route('invoices.index')}}" class="nav-link">
                    {{-- <i class="far fa-circle nav-icon"></i> --}}
                    <p></p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{route('invoices.index')}}" class="nav-link">
                    {{-- <i class="far fa-circle nav-icon"></i> --}}
                    <p></p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{route('invoices.index')}}" class="nav-link">
                    {{-- <i class="far fa-circle nav-icon"></i> --}}
                    <p></p>
                  </a>
                </li>
              </ul>
            </li>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      {{-- <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Starter Page</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Starter Page</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div> --}}
      <!-- /.content-header -->

      <!-- Main content -->
      {{-- <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-6">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>

                  <p class="card-text">
                    Some quick example text to build on the card title and make up the bulk of the card's
                    content.
                  </p>

                  <a href="#" class="card-link">Card link</a>
                  <a href="#" class="card-link">Another link</a>
                </div>
              </div>

              <div class="card card-primary card-outline">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>

                  <p class="card-text">
                    Some quick example text to build on the card title and make up the bulk of the card's
                    content.
                  </p>
                  <a href="#" class="card-link">Card link</a>
                  <a href="#" class="card-link">Another link</a>
                </div>
              </div><!-- /.card -->
            </div>
            <!-- /.col-md-6 -->
            <div class="col-lg-6">
              <div class="card">
                <div class="card-header">
                  <h5 class="m-0">Featured</h5>
                </div>
                <div class="card-body">
                  <h6 class="card-title">Special title treatment</h6>

                  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>

              <div class="card card-primary card-outline">
                <div class="card-header">
                  <h5 class="m-0">Featured</h5>
                </div>
                <div class="card-body">
                  <h6 class="card-title">Special title treatment</h6>

                  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
            </div>
            <!-- /.col-md-6 -->
          </div>
          <!-- /.row -->
        </div><!-- /.container-fluid -->
      </div> --}}
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
      <div class="p-3">
        <h5>Title</h5>
        <p>Sidebar content</p>
      </div>
    </aside>
    <!-- /.control-sidebar -->

    <!-- Main Footer -->
    <footer class="main-footer">
      <!-- To the right -->
      <div class="float-right d-none d-sm-inline">
        Anything you want
      </div>
      <!-- Default to the left -->
      <strong>Copyright &copy; 2022 <a href="https://habibraju.github.io/Raju_Portfolio/">Habibur Rahaman Raju</a>.</strong> All rights reserved.
    </footer>
  </div>
  <!-- ./wrapper -->

  <!-- REQUIRED SCRIPTS -->

  <!-- jQuery -->
  <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>