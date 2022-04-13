<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
			<title>Objet Cuisine</title>
			<link rel="stylesheet" href="css/CSS_Objet_Cuisine.css">
	</head>
	<body>
		<div class="principale">
					<!-- Bandeau GeekZone-->	
        <div class = "GZ">
            <img src="GZ.png" width="150px" height="150px">
            <a href="Page_Panier.html"><img src="panier.png" class ="panier" width="100px" height="100px"></a>

        </div>
            <br>
			<div class= "NavBar">
            	<button class="button"><a href="Page_d_acceuil_html.php">Acceuil</a></button>
             	<button class="button"><a href="Page_Des_Boutiques.php">Nos Boutiques</a></button>    
            		<div class="dropdown">	             
             	 		<button class="dropbtn"><a href=>Nos Produits</a></button>
                    		<div class="dropdown-content">
             					<a href="Page_Objet_Cuisines.php">Cuisine</a>
             					<a href="Page_Objet_gadget.php">Gadget</a>   
	             				<a href="Page_Objet_mode.php">Mode</a>   
	             				<a href="Page_Objet_Portable.php">Portable</a>    
	             				<a href="Page_Objet_USB.php">USB</a>  
	             			</div>
             			  
     					</div>
					<button class="profil"><a href="Page_profil.html">Profil</a></button>
     		</div>
			        <div class="objet1">
						<a href="magnets_fridgebook.php">
							<img 	src=

								<?php
								$nomFichierXml = "GeekZone_Gamme.XML";
								$xml = simplexml_load_file($nomFichierXml);
								echo $xml -> cuisine -> article3 -> photoArticle_1 ;
								?>
									width="480"
									height="360" 
									>
							
							
							<h2>
								<?php
								echo $xml -> cuisine -> article3 -> nomArticle ;
								?>
									
							</h2>
							<h3>

								<?php
								echo $xml -> cuisine -> article3 -> designationArticle ;
								?>

							</h3>
							<h2>
								<?php
								echo $xml -> cuisine -> article3 -> prixArticle."€" ;
								?>
									
								</h2>
							
						</a>	
					</div>
					<div class="objet2">
						<a href="Mug_Pac-man.php">
							<img 	src=

								<?php
								$nomFichierXml = "GeekZone_Gamme.XML";
								$xml = simplexml_load_file($nomFichierXml);
								echo $xml -> cuisine -> article2 -> photoArticle_1 ;
								?>
									width="480"
									height="360" 
									>
							
							
							<h2>
								<?php
								echo $xml -> cuisine -> article2 -> nomArticle ;
								?>
									
							</h2>
							<h3>

								<?php
								echo $xml -> cuisine -> article2 -> designationArticle ;
								?>

							</h3>
							<h2><?php
								echo $xml -> cuisine -> article2 -> prixArticle."€" ;
								?></h2>
							
						</a>	
					</div>
					<div class="objet3">
						<a href="Glacon_tetris.php">
							<img 	src=

								<?php
								$nomFichierXml = "GeekZone_Gamme.XML";
								$xml = simplexml_load_file($nomFichierXml);
								echo $xml -> cuisine -> article1 -> photoArticle_1 ;
								?>
									width="480"
									height="360" 
									>
							
							
							<h2>
								<?php
								echo $xml -> cuisine -> article1 -> nomArticle ;
								?>
									
							</h2>
							<h3>

								<?php
								echo $xml -> cuisine -> article1 -> designationArticle ;
								?>

							</h3>
							<h2>
								<?php
								echo $xml -> cuisine -> article1 -> prixArticle."€" ;
								?>
									
								</h2>
							
						</a>
					</div>
		</div>
	</body>
</html>