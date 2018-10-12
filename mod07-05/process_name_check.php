<?php 
	// $name = strtolower($_GET['nameToCheck']);
	// if($name =="bullyean") {
	// 	echo "true";
	// } else {
	// 	echo "false";
	// }

	$name = ucfirst(strtolower($_GET['nameToCheck']));
	//ex. eDiSon-> edison -> Edison
	$day11 = ["Drei", "Nica", "Edison", "Pau", "Kevin", "Kat", "Eula", "Bryan", "Ben", "Noumer", "Shane", "Jayson", "Aaron", "Anna", "Anna", "Abi", "Elmer", "Jonathan", "Peg", "Alvin", "Vin", "Julius", "Jyra", "Rain", "Jon", "Lito", "Jek", "Jem", "Shaira", "Jose", "Lemuel", "Jb", "Don", "Dan", "Mark", "Brem"];
	
	//Q: How to find out if a string matches an element in an array?
	//If name matches a name in day 11 echo "member of day 11" else echo "Not a member of day 11".

	// $day11.prototype.contains = function(nameToCheck){
 //    return this.indexOf(nameToCheck) > -1;
	// To search for an element in an array
	if (in_array($name, $day11)) {
		echo "Member of Day 11.";
	} else {
		echo "Not a member of Day 11.";
	}

	//Other solution
	//$found_flag = false:
	// foreach($day11 as $student) {
	//foreach(array as key=>value) * if we care about the key
	//foreach(array as value) * we don't need the keys
	// 	if($name == $student) {
	// 		$found_flag = true;
	// 		break;
	// 	}
	// }
	// if($found_flag) {
	// 	echo "Member of Day 11";
	// 	 }else {
	// 	 	echo "Not a member of Day 11";
	// 	 }
	// }
 ?>