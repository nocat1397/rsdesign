<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  

  <title>AdminLTE 3 | Starter</title>

  <link href="{{ asset('admin/css/app.css') }}" rel="stylesheet">
  
  <style>
    .nav-item .nav-link p {
      color: white!important;
    }
    /*---------LOGO CSS---------*/

.logo {
  font: 35px 'Arial Narrow', sans-serif;/* I picked this font because it's the closest looking 'web safe' font http://cssfontstack.com/ */
  color: #fefefe;
  text-transform: uppercase;
  letter-spacing: -1px;
}

/* stuff for both words */
.logo span {
  position: relative;
}
.logo span:before,
.logo span:after {
  content: '';
  position: absolute;
  border-width: 10px;/* makes a nice, big 64px square */
  border-style: solid;
  border-color: transparent;
  height: 0;
  z-index: 10;
}
    /* stuff for 1st word */
.logo .word1 {
  color: #baff00;
  margin-right: -12px;
  transform: rotateY(180deg);/* using Prefix free */
  display: inline-block;/* required for transform */
  z-index: 10;/* stack 1st word on top */
}
.logo .word1:before {
  right: -1px;/* would be left, but we flipped the word */
  top: -2px;
  border-top-color: #121212;/* match background color */
  border-right-color: #121212;/* would be left, but we flipped the word */
}
.logo .word1:after {
  left: 2px;/* would be right, but we flipped the word */
  bottom: 0px;
  border-bottom-color: #121212;
  border-left-color: #121212;/* would be right, but we flipped the word */
}

/* stuff for 2nd word */
.logo .word2 {
  z-index: 0;/* stack 2nd word below */
}
.logo .word2:before {
  left: 2px;
  top: 1px;
  border-top-color: #121212;
  border-left-color: #121212;
}
.logo .word2:after {
  right: -4px;  
  bottom: 4px;
  border-bottom-color: #121212;
  border-right-color: #121212;
}

.item-card{
  transition:0.2s;
  cursor:pointer;
}
.item-card-title{  
  font-size:20px;
  transition:1s;
  cursor:pointer;
}


.card:hover{
  transform: scale(1.05);
  box-shadow: 10px 10px 15px rgba(0,0,0,0.3);
}
.card-text{
  height:80px;  
}

.card::before, .card::after {
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  transform: scale3d(0, 0, 1);
  transition: transform .3s ease-out 0s;
  background: rgba(35, 250, 6, 0.1);
  content: '';
  pointer-events: none;
}
.card::before {
  transform-origin: left top;
}
.card::after {
  transform-origin: right bottom;
}
.card:hover::before, .card:hover::after, .card:focus::before, .card:focus::after {
  transform: scale3d(1, 1, 1);
}
/*------------------*/
  </style>
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  @include('admin.sidebar')     {{-- sidebar & navbar content from view --}}

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="background-color:white">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">All Projects</h1>
          </div><!-- /.col -->
          {{-- <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Starter Page</li>
            </ol>
          </div><!-- /.col --> --}}
          <div>
            
          </div>
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

    
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          @foreach ($projects as $project)
          <div class="col-md-2 item">
            
            <div class="card item-card">
              <div class="card-body">
                <h5 class="card-title"></h5>
              <h1 class="text-center item-card-title">{{$project->project_name}}</h1>
              </div>
            </div>
            
          
          <!-- /.col-md-6 -->
          </div>
          @endforeach
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
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
    
    <!-- Default to the left -->
    <div class="copyright text-center">Copyright &copy; <script>document.write(new Date().getFullYear());</script> All rights reserved. This template is made with ♡
     by <a href="{{url('/home')}}" target="_blank">RS Designs</a></>
    
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<script src="{{ asset('admin/js/app.js') }}" defer></script>
</body>
</html>
