<!DOCTYPE html>
<html>
  <head>
    
    <link href="./css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="main.css">
  </head>
  
  <body>
    <div class="nav">
      <div class="container">
        <ul class="pull-left">
          <li><a href="index.html">KTCS Home</a></li>
        </ul>
        <ul class="pull-right">
          <li><a href="memberEntry.html">Display Car Rental History</a></li>
          <li><a href="memberLinks.html">Add Car to Location</a></li>
          // <li><a href="administratorLinks.html">Administrator</a></li>
        </ul>
      </div>
    </div>

<?php
  require_once 'login.php';
	$conn = new mysqli($hn, $un, $pw, $db);
	if ($conn->connect_error) die($conn->connect_error);
	
	$result = mysqli_query($conn, "SELECT * FROM car WHERE location_address = \"Lot 1\"")
  or die ("Couldn't execute query.");
           
	while($row = mysqli_fetch_assoc($result))
  {
    extract($row);
    $test = "$location_address.php"; 
    echo '<a href="' . $test. '">' . $location_address . '</a><br>'; 

    echo "$vin,  $make,  $model,  $year,  $current_status,  $last_odometer_reading,  $last_maint_odometer,  $location_address<br />";
  }
  
  $result->close();
  $conn->close();
?>

  <a href="administratorLinks.html">Return</a> 
</html>
