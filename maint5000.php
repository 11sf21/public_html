<?php
  require_once 'login.php';
	$conn = new mysqli($hn, $un, $pw, $db);
	if ($conn->connect_error) die($conn->connect_error);
	
	$result = mysqli_query($conn, "SELECT * FROM car WHERE (last_odometer_reading - last_maint_odometer) > 5000")
           or die ("Couldn't execute query.");
           
	while($row = mysqli_fetch_assoc($result))
  {
    extract($row);
    echo "$vin, $make, $model, $year, $current_status, $last_odometer_reading, $last_maint_odometer, $location_address<br />";
  }
  
	$result->close();
	$conn->close();

?>
