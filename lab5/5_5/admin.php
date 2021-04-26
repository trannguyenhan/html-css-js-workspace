<html><head><title>Category Administration</title></head>
<body>
<div style="font-size:32px"><b>Category Administration</b></div>
<form action="addcategory.php" method="post">
<?php
$server = 'localhost';
$user = 'minhtq';
$pass = 'minhtq';
$mydb = 'business_service';
$table_name = 'categories';
$connect = mysqli_connect($server, $user, $pass, $mydb);
if(!$connect) {
    die ("Cannot connect to $server using $user");
} else {
    print '<br>';
    $SQLcmd = "SELECT * from $table_name";
    $result = mysqli_query($connect, $SQLcmd);
    print "<table>";
    print "<tr>
            <th>CatID</th>
            <th>Title</th>
            <th>Description</th>
            </tr>";
    if(mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            print "<tr>
                    <td>".$row['CategoryID']."</td>
                    <td>".$row['Title']."</td>
                    <td>".$row['Description']."</td>
                   </tr>";
        }
    }
    print '<td><input type="text" name="CatID" style="width:100%"></td>';
    print '<td><input type="text" name="Title" style="width:100%"></td>';
    print '<td><input type="text" name="Description" style="width:100%"></td>';
    //print '<tr><td><input type="submit" value="Add Category"></td></tr>';
    print "</table>";
    print '<input type="submit" value="Add Category">';
    mysqli_close($connect);
}
?>
</form>
</body>
</html>