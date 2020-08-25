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
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">
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
<style>
	}
#container {
  margin: auto;
}

.header h1{
    text-align: center;
    background: -webkit-linear-gradient(#e3ca66, #b48e47);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    font-size: 4.5em;
    font-family: 'Parisienne', cursive;
    margin-bottom: 15px;
}
.header p {
    text-align: center;
    background: -webkit-linear-gradient(#e3ca66, #b48e47);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    font-weight: 700;
    font-size: 20px;
}

.grid-item {
display: inline-block;
    height: 259px;

    overflow: hidden;
    text-align: center;
    width: 400px;
}
.grid-item img{
    width:100%;
    height:auto;
    filter: url(filters.svg#grayscale);
    filter: gray;
    -webkit-filter: grayscale(1);
    transition: 0.9s;
}
.grid-item img:hover{
    filter: none;
}

.isotope-pager .pager {
  display: inline-block;
}
.filters {
    width: 100%;
    text-align: center;
    padding-bottom: 35px;
    padding-top:20px;
    
}

.filters ul {
    list-style: none;
    padding: 20px 10px;
    box-shadow: -1px 1px 11px rgba(0,0,0,.4);
    margin: 0 40px;
    border-radius: 30px;
    background-color: #232323;
}

.filters li {
    display: inline-block;
    padding: 10px 25px;
    font-size: 15px;
    font-weight: 600;
    cursor: pointer;
}
.filters li a{
    color: #b6b6b6;
    text-decoration: none;
}
.filters li a:hover{
    color:#fff;
}

.filters li:hover {
    box-shadow: -1px 1px 11px rgba(0,0,0,.4);
    border-radius: 15px;
}

.filters li.active a{
    color: #e3ca66;
    border: 1px solid #e3ca66;
    border-radius: 15px;
    box-shadow: -1px 1px 11px rgba(0,0,0,.4);
    padding: 10px 25px;
    
}



.isotope-pager a{
  margin: 6px 1px;
    display: inline-block;
    width: 50px;
    /* height: 60px; */
    line-height: 31px;
    color: #b6b6b6;
    font-weight: 600;
    transition: 0.3s;
    /* position: relative; */
    /* padding-right: 26px; */
    box-shadow: -1px 1px 11px rgba(0,0,0,.1);
    border-radius: 25px;
    background-color: #232323;
    border: .5px solid #e3ca66;
    text-decoration:none;
}

.isotope-pager a:hover{
  color: #fff;
  border: .5px solid #ffeeac;
  box-shadow: -1px 1px 10px 3px rgba(0,0,0,.1);
}

.isotope-pager .active{
  color: #e3ca66 !important;
    box-shadow: -1px 1px 10px 5px rgba(0,0,0,.1);
    border-radius: 25px;
    background-color: #161616;
    border: 1px dotted #e3ca66;
}

.isotope-pager .prev{
  border-radius: 30px 0 0 30px;
}

.isotope-pager .next{
  border-radius: 0 30px 30px 0;
}

.isotope-pager a::before,.isotope-pager a:after{
  content: "";
  position: absolute;
  border-top: 30px solid transparent;
  border-bottom: 30px solid transparent;
}
.isotope-pager .num::before,.next::before{
  border-right: 20px solid #2c3e50;
  right: 100%;
}

.isotope-pager .num:after,.prev:after{
  border-right: 20px solid #f1f1f1;
  right: 0;
}





.overlay {
  position: absolute; 
  bottom: 0; 
  background: rgb(0, 0, 0);
  background: rgba(0, 0, 0, 0.5); /* Black see-through */
  color: #f1f1f1; 
  width: 100%;
  transition: .5s ease;
  opacity:0;
  color: white;
  font-size: 20px;
  padding: 20px;
  text-align: center;
}
.back-arrow i{
  font-size: 50px;
  color: #baff00;
}
.grid-item:hover .overlay {
  opacity: 1;
}
.image {
    font-family: 'Open Sans', sans-serif;
}
</style>
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


	<!-- Page section start -->
	
	<div class="page-section spad">
		<div class="container">
			<!-- portfolio filter menu -->
			<ul class="portfolio-filter">
				<li class="filter" data-filter="*">All</li>
				@foreach ($categories as $category)
					
				
				<li class="filter" data-filter=".{{$category->name}}">{{$category->name}}</li>
				@endforeach
			</ul>
		
		<!-- portfolio items -->
		<div class="portfolio-warp spad">
			<div id="portfolio">
				<div class="grid-sizer"></div>
				@foreach ($categories as $category)
				@foreach ($category->images as $image)
				<!-- portfolio item -->
				<div class="grid-item set-bg {{$category->name}}" data-setbg="images/{{$image->file}}"><a class="img-popup" href="images/{{$image->file}}"></a></div>
				@endforeach
				@endforeach
			</div>
		</div>
		<div class="container">
      <div class="row">
			<div class="pagination">
				<a href="#">01</a>
				<a href="" class="active">02</a>
				<a href="">03</a>
      </div>
      <div class="pagination back-arrow ml-auto mt-3">
        <a href="{{url('/')}}"><i class="fas fa-arrow-alt-circle-left"></i></a>
      </div>
    </div>
    </div>
  </div>
	</div>
	
	<!-- Page section end -->
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