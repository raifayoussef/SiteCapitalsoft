<br><br>
<div class="footer-main section-padding--bottom footer-main--top-padding">
			<div class="container">
				<div class="row gutter-y-30">
					<div class="col-lg-3 col-md-6 col-sm-12">
						<div class="footer-widget footer-widget--about ">
							<a href="index.html" class="footer-widget__logo">
								<?php
								if($currentpage=='accueil'){
									;?>
									<img src="assets/images/Logo/capitalsoft white.png" width="250" height="auto" alt="Cretech" >
									<?php
								}else{
									?>
									<img src="../assets/images/Logo/capitalsoft white.png" width="250" height="auto" alt="Cretech" >
									<?php
								}
								;?>
							</a>
							<p class="footer-widget__text">We work with a passion of taking challenges and creating new
								ones in advertising sector.</p><!-- /.footer-widget__text -->
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
									<a href="service-cyber-security.html">Études et analyses</a>
								</li>
								<li>
									<a href="service-it-management.html">Développement sur mesure</a>
								</li>
								<li>
									<a href="service-qa-testing.html">Intégration de solutions</a>
								</li>
								<li>
									<a href="service-infrastructure-plan.html">Formation et support</a>
								</li>

							</ul><!-- /.footer-widget__links -->
						</div><!-- /.footer-widget -->
					</div><!-- /.col-lg-3 col-md-6 col-sm-12 -->
					<div class="col-lg-3 col-md-6 col-sm-12">
						<div class="footer-widget footer-widget--newsletter">
							<h3 class="footer-widget__title">S'abonner</h3><!-- /.footer-widget__title -->
							<p class="footer-widget__text">Abonnez-vous pour recevoir les derniers articles</p>
							<!-- /.footer-widget__text -->
							<form action="actions/abonner.php" class="footer-widget__newsletter" method="POST" id="subscription-form">
								<input type="email" name="EMAIL" id="email" placeholder="Entrez votre adresse E-mail">
								<button class="thm-btn" type="submit" id="subscribe-button"><span>S'inscrire</span></button>
							</form>
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
							<?php if($currentpage!="accueil"){
						;?>
							<a href="../contact" class="thm-btn footer-widget__newsletter__btn"><span> Contactez-nous </span></a>
						<?php
					}else{
						;?>
							<a href="contact" class="thm-btn footer-widget__newsletter__btn"><span> Contactez-nous </span></a>
						<?php
					} ;?>
						</div><!-- /.footer-widget -->
					</div><!-- /.col-lg-3 col-md-6 col-sm-12 -->
				</div><!-- /.row -->
			</div><!-- /.container -->
		</div><!-- /.footer-main -->
		<div class="footer-bottom">
			<div class="container">
				<p>&copy; Tous droits d'auteur <span class="dynamic-year"></span> par CapitalSoft	</p>
			</div><!-- /.container -->
		</div><!-- /.footer-bottom -->
