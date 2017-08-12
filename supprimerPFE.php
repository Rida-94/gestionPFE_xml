<?php
$ID1=$_POST['ID1'];
$dom = new DomDocument();
$dom->load('ProjetXMLinterface.xml');
$pfe = $dom->documentElement;
$PFE = $pfe->getElementsByTagName("PFE");

$projet = $pfe->getElementsByTagName("projet");
 
foreach($projet as $pr)
{
if ($pr->hasAttribute("ID") == (string)$ID1) 
	{
	if ($pr->getAttribute("ID") == (string)$ID1)
		{
		//print_r($animation);
		$pfe->removeChild($pr);
		}
	}

}
$dom->save('ProjetXMLinterface.xml');
header("Location: supprimer.php");
exit;
?>