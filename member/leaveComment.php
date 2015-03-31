<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Leave a comment!</title>
  </head>
  <body>

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
  </body>
</html>
