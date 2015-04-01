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
    <th style="padding:5px;border-top:1px solid black;">Comment number</th>
    <th style="padding:5px;border-left:1px solid black;">Member number</th>
    <th style="padding:5px;border-left:1px solid black;">Topic</th>
    <th style="padding:5px;border-left:1px solid black;">Comment</th>
    <th style="padding:5px;border-left:1px solid black;"></th>

    <?php
      $comment_number = $_POST['comment_number'];
      $reply = $_POST['reply'];
      
      require_once 'login.php';
      $conn = new mysqli($hn, $un, $pw, $db);
      if ($conn->connect_error) die($conn->connect_error);

      $result = mysqli_query($conn, "SELECT * FROM comments WHERE comment_number = '$comment_number'")
      or die ("Couldn't execute query.");
      while($row = mysqli_fetch_assoc($result))
      {
        extract($row);
        $old_comment = $comment;
        echo $old_comment:
      }
      $new_comment = $reply . ' ' . $old_comment;
      echo $new_comment;
      $result = mysqli_query($conn, "UPDATE comments SET comment = '$old_comment'.'$reply' WHERE comment_number = '$comment_number'")
      or die ("Couldn't execute query.");
           
      $result = mysqli_query($conn, "SELECT * FROM comments")
      or die ("Couldn't execute query.");
           
	    while($row = mysqli_fetch_assoc($result))
      {
        extract($row);
        echo '<tr style="border-top:1px solid black;"><td style="padding:5px;border-top:1px solid black;">'.$comment_number.'</td>';
        echo '<td style="padding:5px;border-left:1px solid black;">'.$member_number.'</td>';
        echo '<td style="padding:5px;border-left:1px solid black;">'.$topic.'</td>';
        echo '<td style="padding:5px;border-left:1px solid black;">'.$comment.'</td></tr>';
      }
  
      $result->close();
      $conn->close();
    ?>
    </table>