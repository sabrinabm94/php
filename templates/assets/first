<? php
	class First {
		public $id  = 1;
		protected $name =  Sabrina; //this will be only working inside of this class or in another class that extend this one.

		public function something($word) {
			echo $word;
		}
	}

	class Second extends First {
		public function getName() {
			echo $this->name;
		}
	}

	$second = new Second;
	echo $second->getName();

?>	