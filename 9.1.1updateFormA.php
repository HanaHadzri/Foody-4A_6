<!DOCTYPE html>
<?php
      session_start();    
      // make sure user is logged in
      if (!isset($_SESSION["uname"])) {
        echo '<script>alert("You are not logged in.")</script>';
        echo "<script type='text/javascript'> window.location='1loginIndex.html' </script>";
        exit();
    }
    ?>
<?php 
    include("dbase.php");

    $idUrl = $_GET['id'];

    $query = "SELECT * FROM admin where adminID = '$idUrl' ";
    $result = mysqli_query($conn,$query)or die ("Could not execute query in edit.php");
    $row = mysqli_fetch_assoc($result);

    $id = $row["adminID"];
    $name = $row["adminUsrname"];
    $password = $row["adminPass"];
      
?>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="keywords" content="HTML,CSS,PHP,JavaScript">
        <meta name="author" content="CD20135 HANA FATIHA BINTI HADZRI">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link rel="stylesheet" href="foodyCSS/foodyStyle.css">
        
        <!--Google font style embedded START-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Concert+One&display=swap" rel="stylesheet">
        <!--Google font style embedded END-->

        <script src="foodyJS/foodyScript.js"></script>

        <title>Update Admin-Admin</title>

    </head>

    <body>
        <!--HEADER navigation bar START-->
        <div class="navbar">
            <a class="logo">
                <img src="foodyCSS/logo_take-away.png" width="20px" height="20px">
                UMP Foody
            </a> 
            <a href="destroySession.php" onclick="return confirm('Are you sure you want to logout?')" class="split">Logout</a>
            </div>
            <!--HEADER navigation bar END-->

            <!--Purpose: To add a top margin to avoid content overlay-->
            <div class="main">
            <p>Some text some text some text some text..</p>
            </div>

            <!--SIDE navigation bar START-->
            <div class="sidenav">
            <a href="5adminIndex.php">Home</a>
            <a href="6newUserForm.php">Create New User</a>
            <a href="7readForm.php">View All User</a>
            <a href="10report.php">View Report</a>
            </div>
            <!--SIDE navigation bar END-->

            <!--CONTENT here START-->
            <div class="mainContent">
            <center>
                <h1>EDIT USER PROFILE FORM</h1>
                <form action="9.1.2updateA.php" method="post">
                    <table>
                        <tr>
                            <td>
                                <label>USERNAME:</label>
                            </td>
                            <td>
                                <input type="text" name="username" id="username" value="<?php echo $name?>" required class="textbox">
                            </td>
                        </tr>
                        
                        <tr>
                            <td>
                                <label>PASSWORD:</label>
                            </td>
                            <td>
                                <input type="password" name="userPassword" id="userPassword" value="<?php echo $password?>" required class="textbox">
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td class="showPass">
                                <!-- An element to toggle between password visibility -->
                                <input type="checkbox" onclick="passFunction()"><label>Show Password</label>
                            </td>
                        </tr>
                        
                        <tr>
                            <td></td>
                            <td>
                                <input type="hidden" name="id" value="<?php echo $idUrl;?>">

                                <input type="submit" name="userUpdateBttn" id="userUpdateBttn" value="UPDATE" class="pillBtn">
                                
                                <input type="reset" name="userUpdateReset" id="userUpdateReset" value="RESET" class="pillBtn">

                                <a href="7readForm.php" class="pillBtn" >CANCEL UPDATE</a>
                            </td>
                        </tr>                
                    </table>
                </form>
            </center>          
            </div>
            <!--CONTENT here END-->
    </body>

    <footer>
        <div class="footer">
        <p>&copy Foody 2022. Group 4A-6</p>
        </div>
    </footer>
</html>