<?php
/* Include your connection file  */
require_once('connect.php');
/* Check if is set the post variable txtName  */
if(isset($_POST['txtName']))
{
/* Get the all form field post variables. */

$txtName = $_POST['txtName'];
$txtEmail = $_POST['txtEmail'];
$txtPhone = $_POST['txtPhone'];

/* Insert your posted data in your database - insert SQL code. */
$sql = "INSERT INTO `tbl_contact` (`Id`, `fldName`, `fldEmail`, `fldPhone`, ) VALUES ('0', '$txtName', '$txtEmail', '$txtPhone')";

/* Run insert query in database.  */
$rs = mysqli_query($con, $sql);

/* Check records is inserted or not. */
if($rs)
{
	echo "Contact Records Inserted";
}
}
else
{
	echo "Are you a genuine visitor?";
	
}
?>
<br/>
<a href="contact.html">Add New Record</a>
