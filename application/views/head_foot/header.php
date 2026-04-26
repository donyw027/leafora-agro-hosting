<!doctype html>
<html class="no-js" lang="en">

<head>
	<!-- Meta Tags -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="hydroponic, agriculture, farming equipment, fertilizers, greenhouse, Indonesia">
	<meta name="description" content="Leafora Agro Industri - Integrated Solutions for Modern Hydroponics and Agricultural Supplies.">
	<meta name='copyright' content=''>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Title -->
	<title><?= $title; ?></title>

	<!-- Favicon -->
	<link rel="icon" href="<?= base_url('assets/img/logo.jpg') ?>">

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

	<!-- Frontend Bootstrap CSS -->
	<link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>">

	<link rel="stylesheet" href="<?= base_url('assets/css/nice-select.css') ?>">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
	<link rel="stylesheet" href="<?= base_url('assets/css/icofont.css') ?>">
	<link rel="stylesheet" href="<?= base_url('assets/css/slicknav.min.css') ?>">
	<link rel="stylesheet" href="<?= base_url('assets/css/owl-carousel.css') ?>">
	<link rel="stylesheet" href="<?= base_url('assets/css/datepicker.css') ?>">
	<link rel="stylesheet" href="<?= base_url('assets/css/animate.min.css') ?>">
	<link rel="stylesheet" href="<?= base_url('assets/css/magnific-popup.css') ?>">
	<link rel="stylesheet" href="<?= base_url('assets/css/normalize.css') ?>">
	<link rel="stylesheet" href="<?= base_url('assets/css/leafora-modern.css') ?>">

	<link rel="stylesheet" href="<?= base_url('assets/style.css') ?>">
	<link rel="stylesheet" href="<?= base_url('assets/css/responsive.css') ?>">
	<link rel="stylesheet" href="<?= base_url('assets/css/frontend-fixes.css') ?>">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

	<style>
		.capacity-section {
			padding: 5px 5px;
		}

		.capacity-box {
			background: white;
			padding: 15px 15px;
			border-radius: 12px;
			box-shadow: 0 6px 18px rgba(0, 0, 0, 0.1);
			transition: transform 0.3s ease;
		}

		.capacity-box:hover {
			transform: translateY(-8px);
		}

		.capacity-title {
			font-size: 1.5em;
			margin-bottom: 10px;
			color: #174c70;
			font-weight: 600;
		}

		.capacity-number {
			font-size: 1.8em;
			font-weight: bold;
			color: #222;
		}

		@media (max-width: 767px) {
			.capacity-box {
				padding: 20px 10px;
			}

			.capacity-number {
				font-size: 1.5em;
			}
		}
	</style>
</head>

<body class="frontend-site">

	<!-- Preloader -->
	<div id="preloader-logo">
		<div class="logo-wrapper">
			<img src="<?= base_url('assets/img/logo4.jpg') ?>" alt="Leafora Agro Industri" />
		</div>
	</div>

	<!-- Header Area -->
	<!-- Header Area -->
	<header class="header leafora-header">

		<!-- Topbar -->
		<div class="topbar">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-6 col-md-5 col-12">
						<?= $this->session->flashdata('pesan'); ?>
					</div>
					<div class="col-lg-6 col-md-7 col-12">
						<ul class="top-contact d-flex justify-content-md-end justify-content-center mb-0">
							<li>
								<i class="fa fa-phone"></i>
								<a href="https://wa.me/6281990420823" target="_blank">+62 819-9042-0823</a>
							</li>
							<li>
								<i class="fa fa-envelope"></i>
								<a href="mailto:agrowpacific@gmail.com">agrowpacific@gmail.com</a> <br>
								<i class="fa fa-envelope"></i>
								<a href="mailto:marketing@leaforaagro.com">marketing@leaforaagro.com</a>

							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!-- End Topbar -->

		<!-- Header Inner -->
		<div class="header-inner">
			<div class="container">
				<div class="inner">
					<div class="row align-items-center">

						<div class="col-lg-3 col-md-4 col-8">
							<div class="logo leafora-brand-wrap">
								<a href="<?= site_url('home') ?>" class="leafora-brand">
									<img src="<?= base_url('assets/img/logoagro.jpg') ?>" alt="Leafora Agro Industri">
									<div class="leafora-brand-text">
										<h4>TESSSSSSLeafora Agro Industri</h4>
									</div>
								</a>
							</div>
						</div>

						<div class="col-lg-9 col-md-8 col-4">
							<div class="mobile-nav"></div>

							<div class="main-menu leafora-menu-wrap">
								<nav class="navigation">
									<ul class="nav menu leafora-menu justify-content-end">
										<li><a href="<?= site_url('home') ?>">Home</a></li>
										<li><a href="<?= site_url('about') ?>">About Us</a></li>
										<li><a href="<?= site_url('produk') ?>">Products</a></li>
										<li><a href="<?= site_url('layanan') ?>">Services</a></li>
										<li><a href="<?= site_url('blog') ?>">Blog</a></li>
										<li><a href="<?= site_url('galery') ?>">Gallery</a></li>
										<li><a href="<?= site_url('contact') ?>">Contact Us</a></li>
									</ul>
								</nav>

								<div class="leafora-header-cta d-none d-lg-block">
									<a href="<?= site_url('contact') ?>" class="btn primary">Send Inquiry</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- End Header Inner -->
	</header>
	<!-- End Header Area -->