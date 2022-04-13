<DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
			<title>Mug Pac-man Chaud Froid</title>
			<link rel="stylesheet" href="css/CSS_Mug_Pac-man.css">
</head>
<body>
	<div class="principal">
		<div class = "GZprincip">
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
								<img 	src=

								<?php
								$nomFichierXml = "GeekZone_Gamme.XML";
								$xml = simplexml_load_file($nomFichierXml);
								echo $xml -> cuisine -> article2 -> photoArticle_1 ;
								?>

										width="480"
										height="360" 
								>
						</div>
					</div>
						<div class="objet1text">
								
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
							
							
						</div>
						<div class="prix">
							
								<h2>
									<?php
								echo $xml -> cuisine -> article2 -> prixArticle."€" ;
								?>
									
								</h2>
							
						</div>
						<div class="quantite">
							<select name="pets" id="nb-select" >
							    <option value="">0</option>
							    <option value="un">1</option>
							    <option value="deux">2</option>
							    <option value="trois">3</option>
							    <option value="quatre">4</option>
							    <option value="cinq">5</option>
							    <option value="six">6</option>
							    <option value="sept">7</option>
							    <option value="huit">8</option>
							    <option value="neuf">9</option>
							    <option value="dix">10</option>
							</select>
	             			</div>
	             			<div class="acheter">
	             				<a href="" class="bouton1">Acheter</a>
	             			</div>
	             			<div class="ajouterpanier">
	             				<a href="" class="bouton2">Ajouter aux panier</a>
	             			</div>
		</div>
</body>
</html>