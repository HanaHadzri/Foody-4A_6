<?php
    session_start();
    include("dbase.php");

    extract($_POST);
    
    $query = "SELECT * FROM admin where adminUsrname = '$username' and adminPass = '$userPassword'";
    $result = mysqli_query($conn,$query);

    if(mysqli_num_rows($result) > 0)
    {
        //output data of each row
        foreach($result as $row)
        {
            $id = $row["adminID"];
            $name = $row["adminUsrname"];
        }
        session_start();
        $_SESSION["id"]=$id;
        $_SESSION["uname"]=$name;
        $_SESSION["login"]=1;
        header("location:5adminIndex.php");
    }
    else
    {
        header("location:1loginIndex.html?err=1");
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }
    
?>

