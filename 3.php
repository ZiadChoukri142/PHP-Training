<?php include "functions.php" ?>
<?php include "includes/header.php" ?>

	<section class="content">

	<aside class="col-xs-4">

	<?php Navigation();?>
			
	</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

<?php  



//Étape 1: Créez une condition facultatif avec if, elseif et else pour enfin afficher la chaîne en disant, "I love greenchip :p"
$txt = "I love greenchip :P";
#1st condition
if("txt" === 10){
	echo '<h2>'.$txt.'</h2>';
}
#2nd condition
elseif("txt" != 10){
	echo '<h2>'.$txt.'</h2>';
}
#no condition is met 
else{
	echo '<h2>'.$txt.'</h2>';
}
//Étape 2: Créez un forloop qui affiche 10 nombres
for ($i = 0; $i <= 10; $i++){
	echo "$i <br>";
}
//Étape 3: Créez une instruction switch qui teste à nouveau une condition avec 5 cas 
$favFood = "fries";

switch ($favFood){

case "spaghetti":
		echo "your favourite food is spaghetti!";
			break;
case "fries":
		echo "your favourite food is fries!";
			break;
case "pizza":
		echo "your favourite food is pizza!";
			break;
case "humburger":
		echo "your favourite food is humburger!";
			break;
case "sushi":
		echo "your favourite food is sushi!";
			break;	
default:
		echo "you do not have any favourite food :o";
}

?>

</article><!--MAIN CONTENT-->
	
<?php include "includes/footer.php" ?>