<?php
//simple function
	echo "Simple function \n";

	greet('Sabrina');
	verify_number(33);
	
	function greet($name) {
		echo "Hey" . " " . $name . "! \n";
	}

	function verify_number($number) {
		if($number == 3) {
			echo "The number is correct! \n";
		} else {
			echo "The number is wrong! \n";
		}
	}

?>