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
          <li><a href="administratorLinks.html">Administrator</a></li>
        </ul>
      </div>
    </div>

Welcome to K-Town Car Share! The guide has been split into two parts: Member and Administrator.

User Guide:
1.  New users will select the Register link in the nav bar located in the top right of the home page.
2.  New users will enter the information required for membership in the form provided and press the Submit button.
3.  A success message will be displayed with the member’s new member number, username, and password to access the member specific page. Right now there is just basic authentication required for the Member and Admin pages.
4.  Members click on the Member link in the nav bar to access the security box and fill in their username and password to access the Member page.
5.  The member page has a new nav bar located below the original nav bar with the choices of: Display Member History, Return Car, Leave a Comment, and Display Locations. Reserving a car is done through the Display Locations link and is explained below.
6.  In Display Member History, the member enters their member number in a form and hits Submit. A table of the member’s reservations are displayed.
7.  In Return Car, the member enters their reservation number, date returned, and time returned in the form to finish their rental.
8.  In Leave a Comment, the member can leave a comment with a specified topic by filling out the form.
9.  In Display Locations, the locations are displayed with a View Cars button beside each to view the cars relevant to each location.
10. Selecting View Cars will show a list of cars at that location with a Reserve Car button listed next to it.
11. Selecting the Reserve Car button brings up a form to fill in to reserve that car and after selecting Submit, the member is shown the reservation that has been entered in the database.

Administrator Guide:
1.  Administrators click on the Administrator link in the nav bar to access the security request box and fill in their username and password to access the Administrator page.
2.  The admin page has a new nav bar located below the original nav bar with the choices of: Cars>5000Km, Cars in Order of Use, Reservations For A Given Day, View Locations, View/Update Comments, and Member Registration Dates.
3.  Except for View Locations, all other choices directly implement functional requirements and are self-explanatory.
4.  In View Locations, a list of the locations is brought up with three buttons that are specific to that location: View Full Info Cars, View Cars and Res Info, and Add Car.
5.  Selecting View Full Info Cars displays a list of all cars at that location with all the attributes of a car listed along with a button to view that car’s rental history.
6.  Selecting View Cars and Res Info displays a less detailed list of cars but also lists reservations for those cars.
7.  Selecting Add Car allows the administrator to insert a new car into the database.

  </body>
</html>