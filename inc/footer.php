<br><br>
<div class="footer-main section-padding--bottom footer-main--top-padding">
	<div class="container">
		<div class="row gutter-y-30">
			<div class="col-lg-3 col-md-6 col-sm-12">
				<div class="footer-widget footer-widget--about ">
					<a href="index.html" class="footer-widget__logo">
						<?php
						if ($currentpage == 'accueil') {; ?>
							<img src="assets/images/Logo/capitalsoft white.png" width="250" height="auto" alt="Cretech">
						<?php
						} else {
						?>
							<img src="../assets/images/Logo/capitalsoft white.png" width="250" height="auto" alt="Cretech">
						<?php
						}; ?>
					</a>
					<p class="footer-widget__text">Nous travaillons avec passion pour relever des défis et en créer de nouveaux dans le secteur Informatique.</p><!-- /.footer-widget__text -->
					<ul class="footer-widget__social">
						<li><a href="https://www.facebook.com/profile.php?id=61551832514043" target="_blank"><i class="fab fa-facebook"></i></a></li>
						<li><a href="https://www.instagram.com/capitalsoft.ma/" target="_blank"><i class="fab fa-instagram"></i></a></li>
						<li><a href="https://www.linkedin.com/in/capital-soft-234418227/" target="_blank"><i class="fab fa-linkedin"></i></a></li>
					</ul><!-- /.footer-widget__social -->
				</div><!-- /.footer-widget -->
			</div><!-- /.col-lg-3 col-md-6 col-sm-12 -->
			<div class="col-lg-3 col-md-6 col-sm-12">
				<div class="footer-widget footer-widget--links">
					<h3 class="footer-widget__title">Services</h3><!-- /.footer-widget__title -->
					<ul class="footer-widget__links">
						<li>
							<a href="#">Développement de solutions</a>
						</li>
						<li>
							<a href="#">Support</a>
						</li>
						<li>
							<a href="#">Conseils & Expertise</a>
						</li>

					</ul><!-- /.footer-widget__links -->
				</div><!-- /.footer-widget -->
			</div><!-- /.col-lg-3 col-md-6 col-sm-12 -->
			<div class="col-lg-3 col-md-6 col-sm-12">
				<div class="footer-widget footer-widget--newsletter">
					<h3 class="footer-widget__title">S'abonner</h3><!-- /.footer-widget__title -->
					<p class="footer-widget__text">Abonnez-vous pour recevoir les derniers articles</p>
					<!-- /.footer-widget__text -->
					<?php
					if ($currentpage != "accueil") {; ?>
						<form action="../actions/abonner.php" class="footer-widget__newsletter" method="POST" id="subscription-form">
							<input type="email" name="EMAIL" id="email" placeholder="Entrez votre adresse E-mail">
							<button class="thm-btn" type="submit" id="subscribe-button"><span>S'inscrire</span></button>
						</form>
						<script src="../assets/vendors/jquery/jquery-3.6.0.min.js"></script>
						<script>
							$(document).ready(function() {
								$("#subscription-form").submit(function(e) {
									e.preventDefault(); // Prevent the default form submission

									var email = $("#email").val();

									$.ajax({
										type: "POST",
										url: "../actions/abonner.php",
										data: {
											EMAIL: email
										},
										success: function(response) {
											if (response === "success") {
												$("#result-message").html("Subscription successful.");
												$("#email").val('');
											} else {
												$("#result-message").html("Error: " + response);
											}
										}
									});
								});
							});
						</script>
					<?php
					} else {; ?>
						<form action="actions/abonner.php" class="footer-widget__newsletter" method="POST" id="subscription-form">
							<input type="email" name="EMAIL" id="email" placeholder="Entrez votre adresse E-mail">
							<button class="thm-btn" type="submit" id="subscribe-button"><span>S'inscrire</span></button>
						</form>
					<?php
					}; ?>

					<div id="result-message"></div>
					<div class="mc-form__response"></div><!-- /.mc-form__response -->
				</div><!-- /.footer-widget -->
			</div><!-- /.col-lg-3 col-md-6 col-sm-12 -->
			<div class="col-lg-3 col-md-6 col-sm-12">
				<div class="footer-widget footer-widget--contact">
					<h3 class="footer-widget__title">Contact</h3><!-- /.footer-widget__title -->
					<ul class="footer-widget__contact">
						<li>
							<i class="fa fa-phone"></i>
							<a href="tel:+212522223999">+212 5 22 22 39 99</a>
						</li>
						<li>
							<i class="fa fa-envelope"></i>
							<!-- <a href="mailto:needhelp@company.com">needhelp@company.com</a> -->
							<a href="mailto:capitalsoft@capitalsoft.ma">capitalsoft@capitalsoft.ma</a>
						</li>
						<li>
							<i class="fa fa-map-marker-alt"></i>
							Residence titrit 2 Immeuble B,<br> Rue Hadj Omar Riffi, Casablanca
						</li>
					</ul><!-- /.footer-widget__contact -->
					<?php if ($currentpage != "accueil") {; ?>
						<a href="../contact" class="thm-btn footer-widget__newsletter__btn"><span> Contactez-nous </span></a>
					<?php
					} else {; ?>
						<a href="contact" class="thm-btn footer-widget__newsletter__btn"><span> Contactez-nous </span></a>
					<?php
					}; ?>
				</div><!-- /.footer-widget -->
			</div><!-- /.col-lg-3 col-md-6 col-sm-12 -->
		</div><!-- /.row -->
	</div><!-- /.container -->
</div><!-- /.footer-main -->
<div class="footer-bottom">
	<div class="container">
		<p>&copy; Tous droits d'auteur <span class="dynamic-year"></span> par CapitalSoft </p>
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
			<?php
			if ($currentpage != 'accueil') {; ?>
				<a href="index.html" aria-label="logo image"><img src="../assets/images/Logo/capitalsoft white.png" width="98" height="33" alt="Cretech"></a>
			<?php
			} else {; ?>
				<a href="index.html" aria-label="logo image"><img src="assets/images/Logo/capitalsoft white.png" width="98" height="33" alt="Cretech"></a>
			<?php
			}; ?>
		</div>
		<!-- /.logo-box -->
		<div class="mobile-nav__container"></div>
		<!-- /.mobile-nav__container -->

		<ul class="mobile-nav__contact list-unstyled">
			<li>
				<i class="fa fa-phone"></i>
				<a href="tel:+212522223999">+212 5 22 22 39 99</a>
			</li>
			<li>
				<i class="fa fa-envelope"></i>
				<a href="mailto:capitalsoft@capitalsoft.ma">capitalsoft@capitalsoft.ma</a>
			</li>
			<li>
				<i class="fa fa-map-marker-alt"></i>
				<a href="https://www.google.com/maps/place/Capital+Soft+SARL/@33.5850195,-7.6150659,17z/data=!3m1!4b1!4m6!3m5!1s0xda632cb3452d5e9:0x6a60fa93c1ec2e25!8m2!3d33.5850151!4d-7.612491!16s%2Fg%2F11b6hz06yk?entry=ttu" target="_blank">Residence titrit 2 Immeuble B, <br> Rue Hadj Omar Riffi, Casablanca</a>
			</li>
		</ul><!-- /.mobile-nav__contact -->
		<ul class="mobile-nav__social">
			<li><a href="https://www.facebook.com/profile.php?id=61551832514043" target="_blank"><i class="fab fa-facebook"></i></a></li>
			<li><a href="https://www.instagram.com/capitalsoft.ma/" target="_blank"><i class="fab fa-instagram"></i></a></li>
			<li><a href="https://www.linkedin.com/in/capital-soft-234418227/" target="_blank"><i class="fab fa-linkedin"></i></a></li>
		</ul><!-- /.mobile-nav__social -->



	</div>
	<!-- /.mobile-nav__content -->
</div>
<!-- /.mobile-nav__wrapper -->