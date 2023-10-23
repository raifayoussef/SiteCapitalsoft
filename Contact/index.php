<!DOCTYPE html>
<html lang="en">
<?php 
$currentpage="contact";
;?>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Capital Soft</title>
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
				style="background-image: url(../assets/images/background/contact1.jpg);"></div>
			<!-- /.page-header__bg -->
			<div class="container">
				<ul class="thm-breadcrumb list-unstyled">
					<li><a href="../">Accueil</a></li>
					<li>Contact</li>
				</ul>
				<h2 class="page-header__title">Contact</h2><!-- /.page-header__title -->
			</div><!-- /.container -->
		</div><!-- /.page-header -->

		<section class="contact-one section-padding--top section-padding--bottom">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<form action="EnvoyerMail.php" class="contact-one__form contact-form-validated" class="contact-one__form contact-form-validated">
							<div class="section-title">
								<p class="section-title__text">CONTACTEZ-NOUS</p><!-- /.section-title__text -->
								<h2 class="section-title__title">Rejoignez-nous pour obtenir des consultations informatiques .</h2><!-- /.section-title__title -->
							</div><!-- /.section-title -->
                                <div class="row ">
                                    <div class="col-lg-4 col-md-12">
                                        <input type="text" placeholder="Raison Sociale" name="raison_social" required>
                                    </div><!-- /.col-lg-6 col-md-12 -->
                                    <div class="col-lg-4 col-md-12">
                                        <input type="text" placeholder="Votre Nom" name="name" required>
                                    </div><!-- /.col-lg-6 col-md-12 -->
                                    <div class="col-lg-4 col-md-12">
                                        <input type="text" placeholder="Votre Prénom" name="prenom" required>
                                    </div><!-- /.col-lg-6 col-md-12 -->
                                    <div class="col-lg-6 col-md-12">
                                        <input type="email" placeholder="Adresse email" name="email" required>
                                    </div><!-- /.col-lg-6 col-md-12 -->
                                    <div class="col-lg-6 col-md-12">
                                        <input type="text" placeholder="Numéro de téléphone" name="phone" required>
                                    </div><!-- /.col-lg-6 col-md-12 -->
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
				</div><!-- /.row -->
			</div><!-- /.container -->
		</section><!-- /.contact-one -->

		<!--Google Map Start-->
		<section class="google-map google-map--contact" >
			<iframe
				src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12721.95909669797!2d-7.612491!3d33.5850151!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xda632cb3452d5e9%3A0x6a60fa93c1ec2e25!2sCapital%20Soft%20SARL!5e0!3m2!1sfr!2sfr!4v1633311812340!5m2!1sfr!2sfr"
				class="google-map__one" allowfullscreen></iframe>

		</section>
		<!--Google Map End-->

		<?php 
		require "../inc/footer.php"
		;?>
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