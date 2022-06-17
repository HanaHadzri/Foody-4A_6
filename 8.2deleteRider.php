<?php

include ("dbase.php");

$idURL = $_GET['id'];

$query = "DELETE FROM rider WHERE riderID = '$idURL'";
$result = mysqli_query($conn,$query) or die ("Could not execute query in 8.2deleteRider.php");

if($result){
    echo "<script type='text/javascript'> window.location='7readForm.php' </script>";
}
?>