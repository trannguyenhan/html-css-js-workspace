<html><head><title>Insert Results</title></head>
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
    $product_id = 0;
    $product_desc = $_POST["product_desc"];
    $weight = $_POST["weight"];
    $cost = $_POST["cost"];
    $number = $_POST["number"];
    $SQLcmd = "INSERT INTO $table_name (ProductID, Product_desc, Cost, Weight, Numb) VALUES($product_id, '$product_desc', $cost, $weight, $number)";
    if(mysqli_query($connect, $SQLcmd)) {
        print "<div>The Query is $SQLcmd</div>";
        print "<div>Insert into $table_name was succesful!</div>";
    } else {
        die ("Insert into $table_name failed SQLcmd=$SQLcmd");
    }
    mysqli_close($connect);
}
?>
</body>
</html>