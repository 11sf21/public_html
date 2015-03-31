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
    <th style="padding:5px;border-top:1px solid black;">Address</th>
    <th style="padding:5px;border-top:1px solid black;"></th>

    <?php
      require_once 'login.php';
      $conn = new mysqli($hn, $un, $pw, $db);
	    if ($conn->connect_error) die($conn->connect_error);
	
	    $result = mysqli_query($conn, "SELECT * FROM locations")
      or die ("Couldn't execute query.");
           
	    while($row = mysqli_fetch_assoc($result))
      {
        extract($row);
        //echo "$location_address<br>";
	      //$lot = "$location_address.php";
        //echo '<h2><a href="' . $lot. '">' . $location_address . '</a></h2><br>';
        echo '<tr style="border-top:1px solid black;"><td style="padding:5px;">'.$location_address.'</td>';
        echo '<form method="post" action="lotCars.php">';
        echo '<td style="padding:5px;border-left:1px solid black;"><button type="submit" value="'.$location_address.'" name="address">View Cars</button></td>';
        echo '</form>';

      }
  
      $result->close();
      $conn->close();
    ?>
    </table>
  </body>
</html>
