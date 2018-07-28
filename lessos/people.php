<?php
class People {
	protected $person1 = "Elen";
	private $person2 = "Anne";
	public $person3 = "Sofia";
	public $person4 = "Bruce";
	public $person5 = "Richard";

	function showPeople() {
		print "foreach from showPeople";
		foreach ($this as $key => $value) {
			print "$key => $value\n";
		}
	}
}
$people= new People;
$people->showPeople();
print "foreach outside";
foreach ($people as $key => $value) {
	print "$key => $value\n";
}
?>