
<?php
include("connection.php");
error_reporting(0);

	
	?>
	
	<html>
	<head>
	<body style="background-color:grey;">
	<a href="1.htm"><button>Back to Home</button></a></body>
	</head>
	</html>
	
<table style"font-family:arial; font-size:20" width="800" border="1" cellpadding="4" align=center>
<font face=arial size=5 color=blue>
	<tr bgcolor=#009933>
	
		
		<th>NAME</th>
		<th>EMAIL</th>
		<th>CREDIT</th>
		<th>Select</th>
		</tr>
		
	<?php	
	
	$sql="SELECT * FROM users";
$result=mysqli_query($con,$sql) or die("bad query");
$row=mysqli_num_rows($result);
if($row !=0)
{
	
	
	while($data=mysqli_fetch_array($result))
	{
		echo"
		<tr>
        
		<th>".$data['NAME']."</th>
		<th>".$data['EMAIL']."</th>
		<th>".$data['CREDIT']."</th>

				<th><a href='update.php'>Select</a></th>
		</tr>";
		
	}
}
else
{
	echo"no record";
}


?>

</table>




