<?php 
	$db = mysqli_connect("localhost", "root", "mysql1234", "business", "3306");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Business Registration</title>
	<style type="text/css">
		#table-right {
			border-spacing: 15px;
		}

		.left {
			float: left;
			width: 250px;
		}

		.right {
			
		}

		.gridview .selected, .gridview tbody .selected {
		    background-color: black;
		    color: #fff;
		}
	</style>
	<script type="text/javascript">
		function toggleClass(el, className) {
			let id = el.id.toString();
		    if (el.className.indexOf(className) >= 0) {
		        el.className = el.className.replace(className,"");

		        let arr = document.getElementById("category").value.split(" ");

		        const se = new Set(arr);
		        se.delete(id);
		        document.getElementById("category").value = "";
		        for(const x of se){
		        	document.getElementById("category").value += " " + x.toString();
		        	console.log(x);
		        }
		    }
		    else {
		        el.className  += className;
		        document.getElementById("category").value += " " + id;
		        let arr = document.getElementById("category").value.split(" ");

		        const se = new Set(arr);
		        document.getElementById("category").value = "";
		        for(const x of se){
		        	document.getElementById("category").value += " " + x.toString();
		        	console.log(x);
		        }

		    }
		}
	</script>
</head>
<body>
<h1>Business Registration</h1>
<div class="left">
Click on one or control click on multiple catetories <br /><br />
	<div style="overflow: scroll; width: 80%;">
		<table border="1" width="100%" class="gridview">
			<?php 
				$query = "select * from category";
				
				$result = mysqli_query($db, $query);
				while($row = mysqli_fetch_array($result)){
					$name_category = $row["category"];
					$id_category = $row["id"];
					
			?>
				<tr onclick="toggleClass(this,'selected');" id=<?php echo '"' . strval($id_category) . '"' ?>>
					<td><?php echo $name_category ?></td>
				</tr>
			<?php 
				}
			?>
		</table>		
	</div>
</div>
<div class="right">
	<form name="myForm" id="myForm" action="add_biz.php" method="POST">
		<table id="table-right">
		<tr>
			<td>Business name</td>
			<td><input type="text" name="name"> 	<br /></td>
		</tr>
		<tr>
			<td>Adress</td>
			<td><input type="text" name="adress"> 	<br /></td>
		</tr>
		<tr>
			<td>City</td>
			<td><input type="text" name="city">		<br /></td>
		</tr>
		<tr>
			<td>Telephone</td>
			<td><input type="text" name="telephone"><br /></td>
		</tr>
		<tr>
			<td>URL</td>
			<td><input type="text" name="url">		<br /></td>
		</tr>
	</table>	
	<br /><br />
	<input type="text" name="category" id="category" style="display: none;">
	<input type="submit" name="add_business" value="Add Business">
	</form>
</div>
<?php 
	if(array_key_exists("name", $_POST)){
		
		$name = $_POST["name"];
		$adress = $_POST["adress"];
		$city = $_POST["city"];
		$telephone = $_POST["telephone"];
		$url = $_POST["url"];

		$list_category_str = explode(" ", $_POST['category']);
		$list_category = array();
		for($i=0; $i<sizeof($list_category_str); $i++){
			$tmp = intval($list_category_str[$i]);
			array_push($list_category, $tmp);
		}

		$query = "insert into info(name_biz, adress_biz, city_biz, telephone_biz, url_biz)
					value (
					$name, $adress, $city, $telephone, $url	
				)";
		mysqli_query($db, $query);

		$query = "select id from info where name_biz = '$name' and adress_biz = '$adress'";
		
		$result = mysqli_query($db, $query);
		$row = mysqli_fetch_array($result);
		$id = $row["id"];

		for($i=2; $i<sizeof($list_category); $i++){
			$id_cate = $list_category[$i];
			$query = "insert into biz_listings(id_info, id_category)
					value($id, $id_cate);
				";
			mysqli_query($db, $query);
		}
		
	} 
?>
</body>
</html>