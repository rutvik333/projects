<button><a href="display.php">View All Records</a></button>
<button><a href="index.php">Add New Data</a></button>
<br><br>

<?php
include "connection.php";


if(isset($_GET['id']))
{

	$sql = "DELETE FROM `users` WHERE `users`.`Id` =  ".$_GET['id'];

	$rs = mysqli_query($con, $sql);

	if($rs)
	{
		echo "Contact Records Deleted";
	}
	
}
else
{
	echo "Are you a genuine visitor?";
	
}
?>
