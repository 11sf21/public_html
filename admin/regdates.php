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
          <li><a href="administratorLinks.html">Administrator</a></li>
        </ul>
      </div>
    </div>

    <table style="border-collapse:collapse;border:1px solid black;">
    <th style="padding:5px;border-top:1px solid black;">Member number</th>
    <th style="padding:5px;border-left:1px solid black;">Name</th>
    <th style="padding:5px;border-left:1px solid black;">Address</th>
    <th style="padding:5px;border-left:1px solid black;">Phone number</th>
    <th style="padding:5px;border-left:1px solid black;">Email</th>
    <th style="padding:5px;border-left:1px solid black;">Driver license Number</th>
    <th style="padding:5px;border-left:1px solid black;">Credit card number</th>
    <th style="padding:5px;border-left:1px solid black;">Credit card expiry</th>
    <th style="padding:5px;border-left:1px solid black;">Registration date</th>

    <?php
      $date = $_POST["date"];
      require_once 'login.php';
	    $conn = new mysqli($hn, $un, $pw, $db);
	    if ($conn->connect_error) die($conn->connect_error);
	
	    $result = mysqli_query($conn, "SELECT * FROM member WHERE registration_date = '$date'")
      or die ("Couldn't execute query.");
           
	    while($row = mysqli_fetch_assoc($result))
      {
        extract($row);
        echo '<tr style="border-top:1px solid black;"><td style="padding:5px;border-top:1px solid black;">'.$member_number.'</td>';
        echo '<td style="padding:5px;border-left:1px solid black;">'.$name.'</td>';
        echo '<td style="padding:5px;border-left:1px solid black;">'.$address.'</td>';
        echo '<td style="padding:5px;border-left:1px solid black;">'.$phone_number.'</td>';
        echo '<td style="padding:5px;border-left:1px solid black;">'.$email.'</td>';
        echo '<td style="padding:5px;border-left:1px solid black;">'.$driver_lic_number.'</td>';
        echo '<td style="padding:5px;border-left:1px solid black;">'.$credit_card_number.'</td>';
        echo '<td style="padding:5px;border-left:1px solid black;">'.$credit_card_expiry.'</td>';
        echo '<td style="padding:5px;border-left:1px solid black;">'.$registration_date.'</td></tr>';
      }
  
      $result->close();
      $conn->close();
    ?>
    </table>
  </body>
</html>