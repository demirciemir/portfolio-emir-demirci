<!doctype html>
<html class="no-js" lang="{{ App::getLocale() }}">

<head>	
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>{{ __($project['title_key']) }} | Emir Demirci</title>
	<meta name="description" content="{{ __($project['description_key']) }}">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/favicon.png') }}">
	
	<link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" />
	<link href="{{ asset('assets/css/fontawesome.min.css') }}" rel="stylesheet" />
	<link href="{{ asset('assets/css/bsnav.min.css') }}" rel="stylesheet" />
	<link href="{{ asset('assets/css/magnific-popup.css') }}" rel="stylesheet" />
	<link href="{{ asset('assets/css/slick.css') }}" rel="stylesheet" />
	<link href="{{ asset('assets/css/all.min.css') }}" rel="stylesheet" />
	<link href="{{ asset('assets/css/animate.css') }}" rel="stylesheet" />
	<link href="{{ asset('assets/css/icofont.min.css') }}" rel="stylesheet" />
	<link href="{{ asset('assets/css/splitting.css') }}" rel="stylesheet" />
	<link href="{{ asset('assets/css/splitting-cells.css') }}" rel="stylesheet" />
	<link href="{{ asset('style.css') }}" rel="stylesheet">
	<link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet" />
	@vite(['resources/css/app.css', 'resources/js/app.js'])

	<style>
		/* ===== Portfolio Detail Redesign ===== */

		body.side-header {
			background-color: #f6f5fd;
		}

		/* Title Bar */
		.pd-title-bar {
			padding: 60px 0 20px;
		}
		.pd-back-link {
			display: inline-flex;
			align-items: center;
			gap: 8px;
			color: #46435e;
			font-size: 15px;
			font-weight: 600;
			text-decoration: none;
			letter-spacing: 0.3px;
			transition: color 0.2s, transform 0.2s;
			margin-bottom: 24px;
		}
		.pd-back-link i {
			font-size: 16px;
			transition: transform 0.2s;
		}
		.pd-back-link:hover {
			color: #3a44ca;
			text-decoration: none;
		}
		.pd-back-link:hover i {
			transform: translateX(-4px);
		}
		.pd-category {
			font-size: 13px;
			font-weight: 600;
			color: #ee4158;
			letter-spacing: 2px;
			text-transform: uppercase;
			margin-bottom: 12px;
			display: block;
		}
		.pd-title {
			font-size: 42px;
			font-weight: 800;
			color: #120f2d;
			margin: 0 0 30px;
			line-height: 1.2;
			letter-spacing: -0.5px;
		}

		/* Info Strip */
		.pd-info-strip {
			display: flex;
			gap: 0;
			background: #ffffff;
			border-radius: 12px;
			box-shadow: 0 10px 30px rgba(18, 15, 49, 0.04);
			border: 1px solid rgba(18, 15, 49, 0.08);
			margin-bottom: 50px;
			overflow: hidden;
		}
		.pd-info-strip-item {
			flex: 1;
			padding: 24px 30px;
			border-right: 1px solid rgba(18, 15, 49, 0.08);
		}
		.pd-info-strip-item:last-child {
			border-right: none;
		}
		.pd-info-strip-label {
			display: block;
			font-size: 11px;
			font-weight: 700;
			color: #3a44ca;
			letter-spacing: 1.5px;
			text-transform: uppercase;
			margin-bottom: 8px;
		}
		.pd-info-strip-value {
			font-size: 16px;
			color: #120f2d;
			font-weight: 600;
			line-height: 1.4;
		}

		/* Description */
		.pd-desc-section {
			margin-bottom: 60px;
		}
		.pd-section-label {
			font-size: 22px;
			font-weight: 700;
			color: #120f2d;
			margin-bottom: 24px;
			position: relative;
			display: inline-block;
			padding-bottom: 8px;
		}
		.pd-section-label::after {
			content: '';
			position: absolute;
			left: 0;
			bottom: 0;
			width: 40px;
			height: 3px;
			background: #3a44ca;
			border-radius: 2px;
		}
		.pd-desc-text {
			font-size: 17px;
			line-height: 1.95;
			color: #2b2b3d;
			max-width: 880px;
			font-weight: 400;
		}

		/* Video */
		.pd-video-section {
			margin-bottom: 60px;
		}
		.pd-video-wrapper {
			position: relative;
			width: 100%;
			max-width: 850px;
			padding-bottom: min(56.25%, 480px);
			border-radius: 12px;
			overflow: hidden;
			background: #ffffff;
			box-shadow: 0 12px 35px rgba(18, 15, 49, 0.06);
			border: 1px solid rgba(18, 15, 49, 0.08);
		}
		.pd-video-wrapper iframe {
			position: absolute;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
			border: none;
		}

		/* Gallery */
		.pd-gallery-section {
			margin-bottom: 60px;
		}
		.pd-gallery-grid {
			display: grid;
			grid-template-columns: repeat(2, 1fr);
			gap: 20px;
		}
		.pd-gallery-grid.pd-gallery-mobile {
			grid-template-columns: repeat(4, 1fr);
		}
		.pd-gallery-item {
			display: block;
			cursor: zoom-in;
			border-radius: 12px;
			overflow: hidden;
			background: #ffffff;
			box-shadow: 0 4px 15px rgba(18, 15, 49, 0.04);
			border: 1px solid rgba(18, 15, 49, 0.06);
			transition: transform 0.3s ease, box-shadow 0.3s ease;
		}
		.pd-gallery-item img {
			width: 100%;
			height: auto;
			max-height: 480px;
			object-fit: contain;
			background: #ffffff;
			display: block;
		}
		.pd-gallery-item:hover {
			transform: translateY(-5px);
			box-shadow: 0 12px 30px rgba(18, 15, 49, 0.08);
		}

		/* Responsive */
		@media (max-width: 991px) {
			.pd-gallery-grid.pd-gallery-mobile {
				grid-template-columns: repeat(3, 1fr);
			}
		}
		@media (max-width: 768px) {
			.pd-title {
				font-size: 32px;
			}
			.pd-info-strip {
				flex-direction: column;
			}
			.pd-info-strip-item {
				border-right: none;
				border-bottom: 1px solid rgba(18, 15, 49, 0.08);
				padding: 18px 22px;
			}
			.pd-info-strip-item:last-child {
				border-bottom: none;
			}
			.pd-gallery-grid {
				grid-template-columns: 1fr;
			}
			.pd-gallery-grid.pd-gallery-mobile {
				grid-template-columns: repeat(2, 1fr);
			}
			.pd-gallery-item img {
				max-height: 380px;
			}
		}
	</style>
</head>

 <body class="side-header" data-spy="scroll" data-target=".navbar" data-offset="1">

<div class="preloader">
  <div class="lds-ellipsis"><div></div><div></div><div></div><div></div></div>
</div>

<div class="theme_all_wrap" data-magic-cursor=" " data-color="crimson">
 <div id="main-wrapper"> 

    <header class="header">
		<div class="main-navigation sd-nav">
			<div class="navbar navbar-expand-lg bsnav bsnav-sidebar bsnav-scrollspy bsnav-sidebar-left">
				<div class="navbar-brand sidebar-brand-area mb-20">
					<h2 class="sidebar-name">Emir<br><span>Demirci</span></h2>
					<p class="sidebar-title">{{ __('web_developer_title') }}</p>
					<div class="sidebar-accent-line"></div>
				</div>
				<button class="navbar-toggler toggler-spring"><span class="navbar-toggler-icon"></span></button>
				<div class="navbar-collapse justify-content-sm-center pt-20">
					<ul class="navbar-nav navbar-mobile mr-0">
						<li class="nav-item"><a class="nav-link" href="{{ url('/#home') }}"><i class="icofont-home"></i> {{ __('home') }}</a></li>
						<li class="nav-item"><a class="nav-link" href="{{ url('/#about') }}"><i class="icofont-contact-add"></i> {{ __('about') }}</a></li>
						<li class="nav-item"><a class="nav-link" href="{{ url('/#resume') }}"><i class="icofont-graduate-alt"></i> {{ __('my_resume') }}</a></li>
						<li class="nav-item"><a class="nav-link" href="{{ url('/#service') }}"><i class="icofont-file-document"></i> {{ __('service') }}</a></li>
						<li class="nav-item"><a class="nav-link active" href="{{ url('/#work') }}"><i class="icofont-briefcase-1"></i> {{ __('portfolio') }}</a></li>
						<li class="nav-item"><a class="nav-link" href="{{ url('/#feed') }}"><i class="icofont-quote-left"></i>{{ __('testimonial') }}</a></li>
						<li class="nav-item"><a class="nav-link" href="mailto:emirdemirci1637@gmail.com"><i class="icofont-envelope"></i> {{ __('contact') }}</a></li>
						<li class="nav-item">
							<div class="nav-link d-flex align-items-center" style="cursor: default; margin-top: 15px; margin-left: 35px;">
								<a href="{{ route('lang.switch', 'tr') }}" style="color: {{ App::getLocale() == 'tr' ? '#FACA22' : '#ffffff' }} !important; font-weight: 600; text-decoration: none; letter-spacing: 1px;">TR</a>
								<span class="text-white mx-2" style="font-weight: 600;">/</span>
								<a href="{{ route('lang.switch', 'en') }}" style="color: {{ App::getLocale() == 'en' ? '#FACA22' : '#ffffff' }} !important; font-weight: 600; text-decoration: none; letter-spacing: 1px;">EN</a>
							</div>
                        </li>
					</ul>
				</div>
			</div>
			<div class="bsnav-mobile">
				<div class="bsnav-mobile-overlay"></div>
				<div class="navbar"></div>
			</div>
		</div>
    </header>
	
	<div class="clearfix"></div>

<div class="main-area-width">	

	<main class="main">

		{{-- ===== CONTENT ===== --}}
		<section style="padding: 30px 0 80px; min-height: 60vh; background-color: #f6f5fd;">
			<div class="container pl-20">

				{{-- Title Bar --}}
				<div class="pd-title-bar">
					<a href="{{ url('/#work') }}" class="pd-back-link">
						<i class="icofont-arrow-left"></i> {{ __('back_to_portfolio') }}
					</a>
					<span class="pd-category">{{ __($project['category']) }}</span>
					<h1 class="pd-title">{{ __($project['title_key']) }}</h1>
				</div>

				{{-- Info Strip --}}
				<div class="pd-info-strip">
					<div class="pd-info-strip-item">
						<span class="pd-info-strip-label">{{ __('project_client') }}</span>
						<span class="pd-info-strip-value">{{ $project['client'] }}</span>
					</div>
					<div class="pd-info-strip-item">
						<span class="pd-info-strip-label">{{ __('project_date') }}</span>
						<span class="pd-info-strip-value">{{ $project['date'] }}</span>
					</div>
					<div class="pd-info-strip-item">
						<span class="pd-info-strip-label">{{ __('project_tech') }}</span>
						<span class="pd-info-strip-value">{{ $project['tech'] }}</span>
					</div>
				</div>

				{{-- Description --}}
				<div class="pd-desc-section">
					<h3 class="pd-section-label">{{ __('project_details') }}</h3>
					<p class="pd-desc-text">{{ __($project['description_key']) }}</p>
				</div>

				{{-- Video --}}
				@if(!empty($project['youtube']))
				<div class="pd-video-section">
					<h3 class="pd-section-label">{{ __('project_video') }}</h3>
					<div class="pd-video-wrapper">
						<iframe src="{{ $project['youtube'] }}" 
								title="{{ __($project['title_key']) }}" 
								allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
								allowfullscreen></iframe>
					</div>
				</div>
				@endif

				{{-- Gallery --}}
				@if(!empty($project['gallery']))
				<div class="pd-gallery-section">
					<h3 class="pd-section-label">{{ __('project_gallery') }}</h3>
					<div class="pd-gallery-grid pd-gallery-lightbox {{ str_contains(strtolower($project['category']), 'mobile') ? 'pd-gallery-mobile' : '' }}">
						@foreach($project['gallery'] as $img)
						<a href="{{ asset($img) }}" class="pd-gallery-item" title="{{ __($project['title_key']) }}">
							<img src="{{ asset($img) }}" alt="{{ __($project['title_key']) }}">
						</a>
						@endforeach
					</div>
				</div>
				@endif

			</div>
		</section>

	<footer class="footer">
		<div class="copyright-area">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<span class="copyright-text">&copy; 2026 Emir Demirci. {{ __('rights_reserved') }}</span>
					</div>
				</div>
			</div>
		</div>
	</footer>	
	</main>		
</div>	
	<a href="#main-wrapper" id="scrtop" class="smooth-scroll"><i class="icofont-rounded-up"></i></a>
	<div class="mouse-cursor cursor-outer"></div>
	<div class="mouse-cursor cursor-inner"></div>
	</div>	
</div>
  
	<script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.appear.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('assets/js/waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/js/progress-bar.min.js') }}"></script>
    <script src="{{ asset('assets/js/slick.min.js') }}"></script>
    <script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/count-to.js') }}"></script>
    <script src="{{ asset('assets/js/typed.min.js') }}"></script>
    <script src="{{ asset('assets/js/parallax.js') }}"></script>
    <script src="{{ asset('assets/js/wow.js') }}"></script>	
    <script src="{{ asset('assets/js/bsnav.min.js') }}"></script>
	<script src="{{ asset('assets/js/splitting-animation.js') }}"></script>
	<script src="{{ asset('assets/js/splitting.min.js') }}"></script>	
	<script src="{{ asset('assets/js/YTPlayer.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>

	<script>
		$(document).ready(function() {
			$('.pd-lightbox').magnificPopup({
				type: 'image',
				closeOnContentClick: true,
				image: { verticalFit: true }
			});
			$('.pd-gallery-lightbox').magnificPopup({
				delegate: 'a',
				type: 'image',
				gallery: {
					enabled: true,
					navigateByImgClick: true,
					preload: [0, 1]
				},
				image: { verticalFit: true }
			});
		});
	</script>
	
	</body>
</html>
