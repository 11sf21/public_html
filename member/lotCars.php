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
    <div class="nav">
      <div class="container">
        <ul class="pull-right">
          <li><a href="reserveCar.html">Reserve Car</a></li>
        </ul>
      </div>
    </div>

    <table style="border-collapse:collapse;border:1px solid black;">
    <th style="padding:5px;border-top:1px solid black;">VIN</th>
    <th style="padding:5px;border-left:1px solid black;">Make</th>
    <th style="padding:5px;border-left:1px solid black;">Model</th>
    <th style="padding:5px;border-left:1px solid black;">Year</th>
    <th style="padding:5px;border-left:1px solid black;">Current status</th>
    <th style="padding:5px;border-left:1px solid black;">Last Odometer</th>
    <th style="padding:5px;border-left:1px solid black;">Last Maint Odometer</th>
    <th style="padding:5px;border-left:1px solid black;">Location Address</th>
    <th style="padding:5px;border-left:1px solid black;"></th>
    <?php
      $loc_address = $_POST["address"];
      require_once 'login.php';
      $conn = new mysqli($hn, $un, $pw, $db);
      if ($conn->connect_error) die($conn->connect_error);
  
      $result = mysqli_query($conn, "SELECT * FROM car WHERE location_address = '$loc_address'")
      or die ("Couldn't execute query.");
           
      while($row = mysqli_fetch_assoc($result))
      {
        extract($row);
        //$test = "$location_address.php"; 
        //echo '<a href="' . $test. '">' . $location_address . '</a><br>'; 
        //echo "$vin,  $make,  $model,  $year,  $current_status,  $last_odometer_reading,  $last_maint_odometer,  $location_address<br />";
        echo '<tr style="border-top:1px solid black;"><td style="padding:5px;border-top:1px solid black;">'.$vin.'</td>';
        echo '<td style="padding:5px;border-left:1px solid black;">'.$make.'</td>';
        echo '<td style="padding:5px;border-left:1px solid black;">'.$model.'</td>';
        echo '<td style="padding:5px;border-left:1px solid black;">'.$year.'</td>';
        echo '<td style="padding:5px;border-left:1px solid black;">'.$current_status.'</td>';
        echo '<td style="padding:5px;border-left:1px solid black;">'.$last_odometer_reading.'</td>';
        echo '<td style="padding:5px;border-left:1px solid black;">'.$last_maint_odometer.'</td>';
        echo '<td style="padding:5px;border-left:1px solid black;">'.$location_address.'</td>';
        echo '<form method="post" action="reserveCar.php">';
        echo '<td style="padding:5px;border-left:1px solid black;"><button type="submit" value="'.$vin.'" name="vin">Reserve Car</button></td>';
        echo '</form>';


      }
  
      $result->close();
      $conn->close();
    ?>
    </table>
  </body>
</html>
