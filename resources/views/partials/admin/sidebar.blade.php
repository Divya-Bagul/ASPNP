<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  {{-- CSRF Token --}}
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>@hasSection('template_title')@yield('template_title') | @endif {{ config('app.name', Lang::get('titles.app')) }}</title>
  <meta name="description" content="">
  <meta name="author" content="Jeremy Kenedy">
  <link rel="shortcut icon" href="/favicon.ico">



  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  
  <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">
 
  <link rel="stylesheet" href="{{asset('plugins/summernote/summernote-bs4.min.css')}}">
  <link href="{{asset('admin/css/bootstrap.min.css')}}" rel="stylesheet" />
  <link href="{{asset('admin/css/paper-dashboard.css?v=2.0.1')}}" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="{{asset('admin/demo/demo.css')}}" rel="stylesheet" />

<style>
.main-sidebar{

    overflow-y: auto;
    top: 0;
    bottom: 0;
    background:#fff;
}
  </style>



<aside class=" " data-color="white" data-active-color="danger">
    <!-- Brand Logo -->
    

    <!-- Sidebar -->
    <div  class="main-sidebar sidebar-dark-primary elevation-4 position-fixed  " >
      <div class="logo">
        <a href="https://www.creative-tim.com" class="simple-text logo-mini">
          <div class="logo-image-small">
            <!-- <img src="../assets/img/logo-small.png"> -->
          </div>
          <!-- <p>CT</p> -->
        </a>
        
      </div>
      <div class="sidebar-wrapper">
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class=" nav-item ">
            <a href="./dashboard.html" class="nav-link">
              <i class="nc-icon nc-bank"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-items">
               <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                  <img src="{{asset('dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                  <a href="{{url('/')}}" class="d-block">{{ Auth::user()->name }}</a>
                </div>
              </div>
        </li>
        <li class="nav-items">
            <a class="nav-link {{ (Request::is('roles') || Request::is('permissions')) ? 'active' : null }}" href="{{ route('laravelroles::roles.index') }}">
              <i class="fas fa-users-cog"></i>  
               {{-- {!! trans('titles.laravelroles') !!}  --}}
              Roles Administration
          </a>
                 
          </li>
          <li class="nav-items">
            <a class="nav-link {{ Request::is('users', 'users/' . Auth::user()->id, 'users/' . Auth::user()->id . '/edit') ? 'active' : null }}" href="{{ url('/users') }}">
              <i class="fa fa-user" aria-hidden="true"></i>  
               {{-- {!! trans('titles.adminUserList') !!} --}}
               Users Administration
          </a>
          </li>
          <li class="nav-items">
            <a class="nav-link {{ Request::is('users/create') ? 'active' : null }}" href="{{ url('/users/create') }}">
              <i class="fa fa-users" aria-hidden="true"></i> 
               {!! trans('titles.adminNewUser') !!}
          </a>  
          </li>
          <li class="nav-items">
            
            <a href="{{url('showproduct')}}" class="nav-link {{request()->is('showproduct','product') ?'active':''}}  ">
              <i class="fab fa-product-hunt"></i> Show Products</a>
          
          </li>
          <li class="nav-items">
            
            <a href="{{url('addcategory')}}" class="nav-link {{request()->is('addcategory') ?'active':''}}  ">
              <i class="fab fa-product-hunt"></i> Show Category</a>
          
          </li>
          <li class="nav-items">
            
            <a href="{{url('subcategory')}}" class="nav-link {{request()->is('subcategory','showcategory') ?'active':''}}  ">
              <i class="fab fa-product-hunt"></i> Show subCategory</a>
          
          </li>

        </ul>
      </div>
    </div>
    <!-- /.sidebar -->
</aside>
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="{{asset('dist/img/AdminLTELogo.png')}}" alt="AdminLTELogo" height="60" width="60">
  </div>
  <div class="content-wrapper">
@yield('admin_content')

  </div>
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.1.0
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{asset('lugins/bootstrap/js/bootstrap.bundle.min.js')}}p"></script>
<!-- ChartJS -->
<script src="{{asset('plugins/chart.js/Chart.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{asset('plugins/sparklines/sparkline.j')}}s"></script>
<!-- JQVMap -->
<script src="{{asset('plugins/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{asset('plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{asset('plugins/jquery-knob/jquery.knob.min.js')}}"></script>
<!-- daterangepicker -->
<script src="{{asset('plugins/moment/moment.min.js')}}"></script>
<script src="{{asset('plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{asset('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<!-- Summernote -->
<script src="{{asset('plugins/summernote/summernote-bs4.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('dist/js/adminlte.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('dist/js/demo.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset('dist/js/pages/dashboard.js')}}"></script>




</body>
</html>
