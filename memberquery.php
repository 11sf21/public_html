<?php
	require_once 'login.php';
	$conn = new mysqli($hn, $un, $pw, $db);
	if ($conn->connect_error) die($conn->connect_error);
	
	//$query = "SELECT * From member";
	//$result = $conn->query($query);
	//if (!$result) die($conn->error);
	
	//$rows = $result->num_rows;
	
	//for ($i = 0; $i < $rows; $i++){
		//$result->data_seek($i);
		//$row = $result->fetch_array(MYSQLI_ASSOC);
		//echo 'Member number: ' . $row['member_number'] . '<br>';
		//echo 'Name: ' . $row['name'] . '<br>';
		//echo 'Address: ' . $row['address'] . '<br>';
		//echo 'Phone number: ' . $row['phone_number'] . '<br>';
		//echo 'Email: ' . $row['email'] . '<br>';
		//echo 'Driver license number: ' . $row['driver_lic_number'] . '<br>';
		//echo 'Credit card number: ' . $row['credit_card_number'] . '<br>';
		//echo 'Credit card expiry: ' . $row['credit_card_expiry'] . '<br>';
		//echo 'Date: ' . $row['registration_date'] . '<br><br>';
		
	$result = mysqli_query($conn, "SELECT * FROM member")
           or die ("Couldn't execute query.");
	while($row = mysqli_fetch_assoc($result))
      	{
           extract($row);
           echo "$member_number, $name, $address, $email<br />";
        }

	//}
	$result->close();
	$conn->close();
	
/*	try {
    $dbh = new PDO('mysql:host=localhost;dbname=ktcs', "root", "Chunitwick7");
    $rows = $dbh->query("select * from member");

    
    foreach($rows as $row) {
	    #echo "<tr><td>".$row[0]."</td><td>".$row[1]."</td><td>".$row[2]."</td><td>".$row[3]"</td></tr>";
		echo "<tr><td>".$row[0]."</td><td>".$row[1]."</td><td>".$row[2]."</td><td>".$row[3]."</td><td>".$row[4]."</td></tr>" .
		$row[5]."</td><td>".$row[6]."</td><td>".$row[7]."</td><td>".$row[8]."</td></tr>";
    }
    $dbh = null;
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
*/	
?>
