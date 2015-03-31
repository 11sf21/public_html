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
    
    <h2>Add a car:</h2>
    <div class="container">
      <form class="form-horizontal" role="form" method="post" action="addCar2.php">
        <div class="form-group">
          <label class="control-label col-sm-2" for="vin">Vin:</label>
          <div class="col-sm-10">
              <input type="text" class="form-control" name="vin" placeholder="Enter the VIN" />
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="make">Make:</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="make" placeholder="Enter make of car" />
          </div>
        </div>
         <div class="form-group">
          <label class="control-label col-sm-2" for="model">Model:</label>
          <div class="col-sm-10">
          	<input type="text" class="form-control" name="model" placeholder="Enter model of car" />
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="year">Hours of use:</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="year" placeholder="Enter year" />
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="last_odom">Last odometer reading:</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="last_odom" placeholder="Enter last odometer reading" />
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="last_maint_date">Last maintenance date:</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="last_maint_date" placeholder="Enter date in YYYY-MM-DD" />
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="last_maint_odom">Last maintenance odometer:</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="last_maint_odom" placeholder="Enter last maint odometer" />
          </div>
        </div>
        <?php
          $location_address = $_POST['address'];
          echo '<input type="hidden" name="location_address" value="'.$location_address.'">'; 
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