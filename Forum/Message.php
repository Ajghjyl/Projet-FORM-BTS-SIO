<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8/">
		<link rel="stylesheet" href="style.css" />
		<tile></tile>
	</head>

<section id="two" class="wrapper alt style2">
<?php
 
$bdd = new PDO('mysql:host=localhost;dbname=forum;charset=utf8', 'root', 'root');
 
$reponse = $bdd->query('SELECT ar.idArt, ar.TitreArt, ar.ContenuArt, me.nomMemb, me.prenomMemb FROM article ar INNER JOIN membre me ON ar.idMemb=me.idMemb;');
 
while ($donnees = $reponse->fetch())
{
     
?>
<html>
<body>
<formn method="post" action="traitement.php">
<section class="spotlight">
    <div class="content">
		
    	<h2><?php echo $donnees['TitreArt']; ?></h2>
        <p><?php echo $donnees['ContenuArt']; ?></p>
		<a href="LireArticle.php?article=<?= @$article['idArt'] ?>" class="button primary fit">Default</a>
        <a href="LireArticle.php?article=<?php echo  $donnees['idArt']; ?>
         " class="button primary fit">Default</a>
	</div>
</section>   
<?php
}
$reponse->closeCursor(); // Termine le traitement de la requête <div class="image"> <?php echo "<img src='/southpark/{$donnees['chemin']}'/>"; 
?>
</section>
</body>
</html>