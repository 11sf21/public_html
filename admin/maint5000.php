<html>
	<table style="border-collapse:collapse;">
	   <tr>
	   <th style="padding:5px;border-top:1px solid black;">VIN</th>
		 <th style="padding:5px;border-left:1px solid black;">Make</th>
		 <th style="padding:5px;border-left:1px solid black;">Model</th>
		 <th style="padding:5px;border-left:1px solid black;">Year</th>
		 <th style="padding:5px;border-left:1px solid black;">Current status</th>
		 <th style="padding:5px;border-left:1px solid black;">Last Odometer</th>
		 <th style="padding:5px;border-left:1px solid black;">Last Maint Odometer</th>
		 <th style="padding:5px;border-left:1px solid black;">Location Address</th>
  <?php
    require_once 'login.php';
	  $conn = new mysqli($hn, $un, $pw, $db);
	  if ($conn->connect_error) die($conn->connect_error);
	
	  $result = mysqli_query($conn, "SELECT * FROM car WHERE (last_odometer_reading - last_maint_odometer) > 5000")
      or die ("Couldn't execute query.");
           
	  while($row = mysqli_fetch_assoc($result))
    {
      extract($row);
      echo '<tr style="border-top:1px solid black;"><td style="padding:5px;border-top:1px solid black;">'.$vin.'</td>';
			echo '<td style="padding:5px;border-left:1px solid black;">'.$make.'</td>';
			echo '<td style="padding:5px;border-left:1px solid black;">'.$model.'</td>';
			echo '<td style="padding:5px;border-left:1px solid black;">'.$year.'</td>';
			echo '<td style="padding:5px;border-left:1px solid black;">'.$current_status.'</td>';
			echo '<td style="padding:5px;border-left:1px solid black;">'.$last_odometer_reading.'</td>';
			echo '<td style="padding:5px;border-left:1px solid black;">'.$last_maint_odometer.'</td>';
			echo '<td style="padding:5px;border-left:1px solid black;">'.$location_address.'</td></tr>';
      //echo "$vin,  $make,  $model,  $year,  $current_status,  $last_odometer_reading,  $last_maint_odometer,  $location_address<br />";
    }
  
    $result->close();
    $conn->close();
  ?>
  </table>
</html>
