<html>
  <head>
    <title>K-Town Car Share Registration</title>
    <link rel="stylesheet" href="./main.css" />
    <link href="./css/bootstrap.css" rel="stylesheet">
  </head>
  <body>
    <div class="nav">
      <div class="container">
        <ul class="pull-left">
          <li><a href="./index.html">KTCS Home</a></li>
        </ul>
        <ul class="pull-right">
          <li><a href="./memberEntry.html">Register</a></li>
          <li><a href="./member/memberLinks.html">Member</a></li>
          <li><a href="./admin/administratorLinks.html">Administrator</a></li>
        </ul>
      </div>
    </div>
    <h2>K-Town Car Share Registration</h2>

    <?php
      /*require_once 'login.php';
  
      $name = $_POST['name'];
      $address = $_POST['address'];
      $phonenumber = $_POST['phonenumber'];
      $email = $_POST['email'];
      $driverlicnumber = $_POST['driverlicnumber'];
      $creditcardnumber = $_POST['creditcardnumber'];
      $creditcardexpiry = $_POST['creditcardexpiry'];
      $date = date("Y-m-d");

      $dbc = mysqli_connect($hn, $un, $pw, $db)
      or die('Error connecting to MySQL server.');

      $query = "INSERT INTO member (member_number, name, address,phone_number, " .
      "email, driver_lic_number, credit_card_number, credit_card_expiry, registration_date) " .
      "VALUES (NULL, '$name', '$address', '$phonenumber', '$email', '$driverlicnumber', " .
      "'$creditcardnumber', '$creditcardexpiry', '$date')";

      $result = mysqli_query($dbc, $query)
      or die('Error querying database.');
	 
	   $result = mysqli_query($dbc, "SELECT * FROM member WHERE name = '$name'")
     or die ("Couldn't execute query.");
	   while($row = mysqli_fetch_assoc($result))
      {
        extract($row);
        echo "Successfully added new member!"
        echo "Your member number is $member_number<br />";
      }

      mysqli_close($dbc);*/
    ?>
  </body>
</html>
