<!DOCTYPE html>
<html>
<head>
		<meta charset="UTF-8">
		<title>Boutiques Lyon</title>
		<link rel="stylesheet" href="css/CSS_Boutique_lyon.css">
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
			        <!--fin de bandeau-->					
			        <div class="boutique_lyon">
								<img 	src=
								<?php
                                    $requete = $sql->query("select `image` from `boutique` where `id`=3")->fetch();
                                    echo "boutiques/".$requete["0"];
                                ?>
										width="480" 
										height="360" 
							>
							
							<h3>Boutique Lyon </h3>
							<p><?php
                                    $requete = $sql->query("select * from `boutique` where `id`=3")->fetch();
									echo $requete["rue"]." , ".$requete["ville"] ." , ".$requete["cp"];
                                ?></p>
							<p><?php
									echo $requete["telephone"];
                                ?></p>
							
					</div>
					<div class="addgooglemaps">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2783.53810399057!2d4.828898615922673!3d45.760405179105604!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47f4ea548d21ef25%3A0x627fef2d3d7fe3a8!2s7%20Quai%20des%20C%C3%A9lestins%2C%2069002%20Lyon!5e0!3m2!1sfr!2sfr!4v1616434655852!5m2!1sfr!2sfr" width="480" height="480" style="border:0;" allowfullscreen="" loading="lazy">
						</iframe>
					</div>
					<div class="texte_boutique">
						<h3>
							Horaires :
						</h3>
						<p><?php
									echo $requete["horaires"];
                                ?>
						</p>
					</div>
	</div>

</body>
</html>