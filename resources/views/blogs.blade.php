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
  <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet" />


  <title> STP ITPLN </title>

  <!-- bootstrap core css -->
	<link type="text/css" rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">

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
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/magnific-popup/dist/magnific-popup.css">

	<link rel="stylesheet" href="{{ asset('assets/css/backtotop.css') }}">
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"
    />

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>


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
			transition: color 0.1s ease;
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

		/* BLOG AREA */
		.col-lg-8 {
			max-width: 850px;
			margin: auto;
			padding: 60px 20px;
		}
		.article-item {
			background: #ffffff;
			border-radius: 20px;
			padding: 30px;
			margin-bottom: 50px;
			box-shadow: 0 12px 30px rgba(0,0,0,0.08);
			transition: all 0.1s ease-in-out;
		}
		.article-item:hover {
			transform: translateY(-6px);
			box-shadow: 0 18px 40px rgba(0,0,0,0.1);
		}
		.article-item h3 {
			font-size: 28px;
			margin-bottom: 15px;
			color: #333;
		}
		.article-info {
			display: flex;
			justify-content: space-between;
			align-items: center;
			margin-bottom: 20px;
			flex-wrap: wrap;
		}
		.author {
			display: flex;
			align-items: center;
		}
		.author img {
			width: 45px;
			height: 45px;
			border-radius: 50%;
			margin-right: 10px;
		}
		.article-time {
			display: flex;
			gap: 20px;
			align-items: center;
		}
		.article-time .icon {
			margin-right: 5px;
			color: #007bff;
		}
		.article-thumb img {
			width: 100%;
			height: auto;
			border-radius: 15px;
			transition: transform 0.5s;
		}
		.article-thumb:hover img {
			transform: scale(1.03);
		}
		.overlay-thumb-image {
			position: relative;
		}
		.overlay-playbutton {
			position: absolute;
			top: 50%;
			left: 50%;
			transform: translate(-50%, -50%);
		}
		.overlay-playbutton a {
			display: inline-block;
			background: #ffffff;
			padding: 12px 15px;
			border-radius: 50%;
			box-shadow: 0 4px 10px rgba(0,0,0,0.2);
			color: #007bff;
			font-size: 20px;
		}
		.article-text {
			font-size: 16.5px;
			color: #444;
			line-height: 1.75;
			margin-top: 18px;
		}
		.primary__button {
			margin-top: 20px;
			background: #007bff;
			color: #fff;
			padding: 10px 24px;
			border-radius: 30px;
			font-weight: 600;
			text-decoration: none;
			display: inline-block;
			/* transition: background 0.3s ease; */
		}
		.primary__button:hover {
			background: #0056b3;
		}
		.pagination-area {
			text-align: center;
		}
		.pagination .page-item {
			display: inline-block;
		}
		.pagination .page-link {
			color: #007bff;
			border: none;
			margin: 0 5px;
			font-size: 18px;
			border-radius: 10px;
			padding: 8px 16px;
			background: #eaf1fc;
			transition: all 0.3s ease;
		}
		.pagination .page-link.active,
		.pagination .page-link:hover {
			background: #007bff;
			color: #fff;
		}

		/* BLOG AREA 2 */
		#sidebar {
		background: rgba(255, 255, 255, 0.05);
		border-radius: 16px;
		padding: 20px;
		backdrop-filter: blur(10px);
		box-shadow: 0 10px 30px rgba(0,0,0,0.2);
		color: #fff;
		}

		.aside__component > div {
		background-color: rgba(255, 255, 255, 0.04);
		padding: 20px;
		margin-bottom: 25px;
		border-radius: 12px;
		transition: all 0.3s ease;
		}

		.aside__component > div:hover {
		transform: translateY(-5px);
		box-shadow: 0 10px 20px rgba(0,0,0,0.25);
		}

		.aside-item-heading h6 {
		font-size: 16px;
		font-weight: 600;
		margin-bottom: 15px;
		color:rgb(15, 24, 182);
		text-transform: uppercase;
		letter-spacing: 1px;
		}

		.search input[type="text"] {
		width: 100%;
		padding: 12px 15px;
		border: none;
		border-radius: 8px;
		font-size: 14px;
		background: rgba(255, 255, 255, 0.1);
		color: #fff;
		}

		.search input::placeholder {
		color: rgba(8, 2, 30, 0.1);
		}

		.recent-post-item {
		gap: 15px;
		margin-bottom: 18px;
		}

		.recent-post-item .image img {
		width: 70px;
		height: 70px;
		object-fit: cover;
		border-radius: 10px;
		box-shadow: 0 2px 5px rgba(0,0,0,0.3);
		}

		.recent-post-text a {
		color: #fff;
		font-weight: 500;
		transition: color 0.3s ease;
		text-decoration: none;
		}

		.recent-post-text a:hover {
		color:rgb(54, 12, 205);
		}

        .futuristic-divider {
            height: 4px;
            background: linear-gradient(90deg, #00fff7, #00f7a3, #6b00f7);
            border-radius: 10px;
            animation: glow 2s infinite ease-in-out;
            width: 80%;
            margin: 0 auto;
        }

        @keyframes glow {
            0% { box-shadow: 0 0 5px #00fff7; }
            50% { box-shadow: 0 0 20px #6b00f7; }
            100% { box-shadow: 0 0 5px #00fff7; }
        }

		.post-text-bottom {
		font-size: 12px;
		color: #000; /* dari abu-abu jadi hitam */
		margin-top: 4px;
		}

		.blog-catagories ul,
		.archive-posts-item ul,
		.blog-meta-item ul {
		list-style: none;
		padding-left: 0;
		}

		.blog-catagories li,
		.archive-posts-item li,
		.blog-meta-item li {
		display: flex;
		justify-content: space-between;
		align-items: center;
		padding: 8px 0;
		border-bottom: 1px solid rgba(255, 255, 255, 0.1);
		}

		.blog-catagories li a,
		.archive-posts-item a,
		.blog-meta-item a {
		color: #000; /* jadi hitam */
		text-decoration: none;
		transition: color 0.3s ease;
		}


		.blog-catagories li a:hover,
		.archive-posts-item a:hover,
		.blog-meta-item a:hover {
		color:rgb(17, 48, 171);
		}

		.blog-gallery-item {
		display: grid;
		grid-template-columns: repeat(3, 1fr);
		gap: 6px;
		}

		.blog-gallery-item img {
		width: 100%;
		height: 70px;
		object-fit: cover;
		border-radius: 6px;
		transition: 0.3s ease;
		}

		.blog-gallery-item img:hover {
		transform: scale(1.05);
		box-shadow: 0 0 10px rgba(255,255,255,0.2);
		}

		/* Responsive */
		@media (max-width: 991px) {
		#sidebar {
			margin-top: 40px;
		}
		}

		#blog-search::placeholder {
		color: #000; /* Mengubah warna placeholder menjadi hitam */
		}

		/* QUOTES */
		.blog-quotes {
		background: linear-gradient(45deg, #1e3c72, #2a5298); /* Gradient background */
		border-radius: 15px; /* Rounded corners */
		padding: 40px 20px;
		text-align: center;
		box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1); /* Soft shadow */
		transition: all 0.3s ease;
		color: white; /* White text for contrast */
		}

		.quotes-header h5 {
		font-size: 18px;
		font-family: 'Arial', sans-serif;
		font-weight: bold;
		text-transform: uppercase;
		color: #00ff99; /* Neon green for "Quotes" */
		margin-bottom: 10px;
		}

		.quotes-content {
		display: flex;
		align-items: center;
		justify-content: center;
		flex-wrap: wrap;
		gap: 30px; /* Space between image and quote */
		}

		.quotes-image {
		margin-right: 0px; /* Space between image and quote */
		flex-shrink: 0;
		}

		.quotes-image img {
		width: 150px;  /* Bigger image */
		height: 150px; /* Bigger image */
		object-fit: cover;
		border-radius: 50%; /* Circle image */
		border: 5px solid rgb(212, 212, 227); /* Neon border around image */
		transition: transform 0.3s ease; /* Interactive zoom effect */
		}

		.quotes-image img:hover {
		transform: scale(1.2); /* Zoom in effect on hover */
		}

		.blog-quotes h2 {
		font-size: 25px;
		color: lightgreen;
		font-family: 'Arial', sans-serif;
		font-weight: bold;
		text-transform: uppercase;
		letter-spacing: 1px;
		margin: 0;
		position: relative;
		z-index: 1;
		}

		.blog-quotes:hover {
		transform: scale(1.05); /* Zoom in effect */
		box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2); /* Shadow effect on hover */
		}

		.blog-quotes h3::after {
		content: '';
		position: absolute;
		bottom: -10px; /* Letak garis tepat di bawah teks */
		left: 50%;
		width: 80%;
		height: 4px;
		background:rgb(5, 3, 59); /* Neon green underline */
		transform: translateX(-50%);
		opacity: 0.5;
		transition: all 0.3s ease;
		}

		.blog-quotes:hover h3::after {
		width: 100%; /* Garis meluas saat hover */
		opacity: 1; /* Garis menjadi lebih jelas saat hover */
		}

		.blog-quotes h3 span {
		color:rgb(0, 47, 255); /* Neon green text color */
		font-size: 20px;
		transition: all 0.3s ease;
		}

		.blog-quotes h3:hover span {
		color: #ff0044; /* Change text color to neon red on hover */
		transform: translateX(5px); /* Slight move to the right */
		}

        .quotes-content {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 40px 20px;
            color: white;
            transition: all 0.4s ease;
            padding-bottom: 40px;
        }

        .quotes-content::after {
            content: "";
            position: absolute;
            bottom: 0;
            left: 20%;
            width: 60%;
            height: 1px;
            background: rgba(255, 255, 255, 0.2);
        }

        .quotes-content h3 {
            font-size: 20px;
            font-weight: 400;
            max-width: 700px;
            line-height: 1.5;
            margin-top: 20px;
            color: white;
        }

        .quote-img {
            width: 100px;
            height: 100px;
            object-fit: cover;
            border-radius: 50%;
            box-shadow: 0 0 10px rgba(255, 255, 255, 0.3);
        }

        .swiper {
            width: 100%;
            max-width: 800px;
            margin: auto;
        }

        .swiper-button-next,
        .swiper-button-prev {
            color: white;
        }

        .swiper-slide:last-child .quotes-content::after {
            display: none;
        }

        .swiper-pagination {
            margin-top: 20px;
            position: relative;
            z-index: 2;
        }

        .swiper-pagination-bullet {
            background: white;
            opacity: 0.6;
        }

        .swiper-pagination-bullet-active {
            background: #00d2ff;
            opacity: 1;
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

    {{-- Style Khusus Blog --}}
    <style>
        .pagination-area {
            margin-top: 50px;
        }
        .page-link {
            color: #495057;
            border: 1px solid #dee2e6;
            margin: 0 3px;
            border-radius: 4px !important;
        }
        .page-item.active .page-link {
            background-color: #007bff;
            border-color: #007bff;
            color: white;
        }
        .page-link:hover {
            color: #007bff;
            text-decoration: none;
            background-color: #e9ecef;
            border-color: #dee2e6;
        }
        .gallery-thumb {
            display: block;
            overflow: hidden;
            border-radius: 4px;
            transition: all 0.3s ease;
        }
        .gallery-thumb:hover {
            opacity: 0.8;
            transform: scale(1.05);
        }
        .badge-primary {
            background-color: #007bff;
        }
        .gallery-thumb {
            display: block;
            height: 150px; /* Atur tinggi sesuai kebutuhan */
            overflow: hidden;
            border-radius: 8px;
            transition: all 0.3s ease;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }

        .gallery-thumb:hover {
            opacity: 0.9;
            transform: scale(1.02);
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
        }

        .gallery-thumb img {
            transition: transform 0.3s ease;
        }

        .gallery-thumb:hover img {
            transform: scale(1.05);
        }

        .object-fit-cover {
            object-fit: cover;
        }

        @media (min-width: 768px) {
            .gallery-thumb {
                height: 180px; /* Lebih tinggi di desktop */
            }
        }

        @media (min-width: 992px) {
            .gallery-thumb {
                height: 200px; /* Lebih tinggi di layar besar */
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
						<li class="nav-item active">
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
	<section class="banner-area breadcrumArea mb-0" >
		<div class="container custom-container" style="margin-top: 20px;">
			<div class="breadcrum-banner" style="background: linear-gradient(135deg, hsla(210, 100.00%, 15.70%, 0.90), rgba(4, 31, 59, 0.9), rgba(5, 19, 35, 0.9)),
						url({{ asset('assets/new_asset/img/mask/breadcrumbmask.png') }}); ?>);
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
									Blog
								</h1>
							</div>
							<p style="font-family: 'Roboto', sans-serif; font-size: 15px; letter-spacing: 1px; color: #f0f0f0; line-height: 1.8; text-shadow: 1px 1px 5px rgba(0,0,0,0.15); padding-right: 10px;">
								Dapatkan wawasan terbaru seputar inovasi, teknologi, dan bisnis di blog STP ITPLN, mulai dari riset hingga strategi pertumbuhan.
							</p>
						</div>
					</div>
					<div class="col-lg-6 order-1 order-lg-2">
						<div class="banner-image d-flex justify-content-center" data-aos="fade-left" data-aos-delay="30" data-aos-offset="300">
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
										Blog
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

	<!-- BEGIN BLOG AREA-->
		<div class="blog-area">
            <div class="container">
                <div class="row align-items-start">

                    <div class="col-lg-8">

                        {{-- Halaman 1 --}}
                        <div class="page-content" id="page-1">
                            <!-- Article 1 -->
                            <article class="article-item">
                                <h3>Kreator Energi 2024</h3>
                                <div class="article-info">
                                    <div class="author">
                                        <img src="{{ asset('assets/new_asset/img/logo/logostp.png') }}" alt="Author" />
                                        <a href="javascript:void(0)">Bagian Usaha dan Inkubasi Bisnis</a>
                                    </div>
                                    <div class="article-time">
                                        <div class="date">
                                            <span class="icon"><i class="far fa-calendar-alt"></i></span>
                                            <span>20 November, 2024</span>
                                        </div>
                                        <div class="comments">
                                            <span class="icon"><i class="far fa-comment-dots"></i></span>
                                            <span><a href="javascript:void(0)">25 Comments</a></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="article-thumb" data-aos="fade-up">
                                    <img src="{{ asset('assets/new_asset/img/blog/blog1.jpg') }}" alt="Article Image" class="img-fluid" />
                                </div>
                                <p class="article-text" style="font-size: 14px;">
                                    STP ITPLN menghadirkan Kreator Energi 2024, sebuah inisiatif inovatif untuk mendorong pengembangan solusi energi berkelanjutan. Program ini menghubungkan inovator, akademisi, dan industri dalam menciptakan teknologi energi yang lebih cerdas, efisien, dan ramah lingkungan.
                                    Melalui kolaborasi dan riset, kami berkomitmen untuk membangun masa depan energi yang lebih baik. ⚡🌱
                                </p>
                                <a href="https://www.instagram.com/buib.itpln/" class="primary__button primary__button-bgPrimary shadow-sm">Learn More</a>
                            </article>

                            <!-- Article 2 -->
                            <article class="article-item">
                                <h3>Program Inkubasi Bisnis Aperti BUMN 2024</h3>
                                <div class="article-info">
                                    <div class="author">
                                        <img src="{{ asset('assets/new_asset/img/logo/logostp.png') }}" alt="Author" />
                                        <a href="javascript:void(0)">Bagian Usaha dan Inkubasi Bisnis</a>
                                    </div>
                                    <div class="article-time">
                                        <div class="date">
                                            <span class="icon"><i class="far fa-calendar-alt"></i></span>
                                            <span>Januari, 2025</span>
                                        </div>
                                        <div class="comments">
                                            <span class="icon"><i class="far fa-comment-dots"></i></span>
                                            <span><a href="javascript:void(0)">25 Comments</a></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="article-thumb" data-aos="fade-up">
                                    <img src="{{ asset('assets/new_asset/img/action/action1.jpg') }}" alt="Article Image" class="img-fluid" />
                                </div>
                                <p class="article-text" style="font-size: 14px;">
                                    STP ITPLN berpartisipasi dalam Program Inkubasi Bisnis APERTI BUMN 2024, sebuah inisiatif untuk mendukung startup dan inovator dalam mengembangkan bisnis berbasis teknologi. Program ini menyediakan mentoring, akses ke jaringan industri, serta dukungan riset untuk menciptakan solusi yang berdaya saing tinggi.
                                    Dengan ekosistem yang kolaboratif, kami siap membantu wirausaha membangun bisnis yang inovatif dan berkelanjutan. 🚀
                                </p>
                                <a href="https://www.instagram.com/buib.itpln/" class="primary__button primary__button-bgPrimary shadow-sm">Learn More</a>
                            </article>

                            <!-- Article 3 -->
                            <article class="article-item overlay-thumb">
                                <h3>Institut Teknologi PLN</h3>
                                <div class="article-info">
                                    <div class="author">
                                        <img src="{{ asset('assets/new_asset/img/logo/logostp.png') }}" alt="Author" />
                                        <a href="javascript:void(0)">Bagian Usaha dan Inkubasi Bisnis</a>
                                    </div>
                                    <div class="article-time">
                                        <div class="date">
                                            <span class="icon"><i class="far fa-calendar-alt"></i></span>
                                            <span>Desember, 2024</span>
                                        </div>
                                        <div class="comments">
                                            <span class="icon"><i class="far fa-comment-dots"></i></span>
                                            <span><a href="javascript:void(0)">25 Comments</a></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="article-thumb overlay-thumb-image" data-aos="fade-up">
                                    <img src="{{ asset('assets/new_asset/img/blog/blog2.jpg') }}" alt="Article Image" class="img-fluid" />
                                    <div class="overlay-playbutton">
                                        <a class="popup-video video-border" href="https://youtu.be/-E8ggVxZIvk?si=dXMdu-ov0NmgTR9K">
                                            <i class="fas fa-play"></i>
                                        </a>
                                    </div>
                                </div>
                                <p class="article-text" style="font-size: 14px;">
                                    Institut Teknologi PLN (ITPLN) adalah perguruan tinggi yang berfokus pada pengembangan teknologi, energi, dan bisnis berbasis inovasi. Sebagai bagian dari ekosistem PLN, ITPLN mendukung riset, pendidikan, dan pengembangan solusi berkelanjutan untuk industri energi dan teknologi di Indonesia.
                                    Melalui program akademik, inkubasi bisnis, serta kolaborasi dengan industri, ITPLN berkomitmen mencetak SDM unggul yang siap menghadapi tantangan masa depan. ⚡🎓
                                </p>
                                <a href="https://www.instagram.com/itpln/" class="primary__button primary__button-bgPrimary shadow-sm">Learn More</a>
                            </article>
                        </div>

                        <div class="page-content" id="page-2">
                            <!-- Article 1 -->
                            <article class="article-item">
                                <h3>Rektor ITPLN di CNN News Hour: Pendidikan untuk Energi Berkelanjutan</h3>
                                <div class="article-info">
                                    <div class="author">
                                        <img src="{{ asset('assets/images/itpln2.png') }}" alt="Author" />
                                        <a href="javascript:void(0)">Institut Teknologi PLN</a>
                                    </div>
                                    <div class="article-time">
                                        <div class="date">
                                            <span class="icon"><i class="far fa-calendar-alt"></i></span>
                                            <span>24 Agustus, 2025</span>
                                        </div>
                                        <div class="comments">
                                            <span class="icon"><i class="far fa-comment-dots"></i></span>
                                            <span><a href="javascript:void(0)">25 Comments</a></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="article-thumb" data-aos="fade-up">
                                    <img src="{{ asset('assets/images/cnn_rektor.jpg') }}" alt="Article Image" class="img-fluid" />
                                </div>
                                <p class="article-text" style="font-size: 14px;">
                                    ✨ Rektor ITPLN hadir sebagai narasumber dalam program CNN News Hour dengan topik “Peran Pendidikan dalam Energi Berkelanjutan”. Pada kesempatan ini, beliau membahas bagaimana dunia pendidikan, khususnya perguruan tinggi, memiliki peran penting dalam menyiapkan sumber daya manusia yang mampu menjawab tantangan global di sektor energi. 🌱⚡
                                    <br>
                                    <br>
                                    Keterlibatan ITPLN dalam forum nasional maupun internasional menunjukkan komitmen untuk terus menghadirkan kontribusi yang relevan di tengah isu energi global. 💡📚⚡ Kami bangga menjadi bagian dari ITPLN, kampus energi yang selalu bergerak maju dengan karya, prestasi, dan dedikasi untuk negeri.
                                    <br>
                                    <br>
                                    #ITPLN #KampusEnergi #DiktiSaintekBerdampak #CNNIndonesia #NewsHour
                                </p>
                                <a href="https://www.instagram.com/itpln/" class="primary__button primary__button-bgPrimary shadow-sm">Learn More</a>
                            </article>
                        </div>

                        <div class="page-content" id="page-3">
                        </div>

                        <!-- Enhanced Pagination -->
                        <div class="pagination-area">
                            <nav aria-label="Page navigation">
                                <ul class="pagination justify-content-center">
                                    <li class="page-item">
                                        <a class="page-link shadow-sm prev-page" href="#" aria-label="Previous">
                                            <i class="fas fa-angle-left"></i>
                                        </a>
                                    </li>
                                    <li class="page-item active"><a class="page-link shadow-sm" href="#" data-page="1">1</a></li>
                                    <li class="page-item"><a class="page-link shadow-sm" href="#" data-page="2">2</a></li>
                                    <li class="page-item"><a class="page-link shadow-sm" href="#" data-page="3">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link shadow-sm next-page" href="#" aria-label="Next">
                                            <i class="fas fa-angle-right"></i>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>

                    <div style="padding-top:60px" class="col-lg-4 mt-30 mt-md-5 mt-lg-0" >
                        <div class="aside" id="sidebar">
                            <!-- Search Widget -->
                            <div class="aside__component" >
                                <div class="search mb-30 shadow-sm" data-aos="fade-up">
                                    <div class="aside-item-heading">
                                        <h6>Search</h6>
                                    </div>
                                    <form action="#">
                                        <div class="input-group">
                                            <input type="text" name="blog-search" id="blog-search" class="form-control" placeholder="Search articles..." />
                                            <div class="input-group-append">
                                                <button class="btn btn-primary" type="submit">
                                                    <i class="fas fa-search"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                                <!-- Recent Posts Widget -->
                                <div class="recent-post mb-30 shadow-sm" data-aos="fade-up" data-aos-delay="300">
                                    <div class="aside-item-heading">
                                        <h6>Recent Posts</h6>
                                    </div>
                                    <div class="recent-post-item d-flex align-items-start">
                                        <div class="image">
                                            <img src="{{ asset('assets/new_asset/img/blog/blog2.jpg') }}" alt="Article Image" class="rounded" />
                                        </div>
                                        <div class="recent-post-text">
                                            <a href="javascript:void(0)">
                                                Kreator Energi 2024
                                            </a>
                                            <div class="post-text-bottom d-flex align-items-center">
                                                <span class="far fa-calendar mr-2"></span>
                                                <span>20 Nov 2024</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="recent-post-item d-flex align-items-start">
                                        <div class="image">
                                            <img src="{{ asset('assets/new_asset/img/kampus-itpln.jpg') }}" alt="Article Image" class="rounded" />
                                        </div>
                                        <div class="recent-post-text">
                                            <a href="javascript:void(0)">
                                                Program Inkubasi Bisnis
                                            </a>
                                            <div class="post-text-bottom d-flex align-items-center">
                                                <span class="far fa-calendar mr-2"></span>
                                                <span>15 Jan 2025</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="recent-post-item d-flex align-items-start mb-0" style="border: none;">
                                        <div class="image">
                                            <img src="{{ asset('assets/new_asset/img/action/action1.jpg') }}" alt="Article Image" class="rounded" />
                                        </div>
                                        <div class="recent-post-text">
                                            <a href="javascript:void(0)">
                                                ITPLN Campus Tour
                                            </a>
                                            <div class="post-text-bottom d-flex align-items-center">
                                                <span class="far fa-calendar mr-2"></span>
                                                <span>05 Dec 2024</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Categories Widget -->
                                <div class="blog-catagories mb-30 shadow-sm" data-aos="fade-up" data-aos-delay="400">
                                    <div class="aside-item-heading">
                                        <h6>Blog Categories</h6>
                                    </div>
                                    <div class="blog-catagories-item">
                                        <ul>
                                            <li class="d-flex justify-content-between align-content-around">
                                                <a style="font-size: 13px;" href="javascript:void(0)">Energi Terbarukan</a>
                                                <span class="badge badge-primary">17</span>
                                            </li>
                                            <li class="d-flex justify-content-between align-content-around">
                                                <a style="font-size: 13px;" href="javascript:void(0)">Inkubasi Bisnis</a>
                                                <span class="badge badge-primary">09</span>
                                            </li>
                                            <li class="d-flex justify-content-between align-content-around">
                                                <a style="font-size: 13px;" href="javascript:void(0)">Teknologi</a>
                                                <span class="badge badge-primary">22</span>
                                            </li>
                                            <li class="d-flex justify-content-between align-content-around">
                                                <a style="font-size: 13px;" href="javascript:void(0)">Pendidikan</a>
                                                <span class="badge badge-primary">19</span>
                                            </li>
                                            <li class="d-flex justify-content-between align-content-around mb-0">
                                                <a style="font-size: 13px;" href="javascript:void(0)">Riset</a>
                                                <span class="badge badge-primary">13</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <!-- Archive Widget -->
                                <div class="archive-posts mb-30 shadow-sm" data-aos="fade-up" data-aos-delay="500">
                                    <div class="aside-item-heading">
                                        <h6>Archive Posts</h6>
                                    </div>
                                    <div class="archive-posts-item">
                                        <select class="form-control">
                                            <option>Select Month</option>
                                            <option>January 2025 (5)</option>
                                            <option>December 2024 (8)</option>
                                            <option>November 2024 (12)</option>
                                            <option>October 2024 (7)</option>
                                            <option>September 2024 (4)</option>
                                        </select>
                                    </div>
                                </div>

                                <!-- Gallery Widget -->
                                <div class="blog-gallery mb-30 shadow-sm" data-aos="fade-up" data-aos-delay="600">
                                        <div class="aside-item-heading">
                                            <h6>Gallery</h6>
                                        </div>
                                        <div class="blog-gallery-item">
                                            <a href="{{ asset('assets/images/electricity.jpg') }}"><img src="{{ asset('assets/new_asset/img/kampus-itpln.jpg') }}" alt="Image 1" /></a>
                                            <a href="{{ asset('assets/images/itpln.jpg') }}"><img src="{{ asset('assets/images/itpln.jpg') }}" alt="Image 2" /></a>
                                            <a href="{{ asset('assets/images/itpln2.jpg') }}"><img src="{{ asset('assets/images/itpln2.jpg') }}" alt="Image 3" /></a>
                                            <a href="{{ asset('assets/gallery/ften/itcc/itcc1.jpg') }}"><img src="{{ asset('assets/gallery/ften/itcc/itcc1.jpg') }}" alt="Image 4" /></a>
                                            <a href="{{ asset('assets/gallery/ften/itcc/itcc3.jpg') }}"><img src="{{ asset('assets/gallery/ften/itcc/itcc3.jpg') }}" alt="Image 5" /></a>
                                            <a href="{{ asset('assets/new_asset/img/blog/blog2.jpg') }}"><img src="{{ asset('assets/new_asset/img/blog/blog2.jpg') }}" alt="Image 6" /></a>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

	<!-- END BLOG AREA-->

	<!-- BEGIN QUOTES -->
        <div class="blog-quotes pt-40 pb-40 mt-30 mb-60">
            <div class="quotes-header text-center mb-4">
                <h2 style="color: white;">Quotes</h2>
            </div>

            <div class="swiper quotes-swiper">
                <div class="swiper-wrapper">

                    <div class="swiper-slide quotes-content text-center">
                        <img src="{{ asset('assets/images/vegeta.jpeg') }}" class="quote-img" alt="Vegeta" />
                        <h3>"There’s only one certainty in life. A strong man stands above and conquers all!"</h3>
                    </div>

                    <div class="swiper-slide quotes-content text-center">
                        <img src="{{ asset('assets/images/goku.jpg') }}" class="quote-img" alt="Goku" />
                        <h3>"The Power Comes In Response To A Need, Not A Desire."</h3>
                    </div>

                    <div class="swiper-slide quotes-content text-center">
                        <img src="{{ asset('assets/images/albert_einstein.jpg') }}" class="quote-img" alt="Einstein" />
                        <h3>"Life is like riding a bicycle. To keep your balance, you must keep moving."</h3>
                    </div>

                    <div class="swiper-slide quotes-content text-center">
                        <img src="{{ asset('assets/images/william.jpg') }}" class="quote-img" alt="William Shakespeare" />
                        <h3>"To be, or not to be,
                            that is the question."</h3>
                    </div>

                    <div class="swiper-slide quotes-content text-center">
                        <img src="{{ asset('assets/images/lao_tzu.jpg') }}" class="quote-img" alt="Lao Tzu" />
                        <h3>"A journey of a thousand miles begins with a single step."</h3>
                    </div>

                    <!-- Tambahkan slide baru di sini -->
                </div>

                <!-- Navigasi manual -->
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>

                <!-- Pagination (bulat-bulat di bawah) -->
                <div class="swiper-pagination"></div>
            </div>
        </div>


	<!-- END QUOTES -->

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
				<a class="active" href="{{ route('blogs') }}">
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
	<script type="text/javascript" src="{{ asset('assets/js/custom.js') }}"></script>
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
	$(document).ready(function() {
		$('.popup-video').magnificPopup({
			type: 'iframe',
			iframe: {
				patterns: {
					youtube: {
						index: 'youtu.be/',
						id: null,
						src: 'https://www.youtube.com/embed/%id%?autoplay=1',
						id: function(url) {
							// Ambil hanya ID-nya, buang ?si=... atau parameter lain
							var id = url.split('youtu.be/')[1].split('?')[0];
							return id;
						}
					}
				}
			}
		});

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
        document.addEventListener('DOMContentLoaded', function() {
            // Pagination functionality would be implemented here
            // For a real implementation, you would fetch content via AJAX or handle server-side rendering

            const paginationLinks = document.querySelectorAll('.page-link:not(.disabled)');
            paginationLinks.forEach(link => {
                link.addEventListener('click', function(e) {
                    e.preventDefault();
                    // In a real implementation, this would load the next page of content
                    console.log('Loading page:', this.textContent.trim());
                    // You would typically make an AJAX call here or redirect to the page
                });
            });

            // Gallery lightbox functionality
            const galleryLinks = document.querySelectorAll('.gallery-thumb');
            galleryLinks.forEach(link => {
                link.addEventListener('click', function(e) {
                    e.preventDefault();
                    // In a real implementation, you would open a lightbox here
                    console.log('Opening image:', this.href);
                });
            });
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
        // Inisialisasi halaman pertama
        showPage(1);

        // Handle klik pagination
        document.querySelectorAll('.page-link').forEach(link => {
            link.addEventListener('click', function(e) {
                e.preventDefault();

                if (this.classList.contains('prev-page')) {
                    const current = document.querySelector('.pagination .active');
                    const prev = current.previousElementSibling;
                    if (prev) showPage(parseInt(prev.textContent));
                }
                else if (this.classList.contains('next-page')) {
                    const current = document.querySelector('.pagination .active');
                    const next = current.nextElementSibling;
                    if (next) showPage(parseInt(next.textContent));
                }
                else if (this.dataset.page) {
                    showPage(parseInt(this.dataset.page));
                }
            });
        });
    });

    function showPage(pageNumber) {
        // Simpan state halaman saat ini
        sessionStorage.setItem('currentPage', pageNumber);

        // Update UI pagination
        document.querySelectorAll('.pagination .page-item').forEach(item => {
            item.classList.remove('active');
        });

        // Aktifkan halaman yang dipilih
        document.querySelector(`.pagination [data-page="${pageNumber}"]`).parentElement.classList.add('active');

        // Disable tombol prev/next jika diperlukan
        document.querySelector('.prev-page').parentElement.classList.toggle('disabled', pageNumber === 1);
        document.querySelector('.next-page').parentElement.classList.toggle('disabled', pageNumber === 3);

        // Di sini Anda akan melakukan AJAX request atau menampilkan konten yang sesuai
        console.log('Memuat halaman:', pageNumber);

        // Contoh: Sembunyikan semua artikel, lalu tampilkan yang sesuai
        document.querySelectorAll('.article-item').forEach(article => {
            article.style.display = 'none';
        });

        // Tampilkan artikel untuk halaman ini (contoh sederhana)
        const itemsPerPage = 3;
        const startIndex = (pageNumber - 1) * itemsPerPage;
        const endIndex = startIndex + itemsPerPage;

        const articles = Array.from(document.querySelectorAll('.article-item'));
        articles.slice(startIndex, endIndex).forEach(article => {
            article.style.display = 'block';
        });

        // Scroll ke atas
        window.scrollTo({ top: 0, behavior: 'smooth' });
    }
    </script>

    <script>
    // Jika ingin menambahkan lightbox
    document.addEventListener('DOMContentLoaded', function() {
        // Inisialisasi lightbox di sini
        // Contoh menggunakan library seperti lightbox2 atau fancybox
    });
    </script>

    {{-- Quotes --}}
    <script>
        const swiper = new Swiper(".quotes-swiper", {
            loop: true,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            effect: "fade",
            fadeEffect: {
                crossFade: true,
            },
        });
    </script>


	<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
	<script>AOS.init();</script>

	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/magnific-popup/dist/jquery.magnific-popup.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap">
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
