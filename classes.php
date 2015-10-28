<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?php

		// =========== DEFINE THE CLASS ==========
		class Cat{
			// object properties
			public $name;
			public $age;
			public $weight;
			
			private $breed;//important information that cant be touched

			// the object's constructor
			public function __construct($_name, $_age, $_weight){
				$this->name   = $_name;
				$this->age    = $_age;
				$this->weight = $_weight;

                if ($This->weight > 25){
                	$This->breed = "Mountain Lion";
                }



			}

			public function feedCat($_food){
				if ($_food < $this->weight/8){
					echo $this->name." needs more food than that!";
					echo "<br>";
				} else {
					echo $this->name." is fully fed!";
					echo "<br>";
				}
			}

			public function howOld(){
				echo $this->name." is ".$this->age." years old.";
				echo "<br>";
				echo $this->name." is ".$this->age." cat years old!";
				echo "<br>";
			}
		}


		$cat1 = new Cat("Little Buddy", 2, 8);
		$cat2 = new Cat("Sneaky Pete", 0, 2);
		$cat3 = new Cat("Puppy cat", 3, 10);

		$cat1-> howOld();
		$cat1->feedCat(6);

		$cat3->howOld();
		echo $cat3->age;
		 echo "<br>";


		$cat2->howOld();
		$cat2->feedCat(6);

		echo $cat2->name;
		echo "<br>";
	?>

</body>
</html>





