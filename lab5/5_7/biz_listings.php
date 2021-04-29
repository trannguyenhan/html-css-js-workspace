<?php 
	$db = mysqli_connect("localhost", "root", "mysql1234", "business", "3306");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Business Listings</title>
	<script type="text/javascript">
		function toggleClass(el, className) {
		    if (el.className.indexOf(className) >= 0) {
		        el.className = el.className.replace(className,"");
		        let id = el.id.toString();

		        let list_category = document.getElementsByClassName("category");

		        for(let i=0; i<list_category.length; i++){
		        	let category_member = list_category[i];
		        	if(category_member.textContent.includes(id)){
		        		category_member.parentElement.style.display = 'none';
		        	}
		        }

		    }
		    else {
		        el.className  += className;
		        let id = el.id.toString();

		        let list_category = document.getElementsByClassName("category");

		        for(let i=0; i<list_category.length; i++){
		        	let category_member = list_category[i];
		        	if(category_member.textContent.includes(id)){
		        		category_member.parentElement.style.display = '';
		        	}
		        }
			}

			
		}
	</script>
	<style type="text/css">
		#table-right {
			border-spacing: 15px;
		}
		.left {
			float: left;
			width: 250px;
		}
		.gridview .selected, .gridview tbody .selected {
		    background-color: black;
		    color: #fff;
		}
		.right{
			padding-top: 100px;
		}
	</style>
</head>
<body>
<div class="left">
<h1>Business Listings</h1> <br /><br />
	<div style="overflow: scroll; width: 80%;"> 
		<table border="1" width="100%" class="gridview" id="table-left">
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
	<table id="table-right">
		<?php 
			$query = "select * from info";
			
			$result = mysqli_query($db, $query);

			while($row = mysqli_fetch_array($result)){
				$id = $row["id"]; 
				$name_biz = $row["name_biz"]; 
				$adress_biz = $row["adress_biz"];
				$city_biz = $row["city_biz"];
				$telephone_biz = $row["telephone_biz"];
				$url_biz = $row["url_biz"];
			
		 ?>
				<tr id=<?php echo '"' . $id . '-info' . '"' ?>>
					<td><?php echo $id ?></td>
					<td><?php echo $name_biz ?></td>
					<td><?php echo $adress_biz ?></td>
					<td><?php echo $city_biz ?></td>
					<td><?php echo $telephone_biz ?></td>
					<td><?php echo $url_biz ?></td>
					<td class = "category">
						<?php 
							$query_i = "select * from biz_listings where id_info=" . $id;
							$result_i = mysqli_query($db, $query_i);

							while($row = mysqli_fetch_array($result_i)){
								echo $row["id_category"] . " ";
							}
						?>
					</td>
				</tr>

		<?php
			}
		 ?>
	</table>
</div>

<script type="text/javascript">
	let list_category = document.getElementsByClassName("category");

    for(let i=0; i<list_category.length; i++){
    	let category_member = list_category[i];
    	category_member.parentElement.style.display = 'none';
    }
</script>

</body>
</html>