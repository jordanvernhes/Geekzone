<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Boutiques GeekZone</title>
		<link rel="stylesheet" href="css/CSS_Page_Des_Boutiques.css">
	</head>
	<body>
    <?php
            try{
               $sql = new PDO("mysql:host=localhost; dbname=geekzone; charset=utf8","root","");
            }
            catch(Exception $e){
                die("Erreur :" .$e->getMessage());
            }
        ?>
		<div class="principale">
					<!-- Bandeau GeekZone-->	
		        <div class = "GZ">
		            <img src="GZ.png" width="150px" height="150px">
		            <a href="Page_Panier.php"><img src="panier.png" class ="panier" width="100px" height="100px"></a>

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
							<button class="profil"><a href="Page_profil.php">Profil</a></button>
		     		</div>
			        <!--fin de bandeau-->
<!---------------------------------------------------------->

					<div class="boutique_albertville">
						<a href="Boutiques_Albertville.php">
							<img 	src=
                                <?php
                                    $requete = $sql->query("select `image` from `boutique` where `id`=5")->fetch();
                                    echo "boutiques/".$requete["0"];
                                ?>
									width="480" 
									height="360" 
							>
						</a>
								
							<h3>Boutique Albertville </h3>
							<p><?php
                                    $requete = $sql->query("select * from `boutique` where `id`=5")->fetch();
									echo $requete["rue"]." , ".$requete["ville"] ." , ".$requete["cp"];
                                ?></p>
							<p><?php
									echo $requete["telephone"];
                                ?></p>
							
					</div>

<!---------------------------------------------------------->

					<div class="boutique_valence">
							<a href="Boutique_Valence.php">
								<img 	src=
                                <?php
                                    $requete = $sql->query("select `image` from `boutique` where `id`=1")->fetch();
                                    echo "boutiques/".$requete["0"];
                                ?>
										width="480" 
										height="360" 
							>
							</a>
							
							<h3>Boutique Valence </h3>
							<p><?php
                                    $requete = $sql->query("select * from `boutique` where `id`=1")->fetch();
									echo $requete["rue"]." , ".$requete["ville"] ." , ".$requete["cp"];
                                ?></p>
							<p><?php
									echo $requete["telephone"];
                                ?></p>
							
					</div>

<!---------------------------------------------------------->

					<div class="boutique_grenoble">
							<a href="Boutique_Grenoble.php">
								<img 	src=
                                <?php
                                    $requete = $sql->query("select `image` from `boutique` where `id`=2")->fetch();
                                    echo "boutiques/".$requete["0"];
                                ?>
										width="480" 
										height="360" 
							>
							</a>
							
							<h3>Boutique Grenoble </h3>
							<p><?php
                                    $requete = $sql->query("select * from `boutique` where `id`=2")->fetch();
									echo $requete["rue"]." , ".$requete["ville"] ." , ".$requete["cp"];
                                ?></p>
							<p><?php
									echo $requete["telephone"];
                                ?></p>
							
					</div>

<!---------------------------------------------------------->

					<div class="boutique_lyon">
							<a href="Boutique_Lyon.php">
								<img 	src=
                                <?php
                                    $requete = $sql->query("select `image` from `boutique` where `id`=3")->fetch();
                                    echo "boutiques/".$requete["0"];
                                ?>
										width="480" 
										height="360" 
							>
							</a>
							
							<h3>Boutique Lyon </h3>
							<p><?php
                                    $requete = $sql->query("select * from `boutique` where `id`=3")->fetch();
									echo $requete["rue"]." , ".$requete["ville"] ." , ".$requete["cp"];
                                ?></p>
							<p><?php
									echo $requete["telephone"];
                                ?></p>
							
					</div>

<!---------------------------------------------------------->

					<div class="boutique_chambery">
							<a href="Boutiques_Chambery.php">
								<img 	src=
                                <?php
                                    $requete = $sql->query("select `image` from `boutique` where `id`=4")->fetch();
                                    echo "boutiques/".$requete["0"];
                                ?>
										width="480" 
										height="360" 
							>
							</a>
							
							<h3>Boutique Chambery </h3>
							<p><?php
                                    $requete = $sql->query("select * from `boutique` where `id`=4")->fetch();
									echo $requete["rue"]." , ".$requete["ville"] ." , ".$requete["cp"];
                                ?></p>
							<p><?php
									echo $requete["telephone"];
                                ?></p>
							
					</div>

<!---------------------------------------------------------->

					<div class="boutique_annecy">
							<a href="Boutique_Annecy.php">
								<img 	src=
                                <?php
                                    $requete = $sql->query("select `image` from `boutique` where `id`=6")->fetch();
                                    echo "boutiques/".$requete["0"];
                                ?>
										width="480" 
										height="360" 
							>
							</a>
							
							<h3>Boutique Annecy </h3>
							<p><?php
                                    $requete = $sql->query("select * from `boutique` where `id`=6")->fetch();
									echo $requete["rue"]." , ".$requete["ville"] ." , ".$requete["cp"];
                                ?></p>
							<p><?php
									echo $requete["telephone"];
                                ?></p>
							
					</div>

<!---------------------------------------------------------->

					<div class="boutique_clermont">
							<a href="Boutique_Clermont.php">
								<img 	src=
                                <?php
                                    $requete = $sql->query("select `image` from `boutique` where `id`=7")->fetch();
                                    echo "boutiques/".$requete["0"];
                                ?>
										width="480" 
										height="360" 
							>
							</a>
							
							<h3>Boutique Clermont </h3>
							<p><?php
                                    $requete = $sql->query("select * from `boutique` where `id`=7")->fetch();
									echo $requete["rue"]." , ".$requete["ville"] ." , ".$requete["cp"];
                                ?></p>
							<p><?php
									echo $requete["telephone"];
                                ?></p>
							
					</div>
		</div>
	</body>
</html>