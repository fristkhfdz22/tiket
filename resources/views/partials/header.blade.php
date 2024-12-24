    {{-- <header class="header" id="header">
      <nav class="nav container">
        <a href="{{ route('home') }}" class="nav__logo"
          ><img
            width="250"
            style="height: 70px; object-fit: cover"
            src="{{ asset('frontend/assets/images/logo-go-lombok____.png') }}"
            alt=""
        /></a>

        <div class="nav__menu" id="nav-menu">
          <ul class="nav__list">
            <li class="nav__item">
              <a href="{{ route('home') }}" class="nav__link {{ request()->is('/') ? ' active-link' : '' }}">
                <i class="bx bx-home-alt nav__icon"></i>
                <span class="nav__name">Home</span>
              </a>
            </li>

        

            

            <li class="nav__item">
              <a href="{{ route('package') }}" class="nav__link {{ request()->is('paket-travel') ? ' active-link' : '' }}">
                <i class="bx bx-briefcase-alt nav__icon"></i>
                <span class="nav__name">Paket</span>
              </a>
            </li>

           
          </ul>
        </div>
      </nav>
    </header> --}}


    <!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<meta name="format-detection" content="telephone=no">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<!-- Fonts-->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/fonts/fontawesome/font-awesome.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/fonts/pe-icon/pe-icon.css') }}">
	<!-- Vendors-->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/bootstrap/grid.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/magnific-popup/magnific-popup.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/swiper/swiper.css') }}">
	<!-- App & fonts-->
	<link rel="stylesheet" type="text/css"
		href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700|Open+Sans:400,700">
	<link rel="stylesheet" type="text/css" id="app-stylesheet" href="{{ asset('assets/css/main.css') }}">
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<![endif]-->
</head>


<body>
	<div class="page-wrap" id="root">

		<!-- header -->
		<header class="header header--fixed">
			<div class="header__inner">
				<div class="header__logo" ><a href="index.html" style="font-size: 25px; font:bold;">WISATA</a>GUCI</div>
				<div class="navbar-toggle" id="fs-button">
					<div class="navbar-icon"><span></span></div>
				</div>
			</div>

			<!-- fullscreenmenu__module -->
			<div class="fullscreenmenu__module" trigger="#fs-button">

				<!-- overlay-menu -->
				<nav class="overlay-menu">

					<!--  -->
					<ul class="wil-menu-list">
						<li class="current-menu-item"><a href="{{ route('home') }}" class="nav__link {{ request()->is('/') ? ' active-link' : '' }}">Home</a>
						</li>
						<li><a href="{{ route('package') }}" class="nav__link {{ request()->is('paket-travel') ? ' active-link' : '' }}">Paket</a>
						</li>
					
						<li><a href="{{ route('contact') }}" class="nav__link {{ request()->is('contact') ? ' active-link' : '' }}">Contact</a>
						</li>
					</ul><!--  -->

				</nav><!-- End / overlay-menu -->

			</div><!-- End / fullscreenmenu__module -->

		</header><!-- End / header -->
