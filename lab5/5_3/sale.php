<html><head><title>Product Update Results</title></head>
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
    $product_desc = $_POST['product_desc'];
    print '<div style="color:blue; font-size:24px">Update Results for Table Products</div>';
    $SQLcmd = "UPDATE $table_name SET Numb = Numb-1 WHERE (Product_desc = '$product_desc')";
    print "<div>The query is <i>$SQLcmd</i></div>";
    print "<br>";
    mysqli_query($connect, $SQLcmd);
    $getdatasql = "SELECT * from $table_name";
    $result = mysqli_query($connect, $getdatasql);
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
                    <td>".$row['ProductID']."</td>
                    <td>".$row['Product_desc']."</td>
                    <td>".$row['Cost']."</td>
                    <td>".$row['Weight']."</td>
                    <td>".$row['Numb']."</td>
                   </tr>";
        }
    }
    print "</table>";
    mysqli_close($connect);
}
?>
</body>
</html>