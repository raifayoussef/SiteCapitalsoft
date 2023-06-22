<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Home One CapitalSoft</title>
	<!-- google font -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link
		href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&display=swap"
		rel="stylesheet">
	<!-- favicons Icons -->
	<link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicons/apple-touch-icon.png" />
	<link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicons/CapitalSoftLogo 32x32.png" />
	<link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicons/CapitalSoftLogo 32x32.png" />
	<link rel="manifest" href="assets/images/favicons/site.webmanifest" />
	<!-- plugins css -->
	<link rel="stylesheet" href="assets/vendors/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/vendors/fontawesome/css/all.min.css">
	<link rel="stylesheet" href="assets/vendors/jarallax/jarallax.css">
	<link rel="stylesheet" href="assets/vendors/animate/animate.min.css">
	<link rel="stylesheet" href="assets/vendors/owl-carousel/assets/owl.carousel.min.css">
	<link rel="stylesheet" href="assets/vendors/owl-carousel/assets/owl.theme.default.min.css">
	<link rel="stylesheet" href="assets/vendors/cretech-icons/style.css">
	<link rel="stylesheet" href="assets/vendors/youtube-popup/youtube-popup.css">
	<!-- templates css -->
	<link rel="stylesheet" href="assets/css/cretech.css">
</head>

<body class="custom-cursor">

	<div class="custom-cursor__cursor"></div>
	<div class="custom-cursor__cursor-two"></div>

	<div class="preloader">
		<div class="preloader__circle"></div>
	</div>

	<div class="page-wrapper">
    <?php
        require"inc/topbar.php"; 
    ;?>
		<nav class="main-menu sticky-header">
			<div class="container-fluid">
				<div class="main-menu__logo">
					<a href="index.html">
						<img src="assets/images/Logo/CapitalSoftLogo.png" width="98" height="auto" alt="Cretech">
						<!-- <img src="assets/images/Logo/CapitalSoftLogo.png" width="98" height="33" alt="Cretech"> -->
					</a>
				</div><!-- /.main-menu__logo -->

				<ul class="main-menu__list">
					<li class="menu-item-has-children">
						<a href="index.php">Accueil</a>
					</li>
					<li class="menu-item-has-children">
						<a href="about/">À propos</a>
					</li>
					<li class="menu-item-has-children">
						<a href="services-1.html">Services</a>
						<ul>
							<li><a href="projects.html">Études et analyses</a></li>
							<li><a href="project-details.html">Développement sur mesure</a></li>
							<li><a href="project-details.html">Intégration de solutions </a></li>
							<li><a href="project-details.html">Formation et support</a></li>
						</ul>
					</li>
					<li class="menu-item-has-children">
						<a href="projects.html">Solutions</a>
						<ul>
							<li><a href="projects.html">Solution 1</a></li>
							<li><a href="project-details.html">Solution 2</a></li>
							<li><a href="project-details.html">Solution 3</a></li>
						</ul>
					</li>
					<li class="menu-item-has-children">
						<a href="blog.html">Carriére</a>
					</li>
				</ul><!-- /.main-menu__list -->

				<div class="main-menu__right">
					<a href="#" class="mobile-nav__toggler">
						<span></span>
						<span></span>
						<span></span>
					</a>
					<a href="#" class="search-toggler">
						<i class="icon-magnifying-glass"></i>
					</a><!-- /.search-toggler -->
					<a href="tel:+9288009860" class="main-menu__cta">
						<i class="fa fa-phone-alt"></i>
						<span class="main-menu__cta__text">
							<b>+212 5 22 22 39 99</b>
							Appelez à tout moment
						</span><!-- /.main-menu__cta__text -->
					</a><!-- /.main-menu__cta -->
				</div><!-- /.main-menu__right -->

			</div><!-- /.container-fluid -->
		</nav><!-- /.main-menu -->


		<div class="slider-one">
			<div class="slider-one__carousel owl-carousel owl-theme thm-owl__carousel"
				data-owl-options='{"loop": true, "items": 1, "navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"], "margin": 0, "dots": true, "nav": true, "animateOut": "slideOutDown", "animateIn": "fadeIn", "active": true, "smartSpeed": 1000, "autoplay": true, "autoplayTimeout": 7000, "autoplayHoverPause": false}'>
				<div class="item slider-one__slide-1">
					<div class="slider-one__bg" style="background-image: url(assets/images/sliders/SLIDER\ \(1\).jpg);">
					</div><!-- /.slider-one__bg -->
					<div class="slider-one__line"></div><!-- /.slider-one__line -->
					<div class="slider-one__shape-1"></div><!-- /.slider-one__shape-1 -->
					<div class="slider-one__shape-2"></div><!-- /.slider-one__shape-2 -->
					<div class="slider-one__shape-3"></div><!-- /.slider-one__shape-3 -->
					<div class="container">
						<div class="slider-one__content ">
							<div class="slider-one__floated lettering-text">CapitalSoft</div>
							<!-- /.slider-one__floated -->
							<p class="slider-one__text">Bienvenue sur CapitalSoft</p><!-- /.slider-one__text -->
							<div class="slider-one__title-wrapper">
								<h2 class="slider-one__title">La performance au  <br>
									service de l’entreprise</h2>
									<!-- /.slider-one__title -->
							</div><!-- /.slider-one__title-wrapper -->
							<div class="slider-one__btns">
								<a href="about.html" class="thm-btn slider-one__btn"><span>Voir plus</span></a>
								<!-- /.thm-btn slider-one__btn -->
							</div><!-- /.slider-one__btns -->
						</div><!-- /.slider-one__content -->
					</div><!-- /.container -->
				</div><!-- /.item -->
				<div class="item slider-one__slide-2">
					<div class="slider-one__bg" style="background-image: url(assets/images/sliders/SLIDER\ \(2\).jpg);">
					</div><!-- /.slider-one__bg -->
					<div class="slider-one__line"></div><!-- /.slider-one__line -->
					<div class="slider-one__shape-1"></div><!-- /.slider-one__shape-1 -->
					<div class="slider-one__shape-2"></div><!-- /.slider-one__shape-2 -->
					<div class="slider-one__shape-3"></div><!-- /.slider-one__shape-3 -->
					<div class="container">
						<div class="slider-one__content ">
							<div class="slider-one__floated lettering-text">CapitalSoft</div>
							<!-- /.slider-one__floated -->
							<p class="slider-one__text">Bienvenue sur CapitalSoft</p><!-- /.slider-one__text -->
							<div class="slider-one__title-wrapper">
								<h2 class="slider-one__title">La performance au  <br>
									service de l’entreprise</h2><!-- /.slider-one__title -->
							</div><!-- /.slider-one__title-wrapper -->
							<div class="slider-one__btns">
								<a href="about.html" class="thm-btn slider-one__btn"><span>Voir plus</span></a>
								<!-- /.thm-btn slider-one__btn -->
							</div><!-- /.slider-one__btns -->
						</div><!-- /.slider-one__content -->
					</div><!-- /.container -->
				</div><!-- /.item -->
			</div><!-- /.slider-one__carousel -->
		</div><!-- /.slider-one -->
		<!-- Savoir faire -->
		<section class="section-padding--bottom section-padding--top about-five">
			<div class="container">
				<div class="row gutter-y-60">
					<div class="col-lg-6">
						<div class="about-five__images">
							<div class="about-five__images__shape"></div><!-- /.about-five__images__shape -->
							<img src="assets/images/about/about.jpg" class="wow fadeInUp"
								data-wow-duration="1500ms" alt="">
							<img src="assets/images/about/about2.jpg" alt="">
							<div class="about-five__video">
								<a href="https://www.youtube.com/watch?v=rzfmZC3kg3M" class="video-popup">
									<i class="fa fa-play"></i>
								</a>
							</div><!-- /.about-five__video -->
							<div class="about-five__images__caption count-box wow fadeInUp" data-wow-duration="1500ms">
								<span class="count-text" data-stop="32" data-speed="2500">00</span>
								Years <br>
								Experience
							</div><!-- /.about-five__images__caption -->
						</div><!-- /.about-five__images -->
					</div><!-- /.col-lg-6 -->
					<div class="col-lg-6">
						<div class="about-five__content">
							<div class="section-title ">
								<p class="section-title__text">Savoir-faire</p>
								<!-- .section-title__text -->
								<h2 class="section-title__title"></h2>
								<!-- /.section-title__title -->
							</div><!-- /.section-title -->
							<div class="about-five__text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
								Voluptatem distinctio ad unde repudiandae. A,
								 quis accusantium perferendis dolores neque, ea animi debitis pariatur dolorum libero asperiores velit voluptatibus, amet nesciunt.</div>
							<!-- /.about-five__text -->
							<ul class="about-five__box">
								<li class="about-five__box__item gray-bg">
									<i class="about-five__box__icon icon-consulting"></i>
									<div class="about-five__box__content">
										<h3 class="about-five__box__title"><a href="service-it-consultent.html">Consultant en informatique</a></h3>
										<p class="about-five__box__text">Des solutions plus intelligentes</p>
										<!-- /.about-five__box__text -->
									</div><!-- /.about-five__box__content -->
								</li>
								<li class="about-five__box__item gray-bg">
									<i class="about-five__box__icon icon-chip"></i>
									<div class="about-five__box__content">
										<h3 class="about-five__box__title"><a href="team.html">Spécialiste en informatique</a></h3>
										<p class="about-five__box__text">Solutions plus rapides</p>
										<!-- /.about-five__box__text -->
									</div><!-- /.about-five__box__content -->
								</li>
							</ul><!-- /.about-five__box -->
						
						</div><!-- /.about-five__content -->
					</div><!-- /.col-lg-6 -->
				</div><!-- /.row -->
			</div><!-- /.container -->
		</section>
		<!--END Savoir faire -->
		<!-- NOS ENGAGEMENTS -->
		<section class="section-padding--top section-padding--bottom service-three black-bg"
			style="background-image: url(assets/images/background/service-1-bg-1.png);">
			<div class="container">
				<div class="service-three__block">
					<div class="row">
						<div class="col-lg-12">
							<div class="section-title">
								<p class="section-title__text">Nos engagements </p><!-- /.section-title__text -->
								<h6 class="section-title__title section-title__title--light">Nos engagements se concrétisent chaque jour par l’ensemble des actions que nous réalisons avec nos partenaires, nos clients, nos collaborateurs, …</h6>
									<!-- /.section-title__title -->
							</div><!-- /.section-title -->
						</div><!-- /.col-lg-7 -->
						<!-- /.col-lg-5 -->
					</div><!-- /.row -->
				</div><!-- /.service-three__block -->
				<ul class="service-three__list" style="display: flex;justify-content: center;flex-wrap: wrap;">
					<li class="service-three__list__item wow fadeInUp" data-wow-duration="1500ms" 
						data-wow-delay="000ms">
						<i class="fa-solid fa-user-tie service-three__list__icon"></i>
						<h3 class="service-three__list__title"><a href="#">Le professionnalisme
						</a></h3>
					</li>
					<li class="service-three__list__item wow fadeInUp" data-wow-duration="1500ms"
						data-wow-delay="100ms">
						<i class="fa-solid fa-lock service-three__list__icon"></i>
						<h3 class="service-three__list__title"><a href="#">La confidentialité
						</a></h3>
					</li>
					<li class="service-three__list__item wow fadeInUp" data-wow-duration="1500ms"
						data-wow-delay="200ms">
						<i class="fa-solid fa-chart-line service-three__list__icon"></i>
						<h3 class="service-three__list__title"><a href="#">La réactivité
						</a></h3>
					</li>
					<li class="service-three__list__item wow fadeInUp" data-wow-duration="1500ms"
						data-wow-delay="300ms">
						<i class="fa-solid fa-ear-listen service-three__list__icon"></i>
						<h3 class="service-three__list__title"><a href="#">L'écoute
						</a></h3>
					</li>
					<li class="service-three__list__item wow fadeInUp" data-wow-duration="1500ms"
						data-wow-delay="400ms">
						<i class="fa-regular fa-handshake service-three__list__icon"></i>
						<h3 class="service-three__list__title"><a href="#">Le conseil et l'expertise
						</a></h3>
					</li>
				</ul><!-- /.service-three__list -->
			</div>
			<!-- /.container -->
		</section>
		<!-- END NOS ENGAGEMENTS -->
		<!-- Équipe et collaborateurs -->
		<section class=" section-padding--top about-three about-three--home-one">
			<div class="about-three__shape wow fadeInRight" data-wow-duration="1500ms"
				style="background-image: url(assets/images/shapes/about-three-s-1.png);z-index:-9">
			</div><!-- /.about-three__shape -->
			<div class="container">
				<div class="row gutter-y-60">
					<div class="col-lg-6">
						<div class="about-three__image">
							<img src="assets/images/resources/about-three-1-1.png" class="wow fadeInUp"
								data-wow-duration="1500ms" alt="">
						</div><!-- /.about-three__image -->
					</div><!-- /.col-lg-6 -->
					<div class="col-lg-6">
						<div class="about-three__content">
							<div class="section-title ">
								<p class="section-title__text">Équipe et collaborateurs</p><!-- /.section-title__text -->
								<h2 class="section-title__title">Lorem ipsum dolor sit amet.</h2><!-- /.section-title__title -->
							</div><!-- /.section-title -->
							<div class="about-three__text">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</div><!-- /.about-three__text -->
							<ul class="about-three__list">
								<li class="about-three__list__item">
									<div class="about-three__list__icon">
										<i class="icon-cloud"></i>
									</div><!-- /.about-three__list__icon -->
									<div class="about-three__list__content">
										<h3 class="about-three__list__title"><a href="service-cyber-security.html">Cloud
												Based Services</a></h3><!-- /.about-three__list__title -->
										<p class="about-three__list__text">Services address a range of simply free text
											application and infrastructure needs.</p><!-- /.about-three__list__text -->
									</div><!-- /.about-three__list__content -->
								</li>
								<li class="about-three__list__item">
									<div class="about-three__list__icon">
										<i class="icon-group"></i>
									</div><!-- /.about-three__list__icon -->
									<div class="about-three__list__content">
										<h3 class="about-three__list__title"><a href="team.html">Expert Team Members</a>
										</h3><!-- /.about-three__list__title -->
										<p class="about-three__list__text">Services address a range of simply free text
											application and infrastructure needs.</p><!-- /.about-three__list__text -->
									</div><!-- /.about-three__list__content -->
								</li>
							</ul><!-- /.about-three__list -->
						</div><!-- /.about-three__content -->
					</div><!-- /.col-lg-6 -->

				</div><!-- /.row -->
			</div><!-- /.container -->
		</section>
		<!-- END Équipe et collaborateurs -->

		<!-- Chiffres clés -->
		<br>
		<br>
		<section class=" about-six">
			<div class="container">
				<div class="row gutter-y-60">
					<div class="col-lg-6">
						<div class="about-six__content">
							<div class="section-title">
								<p class="section-title__text">Chiffres clés</p><!-- /.section-title__text -->
								<h2 class="section-title__title">Lorem ipsum dolor sit amet.
									Infrastructure</h2><!-- /.section-title__title -->
							</div><!-- /.section-title -->
							<div class="about-six__text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempore, quas praesentium est, doloribus officia nostrum alias, non placeat rem voluptatem excepturi harum magnam! Laudantium eum unde odio et similique exercitationem.</div><!-- /.about-six__text -->
							<ul class="about-six__list">
								<li class="about-six__list__item">
									<i class="far fa-check-circle about-six__list__icon"></i>
									<h3 class="about-six__list__title count-box"><span class="count-text"
											data-stop="769" data-speed="1500">00</span><!-- /.count-text -->
									</h3>
									<div class="about-six__list__text">Satisfied Clients</div>
									<!-- /.about-six__list__text -->
								</li><!-- /.about-six__list__item -->
								<li class="about-six__list__item">
									<i class="far fa-check-circle about-six__list__icon"></i>
									<h3 class="about-six__list__title count-box"><span class="count-text"
											data-stop="825" data-speed="1500">00</span><!-- /.count-text -->
									</h3>
									<div class="about-six__list__text">Projects Relased</div>
									<!-- /.about-six__list__text -->
								</li><!-- /.about-six__list__item -->
							</ul><!-- /.about-six__list -->
							<div class="about-six__btns">
								<a href="about.html" class="thm-btn"><span>learn more</span></a><!-- /.thm-btn -->
								<a href="services-1.html" class="about-six__link">
									How it Work
									<i class="fa fa-angle-double-right"></i>
								</a><!-- /.about-six__link -->
							</div><!-- /.about-six__btns -->
						</div><!-- /.about-six__content -->
					</div><!-- /.col-lg-6 -->
					<div class="col-lg-6">
						<div class="about-six__images wow fadeInUp" data-wow-duration="1500ms">
							<img src="assets/images/resources/about-six-1-1.jpg" alt="">
							<img src="assets/images/resources/about-six-1-2.jpg" alt="">
						</div><!-- /.about-six__images -->
					</div><!-- /.col-lg-6 -->
				</div><!-- /.row -->
			</div><!-- /.container -->
		</section>
		<!-- END Chiffres clés -->
		<section class="section-padding--top section-padding--bottom">
			<div class="container">
				<div class="section-title text-center">
					<p class="section-title__text">SERVICES POPULAIRES</p><!-- /.section-title__text -->
					<h2 class="section-title__title">Nous offrons le meilleur à nos clients<br>
						Services de solutions informatiques
						</h2><!-- /.section-title__title -->
				</div><!-- /.section-title -->
				<div class="row gutter-y-30">
					<div class="col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-duration="1500ms"
						data-wow-delay="200ms" style="height: 300PX;">
						<div class="blog-card-one">
							<div class="blog-card-one__image">
								<img src="assets/images/blog/blog-1-3.jpg" alt="">
								<a href="blog-details.html"></a>
							</div><!-- /.blog-card-one__image -->
							<div class="blog-card-one__content">
								
								<h3 class="blog-card-one__title"><a href="blog-details.html">Développement de solutions</a></h3>
								
								
								<a href="blog-details.html" class="blog-card-one__more">
									Read More
									<i class="fa fa-arrow-right"></i>
								</a><!-- /.blog-card-one__more -->
							</div><!-- /.blog-card-one__content -->
						</div><!-- /.blog-card-one -->
					</div><!-- /.col-lg-4 col-md-6 col-sm-12 -->
					<div class="col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-duration="1500ms"
						data-wow-delay="200ms">
						<div class="blog-card-one">
							<div class="blog-card-one__image">
								<img src="assets/images/blog/blog-1-3.jpg" alt="">
								<a href="blog-details.html"></a>
							</div><!-- /.blog-card-one__image -->
							<div class="blog-card-one__content">
								
								<h3 class="blog-card-one__title"><a href="blog-details.html">Support</a></h3>
								
								<a href="blog-details.html" class="blog-card-one__more">
									Read More
									<i class="fa fa-arrow-right"></i>
								</a><!-- /.blog-card-one__more -->
							</div><!-- /.blog-card-one__content -->
						</div><!-- /.blog-card-one -->
					</div><!-- /.col-lg-4 col-md-6 col-sm-12 -->
					<div class="col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-duration="1500ms"
						data-wow-delay="200ms">
						<div class="blog-card-one">
							<div class="blog-card-one__image">
								<img src="assets/images/blog/blog-1-3.jpg" alt="">
								<a href="blog-details.html"></a>
							</div><!-- /.blog-card-one__image -->
							<div class="blog-card-one__content">
								
								<h3 class="blog-card-one__title"><a href="blog-details.html">Conseils & Expertise</a></h3>
														
								
								<a href="blog-details.html" class="blog-card-one__more">
									Read More
									<i class="fa fa-arrow-right"></i>
								</a><!-- /.blog-card-one__more -->
							</div><!-- /.blog-card-one__content -->
						</div><!-- /.blog-card-one -->
					</div><!-- /.col-lg-4 col-md-6 col-sm-12 -->
				</div><!-- /.row gutter-y-30 -->
			</div><!-- /.container -->
		</section>

		<!-- solution -->
		<section class="section-padding--bottom">
			<div class="container">
				<div class="section-title text-center">
					<p class="section-title__text">SOLUTIONS CAPITAL SOFT</p><!-- /.section-title__text -->
					<h2 class="section-title__title">CAPITAL Soft est l’éditeur du système d’information intégré <br> «CAPITAL Suite» avec 3 composantes : </h2>
					<!-- /.section-title__title -->
				</div><!-- /.section-title -->
				<div class="row gutter-y-30">
					<div class="col-lg-4 col-md-6 col-sm-12">
						<div class="service-card-two gray-bg">
							<h3 class="service-card-two__title"><a href="services-1.html">Capital SIRH</a></h3>
							<!-- /.service-card-two__title -->
							<p class="service-card-two__text">Lorem ipsum dolor sit amet consectetur adipisicing.
							</p><!-- /.service-card-two__text -->
							<div class="service-card-two__icon">
								<i class="icon-smart-tv"></i>
							</div><!-- /.service-card-two__icon -->
						</div><!-- /.service-card-two -->
					</div><!-- /.col-lg-3 -->
					<div class="col-lg-4 col-md-6 col-sm-12">
						<div class="service-card-two gray-bg">
							<h3 class="service-card-two__title"><a href="team.html">Capital Finance</a></h3>
							<!-- /.service-card-two__title -->
							<p class="service-card-two__text">Lorem ipsum dolor sit amet consectetur adipisicing.
							</p><!-- /.service-card-two__text -->
							<div class="service-card-two__icon">
								<i class="icon-link"></i>
							</div><!-- /.service-card-two__icon -->
						</div><!-- /.service-card-two -->
					</div><!-- /.col-lg-3 -->
					<div class="col-lg-4 col-md-6 col-sm-12">
						<div class="service-card-two gray-bg">
							<h3 class="service-card-two__title"><a href="contact.html">Capital Distribution</a></h3>
							<!-- /.service-card-two__title -->
							<p class="service-card-two__text">Lorem ipsum dolor sit amet consectetur adipisicing.
							</p><!-- /.service-card-two__text -->
							<div class="service-card-two__icon">
								<i class="icon-technical-support"></i>
							</div><!-- /.service-card-two__icon -->
						</div><!-- /.service-card-two -->
					</div><!-- /.col-lg-3 -->
					
				</div><!-- /.row -->
			</div><!-- /.container -->
		</section>
		<!-- END solution -->
		<section class="section-padding--bottom section-padding--top project-one" style="display: none;">
			<div class="container">
				<div class="project-one__top">
					<div class="row">
						<div class="col-lg-9">
							<div class="section-title ">
								<p class="section-title__text">Solutions CAPITAL Soft</p><!-- /.section-title__text -->
								<h2 class="section-title__title">CAPITAL Soft est l’éditeur du système d’information intégré <br> «CAPITAL Suite» avec 3 composantes : </h2>
								<!-- /.section-title__title -->
							</div><!-- /.section-title -->
						</div><!-- /.col-lg-7 -->
						<div class="col-lg-3">
							<div class="project-one__top__content">
								
								<div class="project-one__top__btns">
									<a href="projects.html" class="thm-btn project-one__top__btn">
										<span>View All Projects</span>
									</a><!-- /.thm-btn project-one__top__btn -->
								</div><!-- /.project-one__top__btns -->

							</div><!-- /.project-one__top__content -->
						</div><!-- /.col-lg-5 -->
					</div><!-- /.row -->
				</div><!-- /.project-one__top -->
				<div class="owl-carousel thm-owl__carousel project-one__carousel thm-owl__carousel--with-shadow"
					data-owl-options='{"loop": true,
				"autoplay": true,
				"autoplayTimeout": 5000,
				"autoplayHoverPause": true,
				"nav": true,
				"navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],
				"dots": false,
				"margin": 0,
                "items": 1,
				"smartSpeed": 700,
				"responsive": {
					"0": {
						"margin": 0,
						"items": 1
					},
					"768": {
						"margin": 30,
						"items": 2
					},
					"992": {
						"margin": 30,
						"items": 3
					}
				}}'>
					<div class="item">
						<div class="project-card-one">
							<div class="project-card-one__image">
								<img src="assets/images/solution/RH.jpg" alt="">
							</div><!-- /.project-card-one__image -->
							<div class="project-card-one__content">
								<div class="project-card-one__content__inner">
									<p class="project-card-one__text"></p>
									<h3 class="project-card-one__title"><a href="project-details.html">Capital SIRH</a></h3><!-- /.project-card-one__title -->
									<a href="project-details.html" class="project-card-one__more">
										<i class="fa fa-angle-right"></i>
									</a><!-- /.project-card-one__more -->
								</div><!-- /.project-card-one__content__inner -->
							</div><!-- /.project-card-one__content -->
						</div><!-- /.project-card-one -->
					</div><!-- /.col-lg-4 col-md-6 col-sm-12 -->
					<div class="item">
						<div class="project-card-one">
							<div class="project-card-one__image">
								<img src="assets/images/solution/finance.jpg" alt="">
							</div><!-- /.project-card-one__image -->
							<div class="project-card-one__content">
								<div class="project-card-one__content__inner">
									<p class="project-card-one__text"></p>
									<h3 class="project-card-one__title"><a href="project-details.html">Capital Finance</a></h3><!-- /.project-card-one__title -->
									<a href="project-details.html" class="project-card-one__more">
										<i class="fa fa-angle-right"></i>
									</a><!-- /.project-card-one__more -->
								</div><!-- /.project-card-one__content__inner -->
							</div><!-- /.project-card-one__content -->
						</div><!-- /.project-card-one -->
					</div><!-- /.col-lg-4 col-md-6 col-sm-12 -->
					<div class="item">
						<div class="project-card-one">
							<div class="project-card-one__image">
								<img src="assets/images/solution/DISTRIBUTion.jpg" alt="">
							</div><!-- /.project-card-one__image -->
							<div class="project-card-one__content">
								<div class="project-card-one__content__inner">
									<p class="project-card-one__text"></p>
									<h3 class="project-card-one__title"><a href="project-details.html">Capital Distribution </a></h3><!-- /.project-card-one__title -->
									<a href="project-details.html" class="project-card-one__more">
										<i class="fa fa-angle-right"></i>
									</a><!-- /.project-card-one__more -->
								</div><!-- /.project-card-one__content__inner -->
							</div><!-- /.project-card-one__content -->
						</div><!-- /.project-card-one -->
					</div><!-- /.col-lg-4 col-md-6 col-sm-12 -->
					
				</div><!-- /.owl-carousel -->
			</div><!-- /.container -->
		</section>

		<!-- partenaire -->
		<div class="row gutter-y-30 service-details__box-wrapper" style="padding: 50px;">
				<div class="section-title text-center">
					<p class="section-title__text">Nos Partenaires</p><!-- /.section-title__text -->
					<h5 class="section-title__title">Lorem ipsum, dolor sit amet consectetur adipisicing. </h5>
					<!-- /.section-title__title -->
				</div><!-- /.section-title -->
			<div class="col-md-3 col-sm-12">
				<div class="service-details__box">
					<i class="service-details__box__icon"><img src="assets/images/clients/HPS.png" alt=""></i>
					<!-- /.service-details__box__content -->
				</div><!-- /.service-details__box -->
			</div><!-- /.col-md-6 col-sm-12 -->
			<div class="col-md-3 col-sm-12">
				<div class="service-details__box">
					<i class="service-details__box__icon"><img src="assets/images/clients/HPS.png" alt=""></i>
					<!-- /.service-details__box__content -->
				</div><!-- /.service-details__box -->
			</div><!-- /.col-md-6 col-sm-12 -->
			<div class="col-md-3 col-sm-12">
				<div class="service-details__box">
					<i class="service-details__box__icon"><img src="assets/images/clients/HPS.png" alt=""></i>
					<!-- /.service-details__box__content -->
				</div><!-- /.service-details__box -->
			</div><!-- /.col-md-6 col-sm-12 -->
			<div class="col-md-3 col-sm-12">
				<div class="service-details__box">
					<i class="service-details__box__icon"><img src="assets/images/clients/HPS.png" alt=""></i>
					<!-- /.service-details__box__content -->
				</div><!-- /.service-details__box -->
			</div><!-- /.col-md-6 col-sm-12 -->
			
		</div><!-- /.row -->
		<!--END partenaire -->

		<!-- Client  -->
		<div class="client-carousel client-carousel--two">
			<div class="container">
				<div class="section-title ">
					<p class="section-title__text">Nos clients  </p><!-- /.section-title__text -->
					<!-- /.section-title__title -->
				</div><!-- /.section-title -->
				<div class="owl-carousel thm-owl__carousel" data-owl-options='{"loop": true,
				"autoplay": true,
				"autoplayTimeout": 5000,
				"autoplayHoverPause": true,
				"nav": true,
				"navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],
				"dots": false,
				"margin": 30,
                "items": 2,
				"smartSpeed": 700,
				"responsive": {
					"0": {
						"margin": 30,
						"items": 2
					},
					"375": {
						"margin": 30,
						"items": 2
					},
					"575": {
						"margin": 30,
						"items": 3
					},
					"767": {
						"margin": 50,
						"items": 4
					},
					"991": {
						"margin": 40,
						"items": 4
					},
					"1199": {
						"margin": 80,
						"items": 4
					}
				}}'>
					<div class="item">
						<img src="assets/images/clients/bprem.png" alt="">
					</div><!-- /.item -->
					<div class="item">
						<img src="assets/images/clients/HPS.png" alt="">
					</div><!-- /.item -->
					<div class="item">
						<img src="assets/images/clients/MATIS.png" alt="">
					</div><!-- /.item -->
					<div class="item">
						<img src="assets/images/clients/safran.png" alt="">
					</div><!-- /.item -->
					<div class="item">
						<img src="assets/images/clients/saham.png" alt="">
					</div><!-- /.item -->
					<div class="item">
						<img src="assets/images/clients/zine.png" alt="">
					</div><!-- /.item -->
					
					
				</div><!-- /.thm-owl__carousel -->
			</div><!-- /.container -->
		</div>
		<!-- /.client-carousel -->
		


		<section class="cta-one">
			<div class="container">
				<div class="cta-one__inner text-center wow fadeInUp" data-wow-duration="1500ms">
					<div class="cta-one__circle"></div><!-- /.cta-one__circle -->
					<div class="section-title ">
						<p class="section-title__text">Need Any Technology Solution</p><!-- /.section-title__text -->
						<h2 class="section-title__title section-title__title--light">Let’s Work Togather on Project</h2>
						<!-- /.section-title__title -->
					</div><!-- /.section-title -->
					<a href="contact.html" class="thm-btn thm-btn--light cta-one__btn"><span>Start Now</span></a>
					<!-- /.thm-btn thm-btn--light cta-one__btn -->
				</div><!-- /.cta-one__inner -->
			</div><!-- /.container -->
		</section><!-- /.cta-one -->

		<div class="footer-main section-padding--bottom footer-main--top-padding">
			<div class="container">
				<div class="row gutter-y-30">
					<div class="col-lg-3 col-md-6 col-sm-12">
						<div class="footer-widget footer-widget--about">
							<a href="index.html" class="footer-widget__logo">
								<img src="assets/images/Logo/CapitalSoftLogo light.png" width="150" height="auto" alt="Cretech">
							</a>
							<p class="footer-widget__text">We work with a passion of taking challenges and creating new
								ones in advertising sector.</p><!-- /.footer-widget__text -->
							<ul class="footer-widget__social">
								<li><a href="#"><i class="fab fa-twitter"></i></a></li>
								<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
								<li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
								<li><a href="#"><i class="fab fa-instagram"></i></a></li>
							</ul><!-- /.footer-widget__social -->
						</div><!-- /.footer-widget -->
					</div><!-- /.col-lg-3 col-md-6 col-sm-12 -->
					<div class="col-lg-3 col-md-6 col-sm-12">
						<div class="footer-widget footer-widget--links">
							<h3 class="footer-widget__title">Services</h3><!-- /.footer-widget__title -->
							<ul class="footer-widget__links">
								<li>
									<a href="service-cyber-security.html">Cyber Security</a>
								</li>
								<li>
									<a href="service-it-management.html">IT Management</a>
								</li>
								<li>
									<a href="service-qa-testing.html">QA & Testing</a>
								</li>
								<li>
									<a href="service-infrastructure-plan.html">Infrastructure Plan</a>
								</li>
								<li>
									<a href="service-it-consultent.html">IT Consultent</a>
								</li>
							</ul><!-- /.footer-widget__links -->
						</div><!-- /.footer-widget -->
					</div><!-- /.col-lg-3 col-md-6 col-sm-12 -->
					<div class="col-lg-3 col-md-6 col-sm-12">
						<div class="footer-widget footer-widget--newsletter">
							<h3 class="footer-widget__title">Subscribe</h3><!-- /.footer-widget__title -->
							<p class="footer-widget__text">Sign up to receive the latest articles</p>
							<!-- /.footer-widget__text -->
							<form action="#" class="footer-widget__newsletter mc-form"
								data-url="ADD_YOUR_MAILCHIMP_FORM_URL_HERE">
								<input type="email" name="EMAIL" placeholder="Enter Your Email">
								<button class="thm-btn footer-widget__newsletter__btn"><span>Register</span></button>
							</form>
							<div class="mc-form__response"></div><!-- /.mc-form__response -->
						</div><!-- /.footer-widget -->
					</div><!-- /.col-lg-3 col-md-6 col-sm-12 -->
					<div class="col-lg-3 col-md-6 col-sm-12">
						<div class="footer-widget footer-widget--contact">
							<h3 class="footer-widget__title">Contact</h3><!-- /.footer-widget__title -->
							<ul class="footer-widget__contact">
								<li>
									<i class="fa fa-phone"></i>
									<a href="tel:+8898006802">+ 88 ( 9800 ) 6802</a>
								</li>
								<li>
									<i class="fa fa-envelope"></i>
									<a href="mailto:needhelp@company.com">needhelp@company.com</a>
								</li>
								<li>
									<i class="fa fa-map-marker-alt"></i>
									88 Broklyn Golden Road Street <br> New York. USA
								</li>
							</ul><!-- /.footer-widget__contact -->
						</div><!-- /.footer-widget -->
					</div><!-- /.col-lg-3 col-md-6 col-sm-12 -->
				</div><!-- /.row -->
			</div><!-- /.container -->
		</div><!-- /.footer-main -->
		<div class="footer-bottom">
			<div class="container">
				<p>&copy; All Copyright <span class="dynamic-year"></span> by Cretech</p>
			</div><!-- /.container -->
		</div><!-- /.footer-bottom -->
	</div><!-- /.page-wrapper -->


	<div class="mobile-nav__wrapper">
		<div class="mobile-nav__overlay mobile-nav__toggler"></div>
		<!-- /.mobile-nav__overlay -->
		<div class="mobile-nav__content">
			<a href="#" class="mobile-nav__close mobile-nav__toggler">
				<span></span>
				<span></span>
			</a>

			<div class="logo-box">
				<a href="index.html" aria-label="logo image"><img src="assets/images/logo-light.png" width="98"
						height="33" alt="Cretech"></a>
			</div>
			<!-- /.logo-box -->
			<div class="mobile-nav__container"></div>
			<!-- /.mobile-nav__container -->

			<ul class="mobile-nav__contact list-unstyled">
				<li>
					<i class="fa fa-phone"></i>
					<a href="tel:+8898006802">+ 88 ( 9800 ) 6802</a>
				</li>
				<li>
					<i class="fa fa-envelope"></i>
					<a href="mailto:needhelp@company.com">needhelp@company.com</a>
				</li>
				<li>
					<i class="fa fa-map-marker-alt"></i>
					88 Broklyn Golden Road Street <br> New York. USA
				</li>
			</ul><!-- /.mobile-nav__contact -->
			<ul class="mobile-nav__social">
				<li><a href="#"><i class="fab fa-twitter"></i></a></li>
				<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
				<li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
				<li><a href="#"><i class="fab fa-instagram"></i></a></li>
			</ul><!-- /.mobile-nav__social -->



		</div>
		<!-- /.mobile-nav__content -->
	</div>
	<!-- /.mobile-nav__wrapper -->

	<div class="search-popup">
		<div class="search-popup__overlay search-toggler"></div>
		<!-- /.search-popup__overlay -->
		<div class="search-popup__content">
			<form action="#">
				<label for="search" class="sr-only">search here</label><!-- /.sr-only -->
				<input type="text" id="search" placeholder="Search Here..." />
				<button type="submit" aria-label="search submit" class="thm-btn">
					<span><i class="icon-magnifying-glass"></i></span>
				</button>
			</form>
		</div>
		<!-- /.search-popup__content -->
	</div>
	<!-- /.search-popup -->

	<a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>

	<!-- plugins js -->
	<script src="assets/vendors/jquery/jquery-3.6.0.min.js"></script>
	<script src="assets/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="assets/vendors/jquery-validation/jquery.validate.min.js"></script>
	<script src="assets/vendors/owl-carousel/owl.carousel.min.js"></script>
	<script src="assets/vendors/jquery-appear/jquery.appear.min.js"></script>
	<script src="assets/vendors/wow/wow.js"></script>
	<script src="assets/vendors/jarallax/jarallax.min.js"></script>
	<script src="assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js"></script>
	<script src="assets/vendors/lettering-js/jquery.lettering.js"></script>
	<script src="assets/vendors/youtube-popup/youtube-popup.jquery.js"></script>
	<!-- template js -->
	<script src="assets/js/cretech.js"></script>

</body>

</html>