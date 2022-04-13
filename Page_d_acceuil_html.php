<!DOCTYPE HTML>
<html>	

    <head>
        <meta charset="UTF-8">
        <link rel = "stylesheet" href ="css/acceuilcss.css"/>
    </head>
	<body>
		<!-- Bandeau GeekZone-->	
        <div class = "GZ">
            <img src="GZ.png" width="150px" height="150px">
            <a href="Page_Panier.html"><img src="panier.png" class ="panier" width="100px" height="100px"></a>
        </div>
        <!-- Bandeau Recherche-->
            <title>Page d'acceuil</title>
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
                        <div id ="rechercher" class="recherche">
                            <input type="search" id="search"value="" >
                        </div>
					<button class="profil"><a href="Page_profil.html">Profil</a></button>
     		</div>
     		<!-- Produits Phare -->
        <?php
            try{
               $sql = new PDO("mysql:host=localhost; dbname=geekzone; charset=utf8","root","");
            }
            catch(Exception $e){
                die("Erreur :" .$e->getMessage());
            }
        ?>
     	<div class="phare">
     		<img class="pproduit1" src=
                                <?php
                                $requete = $sql->query("select * from `produit` where `produit_id`=5")->fetch();
                                $categorie = $sql->query("select `libelle` from `categorie` where `categorie_id` = ".$requete["categorie"])->fetch();
                                echo $categorie[0]."/".$requete["image"];
                                ?> width="300px" height="300px">
     		<img class="pproduit2" src=
                                <?php
                                $requete = $sql->query("select * from `produit` where `produit_id`=13")->fetch();
                                $categorie = $sql->query("select `libelle` from `categorie` where `categorie_id` = ".$requete["categorie"])->fetch();
                                echo $categorie[0]."/".$requete["image"];
                                ?> width="300px" height="300px">
     		<img class="pproduit3" src=
                                <?php
                                $requete = $sql->query("select * from `produit` where `produit_id`=16")->fetch();
                                $categorie = $sql->query("select `libelle` from `categorie` where `categorie_id` = ".$requete["categorie"])->fetch();
                                echo $categorie[0]."/".$requete["image"];
                                ?> width="300px" height="300px">
     	</div>
     	<div class= "Contact">
            	<button class="button"><a href="https://www.instagram.com/thegeekzone.official/?hl=fr">Instagram</a></button>
        </div> 
        <div class= "Contact2">
             	<button id="btnPopup"class="btnPopup"><a>Snapchat</a></button>
            </div>
         <div id="overlay" class="overlay">
             <div id='popup' class="popup">
                <h2>
                    <img 	src="SnapGeekzone.jpg"
										width="480" 
										height="360" 
							>
                    <span id="btnClose" class="btnClose">&times;</span>
                </h2>
             </div>
         </div>
         <script src="popup.js"></script>
</html>