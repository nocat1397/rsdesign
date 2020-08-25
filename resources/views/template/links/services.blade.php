<!DOCTYPE html>
<html lang="en">
<head>

    @include('template.layouts.layout')

<style type="text/css">
	#more1 {display: none;}
	#more2 {display: none;}
	#more3 {display: none;}
	#more4 {display: none;}
	#more5 {display: none;}
	#more6 {display: none;}
</style>
</head>
<body>
	<!-- header section -->
@include('template.content.header')
<!-- header section end -->

	<!-- Page header section start -->
	<section class="page-header-section set-bg" data-setbg="{{url('img/header-bg.jpg')}}">
		<div class="container">
			<h1 class="header-title">Services<span>.</span></h1>
		</div>
	</section>
	<!-- Page header section end -->



	<!-- Intro section start -->
	<section class="intro-section spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-5">
					<div class="service-slider">
						<div class="ss-single">
							<img src="{{url('img/service/1.jpg')}}" alt="">
						</div>
						<div class="ss-single">
							<img src="{{url('img/service/2.jpg')}}" alt="">
						</div>
						<div class="ss-single">
							<img src="{{url('img/service/3.jpg')}}" alt="">
						</div>
					</div>
				</div>
				<div class="col-lg-7 service-text">
					<h1>We offer top quality project <span>services</span></h1>
					<p>Obviously the interior has to match the house but most importantly it has to match the people who live in it. Maybe you feel like your house doesn’t represent who you are. You are possibly about to renovate your house or buy a new one.
It’s probably one of the most exciting and stressful experiences of your life. It makes sense to hire a professional to help you transform your dreams into reality.<br>Every house is different and each owner has their own specific needs and tastes. That makes each interior design tailor-made. Nevertheless, the process of an interior design is often the same. If you are interested in the complete service, we will follow all the steps below.</p>
				</div>
			</div>
		</div>
	</section>
	<!-- Intro section end -->


	<!-- Service box section start -->
	<div class="service-box-section spad set-bg" data-setbg="{{url('img/service-bg.jpg')}}">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-6">
					<div class="solid-service-box">
						<h2>01.</h2>
						<h3>Find your happy place</h3>
						<p>You deserve a home that is functional and stylish, today. Don’t put it off until the kids are older or you have more time. We can create a beautiful space that fits your needs so you don’t have to be embarrassed to host book club next month.</p>
					</div>
				</div>

				<div class="col-lg-4 col-md-6">
					<div class="solid-service-box">
						<h2>02.</h2>
						<h3>Delightfully affordable</h3>
						<p>We believe that interior design should be accessible to everyone. That’s why Havenly packages are designed to be affordable, and our designers are trained to work within your budget.</p>
					</div>
				</div>
				<div class="col-lg-4 col-md-12">
					<div class="solid-service-box">
						<h2>03.</h2>
						<h3>Create a lasting relationship</h3>
						<p>Your Havenly pro is your friend, your guide, and your partner in home design. They’ll take care of your needs, help you create a custom space that grows with you, and they’re only a message away.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Service box section end -->


	<!-- Service section start -->
	<section class="service-section spad">
		<div class="container">
			<div class="section-title">
				<h2>Services</h2>
			</div>
			<div class="row">
				<div class="col-lg-4 col-md-6">
					<div class="service-box">
						<div class="sb-icon">
							<div class="sb-img-icon">
								<img src="{{url('img/icon/dark/1.png')}}" alt="">
							</div>
						</div>
						<h3>INITIAL CONSULTATION</h3>
						<p>All you need to do is get in touch with me and tell me what you’re looking for, the rest will fall into place.<span id="dots1">...</span><span id="more1"> Most probably we will set up an initial consultation at your place where we can discuss all your interior questions in detail. During the consultation I will already start coming up with solutions in my head and the concept design will start to take shape. Then I will make a tailor-made quote specific to your situation and then send it to you for your approval.</span></p>
						<button onclick="readMore1()" class="readmore border-0" id="myBtn1">READ MORE</button>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="service-box">
						<div class="sb-icon">
							<div class="sb-img-icon">
								<img src="{{url('img/icon/dark/2.png')}}" alt="">
							</div>
						</div>
						<h3>CONCEPT DESIGN</h3>
						<p>Yay! You agree with the quote and you can’t wait to see the design. I can finally start doing what I’m<span id="dots2">...</span><span id="more2"> best at: transforming ideas into images. Along the way I ask for your feedback on some reference pictures to get a better idea of your taste. After a few weeks I present you with the floor plans and the 3D views (often even a walk-through animation!) complete with a lighting plan and with suggestions for layout, colours, materials and eventually custom-made elements.</span></p>
						<button onclick="readMore2()" class="readmore border-0" id="myBtn2">READ MORE</button>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="service-box">
						<div class="sb-icon">
							<div class="sb-img-icon">
								<img src="{{url('img/icon/dark/3.png')}}" alt="">
							</div>
						</div>
						<h3 class="mb-lg-0">DESIGN DEVELOPMENT AND SOURCING</h3>
						<p>Now I have a good idea about your ideal concept design, I go into the details and start checking the<span id="dots3">...</span><span id="more3"> feasibility of the design with a constructor, a furniture maker and with the municipality in case a building permit is needed. I look for contractors and suppliers and ask for quotations on your behalf, so you can compare prices and choose who you want to hire and which products you want to buy. This is where the design goes through many revisions until you are completely satisfied. I make specific drawings with measures for the contractors. In the meantime, I am busy planning the delivery of the products and the activities of the contractors for an overall view of the project.</span></p>
						<button onclick="readMore3()" class="readmore border-0" id="myBtn3">READ MORE</button>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="service-box">
						<div class="sb-icon">
							<div class="sb-img-icon">
								<img src="{{url('img/icon/dark/4.png')}}" alt="">
							</div>
						</div>
						<h3 class="mb-lg-0">CONSTRUCTION AND SITE SUPERVISION</h3>
						<p>Congratulations, you have hired a contractor and ordered the products. The contractor starts<span id="dots4">...</span><span id="more4"> building, the tailor-made cabinets are being made and the furniture deliveries start. I am on the building site on a regular basis to ensure that your project is delivered in accordance with the drawings we created together. The design might go through minor revisions. I am in a constant dialogue with the contractors, suppliers and with you to come to the very best solution.</span></p>
						<button onclick="readMore4()" class="readmore border-0" id="myBtn4">READ MORE</button>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="service-box">
						<div class="sb-icon">
							<div class="sb-img-icon">
								<img src="{{url('img/icon/dark/5.png')}}" alt="">
							</div>
						</div>
						<h3>COMPLETION AND STYLING</h3>
						<p>The contractor has finished the construction at this stage and you can smell the fresh paint.<span id="dots5">...</span><span id="more5"> Together we go through the work that has been done and make sure everything is exactly as expected. When the time is right, I connect the dots, dot the I’s and cross the T’s… in other words, I put the finishing touch with accessories and plants. For a couple of hours your house is the set of a photo shoot. You will be surprised how good it looks, I can’t wait to see that smile on your face! After that, you can finally start enjoying the calm atmosphere and the warm feeling of really being home. Welcome to your dream home.</span></p>
						<button onclick="readMore5()" class="readmore border-0" id="myBtn5">READ MORE</button>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="service-box">
						<div class="sb-icon">
							<div class="sb-img-icon">
								<img src="{{url('img/icon/dark/6.png')}}" alt="">
							</div>
						</div>
						<h3>AFTER CARE</h3>
						<p>After it’s all finished and you have moved in, I love to go back to the place<span id="dots6">...</span><span id="more6"> where it all began. I’d love to hear from you and make sure you’re still happy with the result. How about an espresso at your place while we both sit back and reminisce about this incredible experience together?</span></p>
						<button onclick="readMore6()" class="readmore border-0" id="myBtn6">READ MORE</button>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Service section end -->



	<section class="promo-section pt-0">
		<div class="promo-box set-bg" data-setbg="{{url('img/bg.jpg')}}">
			<div class="container">
				<div class="row">
					<div class="col-lg-9 promo-text">
						<h1>In need of a <span>fabulouse</span> home?</h1>
						<p>“My vision is to create a gorgeous and comfortable home for everyone.”</p>
					</div>
					<div class="col-lg-3 text-lg-right">
						<a href="#" class="site-btn sb-light mt-4" data-toggle="modal" data-target="#contactForm">Get in Touch</a>
					</div>
				</div>
			</div>
		</div>
	</section>




<!-- footer section start -->

@include('template.content.footer')
<!-- footer section end -->
@include('template.layouts.script')
	
</body>
</html>