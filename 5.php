<?php include "functions.php" ?>
<?php include "includes/header.php" ?>
	<section class="content">

		<aside class="col-xs-4">
		<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

	
	<?php 


//Étape 1: utilisez une fonction mathématique prédéfinie ici et faites-en écho
echo '<h3>'.abs(-98).'</h3>';
//Étape 2: utilisez une fonction de chaîne prédéfinie ici et faites-en écho
echo '<h3>'.lcfirst("Hello").'</h3>';
//Étape 3: Utilisez une fonction Array prédéfinie ici et faites-en écho 
$array = ["Banana", "Melon", "Orange", "Apple"];
echo '<h3>'.count($array).'</h3>';

?>

</article><!--MAIN CONTENT-->
<?php include "includes/footer.php" ?>