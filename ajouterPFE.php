<?php

$ID=$_POST['ID'];

$nomEtud=$_POST['nomEtud'];
$prenETu=$_POST['prenETu'];
$mailETu=$_POST['mailETu'];
$teleETu=$_POST['teleETu'];
$OptionETu=$_POST['OptionETu'];
$Intitule=$_POST['Intitule'];
$dated=$_POST['dated'];
$DateF=$_POST['DateF'];
$NomO=$_POST['NomO'];
$TelephoneOr=$_POST['TelephoneOr'];
$mailORG=$_POST['mailORG'];
$AdressORG=$_POST['AdressORG'];
$NomParrainORG=$_POST['NomParrainORG'];
$prenORG=$_POST['prenORG'];
$fonctionP=$_POST['fonctionP'];
$telePar=$_POST['telePar'];
$mailPar=$_POST['mailPar'];
$dateS=$_POST['dateS'];
$localS=$_POST['localS'];
$repreent=$_POST['identifiant'];
$exam=$_POST['exam'];
$PreJR=$_POST['PreJR'];
$nmENin=$_POST['nmENin'];
$pnmENin=$_POST['pnmENin'];
$mailENin=$_POST['mailENin'];
$teleENin=$_POST['teleENin'];
$nomENex=$_POST['nomENex'];

$pnomENex=$_POST['pnomENex'];
$mailENex=$_POST['mailENex'];
$telENex=$_POST['telENex'];
$fctENex=$_POST['fctENex'];

$dom = new DomDocument();
$dom->load('ProjetXMLinterface.xml');
$nouveauPROJET = $dom->createElement("projet");

$nouveauPROJET->setAttribute("ID", $ID);  //a modifier 
$PFE = $dom->getElementsByTagName("PFE")->item(0);
$PFE->appendChild($nouveauPROJET);

$nouveauEtudiant = $dom->createElement("Etudiant");
$nouveauPROJET->appendChild($nouveauEtudiant);

$nouveauNOM = $dom->createElement("Nom");
$nom = $dom->createTextNode($nomEtud);// modifier 

$nouveauEtudiant->appendChild($nouveauNOM);
$nouveauNOM->appendChild($nom);

$nouveauPRENOM = $dom->createElement("Prénom");
$prenom = $dom->createTextNode($prenETu);//  modifier 

$nouveauEtudiant->appendChild($nouveauPRENOM);
$nouveauPRENOM->appendChild($prenom);

$nouveauMail = $dom->createElement("Mail");
$mail = $dom->createTextNode($mailETu);// a modifier

$nouveauEtudiant->appendChild($nouveauMail);
$nouveauMail->appendChild($mail);

$nouveauTelephone = $dom->createElement("Tèlèphone");
$tele = $dom->createTextNode($teleETu);// a modifier 

$nouveauEtudiant->appendChild($nouveauTelephone);
$nouveauTelephone->appendChild($tele);

$nouveauOption = $dom->createElement("Option");
$option = $dom->createTextNode($OptionETu);// a modifier 

$nouveauEtudiant->appendChild($nouveauOption);
$nouveauOption->appendChild($option);


$nouveauStage = $dom->createElement("stage");
$nouveauPROJET->appendChild($nouveauStage);

$intitule = $dom->createElement("Intitulé");
$intl = $dom->createTextNode($Intitule);// a modifier 

$nouveauStage->appendChild($intitule);
$intitule->appendChild($intl);

$DateDebut = $dom->createElement("DateDébut");
$datedebut = $dom->createTextNode($dated);// a modifier

$nouveauStage->appendChild($DateDebut);
$DateDebut->appendChild($datedebut);

$Datefin = $dom->createElement("DateFin");
$datefin = $dom->createTextNode($DateF);// a modifier 
$nouveauStage->appendChild($Datefin);
$Datefin->appendChild($datefin);

$organisme = $dom->createElement("Organisme");
$nouveauStage->appendChild($organisme);

$contact = $dom->createElement("Contacts");
$organisme->appendChild($contact);

$parrain = $dom->createElement("Parrain");
$organisme->appendChild($parrain);

$nomOrganisme = $dom->createElement("NomOraganisme");
$nomorga = $dom->createTextNode($NomO);// a modifier 
$organisme->appendChild($nomOrganisme);
$nomOrganisme->appendChild($nomorga);

$tele1 = $dom->createElement("Telephone");
$te1 = $dom->createTextNode($TelephoneOr);// a modifier 
$contact->appendChild($tele1);
$tele1->appendChild($te1);

$mail1 = $dom->createElement("Mail");
$mail11 = $dom->createTextNode($mailORG);// a modifier
$contact->appendChild($mail1);
$mail1->appendChild($mail11);

$adress = $dom->createElement("Adresse");
$adr = $dom->createTextNode($AdressORG);// a modifier 
$contact->appendChild($adress);
$adress->appendChild($adr);

$NomParain = $dom->createElement("NomParrain");
$nomparrain = $dom->createTextNode($NomParrainORG);// a modifier
$parrain->appendChild($NomParain);
$NomParain->appendChild($nomparrain);

$preNomParain = $dom->createElement("PrénomParrain");
$prenomparrain = $dom->createTextNode($prenORG);// a modifier 
$parrain->appendChild($preNomParain);
$preNomParain->appendChild($prenomparrain);

$FonctionParain = $dom->createElement("Fonction");
$fonctionparrain = $dom->createTextNode($fonctionP);// a modifier
$parrain->appendChild($FonctionParain);
$FonctionParain->appendChild($fonctionparrain);

$teleParain = $dom->createElement("Téléphone");
$teleparrain = $dom->createTextNode($telePar);// a modifier 
$parrain->appendChild($teleParain);
$teleParain->appendChild($teleparrain);

$mailParain = $dom->createElement("Mail");
$mailparrain = $dom->createTextNode($mailPar);// a modifier 
$parrain->appendChild($mailParain);
$mailParain->appendChild($mailparrain);

$Soutenance = $dom->createElement("soutenance");
$nouveauPROJET->appendChild($Soutenance);

$jury = $dom->createElement("Jury");
$Soutenance->appendChild($jury);

$Date1 = $dom->createElement("Date");
$datee = $dom->createTextNode($dateS);// a modifier
$Soutenance->appendChild($Date1);
$Date1->appendChild($datee);


$salle = $dom->createElement("Local");
$local = $dom->createTextNode($localS);// a modifier
$Soutenance->appendChild($salle);
$salle->appendChild($local);
//////////


$nomEncadr = $dom->createElement("Encadrants");
$nomencdr = $dom->createTextNode($nomEnca);// a modifier 
$jury->appendChild($nomEncadr);
$nomEncadr->appendChild($nomencdr);

///////

$nomRepre = $dom->createElement("représentantEntreprise");
$nomrepre = $dom->createTextNode($repreent);// a modifier 
$jury->appendChild($nomRepre);
$nomRepre->appendChild($nomrepre);

//////

$examin = $dom->createElement("Examinateur");
$nomexa = $dom->createTextNode($exam);// a modifier
$jury->appendChild($examin);
$examin->appendChild($nomexa);
/////

$nomPre = $dom->createElement("PrésidentJury");
$nompre = $dom->createTextNode($PreJR);
$jury->appendChild($nomPre);
$nomPre->appendChild($nompre);


//////
$encadrant = $dom->createElement("Encadrants");
$nouveauPROJET->appendChild($encadrant);
//////
$encadrantInter = $dom->createElement("EncadrantInterne");
$nouveauPROJET->appendChild($encadrantInter);

$nomEncIN = $dom->createElement("Nom");
$nomencin = $dom->createTextNode($nmENin);// a modifier
$encadrantInter->appendChild($nomEncIN);
$nomEncIN->appendChild($nomencin);

$prenomEncIN = $dom->createElement("Prénom");
$prenomencin = $dom->createTextNode($pnmENin);// a modifier 
$encadrantInter->appendChild($prenomEncIN);
$prenomEncIN->appendChild($prenomencin);

$mailEncIN = $dom->createElement("Mail");
$mailencin = $dom->createTextNode($mailENin);// a modifier 
$encadrantInter->appendChild($mailEncIN);
$mailEncIN->appendChild($mailencin);

$teleEncIN = $dom->createElement("Téléphone");
$teleencin = $dom->createTextNode($teleENin);// a modifier 
$encadrantInter->appendChild($teleEncIN);
$teleEncIN->appendChild($teleencin);
///////

$encadrantExt = $dom->createElement("EncadrantExterne");
$nouveauPROJET->appendChild($encadrantExt);

$nomEncEX = $dom->createElement("Nom");
$nomencex = $dom->createTextNode($nomENex);// a modifier 
$encadrantExt->appendChild($nomEncEX);
$nomEncEX->appendChild($nomencex);

$prenomEncEx = $dom->createElement("Prénom");
$prenomencex = $dom->createTextNode($pnomENex);// a modifier 
$encadrantExt->appendChild($prenomEncEx);
$prenomEncEx->appendChild($prenomencex);

$mailEncEx = $dom->createElement("Mail");
$mailencex = $dom->createTextNode($mailENex);// a modifier 
$encadrantExt->appendChild($mailEncEx);
$mailEncEx->appendChild($mailencex);

$teleEncEx = $dom->createElement("Téléphone");
$teleencex = $dom->createTextNode($telENex);// a modifier 
$encadrantExt->appendChild($teleEncEx);
$teleEncEx->appendChild($teleencex);

$fctEncEx = $dom->createElement("Fonction");
$feceencex = $dom->createTextNode($fctENex);// a modifier plus tard
$encadrantExt->appendChild($fctEncEx);
$fctEncEx->appendChild($feceencex);
/////

$dom->save('ProjetXMLinterface.xml');
echo 'OK';
header("Location: Accueil.php");
exit;

?>