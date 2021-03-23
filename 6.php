
<?php include "functions.php" ?>
<?php include "includes/header.php" ?>

	<section class="content">

		<aside class="col-xs-4">
		
		<?php Navigation();?>
			
		</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">
 
 <form action="6.php" method="post">
 Name: <input type="text" name="name">
 </form>
 
 <?php echo $_POST["name"]; ?>

<?php  

//Étape 1: Créez un formulaire qui soumet une seule valeur à POST (super global)

?>

</article><!--MAIN CONTENT-->
<?php include "includes/footer.php" ?>
