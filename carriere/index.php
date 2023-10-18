<!DOCTYPE html>
<html lang="en">
<?php 
$currentpage="carriere";
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
				style="background-image: url(../assets/images/background/carriere.jpg);"></div>
			<!-- /.page-header__bg -->
			<div class="container">
				<ul class="thm-breadcrumb list-unstyled">
					<li><a href="../">Home</a></li>
					<li>Nous rejoindre</li>
				</ul>
				<h2 class="page-header__title">Nous rejoindre</h2><!-- /.page-header__title -->
			</div><!-- /.container -->
		</div><!-- /.page-header -->

		<section class="contact-one section-padding--top section-padding--bottom">
			<div class="container">
				<div class="row">
					<div class="col-lg-8">
						<form action="../actions/carriere.php" class="contact-one__form" enctype="multipart/form-data" method="post" id="careerForm">
							<div class="section-title">
								<p class="section-title__text">Contact with us</p><!-- /.section-title__text -->
								<h2 class="section-title__title">Join Us To Get IT Free
									Consultations</h2><!-- /.section-title__title -->
							</div><!-- /.section-title -->
							<div class="row ">
								<div class="col-lg-6 col-md-12">
									<input type="text" placeholder="Nom" name="name">
								</div><!-- /.col-lg-6 col-md-12 -->
								<div class="col-lg-6 col-md-12">
									<input type="text" placeholder="Prénom" name="prenom">
								</div><!-- /.col-lg-6 col-md-12 -->
								<div class="col-lg-6 col-md-12">
									<input type="email" placeholder="Email address" name="email">
								</div><!-- /.col-lg-6 col-md-12 -->
								<div class="col-lg-6 col-md-12">
									<input type="tel" placeholder="Numéro de téléphone" name="phone">
								</div><!-- /.col-lg-6 col-md-12 -->
								<div class="col-lg-12 col-md-12">
									<input type="file" name="CV" accept=".pdf" data-text="Aucun fichier sélectionné">
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
					<div class="col-lg-4">
						<div class="contact-one__info wow fadeInRight" data-wow-duration="1500ms"
							style="background-image: url(../assets/images/background/carriere\ 2.jpg);">
							<div class="contact-one__item">
								<h3 class="contact-one__item__title">Adresse</h3><!-- /.contact-one__item__title -->
								<p class="contact-one__item__text">Residence titrit 2 Immeuble B, <br> Rue Hadj Omar Riffi, Casablanca</p><!-- /.contact-one__item__text -->
							</div><!-- /.contact-one__item -->
							<div class="contact-one__item">
								<h3 class="contact-one__item__title">Téléphone</h3><!-- /.contact-one__item__title -->
								<p class="contact-one__item__text"><a href="tel:+212522223999">+212 5 22 22 39 99</a><br></p>
								<!-- /.contact-one__item__text -->
							</div><!-- /.contact-one__item -->
							<div class="contact-one__item">
								<h3 class="contact-one__item__title">Email</h3><!-- /.contact-one__item__title -->
								<p class="contact-one__item__text"><a
										href="mailto:capitalsoft@capitalsoft.ma">capitalsoft@capitalsoft.ma</a></p>
								<!-- /.contact-one__item__text -->
							</div><!-- /.contact-one__item -->
							<div class="contact-one__item">
								<ul class="contact-one__social">
									<li><a href="https://www.facebook.com/profile.php?id=61551832514043" target="_blank"><i class="fab fa-facebook"></i></a></li>
									<li><a href="https://www.instagram.com/capitalsoft.ma/" target="_blank"><i class="fab fa-instagram"></i></a></li>
									<li><a href="https://www.linkedin.com/in/capital-soft-234418227/" target="_blank"><i class="fab fa-linkedin"></i></a></li>
								</ul><!-- /.contact-one__social -->
							</div><!-- /.contact-one__item -->
						</div><!-- /.contact-one__info -->
					</div><!-- /.col-lg-4 -->
				</div><!-- /.row -->
			</div><!-- /.container -->
		</section><!-- /.contact-one -->

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
	<script>
		$(document).ready(function() {
			$("#careerForm").submit(function(e) {
				e.preventDefault();

				// Create a FormData object to store form data
				var formData = new FormData(this);

				$.ajax({
					type: "POST",
					url: $(this).attr('action'),
					data: formData,
					processData: false,
					contentType: false,
					success: function(response) {
						// Clear form fields on successful submission
						$("#careerForm")[0].reset();
						console.log(response); // Log the response from the server
						// You can display a success message or perform other actions here
					},
					error: function(error) {
						console.log(error); // Log any errors that occurred during the request
						// You can handle errors here (e.g., display an error message)
					}
				});
			});
		});

	</script>

</body>

</html>