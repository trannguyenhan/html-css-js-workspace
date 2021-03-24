<?php 
	$name = $_POST["name"];
	$class = $_POST["class"];
	$university = $_POST["university"];
	$hobbies = array();

	$cat = $_POST["cat"];
	if($cat == "Yes") array_push($hobbies,"Cat");

	$cooking = $_POST["cooking"];
	if($cooking == "Yes") array_push($hobbies,"Cooking");

	$dog = $_POST["dog"];
	if($dog == "Yes") array_push($hobbies,"Dog");

	$math = $_POST["math"];
	if($math == "Yes") array_push($hobbies,"Math");

	$web = $_POST["web"];
	if($web == "Yes") array_push($hobbies,"Web");

	$facebook = $_POST["facebook"];
	if($facebook == "Yes") array_push($hobbies,"Facebook");

	$youtube = $_POST["youtube"];
	if($youtube == "Yes") array_push($hobbies,"Youtube");

	print "Hello, $name <br />";
	print "You are studing at $class, $university <br />";
	print "Your hobby is :  <br />";
	foreach ($hobbies as $i) {
		print "- $i <br />";
	}
 ?>