<!DOCTYPE html>
<html lang="en">
<head>
@include('template.layouts.layout')

</head>
<body>
	<!-- header section -->

@include('template.content.header')
<!-- header section end -->


	<!-- Page header section start -->
	<section class="page-header-section set-bg" data-setbg="{{url('img/header-bg.jpg')}}">
		<div class="container">
			<h1 class="header-title">About us<span>.</span></h1>
		</div>
	</section>
	<!-- Page header section end -->



	<!-- Intro section start -->
	<section class="intro-section spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 intro-text">
					<h1>More <span>beauty</span> less <span>stress</span></h1>
					<div class="row">
						<div class="col-md-6">
							<h3>Co-Founder Says..</h3>
							<p><span class="border-bottom border-bold" style="border-bottom: 3px solid #baff00!important;">Welcome</span> to the RS Designs. Here is a little bit about me… I am proud to be an Indian by origin. I feel the same vibrant and welcoming nature in the Manchester of India. As we grow, we adapt to different cultures and communities, and I guess that’s how we develop the ability to adapt to different kinds of people. We learn to respect and enjoy every festive of every community.</p>
						</div>
						<div class="col-md-6">
							<h3>INSPIRATION</h3>
							<p><span class="border-bottom border-bold" style="border-bottom: 3px solid #baff00!important;">Thank You</span> for taking time out of your day to view my work! As a passionate interior designer, I love creating functional and expressive interior environments. This has truly been a dream come true for me and now I can assist others in bringing out the confidence within them to go after their own dreams!<br>Relax and let the creativity flow from within.<br>Namaste. </p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 pt-4">
					<img src="{{url('img/about.jpg')}}" alt="">
				</div>
			</div>
		</div>
	</section>
	<!-- Intro section end -->


	<!-- Testimonials section start -->
	<section class="testimonials-section spad" id="testimonials-section">
		<div class="testimonials-image-box"></div>
		<div class="container">
			<div class="row">
				<div class="col-lg-7 pl-lg-0 offset-lg-5 cta-content">
					<h1>Clients <span>testimonials</span></h1>
					<div class="qut">“</div>
					<div class="testimonials-slider" id="test-slider">
						@foreach ($comments as $comment)						
						<div class="ts-item">
							<p>{{$comment->comment}}</p>
						<h4>{{$comment->name}}</h4>
							<span>Google Review</span>
						</div>
						@endforeach
					</div>
					<div class="slide-num-holder test-slider" id="snh-2"></div>
				</div>
			</div>
		</div>
	</section>
	<!-- Testimonials section end -->



	<!-- Team section start -->
	<section class="team-section spad">
		<div class="container">
			<div class="section-title mb100">
				<h1>The Team</h1>
			</div>
			<div class="row">
				<div class="col-lg-4 col-md-6">
					<div class="team-member">
						<img src="{{url('img/team/1.jpg')}}" alt="">
						<div class="member-info">
							<h2>Our Clients</h2>
							<p>Cooperative & Supportive</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="team-member">
						<img src="{{url('img/team/2.jpg')}}" alt="">
						<div class="member-info">
							<h2>Rahul Shah</h2>
							<p>Co Founder | Designer</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="team-member">
						<img src="{{url('img/team/3.jpg')}}" alt="">
						<div class="member-info">
							<h2>Elegant Ideas</h2>
							<p>Our Partner</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Team section end -->


	<section class="promo-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-9 promo-text">
					<h1>In need of a <span>fabulouse</span> home?</h1>
					<p>“My vision is to create a gorgeous and comfortable home for
					everyone.”</p>
				</div>
				<div class="col-lg-3 text-lg-right">
					<a href="#" class="site-btn sb-dark mt-4" data-toggle="modal" data-target="#contactForm">Get in Touch</a>
				</div>
			</div>
		</div>
	</section>




<!-- footer section start -->

@include('template.content.footer')
<!-- footer section end -->


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