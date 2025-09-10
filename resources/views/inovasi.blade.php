<!DOCTYPE HTML>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="shortcut icon" href="{{ asset('assets/images/stp.png') }}" type="">

  <title> STP ITPLN </title>

  <!-- bootstrap core css -->
	<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

  <!--owl slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
  <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

  <!-- font awesome style -->
	<link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}">

  <!-- Custom styles for this template -->
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

  <!-- responsive style -->
  <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">

	<link rel="stylesheet" href="{{ asset('assets/css/backtotop.css') }}">

	<style>
		/* Header */
		.header_section {
		position: sticky;
		top: 0;
		z-index: 1000;
		box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05); /* opsional: bayangan bawah */
		}

		.header_section.scrolled {
		background-color: #ffffff; /* warna latar setelah discroll */
		transition: background-color 0.3s ease;
		}

		.header_section.scrolled .nav-link {
		color: #000 !important; /* ubah warna teks jadi hitam */
		}

		/* Custom Styles for Banner */
		.breadcrum-banner {
			background: linear-gradient(135deg, rgba(0, 40, 80, 0.9), rgba(30, 75, 120, 0.9), rgba(50, 100, 150, 0.9)),
						url({{ asset('assets/new_asset/img/mask/breadcrumbmask.png') }});
			background-size: cover;
			background-position: center;
			padding: 80px 15px;
			color: white;
			border-radius: 15px;
			margin-bottom: 40px;
			position: relative;
			box-shadow: 0 10px 40px rgba(0, 0, 0, 0.2);
		}

		.mask1 {
			position: absolute;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
			z-index: 1;
			opacity: 0.3;
		}

		.bannerArea__title h1 {
			font-family: 'Poppins', sans-serif;
			font-size: 48px;
			letter-spacing: 2px;
			line-height: 1.4;
			text-shadow: 3px 3px 6px rgba(0,0,0,0.3);
		}

		.bannerArea__title p {
			font-family: 'Roboto', sans-serif;
			font-size: 20px;
			letter-spacing: 1px;
			color: #f0f0f0;
			line-height: 1.8;
			text-shadow: 1px 1px 5px rgba(0,0,0,0.15);
			padding-right: 10px;
		}

		.breadcrumb-wrapper {
			margin-top: 20px;
		}

		.breadcrumb {
			background: transparent;
			padding: 0;
		}

		.breadcrumb-item a {
			color: #00bfff;
			font-weight: bold;
			font-size: 16px;
			transition: color 0.3s ease;
		}

		.breadcrumb-item a:hover {
			color: #fff; /* Hover effect pada breadcrumb */
		}

		.breadcrumb-item.active {
			color: #00bfff;
			font-weight: bold;
			font-size: 16px;
		}

		.banner-image img {
			border-radius: 20px;
			box-shadow: 0 15px 45px rgba(0, 0, 0, 0.25);
			transition: transform 0.3s ease, filter 0.3s ease;
		}

		.banner-image img:hover {
			transform: scale(1.05); /* Efek zoom pada gambar */
			filter: brightness(1.1); /* Pencerahan gambar saat hover */
		}

		/* Responsive Design */
		@media (max-width: 768px) {
			.bannerArea__title h1 {
				font-size: 36px;
			}

			.bannerArea__title p {
				font-size: 18px;
			}

			.breadcrumb-item a, .breadcrumb-item.active {
				font-size: 14px;
			}

			.breadcrum-banner {
				padding: 60px 10px;
			}
		}

		/* OUR PROJECT AREA*/
		@import url('https://fonts.googleapis.com/css2?family=Orbitron:wght@600&display=swap');

		.project__container {
		padding: 60px 15px;
		}

		.project-wrapper {
		background: linear-gradient(145deg, #0f1b3f, #08102b);
		border-radius: 20px;
		box-shadow: 0 8px 30px rgba(0, 255, 255, 0.05);
		padding: 25px;
		transition: all 0.4s ease-in-out;
		border: 1px solid rgba(0, 255, 255, 0.08);
		margin-bottom: 40px;
		}

		.project-wrapper:hover {
		transform: translateY(-10px);
		box-shadow: 0 12px 40px rgba(0, 255, 255, 0.3);
		border-color: rgba(0, 255, 255, 0.3);
		}

		.project-wrapper-image img {
		width: 150px;
		padding: 15px;
		margin: 15px auto;
		display: block;
		border-radius: 15px;
		box-shadow: 0 0 15px rgba(0, 255, 255, 0.3);
		}

		.project-wrapper-title h3 {
		font-size: 24px;
		color: #00ffff;
		text-shadow: 0 0 5px #00ffff, 0 0 10px #00ffff;
		margin-top: 10px;
		}

		.project-wrapper-title span {
		display: block;
		font-size: 14px;
		color: #aadfff;
		margin-bottom: 10px;
		}

		.project-wrapper-title p {
		font-size: 15px;
		color: #d0f8ff;
		line-height: 1.6;
		transition: all 0.3s ease;
		}

		.project-wrapper:hover p::after {
		content: " 🚀";
		animation: float 1.5s infinite ease-in-out;
		margin-left: 6px;
		}

		@keyframes float {
		0% { transform: translateY(0px); }
		50% { transform: translateY(-3px); }
		100% { transform: translateY(0px); }
		}

		.primary__button {
		padding: 10px 20px;
		border-radius: 30px;
		font-weight: 600;
		cursor: pointer;
		text-decoration: none;
		transition: 0.3s ease;
		display: inline-block;
		}

		.primary__button-outline {
		border: 2px solid #00ffff;
		color: #00ffff;
		background-color: transparent;
		}

		.primary__button-outline:hover {
		background-color: #00ffff;
		color: #000;
		box-shadow: 0 0 15px #00ffff, 0 0 25px #00ffff;
		}

		.primary__button-bgPrimary {
		background-color: #00ffff;
		color: #000;
		box-shadow: 0 0 10px rgb(18, 96, 96), 0 0 20px rgb(17, 89, 89);
		}

		.primary__button-bgPrimary:hover {
		background-color: #009eff;
		box-shadow: 0 0 20px #009eff, 0 0 40px #00ffff;
		color: #fff;
		}

		.load-more-button {
		text-align: center;
		margin-top: 30px;
		}

		/* CALL TO ACTION */
		.callto-action {
		position: relative;
		background: linear-gradient(135deg, #0a0f2c, #001436);
		padding: 80px 0;
		overflow: hidden;
		border-top: 2px solid #00ffff40;
		border-bottom: 2px solid #00ffff40;
		box-shadow: inset 0 0 80px rgba(0, 255, 255, 0.1);
		}

		.callto-action-text h2 {
		color: #00ffff;
		font-size: 32px;
		margin-bottom: 20px;
		text-shadow: 0 0 8px #00ffffaa;
		}

		.callto-action-text p {
		color: #e0f7ff;
		font-size: 16px;
		line-height: 1.7;
		margin-bottom: 30px;
		max-width: 600px;
		}

		.callto-action-image img {
		width: 100%;
		max-width: 400px;
		animation: floatGlow 6s ease-in-out infinite;
		filter: drop-shadow(0 0 12px #00ffff55);
		}

		@keyframes floatGlow {
		0% { transform: translateY(0); }
		50% { transform: translateY(-10px); }
		100% { transform: translateY(0); }
		}

		.mask-group {
		position: absolute;
		bottom: 0;
		right: 0;
		opacity: 0.1;
		z-index: 0;
		}

		.mask-group .mask01 {
		max-width: 300px;
		}

        @keyframes flashHighlight {
        0% { background-color: yellow; }
        100% { background-color: transparent; }
        }

        .highlight-flash {
        animation: flashHighlight 2s ease-in-out;
        }

        @media (max-width: 768px) {
            .nav-item.position-relative {
                width: 100%;
                display: flex;
                justify-content: center; /* Tengahkan ikon */
                position: relative;
                margin-left: -40px;
            }

            .nav-item.position-relative .nav-link {
                margin-top: 8px; /* Tambah margin atas ikon */
                padding: 0 !important;
            }

            #searchInputWrapper {
                position: absolute !important;
                margin-left:-12px;
                top: 100%;
                left: 58%; /* Geser input ke kanan */
                transform: translateX(-50%);
                margin-top: 5px;
                z-index: 1000;
            }

            #searchInputWrapper input {
                width: 140px !important;
                font-size: 12px;
            }
        }

	</style>

</head>

<body class="sub_page">

  <div class="hero_area">

    <div class="hero_bg_box">
      <div class="bg_img_box">
				<img src="{{ asset('assets/images/hero-bg.png') }}" alt="">
      </div>
    </div>

    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="{{ route('index') }}" style="width: 29%;">
			<span>
				<img style="width:50%;" src="{{ asset('assets/images/stp1.png') }}" alt="">
            </span>
          </a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class=""> </span>
          </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav" style="padding: 30px; font-size:12px">
						<li class="nav-item">
							<!-- Home -->
							<a class="nav-link" href="{{ url('/') }}">Home<span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item" style="position: relative;">
							<a class="nav-link" href="javascript:void(0)" id="inkubasiLink" onclick="toggleSubMenu()" onmouseenter="showSubMenu()" onmouseleave="delayedHideSubMenu()">INKUBASI</a>
							<ul id="subMenu" style="display: none; position: absolute; top: 100%; left: 0; background-color: #ffffff; border: 1px solid #ddd; padding: 5px 0; list-style: none; min-width: 220px; box-shadow: 0 4px 8px rgba(0,0,0,0.15); z-index: 999; border-radius: 8px; margin-top: 8px;"
							onmouseenter="cancelHideSubMenu()" onmouseleave="hideSubMenu()">
								<li style="padding: 10px 20px; font-size: 10px;">
									<a href="https://plnconnext.id/" target="_blank" style="color: #333; text-decoration: none; display: block; width: 100%; transition: background-color 0.3s;" onmouseover="this.style.backgroundColor='#f0f0f0'" onmouseout="this.style.backgroundColor='transparent'">INKUBASI PLN BKI</a>
								</li>
								<li style="padding: 10px 20px; font-size: 10px;">
									<a href="{{ route('login') }}" style="color: #333; text-decoration: none; display: block; width: 100%; transition: background-color 0.3s;" onmouseover="this.style.backgroundColor='#f0f0f0'" onmouseout="this.style.backgroundColor='transparent'">INKUBASI IT PLN</a>
								</li>
								<li style="padding: 10px 20px; font-size: 10px;">
									<a href="{{ route('inkubasi') }}" style="color: #333; text-decoration: none; display: block; width: 100%; transition: background-color 0.3s;" onmouseover="this.style.backgroundColor='#f0f0f0'" onmouseout="this.style.backgroundColor='transparent'">INKUBASI UMUM</a>
								</li>
							</ul>
						</li>
						<li class="nav-item">
							<!-- About -->
							<a class="nav-link" href="{{ route('about') }}">About</a>
						</li>
						<li class="nav-item active">
							<!-- Inovasi -->
							<a class="nav-link" href="{{ route('inovasi') }}">Inovasi</a>
						</li>
						<li class="nav-item">
							<!-- HKI -->
							<a class="nav-link" href="{{ route('login') }}">HKI</a>
						</li>
                        {{-- Penyewaan --}}
                        <li class="nav-item" style="position: relative;">
                            <a class="nav-link" href="javascript:void(0)" id="penyewaanLink" onclick="togglePenyewaanSubMenu()" onmouseenter="showPenyewaanSubMenu()" onmouseleave="delayedHidePenyewaanSubMenu()">Penyewaan</a>
                            <ul id="penyewaanSubMenu" style="display: none; position: absolute; top: 100%; left: 0; background-color: #ffffff; border: 1px solid #ddd; padding: 5px 0; list-style: none; min-width: 220px; box-shadow: 0 4px 8px rgba(0,0,0,0.15); z-index: 999; border-radius: 8px; margin-top: 8px;"
                                onmouseenter="cancelHidePenyewaanSubMenu()" onmouseleave="hidePenyewaanSubMenu()">
                                <li style="padding: 10px 20px; font-size: 10px;">
                                <a href="{{ route('exclusive') }}" style="color: #333; text-decoration: none; display: block; width: 100%; transition: background-color 0.3s;" onmouseover="this.style.backgroundColor='#f0f0f0'" onmouseout="this.style.backgroundColor='transparent'">Exclusive</a>
                                </li>
                                <li style="padding: 10px 20px; font-size: 10px;">
                                <a href="{{ route('laboratorium') }}" style="color: #333; text-decoration: none; display: block; width: 100%; transition: background-color 0.3s;" onmouseover="this.style.backgroundColor='#f0f0f0'" onmouseout="this.style.backgroundColor='transparent'">Laboratorium</a>
                                </li>
                            </ul>
                        </li>
						<li class="nav-item">
							<!-- Blog -->
							<a class="nav-link" href="{{ route('blogs') }}">Blog</a>
						</li>
						<li class="nav-item">
							<!-- Contact -->
							<a class="nav-link" href="{{ route('contact') }}">Contact</a>
						</li>
						<li class="nav-item">
							<!-- Login -->
							<a class="nav-link"href="{{ route('login') }}"><i class="fa fa-user" aria-hidden="true"></i> Login</a>
						</li>
						<li class="nav-item position-relative">
                            <!-- Tombol ikon search -->
                            <a style="margin-right: -40px; padding-left: 10px; padding-right:20px" class="nav-link" href="javascript:void(0)" onclick="toggleSearchInput()" title="Cari">
                                <i class="fas fa-search"></i>
                            </a>

                            <!-- Input pencarian kecil di bawah ikon -->
                            <div id="searchInputWrapper" style="display: none; position: absolute; top: 100%; right: 0; margin-top: 5px; z-index: 1000;">
                                <input type="text" id="searchInput" placeholder="Search for..." style="height: 26px; font-size: 12px; width: 180px;" class="form-control form-control-sm rounded-pill shadow-sm">
                            </div>
                        </li>
					</ul>
				</div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
  </div>


	<!-- BEGIN BREADCRUMP -->
	<section class="banner-area breadcrumArea mb-0" >
		<div class="container custom-container" style="margin-top: 20px;">
			<div class="breadcrum-banner" style="background: linear-gradient(135deg, hsla(210, 100.00%, 15.70%, 0.90), rgba(4, 31, 59, 0.9), rgba(5, 19, 35, 0.9)),
						url({{ asset('assets/new_asset/img/mask/breadcrumbmask.png') }});
						background-size: cover;
						background-position: center;
						padding: 80px 15px;
						color: white;
						border-radius: 15px;
						margin-bottom: 40px;
						position: relative; box-shadow: 0 10px 40px rgba(0,0,0,0.2);">
				<div class="row d-flex align-items-center" style="z-index: 2; position: relative; margin-top: -60px; margin-bottom: -40px; padding:20px">
					<div class="col-lg-6 order-2 order-lg-1">
						<div class="bannerArea__wrapper" data-aos="fade-up" data-aos-offset="500" style="transition: transform 0.3s ease-in-out;">
							<div class="bannerArea__title">
								<h1 style="font-family: 'Poppins', sans-serif; font-size: 35px; letter-spacing: 2px; line-height: 1.4; text-shadow: 3px 3px 6px rgba(0,0,0,0.3);">
									Our Inovations
								</h1>
							</div>
							<p style="font-family: 'Roboto', sans-serif; font-size: 15px; letter-spacing: 1px; color: #f0f0f0; line-height: 1.8; text-shadow: 1px 1px 5px rgba(0,0,0,0.15); padding-right: 10px;">
								STP ITPLN menciptakan inovasi teknologi untuk mendorong bisnis dan industri dengan solusi yang efisien, berkelanjutan, dan kompetitif.
							</p>
						</div>
					</div>
					<div class="col-lg-6 order-1 order-lg-2">
						<div class="banner-image d-flex justify-content-center" data-aos="fade-left" data-aos-delay="300" data-aos-offset="500">
							<img src="{{ asset('assets/new_asset/img/fotokita.jpg') }}"" alt="banner-image" class="img-fluid banner-img" style="border-radius: 20px; width: 80%; box-shadow: 0 15px 45px rgba(0, 0, 0, 0.25);"/>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<div class="breadcrumb-wrapper">
							<nav aria-label="breadcrumb" style="margin-bottom: -400px; padding-left: 25px">
								<ol class="breadcrumb" style="background: transparent; padding: 0; " >
									<li class="breadcrumb-item">
										<a href="{{ route('index') }}" style="color: #00bfff; font-weight: bold; font-size: 16px;">Home</a>
									</li>
									<li class="breadcrumb-item active" aria-current="page" style="color: #00bfff; font-weight: bold; font-size: 16px;">
										Innovation
									</li>
								</ol>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- END BREADCRUMP -->

	<!-- BEGIN OUR PROJECT AREA -->
			<section class="project">
                <div class="container project__container">
                    <div class="row" style="text-align: center">
                        <div class="col-md-6 col-sm-12">
                            <div class="project-wrapper" data-aos="fade-right">
                                <div class="project-wrapper-image">
                                    <img style="width: 150px; " src="{{ asset('assets/new_asset/img/banner/banner05.jpg') }}" alt="image" />
                                </div>
                                <div class="project-wrapper-title">
                                    <h3 style="font-size: 20px;">ELANO</h3>
                                    <span style="font-size: 13px;">Project Completed December 2024</span>
                                    <p style="font-size: 13px;">
                                        ELANO adalah sistem pemantauan berbasis Arduino yang dirancang untuk meningkatkan efisiensi penyaringan udara dengan memanfaatkan organisme alami. Teknologi ini menggabungkan sensor pintar untuk mendeteksi kualitas udara dan mekanisme filtrasi berbasis organisme, menciptakan solusi ramah lingkungan untuk udara yang lebih bersih dan sehat. 🌱🔬
                                    </p>
                                </div>
                                <div class="project-wrapper-button">
                                    <a style="font-size: 13px;" class="primary__button primary__button-outline" href="#">Full Case Study</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="project-wrapper" data-aos="fade-left" data-aos-delay="300">
                                <div class="project-wrapper-image">
                                    <img style="width: 150px; padding: 15px; " src="{{ asset('assets/new_asset/img/banner/banner08.jpg') }}" alt="image" />
                                </div>
                                <div class="project-wrapper-title">
                                    <h3 style="font-size: 20px;">UV-Vera</h3>
                                    <span style="font-size: 13px;">Project Completed December 2024</span>
                                    <p style="font-size: 13px;">
                                        UV-Vera adalah inovasi sterilisasi berbasis energi terbarukan yang memanfaatkan teknologi UV-C untuk membunuh bakteri dan virus secara efektif. Dengan dukungan energi ramah lingkungan, UV-Vera menjadi solusi higienis yang efisien dan berkelanjutan untuk berbagai kebutuhan sterilisasi. ☀️🔬
                                    </p>
                                </div>
                                <div class="project-wrapper-button">
                                    <a style="font-size: 13px;" class="primary__button primary__button-outline" href="#">Full Case Study</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="project-wrapper" data-aos="fade-right" data-aos-delay="400">
                                <div class="project-wrapper-image">
                                    <img style="width: 150px; padding: 15px; " src="{{ asset('assets/new_asset/img/banner/banner06.jpg') }}" alt="image" />
                                </div>
                                <div class="project-wrapper-title">
                                    <h3 style="font-size: 20px;">ECOADS</h3>
                                    <span style="font-size: 13px;">Project Completed December 2024</span>
                                    <p style="font-size: 13px;">
                                        ECOADS adalah inovasi produk yang menggabungkan periklanan digital dengan energi bersih, menawarkan daya tarik utama berupa free charger. Dengan konsep ramah lingkungan, ECOADS memungkinkan pengiklan menjangkau audiens secara efektif sambil mendukung penggunaan energi terbarukan. ⚡🌱
                                    </p>
                                </div>
                                <div class="project-wrapper-button">
                                    <a style="font-size: 13px;" class="primary__button primary__button-outline" href="#">Full Case Study</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="project-wrapper" data-aos="fade-left" data-aos-delay="500">
                                <div class="project-wrapper-image">
                                    <img style="width: 150px; padding: 15px; " src="{{ asset('assets/new_asset/img/banner/banner03.png') }}" alt="image" />
                                </div>
                                <div class="project-wrapper-title">
                                    <h3 style="font-size: 20px;">Koper Listrik 12kVA</h3>
                                    <span style="font-size: 13px;">Project Completed December 2024</span>
                                    <p style="font-size: 13px;">
                                        Koper Listrik 12kVA adalah solusi portable power supply berkapasitas 12kVA yang dirancang untuk menyediakan listrik darurat atau mobile. Dengan desain yang ringkas dan efisien, perangkat ini cocok untuk kebutuhan industri, outdoor, dan keadaan darurat, memastikan pasokan energi yang stabil dan andal. ⚡🔋
                                    </p>
                                </div>
                                <div class="project-wrapper-button">
                                    <a style="font-size: 13px;" class="primary__button primary__button-outline" href="#">Full Case Study</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="load-more-button">
                                <a style="font-size: 13px;" class="primary__button primary__button-bgPrimary" href="#">Load More Projects</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
	<!-- END OUR PROJECT AREA -->

	<!--  BEGIN CALL TO ACTION AREA -->
			<section class="callto-action callto-action-modifi">
                <div class="container" style="margin-top:-50px; margin-bottom:-50px;">
                    <div class="row align-items-center">
                        <div class="col-lg-7 col-md-12 order-2 order-lg-1">
                            <div class="callto-action-text" data-aos="fade-up">
                                <h2 style="font-size: 20px;">Have Any Inovation On Mind? Contact Us!</h2>
                                <p style="font-size: 15px;">
                                    Kami siap membantu merealisasikan ide dan inovasi Anda dengan dukungan teknologi, riset, dan jaringan industri. Hubungi kami untuk kolaborasi dan konsultasi lebih lanjut!
                                </p>
                                <a style="font-size: 13px;"
                                    href="{{ route('contact') }}"
                                    class="primary__button primary__button-bgPrimary"
                                    >Send Message</a
                                    >
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-12 order-1 order-lg-2">
                            <div class="callto-action-image" style="display: flex; justify-content: center;" data-aos="fade-left" data-aos-delay="500">
                                <img style="width: 60%;" src="{{ asset('assets/images/revan4.jpg') }}" alt="Call To Action" />
                            </div>
                        </div>
                    </div>
                    <div class="mask-group">
                        <img class="mask01" src="{{ asset('assets/new_asset/img/action/mask5.png') }}" alt="mask" />
                    </div>
                </div>
            </section>
	<!--  END CALL TO ACTION AREA -->


	<!-- info section -->

	<section class="info_section layout_padding2">
		<div class="container">
		<div class="row" style="font-size:14px">
			<div class="col-md-6 col-lg-3 info_col" >
			<div class="info_contact" >
				<h4 style="font-size:20px">
				Address
				</h4>
				<div class="contact_link_box">
				<a href="https://maps.app.goo.gl/bs1Yc9GD3RZExhXg8">
					<i class="fa fa-map-marker" aria-hidden="true"></i>
					<span>
					Location
					</span>
				</a>
				<a href="">
					<i class="fa fa-phone" aria-hidden="true"></i>
					<span>
					Call : (021) 5440342 / 2210
					</span>
				</a>
				<a href="">
					<i class="fa fa-envelope" aria-hidden="true"></i>
					<span>
					buibitpln05@gmail.com
					</span>
				</a>
				</div>
			</div>
			<div class="info_social" style="font-size:20px">
				<a href="https://www.facebook.com/share/16JvZ7GL7F/ ">
				<i class="fa fa-facebook" aria-hidden="true"></i>
				</a>
				<a href="https://youtube.com/@buibitpln?si=YXhzc-OZX09pC9-b">
				<i class="fa fa-youtube" aria-hidden="true"></i>
				</a>
				<a href="https://www.instagram.com/buib.itpln/">
				<i class="fa fa-instagram" aria-hidden="true"></i>
				</a>
			</div>
			</div>
			<div class="col-md-6 col-lg-3 info_col">
			<div class="info_detail">
				<h4 style="font-size:20px">
				Science Techno Park ITPLN
				</h4>
				<a href="https://maps.app.goo.gl/bs1Yc9GD3RZExhXg8" style="color: white">
				Menara PLN, Jl. Lkr. Luar Barat, RT.1/RW.1, Duri Kosambi, Kecamatan Cengkareng, Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta 11750
				</a>
			</div>
			</div>
			<div class="col-md-6 col-lg-2 mx-auto info_col">
			<div class="info_link_box">
				<h4 style="font-size:20px">
				Links
				</h4>
				<div class="info_links">
				<a class="" href="{{ route('index') }}">
					Home
				</a>
				<a class="" href="{{ route('inkubasi') }}">
					Inkubasi
				</a>
				<a class="" href="{{ route('about') }}">
					About
				</a>
				<a class="active" href="{{ route('inovasi') }}">
					Inovasi
				</a>
                <a class="" href="{{ route('login') }}">
					HKI
				</a>
                <a class="" href="{{ route('exclusive') }}">
					Exclusive
				</a>
                <a class="" href="{{ route('laboratorium') }}">
					Laboratorium
				</a>
				<a class="" href="{{ route('blogs') }}">
					Blog
				</a>
				<a class="" href="{{ route('contact') }}">
					Contact
				</a>
				</div>
				<button style="position:fixed;" id="backToTop" title="Back to Top">
					<img src="{{ asset('assets/new_asset/img/backtotop.png') }}" alt="Back to Top">
				</button>
			</div>
			</div>
			<div class="col-md-6 col-lg-3 info_col ">
			<h4 style="font-size:20px">
				Let's Begin !
			</h4>
			<form action="{{ route('login') }}">
				<!-- <input type="text" placeholder="Enter email" /> -->
				<button type="submit" style="font-size:12px">
				Get Started
				</button>

			</form>
			</div>
		</div>
		</div>
	</section>

	<!-- end info section -->

	<!-- footer section -->
	<section class="footer_section">
		<div class="container">
		<p style="font-size:13px">
			&copy; <span id="displayYear"></span> All Rights Reserved By
			<a href="">BUIB ITPLN</a>
		</p>
		</div>
	</section>
	<!-- footer section -->

    {{-- Jquery --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <!-- popper js -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <!-- bootstrap js -->
	<script src="{{ asset('assets/js/bootstrap.js') }}"></script>
  <!-- owl slider -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <!-- custom js -->
  <script src="{{ asset('assets/js/custom.js') }}"></script>

  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
  </script>
  <!-- End Google Map -->
	<script src="{{ asset('assets/js/backtotop.js') }}"></script>

	<script>
		var isSubMenuOpen = false;
		var hideTimeout = null;

		function toggleSubMenu() {
			var subMenu = document.getElementById('subMenu');
			if (subMenu.style.display === 'none' || subMenu.style.display === '') {
				subMenu.style.display = 'block';
				isSubMenuOpen = true;
			} else {
				subMenu.style.display = 'none';
				isSubMenuOpen = false;
			}
		}

		function showSubMenu() {
			var subMenu = document.getElementById('subMenu');
			subMenu.style.display = 'block';
			isSubMenuOpen = true;
		}

		function hideSubMenu() {
			var subMenu = document.getElementById('subMenu');
			subMenu.style.display = 'none';
			isSubMenuOpen = false;
		}

		function delayedHideSubMenu() {
			hideTimeout = setTimeout(function() {
				hideSubMenu();
			}, 200); // delay sedikit biar enak
		}

		function cancelHideSubMenu() {
			clearTimeout(hideTimeout);
		}

		// Klik di luar inkubasi = sembunyikan
		document.addEventListener('click', function(event) {
			var inkubasiLink = document.getElementById('inkubasiLink');
			var subMenu = document.getElementById('subMenu');
			if (!inkubasiLink.contains(event.target) && !subMenu.contains(event.target)) {
				hideSubMenu();
			}
		});
	</script>

	<script>
		AOS.init({
		once: true,
		duration: 800,
		easing: 'ease-in-out',
		});

	</script>

	<script>
		window.addEventListener('scroll', function () {
			const header = document.querySelector('.header_section');
			if (window.scrollY > 50) {
			header.classList.add('scrolled');
			} else {
			header.classList.remove('scrolled');
			}
		});
	</script>

    <script>
        const searchWrapper = document.getElementById('searchInputWrapper');
        const searchInput = document.getElementById('searchInput');

        function toggleSearchInput() {
            const isVisible = searchWrapper.style.display === 'block';
            searchWrapper.style.display = isVisible ? 'none' : 'block';
            if (!isVisible) searchInput.focus();
        }

        searchInput.addEventListener('keypress', function (e) {
            if (e.key === 'Enter') {
            const keyword = this.value.trim().toLowerCase();
            if (!keyword) return;

            const headers = document.querySelectorAll('h1, h2, h3');
            let found = false;

            headers.forEach(header => {
                const text = header.textContent.toLowerCase();
                if (text.includes(keyword) && !found) {
                header.scrollIntoView({ behavior: 'smooth', block: 'center' });
                header.classList.add('highlight-flash');
                setTimeout(() => header.classList.remove('highlight-flash'), 2000);
                found = true;
                }
            });

            if (!found) {
                const modal = new bootstrap.Modal(document.getElementById('noResultsModal'));
                modal.show();
            }

            this.value = '';
            searchWrapper.style.display = 'none';
            }
        });
    </script>

    <script>
        // Fungsi untuk menu Penyewaan
        let penyewaanHideTimeout;

        function togglePenyewaanSubMenu() {
        const subMenu = document.getElementById('penyewaanSubMenu');
        subMenu.style.display = subMenu.style.display === 'block' ? 'none' : 'block';
        }

        function showPenyewaanSubMenu() {
        clearTimeout(penyewaanHideTimeout);
        document.getElementById('penyewaanSubMenu').style.display = 'block';
        }

        function hidePenyewaanSubMenu() {
        penyewaanHideTimeout = setTimeout(() => {
            document.getElementById('penyewaanSubMenu').style.display = 'none';
        }, 300);
        }

        function delayedHidePenyewaanSubMenu() {
        penyewaanHideTimeout = setTimeout(() => {
            hidePenyewaanSubMenu();
        }, 300);
        }

        function cancelHidePenyewaanSubMenu() {
        clearTimeout(penyewaanHideTimeout);
        }

        // Event listener untuk klik di luar menu
        document.addEventListener('click', function(event) {
        const penyewaanLink = document.getElementById('penyewaanLink');
        const penyewaanSubMenu = document.getElementById('penyewaanSubMenu');
        if (!penyewaanLink.contains(event.target) && !penyewaanSubMenu.contains(event.target)) {
            hidePenyewaanSubMenu();
        }
        });
    </script>


<div class="modal fade" id="noResultsModal" tabindex="-1" aria-labelledby="noResultsModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content shadow rounded-4 border-0 animate__animated animate__fadeInDown">
        <div class="modal-body text-center p-5">
            <div class="mb-3">
            <i class="fas fa-search-minus fa-4x text-danger"></i>
            </div>
            <h5 class="mb-2">Oops! Tidak Ditemukan</h5>
            <p class="text-muted mb-4">Kami tidak menemukan elemen Judul yang cocok dengan kata tersebut.</p>
            <button type="button" class="btn btn-outline-secondary rounded-pill px-4" data-bs-dismiss="modal">Coba Lagi</button>
        </div>
        </div>
    </div>
</div>

</body>

</html>
