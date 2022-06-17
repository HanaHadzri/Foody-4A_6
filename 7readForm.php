<!DOCTYPE html>
<html>
<head>
<?php
      session_start();    
      // make sure user is logged in
      if (!isset($_SESSION["uname"])) {
        echo '<script>alert("You are not logged in.")</script>';
        echo "<script type='text/javascript'> window.location='1loginIndex.html' </script>";
        exit();
    }
    ?>
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

    <title>View User Foody-Admin</title>

    <?php 
        include("dbase.php");
    ?>
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
        <a href="7readForm.php" class="active">View All User</a>
        <a href="10report.php">View Report</a>
    </div>
    <!--SIDE navigation bar END-->
    
    <!--CONTENT here START-->
    <div class="mainContent">
        <br>
        Please click tab button below to view users>>>
        <hr>
        <div class="tab">
            <button class="tablinks" onclick="openTabUsers(event, 'A')">ADMIN</button>
            <button class="tablinks" onclick="openTabUsers(event, 'G')">GENERAL USER</button>
            <button class="tablinks" onclick="openTabUsers(event, 'O')">RESTAURANT OWNER</button>
            <button class="tablinks" onclick="openTabUsers(event, 'R')">RIDER</button>
        </div>

        <div id="A" class="tabcontent">
            <h3>ADMIN</h3>
            <!--FILTER SEARCH TEXTBOX-->
            <input type="text" id="AInput" onkeyup="filterTableAdmin()" placeholder="Search for usernames.." title="Type in a name">
            <table id="ATable">  
                <tr>
                    <th>ID</th>
                    <th>USERNAME</th>
                    <th>ACTION</th>
                </tr>

                <?php 
                    $query = "SELECT * FROM admin";
                    $result = mysqli_query($conn,$query);
                    
                    if(mysqli_num_rows($result) > 0)
                    {
                        //output data of each row
                        while($row = mysqli_fetch_assoc($result))
                        {
                            $id = $row["adminID"];
                            $name = $row["adminUsrname"];
                        
                ?>
                <tr>
                    <td class="userID"><?php echo $id;?></td>
                    <td class="userName"><?php echo $name;?></td>
                    <td class="userAction">
                        <button onclick="document.location='9.1.1updateFormA.php?id=<?php echo $id; ?>'" class="pillBtn2">EDIT</button>
                        <button onclick="document.location='8.1deleteAdmin.php?id=<?php echo $id; ?>'" class="pillBtn2">DELETE</button>
                    </td>
                </tr>
                <?php
                    }
                }else{
                echo "0 results"; 
                }
                ?>

            </table>
        </div>

        <div id="G" class="tabcontent">
            <h3>GENERAL USER</h3>
            <!--FILTER SEARCH TEXTBOX-->
            <input type="text" id="GInput" onkeyup="filterTableGuser()" placeholder="Search for usernames.." title="Type in a name">
            <table id="GTable">  
                <tr>
                    <th>ID</th>
                    <th>USERNAME</th>
                    <th>ACTION</th>
                </tr>

                <?php 
                    $query = "SELECT * FROM general_user";
                    $result = mysqli_query($conn,$query);
                    
                    if(mysqli_num_rows($result) > 0)
                    {
                        //output data of each row
                        while($row = mysqli_fetch_assoc($result))
                        {
                            $id = $row["generalUsrID"];
                            $name = $row["generalUsrName"];
                        
                ?>
                <tr>
                    <td class="userID"><?php echo $id;?></td>
                    <td class="userName"><?php echo $name;?></td>
                    <td class="userAction">
                        <button onclick="document.location='9.4.1updateFormU.php?id=<?php echo $id; ?>'" class="pillBtn2">EDIT</button>
                        <button onclick="document.location='8.4deleteUser.php?id=<?php echo $id; ?>'" class="pillBtn2">DELETE</button>
                    </td>
                </tr>
                <?php
                    }
                }else{
                echo "0 results"; 
                }
                ?>
            </table>
        </div>

        <div id="O" class="tabcontent">
            <h3>RESTAURANT OWNER</h3>
            <!--FILTER SEARCH TEXTBOX-->
            <input type="text" id="OInput" onkeyup="filterTableOwner()" placeholder="Search for usernames.." title="Type in a name">
            <table id="OTable">  
                <tr>
                    <th>ID</th>
                    <th>USERNAME</th>
                    <th>ACTION</th>
                </tr>

                <?php 
                    $query = "SELECT * FROM restaurant_owner";
                    $result = mysqli_query($conn,$query);
                    
                    if(mysqli_num_rows($result) > 0)
                    {
                        //output data of each row
                        while($row = mysqli_fetch_assoc($result))
                        {
                            $id = $row["restaurantOwnerID"];
                            $name = $row["restaurantOwnerUsrname"];
                        
                ?>
                <tr>
                    <td class="userID"><?php echo $id;?></td>
                    <td class="userName"><?php echo $name;?></td>
                    <td class="userAction">
                        <button onclick="document.location='9.3.1updateFormO.php?id=<?php echo $id; ?>'" class="pillBtn2">EDIT</button>
                        <button onclick="document.location='8.3deleteOwner.php?id=<?php echo $id; ?>'" class="pillBtn2">DELETE</button>
                    </td>
                </tr>
                <?php
                    }
                }else{
                echo "0 results"; 
                }
                ?>
            </table>
        </div>

        <div id="R" class="tabcontent">
            <h3>RIDER</h3>
            <!--FILTER SEARCH TEXTBOX-->
            <input type="text" id="RInput" onkeyup="filterTableR()" placeholder="Search for usernames.." title="Type in a name">
            <table id="RTable">  
                <tr>
                    <th>ID</th>
                    <th>USERNAME</th>
                    <th>ACTION</th>
                </tr>

                <?php 
                    $query = "SELECT * FROM rider";
                    $result = mysqli_query($conn,$query);
                    
                    if(mysqli_num_rows($result) > 0)
                    {
                        //output data of each row
                        while($row = mysqli_fetch_assoc($result))
                        {
                            $id = $row["riderID"];
                            $name = $row["riderUname"];
                        
                ?>
                <tr>
                    <td class="userID"><?php echo $id;?></td>
                    <td class="userName"><?php echo $name;?></td>
                    <td class="userAction">
                        <button onclick="document.location='9.2.1updateFormR.php?id=<?php echo $id; ?>'" class="pillBtn2">EDIT</button>
                        <button onclick="document.location='8.2deleteRider.php?id=<?php echo $id; ?>'" class="pillBtn2">DELETE</button>
                    </td>
                </tr>
                <?php
                    }
                }else{
                echo "0 results"; 
                }
                ?>
            </table>
        </div>
    </div>
    <!--CONTENT here END-->

    <script>
    // Get the modal
    var modal = document.getElementById('id01');

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
    }
    </script>

</body>

<footer>
    <div class="footer">
        <p>&copy Foody 2022. Group 4A-6</p>
    </div>
</footer>

</html>