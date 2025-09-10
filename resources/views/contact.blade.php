<?php
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     $to = "buibitpln05@gmail.com";
//     $subject = "New Message from Website Contact Form";

//     $first_name = htmlspecialchars($_POST['first_name']);
//     $last_name = htmlspecialchars($_POST['last_name']);
//     $email = htmlspecialchars($_POST['email']);
//     $phone = htmlspecialchars($_POST['phone']);
//     $subject_text = htmlspecialchars($_POST['subject']);

//     $message = "
//     You have received a new message from the website contact form:

//     First Name: $first_name
//     Last Name: $last_name
//     Email: $email
//     Phone Number: $phone

//     Message:
//     $subject_text
//     ";

//     $headers = "From: $email" . "\r\n" .
//                "Reply-To: $email" . "\r\n" .
//                "X-Mailer: PHP/" . phpversion();

//     if (mail($to, $subject, $message, $headers)) {
//         echo "<script>alert('Message sent successfully!'); window.location.href='".$_SERVER['PHP_SELF']."';</script>";
//     } else {
//         echo "<script>alert('Message failed to send. Please try again.'); window.location.href='".$_SERVER['PHP_SELF']."';</script>";
//     }
// }
?>

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

  <title> STP ITPLN </title>

  <!-- bootstrap core css -->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">


  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />

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

		/* Styling for input fields and button */
		.input-field {
			padding: 14px;
			font-size: 16px;
			border-radius: 8px;
			border: 1px solid #ddd;
			outline: none;
			transition: all 0.3s ease;
		}

		.input-field:focus {
			border-color: #00c6ff;
			box-shadow: 0 0 5px rgba(0,198,255,0.7);
		}

		.submit-btn {
			padding: 14px;
			background: linear-gradient(90deg, #00c6ff, #0072ff);
			border: none;
			border-radius: 50px;
			color: white;
			font-weight: bold;
			cursor: pointer;
			transition: 0.4s;
			font-size: 18px;
		}

		.submit-btn:hover {
			transform: translateY(-3px) scale(1.05);
			box-shadow: 0 8px 20px rgba(0,198,255,0.7);
			background: linear-gradient(90deg, #0072ff, #00c6ff);
		}

		.submit-btn:focus {
			outline: none;
		}

		.contact_form_section {
			border: 2px solid #00c6ff;
			max-width: 600px;
			margin: auto;
			padding: 30px;
			border-radius: 15px;
			box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);
			background: white;
			animation: fadeIn 1s ease-out;
		}

		/* Animation for the form */
		@keyframes fadeIn {
			0% {
				opacity: 0;
				transform: translateY(-10px);
			}
			100% {
				opacity: 1;
				transform: translateY(0);
			}
		}

		@media screen and (max-width: 768px) {
			.contact_form_section {
				padding: 20px;
				max-width: 100%;
			}

			.input-field {
				font-size: 14px;
			}

			.submit-btn {
				font-size: 16px;
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

        /* Contact Us */
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap');

        .cta-section {
        background: #0b1f3a; /* Biru gelap (midnight blue) */
        color: #ffffff;
        text-align: center;
        padding: 60px 20px;
        }

        .cta-title {
        font-size: 30px;
        font-weight: 600;
        margin-bottom: 10px;
        color: #ffffff;
        }

        .cta-subtitle {
        font-size: 18px;
        color: #c0c0c0;
        margin-bottom: 30px;
        }

        .cta-buttons {
        display: flex;
        justify-content: center;
        gap: 20px;
        flex-wrap: wrap;
        }

        .futuristic-btn {
        background: linear-gradient(135deg, #00c3ff, #005aff);
        color: #ffffff;
        border: none;
        padding: 14px 32px;
        font-size: 16px;
        font-weight: 500;
        border-radius: 14px;
        cursor: pointer;
        box-shadow: 0 0 12px rgba(0, 195, 255, 0.4), 0 0 30px rgba(0, 90, 255, 0.3);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .futuristic-btn:hover {
        transform: scale(1.05);
        box-shadow: 0 0 20px rgba(0, 195, 255, 0.7), 0 0 40px rgba(0, 90, 255, 0.6);
        }

        .futuristic-btn:active {
        transform: scale(0.96);
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
			<img src="{{ asset('assets/images/hero-bg.png') }}" alt="" >
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
						<li class="nav-item active">
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
								Contact Us
								</h1>
							</div>
							<p style="font-family: 'Roboto', sans-serif; font-size: 15px; letter-spacing: 1px; color: #f0f0f0; line-height: 1.8; text-shadow: 1px 1px 5px rgba(0,0,0,0.15); padding-right: 10px;">
								Kami siap membantu Anda mewujudkan inovasi dan bisnis berbasis teknologi! 🚀
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
										Contact Us
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

  <!-- team section -->
  <section class="team_section layout_padding">
		<div class="container-fluid">
            <div class="heading_container heading_center">
                <h2 style="font-size: 30px;" class="">
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

                <div class="row" style="display: flex; align-items: center; justify-content: center;">
                    <div class="col-lg-3 col-sm-6">
                        <div class="box ">
                            <div class="img-box">
                                <img src="{{ asset('assets/images/pp_kosong.jpg') }}" class="img1" alt="">
                            </div>
                            <div class="detail-box">
                                <h5>
                                Idle
                                </h5>
                                <p>
                                Sekretaris BUIB & Science Technopark
                                </p>
                            </div>
                            <div class="social_box">
                                {{-- <a href="#">
                                <i class="fa fa-facebook" aria-hidden="true"></i>
                                </a>
                                <a href="#">
                                <i class="fa fa-twitter" aria-hidden="true"></i>
                                </a> --}}
                                <a href="">
                                <i class="fa fa-linkedin" aria-hidden="true"></i>
                                </a>
                                <a href="">
                                <i class="fa fa-instagram" aria-hidden="true"></i>
                                </a>
                                <a href="">
                                <i class="fa fa-youtube-play" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <div class="box ">
                            <div class="img-box">
                                <img src="{{ asset('assets/images/hengki.jpg') }}" class="img1" alt="">
                            </div>
                            <div class="detail-box">
                                <h5>
                                Hengki Sikumbang, SE., MMSI.
                                </h5>
                                <p>
                                Deputi Manajer Inovasi dan Inkubasi
                                </p>
                            </div>
                            <div class="social_box">
                                {{-- <a href="#">
                                <i class="fa fa-facebook" aria-hidden="true"></i>
                                </a>
                                <a href="#">
                                <i class="fa fa-twitter" aria-hidden="true"></i>
                                </a> --}}
                                <a href="https://www.linkedin.com/in/hengki-sikumbang-330794245/">
                                <i class="fa fa-linkedin" aria-hidden="true"></i>
                                </a>
                                <a href="https://www.instagram.com/hengki_sikumbang/">
                                <i class="fa fa-instagram" aria-hidden="true"></i>
                                </a>
                                <a href="https://www.youtube.com/@hengkisikumbang623">
                                <i class="fa fa-youtube-play" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <div class="box ">
                            <div class="img-box">
                                <img src="{{ asset('assets/images/pp_kosong.jpg') }}" class="img1" alt="">
                            </div>
                            <div class="detail-box">
                                <h5>
                                Idle
                                </h5>
                                <p>
                                Staf / Analis Transfer Teknologi
                                </p>
                            </div>
                            <div class="social_box">
                                {{-- <a href="#">
                                <i class="fa fa-facebook" aria-hidden="true"></i>
                                </a>
                                <a href="#">
                                <i class="fa fa-twitter" aria-hidden="true"></i>
                                </a> --}}
                                <a href="">
                                <i class="fa fa-linkedin" aria-hidden="true"></i>
                                </a>
                                <a href="">
                                <i class="fa fa-instagram" aria-hidden="true"></i>
                                </a>
                                <a href="">
                                <i class="fa fa-youtube-play" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <div class="box ">
                            <div class="img-box">
                                <img src="{{ asset('assets/images/ibnu1.jpg') }}" class="img1" alt="">
                            </div>
                            <div class="detail-box">
                                <h5>
                                Ibnu Sri Hartono, S.Pd.
                                </h5>
                                <p>
                                Deputi Manajer Usaha dan Pemberdayaan Aset
                                </p>
                            </div>
                            <div class="social_box">
                                {{-- <a href="#">
                                <i class="fa fa-facebook" aria-hidden="true"></i>
                                </a>
                                <a href="#">
                                <i class="fa fa-twitter" aria-hidden="true"></i>
                                </a> --}}
                                <a href="">
                                <i class="fa fa-linkedin" aria-hidden="true"></i>
                                </a>
                                <a href="">
                                <i class="fa fa-instagram" aria-hidden="true"></i>
                                </a>
                                <a href="">
                                <i class="fa fa-youtube-play" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="row" style="display: flex; align-items: center; justify-content: center">
                    <div class="col-lg-3 col-sm-6">
                        <div class="box ">
                            <div class="img-box">
                                <img src="{{ asset('assets/images/fini1.jpg') }}" class="img1" alt="">
                            </div>
                            <div class="detail-box">
                                <h5>
                                Retfinita Sulistyowati, S.E.
                                </h5>
                                <p>
                                Staf / Analis Inovasi dan Inkubasi
                                </p>
                            </div>
                            <div class="social_box">
                                {{-- <a href="#">
                                <i class="fa fa-facebook" aria-hidden="true"></i>
                                </a>
                                <a href="#">
                                <i class="fa fa-twitter" aria-hidden="true"></i>
                                </a> --}}
                                <a href="">
                                <i class="fa fa-linkedin" aria-hidden="true"></i>
                                </a>
                                <a href="https://www.instagram.com/retfinita/">
                                <i class="fa fa-instagram" aria-hidden="true"></i>
                                </a>
                                <a href="">
                                <i class="fa fa-youtube-play" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <div class="box ">
                            <div class="img-box">
                                <img src="{{ asset('assets/images/pp_kosong.jpg') }}" class="img1" alt="">
                            </div>
                            <div class="detail-box">
                                <h5>
                                Idle
                                </h5>
                                <p>
                                Staf / Analis Transfer Teknologi
                                </p>
                            </div>
                            <div class="social_box">
                                {{-- <a href="#">
                                <i class="fa fa-facebook" aria-hidden="true"></i>
                                </a>
                                <a href="#">
                                <i class="fa fa-twitter" aria-hidden="true"></i>
                                </a> --}}
                                <a href="">
                                <i class="fa fa-linkedin" aria-hidden="true"></i>
                                </a>
                                <a href="">
                                <i class="fa fa-instagram" aria-hidden="true"></i>
                                </a>
                                <a href="">
                                <i class="fa fa-youtube-play" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <div class="box ">
                            <div class="img-box">
                                <img src="{{ asset('assets/images/haryo1.jpg') }}" class="img1" alt="">
                            </div>
                            <div class="detail-box">
                                <h5>
                                Haryo Rizki Wirahutama, S.H.
                                </h5>
                                <p>
                                Staf / Analis Usaha dan Pemberdayaan Aset
                                </p>
                            </div>
                            <div class="social_box">
                                {{-- <a href="#">
                                <i class="fa fa-facebook" aria-hidden="true"></i>
                                </a>
                                <a href="#">
                                <i class="fa fa-twitter" aria-hidden="true"></i>
                                </a> --}}
                                <a href="https://www.linkedin.com/in/haryorizkyy/">
                                <i class="fa fa-linkedin" aria-hidden="true"></i>
                                </a>
                                <a href="">
                                <i class="fa fa-instagram" aria-hidden="true"></i>
                                </a>
                                <a href="https://youtube.com/@caesaralbaariazatin150?si=3N0_NyGWNgDAMcOR">
                                <i class="fa fa-youtube-play" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
		</div>
	</section>
  <!-- end team section -->

	<!-- Begin Map -->
		<div style="height: 100vh; background: linear-gradient(135deg, #0f2027, #203a43, #2c5364); display: flex; align-items: center; justify-content: center; padding: 20px; box-sizing: border-box; padding-top: 320px; padding-bottom: 320px;">

			<div style="width: 90%; max-width: 1000px; background: rgba(255,255,255,0.05); border-radius: 20px; box-shadow: 0 8px 32px rgba(0,0,0,0.5); backdrop-filter: blur(10px); padding: 20px;">

				<div id="map" style="width: 100%; height: 500px; border-radius: 15px; overflow: hidden;"></div>

				<div style="text-align: center; margin-top: 20px;">
				<a href="https://maps.app.goo.gl/bs1Yc9GD3RZExhXg8" target="_blank" style="display: inline-block; padding: 12px 24px; background: #00c6ff; background: linear-gradient(to right, #0072ff, #00c6ff); color: white; text-decoration: none; border-radius: 30px; font-weight: bold; box-shadow: 0 4px 10px rgba(0,0,0,0.3); transition: 0.3s;">Buka di Google Maps</a>
			</div>
        </div>
	</div>
	<!-- End Map -->

    {{-- BEGIN CONTACT US --}}

    <div class="cta-section">
        <h2 class="cta-title">Tertarik Bekerja Sama dengan Kami?</h2>
        <p class="cta-subtitle">Jelajahi peluang pemanfaatan laboratorium atau ajukan ide inovasi Anda bersama kami.</p>

        <div class="cta-buttons">
            <a href="{{ route('exc') }}" class="futuristic-btn">Sewa Exclusive Room</a>
            <a href="{{ route('lab') }}" class="futuristic-btn">Sewa Laboratorium</a>
            <a href="{{ route('login') }}" class="futuristic-btn">Ajukan Inovasi</a>
        </div>
    </div>

    {{-- END CONTACT US --}}


	{{-- <!-- Begin Email -->
	<div class="contact_form_section" style="background: linear-gradient(135deg, #0099ff, #00c6ff); padding: 50px; border-radius: 20px; color: white; width: 100%; max-width: 600px; margin: auto; box-shadow: 0 6px 20px rgba(0,0,0,0.1); ; margin-top:30px; margin-bottom:30px">
		<h2 style="text-align: center; margin-bottom: 30px; font-size: 22px; font-weight: bold;">Get In Touch</h2>
		<form method="POST" style="display: flex; flex-direction: column; gap: 20px;">
			<input type="text" name="first_name" placeholder="First Name" required class="input-field" style="font-size: 12px;">
			<input type="text" name="last_name" placeholder="Last Name" required class="input-field" style="font-size: 12px;">
			<input type="email" name="email" placeholder="Enter Email" required class="input-field" style="font-size: 12px;">
			<input type="text" name="phone" placeholder="Phone Number" required class="input-field" style="font-size: 12px;">
			<textarea name="subject" placeholder="Message" rows="6" required class="input-field" style="font-size: 12px;"></textarea>

			<button type="submit" class="submit-btn" style="font-size: 12px;">Send Message</button>
		</form>
	</div>

	<!-- End Email --> --}}


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
				<a class="active" href="{{ route('contact') }}">
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
  <script type="text/javascript" src="{{ asset('assets/js/bootstrap.js') }}"></script>

  <!-- owl slider -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <!-- custom js -->
  <script type=text/javascript src="{{ asset('assets/js/custom.js') }}"></script>

  <!-- Google Map -->
  <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
  </script>
  <!-- End Google Map -->
	<script src="{{ asset('assets/js/backtotop.js') }}"></script>


	<script>
		var map = L.map('map').setView([-6.2344226, 106.75558], 18); // Koordinat lokasi, zoom 18 (detail)

		L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
		attribution: '&copy; OpenStreetMap contributors'
		}).addTo(map);

		// Marker Lokasi
		var marker = L.marker([-6.2344226, 106.75558]).addTo(map)
		.bindPopup('<b>Lokasi Kami</b><br>Silakan kunjungi.')
		.openPopup();
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
        function handleSewa() {
        alert("Silakan isi formulir penyewaan laboratorium atau hubungi kami untuk info lebih lanjut.");
        }

        function handleInovasi() {
        alert("Kirimkan ide inovatif Anda dan mari kita kembangkan bersama.");
        }
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
