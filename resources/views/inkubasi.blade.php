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
    <link rel="shortcut icon" href="{{ asset('assets/images/stp.png') }}" type="image/png">


    <title> STP ITPLN </title>

    <!-- bootstrap core css -->
        <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">

    <!-- fonts style -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!--owl slider stylesheet -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

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

		/* Menambahkan gaya untuk ikon Font Awesome */
		.icon {
			width: 45px;  /* Menentukan lebar kotak */
			height: 45px;  /* Menentukan tinggi kotak */
			display: flex;  /* Agar ikon dapat diposisikan dengan baik */
			justify-content: center;  /* Menyusun ikon di tengah horizontal */
			align-items: center;  /* Menyusun ikon di tengah vertikal */
			border-radius: 15px;  /* Membuat ujung agak mencong */
			color: white;  /* Warna ikon */
			font-size: 20px;  /* Ukuran ikon */
			transition: background-color 0.3s ease;  /* Efek transisi pada hover */
		}

		/* Gaya saat hover */
		.icon:hover {
			background-color: #e03246;  /* Warna saat hover */
		}

		/* Background Futuristic Gradient */
		.special-services {
			background: linear-gradient(135deg, #1e2a47, #283d69); /* Futuristic color gradient */
			padding: 60px 0;
		}

		/* Service Item Styling */
		.special-services-item {
			transition: all 0.3s ease-in-out; /* Smooth transition */
			background-color: #f8f9fa;
			border-radius: 30px; /* Makes the boxes oval */
			padding: 20px;
			box-shadow: 0px 20px 30px rgba(0, 0, 0, 0.1); /* Lighter shadow for a floating effect */
			text-align: center;
			position: relative;
			overflow: hidden;
		}

		/* Hover effect for items */
		.special-services-item:hover {
			transform: scale(1.05); /* Scale effect for interactivity */
			box-shadow: 0px 30px 50px rgba(0, 0, 0, 0.2); /* More prominent shadow on hover */
		}

		/* Image Styling */
		.special-services-image img {
			max-height: 200px; /* Image size */
			object-fit: contain;
			border-radius: 15px;
			transition: transform 0.3s ease;
		}

		/* Hover effect on images */
		.special-services-image img:hover {
			transform: scale(1.1); /* Zoom-in effect for images */
		}

		/* Text Styling */
		.special-services-text h5 {
			color: #ffffff;
			font-weight: bold;
			font-size: 1.5rem;
			text-transform: uppercase;
			letter-spacing: 2px;
			margin-top: 15px;
		}

		.special-services-text p {
			font-size: 1rem;
			color: #dddddd;
		}

		/* Custom Shapes or Effects for service section */
		.special-services-item::before {
			content: "";
			position: absolute;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
			background: rgba(0, 0, 0, 0.1); /* Subtle dark overlay */
			z-index: -1;
			transition: opacity 0.3s ease;
		}

		.special-services-item:hover::before {
			opacity: 0.3; /* Darker overlay when hovered */
		}

		/* Text Hover Effects */
		.special-services-item:hover .special-services-text h5 {
			color: #00d4ff; /* Change text color on hover */
		}

		/* Adding a dynamic background animation for the section */
		@keyframes backgroundMove {
			0% { background-position: 0% 0%; }
			100% { background-position: 100% 100%; }
		}

		.special-services {
			animation: backgroundMove 10s infinite linear;
			background-size: 400% 400%;
		}

		/* Responsiveness */
		@media (max-width: 768px) {
			.special-services-item {
				margin-bottom: 20px;
			}

			#our-inkubation-title {
				font-size: 2rem;
			}
		}

		/* Styling untuk Call to Action Section */
		#cta-section {
			background: linear-gradient(135deg, #00416A, #3b6a8b); /* Latar belakang dengan gradasi futuristik */
			color: white;
			padding: 100px 0;
			position: relative;
			overflow: hidden;
			border-radius: 15px; /* Sudut lebih melengkung */
		}

		/* Styling untuk judul CTA */
		#cta-section .cta-heading {
			font-size: 42px;
			font-weight: 700;
			color: #ffffff;
			text-transform: uppercase;
			letter-spacing: 2px;
			text-shadow: 4px 4px 8px rgba(0, 0, 0, 0.5); /* Efek bayangan untuk kesan futuristik */
			margin-bottom: 20px;
			transition: transform 0.3s ease, color 0.3s ease;
		}

		/* Efek saat hover pada judul */
		#cta-section .cta-heading:hover {
			transform: scale(1.05); /* Memperbesar judul saat hover */
			color: #ffd700; /* Warna emas untuk menarik perhatian */
		}

		/* Styling untuk deskripsi */
		#cta-section .cta-description {
			font-size: 16px;
			line-height: 1.8;
			color: #e0e0e0; /* Warna lebih terang untuk kontras */
			margin-bottom: 30px;
			opacity: 0.9;
		}

		/* Styling tombol CTA */
		#cta-section .cta-button {
			background-color: #ff5f00; /* Warna tombol cerah */
			color: white;
			padding: 12px 30px;
			font-size: 18px;
			border-radius: 50px;
			text-transform: uppercase;
			font-weight: 600;
			letter-spacing: 1px;
			transition: background-color 0.3s ease, transform 0.3s ease;
			display: inline-block;
		}

		/* Efek hover pada tombol */
		#cta-section .cta-button:hover {
			background-color: #fbbd00; /* Warna tombol berubah saat hover */
			transform: scale(1.05); /* Memperbesar tombol sedikit saat hover */
		}

		/* Gambar pada bagian Call to Action */
		#cta-section .cta-img {
			width: 100%;
			height: auto;
			border-radius: 15px;
			box-shadow: 0px 15px 45px rgba(0, 0, 0, 0.2); /* Shadow untuk efek mengambang */
			transition: transform 0.4s ease, opacity 0.4s ease;
		}

		/* Efek hover pada gambar */
		#cta-section .cta-img:hover {
			transform: scale(1.1); /* Membesar gambar saat di-hover */
			opacity: 0.8; /* Memberikan efek transparansi */
		}

		/* Styling untuk mask group di bawah */
		#cta-section .mask-group {
			position: absolute;
			bottom: -30px;
			right: 0;
			z-index: -1;
		}

		#cta-section .mask01 {
			width: 100%;
			max-width: 500px;
			animation: moveMask 5s ease-in-out infinite; /* Menambahkan animasi pada mask */
		}

		/* Animasi untuk mask */
		@keyframes moveMask {
			0% {
				transform: translateY(20px);
			}
			50% {
				transform: translateY(-20px);
			}
			100% {
				transform: translateY(20px);
			}
		}

		/* Responsif untuk tampilan mobile */
		@media (max-width: 768px) {
			#cta-section {
				padding: 50px 15px;
			}

			#cta-section .cta-heading {
				font-size: 32px;
			}

			#cta-section .cta-description {
				font-size: 14px;
			}

			#cta-section .cta-button {
				font-size: 16px;
				padding: 10px 25px;
			}

			#cta-section .cta-img {
				max-width: 100%;
			}
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
						<li class="nav-item active" style="position: relative;">
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
						<li class="nav-item">
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
									Inkubasi Bisnis
								</h1>
							</div>
							<p style="font-family: 'Roboto', sans-serif; font-size: 15px; letter-spacing: 1px; color: #f0f0f0; line-height: 1.8; text-shadow: 1px 1px 5px rgba(0,0,0,0.15); padding-right: 10px;">
								Dukungan startup melalui mentoring, riset, dan jaringan industri untuk pertumbuhan inovatif.
							</p>
						</div>
					</div>
					<div class="col-lg-6 order-1 order-lg-2">
						<div class="banner-image d-flex justify-content-center" data-aos="fade-left" data-aos-delay="300" data-aos-offset="500">
							<img src="{{ asset('assets/new_asset/img/fotokita.jpg') }}" alt="banner-image" class="img-fluid banner-img" style="border-radius: 20px; width: 80%; box-shadow: 0 15px 45px rgba(0, 0, 0, 0.25);"/>
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
										Inkubasi
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

    <!-- BEGIN OUR WORK PROCESS -->
	<section class="our-work-process" style="padding: 80px 0; position: relative; margin-top: -50px">
		<div class="container">
			<div class="section-title text-center" data-aos="fade-up">
				<h2 style="font-size: 30px; font-weight: 700; margin-bottom: 40px;">Our Work Process</h2>
			</div>
			<div class="row justify-content-center" style="position: relative;">
				<div style="max-width: 800px; width: 100%; text-align: center;">
					<img id="gambar-1" src="{{ asset('assets/new_asset/img/mappping.png') }}"
						style="max-width: 100%; height: auto; display: inline-block; transition: transform 0.5s ease;"
						onmouseover="this.style.transform='scale(1.05)'"
						onmouseout="this.style.transform='scale(1)'">
				</div>
			</div>
		</div>
		<div class="shape" style="position: absolute; top: 0; left: 0; width: 100%; overflow: hidden; pointer-events: none;">
			<img data-aos="fade-down" data-aos-easing="linear"
				src="{{ asset('assets/new_asset/img/mask/mask09.svg') }}"
				alt="Circle Shape"
				class="img-fluid round-shape"
				style="width: 100%; opacity: 0.1;">
		</div>
	</section>

    <!-- END OUR WORK PROCESS -->

	<!-- BEGIN OUR SERVICES -->
	<section class="about-us our-services" style="background: linear-gradient(135deg,rgb(19, 41, 101) 0%, #1a2b5c 100%); color: #ffffff; position: relative; margin: 0 45px 130px 45px; border-radius: 24px; z-index: 5; padding: 80px 20px; padding-bottom: 60px;">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6" style="margin-bottom: 30px;">
					<div class="about-us-image" data-aos="fade-right" data-aos-delay="300" data-aos-offset="500">
						<div class="image" style="text-align: center;">
							<img src="{{ asset('assets/images/pita1.jpg') }}" alt="Image" style="max-width: 100%; height: auto; border-radius: 16px; box-shadow: 0 6px 15px rgba(0,0,0,0.1);" />
						</div>
					</div>
				</div>
				<div class="col-lg-5 offset-lg-1">
					<div class="about-us-text" data-aos="fade-up" style="text-align: left;">
						<div class="sub-heading" style="margin-bottom: 30px;">
							<h2 style="font-size: 28px; font-weight: 700; color: #ffffff;">Why You Choose Our Services?</h2>
						</div>
						<div class="feature d-flex align-items-start mb-25" style="margin-bottom: 20px;">
							<div class="icon shadow d-flex align-items-center justify-content-center mr-15" style="background-color: #ff465e; width: 50px; height: 50px; color: #fff; font-size: 20px;">
								<div class="icon">
									<i class="fas fa-user-clock"></i>
								</div>
							</div>
							<div class="text" style="margin-left: 15px;">
								<h6 style="font-size: 16px; font-weight: 600; margin-bottom: 8px; color: #ffffff;">Inovatif & Berbasis Teknologi</h6>
								<p style="font-size: 12px; color: #eeeeee;">Solusi modern berbasis riset dan teknologi untuk mendukung pertumbuhan bisnis.</p>
							</div>
						</div>
						<div class="feature d-flex align-items-start mb-30" style="margin-bottom: 20px;">
							<div class="icon shadow d-flex align-items-center justify-content-center mr-15" style="background-color: #63be52; width: 50px; height: 50px;  color: #fff; font-size: 20px;">
								<div class="icon">
									<i class="fas fa-sitemap"></i>
								</div>
							</div>
							<div class="text" style="margin-left: 15px;">
								<h6 style="font-size: 16px; font-weight: 600; margin-bottom: 8px; color: #ffffff;">Dukungan Ahli</h6>
								<p style="font-size: 12px; color: #eeeeee;">Mentor berpengalaman siap membimbing dengan strategi yang tepat.</p>
							</div>
						</div>
						<div class="feature d-flex align-items-start mb-25" style="margin-bottom: 20px;">
							<div class="icon shadow d-flex align-items-center justify-content-center mr-15" style="background-color: #fab005; width: 50px; height: 50px; color: #fff; font-size: 20px;">
								<div class="icon">
									<i class="fas fa-bolt"></i>
								</div>
							</div>
							<div class="text" style="margin-left: 15px;">
								<h6 style="font-size: 16px; font-weight: 600; margin-bottom: 8px; color: #ffffff;">Jaringan Luas</h6>
								<p style="font-size: 12px; color: #eeeeee;">Akses ke industri, riset, dan kolaborasi untuk mempercepat inovasi.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="shape" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; overflow: hidden; z-index: -1;">
			<img data-aos="fade-down" data-aos-easing="linear" src="{{ asset('assets/new_asset/img/mask/leftMask.svg') }}" alt="shape" class="img-fluid top" style="position: absolute; top: -50px; left: -50px; width: 150px; opacity: 0.2;" />
			<img data-aos="fade-down" data-aos-easing="linear" src="{{ asset('assets/new_asset/img/mask/mask06.svg') }}" alt="shape" class="img-fluid right" style="position: absolute; top: 0; right: 0; width: 120px; opacity: 0.1;" />
			<img data-aos="fade-down" data-aos-easing="linear" src="{{ asset('assets/new_asset/img/mask/mask8.svg') }}" alt="shape" class="img-fluid bottom" style="position: absolute; bottom: 0; left: 0; width: 150px; opacity: 0.1;" />
		</div>
	</section>

	<!-- END OUR SERVICES -->


	<!-- BEGIN OUR INKUBATION BISNIS -->
	<section class="special-services our-services" id="inkubation-business" style="position: relative; background: linear-gradient(135deg, #1e2a47, #283d69); padding: 60px 0;">
		<div class="container">
			<div class="section-title text-center" data-aos="fade-up">
				<h2 id="our-inkubation-title" class="display-4 text-white font-weight-bold" style="font-size: 28px; margin-bottom: 50px;">Our Inkubation Business</h2>
			</div>
			<div class="row" style="display: flex; flex-direction:row; justify-content: center">
				<!-- Service 1 -->
				<div class="col-lg-4 col-md-6 mb-4">
					<div class="special-services-item shadow-lg rounded-4 p-4" data-aos="fade-up" data-aos-delay="500" id="service-1">
						<div class="special-services-image special-services-image-bg-one">
							<img src="{{ asset('assets/new_asset/img/services/special_services01.svg') }}" alt="Special Services 01" class="img-fluid" />
						</div>
						<div class="special-services-text text-center">
							<h5 style="font-size: 18px;" class="text-primary font-weight-bold">Hak Kekayaan Intelektual</h5>
							<p style="font-size: 13px;" class="text-muted">HKI Menjamin perlindungan hukum atas inovasi untuk meningkatkan daya saing bisnis.</p>
						</div>
					</div>
				</div>
				<!-- Service 2 -->
				<div class="col-lg-4 col-md-6 mb-4">
					<div class="special-services-item shadow-lg rounded-4 p-4" data-aos="fade-up" data-aos-delay="600" id="service-2">
						<div class="special-services-image special-services-image-bg-two">
							<img src="{{ asset('assets/new_asset/img/services/special_services02.svg') }}" alt="Special Services 02" class="img-fluid" />
						</div>
						<div class="special-services-text text-center">
							<h5 style="font-size: 18px;" class="text-primary font-weight-bold">Paten</h5>
							<p style="font-size: 13px;" class="text-muted">Melindungi invensi teknologi agar memiliki keunggulan di pasar.</p>
						</div>
					</div>
				</div>
				<!-- Service 3 -->
				<div class="col-lg-4 col-md-6 mb-4">
					<div class="special-services-item shadow-lg rounded-4 p-4" data-aos="fade-up" data-aos-delay="700" id="service-3">
						<div class="special-services-image special-services-image-bg-three">
							<img src="{{ asset('assets/new_asset/img/services/special_services07.svg') }}" alt="Special Services 03" class="img-fluid" />
						</div>
						<div class="special-services-text text-center">
							<h5 style="font-size: 18px;" class="text-primary font-weight-bold">Merek</h5>
							<p style="font-size: 13px;" class="text-muted">Membangun identitas bisnis yang kuat dan terpercaya.</p>
						</div>
					</div>
				</div>
				<!-- Service 4 -->
				<div class="col-lg-4 col-md-6 mb-4">
					<div class="special-services-item shadow-lg rounded-4 p-4" data-aos="fade-up" data-aos-delay="800" id="service-4">
						<div class="special-services-image special-services-image-bg-four">
							<img src="{{ asset('assets/new_asset/img/services/special_services04.svg') }}" alt="Special Services 04" class="img-fluid" />
						</div>
						<div class="special-services-text text-center">
							<h5 style="font-size: 18px;" class="text-primary font-weight-bold">Hak Cipta</h5>
							<p style="font-size: 13px;" class="text-muted">Menjaga orisinalitas karya dari pelanggaran.</p>
						</div>
					</div>
				</div>
				<!-- Service 5 -->
				<div class="col-lg-4 col-md-6 mb-4">
					<div class="special-services-item shadow-lg rounded-4 p-4" data-aos="fade-up" data-aos-delay="900" id="service-5">
						<div class="special-services-image special-services-image-bg-five">
							<img src="{{ asset('assets/new_asset/img/services/special_services05.svg') }}" alt="Special Services 05" class="img-fluid" />
						</div>
						<div class="special-services-text text-center">
							<h5 style="font-size: 18px;" class="text-primary font-weight-bold">Buku & E-book</h5>
							<p style="font-size: 13px;" class="text-muted">Mendokumentasikan serta menyebarluaskan pengetahuan inovatif.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="shape" id="shape-mask">
			<img data-aos="fade-down" data-aos-easing="linear" src="{{ asset('assets/new_asset/img/mask/leftMask.svg') }}" alt="shape" class="img-fluid top-right" />
		</div>
	</section>
	<!-- END OUR INKUBATION BISNIS -->


	<!-- BEGIN HAVE PROJECT -->
	<section class="callto-action callto-action-modifi" id="cta-section" style="margin: 10px; padding:50px;">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-7 col-md-12 order-2 order-lg-1">
					<div class="callto-action-text" data-aos="fade-up">
						<h2 style="font-size: 29px;" class="cta-heading">Have Any Project On Mind? Contact Us!</h2>
						<p style="font-size: 14px;" class="cta-description">
							Kami siap membantu merealisasikan ide dan inovasi Anda dengan dukungan teknologi, riset, dan jaringan industri. Hubungi kami untuk kolaborasi dan konsultasi lebih lanjut!
						</p>
						<a style="font-size: 12px;" href="{{ route('contact') }}" class="cta-button primary__button primary__button-bgPrimary">Send Message</a>
					</div>
				</div>
				<div class="col-lg-5 col-md-12 order-1 order-lg-2">
					<div class="callto-action-image" data-aos="fade-left" data-aos-delay="500" style="display: flex; justify-content: center; align-items: center; width: 100%; height: 100%">
						<img style="width:70%" src="{{ asset('assets/images/revan3.jpg') }}" alt="Call To Action" class="cta-img"/>
					</div>
				</div>
			</div>
			<div class="mask-group">
				<img class="mask01" src="{{ asset('assets/new_asset/img/action/mask5.png') }}" alt="mask" />
			</div>
		</div>
	</section>

	<!-- END HAVE PROJECT -->


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
				<a class="active" href="{{ route('inkubasi') }}">
					Inkubasi
				</a>
				<a class="" href="{{ route('about') }}">
					About
				</a>
				<a class="" href="{{ route('inovasi') }}">
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
			<form action="{{ url('login') }}">
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
