<!-- isikan.php -->
<!-- To insert data of masuk.php into database. -->
<?php
include("dbase.php");

//Dapatkan data Masuk
extract( $_POST );

if($userType == "Admin")
{
    $query = "INSERT INTO admin (adminUsrname,adminPass, userType) VALUES('$username','$userPassword', 'Admin')";

    if (mysqli_query($conn, $query)) {
        
    echo "<script type='text/javascript'> window.location='7readForm.php' </script>";
        
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }
}
else if($userType == "Customer")
{
    $query = "INSERT INTO general_user (generalUsrname,generalUsrPass, userType) VALUES('$username','$userPassword', 'General User')";

    if (mysqli_query($conn, $query)) {
        
    echo "<script type='text/javascript'> window.location='7readForm.php' </script>";
        
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }
}
else if($userType == "Restaurant Owner")
{
    $query = "INSERT INTO restaurant_owner (restaurantOwnerUsrname,restaurantOwnerPass, userType) VALUES('$username','$userPassword', 'Restaurant Owner')";

    if (mysqli_query($conn, $query)) {
        
    echo "<script type='text/javascript'> window.location='7readForm.php' </script>";
        
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }
}
else
{
    $query = "INSERT INTO rider (riderUname,riderPass, userType) VALUES('$username','$userPassword', 'Rider')";

    if (mysqli_query($conn, $query)) {
        
    echo "<script type='text/javascript'> window.location='7readForm.php' </script>";
        
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }
}

?>