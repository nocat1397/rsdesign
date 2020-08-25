<!DOCTYPE html>
<html lang="en">
<head>
	<title>RS designs</title>
	<meta charset="UTF-8">
	<meta name="description" content="Rahul Shah is founder of RS designs and currently, architecture and designer of many luxuries and extraordinary bunglows and offices of Ahmedabad">
	<meta name="keywords" content="Rahul Shah is founder of RS designs and currently, architecture and designer of many luxuries and extraordinary bunglows and offices of Ahmedabad">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->   
	<link href="{{url('img/favicon.ico')}}" rel="shortcut icon"/>

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="{{url('css/bootstrap.min.css')}}"/>
	<link rel="stylesheet" href="{{url('css/font-awesome.min.css')}}"/>
	<link rel="stylesheet" href="{{url('css/animate.css')}}"/>
	<link rel="stylesheet" href="{{url('css/magnific-popup.css')}}"/>
	<link rel="stylesheet" href="{{url('css/owl.carousel.css')}}"/>
	<link rel="stylesheet" href="{{url('css/style.css')}}"/>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.css" rel="stylesheet">
{{-- <style>
	.item-card{
  transition:0.1s;
  
  cursor:pointer;
  box-shadow: 10px 10px 15px rgba(0,0,0,0.3);
  height: 100%;
  
  background-image: url(/img/bg.jpg);
  background-size: 100% 100%;
  border-radius: 20px;
    margin: auto;
    margin-top: 20px;
}
.item-card-title{  
  font-size:40px;
  transition:.5s;
  cursor:pointer;
  text-decoration: none;
    color: white;
}
.item-card-title:hover{  
    color: #baff00;
    
}

.card:hover{
  transform: scale(1.05);
  box-shadow: 10px 10px 15px rgba(0,0,0,0.3);
  color: Black;
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
</style> --}}
</head>
<body>
<!-- header section -->
@include('template.content.header')

	<!-- Page header section start -->
	<section class="page-header-section set-bg" data-setbg="{{url('img/header-bg.jpg')}}">
		<div class="container">
			<h1 class="header-title">Portfolio<span>.</span></h1>
		</div>
	</section>
	<!-- Page header section end -->

    {{-- <div class="text-center mt-5">
        <h1><strong>Select Project</strong></h1>
    </div> --}}
	<!-- Page section start -->
    {{-- <div class="content m-5">
        <div class="container"> --}}
          {{-- <div class="row">
            @foreach ($projects as $project)
            <div class="col-md-2 item">
              
              <div class="card item-card">
                <div class="card-body">
                  <h5 class="card-title"></h5>
                    <a href="{{url('portfolio'.$project->id)}}" class="text-center item-card-title">{{$project->project_name}}</a>
                </div>
              </div>
              
            
            <!-- /.col-md-6 -->
            </div>
            @endforeach
            <!-- /.col-md-6 -->
          </div> --}}
          <!-- /.row -->
          {{-- <div class="row">
            @foreach ($projects as $project)
            <div class="col-md-5 card item-card">
              <div class="text-left pt-5 card-body">
                <h1 class="text-uppercase card-title"><a href="{{url('portfolio'.$project->id)}}" class="item-card-title">{{$project->project_name}}</a></h1>
              </div>
              <div class="text-right">
                <h5 class="font-weight-medium" style="color: #baff00">-{{$project->client_name}}</h5>
                
              </div>
            </div>
            @endforeach
            
            
          </div> --}}
        {{-- </div><!-- /.container-fluid --> --}}
      {{-- </div> --}}
  <!-- Page section end -->
  <div class="projects-section pb50 pt-5 mb-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-3">
          <div class="section-title">
            <h1>Projects</h1>
          </div>
        </div>
        <div class="col-lg-9">
          {{-- <ul class="projects-filter-nav">
            <li class="btn-filter" data-filter="*">All</li>
            @foreach ($projects as $project)
            <li class="btn-filter" data-filter=".{{$project->project_name}}">{{$project->project_name}}</li>
            @endforeach
          </ul> --}}
        </div>
      </div>
    </div>                      
    <div id="projects-carousel" class="projects-slider">
      @foreach ($projects as $project)
      
      <div class="single-project set-bg {{$project->project_name}}" @foreach ($project->images as $images) @if ($images == reset($project )) First Item: @endif data-setbg="/images/{{$images->file}}" @endforeach>
      
        <div class="project-content">
          <h2>{{$project->project_name}}</h2>
          <p>{{$project->client_name}}</p>
          <a href="{{url('portfolio'.$project->id)}}" class="seemore">See Project </a>
        </div>
      </div>
      @endforeach
    </div>
  </div>
	@include('template.content.footer')
	<!--====== Javascripts & Jquery ======-->
	<script src="{{url('js/jquery-2.1.4.min.js')}}"></script>
	<script src="{{url('js/bootstrap.min.js')}}"></script>
	<script src="{{url('js/isotope.pkgd.min.js')}}"></script>
	<script src="{{url('js/owl.carousel.min.js')}}"></script>
	<script src="{{url('js/jquery.owl-filter.js')}}"></script>
	<script src="{{url('js/magnific-popup.min.js')}}"></script>
	<script src="{{url('js/circle-progress.min.js')}}"></script>
	<script src="{{url('js/main.js')}}"></script>
</body>
</html>