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

  <title> Pusat Exclusive </title>

  <!-- bootstrap core css -->
	<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">


  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">


  <!--owl slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
  <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@600&display=swap" rel="stylesheet">



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

		.judul-lab {
		text-align: center;
		margin-bottom: 20px;
		}

		.judul-lab h2 {
		font-size: 32px;
		font-weight: 700;
		color: #2c3e50;
		text-shadow: 1px 1px 4px rgba(0,0,0,0.1);
		position: relative;
		display: inline-block;
		padding-bottom: 10px;
		}

		.judul-lab h2::after {
		content: '';
		position: absolute;
		left: 50%;
		transform: translateX(-50%);
		bottom: 0;
		width: 60%;
		height: 3px;
		background-color: #3498db;
		border-radius: 5px;
		}

		.judul-lab h2:hover {
		color: #2980b9;
		transform: scale(1.05);
		text-shadow: 2px 2px 6px rgba(0,0,0,0.15);
		}

		.judul-lab h2:hover::after {
		width: 80%;
		background-color: #1abc9c;
		}

		/* Laboratorium Template */
		.button-container {
		display: flex;
		justify-content: center;
		gap: 20px;
		margin-bottom: 40px;
		}

		/* --- Desain tombol --- */
		.btn {
		padding: 12px 24px;
		font-size: 16px;
		font-weight: 600;
		color: white;
		background-color: #007bff;
		border: none;
		border-radius: 8px;
		cursor: pointer;
		box-shadow: 0 4px 8px rgba(0, 123, 255, 0.2);
		transition: background-color 0.3s ease, transform 0.2s ease;
		}

		.btn:hover {
		background-color: #0056b3;
		transform: scale(1.05);
		}

		.btn.active {
		background-color: #004080;
		}

        /* Responsif: vertikal di mobile */
        @media (max-width: 600px) {
            .button-container {
                flex-direction: column;
                align-items: center;
            }

            .button-container .btn {
                width: 100%;
                max-width: 300px; /* biar gak terlalu panjang */
            }
        }

		/* --- Konten disembunyikan default --- */
		.content-section {
		display: none;
		text-align: center;
		max-width: 1000px;
		margin: 20px auto;
		}

		.content-section.active {
		display: block;
		animation: fadeIn 0.5s ease-in-out;
		}

		@keyframes fadeIn {
		from { opacity: 0; transform: translateY(10px); }
		to { opacity: 1; transform: translateY(0); }
		}

		/* --- Gambar disembunyikan default --- */
		.project-wrapper-image img {
		display: none;
		width: 200px;
		margin: 15px auto;
		}

		.content-section.active .project-wrapper-image img {
		display: block;
		}

		.project-wrapper-image {
			display: flex;
			justify-content: center;
			align-items: center;
		}

		.project-wrapper-image img {
			width: 200px;
		}

        /* Modal Laboratorium */
        .futuristic-modal {
            position: fixed;
            top: 0; left: 0;
            width: 100vw;
            height: 100vh;
            background: rgba(10, 10, 20, 0.85);
            display: none;
            justify-content: center;
            align-items: center;
            z-index: 10000;
            backdrop-filter: blur(8px);
        }

        .futuristic-modal.show {
            display: flex; /* muncul pas ditrigger */
        }

        .futuristic-modal-content {
            background: #1c1f2b;
            padding: 30px;
            border-radius: 12px;
            max-width: 900px;
            width: 95%;
            position: relative;
            box-shadow: 0 0 30px rgba(0,255,255,0.1);
            animation: fadeIn 0.3s ease-in-out;
            color: #fff;
            margin: auto; /* ini yang bikin tetap di tengah */
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .close-btn {
            position: absolute;
            top: 15px;
            right: 20px;
            font-size: 24px;
            color: #aaa;
            cursor: pointer;
            transition: 0.3s;
        }

        .close-btn:hover {
            color: #fff;
            transform: rotate(90deg);
        }

        .gallery-title {
            text-align: center;
            margin-bottom: 20px;
            font-size: 24px;
            color: #00f0ff;
            text-shadow: 0 0 5px #0ff;
        }

        .gallery-grid {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 15px;
        }

        .gallery-grid img {
            width: 160px;
            height: 120px;
            object-fit: cover;
            border-radius: 10px;
            transition: 0.3s ease;
            box-shadow: 0 0 10px rgba(0,255,255,0.1);
            cursor: pointer;
        }

        .gallery-grid img:hover {
            transform: scale(1.05);
            box-shadow: 0 0 20px #00f0ff;
        }

        @keyframes flashHighlight {
        0% { background-color: yellow; }
        100% { background-color: transparent; }
        }

        .highlight-flash {
        animation: flashHighlight 2s ease-in-out;
        }

        #galleryContainer {
            max-height: 70vh; /* atau 80vh sesuai kebutuhan */
            overflow-y: auto;
        }

        /* Modal galeri */
        #galleryModal {
            display: none;
            position: fixed;
            top: 0; left: 0;
            width: 100%; height: 100%;
            background-color: rgba(0, 0, 0, 0.7);
            z-index: 999;
            /* jangan tambahkan overflow di sini */
        }


        /* Container gambar di dalam modal */
        #galleryContainer {
            max-height: 80vh;  /* atau ukuran tinggi maksimal yang kamu mau */
            overflow-y: auto;  /* hanya scroll ke bawah */
            padding: 20px;
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            justify-content: center;
            scrollbar-width: none; /* Firefox */
            -ms-overflow-style: none; /* Internet Explorer 10+ */
        }

        #galleryContainer::-webkit-scrollbar {
            display: none; /* Chrome, Safari */
        }

        /* Modal gambar penuh */
        #imageModal {
            display: none;
            position: fixed;
            top: 0; left: 0;
            width: 100%; height: 100%;
            background-color: rgba(0, 0, 0, 0.9);
            justify-content: center;
            align-items: center;
            overflow-y: auto;
            z-index: 1000;
        }

        p{
            text-align: justify;
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
						<li class="nav-item">
							<!-- Inovasi -->
							<a class="nav-link" href="{{ route('inovasi') }}">Inovasi</a>
						</li>
						<li class="nav-item">
							<!-- HKI -->
							<a class="nav-link" href="{{ route('login') }}">HKI</a>
						</li>
                        {{-- Penyewaan --}}
                        <li class="nav-item active" style="position: relative;">
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
									Exclusive Room
								</h1>
							</div>
							<p style="font-family: 'Roboto', sans-serif; font-size: 15px; letter-spacing: 1px; color: #f0f0f0; line-height: 1.8; text-shadow: 1px 1px 5px rgba(0,0,0,0.15); padding-right: 10px;">
								Komitmen STP ITPLN dalam mengembangkan solusi teknologi lewat riset demi mendukung bisnis dan industri yang berkelanjutan dan unggul secara kompetitif.
							</p>
						</div>
					</div>
					<div class="col-lg-6 order-1 order-lg-2">
						<div class="banner-image d-flex justify-content-center" data-aos="fade-left" data-aos-delay="300" data-aos-offset="500">
							<img src="{{ asset('assets/new_asset/img/fotokita.jpg') }}"alt="banner-image" class="img-fluid banner-img" style="border-radius: 20px; width: 80%; box-shadow: 0 15px 45px rgba(0, 0, 0, 0.25);"/>
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
										Laboratorium
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

			<div class="judul-lab">
				<h2>Laboratorium yang ada di Institut Teknologi PLN</h2>
			</div>

				<div class="button-container">
					<button class="btn" onclick="showContent('vision', this)">Exclusive Vision</button>
					<button class="btn" onclick="showContent('impact', this)">Exclusive Impact</button>
				</div>

				<!-- Exclusive Vision -->
				<div id="vision" class="content-section">

					<div class="container project__container">
						<div class="row justify-content-center">

							{{-- 1 --}}
							<div class="col-md-6 col-sm-12">
								<div class="project-wrapper" data-aos="fade-right">
									<div class="project-wrapper-image">
										<img style="width: 300px; padding: 15px; margin: 15px; " src="{{ asset('assets/gallery/exclusive/pembangkit/pembangkit.jpg') }}" alt="image" />
									</div>
									<div class="project-wrapper-title">
										<h3 style="font-size: 20px;">Ruang Pembangkit (Studio)</h3>
										<span style="font-size: 13px;">Exclusive Vision</span>
										<p style="font-size: 13px;">
											Ruang ini menjadi tempat lahirnya ide-ide kreatif dan gagasan visioner. Dirancang sebagai studio multifungsi, ruang ini mendukung kegiatan produksi konten, perekaman, hingga diskusi kreatif dengan fasilitas yang modern dan fleksibel. Suasana yang dinamis dan profesional menjadikannya wadah ideal untuk mewujudkan inovasi dari konsep menjadi karya nyata. 🎧🎥
										</p>
									</div>
									<div class="project-wrapper-button">
                                        <a style="font-size: 13px;" class="primary__button primary__button-outline explore-btn"
                                            data-lab="1" href="javascript:void(0)">
                                            Explore Ruangan
                                        </a>
                                        <a style="font-size: 13px;" href="{{ route('exc') }}"
                                            class="primary__button primary__button-outline">
                                            Sewa Ruangan
                                        </a>
                                    </div>
								</div>
							</div>

							{{-- 2 --}}
							<div class="col-md-6 col-sm-12">
								<div class="project-wrapper" data-aos="fade-left" data-aos-delay="300">
									<div class="project-wrapper-image">
										<img style="width: 300px; padding: 15px; margin: 15px" src="{{ asset('assets/gallery/exclusive/auditorium/auditorium.jpg') }}" alt="image" />
									</div>
									<div class="project-wrapper-title">
										<h3 style="font-size: 20px;">Auditorium</h3>
										<span style="font-size: 13px;">Exclusive Vision</span>
										<p style="font-size: 13px;">
											Auditorium ini menjadi pusat berbagai kegiatan berskala besar yang menginspirasi dan membangkitkan visi masa depan. Dengan kapasitas luas, tata suara profesional, dan desain interior yang megah, ruangan ini ideal untuk seminar, konferensi, peluncuran inovasi, hingga pertunjukan akademik. Dirancang untuk meninggalkan kesan mendalam dalam setiap momen penting. 🎤🎬
										</p>
									</div>
									<div class="project-wrapper-button">
                                        <a style="font-size: 13px;" class="primary__button primary__button-outline explore-btn"
                                            data-lab="2" href="javascript:void(0)">
                                            Explore Ruangan
                                        </a>
                                        <a style="font-size: 13px;" href="{{ route('exc') }}"
                                            class="primary__button primary__button-outline">
                                            Sewa Ruangan
                                        </a>
                                    </div>
								</div>
							</div>

						</div>
					</div>

				</div>

				<!-- Exclusive Impact -->
				<div id="impact" class="content-section">

					<div class="container project__container">
						<div class="row justify-content-center">

							{{-- 1 --}}
							<div class="col-md-6 col-sm-12">
								<div class="project-wrapper" data-aos="fade-right">
									<div class="project-wrapper-image">
										<img style="width: 300px; padding: 15px; margin: 15px" src="{{ asset('assets/gallery/exclusive/sedyatmo/sedyatmo.jpg') }}" alt="image" />
									</div>
									<div class="project-wrapper-title">
										<h3 style="font-size: 20px;">Ruang Prof. Dr. Ir. Sedyatmo</h3>
										<span style="font-size: 13px;">Exclusive Impact</span>
										<p style="font-size: 13px; text-align:justify">
											Ruang rapat eksklusif ini menghadirkan suasana profesional dan prestisius, terinspirasi dari warisan keilmuan Prof. Dr. Ir. Sedyatmo. Dirancang untuk mendukung pengambilan keputusan strategis dan kolaborasi tingkat tinggi, ruangan ini dilengkapi dengan fasilitas modern dan suasana yang kondusif bagi diskusi bernilai tinggi. Ideal untuk pertemuan penting, presentasi visi, hingga perumusan gagasan berdampak besar. 🏛️📊
										</p>
									</div>
									<div class="project-wrapper-button">
                                        <a style="font-size: 13px;" class="primary__button primary__button-outline explore-btn"
                                            data-lab="3" href="javascript:void(0)">
                                            Explore Ruangan
                                        </a>
                                        <a style="font-size: 13px;" href="{{ route('exc') }}"
                                            class="primary__button primary__button-outline">
                                            Sewa Ruangan
                                        </a>
                                    </div>
								</div>
							</div>

							{{-- 2 --}}
							<div class="col-md-6 col-sm-12">
								<div class="project-wrapper" data-aos="fade-left" data-aos-delay="300">
									<div class="project-wrapper-image">
										<img style="width: 300px; padding: 15px; margin: 15px" src="{{ asset('assets/gallery/exclusive/kantin_dosen/kantin_dosen.jpg') }}" alt="image" />
									</div>
									<div class="project-wrapper-title">
										<h3 style="font-size: 20px;">Ruang Kantin Dosen</h3>
										<span style="font-size: 13px;">Exclusive Impact</span>
										<p style="font-size: 13px;">
											Ruang kantin ini dirancang khusus untuk dosen dengan suasana yang tenang, privat, dan nyaman. Menyediakan area bersantap yang elegan sekaligus menjadi tempat rehat dari rutinitas akademik. Perpaduan antara kenyamanan dan eksklusivitas mendukung interaksi informal maupun diskusi ringan antar sivitas akademika dalam nuansa yang profesional dan bersahaja. 🍽️☕️
										</p>
									</div>
									<div class="project-wrapper-button">
                                        <a style="font-size: 13px;" class="primary__button primary__button-outline explore-btn"
                                            data-lab="4" href="javascript:void(0)">
                                            Explore Ruangan
                                        </a>
                                        <a style="font-size: 13px;" href="{{ route('exc') }}"
                                            class="primary__button primary__button-outline">
                                            Sewa Ruangan
                                        </a>
                                    </div>
								</div>
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

    {{-- Modal Laboratorium --}}
    <div id="galleryModal" class="futuristic-modal">
        <div class="futuristic-modal-content" >
            <span class="close-btn" id="closeGallery">&times;</span>
            <h2 class="gallery-title">Explore Gallery</h2>
            <div class="gallery-grid" id="galleryContainer"></div>
        </div>
    </div>

    {{-- Modal Gambar Besar --}}
    <div id="imageModal" class="futuristic-modal">
        <div class="futuristic-modal-content" style="max-width: 90%; text-align: center;">
            <span class="close-btn" id="closeImageModal">&times;</span>
            <img id="fullImage" src="" alt="Full Image" style="max-width: 100%; border-radius: 12px;">
        </div>
    </div>


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
		function showContent(sectionId, btn) {
		// Sembunyikan semua konten
		document.querySelectorAll('.content-section').forEach(section => {
			section.classList.remove('active');
		});

		// Reset semua tombol
		document.querySelectorAll('.btn').forEach(button => {
			button.classList.remove('active');
		});

		// Tampilkan yang dipilih
		document.getElementById(sectionId).classList.add('active');
		btn.classList.add('active');
		}
	</script>

    {{-- Modal Laboratoriunm --}}
    <script>
        const galleries = @json($galleries);
    </script>

    <script>
        const modal = document.getElementById('galleryModal');
        const closeBtn = document.getElementById('closeGallery');
        const galleryContainer = document.getElementById('galleryContainer');

        // Buka modal saat tombol Explore diklik
        document.querySelectorAll('.explore-btn').forEach(button => {
            button.addEventListener('click', function () {
                const labId = this.dataset.lab;
                const images = galleries[labId];

                galleryContainer.innerHTML = ''; // Kosongkan isi sebelumnya

                if (images && images.length > 0) {
                    images.forEach(src => {
                        const img = document.createElement('img');
                        img.src = src;
                        img.classList.add('gallery-image');
                        galleryContainer.appendChild(img);
                    });
                } else {
                    galleryContainer.innerHTML = '<p>No images found for this lab.</p>';
                }

                modal.style.display = 'block';
            });
        });

        // Tombol close modal
        closeBtn.addEventListener('click', () => {
            modal.style.display = 'none';
        });

        // Klik di luar modal untuk menutup
        window.addEventListener('click', (event) => {
            if (event.target === modal) {
                modal.style.display = 'none';
            }
        });
    </script>

    <script>
        const imageModal = document.getElementById('imageModal');
        const fullImage = document.getElementById('fullImage');
        const closeImageModal = document.getElementById('closeImageModal');

        // Event delegation: Tambahkan event dblclick (2x klik) ke container gambar
        galleryContainer.addEventListener('dblclick', function (event) {
            if (event.target.tagName === 'IMG') {
                fullImage.src = event.target.src;
                imageModal.style.display = 'flex';
            }
        });

        // Tutup modal gambar
        closeImageModal.addEventListener('click', () => {
            imageModal.style.display = 'none';
        });

        // Klik di luar modal gambar juga menutup
        window.addEventListener('click', (event) => {
            if (event.target === imageModal) {
                imageModal.style.display = 'none';
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
