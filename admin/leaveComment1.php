<html>
  <head>
    <title>Add Car</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="../main.css" />
    <link href="../css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
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
    
    <h2>Reply to comment:</h2>
    <div class="container">
      <form class="form-horizontal" role="form" method="post" action="leaveComment2.php">
        <div class="form-group">
          <label class="control-label col-sm-2" for="reply">Reply:</label>
          <div class="col-sm-10">
              <input type="text" class="form-control" name="reply" placeholder="Enter the reply" />
          </div>
        </div>
       
        <?php
          $comment_number = $_POST['comment_number'];
          echo '<input type="hidden" name="comment_number" value="'.$comment_number.'">'; 
        ?>
        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default">Submit</button>
          </div>
        </div>
        </form>
        </form></div>

  </body>
</html>