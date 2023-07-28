<nav class="main-menu sticky-header">
	<div class="container-fluid">
		<div class="main-menu__logo">
			<a href="index.php">
				<!-- <img src="assets/images/Logo/CapitalSoftLogo.png" width="98" height="auto" alt="Cretech"> -->
				<img src="<?php if($currentpage=="accueil"){
					echo "assets/images/Logo/CapitalSoftLogo.png"  ;
				}else{
					echo "../assets/images/Logo/CapitalSoftLogo.png";
				} ;?>" width="98" height="auto" alt="Cretech">
				<!-- <img src="assets/images/Logo/CapitalSoftLogo.png" width="98" height="33" alt="Cretech"> -->
			</a>
		</div>
		<!-- /.main-menu__logo -->

		<ul class="main-menu__list">
			<li class="menu-item-has-children <?php if($currentpage=="accueil"){
					echo "active"  ;
				} ;?>">
				<a href="<?php if($currentpage=="accueil"){
					echo "./"  ;
				}else{
					echo "../";
				} ;?>">Accueil</a>
			</li>
			<li class="menu-item-has-children <?php if($currentpage=="propos"){
					echo "active"  ;
				} ;?>">
				<?php if($currentpage=="accueil"){
					;?>
					<a href="about">À propos</a>
					<?php
				}else{
					;?>
					<a href="../about">À propos</a>
					<?php
				} ;?>
			</li>
			<li class="menu-item-has-children <?php if($currentpage=="service"){
					echo "active"  ;
				} ;?>" >
				<a href="#">Services</a>
				<ul>
					<li><a href="projects.html">Études et analyses</a></li>
					<li><a href="project-details.html">Développement sur mesure</a></li>
					<li><a href="project-details.html">Intégration de solutions </a></li>
					<li><a href="project-details.html">Formation et support</a></li>
				</ul>
			</li>
			<li class="menu-item-has-children <?php if($currentpage=="solutions"){
					echo "active"  ;
				} ;?>">
				<a href="#">Solutions</a>
				<ul>
					<?php
					if($currentpage=="accueil"){
						;?>
						<li><a href="Capital SIRH">Capital SIRH</a></li>
						<li><a href="Capital FINANCE">Capital FINANCE</a></li>
						<li><a href="Capital DISTIBUTION/">Capital DISTIBUTION</a></li>
						<?php
					}else{
						;?>
						<li><a href="../Capital SIRH">Capital SIRH</a></li>
						<li><a href="../Capital FINANCE">Capital FINANCE</a></li>
						<li><a href="../Capital DISTIBUTION/">Capital DISTIBUTION</a></li>
						<?php
					}
					;?>
					
				</ul>
			</li>
			<li class="menu-item-has-children <?php if($currentpage=="carriere"){
					echo "active"  ;
				} ;?>">
				<?php
					if($currentpage=="accueil"){
						;?>
						<a href="carriere">Carriére</a>
						<?php
					}else{
						;?>
						<a href="../carriere">Carriére</a>
						<?php
					}
					;?>
				
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
					Appelez à tout moment
				</span><!-- /.main-menu__cta__text -->
			</a><!-- /.main-menu__cta -->
		</div><!-- /.main-menu__right -->

	</div><!-- /.container-fluid -->
</nav><!-- /.main-menu -->

