<?php
include "connection.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <title>Document</title>
</head>
<body>

    <h2>Form</h2>
    <button><a href="display.php">View All Records</a></button>
    <br><br>
<div class="myform">
<form class="" method="POST" action="insert.php">
        <label for="">Name:</label>
        <input type="text" name="txtName" placeholder="Name">
        <label for="">Email:</label>
        <input type="text" name="txtEmail" placeholder="Email">
        <label for="">Password:</label>
        <input type="text" name="txtPassword" placeholder="Password">
        <input type="submit" name="btnSubmit" value="Submit">

    </form>
</div>
   

   
</body>
</html>