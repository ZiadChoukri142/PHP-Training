<?php include "functions.php" ?>
<?php include "includes/header.php" ?>

	<section class="content">

		<aside class="col-xs-4">

		<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


		
	<article class="main-content col-xs-8">
	
	
<?php  

 
//Étape 1 - Créer une variable avec du texte comme valeur
$txt = "Encrypted text";

//Étape 2 - Utilisez la fonction crypt() pour le crypter
$salt = "azoijiojspbdg";
//echo '<h3>'.crypt($txt, $salt).'</h3>';

//Étape 3 - Attribuez le résultat de cryptage à une variable
$stockedSalt = crypt($txt, $salt);

//Étape 4 - Échoyez de la variable 
echo '<h3>'.$stockedSalt.'</h3>';

?>
	
</article><!--MAIN CONTENT-->
<?php include "includes/footer.php" ?>
