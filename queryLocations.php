<html>
  <?php
    require_once 'login.php';
      $conn = new mysqli($hn, $un, $pw, $db);
	    if ($conn->connect_error) die($conn->connect_error);
	
	    $result = mysqli_query($conn, "SELECT * FROM locations")
      or die ("Couldn't execute query.");
           
	    while($row = mysqli_fetch_assoc($result))
      {
        extract($row);
        echo "$location_address<br>";
        //echo <<<_END
        //<a href="$location_address.html">$location_address</a>
        //_END;
      }
  
      $result->close();
      $conn->close();
  ?>
  <a href="administratorLinks.html">Return</a> 
</html>
