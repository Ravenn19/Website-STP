<!DOCTYPE html>
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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">


  <title> STP ITPLN </title>

  <!-- bootstrap core css -->
	<link rel="stylesheet"  type="text/css" href="{{ asset('assets/css/bootstrap.css') }}">

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

  <!--owl slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

  <!-- font awesome style -->
	<link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}">

  <!-- Custom styles for this template -->
	<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}"
    >
  <!-- responsive style -->
	<link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/backtotop.css') }}">

	<!-- Di head -->
	<link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700&display=swap" rel="stylesheet">


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

		.main-about-img {
		border-radius: 15px;
		box-shadow: 0 0 35px rgba(0, 255, 255, 0.5);
		animation: float 4s ease-in-out infinite;
		max-width: 80%;
		margin: auto;
		z-index: 1;
		}

		.glass-card {
		position: absolute;
		padding: 12px 18px;
		border-radius: 15px;
		backdrop-filter: blur(4px); /* dikurangi agar tidak terlalu blur */
		background: rgba(255, 255, 255, 0.15);
		box-shadow: 0 0 20px rgba(0, 255, 255, 0.3);
		color: #fff;
		text-align: center;
		width: 150px;
		animation: float 3s ease-in-out infinite;
		z-index: 2;
		transition: 0.3s;
		color: #fff;
		font-weight: bold;
		text-shadow: 0 1px 2px rgba(0, 0, 0, 0.6);
		box-shadow: 0 0 18px rgba(0, 0, 0, 0.2);
		}

		.glass-card:hover {
		transform: scale(1.05);
		box-shadow: 0 0 25px rgba(0, 255, 255, 0.5);
		}

		.glass-card h3 {
		margin: 0;
		font-size: 24px;
		color: #00ffe7;
		font-weight: bold;
		}

		.glass-card p {
		font-size: 14px;
		margin: 5px 0 0;
		font-weight: 500;
		}

		.ratings {
		display: flex;
		justify-content: center;
		align-items: center;
		gap: 4px; /* Jarak antar bintang */
		margin: 0;
		padding: 0;
		list-style: none;
		position: relative;
		z-index: 2; /* Pastikan di atas elemen putih */
		}

		.ratings li i {
		color: #fff;
		font-size: 1rem;
		text-shadow: 0 1px 2px rgba(0, 0, 0, 0.5); /* agar bintang makin kontras */
		}

		.rating-card {
		position: absolute;
		z-index: 10; /* Lebih tinggi dari background titik */
		}


		/* Posisi */
		.top-center {
		top: -35px;
		left: 50%;
		transform: translateX(-50%);
		}
		.left-center {
		top: 50%;
		left: -75px;
		transform: translateY(-50%);
		}
		.bottom-center {
		bottom: -35px;
		left: 50%;
		transform: translateX(-50%);
		}

		/* Animasi floating */
		@keyframes float {
		0%, 100% { transform: translateY(0); }
		50% { transform: translateY(-8px); }
		}

		/* Responsive */
		@media screen and (max-width: 768px) {
		.glass-card {
			width: 110px;
			padding: 8px 12px;
		}

		.top-center, .bottom-center {
			left: 50%;
			transform: translateX(-50%);
		}

		.left-center {
			display: none; /* agar tidak numpuk di layar kecil */
		}
		}

		/* Work Solution */
		.about-solution {
			background: linear-gradient(135deg, #0f2027, #203a43, #2c5364); /* gradasi biru futuristik */
			color: white;
			padding: 80px 0;
			position: relative;
			overflow: hidden;
		}

		.about-solution h2 {
			font-size: 36px;
			font-weight: 700;
			margin-bottom: 50px;
			color: #ffffff;
			text-shadow: 0 0 10px rgba(0, 255, 255, 0.6);
		}

		.solution-wrapper {
			background: rgba(255, 255, 255, 0.05);
			border: 1px solid rgba(255, 255, 255, 0.1);
			border-radius: 20px;
			padding: 25px;
			margin-bottom: 30px;
			backdrop-filter: blur(8px);
			transition: all 0.3s ease;
		}

		.solution-wrapper:hover {
			transform: translateY(-5px);
			box-shadow: 0 0 20px rgba(0, 255, 255, 0.2);
		}

		.solution-title h4 {
			font-size: 20px;
			font-weight: 600;
			color: #00ffff;
		}

		.solution-title span {
			font-weight: 700;
			font-size: 28px;
			color: #00cfff;
			margin-right: 10px;
		}

		.solution-title p {
			color: #f0f0f0;
			font-size: 15px;
			line-height: 1.6;
		}

		.mask-group img {
			position: absolute;
			opacity: 0.1;
			z-index: 0;
		}

		.mask1 {
			top: 10px;
			left: -30px;
			width: 150px;
		}

		.mask2 {
			bottom: 30px;
			right: -50px;
			width: 200px;
		}

		.mask3 {
			top: 50%;
			left: 50%;
			transform: translate(-50%, -50%);
			width: 300px;
		}

		/* WORK UPGRADE */
		.about-skill {
			background: linear-gradient(135deg, #0f2027, #203a43, #2c5364);
			color: white;
			padding: 80px 0;
			overflow: hidden;
			position: relative;
		}

		.about-skill-title h2 {
			font-size: 36px;
			font-weight: 700;
			margin-bottom: 20px;
			color: #00ffff;
			text-shadow: 0 0 10px rgba(0, 255, 255, 0.5);
		}

		.about-skill-title p {
			font-size: 16px;
			color: #f0f0f0;
			line-height: 1.6;
		}

		.about-skill-pogressbar {
			display: flex;
			gap: 30px;
			flex-wrap: wrap;
			margin-top: 40px;
		}

		.round-wrapper {
			background: rgba(255, 255, 255, 0.05);
			border: 1px solid rgba(255, 255, 255, 0.1);
			border-radius: 15px;
			padding: 20px;
			text-align: center;
			flex: 1;
			min-width: 220px;
			backdrop-filter: blur(6px);
			transition: all 0.3s ease;
		}

		.round-wrapper:hover {
			transform: translateY(-5px);
			box-shadow: 0 0 20px rgba(0, 255, 255, 0.3);
		}

		.round {
			position: relative;
			display: inline-block;
		}

		.round-text {
			position: absolute;
			top: 50%;
			left: 50%;
			transform: translate(-50%, -50%);
			font-size: 22px;
			font-weight: bold;
			color: #00ffff;
			pointer-events: none;
		}


		.skill-text h6 {
			color: #00ffff;
			font-size: 18px;
			margin-top: 15px;
		}

		.skill-text p {
			font-size: 14px;
			color: #cccccc;
		}

		.about-skill-image img {
			width: 100%;
			border-radius: 20px;
			box-shadow: 0 0 30px rgba(0, 255, 255, 0.2);
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

        /* Styling untuk mobile */
        @media (max-width: 992px) {
            .about-us {
                width: 90%;
                margin-left: -1200px;
            }

            .about-us-image {
                margin-bottom: 40px !important;
            }

            .image {
                width: 100% !important;
                max-width: 400px !important;
                height: 300px !important;
            }

            /* Mengatur ulang posisi card untuk mobile */
            .rating-card {
                width: 100px !important;
                height: 100px !important;
                padding: 10px !important;
            }

            .glass-card h3 {
                font-size: 1.2rem;
            }

            .glass-card ul li i {
                font-size: 0.7rem;
            }

            .glass-card p {
                font-size: 0.8rem;
            }

            /* Reposisi card untuk tampilan mobile */
            .top-center {
                top: -25px;
                left: 50%;
                transform: translateX(-50%);
            }

            .left-center {
                top: 50%;
                left: -30px;
                transform: translateY(-50%);
            }

            .bottom-center {
                bottom: -25px;
                left: 50%;
                transform: translateX(-50%);
            }

            /* Untuk layar sangat kecil (mobile kecil) */
            @media (max-width: 576px) {
                .rating-card {
                    width: 80px !important;
                    height: 80px !important;
                    padding: 8px !important;
                }

                .glass-card h3 {
                    font-size: 1rem;
                    margin-bottom: 2px;
                }

                .glass-card ul {
                    margin: 2px 0;
                }

                .glass-card ul li i {
                    font-size: 0.6rem;
                }

                .glass-card p {
                    font-size: 0.7rem;
                    margin-top: 2px;
                }

                .top-center {
                    top: -20px;
                }

                .left-center {
                    left: -20px;
                }

                .bottom-center {
                    bottom: -20px;
                }

                .about-us-text h2 {
                    font-size: 1.5rem;
                }

                .about-us-text p {
                    font-size: 0.9rem;
                }
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
						<li class="nav-item active">
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
			<button style="position:fixed;" id="backToTop" title="Back to Top">
				<img src="{{ asset('assets/images/backtotop.png') }}" alt="Back to Top">
			</button>
    </header>
    <!-- end header section -->
  </div>


	<!-- BEGIN BREADCRUMP -->
	<section class="banner-area breadcrumArea mb-0">
		<div class="container custom-container" style="margin-top: 20px; margin-bottom: 70px">
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
						<div class="bannerArea__wrapper" data-aos="fade-up" data-aos-offset="300" style="transition: transform 0.3s ease-in-out;">
							<div class="bannerArea__title">
								<h1 style="font-family: 'Poppins', sans-serif; font-size: 35px; letter-spacing: 2px; line-height: 1.4; text-shadow: 3px 3px 6px rgba(0,0,0,0.3);">
									About Us
								</h1>
							</div>
							<p style="font-family: 'Roboto', sans-serif; font-size: 15px; letter-spacing: 1px; color: #f0f0f0; line-height: 1.8; text-shadow: 1px 1px 5px rgba(0,0,0,0.15); padding-right: 10px;">
								Kami menawarkan solusi teknologi untuk inovasi, efisiensi, dan transformasi digital, didukung oleh tim profesional dan strategi berbasis data.
							</p>
						</div>
					</div>
					<div class="col-lg-6 order-1 order-lg-2">
						<div class="banner-image d-flex justify-content-center" data-aos="fade-left" data-aos-delay="300" data-aos-offset="300">
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
										About Us
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

	<!-- BEGIN ABOUT -->
		<section class="about-us" style="margin: 20px;">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
						<div class="about-us-image position-relative" data-aos="fade-right" data-aos-delay="500" style="max-width: 100%; display: inline-block;">
							<div class="image text-center" style="width: 500px; height: 400px; overflow: hidden; margin: auto;">
                                <img
                                    src="{{ asset('assets/images/pita1.jpg') }}"
                                    alt="Image"
                                    class="img-fluid main-about-img"
                                    style="width: 100%; height: 100%; object-fit: cover; object-position: center;"
                                />
                            </div>

							<!-- Card Atas - Hijau -->
							<div class="rating-card top-center glass-card" style="background-color: #1dd1a1;">
								<h3>4.8</h3>
								<ul class="ratings d-flex">
									<li><i class="fas fa-star"></i></li>
									<li><i class="fas fa-star"></i></li>
									<li><i class="fas fa-star"></i></li>
									<li><i class="fas fa-star"></i></li>
									<li><i class="fas fa-star"></i></li>
								</ul>
								<p>HAKI</p>
							</div>

							<!-- Card Kiri - Biru -->
							<div class="rating-card left-center glass-card" style="background-color: #0984e3; margin-left: 30px">
								<h3>4.7</h3>
								<ul class="ratings d-flex">
									<li><i class="fas fa-star"></i></li>
									<li><i class="fas fa-star"></i></li>
									<li><i class="fas fa-star"></i></li>
									<li><i class="fas fa-star"></i></li>
									<li><i class="fas fa-star"></i></li>
								</ul>
								<p>Inkubasi Bisnis</p>
							</div>

							<!-- Card Bawah - Merah -->
							<div class="rating-card bottom-center glass-card" style="background-color: #e84118;">
								<h3>4.9</h3>
								<ul class="ratings d-flex">
									<li><i class="fas fa-star"></i></li>
									<li><i class="fas fa-star"></i></li>
									<li><i class="fas fa-star"></i></li>
									<li><i class="fas fa-star"></i></li>
									<li><i class="fas fa-star"></i></li>
								</ul>
								<p>Inovasi</p>
							</div>

						</div>

                        </div>
                        <div class="col-lg-6">
                            <div class="about-us-text" data-aos="fade-up">
                                <div class="sub-heading">
                                    <h2 style="text-align: justify"> About Science Techno Park IT PLN</h2>
                                    <p style="text-align: justify">
                                        Science Techno Park IT PLN adalah pusat inovasi berbasis riset yang didirikan oleh Institut Teknologi PLN. Fokusnya pada pengembangan teknologi di bidang Energi Terbarukan. Menyediakan fasilitas Research & Development, inkubator bisnis, dan pelatihan untuk mendukung inovasi, komersialisasi teknologi, serta pertumbuhan ekonomi berbasis ilmu pengetahuan.
                                    </p>
                                </div>
                        </div>
                    </div>
                </div>
		</section>
	<!-- END ABOUT -->

	<!-- BEGIN WORK SOLUTION -->
		<section class="about-solution d-md-none d-none d-lg-block" style="margin-top: 50px;">
                <div class="container">
                    <div class="section-title text-center" data-aos="fade-up">
                        <h2>Why Should You Work With Us?</h2>
                    </div>
                    <div class="row">
                        <div class="col-sm-12" style="display: flex; justify-content: center;">
                            <div class="solution-wrapper mb-30" data-aos="fade-up" data-aos-delay="300" style="width:35%;">
                                <div class="solution-title center">
                                    <h4>
                                        <span>01.</span>
                                        Business Solution
                                    </h4>
                                    <p>Kami menawarkan solusi berbasis teknologi untuk meningkatkan efisiensi dan daya saing bisnis, termasuk transformasi digital, AI, dan strategi berbasis data.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="solution-wrapper mb-50" data-aos="fade-up" data-aos-delay="800">
                                        <div class="solution-title left">
                                            <h4>
                                                <span>06.</span>
                                                Strategy
                                            </h4>
                                            <p>Kami merancang strategi bisnis berbasis data yang meningkatkan daya saing dan menciptakan peluang baru, memastikan setiap langkah selaras dengan visi perusahaan.</p>
                                        </div>
                                    </div>
                                    <div class="solution-wrapper" data-aos="fade-up" data-aos-delay="700">
                                        <div class="solution-title left">
                                            <h4>
                                                <span>05.</span>
                                                Consultancy
                                            </h4>
                                            <p>Kami menyediakan konsultasi bisnis untuk strategi, operasional, dan solusi teknologi, membantu pengambilan keputusan yang lebih efektif dan berorientasi pada pertumbuhan.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <img data-aos="zoom-in" src="{{ asset('assets/new_asset/img/mask/work.png') }}" alt="mask" class="img-fluid" />
                                </div>
                                <div class="col-lg-4">
                                    <div class="solution-wrapper mb-50" data-aos="fade-up" data-aos-delay="400">
                                        <div class="solution-title right">
                                            <h4>
                                                <span>02.</span>
                                                Organization
                                            </h4>
                                            <p>Dengan tim profesional dan mitra strategis, kami menghadirkan solusi inovatif yang sesuai dengan kebutuhan industri untuk memastikan keberlanjutan bisnis.</p>
                                        </div>
                                    </div>
                                    <div class="solution-wrapper" data-aos="fade-up" data-aos-delay="500">
                                        <div class="solution-title right">
                                            <h4>
                                                <span>03.</span>
                                                Business Idea
                                            </h4>
                                            <p>Kami membantu mengembangkan ide bisnis inovatif berbasis teknologi, mengubah konsep kreatif menjadi peluang yang dapat diimplementasikan secara efektif.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12" style="display: flex; justify-content: center;">
                            <div class="solution-wrapper mt-10" data-aos="fade-up" data-aos-delay="600" style="width:35%;">
                                <div class="solution-title center">
                                    <h4>
                                        <span>04.</span>
                                        Improvments
                                    </h4>
                                    <p>Optimalisasi proses dan efisiensi operasional menjadi fokus utama kami dalam membantu bisnis beradaptasi dengan teknologi dan tren industri terbaru.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mask-group">
                        <img data-aos="fade-down" data-aos-easing="linear" class="mask1" src="{{ asset('assets/new_asset/img/mask/leftMask.svg') }}" alt="mask" />
                        <img data-aos="fade-down" data-aos-easing="linear"  class="mask2" src="{{ asset('assets/new_asset/img/mask/mask8.png') }}" alt="mask" />
                        <img data-aos="fade-down" data-aos-easing="linear"  class="mask3" src="{{ asset('assets/new_asset/img/mask/downShape.svg') }}" alt="mask" />
                    </div>
                </div>
            </section>
            <section class="d-md-block d-block d-lg-none about-solution">
                <div class="container">
                    <div class="section-title text-center" data-aos="fade-up">
                        <h2>Why Should You Work With Us?</h2>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="solution-wrapper mb-30">
                                <div class="solution-title center">
                                    <h4>
                                        <span>01.</span>
                                        Business Solution
                                    </h4>
                                    <p>Ut id orci ultricies, gravida arcu ac, elementum eros. Curabitur tortor ipsum, imperdiet eget odio ac, faucibus ultricies nisl.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="solution-wrapper mb-30">
                                <div class="solution-title center">
                                    <h4>
                                        <span>02.</span>
                                        Organization
                                    </h4>
                                    <p>Ut id orci ultricies, gravida arcu ac, elementum eros. Curabitur tortor ipsum, imperdiet eget odio ac, faucibus ultricies nisl.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="solution-wrapper mb-30">
                                <div class="solution-title center">
                                    <h4>
                                        <span>03.</span>
                                        Business Idea
                                    </h4>
                                    <p>Ut id orci ultricies, gravida arcu ac, elementum eros. Curabitur tortor ipsum, imperdiet eget odio ac, faucibus ultricies nisl.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="solution-wrapper mb-30">
                                <div class="solution-title center">
                                    <h4>
                                        <span>04.</span>
                                        Improvments
                                    </h4>
                                    <p>Ut id orci ultricies, gravida arcu ac, elementum eros. Curabitur tortor ipsum, imperdiet eget odio ac, faucibus ultricies nisl.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="solution-wrapper mb-30">
                                <div class="solution-title center">
                                    <h4>
                                        <span>05.</span>
                                        Consultancy
                                    </h4>
                                    <p>Ut id orci ultricies, gravida arcu ac, elementum eros. Curabitur tortor ipsum, imperdiet eget odio ac, faucibus ultricies nisl.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="solution-wrapper">
                                <div class="solution-title center">
                                    <h4>
                                        <span>06.</span>
                                        Strategy
                                    </h4>
                                    <p>Ut id orci ultricies, gravida arcu ac, elementum eros. Curabitur tortor ipsum, imperdiet eget odio ac, faucibus ultricies nisl.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mask-group">
                    <img class="mask1" src="{{ asset('assets/new_asset/img/mask/leftMask.svg') }}" alt="mask" />
                    <img class="mask2" src="{{ asset('assets/new_asset/img/mask/mask8.png') }}" alt="mask" />
                    <img class="mask3" src="{{ asset('assets/new_asset/img/mask/downShape.svg') }}" alt="mask" />
                </div>
        </section>
	<!-- END WORK SOLUTION -->

	<!-- BEGIN WORK UPGRADE-->
			<section class="about-skill">
                <div class="container">
                    <div class="row align-items-center align-items-lg-start">
                        <div class="col-lg-7 order-2 order-lg-0">
                            <div class="about-skill-wrapper" data-aos="fade-up">
                                <div class="about-skill-title">
                                    <h2>Science Techno Park IT PLN</h2>
                                    <p>
                                        STP IT PLN adalah pusat inovasi yang menghubungkan penelitian akademis dengan industri. Berfokus pada teknologi dan transformasi digital, kami mendorong solusi inovatif untuk mendukung perkembangan bisnis dan industri.
                                    </p>
                                </div>
                                <div class="about-skill-pogressbar">
                                    <div class="round-wrapper">
                                        <div class="round round-1" data-value="0.80" data-size="200" data-thickness="15">
                                            <div class="round-text">
                                                <strong>80%</strong>
                                            </div>
                                            <div></div>
                                        </div>
                                        <div class="skill-text">
                                            <h6>Inkubasi Bisnis</h6>
                                            <p>Vitae viverra urna nulla sed</p>
                                        </div>
                                    </div>
                                    <div class="round-wrapper">
                                        <div class="round round-1" data-value="0.90" data-size="200" data-thickness="15">
                                            <div class="round-text">
                                                <strong>9%</strong>
                                            </div>
                                        </div>
                                        <div class="skill-text">
                                            <h6>Research & Development</h6>
                                            <p>Vitae viverra urna nulla sed</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 order-1 order-lg-0">
                            <div class="about-skill-image" data-aos="fade-left" data-aos-delay="500">
                                <img src="{{ asset('assets/new_asset/img/services/chacha2.png') }}" alt="image" />
                            </div>
                        </div>
                    </div>
                </div>
            </section>
	<!-- END WORK UPGRADE-->

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
				<a class="active" href="{{ route('about') }}">
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

  <!-- bootstrap js -->
	<script src="{{ asset('assets/js/bootstrap.js') }}"></script>
  <!-- owl slider -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <!-- custom js -->
	<script ssrc="{{ asset('assets/js/custom.js') }}"></script>
	<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
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

	<!-- Circle Progress -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/jquery-circle-progress@1.2.2/dist/circle-progress.min.js"></script>
	<script>
		$('.round').each(function () {
		let el = $(this);
		let value = el.data('value');
		let size = el.data('size');
		let thickness = el.data('thickness');

		el.circleProgress({
			value: value,
			size: size,
			thickness: thickness,
			fill: { gradient: ['#00ffff', '#007fff'] }
		}).on('circle-animation-progress', function (event, progress) {
			let percentage = Math.round(value * 100 * progress);
			$(this).find('strong').html(percentage + '%');
		});
	});

	</script>


	<script>
	AOS.init();
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

