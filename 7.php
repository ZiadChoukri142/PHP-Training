<?php include "functions.php" ?>
<?php include "includes/header.php" ?>
    

	<section class="content">

		<aside class="col-xs-4">

		<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


	<article class="main-content col-xs-8">
	
	
	
<?php  

//Étape 1 - Créer une base de données dans PHPmyadmin
$serverName = "localhost";
$userName = "root";
$passWord = "";
$dbname = "mydb";

$conn = new mysqli($serverName, $userName, $passWord, $dbname);

if($conn->connect_error){
	die("Connection failed: " . $conn->connect_error);
} else
	echo "Connected successfully <br/> ";

//Étape 3 - Insérez des données
/*
$sql = "INSERT INTO mystudents (firstname, lastname, email)
VALUES ('ahmed', 'ziad', 'ziad@ahmed.com')";
if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
*/
//Étape 4 - Connectez-vous à la base de données et lisez les données 
//Done
?>

</article><!--MAIN CONTENT-->

<?php include "includes/footer.php" ?>
