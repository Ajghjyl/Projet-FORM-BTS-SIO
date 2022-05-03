<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8/">
		<link rel="stylesheet" href="style.css" />
		<tile></tile>
	</head>
<?php
$bdd = new PDO('mysql:host=localhost;dbname=forum;charset=utf8', 'root', 'root');
 
$reponse = $bdd->query('SELECT ar.idArt, ar.TitreArt, me.nomMemb, me.prenomMemb FROM article ar INNER JOIN membre me ON ar.idMemb=me.idMemb');
 
if ($donnees = $reponse->fetch())
{
?>
                <!-- Main -->
 
 
<article id="main">
    <header>
        <h2><?php echo $donnees['TitreArt']; ?></h2>  
    </header>

    <section class="wrapper style5">
        <div class="inner">
            <h3><?php echo $donnees['TitreArt']; ?></h3>
            <h6 class="auteurarticle">Écrit par <?php echo $donnees['prenomMemb']; ?><?php echo $donnees['nomMemb']; ?> </h6>
            <center>////</center>
            <p><?php echo $donnees['idArt']; ?></p>
            <hr />
        </div>
    </section>
<?php
}
 
$reponse->closeCursor(); // Termine le traitement de la requête //<?php echo "<img src='/southpark/{$donnees[]}'/>"; ?//
?>

 </article>

 </html>