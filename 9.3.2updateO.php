<!--To update data of ubah.php into database.-->
<?php
include ("dbase.php");

extract ($_POST);

$query = "UPDATE restaurant_owner 

            SET restaurantOwnerUsrname = '$username', restaurantOwnerPass = '$userPassword'

            WHERE restaurantOwnerID = '$id'";

$result = mysqli_query($conn,$query) or die ("Could not execute query in update.php");
if($result){
 echo "<script type = 'text/javascript'> window.location='7readForm.php' </script>";
}
?>