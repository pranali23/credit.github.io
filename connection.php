<?php

$host='localhost';
$user='root';
$pass='';
$db='usersdb';
$con=mysqli_connect($host,$user,$pass,$db);

error_reporting(0);

?>
<form method="post">
<tr>
<td><input type="hidden" name="ID" value="<?php echo $data['NAME'];?>"></td>
<tr></form>
