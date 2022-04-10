<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Gallery</title>
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
						<h3>Our Gallery</h3>
					</div>
					<ol class="breadcrumb p-0 m-0">
						<li class="breadcrumb-item"><a href="index.php">Home</a></li>
						<li class="breadcrumb-item active">Our Gallery</li>
					</ol>
				</div>
			</div>
		</div>
	</section>
	<section class="section gallery">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="controls">
						<button type="button" class="control mixitup-control-active" data-filter="all">All</button>
						<button type="button" class="control" data-filter=".conference">Conference</button>
						<button type="button" class="control" data-filter=".meeting">Meeting</button>
						<button type="button" class="control" data-filter=".events">Events</button>
						<button type="button" class="control" data-filter=".party">Party</button>
						<button type="button" class="control" data-filter=".concert">Concert</button>
					</div>
					<div class="gallery-wrapper less-gutter">
						<div class="gallery-item mix meeting">
							<div class="image-block">
								<div class="image">
									<img src="images/gallery/confere1.jpg" alt="gallery-image" class="img-fluid">
									<div class="primary-overlay">
										<a class="image-popup" data-effect="mfp-with-zoom" href="images/gallery/confere1.jpg"><i class="fa fa-picture-o"></i></a>
									</div>
								</div>
							</div>
						</div>
						<div class="gallery-item mix party events">
							<div class="image-block">
								<div class="image">
									<img src="images/gallery/gallery1.jpg" alt="gallery-image" class="img-fluid">
									<div class="primary-overlay">
										<a class="image-popup" data-effect="mfp-with-zoom" href="images/gallery/gallery1.jpg"><i class="fa fa-picture-o"></i></a>
									</div>
								</div>
							</div>
						</div>
						<div class="gallery-item mix meeting party">
							<div class="image-block">
								<div class="image">
									<img src="images/gallery/gallery4.jpg" alt="gallery-image" class="img-fluid">
									<div class="primary-overlay">
										<a class="image-popup" data-effect="mfp-with-zoom" href="images/gallery/gallery4.jpg"><i class="fa fa-picture-o"></i></a>
									</div>
								</div>
							</div>
						</div>
						<div class="gallery-item mix meeting concert">
							<div class="image-block">
								<div class="image">
									<img src="images/gallery/concert1.jpg" alt="gallery-image" class="img-fluid">
									<div class="primary-overlay">
										<a class="image-popup" data-effect="mfp-with-zoom" href="images/gallery/concert1.jpg"><i class="fa fa-picture-o"></i></a>
									</div>
								</div>
							</div>
						</div>
						<div class="gallery-item mix concert party">
							<div class="image-block">
								<div class="image">
									<img src="images/gallery/concert2.jpg" alt="gallery-image" class="img-fluid">
									<div class="primary-overlay">
										<a class="image-popup" data-effect="mfp-with-zoom" href="images/gallery/concert2.jpg"><i class="fa fa-picture-o"></i></a>
									</div>
								</div>
							</div>
						</div>
						<div class="gallery-item mix events conference">
							<div class="image-block">
								<div class="image">
									<img src="images/gallery/confere2.webp" alt="gallery-image" class="img-fluid">
									<div class="primary-overlay">
										<a class="image-popup" data-effect="mfp-with-zoom" href="images/gallery/confere2.webp"><i class="fa fa-picture-o"></i></a>
									</div>
								</div>
							</div>
						</div>
						<div class="gallery-item mix party conference">
							<div class="image-block">
								<div class="image">
									<img src="images/gallery/fest1.webp" alt="gallery-image" class="img-fluid">
									<div class="primary-overlay">
										<a class="image-popup" data-effect="mfp-with-zoom" href="images/gallery/fest1.webp"><i class="fa fa-picture-o"></i></a>
									</div>
								</div>
							</div>
						</div>
						<div class="gallery-item mix events conference">
							<div class="image-block">
								<div class="image">
									<img src="images/gallery/confere3.jpg" alt="gallery-image" class="img-fluid">
									<div class="primary-overlay">
										<a class="image-popup" data-effect="mfp-with-zoom" href="images/gallery/confere3.jpg"><i class="fa fa-picture-o"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<?php
	include('footer.php');
	?>
</body>

</html>