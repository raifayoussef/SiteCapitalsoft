<!DOCTYPE html>
<html lang="en">
<?php
$currentpage = "solutions";; ?>

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Capital Soft</title>
	<!-- google font -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&display=swap" rel="stylesheet">
	<!-- favicons Icons -->
	<link rel="apple-touch-icon" sizes="180x180" href="../assets/images/favicons/apple-touch-icon.png" />
	<link rel="icon" type="image/png" sizes="32x32" href="../assets/images/favicons/CapitalSoftLogo 32x32.png" />
	<link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicons/CapitalSoftLogo 32x32.png" />
	<link rel="manifest" href="../assets/images/favicons/site.webmanifest" />
	<!-- plugins css -->
	<link rel="stylesheet" href="../assets/vendors/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="../assets/vendors/fontawesome/css/all.min.css">
	<link rel="stylesheet" href="../assets/vendors/jarallax/jarallax.css">
	<link rel="stylesheet" href="../assets/vendors/animate/animate.min.css">
	<link rel="stylesheet" href="../assets/vendors/owl-carousel/../assets/owl.carousel.min.css">
	<link rel="stylesheet" href="../assets/vendors/owl-carousel/../assets/owl.theme.default.min.css">
	<link rel="stylesheet" href="../assets/vendors/cretech-icons/style.css">
	<!-- templates css -->
	<link rel="stylesheet" href="../assets/css/cretech.css">
	<link rel="stylesheet" href="style.css">
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
			<div class="page-header__bg" style="background-image: url(../assets/images/solution/DISTRIBUTION2.jpg);"></div>
			<!-- /.page-header__bg -->
			<div class="container">
				<ul class="thm-breadcrumb list-unstyled">
					<li><a href="../index.html">ACCUEIL</a></li>
					<li>DISTIBUTION</li>
				</ul>
				<h2 class="page-header__title">DISTIBUTION</h2><!-- /.page-header__title -->
			</div><!-- /.container -->
		</div><!-- /.page-header -->
		<section class="section-padding--bottom section-padding--top">
			<div class="wrapper_cards">
				<div class="cols_card">
					<a href="COMMERCIALE.php" class="col_card">
						<div class="container_col">
							<div class="front" style="background-image: url(../assets/images/resources/commeciale.png)">
								<div class="inner">
									<p>Capital Commercial</p>
									<!-- <span>Lorem ipsum</span> -->
								</div>
							</div>
						</div>
					</a>
					<a href="POINT_VENTE.php" class="col_card">
						<div class="container_col">
							<div class="front" style="background-image:url(../assets/images/resources/point_vente.png)">
								<div class="inner">
									<p>Capital Point de vente</p>
									<!-- <span>Lorem ipsum</span> -->
								</div>
							</div>
							<div class="back">
								<div class="inner">
									<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Alias cum repellat velit quae suscipit c.</p>
								</div>
							</div>
						</div>
					</a>
					<a href="restau_collectif.php" class="col_card">
						<div class="container_col">
							<div class="front" style="background-image: url(../assets/images/resources/restau.png)">
								<div class="inner">
									<p>Capital RESTAURANT COLLECTIF</p>
									<!-- <span>Lorem ipsum</span> -->
								</div>
							</div>
							<div class="back">
								<div class="inner">
									<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Alias cum repellat velit quae suscipit c.</p>
								</div>
							</div>
						</div>
					</a>
				</div>
			</div>
		</section>


		<?php
		require "../inc/footer.php"; ?>
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
				<a href="../index.php" aria-label="logo image"><img src="../assets/images/logo-light.png" width="98" height="33" alt="Cretech"></a>
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