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
          <li><a href="./administratorLinks.html">Administrator</a></li>
        </ul>
      </div>
    </div>

	<table style="border-collapse:collapse;border:1px solid black;">
	   <th style="padding:5px;border-top:1px solid black;">VIN</th>
		 <th style="padding:5px;border-left:1px solid black;">NUMBER_RENTALS</th>

  	<?php
    	require_once 'login.php';
	  	$conn = new mysqli($hn, $un, $pw, $db);
	  	if ($conn->connect_error) die($conn->connect_error);
	
	  	$result = mysqli_query($conn, "SELECT vin, count(vin) as NUMBER_RENTALS FROM reservations GROUP BY vin ORDER BY NUMBER_RENTALS DESC LIMIT 1")
      	or die ("Couldn't execute query.");
           
	  	while($row = mysqli_fetch_assoc($result))
    	{
      		extract($row);
      		echo '<tr style="border-top:1px solid black;"><td style="padding:5px;border-top:1px solid black;">'.$vin.'</td>';
			echo '<td style="padding:5px;border-left:1px solid black;">'.$NUMBER_RENTALS.'</td>';

      //echo "$vin,  $make,  $model,  $year,  $current_status,  $last_odometer_reading,  $last_maint_odometer,  $location_address<br />";
    	}
  
    $result->close();
    $conn->close();
  ?>
  </table>
  </body>
</html>