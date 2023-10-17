<!DOCTYPE html>
<html lang="en">
<?php
$currentpage = "propos";; ?>

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>About Us || Cretech || IT Solutions & Services HTML Template</title>
	<!-- google font -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&display=swap" rel="stylesheet">
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
		require "../inc/header.php";; ?>


		<div class="page-header">
			<div class="page-header__bg" style="background-image: url(../assets/images/background/equipe.jpg);"></div>
			<!-- /.page-header__bg -->
			<div class="container">
				<ul class="thm-breadcrumb list-unstyled">
					<li><a href="../">Accueil</a></li>
					<li>équipe</li>
				</ul>
				<h2 class="page-header__title" style="text-transform: capitalize;">équipe</h2><!-- /.page-header__title -->
			</div><!-- /.container -->
		</div><!-- /.page-header -->
		<section class="about-four section-padding--top">
			<div class="container">
				<div class="row gutter-y-60">
					<div class="col-lg-6">
						<div class="about-four__image">
							<img src="../assets/images/resources/colleagues-giving-fist-bump.jpg" class="wow fadeInUp" data-wow-duration="500ms" alt="">
						</div><!-- /.about-four__image -->
					</div><!-- /.col-lg-6 -->
					<div class="col-lg-6">
						<div class="about-four__content">
							<div class="section-title ">
								<p class="section-title__text">Equipe et collaborateurs</p><!-- /.section-title__text -->

							</div><!-- /.section-title -->
							<div class="about-four__text">Nos développeurs sont des artisans du code, experts dans une variété de
								langages de programmation et de Framework. Ils sont constamment à l'affût des dernières tendances et
								technologies, ce qui leur permet de concevoir des applications robustes, évolutives et conviviales.
								Que ce soit pour le développement d'applications web, mobiles ou logicielles, notre équipe est prête à
								relever tous les défis techniques.</div>

						</div><!-- /.about-four__content -->
					</div><!-- /.col-lg-6 -->
				</div><!-- /.row -->
			</div><!-- /.container -->
		</section>

		<?php
		require "../inc/footer.php";; ?>
	
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