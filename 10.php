<?php include "functions.php" ?>
<?php include "includes/header.php" ?>
<section class="content">

	<aside class="col-xs-4">

		<?php Navigation();?>
			
			
	</aside><!--SIDEBAR-->

<article class="main-content col-xs-8">

	
<?php  

//Étape 1: Créez une classe appelée Chien
//Étape 2: Définissez certaines propriétés pour le Chien, l'exemple, la couleur des yeux, le nez ou la couleur de la fourrure
//Étape 4: Créez une méthode nommée AfficherTout qui fait écho à toutes les propriétés
//Étape 5: Instanciez la classe / créez l'objet et appelez-le pitbull
//Étape 6: Appelez la méthode AfficherTout

	class Chien{
		
		public $name;
		
		public $type;

		public $weight;
		
		public function setName($name , $type, $weight){
			$this->name = $name;
			$this->type = $type;
			$this->weight = $weight;
		}
		
			
		public function AfficherTout(){
			echo $this->name.'<br>';
			echo $this->type.'<br>';
			echo $this->weight.'<br>';
		}
	}
	$pitbull = new Chien() ;
	$pitbull->setName("Andy", "Chien-Police", "75g");
	echo $pitbull->AfficherTout();

?>





</article><!--MAIN CONTENT-->

<?php include "includes/footer.php" ?>