<!DOCTYPE html>
<html>
<head>
	<title>Square and Cube</title>
</head>
<body><font size="5" color="blue">Generate Square and Cube</font>
<br />
<form action="<?php echo $_SERVER["PHP_SEFT"] ?>">
	<table>
		<tr>
			<td>Select Start Number :</td>
			<td>
				<select name="start">
					<?php
						for($i=0; $i<=10; $i++){
							print "<option> $i </option>";
						}
					?>
				</select>
			</td>
		</tr>
		<tr>
			<td>Select end Number : </td>
			<td>
				<select name="end">
					<?php
						for($i=0; $i<=20; $i++){
							print "<option> $i </option>";
						}
					?>
				</select>
			</td>
		</tr>
		<tr>
			<td align="right"><input type="submit" value="submit"></td>
			<td align="left"><input type="reset" value="reset"></td>
		</tr>
	</table>
	<table>
		<tr><th>Number</th><th>Square</th><th>Cube</th></tr>
		<?php 
			if(array_key_exists("start", $_GET)){
				$start = $_GET["start"];
				$end = $_GET["end"];
				$i = $start;

				while($i < $end){
					$sqr = $i * $i;
					$cube = $i * $i * $i;
					print "<tr><td>$i</td><td>$sqr</td><td>$cube</td></tr>";
					$i = $i + 1;
				}
			}
		 ?>
	</table>
</form>

</body>
</html>