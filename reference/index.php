<!DOCTYPE html>
<html lang="en">
<?php 
$currentpage="reference";
;?>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>About Us || Cretech || IT Solutions & Services HTML Template</title>
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
	<style>
	.tablink2 {
		background-color: #174b60;
		color: white;
		cursor: pointer;
		padding: 14px 16px;
		font-size: 17px;
		width: auto ;
		margin: 3px;
		border-radius: 10px;
		justify-content: center;
		display: inline-block;
		transition: 0.5s;
  	}
  
  .tablink2:hover {
    background-color: #a2ff86;
	color: #174b60;
  }
  
  /* Style the tab content (and add height:100% for full page content) */
  .tabcontent2 {
    color: rgb(255, 0, 0);
    display: none;
    padding: 100px 20px;
    height: 100%;
  }
  
  #Home {background-color:#a2ff8600;}
  #News {background-color: #17298300;}
  #Contact {background-color: #a2ff8600;}
  #About {background-color: #17298300;}
  #Ab {background: #a2ff8600;}


  .card {
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    transition: 0.3s;
    width:150px;
    display: inline-block;
    margin: 15px;
  }
  
  .card:hover {
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
  }
  .card img {
  width:100%;
}
.map-responsive{

    overflow:hidden;

    padding-bottom:56.25%;

    position:relative;

    height:0;

}

.map-responsive iframe{

    left:0;

    top:0;

    height:100%;

    width:100%;

    position:absolute;

}
	</style>
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
				style="background-image: url(../assets/images/background/grand.jpg);"></div>
			<!-- /.page-header__bg -->
			<div class="container">
				<ul class="thm-breadcrumb list-unstyled">
					<li><a href="../">Accueil</a></li>
					<li>NOS RÉFÉRENCES</li>
				</ul>
				<h2 class="page-header__title">Societé</h2><!-- /.page-header__title -->
			</div><!-- /.container -->
		</div><!-- /.page-header -->
	<section class="clients1" style="min-height: 78VH;">
        <center>
    <button class="tablink2" onclick="openPage2('toutes', this, '#1f1b3d')" id="defaultOpen2">Tous les clients</button>
    <button class="tablink2" onclick="openPage2('Home', this, '#1f1b3d')">Ministères, Administrations et Entreprises Publiques</button>
    <button class="tablink2" onclick="openPage2('News', this, '#1f1b3d')">Banques et Assurances</button>
    <button class="tablink2" onclick="openPage2('Contact', this, '#1f1b3d')">Industries et BTP</button>
    <button class="tablink2" onclick="openPage2('About', this, '#1f1b3d')">Education</button>
    <button class="tablink2" onclick="openPage2('Ab', this, '#1f1b3d')">Services</button>

    <div id="toutes" class="tabcontent2">
		<?php 
		$conn = mysqli_connect("localhost" , "root" ,"" ,"capitalsoft");
		if ($conn->connect_error){
			die("Connection Failed:" .$conn-> connect_error);
		}
		$sql ="SELECT `Logo`,`NomClient` FROM `clients` ; ";
		$result =$conn->query($sql);
		
			if($result-> num_rows >0){
			while($row = $result ->fetch_assoc()){
		?>
		<div class="card"><?php echo '<img src="../images/clients/'.$row['Logo'].'" alt="Image">'; ?> 
			
		</div>
			
		<?php
			}
			
			}
			else{
			echo" 0 result";
			}
			$conn->close();
		
		?>
    </div>
      
      
    <div id="Home" class="tabcontent2">
		<?php 
		$conn = mysqli_connect("localhost" , "root" ,"" ,"capitalsoft");
		if ($conn->connect_error){
			die("Connection Failed:" .$conn-> connect_error);
		}
		$sql ="SELECT `Logo` FROM `clients` WHERE categorie='Ministères, Administrations et Entreprises Publiques'; ";
		$result =$conn->query($sql);
		
			if($result-> num_rows >0){
			while($row = $result ->fetch_assoc()){
		?>
		<div class="card"><?php echo '<img src="../images/clients/'.$row['Logo'].'" alt="Image">' ; ?> </div>
			
		<?php
			}
			echo "</div>";
			}
			else{
			echo" 0 result </div>";
			}
			$conn->close();
		
		?>

    <div id="News" class="tabcontent2">
      <?php 
      $conn = mysqli_connect("localhost" , "root" ,"" ,"capitalsoft");
      if ($conn->connect_error){
        die("Connection Failed:" .$conn-> connect_error);
       }
      $sql ="SELECT `Logo` FROM `clients` WHERE categorie='Banque Et Assurance'; ";
      $result =$conn->query($sql);
     
        if($result-> num_rows >0){
          while($row = $result ->fetch_assoc()){
    ?>
       <div class="card"><?php echo '<img src="../images/clients/'.$row['Logo'].'" alt="Image">' ; ?> </div>
          
    <?php
          }
          echo "</div>";
        }
        else{
          echo" 0 result </div>";
        }
        $conn->close();
      
    ?>

      
      <div id="Contact" class="tabcontent2">
      <?php 
      $conn = mysqli_connect("localhost" , "root" ,"" ,"capitalsoft");
      if ($conn->connect_error){
        die("Connection Failed:" .$conn-> connect_error);
       }
      $sql ="SELECT `Logo` FROM `clients` WHERE categorie='Industrie Et BTP'; ";
      $result =$conn->query($sql);
     
        if($result-> num_rows >0){
          while($row = $result ->fetch_assoc()){
    ?>
       <div class="card"><?php echo '<img src="../images/clients/'.$row['Logo'].'" alt="Image">' ; ?> </div>
          
    <?php
          }
          echo "</div>";
        }
        else{
          echo" 0 result </div>";
        }
        $conn->close();
      
    ?>
      
      
      <div id="About" class="tabcontent2">
      <?php 
      $conn = mysqli_connect("localhost" , "root" ,"" ,"capitalsoft");
      if ($conn->connect_error){
        die("Connection Failed:" .$conn-> connect_error);
       }
      $sql ="SELECT `Logo` FROM `clients` WHERE categorie='Education'; ";
      $result =$conn->query($sql);
     
        if($result-> num_rows >0){
          while($row = $result ->fetch_assoc()){
    ?>
       <div class="card"><?php echo '<img src="../images/clients/'.$row['Logo'].'" alt="Image">' ; ?> </div>
          
    <?php
          }
          echo "</div>";
        }
        else{
          echo" 0 result </div>";
        }
        $conn->close();
      
    ?>
      
      <div id="Ab" class="tabcontent2">
      <?php 
      $conn = mysqli_connect("localhost" , "root" ,"" ,"capitalsoft");
      if ($conn->connect_error){
        die("Connection Failed:" .$conn-> connect_error);
       }
      $sql ="SELECT `Logo` FROM `clients` WHERE categorie='Services'; ";
      $result =$conn->query($sql);
     
        if($result-> num_rows >0){
          while($row = $result ->fetch_assoc()){
    ?>
       <div class="card"><?php echo '<img src="../images/clients/'.$row['Logo'].'" alt="Image">' ; ?> </div>
          
    <?php
          }
          echo "</div>";
        }
        else{
          echo" 0 result </div>";
        }
        $conn->close();
      
    ?>
      </div>
    </center>
</section>

		<?php
		require "../inc/footer.php"; 
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

	<script>
		function openPage2(pageName2,elmnt,color) {
      var i, tabcontent2, tablinks2;
      tabcontent2 = document.getElementsByClassName("tabcontent2");
      for (i = 0; i < tabcontent2.length; i++) {
        tabcontent2[i].style.display = "none";
      }
      tablinks2 = document.getElementsByClassName("tablink2");
      for (i = 0; i < tablinks2.length; i++) {
        tablinks2[i].style.backgroundColor = "";
      }
      document.getElementById(pageName2).style.display = "block";
      elmnt.style.backgroundColor = color;
    }
    
    // Get the element with id="defaultOpen" and click on it
    document.getElementById("defaultOpen2").click();
	</script>
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