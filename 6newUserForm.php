<!DOCTYPE html>
<html>
<?php
      session_start();    
      // make sure user is logged in
      if (!isset($_SESSION["uname"])) {
        echo '<script>alert("You are not logged in.")</script>';
        echo "<script type='text/javascript'> window.location='1loginIndex.html' </script>";
        exit();
    }
    ?>
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

        <title>New User Foody-Admin</title>
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
            <a href="6newUserForm.php" class="active">Create New User</a>
            <a href="7readForm.php">View All User</a>
            <a href="10report.php">View Report</a>
          </div>
          <!--SIDE navigation bar END-->
          
          <!--CONTENT here START-->
          <div class="mainContent">
            <center>
                <h1>NEW USER REGISTRATION FORM</h1>
                <hr><br>
                <form action="3insertUser.php" method="post">
                    <table>
                        <tr>
                            <td>
                                <label>USERNAME:</label>
                            </td>
                            <td>
                                <input type="text" name="username" id="username" required class="textbox">
                            </td>
                        </tr>
                        
                        <tr>
                            <td>
                                <label>PASSWORD:</label>
                            </td>
                            <td>
                                <input type="password" name="userPassword" id="userPassword" required class="textbox">
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td class="showPass">
                                <!-- An element to toggle between password visibility -->
                                <input type="checkbox" onclick="passFunction()">Show Password
                            </td>
                        </tr>
    
                        <tr>
                            <td>
                                <label>USER TYPE:</label>
                            </td>
                            <td>
                                <input type="radio" name="userType" id="userTypeC" value="Customer" required class="radiobtn">
                                <label>Customer</label>
                                <input type="radio" name="userType" id="userTypeO" value="Restaurant Owner" class="radiobtn">
                                <label>Restaurant Owner</label>
                                <input type="radio" name="userType" id="userTypeR" value="Rider" class="radiobtn">
                                <label>Rider</label>
                                <input type="radio" name="userType" id="userTypeA" value="Admin" class="radiobtn">
                                <label>Admin</label>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <input type="submit" name="userRegisterBttn" id="userRegisterBttn" value="REGISTER" class="pillBtn">
                                
                                <input type="reset" name="userRegisterReset" id="userRegisterReset" value="RESET" class="pillBtn">

                                <a href="7readForm.php" class="pillBtn" >CANCEL</a>
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