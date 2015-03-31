<html>
  <head>
    <title>Reserve Car</title>
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
          <li><a href="./memberLinks.html">Member</a></li>
          <li><a href="../admin/administratorLinks.html">Administrator</a></li>
        </ul>
      </div>
    </div>
    
    <h2>Reserve your car:</h2>
    <div class="container">
      <form class="form-horizontal" role="form" method="post" action="reserveCar2.php">
        <div class="form-group">
          <label class="control-label col-sm-2" for="member_number">Member Number:</label>
          <div class="col-sm-10">
              <input type="text" class="form-control" name="member_number" placeholder="Enter your member number" />
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="date">Date for pick up:</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="date" placeholder="Enter pick up date in YYYY-MM-DD format" />
          </div>
        </div>
         <div class="form-group">
          <label class="control-label col-sm-2" for="time">Time for pick up:</label>
          <div class="col-sm-10">
          	<input type="text" class="form-control" name="time" placeholder="Enter pick up time in hh:mm:ss (24 hr format)" />
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="hours">Hours of use:</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="hours" placeholder="Enter amount of hours" />
          </div>
        </div>
        <?php
          $vin = $_POST['vin'];
          echo '  <input type="hidden" name="vin" value="'.$vin.'">' 
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