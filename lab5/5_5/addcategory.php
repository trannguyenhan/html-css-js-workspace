<html><head><title>Category Administration</title></head>
<body style="width:100vh">
<div style="font-size:32px"><b>Category Administration</b></div>
<form action="admin.php" method="post">
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
    $catid = $_POST['CatID'];
    $title = $_POST['Title'];
    $description = $_POST['Description'];
    $SQLcmd = "INSERT INTO $table_name (CategoryID, Title, Description) VALUES('$catid', '$title', '$description')";
    if(mysqli_query($connect, $SQLcmd)) {
        print "<div>Insert into $table_name was succesful!</div>";
    } else {
        die ("Insert into $table_name failed");
    }
    mysqli_close($connect);
    print '<input type="submit" value="Back">';
}
?>
</form>
</body>
</html>