<!DOCTYPE html>
<html lang="en">
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
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

  <title>Report Foody-Admin</title>
</head>

<?php 
  include("dbase.php");
  $query1 = ("
    SELECT COUNT(adminID) as Total_User,userType as User_Type 
    FROM admin 
      GROUP BY userType
  UNION ALL
  SELECT COUNT(generalUsrID)as Total_User,userType as User_Type
    FROM general_user 
      GROUP BY userType
  UNION ALL
  SELECT COUNT(restaurantOwnerID)as Total_User,userType as User_Type
    FROM restaurant_owner 
      GROUP BY userType
  UNION ALL
  SELECT COUNT(riderID)as Total_User,userType as User_Type
    FROM rider 
      GROUP BY userType;
  ");

  $result = mysqli_query($conn,$query1);
    
    if(mysqli_num_rows($result) > 0)
    {
        //output data of each row
        foreach($result as $row)
        {
          $userType[] = $row['User_Type'];
          $amount[] = $row['Total_User'];
        }
    }
?>

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
    <a href="5adminIndex.php" >Home</a>
    <a href="6newUserForm.php">Create New User</a>
    <a href="7readForm.php">View All User</a>
    <a href="10report.php" class="active">View Report</a>
  </div>
  <!--SIDE navigation bar END-->
  
  <!--CONTENT here START-->
  <div class="mainContent">
    <center><h1>USER REPORT VISUALIZATION</h1>
    <hr>
    <div style="width: 500px;">
      <canvas id="donutChart"></canvas>
      <canvas id="Chart"></canvas>
    </div>  
    </center>        
  </div>
  <!--CONTENT here END-->
  
  
  <script>
    const labels = <?php echo json_encode($userType) ?>;
    const data = {
      labels: labels,
      datasets: [{
        label: [
          'Admin',
          'General User',
          'Restaurant Owner',
          'Rider'
        ],
        data: <?php echo json_encode($amount) ?>,
        backgroundColor: [
          'rgb(255, 99, 132)',
          'rgb(54, 162, 235)',
          'rgb(255, 205, 86)',
          'rgba(201, 203, 207)'
        ],
        hoverOffset: 4
      }]
    };

    const config = {
      type: 'doughnut',
      data: data
    };

    var myChart = new Chart(
      document.getElementById('donutChart'),
      config
    );
  </script>

</body>
<footer>
    <div class="footer">
        <p>&copy Foody 2022. Group 4A-6</p>
    </div>
  </footer>
</html>