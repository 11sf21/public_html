<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Leave a comment!</title>
  </head>
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
          <li><a href="administratorLinks.html">Admin</a></li>
        </ul>
      </div>
    </div>
    <?php
      require_once 'login.php';
  
      $member_number = $_POST['member_number'];
      $topic = $_POST['topic'];
      $comment = $_POST['comment'];

      $dbc = mysqli_connect($hn, $un, $pw, $db)
      or die('Error connecting to MySQL server.');

      $query = "INSERT INTO comments (comment_number, member_number, topic, comment) " .
      "VALUES (NULL, '$member_number', '$topic', '$comment')";

      $result = mysqli_query($dbc, $query)
      or die('Error querying database.');
	
      mysqli_close($dbc);
    ?>
    <h2>Thanks for leaving a comment!</h2>
  </body>
</html>
