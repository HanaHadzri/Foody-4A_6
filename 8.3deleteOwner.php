<?php

include ("dbase.php");

$idURL = $_GET['id'];

$query = "DELETE FROM restaurant_owner WHERE restaurantOwnerID = '$idURL'";
$result = mysqli_query($conn,$query) or die ("Could not execute query in 8.3deleteOwner.php");

if($result){
    echo "<script type='text/javascript'> window.location='7readForm.php' </script>";
}
?>