<html><head><title>Search Results</title></head>
<body>
<?php
$server = 'localhost';
$user = 'minhtq';
$pass = 'minhtq';
$mydb = 'test';
$table_name = 'Products';
$connect = mysqli_connect($server, $user, $pass, $mydb);
if(!$connect) {
    die ("Cannot connect to $server using $user");
} else {
    print '<div style="color:blue; font-size:24px">Products Data</div>';
    $num = 0;
    $product_desc = $_POST["product_desc"];
    $SQLcmd = "SELECT * FROM $table_name WHERE (Product_desc = '$product_desc')";
    print "<div>The query is <i>$SQLcmd</i></div>";
    $result = mysqli_query($connect, $SQLcmd);
    print "<br>";
    print "<table border='1'>";
    print "<tr>
            <th>Num</th>
            <th>Product</th>
            <th>Cost</th>
            <th>Weight</th>
            <th>Count</th>
            </tr>";
    if(mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            print "<tr>
                    <td>$num</td>
                    <td>".$row['Product_desc']."</td>
                    <td>".$row['Cost']."</td>
                    <td>".$row['Weight']."</td>
                    <td>".$row['Numb']."</td>
                   </tr>";
            $num ++;
        }
    }
    print "</table>";
}
?>
</body>
</html>