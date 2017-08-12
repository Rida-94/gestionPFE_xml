<!DOCTYPE html>
<html lang="fr-FR">
   
	  
<head>

    <meta charset="utf-8" />
	<link href='https://fonts.googleapis.com/css?family=Raleway:400,800,100' rel='stylesheet' type='text/css'>
    <link href='style.css' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.2.0.min.js"></script>
	
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/bootstrap-theme.css" rel="stylesheet">
	<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
	<style type="text/css">
   body { background: #DCDCDC;
		width:100%;   }
   footer {  
    position: absolute; 
    bottom: 0; 
    left: 0; 
    right: 0;	  }
  
</style>
	<script src="js/jquery.js"></script>	
	<script src="js/bootstrap.min.js"></script>
			
    <meta charset="utf-8" />
    <title> gestion des PFE </title>
	<nav class="navbar navbar-ligth w3-blue">
	<div class="navbar-header">
    <div class="col-lg-6">
    <a href="http://www.inpt.ac.ma/"><img src="img/inpt.png" class="img-thumbnail" width="220" height="40"></a>
	</div>
    </div>
        <div class="container-fluid">
          <ul class="nav navbar-nav">
            <li > <a href="Accueil.php"><b>Ajouter</b></a> </li>
			<li > <a href="supprimer.php"><b>Supprimer</b></a> </li>
			<li class="active"> <a href="Afficher.php"><b>Afficher</b></a> </li>
			<li> <a href="ProjetXMLinterface.xml"><b>Liste des PFEs</b></a> </li>
          </ul>
        </div>
      </nav>
</head>
<body>


  <div class="container">
	<header class="page-header" >
    <center><h1><b>Voir les PFE</b></h1></center>
	</header>
	<div class="test">
	
	<?php
    $fichier = "ProjetXMLinterface.xml";
    // Ma propre fonction de traitement du texte
    // qui est appelée par le "parseur"
    function fonctionTexte($parseur, $texte)
    {
        // Dans l'immédiat nous nous contentons d'afficher
        // le texte brut accompagné d'un simple retour à la ligne
		
        echo "<b>".$texte."</b><br/>";
		
    }
    // Création du parseur XML
    $parseurXML = xml_parser_create();

    // Je précise le nom de la fonction a appeler
    // lorsque du texte est rencontré
    xml_set_character_data_handler($parseurXML, "fonctionTexte");

    // Ouverture du fichier
    $fp = fopen($fichier, "r");
    if (!$fp) die("Impossible d'ouvrir le fichier XML");
	

    // Lecture ligne par ligne
    while ( $ligneXML = fgets($fp, 1024)) {
        // Analyse de la ligne
        // REM: feof($fp) retourne TRUE s'il s'agit de la dernière
        //      ligne du fichier.
        xml_parse($parseurXML, $ligneXML, feof($fp)) or
            die("Erreur XML");
    }
    
    xml_parser_free($parseurXML);
    fclose($fp);
?>
	</div>
  </div> 
</body>
<footer class="w3-container w3-blue w3-center">
  <h5>INPT</h5> 
  <p>Copyright © ISMR 2017 </p>
</footer>
</html>