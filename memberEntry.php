<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>K-Town Car Share Registration</title>
</head>
<body>
  <h2>K-Town Car Share Registration</h2>

<?php
  require_once 'login.php';
  
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
        

  mysqli_close($dbc);


?>
<a href="index.html">KTCS Home</a>
</body>
</html>
