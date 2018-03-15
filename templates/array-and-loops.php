<?php
//concatenation
	echo "Concatenation \n";
	$textA = "How are you doing?";
	$textB = "c:";

	echo $textA . " " . $textB . "\n";

//array
	echo "\n";
	echo "Array \n";
	$numbersA = array(0, 1, 2, 3, 4, 5, 6, 7, 8 , 9);
	$numbersB = [10, 11, 12, 13, 14, 15];

	//show all array value
	print_r($numbersA);
	print_r($numbersB);

	//show only one position value
	echo "Count positions of array: " . $numbersA[4] . "\n";

//associative arrray
	echo "\n";
	echo "Associative array \n";
	$sabrina = array(
		"name" => "Sabrina",
		"age" => 24,
		"color of eyes" => "brown",
		"color of hair" => "blonde",
		"home town" => "Joinville",
		"favorite animal" => "dogs"
	);

	print_r($sabrina);
	echo $sabrina["name"] . "\n";

	//count values of array
	echo "Count positions of associative array: " . count($sabrina) . "\n";

	//remove the last value of array
	array_pop($sabrina);

//loops
	//for
	echo "\n";
	echo "For \n";
	for($i = 0;  $i < 10; $i++) {
		echo $i . "\n";
	}

	//while
	echo "\n";
	echo "While \n";
	$i = 0;
	while($i <= 10) {
		echo "Number" . " " . $i . "\n";
		$i++;
	}

	//foreach
	echo "\n";
	echo "Foreach \n";
	foreach ($numbersB as $number) {
		echo "Number:" . " " . $number . "\n";	
	}

	//foreach in a associative array
	echo "\n";
	echo "Foreach in a associative array \n";
	foreach ($sabrina as $key => $value) {
		echo $key . " " . "is:" . " " . $value . "\n";	
	}
	
?>