<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<table>
		<tbody>
			<tr>
				<td>Title</td>
				<td>Author</td>
				<td>Description</td>
			</tr>
		</tbody>
		<?php 
		foreach ($books as $title => $book) {
			echo '<tr><td><a href = "index.php?book='.$book->title.'">'.$book->title.'</a></td><td>'.$book->author.'</td><td>'.$book->description.'</td></tr>';
		}
		 ?>
	</table>
</body>
</html>