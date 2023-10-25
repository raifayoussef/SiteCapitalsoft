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
			<div class="page-header__bg" style="background-image: url(../assets/images/solution/concept-ressources-humaines-main.jpg);"></div>
			<!-- /.page-header__bg -->
			<div class="container">
				<ul class="thm-breadcrumb list-unstyled">
					<li><a href="../index.html">ACCUEIL</a></li>
					<li>SIRH</li>
				</ul>
				<h2 class="page-header__title">SIRH</h2><!-- /.page-header__title -->
			</div><!-- /.container -->
		</div><!-- /.page-header -->

		<section class="section-padding--bottom section-padding--top">
			<div class="wrapper_cards">
				<div class="cols_card">
					<a href="HRT.php" class="col_card">
						<div class="container_col">
							<div class="front" style="background-image: url(../assets/images/resources/hr.jpg)">
								<div class="inner">
									<p>Human Resources Tools HRT</p>
									<!-- <span>Lorem ipsum</span> -->
								</div>
							</div>
						</div>
					</a>
					<a href="Capitaltime.php" class="col_card">
						<div class="container_col">
							<div class="front" style="background-image:url(../assets/images/resources/capitaltime.jpg)">
								<div class="inner">
									<p>CAPITAL TIME</p>
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
					<a href="EspaceRh.php" class="col_card">
						<div class="container_col">
							<div class="front" style="background-image: url(../assets/images/resources/rh_.jpg)">
								<div class="inner">
									<p>CAPITAL ESPACE RESSOURCES HUMAINES</p>
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