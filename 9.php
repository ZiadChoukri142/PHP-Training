<?php include "functions.php" ?>
<?php include "includes/header.php" ?>



	<section class="content">

		<aside class="col-xs-4">

		<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


			<article class="main-content col-xs-8">
			
		
	
<?php 

//Étape 1 - Créez un lien indiquant Cliquez ici et définissez le lien href pour passer certains paramètres et utiliser le super global GET pour le voir
echo '<a href="9.php?subject=Get Method&web=Local Host">'."Cliquez ici".'</a>'.'<br>';
echo "I'm studying the " . $_GET['subject'] . " and i'm in the " . $_GET['web'].'<br>';

//Étape 2 - Définissez un cookie qui expire dans une semaine
$cookie_name = "cookie1";
$cookie_value = "ziad choukri";

setcookie($cookie_name, $cookie_value, time() + (10080 * 60));
if(!isset($_COOKIE[$cookie_name])) {
	echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
	echo "Cookie '" . $cookie_name . "' is set!<br>";
	echo "Value is: " . $_COOKIE[$cookie_name];
}

//Étape 3 - Démarrez une session et définissez-la sur la valeur, quelle que soit la valeur souhaitée. 
session_start();
$_SESSION["name"] = "ziad choukri";
$_SESSION["favfood"] = "fries";

?>

</article><!--MAIN CONTENT-->
<?php include "includes/footer.php" ?>