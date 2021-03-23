<?php 
	$name = $_POST["name"];
	$class = $_POST["class"];
	$university = $_POST["university"];
	$hobbies = array();

	$cat = $_POST["cat"];
	if($cat == "Yes") array_push($hobbies,$cat);

	$cooking = $_POST["cooking"];
	if($cat == "Yes") array_push($hobbies,$cat);

	$dog = $_POST["dog"];
	if($dog == "Yes") array_push($hobbies,$dog);

	$math = $_POST["math"];
	if($math == "Yes") array_push($hobbies,$math);

	$web = $_POST["web"];
	if($web == "Yes") array_push($hobbies,$web);

	$facebook = $_POST["facebook"];
	if($facebook == "Yes") array_push($hobbies,$facebook);

	$youtube = $_POST["youtube"];
	if($youtube == "Yes") array_push($hobbies,$youtube);

	print "Hello, $name <br />";
	print "You are studing at $class, $university <br />";
	print "Your hobby is :  <br />";
	foreach ($hobbies as $i) {
		print "- $i <br />";
	}
 ?>