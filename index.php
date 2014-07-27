<html>
<head><title>My Call</title></head>
<body>
<form name='first' action='deal.php' method='post'>
name: <input type='text' name='call_key'></input>
mobilephone: <input type='text' name='mobile_key'></input>
<input type='submit' value='submit'></input>
</form>
<?php
require_once "dbconnect.php";
$getallsql="select * from `call`;";
$resultt=mysql_query($getallsql);
echo "<table><tr><td>Name</td><td>Phone</td></tr>";
while($roww=mysql_fetch_array($resultt)){
        echo "<tr><td>".utf8_decode($roww['name'])."</td><td>".$roww['phone']."</td></tr>";
}
echo "</table>";

?>
</body>
</html>
