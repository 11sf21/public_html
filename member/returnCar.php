<!DOCTYPE html>
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
          <li><a href="./memberLinks.html">Member</a></li>
          <li><a href="../admin/administratorLinks.html">Administrator</a></li>
        </ul>
      </div>
    </div>

    <table style="border-collapse:collapse;border:1px solid black;">
    <th style="padding:5px;border-top:1px solid black;">Reservation number</th>
    <th style="padding:5px;border-left:1px solid black;">Member number</th>
    <th style="padding:5px;border-left:1px solid black;">VIN</th>
    <th style="padding:5px;border-left:1px solid black;">Reserve Date</th>
    <th style="padding:5px;border-left:1px solid black;">Pick Up Time</th>
    <th style="padding:5px;border-left:1px solid black;">Hours booked</th>
    <th style="padding:5px;border-left:1px solid black;">Return Date</th>
    <th style="padding:5px;border-left:1px solid black;">Return Time</th>

    <?php
      $reservation_number = $_POST['reservation_number'];
      $date = $_POST['date'];
      $time = $_POST['time'];
      require_once 'login.php';
      $conn = new mysqli($hn, $un, $pw, $db);
      if ($conn->connect_error) die($conn->connect_error);
  
      $result = mysqli_query($conn, "UPDATE reservations SET return_date = '$date', return_time = '$time' WHERE reservation_number = '$reservation_number'")
      or die ("Couldn't execute query.");
      $result = mysqli_query($conn, "SELECT * FROM reservations WHERE reservation_number = '$reservation_number'")
      or die ("Couldn't execute query.");
           
      while($row = mysqli_fetch_assoc($result))
      {
        extract($row);
        $result = mysqli_query($conn, "UPDATE car SET current_status = 'Available' WHERE vin = '$vin'")
      	or die ("Couldn't execute query.");
        //$test = "$location_address.php"; 
        //echo '<a href="' . $test. '">' . $location_address . '</a><br>'; 
        //echo "$vin,  $make,  $model,  $year,  $current_status,  $last_odometer_reading,  $last_maint_odometer,  $location_address<br />";
        echo '<tr style="border-top:1px solid black;"><td style="padding:5px;border-top:1px solid black;">'.$reservation_number.'</td>';
        echo '<td style="padding:5px;border-left:1px solid black;">'.$member_number.'</td>';
        echo '<td style="padding:5px;border-left:1px solid black;">'.$vin.'</td>';
        echo '<td style="padding:5px;border-left:1px solid black;">'.$reserve_date.'</td>';
        echo '<td style="padding:5px;border-left:1px solid black;">'.$pick_up_time.'</td>';
        echo '<td style="padding:5px;border-left:1px solid black;">'.$hours_used.'</td>';
        echo '<td style="padding:5px;border-left:1px solid black;">'.$return_date.'</td>';
        echo '<td style="padding:5px;border-left:1px solid black;">'.$return_time.'</td></tr>';
      }
  
      $result->close();
      $conn->close();
    ?>
    </table>
  </body>
</html>
