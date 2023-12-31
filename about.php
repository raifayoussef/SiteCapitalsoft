<!DOCTYPE html>
<html lang="en">

<?php
require"inc/head.php"; 
;?>

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
					<a href="">
						<img src="assets//images/Logo/CapitalSoftLogo.png" width="98" height="auto" alt="Cretech">
						<!-- <img src="assets//images/Logo/CapitalSoftLogo.png" width="98" height="33" alt="Cretech"> -->
					</a>
				</div><!-- /.main-menu__logo -->

				<ul class="main-menu__list">
					<li class="menu-item-has-children">
						<a href="index.php">Accueil</a>
					</li>
					<li class="menu-item-has-children">
						<a href="about.php">À propos</a>
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
							Call Anytime
						</span><!-- /.main-menu__cta__text -->
					</a><!-- /.main-menu__cta -->
				</div><!-- /.main-menu__right -->

			</div><!-- /.container-fluid -->
		</nav><!-- /.main-menu -->


		<div class="page-header">
			<div class="page-header__bg"
				style="background-image: url(../assets/images/background/page-header-bg-1-1.jpg);"></div>
			<!-- /.page-header__bg -->
			<div class="container">
				<ul class="thm-breadcrumb list-unstyled">
					<li><a href="index.html">Home</a></li>
					<li>About</li>
				</ul>
				<h2 class="page-header__title">About Us</h2><!-- /.page-header__title -->
			</div><!-- /.container -->
		</div><!-- /.page-header -->
		
			class="section-padding--bottom section-padding--top gray-bg testimonials-one background-repeat-no background-position-top-center"
			style="background-image: url(assets/images/shapes/testi-bg-2-1.png);">
			<div class="container">
				<div class="section-title text-center">
					<p class="section-title__text">Equipe et collaborateurs</p><!-- /.section-title__text -->
					
				</div><!-- /.section-title -->
				<div class="row gutter-y-30 ">
					<div class="col-lg-6">
						<div class="testimonials-one-card">
							<div class="testimonials-one-card__image">
								<img src="assets/images/resources/testi-1-1.jpg" alt="">
							</div><!-- /.testimonials-one-card__image -->
							<div class="testimonials-one-card__content">
								<div class="testimonials-one-card__text">Notre équipe chez Capital Soft est composée de professionnels passionnés et talentueux,
									 spécialisés dans le développement informatique et le support technique. Chaque membre de notre équipe apporte son expertise
									  et sa créativité pour offrir des solutions innovantes et fiables à nos clients.</div>
								<!-- /.testimonials-one-card__designation -->
								<i class="icon-right-quote testimonials-one-card__icon"></i>
							</div><!-- /.testimonials-one-card__content -->
						</div><!-- /.testimonials-one-card -->
					</div><!-- /.col-lg-6 -->
					<div class="col-lg-6">
						<div class="testimonials-one-card">
							<div class="testimonials-one-card__image">
								<img src="assets/images/resources/testi-1-2.jpg" alt="">
							</div><!-- /.testimonials-one-card__image -->
							<div class="testimonials-one-card__content">
								<div class="testimonials-one-card__text">Nos développeurs sont des artisans du code, experts dans une variété de
									 langages de programmation et de Framework. Ils sont constamment à l'affût des dernières tendances 
									 et technologies, ce qui leur permet de concevoir des applications robustes, évolutives et conviviales.
									  Que ce soit pour le développement d'applications web, mobiles ou logicielles, notre équipe est prête à 
									  relever tous les défis techniques.</div>
								<i class="icon-right-quote testimonials-one-card__icon"></i>
							</div><!-- /.testimonials-one-card__content -->
						</div><!-- /.testimonials-one-card -->
					</div><!-- /.col-lg-6 -->
				</div><!-- /.ro -->

			</div><!-- /.container -->
		</section>

		<div class="client-carousel">
			<div class="container">
				<div class="owl-carousel thm-owl__carousel" data-owl-options='{"loop": true,
				"autoplay": true,
				"autoplayTimeout": 5000,
				"autoplayHoverPause": true,
				"nav": false,
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
						"items": 5
					},
					"1199": {
						"margin": 80,
						"items": 5
					}
				}}'>
					<div class="item">
						<img src="assets/images/resources/client-1-1.png" alt="">
					</div><!-- /.item -->
					<div class="item">
						<img src="assets/images/resources/client-1-1.png" alt="">
					</div><!-- /.item -->
					<div class="item">
						<img src="assets/images/resources/client-1-1.png" alt="">
					</div><!-- /.item -->
					<div class="item">
						<img src="assets/images/resources/client-1-1.png" alt="">
					</div><!-- /.item -->
					<div class="item">
						<img src="assets/images/resources/client-1-1.png" alt="">
					</div><!-- /.item -->
					<div class="item">
						<img src="assets/images/resources/client-1-1.png" alt="">
					</div><!-- /.item -->
					<div class="item">
						<img src="assets/images/resources/client-1-1.png" alt="">
					</div><!-- /.item -->
					<div class="item">
						<img src="assets/images/resources/client-1-1.png" alt="">
					</div><!-- /.item -->
					<div class="item">
						<img src="assets/images/resources/client-1-1.png" alt="">
					</div><!-- /.item -->
					<div class="item">
						<img src="assets/images/resources/client-1-1.png" alt="">
					</div><!-- /.item -->
					<div class="item">
						<img src="assets/images/resources/client-1-1.png" alt="">
					</div><!-- /.item -->
					<div class="item">
						<img src="assets/images/resources/client-1-1.png" alt="">
					</div><!-- /.item -->
					<div class="item">
						<img src="assets/images/resources/client-1-1.png" alt="">
					</div><!-- /.item -->
					<div class="item">
						<img src="assets/images/resources/client-1-1.png" alt="">
					</div><!-- /.item -->
					<div class="item">
						<img src="assets/images/resources/client-1-1.png" alt="">
					</div><!-- /.item -->
					<div class="item">
						<img src="assets/images/resources/client-1-1.png" alt="">
					</div><!-- /.item -->
					<div class="item">
						<img src="assets/images/resources/client-1-1.png" alt="">
					</div><!-- /.item -->
					<div class="item">
						<img src="assets/images/resources/client-1-1.png" alt="">
					</div><!-- /.item -->
					<div class="item">
						<img src="assets/images/resources/client-1-1.png" alt="">
					</div><!-- /.item -->
					<div class="item">
						<img src="assets/images/resources/client-1-1.png" alt="">
					</div><!-- /.item -->
				</div><!-- /.thm-owl__carousel -->
			</div><!-- /.container -->
		</div><!-- /.client-carousel -->



		<div class="footer-main section-padding--bottom section-padding--top">
			<div class="container">
				<div class="row gutter-y-30">
					<div class="col-lg-3 col-md-6 col-sm-12">
						<div class="footer-widget footer-widget--about">
							<a href="index.html" class="footer-widget__logo">
								<img src="assets/images/logo-light.png" width="119" height="40" alt="Cretech">
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

	<?php
require "inc/script.php"; 
;?>

</body>

</html>