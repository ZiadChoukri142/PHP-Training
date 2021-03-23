<?php include "functions.php" ?>
<?php include "includes/header.php" ?>

	<section class="content">

	<aside class="col-xs-4">

		<?php Navigation();?>
			
		
	</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

	
	<?php  


//Étape 1: Définir une fonction et qui renvoie un calcul de 2 nombres
function somme(){
	echo '<h2>'.$x + $y.'</h2>';
}
//Étape 2: Créez une fonction qui transmet des paramètres et appelez-la à l'aide de valeurs de paramètres
function somme2($k, $j){
	echo '<h2>'.$k + $j.'</h2>';
}

?>

</article><!--MAIN CONTENT-->


<?php include "includes/footer.php" ?>
