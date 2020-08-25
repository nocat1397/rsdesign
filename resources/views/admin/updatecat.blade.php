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
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <style>
      .card-w{
          width: -webkit-fill-available;
      }
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
.card {
  line-height: 2;
  border-radius: 0.50rem;
}
  </style>
</head>
<body class="hold-transition sidebar-mini" background="{{url('img/bg.jpg')}}">
<div class="wrapper">

    @include('admin.sidebar')     {{-- sidebar & navbar content from view --}}

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Update Category</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Update Category</li>
            </ol>
          </div><!-- /.col -->
          <div>
            
          </div>
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

    
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row justify-content-center">
          <div class="col-md-8">
            <div class="card p-3 mt-5 shadow"> 
              
          {!! Form::open(['method'=>'POST','action'=>'UpdatecatController@store']) !!}
          <div class="form-group">
            <h3>Select Project</h3>
            <hr>
            @foreach ($projects as $project )
              
            
            {!! Form::label('name', $project->project_name) !!}
            {!! Form::radio('id', $project->id) !!}
            
                
            
            
            @foreach ($project->categories as $data)
            {!! Form::label('name', $data->name) !!}
            {!! Form::checkbox('id[]', $data->id) !!}
            
            
            
            @endforeach
            
            @endforeach
            <br>
            
           
          </div>
          <div class="form-group">
              {!! Form::submit('Submit', ['class'=>'btn btn-success shadow', 'style'=>"z-index: 100; color:#000; border:none; text-decoration:none!important; background:#baff00"]) !!}
          </div>    
          {!! Form::close() !!}
        </div>
        </div>
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
      by <a href="{{url('/home')}}" target="_blank">RS Designs</a></div>
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<script src="{{ asset('admin/js/app.js') }}" defer></script>
</body>
</html>
