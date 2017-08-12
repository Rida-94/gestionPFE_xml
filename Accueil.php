<!DOCTYPE html>
<html lang="fr-FR">
<head>


  <meta charset="utf-8">
  <title> gestion des PFE </title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<link href='https://fonts.googleapis.com/css?family=Raleway:400,800,100' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.2.0.min.js"></script>
	
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/bootstrap-theme.css" rel="stylesheet">
	<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
	<script src="http://code.jquery.com/jquery-1.5.js"></script>
 
	<style type="text/css">
	
#progression {
    position:fixed;
    top: 0;
    height: 1px;
    width: 100%;
    background: #DCDCDC;
    z-index: 200;
    transition: all 0.3s ease;    
}
 
#barre {
    position: absolute;
    top: 0;
    background-color: #1E90FF;
    width: 0%;
    height: 100%;
    transition: all 0.3s;
}
 
.progression-titre {
	position: absolute;
	top: 0;
	z-index: 100;
	padding: 5px 0;
	color: #ffffff;
	width: 100%;
	text-align: center;
	opacity: 0;
	transition: all 0.3s ease;
}
	
	
	
   body { background: #DCDCDC;
          width:100%;   }
   
   #myBtn {
  display: none;
  position: fixed;
  bottom: 78px;
  right: 15px;
  
  border: none;
  outline: none;
  background-color: none;
  color: white;
  cursor: pointer;
  padding: 0px;
  border-radius: 0px;
}

#myBtn:hover {
  background-color: #DCDCDC;
}
  
</style>
	
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script type="text/javascript" src="js/jquery.ui.datepicker-fr.js"></script>
 
	<nav class="navbar navbar-ligth w3-blue">
	<div class="navbar-header">
    <div class="col-lg-6">
    <a href="http://www.inpt.ac.ma/"><img src="img/inpt.png" class="img-thumbnail" width="220" height="40"/></a>
	</div>
    </div>
        <div class="container-fluid">
          <ul class="nav navbar-nav">
            <li class="active"> <a href="Accueil.php"><b>Ajouter</b></a> </li>
			<li> <a href="supprimer.php"><b>Supprimer</b></a> </li>
			<li> <a href="Afficher.php"><b>Afficher</b></a> </li>
			<li> <a href="ProjetXMLinterface.xml"><b>Liste des PFEs</b></a> </li>
          </ul>
		   <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>

        </div>
    </nav>
	  
	  
	  
<script>
// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    //document.body.scrollTop = 0;
    //document.documentElement.scrollTop = 0;
	$('html,body').animate({scrollTop: 0}, 'slow');
}


var $ = jQuery.noConflict();
$(window).scroll(function() {
 
    //Calcule la hauteur de la page entière
    var h = $(document).height();
    //Détermine la position de la page
    var s = $(window).scrollTop();
    //Calcule la hauteur de page visible
    var w = $(window).height();
    
    //Formule mathématique pour calculer p le pourcentage de progression
    var t = (s / h) * w;
    var p = Math.ceil((s + t) / h * 110) + 1;
 
    //Agrandit la barre de progression en fonction de p
    $('#barre').width(p + '%');
    if (s > 150){
      //Modification CSS si l'utilisauter a scrollé plus de 150px
      $('#barre').height(39);
      $('#progression').css('height', '39px');   
      $('.progression-titre').css('opacity', '1');   
      $('.progression-titre').css('display', 'block');  
    }else{
      //Modification CSS si l'utilisateur a scrollé moins de 150px
      $('#barre').height(3);  
      $('#progression').css('height', '3px');
      $('.progression-titre').css('opacity', '0'); 
      $('.progression-titre').css('display', 'none');        
    }
});

$( function() {
    $( '#exampleInputD' ).datepicker( $.datepicker.regional[ 'fr' ] );
  } );
$( function() {
    $( '#exampleInputF' ).datepicker($.datepicker.regional[ 'fr' ]);
  } );
$( function() {
    $( '#exampleInputS' ).datepicker($.datepicker.regional[ 'fr' ]);
  } );

</script>
</head>
  
 
<body>

<div id="progression">
     <div id="barre"></div>
     <div class="progression-titre"><strong>Please complete all fields</strong></div>
</div>

<div class="container">
<header class="page-header">
<center><h1><b>Ajouter un PFE</b></h1></center>
</header>

<button onclick="topFunction()" id="myBtn" title="Go to top"><img src="img/Top1.png" height="40px" width="40px" /></button>
  
  
<form method="post" action="ajouterPFE.php" role="form">
  

  <div class="panel-group" id="accordion">
  
  <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#">Identifiant du PFE (*)</a>
        </h4>
      </div>
      <div id="collapse0" >
        <div class="panel-body">
		 <div class="form-group col-xs-4">
    <label for="exampleInput">Identifiant du PFE (*)</label>
    <input type="number_format" class="form-control" required="required" onkeypress='return event.charCode >= 48 && event.charCode <= 57' id="exampleInput" placeholder="Identifiant" name="ID">
     </div>
	 </div>
     </div>
	 </div>
  
  
  
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#">Informations sur l'étudiant</a>
        </h4>
      </div>
      <div id="collapse1" >
        <div class="panel-body">
			
  <div class="row">
  <div class="col-sm-1"></div>
  <div class="col-sm-6">  
	   
   <div class="form-group">
    <label for="exampleInput">Nom de l'étudiant (*)</label>
    <input type="text" class="form-control" id="exampleInput" required="required"  name="nomEtud">
  </div>
  
    <div class="form-group">
    <label for="exampleInput">Prénom de l'étudiant (*)</label>
    <input type="text" class="form-control" id="exampleInput" required="required"  name="prenETu">
  </div>
  
    <div class="form-group">
    <label for="exampleInput">Mail de l'étudiant</label>
    <input type="email" pattern="[^ @]*@[^ @]*" class="form-control" id="exampleInput"  name="mailETu">
  </div>
  
    <div class="form-group">
    <label for="exampleInput">Téléphone de l'étudiant</label>
    <input type="number_format" class="form-control" id="exampleInput" name="teleETu">
  </div>
  
    <div class="form-group">
    <label for="exampleInput">Option</label>
    <input type="text" class="form-control" id="exampleInput" name="OptionETu">
  </div>
  </div>
  </div>
		
		</div>
      </div>
    </div>
	
	
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#">Informations sur l'entreprise et Le Stage</a>
        </h4>
      </div>
      <div id="collapse2" >             <!-- class="panel-collapse collapse" -->
        <div class="panel-body">
			
  <div class="row">
  <div class="col-sm-1"></div>
  <div class="col-sm-6">
    <div class="form-group">
    <label for="exampleInput">Intitulé Du Stage (*)</label>
    <input type="text" class="form-control" id="exampleInput" required="required" name="Intitule">
  </div>
  
    <div class="form-group">
    <label for="exampleInput">Date de début de Stage</label>
    <input type="text" class="form-control" id="exampleInputD" name="Dated"/>
  </div>
  
    <div class="form-group">
    <label for="exampleInput">Date de Fin du Stage</label>
    <input type="text" class="form-control" id="exampleInputF" name="DateF">
  </div>
  
    <div class="form-group">
    <label for="exampleInput">Nom de Oraganisme d'acceuil</label>
    <input type="text" class="form-control" id="exampleInput"  name="NomO">
  </div>
  
    <div class="form-group">
    <label for="exampleInput">Téléphone de l'Organisme d'Acceuil</label>
    <input type="number_format" class="form-control" id="exampleInput" name="TelephoneOr">
  </div>
  
    <div class="form-group">
    <label for="exampleInput">Mail de l'Organisme d'Acceuil</label>
    <input type="email" pattern="[^ @]*@[^ @]*" class="form-control" id="exampleInput" name="mailORG">
  </div>
  
    <div class="form-group">
    <label for="exampleInput">Adresse de l'Organisme d'Acceuil</label>
    <input type="text" class="form-control" id="exampleInput" name="AdressORG">
  </div>
  
    <div class="form-group">
    <label for="exampleInput">Nom du Parrain</label>
    <input type="text" class="form-control" id="exampleInput"  name="NomParrainORG">
  </div>
  
    <div class="form-group">
    <label for="exampleInput">Prénom du Parrain</label>
    <input type="text" class="form-control" id="exampleInput" name="prenORG">
  </div>
  
    <div class="form-group">
    <label for="exampleInput">Fonction du Parrain dans l'entreprise</label>
    <input type="text" class="form-control" id="exampleInput"  name="fonctionP">
  </div>
    <div class="form-group">
    <label for="exampleInput">Téléphone du Parrain</label>
    <input type="number_format" class="form-control" id="exampleInput" name="telePar">
  </div>
    <div class="form-group">
    <label for="exampleInput">Mail du Parrain</label>
    <input type="email" pattern="[^ @]*@[^ @]*" class="form-control" id="exampleInput"  name="mailPar">
  </div>
  </div>
  </div>		
		</div>
      </div>
    </div>
	
	
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#">Informations sur la Soutenance</a>
        </h4>
      </div>
      <div id="collapse3" >
        <div class="panel-body">
		
  <div class="row">
  <div class="col-sm-1"></div>
  <div class="col-sm-6">
    <div class="form-group">
    <label for="exampleInput">Date de Soutenance</label>
    <input type="text" class="form-control" id="exampleInputS"  name="dateS">
  </div>
    <div class="form-group">
    <label for="exampleInput">Salle de Soutenance</label>
    <input type="text" class="form-control" id="exampleInput"  name="localS">
  </div>
    <div class="form-group">
    <label for="exampleInput">Nom de l'encadrant</label>
    <input type="text" class="form-control" id="exampleInput" name="nomEnca">
  </div>
    <div class="form-group">
    <label for="exampleInput">Représentant de l'Entreprise</label>
    <input type="text" class="form-control" id="exampleInput"  name="identifiant">
  </div>
    <div class="form-group">
    <label for="exampleInput">Examinateur</label>
    <input type="text" class="form-control" id="exampleInput" name="exam">
  </div>
    
    <div class="form-group">
    <label for="exampleInput">Président de jury</label>
    <input type="text" class="form-control" id="exampleInput" name="PreJR">
  </div>
  </div>
  </div>
		
		</div>
      </div>
    </div>
	
	<div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#">Informations sur les Encadrants</a>
        </h4>
      </div>
      <div id="collapse4" >
        <div class="panel-body">
		
<div class="row">
  <div class="col-sm-1"></div>
  <div class="col-sm-6">  
  <div class="form-group">
    <label for="exampleInput">Nom de l'encadrant Interne</label>
    <input type="text" class="form-control" id="exampleInput"  name="nmENin">
  </div>
    <div class="form-group">
    <label for="exampleInput">Prénom de l'encadrant Interne</label>
    <input type="text" class="form-control" id="exampleInput" name="pnmENin">
  </div>
    <div class="form-group">
    <label for="exampleInput">Mail de l'encadrant Interne</label>
    <input type="email" pattern="[^ @]*@[^ @]*" class="form-control" id="exampleInput" name="mailENin">
  </div>
    <div class="form-group">
    <label for="exampleInput">Téléphone de l'encadrant Interne</label>
    <input type="text" class="form-control" id="exampleInput" name="teleENin">
  </div>
    <div class="form-group">
    <label for="exampleInput">Nom de l'encadrant Externe</label>
    <input type="text" class="form-control" id="exampleInput"  name="nomENex">
  </div>
    <div class="form-group">
    <label for="exampleInput">Prénom de l'encadrant Externe</label>
    <input type="text" class="form-control" id="exampleInput" name="pnomENex">
  </div>
    <div class="form-group">
    <label for="exampleInput">Mail de l'encadrant Externe</label>
    <input type="email" pattern="[^ @]*@[^ @]*" class="form-control" id="exampleInput" name="mailENex">
  </div>
    <div class="form-group">
    <label for="exampleInput">Téléphone de l'encadrant Externe</label>
    <input type="text" class="form-control" id="exampleInput" name="telENex">
  </div>
  
  <div class="form-group">
    <label for="exampleInput">Fonction de l'encadrant Externe</label>
    <input type="text" class="form-control" id="exampleInput" name="fctENex">
  </div>
  </div>
  </div>
  
  <div class="col-sm-4"></div>
  <div class="col-sm-4">
  <!--button type="submit" class="btn btn-success btn-block" name="submit" id="submit" >Ajouter</button-->
  <input type="submit" class="btn btn-danger btn-block" value="Ajouter" name="submit" onclick=""/>
  </div>
		
		</div>
      </div>
    </div>
	
	
  </div> 
  
  </form>
</div>
    
</body>

<footer class="w3-container w3-blue w3-center">
  <h5>INPT</h5> 
  <p>Copyright © ISMR 2017 </p>
</footer>
</html>
