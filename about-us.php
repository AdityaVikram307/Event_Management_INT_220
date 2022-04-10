<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Surge</title>
	<link href="images/favicon2.png" rel="shortcut icon">

</head>

<body class="body-wrapper">
	<?php
	include('header.php');
	?>
	<section class="page-title bg-title overlay-dark">
		<div class="container">
			<div class="row">
				<div class="col-12 text-center">
					<div class="title">
						<h3>About Us</h3>
					</div>
					<ol class="breadcrumb p-0 m-0">
						<li class="breadcrumb-item"><a href="index.php">Home</a></li>
						<li class="breadcrumb-item active">About US</li>
					</ol>
				</div>
			</div>
		</div>
	</section>
	<section class="section about">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-6 align-self-center">
					<div class="image-block bg-about">
						<img class="img-fluid" src="images/speakers/featured-speaker.png" alt="">
					</div>
				</div>
				<div class="col-lg-8 col-md-6 align-self-center">
					<div class="content-block">
						<h2>About The <span class="alternate">Surge</span></h2>
						<div class="description-one">
							<p>
								Created by George G. Hermann, Surge is a three day business conference planned to help upcoming people larn stategies from world class entrepreneurs in one place.
							</p>
						</div>
						<div class="description-two">
							<p>This event is the world's largest and business and entrepreneur conference, and popular celebs have even participated in this.</p>
						</div>
						<ul class="list-inline">

						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="section testimonial">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="section-title">
						<h3>What People <span class="alternate">Say?</span></h3>
					</div>
				</div>
			</div>
			<div class="row mt-20">
				<div class="col-lg-4 col-md-6">
					<!-- Testimonial -->
					<div class="testimonial-item">
						<!-- Given Comment -->
						<div class="comment">
							<p>The people Surge brungs together in the Conference are amazing and i'm glad i got to be a part of it. Looking forward to many more amazing and groundbreaking conferences.</p>
						</div>
						<div class="person">
							<div class="media">
								<!-- Person Image -->
								<img src="images/testimonial1.jpg" height="65px" width="65px" alt="person-image">
								<div class="media-body">
									<!-- Person Name -->
									<div class="name">
										<p>Kevin Hart</p>
									</div>
									<!-- Profession -->
									<div class="profession">
										<p>Actor, Hollywood</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<!-- Testimonial -->
					<div class="testimonial-item">
						<!-- Given Comment -->
						<div class="comment">
							<p>I'm blown away by the caliber of speakers and audience at Surge Growth Conference. Amazing place for people looking to kickstart their business journey.</p>
						</div>
						<div class="person">
							<div class="media">
								<!-- Person Image -->
								<img src="images/testimonial2.jpg" height="65px" width="65px" alt="person-image">
								<div class="media-body">
									<!-- Person Name -->
									<div class="name">
										<p>Kerri Kaseem</p>
									</div>
									<!-- Profession -->
									<div class="profession">
										<p>Radio Host</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 mx-auto">
					<!-- Testimonial -->
					<div class="testimonial-item">
						<!-- Given Comment -->
						<div class="comment">
							<p>Surge is an amazing event of motivated people who gather to get more out of life and challenge obstacles instead of backing out.</p>
						</div>
						<div class="person">
							<div class="media">
								<!-- Person Image -->
								<img src="images/testimonials3.jpg" height="65px" width="65px" alt="person-image">
								<div class="media-body">
									<!-- Person Name -->
									<div class="name">
										<p>Naveen Jain</p>
									</div>
									<!-- Profession -->
									<div class="profession">
										<p>Entrepreneur</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="cta-subscribe bg-subscribe overlay-dark">
		<div class="container">
			<div class="row">
				<div class="col-md-6 mr-auto">
					<!-- Subscribe Content -->
					<div class="content">
						<h3>Subscribe to Our <span class="alternate">Newsletter</span></h3>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusm tempor</p>
					</div>
				</div>
				<div class="col-md-6 ml-auto align-self-center">
					<!-- Subscription form -->
					<form action="#" class="row">
						<div class="col-lg-8 col-md-12">
							<input type="email" class="form-control main white mb-lg-0" placeholder="Email">
						</div>
						<div class="col-lg-4 col-md-12">
							<div class="subscribe-button">
								<button onclick="myFunction()" class="btn btn-main-md">Subscribe</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>

	<?php
	include('footer.php');
	?>
	<script>
		function myFunction() {
			alert("We Will Contact You Shortly!!");
		}
	</script>
</body>

</html>