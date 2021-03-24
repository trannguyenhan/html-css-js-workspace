<!DOCTYPE html>
<html>
<head>
	<title>Conditional Test</title>
</head>
<body>
	<?php 
		$first = $_GET["firstname"];
		$middle = $_GET["middlename"];
		$last = $_GET["lastname"];

		print "Hi, $last, your full name is $first $middle $last <br />";
		if($first == $last){
			print "$first and $last are equal <br />";
		}
		if($first < $last){
			print "$first is less than $last <br />";
		}
		if($first > $last){
			print "$first is greater than $last <br />";
		}

		$grade1 = $_GET["grade1"];
		$grade2 = $_GET["grage2"];
		$final = (2 * $grade1 + 3 * $grade2) / 5;
		$rate = "A";

		if($final > 89){
			print "Your final grade is $final. You got A. Congratulation!";
			$rate = "A";
		} elseif ($final > 79) {
			print "Your final grade is $final. You got B";
			$rate = "B";
		} elseif ($final > 69) {
			print "Your final grade is $final. You got C";
			$rate = "C";
		} elseif ($final > 59) {
			print "Your final grade is $final. You got D";
			$rate = "D";
		} elseif ($final >= 0) {
			print "Your grade final is $final. You got F";
			$rate = "F";
		} else {
			print "Iillegal grade less than 0. Final grade = $final";
			$rate = "Iillegal";
		}
		
		print "<br /><br />";

		switch ($rate) {
			case "A":
				print "Excellent! <br />";
				break;
			case "B":
				print "Good! <br />";
				break;
			case "C":
				print "Not bad! <br />";
				break;
			case "D":
				print "Normal! <br />";
				break;
			case "F":
				print "You have a try again! <br />";
				break;

			default:
				print "Iillegal grage! <br />";
		}
	 ?>
</body>
</html>