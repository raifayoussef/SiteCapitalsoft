<!DOCTYPE html>
<html lang="en">
<?php
$currentpage = "accueil";; ?>

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Capital Soft</title>
	<!-- google font -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
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
	<link rel="stylesheet" href="style.css">
	<!--=============== REMIXICONS ===============-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.css" crossorigin="">

	<!--=============== SWIPER CSS ===============-->
	<link rel="stylesheet" href="assets2/css/swiper-bundle.min.css">

	<!--=============== CSS ===============-->
	<link rel="stylesheet" href="assets2/css/styles.css">
	<style>
		.text_display {
			position: relative;

			/* width: 300px; */
			min-height: calc(8rem + 20px);
			height: calc(8rem + 20px);

			/* line-height: 1.1rem; */

			/* border: 1px solid black; */
			/* border-radius : 6px; */

			/* padding : 10px; */
			text-align: justify;
		}

		.text_display.opened {
			height: fit-content;
		}

		.text_display>p {
			/* margin : 0; */

			height: 100%;

			overflow: hidden;
		}

		.text_display::before {
			content: "Lire plus";
			position: absolute;
			bottom: -30px;
			right: 10px;
			padding-left: 50px;
			/* background : linear-gradient(90deg, rgba(255,255,255,0), rgba(255,255,255,100%) 50px); */
			/* font-size: 10PX; */
			padding-top: 20PX;
			cursor: pointer;
		}
	</style>
	</style>
</head>

<body class="custom-cursor">

	<div class="custom-cursor__cursor"></div>
	<div class="custom-cursor__cursor-two"></div>

	<div class="preloader">
		<div class="preloader__circle"></div>
	</div>

	<div class="page-wrapper">

		<?php require "inc/topbar.php"; ?>
		<?php require "inc/header.php"; ?>



		<div class="slider-one slider-three">
			<div class="slider-one__carousel owl-carousel owl-theme thm-owl__carousel" data-owl-options='{"loop": true, "items": 1, "navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"], "margin": 0, "dots": true, "nav": true, "animateOut": "slideOutDown", "animateIn": "fadeIn", "active": true, "smartSpeed": 1000, "autoplay": true, "autoplayTimeout": 7000, "autoplayHoverPause": false}'>
				<div class="item slider-one__slide-1" style="height: 100vh;">
					<div class="slider-one__bg" style="background-image: url(assets/images/sliders/man.jpg);height:100VH">
					</div><!-- /.slider-one__bg -->
					<div class="slider-one__shape-1"></div><!-- /.slider-one__shape-1 -->
					<div class="slider-one__shape-2"></div><!-- /.slider-one__shape-2 -->
					<div class="container mobile-padding" style="width:100%;padding-top:50px">
						<div class="slider-one__content text-center">
							<div class="slider-one__floated lettering-text">CAPITALSOFT</div>
							<!-- /.slider-one__floated -->
							<!-- <p class="slider-one__text">Bienvenue sur CapitalSoft</p> -->
							<!-- /.slider-one__text -->
							<div class="slider-one__title-wrapper">
								<h2 class="slider-one__title">La <i><b>performance</b></i> au <br>service de <i><b>l’entreprise</b></i></h2>
								<!-- /.slider-one__title -->
							</div><!-- /.slider-one__title-wrapper -->
							<BR><BR>
							<div class="slider-one__btns">
								<a href="Entreprise" class="thm-btn slider-o ne__btn"><span>Découvrir</span></a>
								<!-- /.thm-btn slider-one__btn -->
							</div><!-- /.slider-one__btns -->
						</div><!-- /.slider-one__content -->
					</div><!-- /.container -->
				</div>
				<!-- /.item -->
				<div class="item slider-one__slide-2" style="height: 100vh;">
					<div class="slider-one__bg" style="background-image: url(assets/images/sliders/mm-05.png);height:100VH">
					</div><!-- /.slider-one__bg -->
					<div class="slider-one__shape-1"></div><!-- /.slider-one__shape-1 -->
					<div class="slider-one__shape-2"></div><!-- /.slider-one__shape-2 -->
					<div class="container mobile-padding" style="width:100%;padding-top:50px">
						<div class="slider-one__content text-center">
							<div class="slider-one__title-wrapper" style="display: flex; justify-content:center;align-items:center;flex-direction:column">
								<img src="assets/images/sliders/s-02.png" class="slider-one__title" alt="" style="max-width: 55%; height: auto;">
								<img src="assets/images/Logo/capitalsoft white.png" class="slider-one__title" alt="" style="height: 110px;width:auto">
							</div><!-- /.slider-one__title-wrapper -->
						</div><!-- /.slider-one__content -->
					</div><!-- /.container -->
				</div><!-- /.item -->
			</div><!-- /.slider-one__carousel -->
		</div><!-- /.slider-one -->


		<div class="container" style="display: none;">
			<div class="row gutter-y-60">
				<div class="col-lg-6">
					<div class="about-four__image">
						<img src="assets/images/resources/experience-knowledge-skills-observation-meet.jpg" class="wow fadeInUp" data-wow-duration="500ms" alt="">
					</div><!-- /.about-four__image -->
				</div><!-- /.col-lg-6 -->
				<div class="col-lg-6">
					<div class="about-four__content">
						<div class="section-title ">
							</BR>
							<p class="section-title__text">Qui sommes-nous</p><!-- /.section-title__text -->

						</div><!-- /.section-title -->

						<div class="about-four__text">Crée depuis 1991, CAPITAL Soft est une société d’études, de développement et d’intégration de solutions informatiques de gestion, leader des solutions informatiques innovantes.
							Née d’une véritable passion pour l’innovation et le développement numérique, CAPITAL Soft offre des solutions IT novatrices, performantes et offre une gamme étendue de prestations et de produits informatiques, adaptée aux besoins de ses clients avec l’accompagnement et l’assistance nécessaires à leur déploiement.

						</div>
						<!-- /.about-four__text -->

						<!--<a href="services-1.html" class="thm-btn about-four__btn"><span>Voir Plus</span></a>-->
						<!-- /.thm-btn about-four__btn -->
					</div><!-- /.about-four__meta -->
				</div><!-- /.about-four__content -->
			</div><!-- /.col-lg-6 -->
		</div><!-- /.row -->
	</div><!-- /.container -->
	</section>

	<section class="section-padding--top section-padding--bottom" id="service">
		<div class="container">
			<div class="section-title text-center">
				<p class="section-title__text">Nos services</p><!-- /.section-title__text -->
				<!-- <h2 class="section-title__title">Nous offrons le meilleur à nos clients
				</h2> -->
				<!-- /.section-title__title -->
			</div><!-- /.section-title -->
			<div class="mb-12" style="margin-top: 20px;" id="developpement_solutions">
				<div class="row g-0">
					<div class="col-md-6 service-mobile">
						<img src="./assets/images/resources/1.png" alt="">
					</div>
					<div class="col-md-6 service-mobile-bg" style="background-image: linear-gradient(to right, rgba(255,255,255,0) 0%, rgba(255,255,255,1) 100%), url('./assets/images/resources/1.png'); background-size: cover;">
						<!-- Empty div for the gradient background -->
					</div>
					<div class="col-md-6">
						<div class="card-body">
							<p class="service-card-two__title text-center">Développement de solutions</p><!-- /.section-title__text -->
							<p><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 256 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
									<style>
										svg {
											fill: #92ed88
										}
									</style>
									<path d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z" />
								</svg> Développement de progiciels de gestion <br>
								<svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 256 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
									<style>
										svg {
											fill: #92ed88
										}
									</style>
									<path d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z" />
								</svg> Intégration de nouvelles technologies <br>
								<svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 256 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
									<style>
										svg {
											fill: #92ed88
										}
									</style>
									<path d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z" />
								</svg> Web / Cloud / Clients serveurs <br>
								<svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 256 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
									<style>
										svg {
											fill: #92ed88
										}
									</style>
									<path d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z" />
								</svg> Internet / Intranet / Commerce électronique
							</p>
							<center>
								<a href="#" class="thm-btn slider-o ne__btn"><span>Voir Plus</span></a>
							</center>
						</div>
					</div>
				</div>
			</div>
			<div class="mb-12" style="margin-top: 20px;" id="support">
				<div class="row g-0">
					<div class="col-md-6 service-mobile">
						<img src="./assets/images/resources/crm.jpg" alt="" sty>
					</div>
					<div class="col-md-6">
						<div class="card-body">
							<p class="service-card-two__title text-center">Support</p><!-- /.section-title__text -->
							<p> <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 256 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
									<style>
										svg {
											fill: #92ed88
										}
									</style>
									<path d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z" />
								</svg> Support de 2ème niveau <br>
								<svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 256 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
									<style>
										svg {
											fill: #92ed88
										}
									</style>
									<path d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z" />
								</svg> Formation, assistance aux utilisateurs <br>
								<svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 256 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
									<style>
										svg {
											fill: #92ed88
										}
									</style>
									<path d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z" />
								</svg> Délégation de personnel<br>
								<svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 256 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
									<style>
										svg {
											fill: #92ed88
										}
									</style>
									<path d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z" />
								</svg> Configuration, installation et administration des serveurs
							</p>
							<center>
								<a href="#" class="thm-btn slider-o ne__btn"><span>Voir Plus</span></a>
							</center>
						</div>
					</div>
					<div class="col-md-6 service-mobile-bg" style="background-image: linear-gradient(to left, rgba(255,255,255,0) 0%, rgba(255,255,255,1) 100%), url('./assets/images/resources/crm.jpg'); background-size: cover;">
						<!-- Empty div for the gradient background -->
					</div>
				</div>
			</div>
			<div class="mb-12" style="margin-top: 20px;" id="conseils&expertise">
				<div class="row g-0">
					<div class="col-md-6 service-mobile">
						<img src="./assets/images/resources/7.png" alt="">
					</div>
					<div class="col-md-6 service-mobile-bg" style="background-image: linear-gradient(to right, rgba(255,255,255,0) 0%, rgba(255,255,255,1) 100%), url('./assets/images/resources/7.png'); background-size: cover;">
						<!-- Empty div for the gradient background -->
					</div>
					<div class="col-md-6">
						<div class="card-body">
							<p class="service-card-two__title text-center">Conseils & Expertise</p><!-- /.section-title__text -->
							<p>Notre entreprise repose sur une équipe expérimentée de professionnels qualifiés, travaillant en étroite collaboration avec nos clients pour comprendre leurs besoins, analyser leur environnement, et leur fournir des conseils stratégiques sur mesure.</p>
							<center>
								<a href="#" class="thm-btn slider-o ne__btn"><span>Voir Plus</span></a>
							</center>
						</div>
					</div>
				</div>
			</div>
		</div>

	</section>

	<section class="section-padding--bottom section-padding--top service-one" style="margin-top: 30PX;" id="solutions">
		<div class="section-title text-center">
			<p class="section-title__text">SOLUTIONS CAPITAL SOFT</p><!-- /.section-title__text -->
			<h2 class="section-title__title">CAPITAL Soft est l’éditeur du système d’information intégré<br>
				«CAPITAL Suite» avec 3 composantes :
			</h2><!-- /.section-title__title -->
		</div><!-- /.section-title -->
		<div class="All-caards">
			<div class="caard">
				<div class="caard-title">
					<a href="#" class="toggle-info btono">
						<span class="left"></span>
						<span class="right"></span>
					</a>
					<h2>
						Capital SIRH
					</h2>
					<br>
					<p>Sont conçues pour soutenir les départements RH en offrant une gamme de fonctionnalités complètes. Elles permettent aux équipes RH de gérer leurs collaborateurs de manière plus efficace et de piloter leurs opérations avec une grande performance.</p>

				</div>
				<div class="caard-flap flap1">
					<div class="caard-actions">
						<a href="Capital SIRH/HRT.php" class="bton">Capital RH paie</a>
					</div>
					<div class="caard-actions">
						<a href="#" class="bton">Capital Time</a>
					</div>
					<div class="caard-actions">
						<a href="#" class="bton">Capital Espace RH</a>
					</div>
				</div>

			</div>
			<div class="caard">

				<div class="caard-title">
					<a href="#" class="toggle-info bton">
						<span class="left"></span>
						<span class="right"></span>
					</a>
					<h2>
						Capital Finance
					</h2>
					<br>
					<p>Sont spécialement conçues pour les équipes financières, offrant une couverture fonctionnelle complète. Elles donnent aux professionnels de la finance une plus grande flexibilité pour gérer l'administration de l'entreprise et piloter ses activités avec une grande efficacité.</p>
				</div>
				<div class="caard-flap flap1">
					<div class="caard-actions">
						<a href="capital finance/COMPTA.php" class="bton">Capital Compta</a>
					</div>
					<div class="caard-actions">
						<a href="capital finance/IMMO.php" class="bton">Capital Immo</a>
					</div>
					<div class="caard-actions">
						<a href="capital finance/LIASSE.php" class="bton">Capital Liasse</a>
					</div>
				</div>
			</div>
			<div class="caard">

				<div class="caard-title">
					<a href="#" class="toggle-info bton">
						<span class="left"></span>
						<span class="right"></span>
					</a>
					<h2>
						Capital Distribution
					</h2>
					<br>
					<p>Sont conçues pour répondre aux besoins des départements Commerciaux, Achats et Stocks. Elles offrent une gamme complète de fonctionnalités, permettant à ces équipes de gérer leur activité commerciale de manière plus agile et de piloter leurs opérations avec une grande performance.</p>
				</div>
				<div class="caard-flap flap1">
					<div class="caard-actions">
						<a href="Capital DISTIBUTION/COMMERCIALE.php" class="bton">Capital Commercial</a>
					</div>
					<div class="caard-actions">
						<a href="Capital DISTIBUTION/POINT_VENTE.php" class="bton">Capital Point de vente</a>
					</div>
					<div class="caard-actions">
						<a href="Capital DISTIBUTION/" class="bton">Capital RESTAURANT COLLECTIF</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Chiffres clés -->

	<section class="funfact-one">
		<div class="container">
			<div class="section-title">
				<p class="section-title__text">NOS CHIFFRES CLÉS</p><!-- /.section-title__text -->
			</div><!-- /.section-title -->
			<div class="funfact-one__inner wow fadeInUp background-size-cover" data-wow-duration="1500ms" style="background-image: url(assets/images/shapes/funfact-one-bg.png);">
				<ul class="funfact-one__list">

					<li class="funfact-one__list__item">
						<h3 class="funfact-one__list__title count-box">
							<span data-stop="132" data-speed="2500" class="count-text">00</span>
						</h3><!-- /.funfact-one__list__title -->
						<p class="funfact-one__list__text">Clients satisfaits</p>
						<!-- /.funfact-one__list__text -->
					</li>
					<li class="funfact-one__list__item">
						<h3 class="funfact-one__list__title count-box">
							<span data-stop="32" data-speed="2500" class="count-text">00</span>
						</h3><!-- /.funfact-one__list__title -->
						<p class="funfact-one__list__text">Années d'expérience</p>
						<!-- /.funfact-one__list__text -->
					</li>
					<li class="funfact-one__list__item">
						<h3 class="funfact-one__list__title count-box">
							<span data-stop="525" data-speed="2500" class="count-text">00</span>
						</h3><!-- /.funfact-one__list__title -->
						<p class="funfact-one__list__text">Projets réussis</p>
						<!-- /.funfact-one__list__text -->
					</li>
				</ul><!-- /.funfact-one__list -->
			</div><!-- /.funfact-one__inner -->
		</div><!-- /.container -->
	</section>
	<!-- END Chiffres clés -->



	<!-- /.client-carousel -->

	<section class="container_client" style="margin-bottom:-107PX ;">
		<div class="section-title" style="padding-bottom:0px">
			<p class="section-title__text">Nos clients</p>
			<h2 class="section-title__title" style="font-family: 'August Script Bold free', regular;font-size:60px;margin-top:-10px">
				Ils nous ont fait confiance
			</h2><!-- /.section-title__title -->
		</div>
		<div class="card__container_client swiper">

			<div class="card__content">
				<div class="swiper-wrapper">
					<?php
					require "actions/connexion/database.php";
					$sql = "SELECT `Logo`FROM `clients` WHERE  `favoris` =1; ";
					$result = $conn->query($sql);

					if ($result->num_rows > 0) {
						while ($row = $result->fetch_assoc()) {; ?>
							<article class="card__article swiper-slide">
								<div class="card__image" style="width: 200PX;height:150PX;display:flex;justify-content:center;padding:5px">
									<img src="images/clients/<?php echo $row['Logo']; ?>" alt="image" class="card__img" style="width:100%;height:auto">
									<div class="card__shadow"></div>
								</div>
							</article>
					<?php
						}
					}; ?>
				</div>
			</div>

			<!-- Navigation buttons -->
			<div class="swiper-button-next">
				<i class="ri-arrow-right-s-line"></i>
			</div>

			<div class="swiper-button-prev">
				<i class="ri-arrow-left-s-line"></i>
			</div>

			<!-- Pagination -->
			<div class="swiper-pagination"></div>
		</div>
	</section>
	<?php
	require "inc/footer.php"; ?>



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
	<script src="script.js"></script>
	<!--=============== SWIPER JS ===============-->
	<script src="assets2/js/swiper-bundle.min.js"></script>

	<!--=============== MAIN JS ===============-->
	<script src="assets2/js/main.js"></script>

	<script>
		// Sélectionnez toutes les divs de contenu des cartes
		var cardContents = document.getElementsByClassName('service-card-one__content');

		// Trouvez la hauteur maximale parmi les divs de contenu
		var maxHeight = 0;
		for (var i = 0; i < cardContents.length; i++) {
			var height = cardContents[i].offsetHeight;
			if (height > maxHeight) {
				maxHeight = height;
			}
		}

		// Appliquez la hauteur maximale à toutes les divs de contenu
		for (var i = 0; i < cardContents.length; i++) {
			cardContents[i].style.height = maxHeight + 'px';
		}
	</script>
	<script>
		$(document).ready(function() {
			$("#subscription-form").submit(function(e) {
				e.preventDefault(); // Prevent the default form submission

				var email = $("#email").val();

				$.ajax({
					type: "POST",
					url: "actions/abonner.php",
					data: {
						EMAIL: email
					},
					success: function(response) {
						if (response === "success") {
							$("#result-message").html("Subscription successful.");
						} else {
							$("#result-message").html("Error: " + response);
						}
					}
				});
			});
		});
	</script>
	<script>
		const handleClickViewMore = (element) => {
			if (element.classList.contains("opened")) {
				element.classList.remove("opened")
			} else {
				element.classList.add("opened")
			}
		}
	</script>
</body>

</html>