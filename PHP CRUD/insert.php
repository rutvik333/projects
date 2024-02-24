<?php
include "connection.php";



if (isset($_POST['btnSubmit'])){
$name=$_POST["txtName"];
$email=$_POST["txtEmail"];
$password=$_POST["txtPassword"];

// $sql="INSERT INTO users ('id','name','email','password') VALUES ('0','$name','$email','$password')";
// $rs = mysqli_query($con, $sql);


$sql = "INSERT INTO `users` (`id`, `name`, `email`, `password` ) VALUES ('0', '$name', '$email', '$password')";
$rs = mysqli_query($con, $sql); 

if($rs){
    echo '<script>alert("Data Inserted !!")</script>'; 
}
}
?>