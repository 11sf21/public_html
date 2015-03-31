<html>
  <head>
    <link href="../css/bootstrap.css" rel="stylesheet"> 
    <link rel="stylesheet" href="../main.css"> 
  </head>
  
  <body>
    <div class="nav">
      <div class="container">
        <ul class="pull-left">
          <li><a href="../index.html">KTCS Home</a></li>
        </ul>
        <ul class="pull-right">
          <li><a href="../memberEntry.html">Register</a></li>
          <li><a href="../member/memberLinks.html">Member</a></li>
          <li><a href="administratorLinks.html">Administrator</a></li>
        </ul>
      </div>
    </div>

	<table style="border-collapse:collapse;border:1px solid black;">
	   <th>VIN</th>
		 <th>Make</th>
		 <th>Model</th>
		 <th>Year</th>
		 <th>Current status</th>
		 <th>Last Odometer</th>
		 <th>Last Maint Odometer</th>
		 <th >Location Address</th>
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
  </body>
</html>
