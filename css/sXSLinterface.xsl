<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform" xmlns:fo="http://www.w3.org/1999/XSL/Format">
<xsl:output method="html"/>
    <xsl:template match="/">
        <HTML>
		
		<style>
		 body { background: #DCDCDC;
          width:100%;   }
		</style>
		
            <body>
           <center>
		   <h2>Les Projets de Fin d'Etude 2017</h2>
		   <img src="img/inpt.png" class="img-thumbnail" width="200" height="100"/><br/><br/>
		  
		   
<table border="1"  CELLPADDING="10" CELLSPACING="5">
<tr bgcolor="skyblue">
<th>Identifiant PFE</th>
<th>Organisme d'accueil</th>
<th>Informations stagiaire</th>
<th>Informations sur le stage</th>
<th>Contacts Encadrants</th>
<th>Contacts Entreprises</th>
<th>Informations soutenance</th>
</tr>
<xsl:for-each select="PFE/projet">
<tr>
<td align="center"><xsl:value-of select="@ID"/></td> 

<td align="center"><xsl:value-of select="stage/Organisme/NomOraganisme"/></td>

<td align="center"><b>NometPrénom:</b><xsl:value-of select="Etudiant/Nom"/><xsl:text> </xsl:text><xsl:value-of select="Etudiant/Prénom"/><br/><b>Mail:</b><xsl:value-of select="Etudiant/Mail"/><br/><b>Téléphone:</b><xsl:value-of select="Etudiant/Tèlèphone"/><br/><b>Option:</b><xsl:value-of select="Etudiant/Option"/></td> 

<td align="center"><b>Intitulé:</b><xsl:value-of select="stage/Intitulé"/><br/><b>DateDébut:</b><xsl:value-of select="stage/DateDébut"/><br/><b>DateFin:</b><xsl:value-of select="stage/DateFin"/></td>
<td align="center"><b>Mme/M:</b><xsl:value-of select="EncadrantInterne/Nom"/><xsl:text> </xsl:text><xsl:value-of select="EncadrantInterne/Prénom"/><br/><b>Téléphone:</b><xsl:value-of select="EncadrantInterne/Téléphone"/><br/><b>Mail:</b><xsl:value-of select="EncadrantInterne/Mail"/><br/></td>

<td align="center"><u><b>Parrain:</b></u><br/>Mme/M:<xsl:value-of select="stage/Organisme/Parrain/NomParrain"/><xsl:text> </xsl:text><xsl:value-of select="stage/Organisme/Parrain/PrénomParrain"/><br/><b>Fonction:</b><xsl:value-of select="stage/Organisme/Parrain/Fonction"/><br/><b>Téléphone:</b><xsl:value-of select="stage/Organisme/Parrain/Téléphone"/><br/><b>Mail:</b><xsl:value-of select="stage/Organisme/Parrain/Mail"/><br/><u><b>EncadrantExterne:</b></u><br/>Mme/M:<xsl:value-of select="EncadrantExterne/Nom"/><xsl:text> </xsl:text><xsl:value-of select="EncadrantExterne/Prénom"/><br/><b>Fonction:</b><xsl:value-of select="EncadrantExterne/Fonction"/><br/><b>Téléphone:</b><xsl:value-of select="EncadrantExterne/Téléphone"/><br/><b>Mail:</b><xsl:value-of select="EncadrantExterne/Mail"/></td>

<td align="center"><b>Date:</b><xsl:value-of select="soutenance/Date"/><br/><b>Local:</b><xsl:value-of select="soutenance/Local"/><br/><u><b>Jury:</b></u><br/><b>Président:</b><xsl:value-of select="soutenance/Jury/PrésidentJury"/><br/><b>Examinateur:</b><xsl:value-of select="soutenance/Jury/Examinateur"/><br/><b>Encadrant Interne:</b><xsl:value-of select="EncadrantInterne/Nom"/><br/><b>ReprèsentantsEntreprise:</b><xsl:value-of select="soutenance/Jury/représentantEntreprise"/></td> 
 </tr> 
 </xsl:for-each>   
 </table>  
 </center> 
    </body>
        </HTML>
    </xsl:template>

</xsl:stylesheet>
