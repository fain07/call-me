
<?php
require_once "dbconnect.php";
$getallsql="select * from `call`;";
$resultt=mysql_query($getallsql);
echo "<table><tr><td>Name</td><td>Phone</td></tr>";
while($roww=mysql_fetch_array($resultt)){
        echo "<tr><td>".utf8_decode($roww['name'])."</td><td>".$roww['phone']."</td></tr>";
}
echo "</table>";
