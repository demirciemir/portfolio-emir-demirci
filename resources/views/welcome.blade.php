<!doctype html>
<html class="no-js" lang="zxx">

<head>	
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>{{ __('Emir Demirci | Web Developer Portfolio') }}</title>
	<meta name="description" content="Emir Demirci — Laravel, React.js ve ASP.NET Core ile çalışan Web Geliştirici. Portfolyo ve iletişim.">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Place favicon.ico in the root directory -->
	<link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/favicon.png') }}">
	
	<!-- ========== Start Stylesheet ========== -->
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
	<!-- ========== End Stylesheet ========== -->
	@vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

 <body class="side-header" data-spy="scroll" data-target=".navbar" data-offset="1">

<!-- Preloader -->
<div class="preloader">
  <div class="lds-ellipsis">
    <div></div>
    <div></div>
    <div></div>
    <div></div>
  </div>
</div>
<!-- Preloader End --> 

<div class="theme_all_wrap" data-magic-cursor=" " data-color="crimson">

<!-- Document Wrapper   
=============================== -->
 <div id="main-wrapper"> 
	<!-- Start header
    ============================================= -->

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
						<li class="nav-item"><a class="nav-link smooth-scroll" href="#home"><i class="icofont-home"></i> {{ __('home') }}</a></li>
						<li class="nav-item"><a class="nav-link smooth-scroll" href="#about"><i class="icofont-contact-add"></i> {{ __('about') }}</a></li>
						<li class="nav-item"><a class="nav-link smooth-scroll" href="#resume"><i class="icofont-graduate-alt"></i> {{ __('my_resume') }}</a></li>
						<li class="nav-item"><a class="nav-link smooth-scroll" href="#service"><i class="icofont-file-document"></i> {{ __('service') }}</a></li>
						<li class="nav-item"><a class="nav-link smooth-scroll" href="#work"><i class="icofont-briefcase-1"></i> {{ __('portfolio') }}</a></li>
						<li class="nav-item"><a class="nav-link smooth-scroll" href="#feed"><i class="icofont-quote-left"></i>{{ __('testimonial') }}</a></li>
						<li class="nav-item"><a class="nav-link contact-trigger" href="javascript:void(0)"><i class="icofont-envelope"></i> {{ __('contact') }}</a></li>
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
	  <!-- Header End --> 
	
	<div class="clearfix"></div>

<div class="main-area-width">	

	<main class="main">
		 
		<!-- Start Hero   
		============================================= -->
		<div id="home" class="hero-section hero-section-bg">
			<div class="line_wrap"> <!-- line animation --> 
				<div class="line_item"></div>
				<div class="line_item"></div>
				<div class="line_item"></div>
				<div class="line_item"></div>
				<div class="line_item"></div>
			 </div> <!-- end line animation --> 						

			<div class="hero-single sidebar-hero-bg d-flex align-items-center justify-content-center text-center">			
				<div class="container">	
					<div class="row justify-content-center">	
						<div class="col-md-10 col-sm-12">	
							<div class="hero-content wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".6s">
								<h1 class="giant-title pt-30 wow fadeInUp" data-wow-duration=".01s" data-wow-delay=".01s">EMİR <span class="colored">DEMİRCİ</span></h1>
								<div class="typed-strings" style="display:none;">
									  <p> <span class="type_color">{{ app()->getLocale() == 'tr' ? 'Full Stack Sistemler İnşa Eder' : 'Builds Full Stack Systems' }}</span></p>
									  <p> <span class="type_color">{{ app()->getLocale() == 'tr' ? 'Dijital Deneyimler Yaratır' : 'Crafts Digital Experiences' }}</span></p>
									  <p> <span class="type_color">{{ app()->getLocale() == 'tr' ? 'Minimalist ve Modern Çözümler' : 'Minimalist & Modern Solutions' }}</span></p>
								</div>
								<p class="text-20 header_type_text text-white mb-4">
									<span class="typed"></span>
								</p>
								<p class="header-intro-text wow fadeInUp mb-5" style="max-width: 650px; margin: 0 auto; font-size: 16px; color: #a9b1d6; line-height: 1.8;" data-wow-duration=".6s" data-wow-delay=".8s">{{ __('hero_intro') }}</p>
								<div class="elegant-scroll-indicator mt-5 wow fadeInUp" data-wow-duration=".6s" data-wow-delay="1s">
									<span class="scroll-text">{{ app()->getLocale() == 'tr' ? 'KEŞFETMEK İÇİN KAYDIR' : 'SCROLL TO EXPLORE' }}</span>
									<div class="scroll-line-container">
										<div class="scroll-line"></div>
									</div>
								</div>
							</div>
						</div>	
					</div>
				</div>					
			</div><!-- single Hero End -->
		</div>
		<!-- End Hero -->
		
		<!-- About us
		============================================= -->
		<div id="about" class="about-area de-padding">
			<div class="line_wrap"> <!-- line animation --> 
				<div class="line_item"></div>
				<div class="line_item"></div>
				<div class="line_item"></div>
				<div class="line_item"></div>
				<div class="line_item"></div>
			 </div> <!-- end line animation --> 			
			<div class="about-wpr mt-20">	<!-- start about -->
				<div class="container pl-20">	<!-- container --> 
					<div class="row align-items-center about-top-row">	<!-- row --> 
						<div class="col-md-4 mb-50 mb-md-0">
							<div class="about-left wow fadeInUp" data-wow-duration=".6s" data-wow-delay=".2s">
								<div class="about-header-img">
									<img src="{{ asset('img/emir/me.png') }}" alt="about me" class="responsive-fluid" />
								</div>
							</div>
						</div>	<!-- about left text end --> 
						<div class="col-md-8">	<!-- col-8 --> 
							<div class="about-right wow fadeInUp" data-wow-duration=".8s" data-wow-delay=".5s">
								<span class="top-title">{{ __('about_me') }}</span>
								<h2 data-splitting class="about-tl-3 gr-2 wow fadeInUp" data-wow-duration=".01s" data-wow-delay=".1s">
									{{ __('web_dev') }}
								</h2>
								<p class="wow fadeInUp" data-wow-duration=".2s" data-wow-delay=".2s">
									{{ __('bio') }}
								</p>
								<div class="elegant-info-grid mt-40">	
                                    <!-- Row 1 -->
									<div class="elegant-info-item">
										<div class="elegant-icon"><i class="fas fa-user-tie"></i></div>
										<div class="elegant-text"><span class="elegant-label">{{ app()->getLocale() == 'tr' ? 'İSİM' : 'NAME' }}</span><span class="elegant-value">Emir Demirci</span></div>
									</div>
									<div class="elegant-info-item">
										<div class="elegant-icon"><i class="fas fa-map-marker-alt"></i></div>
										<div class="elegant-text"><span class="elegant-label">{{ app()->getLocale() == 'tr' ? 'ADRES' : 'ADDRESS' }}</span><span class="elegant-value">Çekmeköy / İstanbul</span></div>
									</div>
                                    
                                    <!-- Row 2 -->
									<div class="elegant-info-item">
										<div class="elegant-icon"><i class="far fa-envelope"></i></div>
										<div class="elegant-text"><span class="elegant-label">{{ app()->getLocale() == 'tr' ? 'E-POSTA' : 'EMAIL' }}</span><span class="elegant-value">emirdemirci1637@gmail.com</span></div>
									</div>
									<div class="elegant-info-item">
										<div class="elegant-icon"><i class="fas fa-phone"></i></div>
										<div class="elegant-text"><span class="elegant-label">{{ app()->getLocale() == 'tr' ? 'TELEFON' : 'PHONE' }}</span><span class="elegant-value">+90 531 565 82 32</span></div>
									</div>

                                    <!-- Vertical Social Column (Strictly on the right) -->
                                    <div class="elegant-social-column">
                                        <a href="https://www.linkedin.com/in/emir-demirci/" target="_blank" class="social-circle" title="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                                        <a href="https://github.com/demirciemir" target="_blank" class="social-circle" title="GitHub"><i class="fab fa-github"></i></a>
                                        <a href="https://www.instagram.com/emirdemircl/" target="_blank" class="social-circle" title="Instagram"><i class="fab fa-instagram"></i></a>
                                    </div>
								</div>
							</div> <!-- end about right --> 								
						</div> <!-- end col-7 -->  
					</div> <!-- end row --> 
					<div class="counter-counter grid-4 mt-5 pt-4"> <!-- start counter --> 
						<div class="fun-fact">
							<span class="fun-icon one"><i class="icofont-calendar"></i></span>
							<div class="fun-desc">
								<p class="timer" data-to="1" data-speed="3000">1</p>
								<span class="medium">{{ __('years_experience') }}</span>
							</div>
						</div>
						<div class="fun-fact fun-active">
							<span class="fun-icon two"><i class="icofont-globe"></i></span>
							<div class="fun-desc">
								<p class="timer" data-to="6" data-speed="3000">6</p>
								<span class="medium">{{ __('completed_projects') }}</span>
							</div>
						</div>
						<div class="fun-fact">
							<span class="fun-icon three"><i class="icofont-bulb-alt"></i></span>
							<div class="fun-desc">
								<p class="timer" data-to="3" data-speed="3000">3</p>
								<span class="medium">{{ __('internship_experience') }}</span>
							</div>
						</div>
						<div class="fun-fact">
							<span class="fun-icon four"><i class="icofont-nerd-smile"></i></span>
							<div class="fun-desc">
								<p class="timer" data-to="3" data-speed="3000">3</p>
								<span class="medium">{{ __('happy_clients') }}</span>
							</div>
						</div>
					</div> <!-- end counter -->
				</div> <!-- end container -->
			</div> <!-- end about wrp --> 			
		</div> <!-- About us -->
		
		<!-- Start Experience
		============================================= -->
		<div id="resume" class="exp-area de-padding">
			<div class="container pl-20">
				<div class="site-title text-center">
					<span class="resume-title">
						{{ __('my_resume') }}
					</span>		
					<h2 data-splitting class="about-tl-3 gr-2 wow fadeInUp" data-wow-duration=".01s" data-wow-delay=".01s"> 
						{{ __('education_experience') }} 
					</h2>		
				</div> <!-- end section title --> 
				<div class="exp-wpr row justify-content-center">
					<div class="col-md-8"><!-- start col-8 -->
						<div class="experience_area">
							
                            <!-- 1. Uni (Eğitim) -->
							<div class="exp-box mt-20 wow fadeInDown" data-wow-duration=".6s" data-wow-delay=".2s">
								<div class="exp-icon four">
									<i class="icofont-graduate-alt"></i>
								</div>
								<div class="exp-content">
									<h4>{{ __('uni_title') }}</h4>
									<p>{{ __('uni_company') }}</p>
									<span class="exp-description pt-10">{{ app()->getLocale() == 'tr' ? 'Yönetim Bilişim Sistemleri (YBS) Lisans Eğitimi' : 'Management Information Systems (MIS) Bachelor Degree' }}</span>
								</div>
							</div>
                            
                            <!-- 2. Özbağ -->
							<div class="exp-box mt-30 wow fadeInUp" data-wow-duration=".6s" data-wow-delay=".4s">
								<div class="exp-icon one">
									<i class="icofont-code"></i>
								</div>
								<div class="exp-content">
									<h4>{{ __('ozbag_title') }}</h4>
									<p>{{ __('ozbag_company') }}</p>
									<span class="exp-description pt-10">{{ __('ozbag_desc') }}</span>
								</div>
							</div>
                            
                            <!-- 3. Ironsan -->
							<div class="exp-box mt-30 wow fadeInDown" data-wow-duration=".6s" data-wow-delay=".6s">
								<div class="exp-icon three">
									<i class="icofont-briefcase-1"></i>
								</div>
								<div class="exp-content">
									<h4>{{ __('ironsan_title') }}</h4>
									<p>{{ __('ironsan_company') }}</p>
									<span class="exp-description pt-10">{{ __('ironsan_desc') }}</span>
								</div>
							</div>
                            
                            <!-- 4. Keleş -->
							<div class="exp-box mt-30 wow fadeInUp" data-wow-duration=".6s" data-wow-delay=".8s">
								<div class="exp-icon two">
									<i class="icofont-ui-browser"></i>
								</div>
								<div class="exp-content">
									<h4>{{ __('keles_title') }}</h4>
									<p>{{ __('keles_company') }}</p>
									<span class="exp-description pt-10">{{ __('keles_desc') }}</span>
								</div>
							</div>
                            
                            <!-- 5. Freelance -->
							<div class="exp-box mt-30 wow fadeInDown" data-wow-duration=".6s" data-wow-delay="1.0s">
								<div class="exp-icon five">
									<i class="icofont-laptop"></i>
								</div>
								<div class="exp-content">
									<h4>{{ __('freelance_title') }}</h4>
									<p>{{ __('freelance_company') }}</p>
									<span class="exp-description pt-10">{{ __('freelance_desc') }}</span>
								</div>
							</div>
                            
						</div>
					</div> <!-- end col-8 -->
				</div> <!-- end exp-wrp row -->
				<div class="row">	<!-- start row --> 
					<div class="col-md-6"> <!-- start col-6 -->
						<div class="progress-left pt-90">
							<div class="skill-section">
								<!-- Progress Bar Start -->
								<div class="progress-box">
									<h5>Laravel / PHP <span class="pull-right">80%</span></h5>
									<div class="progress">
										<div class="progress-bar" role="progressbar" data-width="80"></div>
									</div>
								</div>
								<div class="progress-box">
									<h5>ASP.NET Core / C# <span class="pull-right">75%</span></h5>
									<div class="progress">
										<div class="progress-bar" role="progressbar" data-width="75"></div>
									</div>
								</div>
								<div class="progress-box">
									<h5>React.js <span class="pull-right">70%</span></h5>
									<div class="progress">
										<div class="progress-bar" role="progressbar" data-width="70"></div>
									</div>
								</div>
                                <div class="progress-box">
									<h5>PostgreSQL / MySQL <span class="pull-right">75%</span></h5>
									<div class="progress">
										<div class="progress-bar" role="progressbar" data-width="75"></div>
									</div>
								</div>
								<!-- End Progressbar -->
							</div>
						</div>	
					</div> <!-- end col-6 --> 
					<div class="col-md-6"> <!-- start col-6 -->
						<div class="progress-right pt-90">
							<div class="skill-section">
								<!-- Progress Bar Start -->
								<div class="progress-box">
									<h5>Flutter <span class="pull-right">60%</span></h5>
									<div class="progress">
										<div class="progress-bar" role="progressbar" data-width="60"></div>
									</div>
								</div>
								<div class="progress-box">
									<h5>HTML5 / CSS3 <span class="pull-right">90%</span></h5>
									<div class="progress">
										<div class="progress-bar" role="progressbar" data-width="90"></div>
									</div>
								</div>
								<div class="progress-box">
									<h5>Git & GitHub <span class="pull-right">85%</span></h5>
									<div class="progress">
										<div class="progress-bar" role="progressbar" data-width="85"></div>
									</div>
								</div>
                                <div class="progress-box">
									<h5>Claude / Cursor <span class="pull-right">80%</span></h5>
									<div class="progress">
										<div class="progress-bar" role="progressbar" data-width="80"></div>
									</div>
								</div>
								<!-- End Progressbar -->
							</div>
						</div>							
					</div>	<!-- end col-6  --> 
				</div>	<!-- end row--> 
				<div class="row pt-70"><!-- start row-->
					<div class="col-md-12">
						<div class="download-cv-btn text-center">
							<a href="{{ asset('img/referanslı çift sütun.pdf') }}" class="theme-btn" target="_blank">{{ __('download_cv') }}</a>
						</div>
					</div>
				</div><!-- end row-->
			</div> <!-- end container -->			
		</div>
		<!-- End Experience -->
		
		<!-- Start Services
		============================================= -->		
		<div id="service" class="service-area de-padding">					
			<div class="container pl-20">
				<div class="site-title text-center"> <!-- service section title -->
					<span class="resume-title">{{ __('my_services') }}</span>
					<h2 data-splitting class="about-tl-3 gr-2 wow fadeInUp" data-wow-duration=".01s" data-wow-delay=".01s"> 
						{{ __('offering_services') }} 
					</h2>
				</div>
				<div class="row align-items-stretch"> <!-- start row -->
					<div class="col-md-4 col-sm-6 mb-4">
						<div class="service-box wow fadeInUp d-flex flex-column h-100" data-wow-duration=".5s" data-wow-delay=".3s">
							<div class="service-icon service-one">
								<i class="icofont-ui-browser"></i>
							</div>
							<div class="service-info flex-grow-1">
								<h2>{{ __('service1_title') }}</h2>
								<p style="font-size: 15px; color: #555555; line-height: 1.6; font-weight: 400;">{{ __('service1_desc') }}</p>
							</div>
						</div> <!-- end service one -->					
					</div> <!-- end col-4 -->	
					<div class="col-md-4 col-sm-6 mb-4">
						<div class="service-box wow fadeInDown d-flex flex-column h-100" data-wow-duration=".7s" data-wow-delay=".6s">
							<div class="service-icon service-two">
								<i class="icofont-settings"></i>
							</div>
							<div class="service-info flex-grow-1">
								<h2>{{ __('service2_title') }}</h2>
								<p style="font-size: 15px; color: #555555; line-height: 1.6; font-weight: 400;">{{ __('service2_desc') }}</p>
							</div>
						</div> <!-- end service two -->					
					</div> <!-- end col-4 -->	
					<div class="col-md-4 col-sm-6 mb-4">
						<div class="service-box wow fadeInUp d-flex flex-column h-100" data-wow-duration=".9s" data-wow-delay=".8s">
							<div class="service-icon service-three">
								<i class="icofont-cloud-upload"></i>
							</div>
							<div class="service-info flex-grow-1">
								<h2>{{ __('service3_title') }}</h2>
								<p style="font-size: 15px; color: #555555; line-height: 1.6; font-weight: 400;">{{ __('service3_desc') }}</p>
							</div>
						</div> <!-- end service three -->					
					</div> <!-- end col-4 -->
					<div class="col-md-4 col-sm-6 mb-4">
						<div class="service-box wow fadeInUp d-flex flex-column h-100" data-wow-duration=".5s" data-wow-delay=".3s">
							<div class="service-icon service-one">
								<i class="icofont-code"></i>
							</div>
							<div class="service-info flex-grow-1">
								<h2>{{ __('service4_title') }}</h2>
								<p style="font-size: 15px; color: #555555; line-height: 1.6; font-weight: 400;">{{ __('service4_desc') }}</p>
							</div>
						</div> <!-- end service four -->					
					</div> <!-- end col-4 -->
					<div class="col-md-4 col-sm-6 mb-4">
						<div class="service-box wow fadeInDown d-flex flex-column h-100" data-wow-duration=".7s" data-wow-delay=".6s">
							<div class="service-icon service-two">
								<i class="icofont-mobile-phone"></i>
							</div>
							<div class="service-info flex-grow-1">
								<h2>{{ __('service5_title') }}</h2>
								<p style="font-size: 15px; color: #555555; line-height: 1.6; font-weight: 400;">{{ __('service5_desc') }}</p>
							</div>
						</div> <!-- end service five -->					
					</div><!-- end col-4 -->
					<div class="col-md-4 col-sm-6 mb-4">
						<div class="service-box wow fadeInUp d-flex flex-column h-100" data-wow-duration=".9s" data-wow-delay=".8s">
							<div class="service-icon service-three">
								<i class="icofont-file-document"></i>
							</div>
							<div class="service-info flex-grow-1">
								<h2>{{ __('service6_title') }}</h2>
								<p style="font-size: 15px; color: #555555; line-height: 1.6; font-weight: 400;">{{ __('service6_desc') }}</p>
							</div>
						</div> <!-- end service six -->					
					</div><!-- end col-4 -->
				</div> <!-- end row -->
			</div> <!-- end container -->				
		</div> <!-- End Services -->
		
		<!-- Start Terminal Area -->
		<div class="terminal-area pt-50 pb-50" style="background-color: var(--black-color);">		
			<div class="container pl-20">
                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <div class="terminal-window wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".2s">
                            <div class="terminal-header">
                                <div class="terminal-buttons">
                                    <span class="close-btn"></span>
                                    <span class="min-btn"></span>
                                    <span class="max-btn"></span>
                                </div>
                                <div class="terminal-title">emir@portfolio:~</div>
                            </div>
                            <div class="terminal-body">
                                <p><span class="prompt">emir@portfolio:~$</span> <span class="typed-terminal"></span></p>
                                <div class="typed-terminal-strings" style="display: none;">
                                    <p>whoami<br><span class="term-output">{{ __('term_whoami') }}</span></p>
                                    <p>skills<br><span class="term-output">{{ __('term_skills') }}</span></p>
                                    <p>status<br><span class="term-output">{{ __('term_status') }}</span></p>
                                    <p>location<br><span class="term-output">{{ __('term_location') }}</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
			</div>
		</div>
		<!-- End Terminal Area-->
		

		
<!-- Start Project Area
============================================= -->
<section id="work" class="portfolio_bg de-padding">
	<div class="line_wrap"> <!-- line animation --> 
		<div class="line_item"></div>
		<div class="line_item"></div>
		<div class="line_item"></div>
		<div class="line_item"></div>
		<div class="line_item"></div>
	 </div> <!-- end line animation -->
	<div class="container"> <!-- start container -->	
		<div class="row"> <!-- row -->
			<div class="col-md-5 pl-20"> <!-- col-5 -->	
				<div class="site-title work_section_title">
					<span class="top-title wow fadeInUp" data-wow-duration=".4s" data-wow-delay=".3s">
						{{ __('my_portfolio') }}
					</span>
					<h2 data-splitting class="about-tl-3 gr-2 wow fadeInUp" data-wow-duration=".01s" data-wow-delay=".01s">
						{{ __('awesome_works') }}
					</h2>
				</div>	
			</div><!-- end col-5 -->
			<div class="col-md-7"><!-- start col-7 -->
				<ul class="col list-unstyled list-inline mb-0 text-uppercase work_menu mt-50" id="menu-filter">
					<li class="list-inline-item"><a class="active" data-filter="*">{{ __('all') }}</a></li>
					<li class="list-inline-item"><a class="" data-filter=".web">{{ __('web') }}</a></li>
					<li class="list-inline-item"><a class="" data-filter=".mobile">{{ __('mobile') }}</a></li>
					<li class="list-inline-item"><a class="" data-filter=".corporate">{{ __('corporate') }}</a></li>
					<li class="list-inline-item"><a class="" data-filter=".competition">{{ __('competitions') }}</a></li>
				</ul>			
			</div><!-- end col-7 -->
		</div><!-- end row -->
		<div class="row row-full-width">
			<div class="col-md-12"> <!-- start col-9 -->
				<div class="container portfolio-container"> <!-- container -->
					<div class="row work-filter">
						<div class="col-md-4 work_item web">
							<a href="{{ route('portfolio.show', 'car-rental') }}">
								<div class="work_box">
									<div class="work_img">
										<img src="{{ asset('img/portfolio/1.jpg') }}" class="img-fluid mx-auto d-block rounded" alt="work-img">
									</div>
									<div class="work_detail">
										<p class="mb-2">Web</p>
										<h4 class="mb-0">{{ __('car_rental') }}</h4>
									</div>
								</div>
							</a>
						</div> <!-- end col-4 -->
						<div class="col-md-4 work_item mobile">
							<a href="{{ route('portfolio.show', 'smoke-quit') }}">
								<div class="work_box">
									<div class="work_img">
										<img src="{{ asset('img/portfolio/2.jpg') }}" class="img-fluid mx-auto d-block rounded" alt="work-img">
									</div>
									<div class="work_detail">
										<p class="mb-2">Mobile</p>
										<h4 class="mb-0">{{ __('smoke_quit') }}</h4>
									</div>
								</div>
							</a>
						</div> <!-- end col-4 -->
						<div class="col-md-4 work_item web corporate">
							<a href="{{ route('portfolio.show', 'ozbag-project') }}">
								<div class="work_box">
									<div class="work_img">
										<img src="{{ asset('img/portfolio/3.jpg') }}" class="img-fluid mx-auto d-block rounded" alt="work-img">
									</div>
									<div class="work_detail">
										<p class="mb-2">Web / Corporate</p>
										<h4 class="mb-0">{{ __('ozbag_project') }}</h4>
									</div>
								</div>
							</a>
						</div> <!-- end col-4 -->
						<div class="col-md-4 work_item web corporate">
							<a href="{{ route('portfolio.show', 'keles-project') }}">
								<div class="work_box">
									<div class="work_img">
										<img src="{{ asset('img/portfolio/4.jpg') }}" class="img-fluid mx-auto d-block rounded" alt="work-img">
									</div>
									<div class="work_detail">
										<p class="mb-2">Web / Corporate</p>
										<h4 class="mb-0">{{ __('keles_project') }}</h4>
									</div>
								</div>
							</a>
						</div> <!-- end col-4 -->
						<div class="col-md-4 work_item web corporate">
							<a href="{{ route('portfolio.show', 'casanuez') }}">
								<div class="work_box">
									<div class="work_img">
										<img src="{{ asset('img/portfolio/5.jpg') }}" class="img-fluid mx-auto d-block rounded" alt="work-img">
									</div>
									<div class="work_detail">
										<p class="mb-2">Web / Corporate</p>
										<h4 class="mb-0">{{ __('casanuez') }}</h4>
									</div>
								</div>
							</a>
						</div> <!-- end col-4 -->
						<div class="col-md-4 work_item competition">
							<a href="{{ route('portfolio.show', 'koza-bazaar') }}">
								<div class="work_box">
									<div class="work_img">
										<img src="{{ asset('img/portfolio/6.jpg') }}" class="img-fluid mx-auto d-block rounded" alt="work-img">
									</div>
									<div class="work_detail">
										<p class="mb-2">{{ __('competitions') }}</p>
										<h4 class="mb-0">{{ __('koza_bazaar') }}</h4>
									</div>
								</div>
							</a>
						</div> <!-- end col-4 -->
					</div>
				</div> <!-- end container -->
			</div><!-- start col-9 -->
		</div><!-- end row -->	
	</div><!-- end container -->
</section>	<!-- End Project Area -->
		
	<!-- Start Feedback
	============================================= -->
	<div id="feed" class="feedback-area de-padding">
		<div class="line_wrap"> <!-- line animation --> 
			<div class="line_item"></div>
			<div class="line_item"></div>
			<div class="line_item"></div>
			<div class="line_item"></div>
			<div class="line_item"></div>
		 </div> <!-- end line animation --> 					
		<div class="container pl-20"> <!-- start container -->
			<div class="site-title text-center">
				<span class="resume-title text-center wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".5s">
					{{ __('testimonial') }}
				</span>
				<h2 data-splitting class="about-tl-3 gr-2 wow fadeInUp" data-wow-duration=".01s" data-wow-delay=".01s">
					{{ __('people_saying') }} 
				</h2>
			</div> <!-- end section title -->
			<div class="feedback-wpr feed-sldr"> <!-- start feedback-wpr -->
				<div class="feedback-box text-center pt-50 pb-50">
					<div class="feedback-bio">
						<h4 class="fz-24 l-h-1 mb-3" style="color: var(--heading-color); font-weight: 700;">Prof. Dr. Melih Engin</h4>
						<span class="fz-18 l-h-1 d-block mb-4" style="color: var(--yollow-color); font-weight: 600;">Bursa Uludağ Üniversitesi</span>
						<span class="fz-16 l-h-1 d-block mt-3" style="color: #444;"><i class="icofont-envelope mr-2"></i> melihengin@uludag.edu.tr</span>
						<span class="fz-16 l-h-1 d-block mt-2" style="color: #444;"><i class="icofont-phone mr-2"></i> 0505 238 79 16</span>
					</div>
				</div> <!-- end single feedback -->
				<div class="feedback-box text-center pt-50 pb-50">
					<div class="feedback-bio">
						<h4 class="fz-24 l-h-1 mb-3" style="color: var(--heading-color); font-weight: 700;">Doç. Dr. Erdal Özdoğan</h4>
						<span class="fz-18 l-h-1 d-block mb-4" style="color: var(--yollow-color); font-weight: 600;">Bursa Uludağ Üniversitesi</span>
						<span class="fz-16 l-h-1 d-block mt-3" style="color: #444;"><i class="icofont-envelope mr-2"></i> erdalozdogan@uludag.edu.tr</span>
						<span class="fz-16 l-h-1 d-block mt-2" style="color: #444;"><i class="icofont-phone mr-2"></i> 0539 433 72 90</span>
					</div>
				</div> <!-- end single feedback -->
				<div class="feedback-box text-center pt-50 pb-50">
					<div class="feedback-bio">
						<h4 class="fz-24 l-h-1 mb-3" style="color: var(--heading-color); font-weight: 700;">Recep Pazarlı</h4>
						<span class="fz-18 l-h-1 d-block mb-4" style="color: var(--yollow-color); font-weight: 600;">Takım Lideri, Özbağ Kuyumculuk & Rafineri</span>
						<span class="fz-16 l-h-1 d-block mt-3" style="color: #444;"><i class="icofont-phone mr-2"></i> 0545 795 59 84</span>
					</div>
				</div> <!-- end single feedback -->
				<div class="feedback-box text-center pt-50 pb-50">
					<div class="feedback-bio">
						<h4 class="fz-24 l-h-1 mb-3" style="color: var(--heading-color); font-weight: 700;">İlkay Gümüş</h4>
						<span class="fz-18 l-h-1 d-block mb-4" style="color: var(--yollow-color); font-weight: 600;">Takım Lideri, İronsan Metal</span>
						<span class="fz-16 l-h-1 d-block mt-3" style="color: #444;"><i class="icofont-phone mr-2"></i> 0538 749 07 84</span>
					</div>
				</div> <!-- end single feedback -->
			</div> <!-- end feedback-wpr -->
		</div> <!-- end container -->
	</div>
	<!-- End Feedback -->
		

	
	<div class="clearfix"></div>
	
	<!-- Start Footer
	============================================= -->
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
	<!-- End Footer-->	
	</main>		
</div>	
	<!-- Start Scroll top
	============================================= -->
	<a href="#home" id="scrtop" class="smooth-scroll"><i class="icofont-rounded-up"></i></a>
	<!-- End Scroll top-->
	
<!-- CURSOR -->
		<div class="mouse-cursor cursor-outer"></div>
		<div class="mouse-cursor cursor-inner"></div>
		<!-- /CURSOR -->
		
		<!-- Contact Drawer Overlay -->
		<div id="contact-drawer-overlay" class="contact-drawer-overlay"></div>

		<!-- Contact Drawer -->
		<div id="contact-drawer" class="contact-drawer">
			<div class="drawer-header">
				<h3 class="drawer-title">{{ app()->getLocale() == 'tr' ? 'İletişim' : 'Contact Me' }}</h3>
				<button id="contact-drawer-close" class="drawer-close-btn" aria-label="Close">
					<i class="icofont-close-line"></i>
				</button>
			</div>
			
			<div class="drawer-body">
				<p class="drawer-subtitle">{{ app()->getLocale() == 'tr' ? 'Benimle dilediğiniz platform üzerinden iletişime geçebilirsiniz. En kısa sürede dönüş sağlayacağım.' : 'Feel free to reach out to me on any of the platforms below. I will get back to you as soon as possible.' }}</p>
				
				<!-- Contact Cards -->
				<div class="drawer-contact-cards">
					<!-- Email Card -->
					<a href="mailto:emirdemirci1637@gmail.com" class="drawer-card email-card">
						<div class="card-icon"><i class="far fa-envelope"></i></div>
						<div class="card-details">
							<span class="card-label">{{ app()->getLocale() == 'tr' ? 'E-POSTA' : 'EMAIL' }}</span>
							<span class="card-value">emirdemirci1637@gmail.com</span>
						</div>
						<div class="card-action"><i class="fas fa-chevron-right"></i></div>
					</a>
					
					<!-- Phone Card -->
					<a href="tel:+905315658232" class="drawer-card phone-card">
						<div class="card-icon"><i class="fas fa-phone-alt"></i></div>
						<div class="card-details">
							<span class="card-label">{{ app()->getLocale() == 'tr' ? 'TELEFON' : 'PHONE' }}</span>
							<span class="card-value">+90 531 565 82 32</span>
						</div>
						<div class="card-action"><i class="fas fa-chevron-right"></i></div>
					</a>
					
					<!-- Location Card -->
					<div class="drawer-card location-card static-card">
						<div class="card-icon"><i class="fas fa-map-marker-alt"></i></div>
						<div class="card-details">
							<span class="card-label">{{ app()->getLocale() == 'tr' ? 'ADRES' : 'LOCATION' }}</span>
							<span class="card-value">Çekmeköy / İstanbul</span>
						</div>
					</div>
				</div>
				
				<div class="drawer-divider"></div>
				
				<h4 class="drawer-section-title">{{ app()->getLocale() == 'tr' ? 'SOSYAL MEDYA' : 'SOCIAL MEDIA' }}</h4>
				
				<div class="drawer-social-links">
					<!-- LinkedIn -->
					<a href="https://www.linkedin.com/in/emir-demirci/" target="_blank" class="drawer-social-item linkedin">
						<div class="social-icon-wrapper"><i class="fab fa-linkedin-in"></i></div>
						<span class="social-name">LinkedIn</span>
						<span class="social-username">/emir-demirci</span>
						<i class="fas fa-external-link-alt arrow"></i>
					</a>
					
					<!-- GitHub -->
					<a href="https://github.com/demirciemir" target="_blank" class="drawer-social-item github">
						<div class="social-icon-wrapper"><i class="fab fa-github"></i></div>
						<span class="social-name">GitHub</span>
						<span class="social-username">/demirciemir</span>
						<i class="fas fa-external-link-alt arrow"></i>
					</a>
					
					<!-- Instagram -->
					<a href="https://www.instagram.com/emirdemircl/" target="_blank" class="drawer-social-item instagram">
						<div class="social-icon-wrapper"><i class="fab fa-instagram"></i></div>
						<span class="social-name">Instagram</span>
						<span class="social-username">@emirdemircl</span>
						<i class="fas fa-external-link-alt arrow"></i>
					</a>
				</div>
			</div>
		</div>
	</div>	
</div>	<!-- Mouse Cursor End --> 	
  
	<!-- jQuery Frameworks 
    ============================================= -->
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
	
	<!-- Contact Drawer Script -->
	<script>
		document.addEventListener('DOMContentLoaded', function() {
			const contactDrawer = document.getElementById('contact-drawer');
			const contactOverlay = document.getElementById('contact-drawer-overlay');
			const contactClose = document.getElementById('contact-drawer-close');

			function openDrawer() {
				contactDrawer.classList.add('active');
				contactOverlay.classList.add('active');
				document.body.style.overflow = 'hidden'; // Prevent background scrolling
			}

			function closeDrawer() {
				contactDrawer.classList.remove('active');
				contactOverlay.classList.remove('active');
				document.body.style.overflow = '';
			}

			// Event delegation to capture clicks on mobile cloned elements
			document.addEventListener('click', function(e) {
				const trigger = e.target.closest('.contact-trigger');
				if (trigger) {
					e.preventDefault();
					openDrawer();
				}
			});

			if (contactClose) {
				contactClose.addEventListener('click', closeDrawer);
			}

			if (contactOverlay) {
				contactOverlay.addEventListener('click', closeDrawer);
			}
			
			// Press ESC to close
			window.addEventListener('keydown', function(e) {
				if (e.key === 'Escape') {
					closeDrawer();
				}
			});
		});

		// Clone sidebar brand into mobile menu
		$(function() {
			setTimeout(function() {
				var brandArea = $('.sidebar-brand-area');
				var mobileNav = $('.bsnav-mobile .navbar');
				if (brandArea.length && mobileNav.length) {
					var clone = brandArea.clone();
					clone.addClass('mobile-brand-area');
					clone.css('display', 'block', 'important');
					clone.prependTo(mobileNav);
				}
			}, 100);
		});
	</script>
	</body>
</html>
