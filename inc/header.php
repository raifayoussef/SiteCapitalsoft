
	<nav class="main-menu sticky-header">
		<div class="container-fluid">
			<div class="main-menu__logo">
				<a href="<?php if($currentpage=="accueil"){
						echo "./"  ;
					}else{
						echo "../";
					} ;?>">
					<!-- <img src="assets/images/Logo/capitalsoft white.png" width="98" height="auto" alt="Cretech"> -->
					<img src="<?php if($currentpage=="accueil"){
						echo "assets/images/Logo/capitalsoft white.png"  ;
					}else{
						echo "../assets/images/Logo/capitalsoft white.png";
					} ;?>" width="150" height="auto" alt="Cretech">
					<!-- <img src="assets/images/Logo/capitalsoft white.png" width="98" height="33" alt="Cretech"> -->
				</a>
			</div>
			<!-- /.main-menu__logo -->

			<ul class="main-menu__list">
				
				<li class="menu-item-has-children <?php if($currentpage=="propos"){
						echo "active"  ;
					} ;?>">
					<?php if($currentpage!="accueil"){
						;?>
						<a href="#" class="menu-item-has-childre">À propos</a>
						<ul>
							<li><a href="../Societe">Societé</a></li>
							<li><a href="../Equipe">Equipe</a></li>
						</ul>
						<?php
					}else{
						;?>
						<a href="#" class="menu-item-has-childre">À propos</a>
						<ul>
							<li><a href="Societe">Société</a></li>
							<li><a href="Equipe">équipe</a></li>
						</ul>
						<?php
					} ;?>
				</li>
				<li class="menu-item-has-children <?php if($currentpage=="service"){
						echo "active"  ;
					} ;?>" >
					<a href="#">Nos Services</a>
					<ul>
						<li><a href="#">Développement de solutions</a></li>
						<li><a href="#">Support</a></li>
						<li><a href="#">Conseils & Expertise</a></li>
					</ul>
				</li>
				<li class="menu-item-has-children <?php if($currentpage=="solutions"){
						echo "active"  ;
					} ;?>">
					<a href="#">Nos Solutions</a>
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
				<li class="menu-item-has-children <?php if($currentpage=="reference"){
						echo "active"  ;
					} ;?>">
					<?php if($currentpage=="accueil"){
						;?>
						<a href="reference">Nos références</a>
						<?php
					}else{
						;?>
						<a href="../reference">Nos références</a>
						<?php
					} ;?>
				</li>
				<li class="menu-item-has-children <?php if($currentpage=="carriere"){
						echo "active"  ;
					} ;?>">
					<?php
						if($currentpage=="accueil"){
							;?>
							<a href="carriere">Nous rejoindre</a>
							<?php
						}else{
							;?>
							<a href="../carriere">Nous rejoindre</a>
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
				<a href="tel:+212522223999" class="main-menu__cta">
					<i class="fa fa-phone-alt" style="color: #A2FF86;"></i>
					<span class="main-menu__cta__text">
						<b>Assistance 24h/24 & 7j/7</b>
						+212 5 22 22 39 99
					</span>
					<!-- /.main-menu__cta__text -->
				</a>
				<!-- /.main-menu__cta -->
			</div>
			<!-- /.main-menu__right -->
		</div><!-- /.container-fluid -->
	</nav><!-- /.main-menu -->
</div>