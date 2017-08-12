<!DOCTYPE html>
<html lang="fr-FR">
    
<head>
	<meta charset="utf-8" />
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/bootstrap-theme.css" rel="stylesheet">
	<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
	<style type="text/css">
   body { background: #DCDCDC;
	width:100%;}
   footer {  position: absolute; 
    bottom: 0; 
    left: 0; 
    right: 0;	  }
</style>
	<script src="js/jquery.js"></script>	
	<script src="js/bootstrap.min.js"></script>
	
	
	<link href='https://fonts.googleapis.com/css?family=Raleway:400,800,100' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.2.0.min.js"></script>
			
    <meta charset="utf-8" />
    <title> gestion des PFE </title>
	<nav class="navbar navbar-ligth w3-blue" >
	<div class="navbar-header">
    <div class="col-lg-6">
    <a href="http://www.inpt.ac.ma/"><img src="img/inpt.png" class="img-thumbnail" width="220" height="40"></a>
	</div>
    </div>
        <div class="container-fluid">
          <ul class="nav navbar-nav">
            <li > <a href="Accueil.php"><b>Ajouter</b></a> </li>
			<li class="active"> <a href="supprimer.php"><b>Supprimer</b></a> </li>
			<li > <a href="Afficher.php"><b>Afficher</b></a> </li>
			<li> <a href="ProjetXMLinterface.xml"><b>Liste des PFEs</b></a> </li>
          </ul>
        </div>
      </nav>
</head>
<body>


<div class="container">
<header class="page-header">
	<center><h1><b>Supprimer un PFE</b></h1></center>
</header>

<script>

function doCheck(){
    var allFilled = true;
    $('input[type=number_format]').each(function(){
        if($(this).val() == ''){
            allFilled = false;
            return false;
        }
    });
    $('input[type=submit]').prop('disabled', !allFilled);
}

$(document).ready(function(){
    $('input[type=number_format]').keyup(doCheck).focusout(doCheck);
});
</script>

<form method="post" action="supprimerPFE.php">
  
  
  <div class="form-group">
    <label for="exampleInput">Identifiant du PFE</label>
    <input type="number_format" class="form-control" id="ID1" onkeypress='return event.charCode >= 48 && event.charCode <= 57' required="required" placeholder="Identifiant du PFE à Supprimer" name="ID1">
  </div>
  
  <!--div class="col-sm-4">
  <button type="submit" class="btn_send" >Supprimer</button>
  </div-->
  
  <div class="col-sm-4"></div>
  <div class="col-sm-4">
  <!--button type="submit" class="btn btn-success btn-block" name="submit" id="submit" >Ajouter</button-->
  <input type="submit" disabled class="btn btn-danger btn-block" value="Supprimer" name="submit" onclick=""/>
  </div>
  
  </div> 
  
  
     
  
  
</body>

<footer class="w3-container w3-blue w3-center">
  <h5>INPT</h5> 
  <p>Copyright © ISMR 2017 </p>
</footer>
</html>