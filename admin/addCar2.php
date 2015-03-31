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
          <li><a href="../member/memberLinks.html">Member</a></li>
          <li><a href="./administratorLinks.html">Administrator</a></li>
        </ul>
      </div>
    </div>

    <table style="border-collapse:collapse;border:1px solid black;">
    <th style="padding:5px;border-top:1px solid black;">VIN</th>
    <th style="padding:5px;border-left:1px solid black;">Make</th>
    <th style="padding:5px;border-left:1px solid black;">Model</th>
    <th style="padding:5px;border-left:1px solid black;">Year</th>
    <th style="padding:5px;border-left:1px solid black;">Current Status</th>
    <th style="padding:5px;border-left:1px solid black;">Last odom reading</th>
    <th style="padding:5px;border-left:1px solid black;">Last Gas Tank reading</th>
    <th style="padding:5px;border-left:1px solid black;">Last maint date</th>
    <th style="padding:5px;border-left:1px solid black;">Last maint odom</th>
    <th style="padding:5px;border-left:1px solid black;">Location Address</th>

    <?php
      $vin = $_POST['vin'];
      $make = $_POST['make'];
      $model = $_POST['model'];
      $year = $_POST['year'];
      $last_odom = $_POST['last_odom'];
      $last_maint_date = $_POST['last_maint_date'];
      $last_maint_odom = $_POST['last_maint_odom'];
      $location_address = $_POST['location_address'];
      $current_status = 'Available';
      $last_gas_tank_reading = 'full tank';
      echo $vin;
      echo $make;
      echo $model;
      echo $year;
      echo $current_status;
      echo $last_odom;
      echo $last_gas_tank_reading;
      echo $last_maint_date;
      echo $last_maint_odom;
      echo $location_address;
      

      require_once 'login.php';
      $conn = new mysqli($hn, $un, $pw, $db);
      if ($conn->connect_error) die($conn->connect_error);

  
      $query = "INSERT INTO car (vin, make, model, year, current_status, last_odometer_reading, last_gas_tank_reading, " .
      "last_maint_date, last_maint_odometer, location_address) " .
      "VALUES ('$vin', '$make', '$model', '$year', '$current_status', '$last_odom', '$last_gas_tank_reading', '$last_maint_date', '$last_maint_odom', '$location_address')";
      echo $query;

      //$result = mysqli_query($conn, $query)
      //or die ("Couldn't execute insertion.");

      $result = mysqli_query($conn, "SELECT * FROM car WHERE location_address = '$location_address'")
      or die ("Couldn't execute query.");
           
      while($row = mysqli_fetch_assoc($result))
      {
        extract($row);
        $result = mysqli_query($conn, "UPDATE car SET current_status = 'Available' WHERE vin = '$vin'")
      	or die ("Couldn't execute query.");
        //$test = "$location_address.php"; 
        //echo '<a href="' . $test. '">' . $location_address . '</a><br>'; 
        //echo "$vin,  $make,  $model,  $year,  $current_status,  $last_odometer_reading,  $last_maint_odometer,  $location_address<br />";
        echo '<tr style="border-top:1px solid black;"><td style="padding:5px;border-top:1px solid black;">'.$vin.'</td>';
        echo '<td style="padding:5px;border-left:1px solid black;">'.$make.'</td>';
        echo '<td style="padding:5px;border-left:1px solid black;">'.$model.'</td>';
        echo '<td style="padding:5px;border-left:1px solid black;">'.$year.'</td>';
        echo '<td style="padding:5px;border-left:1px solid black;">'.$current_status.'</td>';
        echo '<td style="padding:5px;border-left:1px solid black;">'.$last_odometer_reading.'</td>';
        echo '<td style="padding:5px;border-left:1px solid black;">'.$last_gas_tank_reading.'</td>';
        echo '<td style="padding:5px;border-left:1px solid black;">'.$last_maint_date.'</td>';
        echo '<td style="padding:5px;border-left:1px solid black;">'.$last_maint_odometer.'</td>';
        echo '<td style="padding:5px;border-left:1px solid black;">'.$location_address.'</td></tr>';
      }
  
      $result->close();
      $conn->close();
    ?>
    </table>
  </body>
</html>