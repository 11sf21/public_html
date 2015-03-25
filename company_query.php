<html>
<head><title>Sample Queries</title></head>
<body>

<?php
/* Program: query_company.php
 * Desc:    Sample queries on the Company database.
 */
 
 $host = "localhost";
 $user = "root";
 $password = "Chunitwick7";
 $database = "company";

 $cxn = mysqli_connect($host,$user,$password, $database);
 // Check connection
 if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }


 $result = mysqli_query($cxn, "SELECT SSN, FName, LName, Address
		FROM Employee natural join Department
		WHERE DName = 'Research';")
           or die ("Couldn't execute query.");

 echo "<br />Results from Query 1<br />";
 while($row = mysqli_fetch_assoc($result))
      {
        extract($row);
        echo "$SSN, $FName, $LName, $Address<br />";
      }

 
 $result = mysqli_query($cxn, "SELECT PName
		FROM    Project
		WHERE DNo = 5 AND (PLocation = 'Sugarland' OR PLocation = 'Houston');")
          or die ("Couldn't execute query.");

 echo "<br />Results from Query 2<br />";
 while($row = mysqli_fetch_assoc($result))
      {
        extract($row);
        echo "$PName<br />";
      }


 $result = mysqli_query($cxn, "SELECT PNo, PName, COUNT(*) as NumWork
		FROM Project natural join Works_on
		GROUP BY PNo, PName;")
          or die ("Couldn't execute query.");

 echo "<br />Results from Query 3<br />";
 while($row = mysqli_fetch_assoc($result))
      {
        extract($row);
        echo "$PNo, $PName, $NumWork<br />";
      }

 $result = mysqli_query($cxn, "SELECT SSN, LName, Salary
		FROM Employee
		WHERE SSN IN 
			(SELECT MgrSSN 
			FROM Department);") 
         or die ("Couldn't execute query.");

 echo "<br />Results from Query 4<br />";
 while($row = mysqli_fetch_assoc($result))
      {
        extract($row);
        echo "$SSN, $LName, $Salary<br />";
      }
 
 mysqli_close($cxn); 

?>
</body></html>
