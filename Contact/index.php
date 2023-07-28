<!DOCTYPE html>
<html lang="en">
<?php 
$currentpage="";
;?>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Contact || Cretech || IT Solutions & Services HTML Template</title>
	<!-- google font -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link
		href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&display=swap"
		rel="stylesheet">
	<!-- favicons Icons -->
	<link rel="apple-touch-icon" sizes="180x180" href="../assets/images/favicons/apple-touch-icon.png" />
	<link rel="icon" type="image/png" sizes="32x32" href="../assets/images/favicons/favicon-32x32.png" />
	<link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicons/favicon-16x16.png" />
	<link rel="manifest" href="../assets/images/favicons/site.webmanifest" />
	<!-- plugins css -->
	<link rel="stylesheet" href="../assets/vendors/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="../assets/vendors/fontawesome/css/all.min.css">
	<link rel="stylesheet" href="../assets/vendors/jarallax/jarallax.css">
	<link rel="stylesheet" href="../assets/vendors/animate/animate.min.css">
	<link rel="stylesheet" href="../assets/vendors/owl-carousel/assets/owl.carousel.min.css">
	<link rel="stylesheet" href="../assets/vendors/owl-carousel/assets/owl.theme.default.min.css">
	<link rel="stylesheet" href="../assets/vendors/cretech-icons/style.css">
	<!-- templates css -->
	<link rel="stylesheet" href="../assets/css/cretech.css">
</head>

<body class="custom-cursor">

	<div class="custom-cursor__cursor"></div>
	<div class="custom-cursor__cursor-two"></div>

	<div class="preloader">
		<div class="preloader__circle"></div>
	</div>

	<div class="page-wrapper">
    <?php
        require "../inc/topbar.php"; 
        require "../inc/header.php"; 
    ;?>



		<div class="page-header">
			<div class="page-header__bg"
				style="background-image: url(assets/images/background/page-header-bg-1-1.jpg);"></div>
			<!-- /.page-header__bg -->
			<div class="container">
				<ul class="thm-breadcrumb list-unstyled">
					<li><a href="index.html">Home</a></li>
					<li>Contact</li>
				</ul>
				<h2 class="page-header__title">Contact</h2><!-- /.page-header__title -->
			</div><!-- /.container -->
		</div><!-- /.page-header -->

		<section class="contact-one section-padding--top section-padding--bottom">
			<div class="container">
				<div class="row">
					<div class="col-lg-8">
						<form action="EnvoyerMail.php" class="contact-one__form contact-form-validated">
							<div class="section-title">
								<p class="section-title__text">Contact with us</p><!-- /.section-title__text -->
								<h2 class="section-title__title">Join Us To Get IT Free
									Consultations</h2><!-- /.section-title__title -->
							</div><!-- /.section-title -->
                                <div class="row ">
                                    <div class="col-lg-6 col-md-12">
                                        <input type="text" placeholder="Votre Nom" name="name" required>
                                    </div><!-- /.col-lg-6 col-md-12 -->
                                    <div class="col-lg-6 col-md-12">
                                        <input type="text" placeholder="Votre Prenom" name="prenom" required>
                                    </div><!-- /.col-lg-6 col-md-12 -->
                                    <div class="col-lg-6 col-md-12">
                                        <input type="email" placeholder="Email address" name="email" required>
                                    </div><!-- /.col-lg-6 col-md-12 -->
                                    <div class="col-lg-6 col-md-12">
                                        <input type="text" placeholder="Numéro de téléphone" name="phone" required>
                                    </div><!-- /.col-lg-6 col-md-12 -->
                                    <div class="col-lg-12 col-md-12">
                                        <input type="text" placeholder="Raison Sociale" name="company" required>
                                    </div><!-- /.col-lg-6 col-md-12 -->
                                    <div class="col-lg-12 col-md-12">
                                        <select name="objet" id="objet" class="objet" required class="niceselect">
                                            <option value="" selected>Sélectionner</option>
                                            <option value="Informations sur les produits">Informations sur les produits</option>
                                            <option value="Informations sur les tarifs">Informations sur les tarifs</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <textarea name="message" placeholder="Message"></textarea>
                                    </div><!-- /.col-lg-6 col-md-12 -->
                                    <div class="col-md-12">
                                        <button class="thm-btn contact-one__btn" type="submit"><span>Envoyer</span></button>
                                    </div><!-- /.col-md-12 -->
                                </div><!-- /.row -->
						</form><!-- /.contact-one__form -->
						<div class="result"></div><!-- / -->
					</div><!-- /.col-lg-8 -->
					<div class="col-lg-4">
						<div class="contact-one__info wow fadeInRight" data-wow-duration="1500ms"
							style="background-image: url(assets/images/background/contact-one-bg-1-1.png);">
							<div class="contact-one__item">
								<h3 class="contact-one__item__title">Address</h3><!-- /.contact-one__item__title -->
								<p class="contact-one__item__text">88 New Street, Washington DC <br>
									United States, America</p><!-- /.contact-one__item__text -->
							</div><!-- /.contact-one__item -->
							<div class="contact-one__item">
								<h3 class="contact-one__item__title">Phone</h3><!-- /.contact-one__item__title -->
								<p class="contact-one__item__text">Local: <a href="tel:222999888">222 999 888</a><br>
									Mobile: <a href="tel:0008888999">000 8888 999</a></p>
								<!-- /.contact-one__item__text -->
							</div><!-- /.contact-one__item -->
							<div class="contact-one__item">
								<h3 class="contact-one__item__title">Email</h3><!-- /.contact-one__item__title -->
								<p class="contact-one__item__text"><a
										href="mailto:needhelp@company.com">needhelp@company.com</a><br><a
										href="mailto:inquiry@company.com">inquiry@company.com</a></p>
								<!-- /.contact-one__item__text -->
							</div><!-- /.contact-one__item -->
							<div class="contact-one__item">
								<ul class="contact-one__social">
									<li><a href="#"><i class="fab fa-twitter"></i></a></li>
									<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
									<li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
									<li><a href="#"><i class="fab fa-instagram"></i></a></li>
								</ul><!-- /.contact-one__social -->
							</div><!-- /.contact-one__item -->
						</div><!-- /.contact-one__info -->
					</div><!-- /.col-lg-4 -->
				</div><!-- /.row -->
			</div><!-- /.container -->
		</section><!-- /.contact-one -->

		<!--Google Map Start-->
		<section class="google-map google-map--contact">
			<iframe
				src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4562.753041141002!2d-118.80123790098536!3d34.152323469614075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80e82469c2162619%3A0xba03efb7998eef6d!2sCostco+Wholesale!5e0!3m2!1sbn!2sbd!4v1562518641290!5m2!1sbn!2sbd"
				class="google-map__one" allowfullscreen></iframe>

		</section>
		<!--Google Map End-->

		<div class="footer-main section-padding--bottom section-padding--top">
			<div class="container">
				<div class="row gutter-y-30">
					<div class="col-lg-3 col-md-6 col-sm-12">
						<div class="footer-widget footer-widget--about">
							<a href="index.html" class="footer-widget__logo">
								<img src="../assets/images/logo-light.png" width="119" height="40" alt="Cretech">
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
				<a href="index.html" aria-label="logo image"><img src="../assets/images/logo-light.png" width="98"
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
	<script src="../assets/vendors/jquery/jquery-3.6.0.min.js"></script>
	<script src="../assets/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="../assets/vendors/jquery-validation/jquery.validate.min.js"></script>
	<script src="../assets/vendors/owl-carousel/owl.carousel.min.js"></script>
	<script src="../assets/vendors/wow/wow.js"></script>
	<script src="../assets/vendors/jarallax/jarallax.min.js"></script>
	<script src="../assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js"></script>
	<!-- template js -->
	<script src="../assets/js/cretech.js"></script>

</body>

</html>