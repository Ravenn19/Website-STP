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
	<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
	<link rel="shortcut icon" href="{{ asset('assets/images/stp.png') }}" type="image/png">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-x..." crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">


	<title> STP ITPLN </title>

	<style>
		#ini_h1 {
		font-size: 3rem;
		font-weight: 700;
		text-align: center;
		color: white;
		padding: 40px 0;
		margin: 0 auto;
		position: relative;
		letter-spacing: 2px;
		text-transform: uppercase;
		overflow: hidden;
		}

		#ini_h1::after {
		content: '';
		display: block;
		width: 0;
		height: 3px;
		background: #00c6ff; /* Biru terang */
		margin: 15px auto 0;
		transition: width 0.4s ease-in-out;
		}

		#ini_h1:hover {
		color: #00c6ff; /* Ganti warna teks menjadi biru terang */
		text-shadow: 0 0 10px rgba(0, 198, 255, 0.8), 0 0 20px rgba(0, 198, 255, 0.6); /* Glow effect */
		transform: translateY(-5px); /* Sedikit gerakan ke atas */
		}

		#ini_h1:hover::after {
		width: 100%; /* Garis bawah muncul sepenuhnya saat hover */
		}

		.homepage-03 {
		padding: 80px 0;
		}

		.call-to-action03 .sub-section-heading h6 {
		font-size: 1.1rem;
		font-weight: 600;
		letter-spacing: 1px;
		text-transform: uppercase;
		color: #fff;
		margin-bottom: 15px;
		}

		.call-to-action03 .sub-section-heading h2 {
		font-size: 2.5rem;
		font-weight: 700;
		color: #f0f0f0; /* light text color for better contrast */
		line-height: 1.4;
		margin-bottom: 20px;
		letter-spacing: 1px;
		}

		.call-to-action03 p {
		font-size: 1rem;
		color: #e0e0e0; /* softer light gray text */
		margin-bottom: 30px;
		line-height: 1.8;
		}

		/* Button Styling */
		.primary__button {
		background-color: #ed880a;
		padding: 12px 25px;
		font-size: 1.1rem;
		font-weight: 600;
		color: #fff;
		border-radius: 50px;
		transition: all 0.3s ease;
		border: none;
		}

		.primary__button:hover {
		background-color: #d57c06;
		transform: translateY(-3px);
		box-shadow: 0 12px 18px rgba(0, 0, 0, 0.1);
		}

		/* Video Wrapper Styling */
		.video-container {
		position: relative;
		padding: 20px;
		background-color: rgba(255, 255, 255, 0.1);
		border-radius: 16px;
		border: 3px solid #1d69a3; /* matching border color */
		box-shadow: 0 15px 40px rgba(0, 0, 0, 0.2);
		transition: transform 0.3s ease;
		max-width: 100%;
		}

		.video-container:hover {
		transform: translateY(-5px);
		}

		.video-frame {
		position: relative;
		padding-bottom: 56.25%;
		height: 0;
		overflow: hidden;
		border-radius: 12px;
		background-color: #000;
		}

		.video-frame iframe {
		position: absolute;
		top: 0;
		left: 0;
		width: 100%;
		height: 100%;
		border: none;
		border-radius: 12px;
		transition: transform 0.3s ease;
		}

		.video-frame iframe:hover {
		transform: scale(1.05);
		}

		.team_container .box {
		background-color: #1b263b;
		border: 1.5px solid transparent;
		border-radius: 15px;
		text-align: center;
		padding: 30px 20px;
		margin: 20px auto;
		transition: all 0.4s ease;
		box-shadow: 0 5px 12px rgba(0, 0, 0, 0.2);
		max-width: 300px;
		color: #ffffff;
		transform-style: preserve-3d;
		position: relative;
		overflow: hidden;
		}

		.team_container .box::before {
		content: "";
		position: absolute;
		inset: 0;
		background: linear-gradient(135deg, #3a86ff66, #4361ee33);
		opacity: 0;
		transition: 0.4s ease;
		z-index: 0;
		}

		.team_container .box:hover::before {
		opacity: 1;
		}

		.team_container .box:hover {
		transform: translateY(-8px) scale(1.02);
		border-color: #3a86ff;
		box-shadow: 0 12px 24px rgba(58, 134, 255, 0.3);
		}

		.team_container .img-box {
		width: 120px;
		height: 120px;
		margin: 0 auto 20px;
		border-radius: 50%;
		overflow: hidden;
		border: 3px solid #3a86ff80;
		transition: transform 0.4s ease;
		z-index: 1;
		position: relative;
		}

		.team_container .box:hover .img-box {
		transform: rotate(3deg) scale(1.05);
		}

		.team_container .img-box img {
		width: 100%;
		height: 100%;
		object-fit: cover;
		}

		.team_container .detail-box {
		z-index: 1;
		position: relative;
		}

		.team_container .detail-box h5 {
		font-size: 18px;
		font-weight: 600;
		color: #ffffff;
		margin-bottom: 8px;
		}

		.team_container .detail-box p {
		font-size: 14px;
		color: #ced4da;
		}

		.social_box {
		z-index: 1;
		position: relative;
		}

		.social_box a {
		color: #3a86ff;
		margin: 0 6px;
		font-size: 18px;
		transition: 0.2s ease-in-out;
		}

		.social_box a:hover {
		color: #ffffff;
		transform: scale(1.2);
		}

		.read-more-button:hover {
		transform: translateY(-3px) scale(1.05);
		background: linear-gradient(90deg, #00c6ff, #0072ff);
		box-shadow: 0 8px 20px rgba(0,198,255,0.7);
		}

		.read-more-section {
		max-width: 900px;
		margin: 50px auto;
		text-align: center;
		font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
		}

		.read-more-btn2 {
		background: linear-gradient(135deg, #00b4db, #0083b0);
		border: none;
		color: white;
		font-size: 18px;
		padding: 14px 48px;
		border-radius: 30px;
		cursor: pointer;
		box-shadow: 0 8px 15px rgba(0, 180, 219, 0.3);
		transition: all 0.3s ease;
		letter-spacing: 1.1px;
		font-weight: 600;
		user-select: none;
		}

		.read-more-btn2:hover {
		background: linear-gradient(135deg, #0083b0, #00b4db);
		box-shadow: 0 12px 20px rgba(0, 131, 176, 0.5);
		transform: translateY(-3px);
		}

		.image-gallery2 {
		margin-top: 40px;
		display: grid;
		grid-template-columns: repeat(3, 1fr);
		gap: 25px;
		justify-items: center;
		justify-content: center;
		}

		/* Gambar ukuran asli, max lebar 260px, tinggi otomatis sesuai proporsi asli */
		.image-gallery2 img {
		max-width: 260px;
		width: 100%;
		height: auto; /* tinggi mengikuti proporsi asli */
		border-radius: 20px;
		box-shadow: 0 10px 25px rgba(0,0,0,0.15);
		cursor: pointer;
		transition: transform 0.35s ease, box-shadow 0.35s ease;
		filter: brightness(0.9);
		}

		.image-gallery2 img:hover {
		transform: scale(1.1) rotate(2deg);
		box-shadow: 0 20px 40px rgba(0,0,0,0.3);
		filter: brightness(1);
		}

		.image-gallery2 > :nth-last-child(1):nth-child(3n + 1) {
			grid-column-start: 2; /* mulai di kolom ke-2 agar di tengah */
		}

		.section-title {
		font-size: 25px;
		font-weight: 700;
		color: #2e2e2e;
		margin-bottom: 25px;
		letter-spacing: 1px;
		text-transform: uppercase;
		text-align: center;
		background: linear-gradient(90deg, #3f51b5, #9fa8da);
		-webkit-background-clip: text;
		-webkit-text-fill-color: transparent;
		}

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

        /* Futuristik Gambar Index */
        .futuristic-img-container {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 30px;
            border-radius: 20px;
            overflow: hidden;
            background: linear-gradient(145deg, rgba(0, 60, 90, 0.4), rgba(0, 20, 40, 0.6));
            backdrop-filter: blur(10px);
            position: relative;
            box-shadow: 0 0 20px rgba(0, 255, 255, 0.1), inset 0 0 10px rgba(0, 255, 255, 0.05);
            animation: bgPulse 2s ease-in-out infinite alternate;
        }

        .futuristic-img-container img {
            width: 70%;
            opacity: 0;
            transform: scale(0.9) translateY(25px);
            border-radius: 16px;
            filter: brightness(1.2) blur(2px);
            animation: materializeIn 1s ease-out forwards;
            transition: transform 0.4s ease, filter 0.4s ease;
        }

        /* Hover: terang + efek menyala */
        .futuristic-img-container img:hover {
            transform: scale(1.03);
            filter: brightness(1.4) drop-shadow(0 0 25px #00eaff);
        }

        /* Efek masuk */
        @keyframes materializeIn {
            0% {
                opacity: 0;
                transform: scale(0.9) translateY(30px);
                filter: blur(5px) brightness(1.6);
            }
            50% {
                opacity: 0.6;
                transform: scale(1.02) translateY(8px);
                filter: blur(1.5px) brightness(1.3);
            }
            100% {
                opacity: 1;
                transform: scale(1) translateY(0);
                filter: blur(0) brightness(1.2);
            }
        }

        /* Background-nya berdenyut halus */
        @keyframes bgPulse {
            0% {
                box-shadow: 0 0 20px rgba(0, 255, 255, 0.1), inset 0 0 10px rgba(0, 255, 255, 0.05);
            }
            100% {
                box-shadow: 0 0 30px rgba(0, 255, 255, 0.2), inset 0 0 15px rgba(0, 255, 255, 0.1);
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

	<!-- bootstrap core css -->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.css') }}">

	<!-- fonts style -->
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

	<!--owl slider stylesheet -->
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

	<!-- font awesome style -->
	<link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}">

	<!-- Custom styles for this template -->
	<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

	<!-- responsive style -->
	<link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">

	<link rel="stylesheet" href="{{ asset('assets/css/backtotop.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/amount.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/introduction_index.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/collab.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/services.css') }}">

	</head>

	<body>

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
				<a class="navbar-brand" href="{{ url('/') }}" style="width: 29%;">
					<span>
						<img style="width:50%;" src="{{ asset('assets/images/stp1.png') }}" alt="">
					</span>
				</a>

				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class=""> </span>
				</button>

				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav" style="padding: 30px; font-size:12px">
						<li class="nav-item active">
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
		<!-- slider section -->
		<div class="container">
			<h1 id="ini_h1" style="margin: -10px">
			SCIENCE TECHNO PARK ITPLN
			</h1>
		</div>

		<section class="slider_section ">
		<div id="customCarousel1" class="carousel slide" data-ride="carousel">
			<div class="carousel-inner">
			<div class="carousel-item active">
				<div class="container ">
				<div class="row">
					<div class="col-md-6 ">
					<div class="detail-box">
						<h1>
						STP ITPLN<br>
						</h1>
						<p>
						Science Techno Park ITPLN (STP ITPLN) adalah sebuah pusat inovasi dan pengembangan teknologi yang berada di bawah naungan Institut Teknologi PLN (ITPLN). Tujuan utama dari STP ini adalah menjembatani antara dunia akademik, industri, dan masyarakat.
						</p>
						<div class="btn-box">
						<a href="{{ route('login') }}" class="btn1">
							Get Started
						</a>
						</div>
					</div>
					</div>
					<div class="col-md-6">
                        <div class="futuristic-img-container"  style="display: flex; align-items: center; justify-content: center;">
                            <img style="box-shadow: 0 4px 10px rgba(0, 0, 0, 0.6); width: 100%" src="{{ asset('assets/images/pitastp.jpg') }}" alt="">
                        </div>
					</div>
				</div>
				</div>
			</div>
			<div class="carousel-item ">
				<div class="container ">
				<div class="row">
					<div class="col-md-6 ">
					<div class="detail-box">
						<h1>
						STP ITPLN<br>
						</h1>
						<p>
						Science Techno Park ITPLN (STP ITPLN) adalah sebuah pusat inovasi dan pengembangan teknologi yang berada di bawah naungan Institut Teknologi PLN (ITPLN). Tujuan utama dari STP ini adalah menjembatani antara dunia akademik, industri, dan masyarakat.
						</p>
						</p>
						<div class="btn-box">
						<a href="{{ route('login') }}" class="btn1">
							Get Started
						</a>
						</div>
					</div>
					</div>
					<div class="col-md-6">
					<div class="futuristic-img-container">
						<img style="box-shadow: 0 4px 10px rgba(0, 0, 0, 0.6); width: 100%" src="{{ asset('assets/images/foto_bareng2.jpg') }}" alt="">
					</div>
					</div>
				</div>
				</div>
			</div>
			<div class="carousel-item">
				<div class="container ">
				<div class="row">
					<div class="col-md-6 ">
					<div class="detail-box">
						<h1>
						STP ITPLN<br>
						</h1>
						<p>
						Science Techno Park ITPLN (STP ITPLN) adalah sebuah pusat inovasi dan pengembangan teknologi yang berada di bawah naungan Institut Teknologi PLN (ITPLN). Tujuan utama dari STP ini adalah menjembatani antara dunia akademik, industri, dan masyarakat.
						</p>
						<div class="btn-box">
						<a href="{{ route('login') }}" class="btn1">
							Get Started
						</a>
						</div>
					</div>
					</div>
					<div class="col-md-6">
					<div class="futuristic-img-container">
						<img style="box-shadow: 0 4px 10px rgba(0, 0, 0, 0.6); width:100%" src="{{ asset('assets/images/foto_bareng3.jpg') }}" alt="">
					</div>
					</div>
				</div>
				</div>
			</div>
            <div class="carousel-item">
				<div class="container ">
				<div class="row">
					<div class="col-md-6 ">
					<div class="detail-box">
						<h1>
						STP ITPLN<br>
						</h1>
						<p>
						Science Techno Park ITPLN (STP ITPLN) adalah sebuah pusat inovasi dan pengembangan teknologi yang berada di bawah naungan Institut Teknologi PLN (ITPLN). Tujuan utama dari STP ini adalah menjembatani antara dunia akademik, industri, dan masyarakat.
						</p>
						<div class="btn-box">
						<a href="{{ route('login') }}" class="btn1">
							Get Started
						</a>
						</div>
					</div>
					</div>
					<div class="col-md-6">
					<div class="futuristic-img-container">
						<img style="box-shadow: 0 4px 10px rgba(0, 0, 0, 0.6); width: 70%;" src="{{ asset('assets/images/foto_bareng1.jpg') }}" alt="">
					</div>
					</div>
				</div>
				</div>
			</div>
			</div>
			<ol class="carousel-indicators">
			<li data-target="#customCarousel1" data-slide-to="0" class="active"></li>
			<li data-target="#customCarousel1" data-slide-to="1"></li>
			<li data-target="#customCarousel1" data-slide-to="2"></li>
			<li data-target="#customCarousel1" data-slide-to="3"></li>
			</ol>

		</div>

		</section>
		<!-- end slider section -->
	</div>

	<!-- Begin Image -->
		<section class="read-more-section">
			<h2 class="section-title">PRODUK INKUBASI STP ITPLN</h2>
			<button class="read-more-btn2" onclick="showImages()">Read More</button>

			<div id="image-gallery2" class="image-gallery2" style="display: none;">
				<img src="{{ asset('assets/images/imagess1.jpg') }}" alt="Image 1" />
                <img src="{{ asset('assets/images/imagess2.jpg') }}" alt="Image 2" />
                <img src="{{ asset('assets/images/imagess3.jpg') }}" alt="Image 3" />
                <img src="{{ asset('assets/images/imagess4.jpg') }}" alt="Image 4" />
                <img src="{{ asset('assets/images/imagess5.jpg') }}" alt="Image 5" />
                <img src="{{ asset('assets/images/imagess6.jpg') }}" alt="Image 6" />
                <img src="{{ asset('assets/images/imagess7.jpg') }}" alt="Image 7" />
			</div>
		</section>


	<!-- End Image -->


	<!-- service section -->

	<section class="stp-ip-section" style="padding-top: 50px">
		<div class="container">
			<div class="section-heading text-center" data-aos="fade-up">
			<h2 style="font-size:30px">Amount of Intellectual Property</h2>
			<p style="font-size:17px">
				STP ITPLN telah menghasilkan dan mendukung berbagai Hak Kekayaan Intelektual (HKI) sebagai bukti inovasi dan keunggulan riset kami. Dengan jumlah yang terus bertambah, kami memastikan setiap karya memiliki nilai komersial dan perlindungan hukum yang kuat.
			</p>
			</div>
			<div class="row justify-content-center">
				<div class="col-lg-3 col-md-6" data-aos="fade-up" style="align-items: center;">
					<div class="stp-ip-box">
					<div class="icon">
						<img src="{{ asset('assets/new_asset/img/services/services01.svg') }}" alt="Hak Cipta">
					</div>
					<div class="text">
						<h6>Total Hak Cipta</h6>
						<h2>215</h2>
					</div>
					</div>
				</div>

				<div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
					<div class="stp-ip-box">
					<div class="icon">
						<img src="{{ asset('assets/new_asset/img/services/services02.svg') }}" alt="Paten">
					</div>
					<div class="text">
						<h6>Total Paten</h6>
						<h2>20</h2>
					</div>
					</div>
				</div>

				<div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
					<div class="stp-ip-box">
					<div class="icon">
						<img src="{{ asset('assets/new_asset/img/services/services03.svg') }}" alt="Merk">
					</div>
					<div class="text">
						<h6>Total Merk</h6>
						<h2>7</h2>
					</div>
					</div>
				</div>

				<div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
					<div class="stp-ip-box">
					<div class="icon">
						<img src="{{ asset('assets/new_asset/img/services/services03.svg') }}" alt="Paten">
					</div>
					<div class="text">
						<h6>Total Paten</h6>
						<h2>20</h2>
					</div>
					</div>
				</div>

				<div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
					<div class="stp-ip-box">
					<div class="icon">
						<img src="{{ asset('assets/new_asset/img/services/services04.svg') }}" alt="Buku">
					</div>
					<div class="text">
						<h6>Produk</h6>
						<h2>53</h2>
					</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Intoduction -->
			<section class="homepage-03 about-introduction" style="background-color: #fffaf5;">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-7 order-2 order-lg-0"  data-aos="fade-up">
                            <div class="sub-section-heading mb-40">
                                <h2 class="mb-20" style="font-size:32px">
                                    We are here to goal this for our great achievement
                                </h2>
                                <p style="font-size:16px">
                                    The argument in favor of using filler text goes something like this: If you use real content in the design process, anytime you reach a review point you’ll end up reviewing and negotiating the content
                                    itself and not the design.
                                </p>
                            </div>
                            <div class="work-process">
                                <div class="work-process-item d-flex align-items-center">
                                    <i style="font-size:25px" class="fas fa-tools"></i>
                                    <h5 style="font-size:17px" class="ml-1">Best Planner</h5>
                                </div>
                                <div class="work-process-item d-flex align-items-center">
                                    <i style="font-size:25px" class="fas fa-cogs"></i>
                                    <h5 style="font-size:17px" class="ml-1">Innovation</h5>
                                </div>
                                <div class="work-process-item d-flex align-items-center">
                                    <i style="font-size:25px" class="fas fa-calendar-alt"></i>
                                    <h5 style="font-size:17px" class="ml-1">Time management</h5>
                                </div>
                                <div class="work-process-item d-flex align-items-center">
                                    <i style="font-size:25px" class="fas fa-handshake"></i>
                                    <h5 style="font-size:17px" class="ml-1">Collaboration</h5>
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-5 order-1 order-lg-0">
							<div class="about-intro-left">
								<div class="image-gallery" data-aos="fade-up" data-aos-delay="200">
								<div class="gallery-item">
									<img src="{{ asset('assets/images/buib1.jpg') }}" alt="Team 1" />
								</div>
								<div class="gallery-item">
									<img src="{{ asset('assets/images/buib2.jpg') }}" alt="Team 2" />
								</div>
								<div class="gallery-item">
									<img src="{{ asset('assets/images/buib4.jpg') }}" alt="Team 3" />
								</div>
								<div class="gallery-item">
									<img src="{{ asset('assets/images/buib5.jpg') }}" alt="Team 4" />
								</div>
								</div>
							</div>
						</div>

                    </div>
                </div>
            </section>
	<!-- End Introduction -->

	<!-- end service section -->

	<!-- Collab -->
	<div class="collab-section" data-aos="zoom-in-up" data-aos-duration="1000">
		<h2 class="collab-title" style="font-size:30px">🤝 Collaboration Partner</h2>
		<p class="collab-subtitle" style="font-size:17px">Trusted by companies & innovators who believe in great teamwork</p>
		<div class="collab-logos">
			<img style="width: 12%" src="{{ asset('assets/images/PLN1.png') }}" alt="Partner 1" class="collab-logo" />
            <img style="width: 12%" src="{{ asset('assets/images/mki.jpg') }}" alt="Partner 2" class="collab-logo" />

			{{-- <img src="{{ asset('assets/images/logo.jpg') }}" alt="Partner 3" class="collab-logo" />
            <img src="{{ asset('assets/images/logo.jpg') }}" alt="Partner 4" class="collab-logo" />
            <img src="{{ asset('assets/images/logo.jpg') }}" alt="Partner 5" class="collab-logo" />
            <img src="{{ asset('assets/images/logo.jpg') }}" alt="Partner 6" class="collab-logo" /> --}}

		</div>
	</div>

	<!-- End Collab  -->

	<!-- Services -->
	<section class="homepage-03 services03">
                <div class="container">
                    <div class="section-heading text-center" data-aos="fade-up">
                        <h2 style="font-size:30px">How We Help </h2>
                    </div>
                    <div class="row" style="margin:20px">
                        <div class="col-xl-4 col-md-6" style="margin-bottom: 50px">
                            <div class="provide-services-item shadow" data-aos="fade-up">
                                <div class="provide-services-item-image shadow">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="74.422" height="73.384" viewBox="0 0 74.422 73.384">
                                        <g id="authentication" transform="translate(0 0)">
                                            <g id="Group_2399" data-name="Group 2399" transform="translate(0 0)">
                                                <path
                                                    id="Path_2071"
                                                    data-name="Path 2071"
                                                    d="M58.135,34.186c0-.132.007-19.652.007-19.652L29.071,0,0,14.535V33.79a36,36,0,0,0,16.053,30l13.018,8.675L39.1,65.786a19.752,19.752,0,1,0,19.036-31.6ZM29.071,69.675,17.344,61.858A33.672,33.672,0,0,1,2.326,33.79V15.972L29.071,2.6,55.816,15.972V33.919c-.386-.023-.769-.059-1.163-.059s-.778.036-1.163.059V17.407L29.071,5.2,4.651,17.408V33.79A31.36,31.36,0,0,0,18.634,59.921l10.437,6.954,7.607-5.069a19.7,19.7,0,0,0,1.1,2.066Zm6.737-10.083-6.737,4.488-9.145-6.094c-.451-.3-.889-.618-1.32-.942V46.651H16.28v8.442a29.049,29.049,0,0,1-3.489-3.872V44.463a3.489,3.489,0,0,1,2.639-3.382L23.316,39.1a5.808,5.808,0,0,0,4.592,5.105v4.768h2.326V44.209A5.805,5.805,0,0,0,34.825,39.1L40,40.4a19.668,19.668,0,0,0-4.193,19.187ZM23.257,24.557h3.214a12.249,12.249,0,0,0,5.192-1.163h.315l2.907,3.876v4.846l-3.876,2.907H27.132l-3.876-2.907Zm-2.229-2.326a4.549,4.549,0,0,1,2.491-3.361,11.743,11.743,0,0,1,8.165-.514l.267.386h1.771a1.163,1.163,0,0,1,1.163,1.163v3.489l-1.744-2.326H31.122l-.245.122a9.916,9.916,0,0,1-4.406,1.041ZM32.559,36.767v1.744a3.489,3.489,0,1,1-6.977,0V36.767l.776.581h5.426Zm2.326-.045v-1.7l2.326-1.744V19.906a3.488,3.488,0,0,0-3.489-3.489h-.773c-1.682-1.023-5.871-1.229-8.838-.3a7.236,7.236,0,0,0-5.506,7.279v1.163h2.326v8.721l2.326,1.744v1.693l-8.393,2.11a5.8,5.8,0,0,0-4.4,5.637V47.6A29.04,29.04,0,0,1,6.977,33.79V18.845L29.071,7.8,51.165,18.845V33.79c0,.133-.008.266-.009.4a19.676,19.676,0,0,0-9.2,4.31ZM54.654,71.071A17.443,17.443,0,1,1,72.1,53.628,17.443,17.443,0,0,1,54.654,71.071Zm0,0"
                                                    transform="translate(0 0)"
                                                    fill="#ed880a"
                                                />
                                            </g>
                                            <path id="Path_2072" data-name="Path 2072" d="M416,136.945h13.954v2.326H416Zm0,0" transform="translate(-355.532 -117.039)" fill="#ed880a" />
                                            <path id="Path_2073" data-name="Path 2073" d="M416,168.945h9.3v2.326H416Zm0,0" transform="translate(-355.532 -144.388)" fill="#ed880a" />
                                            <path id="Path_2074" data-name="Path 2074" d="M416,200.945h4.651v2.326H416Zm0,0" transform="translate(-355.532 -171.737)" fill="#ed880a" />
                                            <path
                                                id="Path_2075"
                                                data-name="Path 2075"
                                                d="M283.7,295.609l-4.11-4.111-6.578,6.577L283.7,308.764l18.089-18.089-6.579-6.577Zm0,9.867-7.4-7.4,3.29-3.289,4.11,4.11,11.512-11.512,3.29,3.289Zm0,0"
                                                transform="translate(-233.325 -242.803)"
                                                fill="#ed880a"
                                            />
                                        </g>
                                    </svg>
                                </div>
                                <div class="provide-services-item-text">
									<h5>Contextual brand safety</h5>
									<p>
										Melindungi reputasi merek dengan memastikan konten iklan sesuai dengan nilai dan audiens target.
									</p>
									<div style="justify-items: center;">
										<div class="icon-wrapper">
											<a href="#" class="circle-icon">
												<i class="fas fa-arrow-right"></i>
											</a>
										</div>
									</div>
								</div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6" style="margin-bottom: 50px">
                            <div class="provide-services-item shadow" data-aos="fade-up" data-aos-delay="300">
                                <div class="provide-services-item-image shadow">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="80.198" height="85.653" viewBox="0 0 80.198 85.653">
                                        <g id="visibility" transform="translate(-16.303)">
                                            <g id="Group_74" data-name="Group 74" transform="translate(16.303 19.907)">
                                                <g id="Group_73" data-name="Group 73" transform="translate(0)">
                                                    <path
                                                        id="Path_2076"
                                                        data-name="Path 2076"
                                                        d="M95.123,137.918a2.044,2.044,0,1,0-3.223,2.514,2.413,2.413,0,0,1,0,2.972,44.889,44.889,0,0,1-18.75,14.138,22.869,22.869,0,0,0,.052-31.2,44.85,44.85,0,0,1,11.7,6.921c.439.36.878.734,1.3,1.11a2.044,2.044,0,1,0,2.71-3.06c-.464-.411-.942-.818-1.421-1.211a49.085,49.085,0,0,0-69.818,7.812,6.5,6.5,0,0,0,0,8,49.084,49.084,0,0,0,77.443,0A6.5,6.5,0,0,0,95.123,137.918ZM20.9,143.4a2.413,2.413,0,0,1,0-2.972A44.887,44.887,0,0,1,39.649,126.3a22.871,22.871,0,0,0,0,31.245A44.887,44.887,0,0,1,20.9,143.4Zm35.523,17.345h-.05a18.831,18.831,0,0,1,0-37.663h.044a18.831,18.831,0,0,1,.006,37.663Z"
                                                        transform="translate(-16.303 -118.999)"
                                                        fill="#ed880a"
                                                    />
                                                </g>
                                            </g>
                                            <g id="Group_76" data-name="Group 76" transform="translate(47.73 34.154)">
                                                <g id="Group_75" data-name="Group 75">
                                                    <path
                                                        id="Path_2077"
                                                        data-name="Path 2077"
                                                        d="M212.833,204.16a8.672,8.672,0,1,0,8.672,8.672A8.682,8.682,0,0,0,212.833,204.16Zm0,13.257a4.585,4.585,0,1,1,4.585-4.585A4.591,4.591,0,0,1,212.833,217.417Z"
                                                        transform="translate(-204.161 -204.16)"
                                                        fill="#ed880a"
                                                    />
                                                </g>
                                            </g>
                                            <g id="Group_78" data-name="Group 78" transform="translate(54.358)">
                                                <g id="Group_77" data-name="Group 77" transform="translate(0)">
                                                    <path
                                                        id="Path_2078"
                                                        data-name="Path 2078"
                                                        d="M245.828,0a2.044,2.044,0,0,0-2.044,2.044V9.708a2.044,2.044,0,0,0,4.088,0V2.044A2.044,2.044,0,0,0,245.828,0Z"
                                                        transform="translate(-243.784)"
                                                        fill="#ed880a"
                                                    />
                                                </g>
                                            </g>
                                            <g id="Group_80" data-name="Group 80" transform="translate(54.358 73.901)">
                                                <g id="Group_79" data-name="Group 79" transform="translate(0)">
                                                    <path
                                                        id="Path_2079"
                                                        data-name="Path 2079"
                                                        d="M245.828,441.753a2.044,2.044,0,0,0-2.044,2.044v7.664a2.044,2.044,0,1,0,4.088,0V443.8A2.044,2.044,0,0,0,245.828,441.753Z"
                                                        transform="translate(-243.784 -441.753)"
                                                        fill="#ed880a"
                                                    />
                                                </g>
                                            </g>
                                            <g id="Group_82" data-name="Group 82" transform="translate(79.382 11.945)">
                                                <g id="Group_81" data-name="Group 81">
                                                    <path
                                                        id="Path_2080"
                                                        data-name="Path 2080"
                                                        d="M400.671,72a2.044,2.044,0,0,0-2.891,0l-3.813,3.813a2.044,2.044,0,0,0,2.89,2.891l3.814-3.813A2.044,2.044,0,0,0,400.671,72Z"
                                                        transform="translate(-393.369 -71.403)"
                                                        fill="#ed880a"
                                                    />
                                                </g>
                                            </g>
                                            <g id="Group_84" data-name="Group 84" transform="translate(25.52 65.807)">
                                                <g id="Group_83" data-name="Group 83" transform="translate(0)">
                                                    <path
                                                        id="Path_2081"
                                                        data-name="Path 2081"
                                                        d="M78.705,393.967a2.044,2.044,0,0,0-2.89,0L72,397.781a2.044,2.044,0,0,0,2.89,2.891l3.814-3.813A2.044,2.044,0,0,0,78.705,393.967Z"
                                                        transform="translate(-71.403 -393.369)"
                                                        fill="#ed880a"
                                                    />
                                                </g>
                                            </g>
                                            <g id="Group_86" data-name="Group 86" transform="translate(25.52 11.945)">
                                                <g id="Group_85" data-name="Group 85" transform="translate(0)">
                                                    <path
                                                        id="Path_2082"
                                                        data-name="Path 2082"
                                                        d="M78.706,75.815,74.892,72A2.044,2.044,0,0,0,72,74.892L75.815,78.7a2.044,2.044,0,1,0,2.89-2.89Z"
                                                        transform="translate(-71.403 -71.403)"
                                                        fill="#ed880a"
                                                    />
                                                </g>
                                            </g>
                                            <g id="Group_88" data-name="Group 88" transform="translate(79.382 65.807)">
                                                <g id="Group_87" data-name="Group 87">
                                                    <path
                                                        id="Path_2083"
                                                        data-name="Path 2083"
                                                        d="M400.669,397.78l-3.813-3.813a2.044,2.044,0,1,0-2.891,2.891l3.814,3.813a2.044,2.044,0,1,0,2.89-2.891Z"
                                                        transform="translate(-393.367 -393.368)"
                                                        fill="#ed880a"
                                                    />
                                                </g>
                                            </g>
                                        </g>
                                    </svg>
                                </div>
                                <div class="provide-services-item-text">
                                    <h5>Viewability</h5>
                                    <p>
                                        Memastikan iklan terlihat oleh audiens yang tepat untuk meningkatkan efektivitas kampanye.
                                    </p>
                                    <div style="justify-items: center;">
										<div class="icon-wrapper">
											<a href="#" class="circle-icon">
												<i class="fas fa-arrow-right"></i>
											</a>
										</div>
									</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6" style="margin-bottom: 50px">
                            <div class="provide-services-item shadow" data-aos="fade-up" data-aos-delay="400">
                                <div class="provide-services-item-image shadow">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="73.571" height="73.8" viewBox="0 0 73.571 73.8">
                                        <g id="sports" transform="translate(-1 -1)">
                                            <path
                                                id="Path_2084"
                                                data-name="Path 2084"
                                                d="M52.833,51.567a8.691,8.691,0,0,0,1.542-3.05L73.12,62.851l1.451-1.9L54.719,45.774a8.7,8.7,0,0,0-2.859-6.1l-8.691-7.823,3.727-5.59L59.2,29.618a1.195,1.195,0,0,0,1.472-.862l1.194-4.777A1.194,1.194,0,0,0,61,22.531l-13.68-3.42a6.7,6.7,0,0,0-7.13,2.757L29.66,37.658V33.931a5.974,5.974,0,0,0,3.583-5.465V26.078a5.974,5.974,0,0,0-3.583-5.465V2.194A1.194,1.194,0,0,0,28.466,1H2.194A1.194,1.194,0,0,0,1,2.194V38.019a1.194,1.194,0,0,0,1.194,1.194H28.466a1.164,1.164,0,0,0,.182-.037L25.439,43.99H11.748a1.193,1.193,0,0,0-1.194,1.194v4.777a1.193,1.193,0,0,0,1.194,1.194H29.66a1.191,1.191,0,0,0,.971-.5l5.213-7.3,6.5,5.574-6.764,8.7a5.444,5.444,0,0,0,1.031,7.7L49.245,74.8l1.432-1.911-12.63-9.473a3.053,3.053,0,0,1-.578-4.318l7.464-9.6a1.193,1.193,0,0,0-.166-1.64L36.407,40.7a1.191,1.191,0,0,0-1.747.213l-5.615,7.858h-16.1V46.379H26.078a1.2,1.2,0,0,0,.994-.531l15.1-22.655a4.29,4.29,0,0,1,4.564-1.765l12.521,3.13-.609,2.435L46.69,23.731a1.2,1.2,0,0,0-1.308.49l-4.777,7.165a1.2,1.2,0,0,0,.195,1.55l9.459,8.513a6.307,6.307,0,0,1,.706,8.627l-7.91,9.887a1.2,1.2,0,0,0,.125,1.626l14.33,13.136,1.615-1.761-13.5-12.38,4.44-5.549L73.194,70.071l1.3-2L51.56,53.158ZM30.854,26.078v2.388a3.583,3.583,0,1,1-7.165,0V26.078a3.583,3.583,0,0,1,7.165,0ZM8.165,3.388H22.5V5.777H8.165ZM27.272,36.825H3.388V3.388H5.777V6.971A1.194,1.194,0,0,0,6.971,8.165H23.689a1.194,1.194,0,0,0,1.194-1.194V3.388h2.388V20.107A5.978,5.978,0,0,0,21.3,26.078v2.388a5.978,5.978,0,0,0,5.971,5.971Z"
                                                fill="#ed880a"
                                            />
                                            <path id="Path_2085" data-name="Path 2085" d="M1,45H14.136v2.388H1Z" transform="translate(0 8.544)" fill="#ed880a" />
                                            <path id="Path_2086" data-name="Path 2086" d="M8,49H21.136v2.388H8Z" transform="translate(1.359 9.32)" fill="#ed880a" />
                                            <path id="Path_2087" data-name="Path 2087" d="M2,53H4.388v2.388H2Z" transform="translate(0.194 10.097)" fill="#ed880a" />
                                            <path id="Path_2088" data-name="Path 2088" d="M6,53H8.388v2.388H6Z" transform="translate(0.971 10.097)" fill="#ed880a" />
                                            <path id="Path_2089" data-name="Path 2089" d="M10,53H27.913v2.388H10Z" transform="translate(1.748 10.097)" fill="#ed880a" />
                                            <path
                                                id="Path_2090"
                                                data-name="Path 2090"
                                                d="M24.107,13.971V11.583H21.163L19.129,8.531a1.194,1.194,0,0,0-2.091.192l-2.485,5.8-2.485-5.8a1.193,1.193,0,0,0-1.941-.374L6.894,11.583H5v2.388H7.388a1.189,1.189,0,0,0,.844-.35l2.336-2.336,2.888,6.739a1.194,1.194,0,0,0,2.195,0l2.714-6.333,1.166,1.748a1.2,1.2,0,0,0,.994.531Z"
                                                transform="translate(0.777 1.359)"
                                                fill="#ed880a"
                                            />
                                            <path id="Path_2091" data-name="Path 2091" d="M5,19H15.748v2.388H5Z" transform="translate(0.777 3.495)" fill="#ed880a" />
                                            <path id="Path_2092" data-name="Path 2092" d="M5,23H15.748v2.388H5Z" transform="translate(0.777 4.272)" fill="#ed880a" />
                                            <path id="Path_2093" data-name="Path 2093" d="M5,27H15.748v2.388H5Z" transform="translate(0.777 5.049)" fill="#ed880a" />
                                        </g>
                                    </svg>
                                </div>
                                <div class="provide-services-item-text">
                                    <h5>Competitive separation</h5>
                                    <p>
                                        Mengelola eksposur iklan agar tidak bersaing langsung dengan kompetitor dalam satu ruang.
                                    </p>
                                    <div style="justify-items: center;">
										<div class="icon-wrapper">
											<a href="#" class="circle-icon">
												<i class="fas fa-arrow-right"></i>
											</a>
										</div>
									</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6" style="margin-bottom: 50px">
                            <div class="provide-services-item shadow" data-aos="fade-up" data-aos-delay="500">
                                <div class="provide-services-item-image shadow">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="74.419" height="74.418" viewBox="0 0 74.419 74.418">
                                        <g id="fraud" transform="translate(0 -0.235)">
                                            <path
                                                id="Path_2094"
                                                data-name="Path 2094"
                                                d="M85.65,59.886a26,26,0,1,0-26,26A26,26,0,0,0,85.65,59.886Zm-49.515,0a23.519,23.519,0,1,1,23.519,23.52A23.52,23.52,0,0,1,36.136,59.886Zm0,0"
                                                transform="translate(-28.614 -28.611)"
                                                fill="#ed880a"
                                            />
                                            <path
                                                id="Path_2095"
                                                data-name="Path 2095"
                                                d="M66.791,60.024l0,0,0,0L64.163,57.4a2.455,2.455,0,0,0-1.749-.726h0a2.465,2.465,0,0,0-.634.092L58.667,53.65a2.467,2.467,0,0,0-.632-2.384l-1.9-1.911a30.992,30.992,0,1,0-7,7l1.9,1.911a2.41,2.41,0,0,0,2.384.631l3.111,3.112a2.409,2.409,0,0,0,.633,2.383l2.624,2.624,0,0,0,0,6.124,6.124a4.951,4.951,0,1,0,7-7ZM2.57,31.274A28.471,28.471,0,1,1,53.043,49.322l-.09.109a28.753,28.753,0,0,1-3.742,3.743l-.133.111A28.455,28.455,0,0,1,2.57,31.274ZM51.6,54.381c.236-.21.467-.425.7-.642q.627-.594,1.221-1.221c.215-.227.428-.456.636-.689.15-.168.312-.324.458-.5l1.675,1.683,0,0-3.5,3.5h0l-1.676-1.687c.169-.144.323-.3.488-.452Zm5.564,1.263,2.626,2.626-1.75,1.75L55.41,57.394Zm5.252,3.5L64.162,60.9l-3.5,3.5-1.751-1.751ZM71.165,71.4a2.535,2.535,0,0,1-3.5,0l-5.252-5.252,3.5-3.5L71.165,67.9a2.476,2.476,0,0,1,0,3.5Zm0,0"
                                                transform="translate(0 0)"
                                                fill="#ed880a"
                                            />
                                            <path
                                                id="Path_2096"
                                                data-name="Path 2096"
                                                d="M121.758,111.921a13.709,13.709,0,0,1,2.211-2.595,7.272,7.272,0,0,0,2.688-6.513,6.615,6.615,0,0,0,2.671-4.219c.488-4.206-.663-4.745-1.1-4.948a2.035,2.035,0,0,0-.834-.192c0-.2,0-.427,0-.638,2.821-1.324,4.516-3.162,4.516-5.256,0-2.538-2.445-4.724-6.7-6.084a23.452,23.452,0,0,0-1.485-4.832,2.48,2.48,0,0,0-3.643-1.042c-.2.132-.41.289-.644.46a6.327,6.327,0,0,1-3.619,1.6,6.324,6.324,0,0,1-3.619-1.6c-.233-.17-.447-.327-.643-.459a2.477,2.477,0,0,0-3.641,1.041,23.42,23.42,0,0,0-1.487,4.834c-4.257,1.36-6.7,3.546-6.7,6.084,0,2.094,1.7,3.932,4.517,5.256,0,.211-.007.434-.005.637a2.034,2.034,0,0,0-.834.194c-.434.2-1.586.742-1.093,4.99a6.613,6.613,0,0,0,2.667,4.177,7.272,7.272,0,0,0,2.687,6.514,13.667,13.667,0,0,1,2.211,2.595c.992,1.411,2.019,2.871,4.475,2.871h2.935c2.457,0,3.483-1.46,4.475-2.871ZM106.766,95.046c-.023-.413-.044-.833-.052-1.287a29.4,29.4,0,0,0,6.484,1.129l.357.024c.286.017.572.034.864.045.053,0,.1.008.158.009v1.828a8.427,8.427,0,0,1-3.714.668,4.867,4.867,0,0,1-4.1-2.416Zm10.287-.08c.054,0,.1-.008.158-.009.292-.011.577-.028.864-.045l.357-.024a29.4,29.4,0,0,0,6.484-1.129c-.007.454-.028.874-.052,1.287a4.87,4.87,0,0,1-4.1,2.416,8.5,8.5,0,0,1-3.714-.663Zm-6.878-17.307c.169.114.354.249.555.4a7.264,7.264,0,0,0,10.171,0c.2-.148.385-.283.566-.391a22.235,22.235,0,0,1,1.484,5.232c.044.269.078.535.112.8.024.188.052.373.071.565.036.361.059.717.076,1.07,0,.1.016.191.019.289a16.31,16.31,0,0,1-6.15,1.879c-.41.037-.831.057-1.263.057a14.743,14.743,0,0,1-3.548-.448A16.693,16.693,0,0,1,108.4,85.62c0-.1.014-.19.019-.286.018-.355.04-.712.077-1.074.019-.191.047-.375.071-.562.033-.266.068-.533.111-.8a21.9,21.9,0,0,1,1.5-5.238Zm-7.976,9.9c0-1.155,1.447-2.387,3.81-3.327-.008.082,0,.16-.011.242-.05.61-.085,1.224-.085,1.847a1.238,1.238,0,0,0,.551,1.03,17.636,17.636,0,0,0,18.7,0,1.238,1.238,0,0,0,.552-1.03c0-.623-.036-1.238-.085-1.848-.006-.081,0-.159-.011-.241,2.363.94,3.81,2.172,3.81,3.327s-1.428,2.378-3.809,3.32c-.165.066-.339.125-.51.187a26.923,26.923,0,0,1-7.657,1.4c-.073,0-.145.01-.218.013q-.7.029-1.422.029t-1.422-.029c-.074,0-.146-.01-.219-.013a26.923,26.923,0,0,1-7.657-1.4c-.17-.062-.345-.121-.509-.187C103.626,89.938,102.2,88.715,102.2,87.56Zm9.7,22.937a15.944,15.944,0,0,0-2.6-3.03c-1.988-1.748-1.919-3.153-1.823-5.1l.01-.2a1.241,1.241,0,0,0-.561-1.1,1.169,1.169,0,0,0-.234-.118,3.97,3.97,0,0,1-1.927-2.646,13.1,13.1,0,0,1-.079-1.928,7.311,7.311,0,0,0,6.182,3.558,10.475,10.475,0,0,0,4.951-.992,10.479,10.479,0,0,0,4.952.992,7.311,7.311,0,0,0,6.181-3.558,13.062,13.062,0,0,1-.072,1.878,3.968,3.968,0,0,1-1.934,2.7,1.163,1.163,0,0,0-.233.118,1.24,1.24,0,0,0-.561,1.1l.01.2c.1,1.943.165,3.349-1.823,5.1a15.944,15.944,0,0,0-2.6,3.03c-.971,1.383-1.333,1.82-2.45,1.82h-2.935c-1.117,0-1.478-.437-2.45-1.82Zm0,0"
                                                transform="translate(-84.775 -63.712)"
                                                fill="#ed880a"
                                            />
                                            <path
                                                id="Path_2097"
                                                data-name="Path 2097"
                                                d="M211.668,273.761a1.241,1.241,0,0,0-1.748-.009,3.077,3.077,0,0,1-1.6.879,1.238,1.238,0,0,0,0,2.476,5.437,5.437,0,0,0,3.351-1.6A1.234,1.234,0,0,0,211.668,273.761Zm0,0"
                                                transform="translate(-176.037 -232.215)"
                                                fill="#ed880a"
                                            />
                                        </g>
                                    </svg>
                                </div>
                                <div class="provide-services-item-text">
                                    <h5>Fraudulent activity detection</h5>
                                    <p>
                                        Mendeteksi dan mencegah aktivitas penipuan untuk memastikan investasi iklan digunakan secara optimal.
                                    </p>
                                    <div style="justify-items: center;">
										<div class="icon-wrapper">
											<a href="#" class="circle-icon">
												<i class="fas fa-arrow-right"></i>
											</a>
										</div>
									</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6" style="margin-bottom: 50px">
                            <div class="provide-services-item shadow" data-aos="fade-up" data-aos-delay="600">
                                <div class="provide-services-item-image shadow">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="70.099" height="65.607" viewBox="0 0 70.099 65.607">
                                        <g id="banner" transform="translate(0 -16.404)">
                                            <path
                                                id="Path_2098"
                                                data-name="Path 2098"
                                                d="M303.3,156.891a1.027,1.027,0,0,0-1.864,0l-2.57,5.555a1.027,1.027,0,0,0,1.864.862l.079-.172h3.118l.079.172a1.027,1.027,0,1,0,1.864-.862Zm-1.541,4.192.609-1.316.609,1.316Z"
                                                transform="translate(-257.857 -120.738)"
                                                fill="#ed880a"
                                            />
                                            <path
                                                id="Path_2099"
                                                data-name="Path 2099"
                                                d="M366.633,155.69h-1.907a1.027,1.027,0,0,0-1.027,1.027v5.638a1.027,1.027,0,0,0,1.027,1.027h1.907a3.846,3.846,0,1,0,0-7.692Zm0,5.638h-.88v-3.584h.88a1.792,1.792,0,1,1,0,3.584Z"
                                                transform="translate(-313.905 -120.216)"
                                                fill="#ed880a"
                                            />
                                            <path
                                                id="Path_2100"
                                                data-name="Path 2100"
                                                d="M99.069,73.6a1.027,1.027,0,0,0-1.027-1.027H45.718a1.027,1.027,0,0,0,0,2.054H98.042A1.027,1.027,0,0,0,99.069,73.6Z"
                                                transform="translate(-38.601 -48.482)"
                                                fill="#ed880a"
                                            />
                                            <path id="Path_2101" data-name="Path 2101" d="M71.309,114.058H45.718a1.027,1.027,0,0,0,0,2.054H71.309A1.027,1.027,0,0,0,71.309,114.058Z" transform="translate(-38.601 -84.284)" fill="#ed880a" />
                                            <path id="Path_2102" data-name="Path 2102" d="M71.309,155.54H45.718a1.027,1.027,0,0,0,0,2.054H71.309A1.027,1.027,0,0,0,71.309,155.54Z" transform="translate(-38.601 -120.087)" fill="#ed880a" />
                                            <path id="Path_2103" data-name="Path 2103" d="M71.309,197.021H45.718a1.027,1.027,0,0,0,0,2.054H71.309A1.027,1.027,0,0,0,71.309,197.021Z" transform="translate(-38.601 -155.889)" fill="#ed880a" />
                                            <path id="Path_2104" data-name="Path 2104" d="M71.309,238.5H45.718a1.027,1.027,0,0,0,0,2.054H71.309A1.027,1.027,0,0,0,71.309,238.5Z" transform="translate(-38.601 -191.69)" fill="#ed880a" />
                                            <path
                                                id="Path_2105"
                                                data-name="Path 2105"
                                                d="M69.481,52.953l-2.287-1.692V22.112A5.715,5.715,0,0,0,61.486,16.4H14.923a1.027,1.027,0,0,0,0,2.054H61.486a3.658,3.658,0,0,1,3.654,3.654v27.63l-4.7-3.476a1.023,1.023,0,0,0,.027-.231V30.8a1.027,1.027,0,0,0-1.027-1.027h-21.4A1.027,1.027,0,0,0,37.018,30.8V47.839a1.027,1.027,0,0,0,1.027,1.027h18.72v5.213H2.054V22.113a3.659,3.659,0,0,1,3.655-3.655H9.173a1.027,1.027,0,0,0,0-2.054H5.708A5.715,5.715,0,0,0,0,22.113V61.761a5.715,5.715,0,0,0,5.709,5.709H26.8v7.657H21.108c-4.432,0-4.445,6.885,0,6.885H39.293a1.027,1.027,0,0,0,0-2.054H21.108a1.39,1.39,0,0,1,0-2.778H46.086a1.39,1.39,0,0,1,0,2.778h-.768a1.027,1.027,0,0,0,0,2.054h.768c4.432,0,4.445-6.885,0-6.885H40.545V67.469h20.94a5.715,5.715,0,0,0,5.709-5.709V55.715h1.4A1.53,1.53,0,0,0,69.481,52.953Zm-6.884.71a1.581,1.581,0,0,0-1.217.686L58.81,57.836V47.615l8.177,6.049ZM39.071,46.812V31.828H58.414V45.039a1.523,1.523,0,0,0-1.664,1.525v.248Zm-.58,28.315H28.853V67.469h9.638ZM65.14,61.761a3.659,3.659,0,0,1-3.655,3.655H5.708a3.659,3.659,0,0,1-3.655-3.655V56.132H56.809v3.35a1.549,1.549,0,0,0,2.778.879l3.3-4.6h2.25v5.995Z"
                                                transform="translate(0 0)"
                                                fill="#ed880a"
                                            />
                                        </g>
                                    </svg>
                                </div>
                                <div class="provide-services-item-text">
                                    <h5>Ad placement</h5>
                                    <p>
                                        Menyediakan strategi penempatan iklan yang tepat guna meningkatkan konversi.
                                    </p>
                                    <div style="justify-items: center;">
										<div class="icon-wrapper">
											<a href="#" class="circle-icon">
												<i class="fas fa-arrow-right"></i>
											</a>
										</div>
									</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6" style="margin-bottom: 50px">
                            <div class="provide-services-item shadow" data-aos="fade-up" data-aos-delay="700">
                                <div class="provide-services-item-image shadow">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="81.571" height="81.824" viewBox="0 0 81.571 81.824">
                                        <path
                                            id="XMLID_2024_"
                                            d="M43.442,55.692A1.812,1.812,0,0,1,41.629,57.5H41.2a1.812,1.812,0,1,1,0-3.625h.431A1.812,1.812,0,0,1,43.442,55.692Zm12.665-1.812h1.546a1.812,1.812,0,1,1,0,3.625H56.106a14.832,14.832,0,0,1-12.88,12.881V71.93a1.812,1.812,0,1,1-3.625,0V70.385A14.833,14.833,0,0,1,26.721,57.5H25.175a1.812,1.812,0,1,1,0-3.625h1.546A14.833,14.833,0,0,1,39.6,41V39.453a1.812,1.812,0,1,1,3.625,0V41A14.833,14.833,0,0,1,56.106,53.879Zm-6.762,1.812a1.812,1.812,0,0,1,1.812-1.812h1.288a11.207,11.207,0,0,0-9.219-9.219v1.289a1.812,1.812,0,1,1-3.625,0V44.66a11.207,11.207,0,0,0-9.219,9.219H31.67a1.812,1.812,0,1,1,0,3.625H30.382A11.207,11.207,0,0,0,39.6,66.723V65.435a1.812,1.812,0,1,1,3.625,0v1.288A11.207,11.207,0,0,0,52.445,57.5H51.157A1.812,1.812,0,0,1,49.344,55.692ZM82.2,27.794a27.57,27.57,0,0,1-8.4,19.866,1.812,1.812,0,0,1-2.533-2.593,24.365,24.365,0,0,0,4.919-6.8h-8.6a1.812,1.812,0,1,1,0-3.625H77.587a24.246,24.246,0,0,0,0-13.7H62.235a48.831,48.831,0,0,1,.477,6.848c0,.637-.013,1.3-.039,1.956a1.812,1.812,0,0,1-3.622-.142c.024-.614.036-1.224.036-1.814a44.237,44.237,0,0,0-.53-6.848H43.226v2.268a1.812,1.812,0,0,1-3.625,0V20.947H24.27a44.238,44.238,0,0,0-.53,6.848c0,.587.012,1.2.036,1.814a1.812,1.812,0,0,1-3.622.142c-.026-.664-.039-1.322-.039-1.956a48.862,48.862,0,0,1,.477-6.848H5.241a24.246,24.246,0,0,0,0,13.7H15.246a1.812,1.812,0,1,1,0,3.625h-8.6a24.368,24.368,0,0,0,4.919,6.8,1.813,1.813,0,0,1-2.533,2.594A27.762,27.762,0,0,1,28.423,0H54.4A27.826,27.826,0,0,1,82.2,27.794ZM27.331,3.649A24.211,24.211,0,0,0,6.642,17.322H21.255A35.608,35.608,0,0,1,27.331,3.649ZM39.6,3.625H32.144C28.876,6.9,26.395,11.745,25,17.322H39.6V3.625Zm18.223,13.7c-1.392-5.576-3.873-10.42-7.141-13.7H43.226v13.7Zm18.361,0A24.211,24.211,0,0,0,55.5,3.649a35.608,35.608,0,0,1,6.076,13.672Zm-8.639,38.37A26.133,26.133,0,1,1,41.413,29.559,26.162,26.162,0,0,1,67.546,55.692Zm-3.625,0A22.508,22.508,0,1,0,41.413,78.2,22.533,22.533,0,0,0,63.922,55.692Z"
                                            transform="translate(-0.628)"
                                            fill="#ed880a"
                                        />
                                    </svg>
                                </div>
                                <div class="provide-services-item-text">
                                    <h5>Geotargeting (IP-lookup)</h5>
                                    <p>
                                        Menargetkan audiens berdasarkan lokasi untuk kampanye yang lebih relevan dan efektif.
                                    </p>
                                    <div style="justify-items: center;">
										<div class="icon-wrapper">
											<a href="#" class="circle-icon">
												<i class="fas fa-arrow-right"></i>
											</a>
										</div>
									</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
	<!-- End Services -->

	<!-- team section -->
	<section class="team_section layout_padding">
		<div class="container-fluid">
		<div class="heading_container heading_center">
			<h2 style="font-size:30px" style="font-size: 40px;" class="">
			Our <span style="color: white;"> Team</span>
			</h2>
		</div>

		<div class="team_container">
			<div class="row" style="display: flex; align-items: center; justify-content: center">
				<div class="col-lg-3 col-sm-6">
                    <div class="box ">
                        <div class="img-box">
                            <img style="height: 120px" src="{{ asset('assets/images/haris.jpg') }}" class="img1" alt="">
                            </div>
                        <div class="detail-box">
                            <h5>
                            Ir. Abdul Haris, S.Kom., M.Kom.
                            </h5>
                            <p>
                            Manajer BUIB & Kepala Science Technopark
                            </p>
                        </div>
                        <div class="social_box">
                            {{-- <a href="#">
                            <i class="fa fa-facebook" aria-hidden="true"></i>
                            </a>
                            <a href="#">
                            <i class="fa fa-twitter" aria-hidden="true"></i>
                            </a> --}}
                            <a href="https://www.linkedin.com/in/abdul-haris-manjawakang-a2820562/">
                            <i class="fa fa-linkedin" aria-hidden="true"></i>
                            </a>
                            <a href="https://www.instagram.com/haris_manjawakang/">
                            <i class="fa fa-instagram" aria-hidden="true"></i>
                            </a>
                            <a href="https://www.youtube.com/@Haris231981">
                            <i class="fa fa-youtube-play" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                </div>
			</div>
		</div>

		<!-- Tombol read more -->
		<div class="read-more-container" style="text-align: center; margin-top: 40px;">
			<a href="{{ route('contact') }}" class="read-more-button" style="padding: 12px 30px; background: linear-gradient(90deg, #0072ff, #00c6ff); color: #fff; border-radius: 50px; text-decoration: none; font-weight: bold; box-shadow: 0 4px 12px rgba(0,198,255,0.5); transition: all 0.4s ease; display: inline-block; font-size:14px">Read More</a>
		</div>

		</div>
	</section>
	<!-- end team section -->

<!-- Begin Video -->
<section class="homepage-03 call-to-action03" style="background-color: #1d69a3;">
		<div class="container">
			<div class="row align-items-center justify-content-between">
			<!-- Left Side -->
			<div class="col-lg-6 order-2 order-lg-0">
				<div class="call-action-text text-white" data-aos="fade-up">
				<div class="sub-section-heading">
					<h6 class="mb-3 mt-4">WHAT WE DO</h6>
					<h2 class="text-light" style="font-size:30px">We help clients to get more out of business</h2>
					<p class="text-light" style="font-size:16px">
					STP ITPLN mendukung pertumbuhan bisnis melalui teknologi, riset, dan strategi inovatif. Dengan dukungan ahli dan jaringan industri, kami membantu klien mengoptimalkan potensi bisnis untuk mencapai keberhasilan yang berkelanjutan.
					</p>
				</div>
				<a class="primary__button t-bg-orange shadow mt-4" href="{{ route('contact') }}" style="font-size:14px">Contact Us</a>
				</div>
			</div>

			<!-- Right Side: Video -->
			<div class="col-lg-6 order-1 order-lg-1" data-aos="fade-left">
				<div class="video-container">
				<div class="video-frame">
					<iframe id="yt-2"
					src="https://www.youtube.com/embed/-E8ggVxZIvk?si=8a4Q7wmBh_fYlyH5"
					title="YouTube video player"
					frameborder="0"
					allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
					allowfullscreen>
					</iframe>
				</div>
				</div>
			</div>
			</div>
		</div>
	</section>

	<!-- End Video -->


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
				<a class="active" href="{{ route('index') }}">
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


	</script>
	<!-- bootstrap js -->
	<script src="{{ asset('assets/js/bootstrap.js') }}"></script>
	<!-- owl slider -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
	</script>
	<!-- custom js -->
	<script src="{{ asset('assets/js/custom.js') }}"></script>
	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>


	<script>
		AOS.init();
	</script>

	<!-- Google Map -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
	</script>
	<!-- End Google Map -->
	<script src="{{ asset('assets/js/backtotop.js') }}"></script>

	<script>
		document.querySelectorAll('.collab-logo').forEach(logo => {
			logo.addEventListener('click', () => {
				logo.classList.add('clicked');
				setTimeout(() => {
					logo.classList.remove('clicked');
				}, 500); // durasi sesuai animasi
			});
		});
	</script>

	<script>
		document.addEventListener('DOMContentLoaded', function() {
			// Add click event to all service items
			const serviceItems = document.querySelectorAll('.provide-services-item');

			serviceItems.forEach(item => {
				item.addEventListener('click', function(e) {
					// Don't trigger if clicking on the "Learn more" link
					if (!e.target.closest('.service-link')) {
						const link = this.querySelector('.service-link');
						if (link) {
							window.location.href = link.getAttribute('href');
						}
					}
				});

				// Add keyboard accessibility
				item.setAttribute('tabindex', '0');
				item.addEventListener('keypress', function(e) {
					if (e.key === 'Enter') {
						const link = this.querySelector('.service-link');
						if (link) {
							window.location.href = link.getAttribute('href');
						}
					}
				});
			});

			// Add hover effect for touch devices
			if ('ontouchstart' in window) {
				serviceItems.forEach(item => {
					item.addEventListener('touchstart', function() {
						this.classList.add('hover-state');
					}, {passive: true});

					document.addEventListener('touchstart', function(e) {
						if (!e.target.closest('.provide-services-item')) {
							serviceItems.forEach(item => {
								item.classList.remove('hover-state');
							});
						}
					}, {passive: true});
				});
			}
		});
	</script>

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

	<script>
		function showImages() {
			document.getElementById('image-gallery2').style.display = 'grid';
			document.querySelector('.read-more-btn2').style.display = 'none';
		}
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
