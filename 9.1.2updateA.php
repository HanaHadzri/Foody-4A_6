<!--To update data of ubah.php into database.-->
<?php
include ("dbase.php");

extract ($_POST);

$query = "UPDATE admin SET adminUsrname = '$username', adminPass = '$userPassword' WHERE adminID = '$id'";

$result = mysqli_query($conn,$query) or die ("Could not execute query in update.php");
if($result){
 echo "<script type = 'text/javascript'> window.location='7readForm.php' </script>";
}
?>