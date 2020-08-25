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
	<section class="page-header-section set-bg" data-setbg="{{url('img/header-bg-2.jpg')}}">
		<div class="container">
			<h1 class="header-title">Contact<span>.</span></h1>
		</div>
	</section>
	<!-- Page header section end -->


	<!-- Page section start -->
	<section class="page-section pt100">
		<div class="container pb100">
			<div class="section-title pt-5">
				<h1>Get in touch</h1>
			</div>
			<div class="row">
				<div class="col-lg-3 contact-info mb-5 mb-lg-0">
					<p>Address: 102, SHAAN COMPLEX, near Sakar 2, opposite M.J.LIBRARY, Ellisbridge, Ahmedabad, Gujarat 380006</p>
					<p>Phone: <a style="color: #baff00" href="tel:9033479425">+91 9033479425</a></p>
					<p>Email: info@rsdesign.co.in</p>
					<div class="cf-social">
						<a target="_blank" href="https://wa.me/919033479425"><i class="fa fa-whatsapp"></i></a>
						<a target="_blank" href="https://www.linkedin.com/in/rahul-shah-576a9b178"><i class="fa fa-linkedin"></i></a>
						<a target="_blank" href="https://www.instagram.com/myrsdesign/"><i class="fa fa-instagram"></i></a>
						<a target="_blank" href="https://www.facebook.com/shahrahul1204"><i class="fa fa-facebook"></i></a>
						<a target="_blank" href="https://twitter.com/rsdesign8"><i class="fa fa-twitter"></i></a>
					</div>
				</div>
				<div class="col-lg-9">
					<form class="contact-form">
						<input type="text" placeholder="Enter your name">
						<input type="text" placeholder="Enter your email address">
						<textarea placeholder="Message ..."></textarea>
						<button class="site-btn sb-dark">Send</button>
					</form>
				</div>
			</div>
		</div>
		<div class="container">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29378.099489844553!2d72.54663973094071!3d23.01413443725406!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e85184414edb3%3A0xb69c0faba9b1ab98!2sRS%20Design%20-%20Interior%20Designer%20-%20Architect%20-%20Ahmedabad!5e0!3m2!1sen!2sin!4v1588246746870!5m2!1sen!2sin" width="100%" height="250px" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
		</div>
	</section>
	<!-- Page section end -->



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
	
	<!-- load for map -->
	
	

</body>
</html>