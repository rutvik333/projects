<?php
include "connection.php";



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<button><a href="index.php">Add New Data</a></button>
<br><br>

    <table border="1px">
        <tr>
        <th>id</th>
            <th>Name</th>
            <th>Email</th>
            <th colspan="2">Action</th>

        </tr>
<?php
$sql="SELECT * FROM users";
$rs = mysqli_query($con, $sql); 
$result=mysqli_num_rows($rs);

if($result){
    while($row=mysqli_fetch_array($rs)){
        ?>
<tr>
    <td>
        <?php echo $row['Id']; ?>
    </td>
    <td>
        <?php echo $row['name']; ?>
    </td>
    <td>
        <?php echo $row['email']; ?>
    </td>
    <td>
        <a href="update.php?id=<?php echo $row['Id']; ?>
">Edit</a>

    </td>
    <td>
        <a href="delete.php?id=<?php echo $row['Id']; ?>
">Delete</a>

    </td>
</tr>

        <?php

    }
}
?>
    </table>
</body>
</html>
