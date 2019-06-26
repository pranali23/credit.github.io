<?php
include("connection.php");
error_reporting(0);

if(isset($_POST['Send']))
{
	$fromuser=$_POST['NAME'];
 $touser=$_POST['ID'];
 $amount=$_POST['Amount'];
 
 $update=mysql_query("UPDATE 'users' SET 'CREDIT'='CREDIT'+'$amount' WHERE 'ID'='$touser'");
 $update2=mysqli_query("UPDATE 'users' SET 'CREDIT'='CREDIT'-'$amount' WHERE 'NAME'='$fromuser'");
 
 
 
}

?>
<body style="text-align:center; margin:200px 50px 55px 55px; background-color:green;">

<form action="view users.php" method="post">
<input type="hidden" name="ID" value="<?php echo $data['NAME'];?>">
Send To<input type="text" list="Send To" name="ID">
<datalist id="Send To">
<option value="Ranjit">Ranjit</option>
<option value="Kalpesh">Kalpesh</option>
<option value="Prapti">Prapti</option>
<option value="Avi">Avi</option>
<option value="Rony">Rony</option>
<option value="Ruhi">Ruhi</option>
<option value="Ananya">Ananya</option>
<option value="Raju">Raju</option>
<option value="Dani">Dani</option>
<option value="Manashree">Manashree</option>
</datalist><br><br>
Amount<input type="number" name="Amount" value=""/><br><br>
<input type="hidden" name="ID" value="<?php echo $data['NAME'];?>"/>
<input type="submit" name="Send" value="Send"/>


</form>
</body>

	

