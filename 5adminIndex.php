<!DOCTYPE html>
<html>
    <?php
      session_start();

      $cookie_name = "user";
      $cookie_value = $_SESSION["uname"];;
      setcookie($cookie_name, $cookie_value, time() + (120), "/");
   
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

        <title>Index-Admin</title>

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
            <a href="5adminIndex.php" class="active">Home</a>
            <a href="6newUserForm.php">Create New User</a>
            <a href="7readForm.php">View All User</a>
            <a href="10report.php">View Report</a>
          </div>
          <!--SIDE navigation bar END-->
          
          <!--COOKIE here START-->
          <div class="mainContent">
            <h2>Welcome Admin <?php echo $_SESSION["uname"]; ?>!</h2>
            
            <!--CONTENT here START-->
            <?php
              date_default_timezone_set('Asia/Kuala_Lumpur'); 
      
              //seconds * minutes * hours * days + current time
              
              $lastTwoMonths = 60 * 60 * 24 * 60 - time();
              setcookie('lastVisit', date("G:i - d/m/y"), $lastTwoMonths);
              if(isset($_COOKIE['lastVisit']))
              
              {
              $visit = $_COOKIE['lastVisit'];
              echo "Your last visit was - ". $visit;
              }
              else
              echo '<script>alert("This website uses cookies to ensure you get the best experience on our website!")</script>';
            ?>
            <!--COOKIE here END-->
            
          </div>
          <!--CONTENT here END-->
    </body>

    <footer>
        <!--FOOTER fix START-->
        <div class="footer">
          <p>&copy Foody 2022. Group 4A-6</p>
        <!--FOOTER fix END-->
        </div>
    </footer>
</html>