<!DOCTYPE html>
<html lang="en">

<head>
	<title><?= $title ?></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,700,900" rel="stylesheet">

	<link rel="stylesheet" href="<?= base_url('assets/frontend/css/open-iconic-bootstrap.min.css') ?>">
	<link rel="stylesheet" href="<?= base_url('assets/frontend/css/animate.css') ?>">

	<link rel="stylesheet" href="<?= base_url('assets/frontend/css/owl.carousel.min.css') ?>">
	<link rel="stylesheet" href="<?= base_url('assets/frontend/css/owl.theme.default.min.css') ?>">
	<link rel="stylesheet" href="<?= base_url('assets/frontend/css/magnific-popup.css') ?>">

	<link rel="stylesheet" href="<?= base_url('assets/frontend/css/aos.css') ?>">

	<link rel="stylesheet" href="<?= base_url('assets/frontend/css/ionicons.min.css') ?>">

	<link rel="stylesheet" href="<?= base_url('assets/frontend/css/flaticon.css') ?>">
	<link rel="stylesheet" href="<?= base_url('assets/frontend/css/icomoon.css') ?>">
	<link rel="stylesheet" href="<?= base_url('assets/frontend/css/style.css') ?>">
</head>

<body>

	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
		<div class="container">
			<a class="navbar-brand" href="index.html"><span>Square.</span></a>
			<button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="oi oi-menu"></span> Menu
			</button>

			<div class="collapse navbar-collapse" id="ftco-nav">
				<ul class="navbar-nav nav ml-auto">
					<li class="nav-item"><a href="#" class="nav-link" data-nav-section="home"><span>Home</span></a></li>
					<li class="nav-item"><a href="#" class="nav-link" data-nav-section="about"><span>About</span></a></li>
					<li class="nav-item"><a href="#" class="nav-link" data-nav-section="contact"><span>Contact</span></a></li>
				</ul>
			</div>
		</div>
	</nav>

	<section class="hero-wrap js-fullheight" style="background-image: url('<?= base_url('assets/frontend/images/bg_1.jpg') ?>');" data-section="home">
		<div class="overlay"></div>
		<div class="container">
			<div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
				<div class="col-md-8 ftco-animate mt-5" data-scrollax=" properties: { translateY: '70%' }">
					<p class="d-flex align-items-center" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">
						<a href="https://vimeo.com/45830194" class="icon-video popup-vimeo d-flex justify-content-center align-items-center mr-3">
							<span class="ion-ios-play play mr-2"></span>
							<span class="watch">Watch Video</span>
						</a>
					</p>
					<h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">We have a passion in creating new and unique spaces</h1>
					<p class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Travel to the any corner of the world, without going around in circles</p>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section ftco-services ftco-no-pt">

	</section>

	<section class="ftco-counter img ftco-section ftco-no-pt ftco-no-pb" id="section-counter" data-section="about">
		<div class="container">
			<div class="row d-flex">
				<div class="col-md-6 col-lg-12">
					<div class="row justify-content-start pb-3">
						<div class="col-md-12 heading-section ftco-animate">
							<h2 class="mb-4">Selamat Datang di Website Pasar Sidamulya</h2>
							<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
							<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
							<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6 col-lg-4 justify-content-center counter-wrap ftco-animate d-flex">
							<div class="block-18 text-center p-4 mb-4 align-self-stretch d-flex">
								<div class="text">
									<strong class="number"><?= $pegawai ?></strong>
									<span>Data Pegawai</span>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-lg-4 justify-content-center counter-wrap ftco-animate d-flex">
							<div class="block-18 text-center py-4 px-3 mb-4 align-self-stretch d-flex">
								<div class="text">
									<strong class="number"><?= $pedagang ?></strong>
									<span>Data Pedagang</span>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-lg-4 justify-content-center counter-wrap ftco-animate d-flex">
							<div class="block-18 text-center py-4 px-3 mb-4 align-self-stretch d-flex">
								<div class="text">
									<strong class="number">
										<?php
										foreach ($setoran as $data) {
											echo 'Rp. ' . rupiah($data->total);
										}
										?>
									</strong>
									<span>Setoran Retribusi</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section contact-section" data-section="contact">
		<div class="container">
			<div class="row d-flex contact-info">
				<div class="col-md-6 col-lg-3 d-flex">
					<div class="align-self-stretch box p-4 text-center">
						<div class="icon d-flex align-items-center justify-content-center">
							<span class="icon-map-signs"></span>
						</div>
						<h3 class="mb-4">Address</h3>
						<p>198 West 21th Street, Suite 721 New York NY 10016</p>
					</div>
				</div>
				<div class="col-md-6 col-lg-3 d-flex">
					<div class="align-self-stretch box p-4 text-center">
						<div class="icon d-flex align-items-center justify-content-center">
							<span class="icon-phone2"></span>
						</div>
						<h3 class="mb-4">Contact Number</h3>
						<p><a href="tel://1234567920">+ 1235 2355 98</a></p>
					</div>
				</div>
				<div class="col-md-6 col-lg-3 d-flex">
					<div class="align-self-stretch box p-4 text-center">
						<div class="icon d-flex align-items-center justify-content-center">
							<span class="icon-paper-plane"></span>
						</div>
						<h3 class="mb-4">Email Address</h3>
						<p><a href="mailto:info@yoursite.com">info@yoursite.com</a></p>
					</div>
				</div>
				<div class="col-md-6 col-lg-3 d-flex">
					<div class="align-self-stretch box p-4 text-center">
						<div class="icon d-flex align-items-center justify-content-center">
							<span class="icon-globe"></span>
						</div>
						<h3 class="mb-4">Website</h3>
						<p><a href="#">yoursite.com</a></p>
					</div>
				</div>
			</div>
		</div>
	</section>


	<footer class="ftco-footer ftco-section">
		<div class="container">
			<div class="row mb-5">
				<div class="col-md">
					<div class="ftco-footer-widget mb-4">
						<h2 class="ftco-heading-2">Square</h2>
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
						<ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
							<li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
							<li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
							<li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
						</ul>
					</div>
				</div>
				<div class="col-md">
					<div class="ftco-footer-widget mb-4 ml-md-4">
						<h2 class="ftco-heading-2">Links</h2>
						<ul class="list-unstyled">
							<li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Home</a></li>
							<li><a href="#"><span class="icon-long-arrow-right mr-2"></span>About</a></li>
							<li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Services</a></li>
							<li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Projects</a></li>
							<li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Contact</a></li>
						</ul>
					</div>
				</div>
				<div class="col-md">
					<div class="ftco-footer-widget mb-4">
						<h2 class="ftco-heading-2">Services</h2>
						<ul class="list-unstyled">
							<li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Architectural Design</a></li>
							<li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Interior Design</a></li>
							<li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Exterior Design</a></li>
							<li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Lighting Design</a></li>
							<li><a href="#"><span class="icon-long-arrow-right mr-2"></span>AutoCAD Service</a></li>
						</ul>
					</div>
				</div>
				<div class="col-md">
					<div class="ftco-footer-widget mb-4">
						<h2 class="ftco-heading-2">Have a Questions?</h2>
						<div class="block-23 mb-3">
							<ul>
								<li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
								<li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></a></li>
								<li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@yourdomain.com</span></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 text-center">

					<p>
						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						Copyright &copy;<script>
							document.write(new Date().getFullYear());
						</script> All rights reserved | This template is made with <i class="icon-heart color-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
					</p>
				</div>
			</div>
		</div>
	</footer>



	<!-- loader -->
	<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
			<circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
			<circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" /></svg></div>


	<script src="<?= base_url('assets/frontend/js/jquery.min.js') ?>"></script>
	<script src="<?= base_url('assets/frontend/js/jquery-migrate-3.0.1.min.js') ?>"></script>
	<script src="<?= base_url('assets/frontend/js/popper.min.js') ?>"></script>
	<script src="<?= base_url('assets/frontend/js/bootstrap.min.js') ?>"></script>
	<script src="<?= base_url('assets/frontend/js/jquery.easing.1.3.js') ?>"></script>
	<script src="<?= base_url('assets/frontend/js/jquery.waypoints.min.js') ?>"></script>
	<script src="<?= base_url('assets/frontend/js/jquery.stellar.min.js') ?>"></script>
	<script src="<?= base_url('assets/frontend/js/owl.carousel.min.js') ?>"></script>
	<script src="<?= base_url('assets/frontend/js/jquery.magnific-popup.min.js') ?>"></script>
	<script src="<?= base_url('assets/frontend/js/aos.js') ?>"></script>
	<script src="<?= base_url('assets/frontend/js/jquery.animateNumber.min.js') ?>"></script>
	<script src="<?= base_url('assets/frontend/js/scrollax.min.js') ?>"></script>
	<script src="<?= base_url('assets/frontend/js/main.js') ?>"></script>

</body>

</html>