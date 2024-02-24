<?php
include "connection.php";

if(isset($_GET['id']))
{
	
/*  Write a SQL that pick all records of your my sql table */
$sql = "SELECT * FROM `users` WHERE Id=".$_GET['id'];

/*  Run sql with yout database connection variable  */
$result = mysqli_query($con, $sql);

/* get total numbers of records */
$totalitems = mysqli_num_rows($result);


if($totalitems > 0){
	/*  Get database records of selected Id   */
		$row = mysqli_fetch_assoc($result);
		/* Assign each database field records in a variable  */
		$id=$row['Id'];
		$Name=$row['name'];
		$Email=$row['email'];
		$Password=$row['password'];
			

	?>

<div class="myform">
<button><a href="display.php">View All Records</a></button>
<button><a href="index.php">Add New Data</a></button>

<br><br>
<form class="" method="POST" action="">
        <label for="">Name:</label>
        <input type="text" value="<?php echo $Name;?>" name="txtName" placeholder="Name">
        <label for="">Email:</label>
        <input type="text" value="<?php echo $Email;?>" name="txtEmail" placeholder="Email">
        <label for="">Password:</label>
        <input type="text" value="<?php echo $Password;?>" name="txtPassword" placeholder="Password">
        <input type="submit" name="btnUpdate" value="Update">

    </form>

</div>

    <?php
}
}


include "connection.php";



if (isset($_POST['btnUpdate'])){
$name=$_POST["txtName"];
$email=$_POST["txtEmail"];
$password=$_POST["txtPassword"];

// $sql="INSERT INTO users ('id','name','email','password') VALUES ('0','$name','$email','$password')";
// $rs = mysqli_query($con, $sql);


// $updatesql = "UPDATE FROM 'users' SET 'name'='$name','email'='$email','password'='$password' WHERE Id=".$_GET['id'];
$updatesql = "UPDATE `users` SET `name` = '$name', `email` = '$email', `password` = '$password' WHERE `users`.`Id` = ".$_GET['id'];

$rs = mysqli_query($con, $updatesql); 

if($rs){
    echo '<script>alert("Data Updated !!")</script>'; 
}
}
?>
    
  
