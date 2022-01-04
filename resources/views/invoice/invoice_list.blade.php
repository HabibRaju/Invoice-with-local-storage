<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}" />
  <title>Product</title>

  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <style>
    .no-border {
      border: 0;
      box-shadow: 0;
    }

    .invoiceBox {
      background-color: white;
      padding: 10px;
      box-shadow: 0px 0px 0px white;
    }
  </style>
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
        <li class="nav-item d-none d-sm-inline-block">
          <a href="#" class="nav-link">Contact</a>
        </li>
      </ul>

      <!-- SEARCH FORM -->
      <form class="form-inline ml-3">
        <div class="input-group input-group-sm">
          <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-navbar" type="submit">
              <i class="fas fa-search"></i>
            </button>
          </div>
        </div>
      </form>

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
      {{-- <a href="index3.html" class="brand-link">
        <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
          style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE 3</span>
      </a> --}}

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
              </ul>
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
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>


    <div class="container">
      <div class="row">
        <div class="col md 12">
          <h1 class="text-center">All Invoice List</h1>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="col md 10">
          <table class="table table-bordered">
            <tr>
              <th>No</th>
              <th>Client ID</th>
              <th>Name</th>
              <th>Quantity</th>
              <th>Price</th>
              <th>Date</th>
              <th>Action</th>
            </tr>
            @foreach ($invoices as $key => $invoice)  
            <tr>  
                <td>{{++$key}}</td>  
                <td>{{ $invoice->client_id }}</td>  
                <td>{{ $invoice->select_product }}</td>  
                <td>{{ $invoice->quantity}}</td>
                <td>{{ $invoice->price}}</td>
                <td>{{ $invoice->date}}</td>
                <td>  
                  <form action="{{ route('invoices.destroy',$invoice->id) }}" method="POST">   
                      @csrf  
                      @method('DELETE')  
                      <button type="submit" class="btn btn-danger">Delete</button>  
                  </form>  
                </td>  
            </tr>  
            @endforeach  
          </table>
        </div>
      </div>
    </div>
    <!-- Main Footer -->
  <!-- ./wrapper -->

  <!-- REQUIRED SCRIPTS -->

  <!-- jQuery -->
  <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>