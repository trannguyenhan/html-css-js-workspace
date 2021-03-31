<!DOCTYPE html>
<html>
<head>
	<title>Date time processing</title>
</head>
<body>
	<form>
		Enter your name and select data and time for the appointment
		<table>
			<tr>
				<td>Your name : </td>
				<td><input type="text" name="name"></td>
			</tr>
			<tr>
				<td>Date : </td>
				<td>
					<select name="date_day">
						<?php 
							for($i=1; $i<31; $i++){
								print "<option> $i </option>";
							}
						 ?>
					</select>
				
					<select name="date_month">
						<?php 
							for($i=1; $i<13; $i++){
								print "<option> $i </option>";
							}
						 ?>
					</select>
				
					<select name="date_year">
						<?php 
							for($i=1985; $i<2009; $i++){
								print "<option> $i </option>";
							}
						 ?>
					</select>
					
				</td>
			</tr>
			<tr>
				<td>Time : </td>
				<td>
					<select name="time_hour">
						<?php 
							for($i=0; $i<24; $i++){
								print "<option> $i </option>";
							}
						 ?>
					</select>
				
					<select name="time_minus">
						<?php 
							for($i=0; $i<60; $i++){
								print "<option> $i </option>";
							}
						 ?>
					</select>
				
					<select name="time_second">
						<?php 
							for($i=0; $i<60; $i++){
								print "<option> $i </option>";
							}
						 ?>
					</select>
				</td>
			</tr>
			<tr>
				<td align="right"><input type="submit" value="Submit"></td>
				<td align="left"><input type="reset" value="Reset"></td>
			</tr>
		</table>
	</form>
	<?php 
		if(array_key_exists("name", $_GET)){
			$name = $_GET["name"];
			$date_day = $_GET["date_day"];
			$date_month = $_GET["date_month"];
			$date_year = $_GET["date_year"];
			$time_hour = $_GET["time_hour"];
			$time_minus = $_GET["time_minus"];
			$time_second = $_GET["time_second"];

			print "Hi, $name ! <br />";
			print "You have choose to have an appointment on $time_hour:$time_minus:$time_second, $date_day/$date_month/$date_year <br />";
			print "More information <br /> In 12 hours, the time and date is ";

			$date=date_create("$date_year-$date_month-$date_day $time_hour:$time_minus:$time_second");
			echo date_format($date,"Y-m-d h:i:sa");
			echo "<br />";

			if($date_month == 1 || $date_month == 3 || $date_month == 5 || $date_month == 7 || $date_month == 8 || $date_month == 10 || $date_month == 12){
				echo "This month has 31 days";
			} elseif ($date_month != 2){
				echo "This month has 30 days";
			} else {
				if($date_year % 100 == 0 && $date_year % 400 == 0){
					echo "This month has 29 days";
				} elseif ($date_year % 4 == 0) {
					echo "This month has 29 days";
				} else {
					echo "This month has 28 days";
				}
			}

		}
	 ?>
</body>
</html>