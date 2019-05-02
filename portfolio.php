<?require_once 'inc/menu.php';?><!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="img/fav.png">
	<!-- Author Meta -->
	<meta name="author" content="colorlib">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title>Portfolio</title>

	<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,600,700,900" rel="stylesheet">
	<!--
			CSS
			============================================= -->
	<link rel="stylesheet" href="css/linearicons.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/magnific-popup.css">
	<link rel="stylesheet" href="css/nice-select.css">
	<link rel="stylesheet" href="css/animate.min.css">
	<link rel="stylesheet" href="css/owl.carousel.css">
	<link rel="stylesheet" href="css/main.css">
</head>

<body>

	<?php
	include'h1.php';
	 ?>
	<!-- start banner Area -->
	<section class="banner-area relative">
		<div class="container">
			<div class="row d-flex align-items-center justify-content-center">
				<div class="about-content col-lg-12">
					<h1 class="text-white">
						Portfolio
					</h1>
					<p class="link-nav">
						<span class="box">
							<a href="index.html">Home </a>
							<a href="portfolio.html">Portfolio</a></p>
					</span>
				</div>
			</div>
		</div>
	</section>
	<!-- End banner Area -->

	<!-- Start Work Area Area -->
	<section class="work-area section-gap-top section-gap-bottom-90" id="work">
		<div class="container">
			<div class="row d-flex justify-content-between align-items-end mb-80">
				<div class="col-lg-6">
					<div class="section-title">
						<h2>Latest Works</h2>
						<p>If you are looking at blank cassettes on the web, you may be very confused at the difference in price. You may see
							some for as low as $.17 each.</p>
					</div>
				</div>

				<div class="col-lg-6">
					<div class="filters">
						<ul>
							<li class="active" data-filter=".all">All Categories</li>
							<li data-filter=".branding">Branding</li>
							<li data-filter=".creative">Creative Work</li>
							<li data-filter=".web-design">Web Design</li>
						</ul>
					</div>
				</div>
			</div>

			<div class="filters-content">
				<div class="row grid">
					<div class="single-work col-lg-4 col-md-6 col-sm-12 all creative wow fadeInUp" data-wow-duration="2s">
						<div class="relative">
							<div class="thumb">
								<div class="overlay overlay-bg"></div>
								<img class="image img-fluid" src="img/work/w1.jpg" alt="">
							</div>
							<div class="middle">
								<h4>2D Vinyl Design</h4>
								<div class="cat">Client Project</div>
							</div>
							<a class="overlay" href="portfolio-details.html"></a>
						</div>
					</div>
					<div class="single-work col-lg-4 col-md-6 col-sm-12 all web-design branding wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.2s">
						<div class="relative">
							<div class="thumb">
								<div class="overlay overlay-bg"></div>
								<img class="image img-fluid" src="img/work/w2.jpg" alt="">
							</div>
							<div class="middle">
								<h4>2D Vinyl Design</h4>
								<div class="cat">Client Project</div>
							</div>
							<a class="overlay" href="portfolio-details.html"></a>
						</div>
					</div>
					<div class="single-work col-lg-4 col-md-6 col-sm-12 all branding web-design wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.4s">
						<div class="relative">
							<div class="thumb">
								<div class="overlay overlay-bg"></div>
								<img class="image img-fluid" src="img/work/w3.jpg" alt="">
							</div>
							<div class="middle">
								<h4>2D Vinyl Design</h4>
								<div class="cat">Client Project</div>
							</div>
							<a class="overlay" href="portfolio-details.html"></a>
						</div>
					</div>
					<div class="single-work col-lg-4 col-md-6 col-sm-12 all web-design wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.6s">
						<div class="relative">
							<div class="thumb">
								<div class="overlay overlay-bg"></div>
								<img class="image img-fluid" src="img/work/w6.jpg" alt="">
							</div>
							<div class="middle">
								<h4>2D Vinyl Design</h4>
								<div class="cat">Client Project</div>
							</div>
							<a class="overlay" href="portfolio-details.html"></a>
						</div>
					</div>
					<div class="single-work col-lg-4 col-md-6 col-sm-12 all creative wow fadeInUp" data-wow-duration="2s">
						<div class="relative">
							<div class="thumb">
								<div class="overlay overlay-bg"></div>
								<img class="image img-fluid" src="img/work/w4.jpg" alt="">
							</div>
							<div class="middle">
								<h4>2D Vinyl Design</h4>
								<div class="cat">Client Project</div>
							</div>
							<a class="overlay" href="portfolio-details.html"></a>
						</div>
					</div>
					<div class="single-work col-lg-4 col-md-6 col-sm-12 all branding wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.2s">
						<div class="relative">
							<div class="thumb">
								<div class="overlay overlay-bg"></div>
								<img class="image img-fluid" src="img/work/w5.jpg" alt="">
							</div>
							<div class="middle">
								<h4>2D Vinyl Design</h4>
								<div class="cat">Client Project</div>
							</div>
							<a class="overlay" href="portfolio-details.html"></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Work Area Area -->

	<?php include'cme.php';
	 include'fme.php';  ?>

	
</body>

</html>