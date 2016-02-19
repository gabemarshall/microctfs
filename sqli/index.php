<html>
<body>
<form action="index.php" method="post">
  Customer Name: <input type="text" name="search"><br>
  <input type="submit" value="Submit">
</form>
</body>
</html>
<?php
$db_username="admin";
$db_password="firptart!";
$db_host="localhost";
$db_name="testdb";
$link = mysql_connect($db_host, $db_username, $db_password);
mysql_select_db($db_name, $link);


if(isset($_POST["search"]))
{
    $title = $_POST["search"];

    $sql = "SELECT * FROM customers WHERE c LIKE '%$title%'";

    $results= mysql_query($sql);
    $num_rows = mysql_num_rows($results);
    print "$num_rows results. \r\n";
    while($row = mysql_fetch_assoc($results)){
        foreach($row as $cname => $cvalue){
            print "$cvalue\t,";
        }
        print "\r\n";
    }
   echo json_encode($row);	
}
mysql_close($link);
?>
