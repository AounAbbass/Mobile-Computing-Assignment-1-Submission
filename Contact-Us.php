<html lang="en">

<head>
  <title>Goals</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" />
  <link rel="stylesheet" href="./style.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
  <nav class="d-flex navbar navbar-inverse navbar-dark bg-light no-wrap" id="fixednav">
    <div class="container-fluid">
      <div class="navbar-header">

        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <i class="fa fa-bars" style="font-size:24px"></i>
        </button>

        <a class="navbar-brand" href="#">EzMerch</a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li class="nav-item"><a class="nav-link" href="./Home (2).php">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="./Hoodies.php">Hoodies</a></li>
          <li class="nav-item"><a class="nav-link" href="./T-Shirts.php">T-Shirts</a></li>
          <li class="nav-item"><a class="nav-link" href="./Trousers&Shorts.php">Trousers/Shorts</a></li>
          <li class="nav-item"><a class="nav-link" href="./Orders.php">Orders</a></li>
          <li class="nav-item active"><a class="nav-link" href="./Contact-Us.php">Contact Us</a></li>
          <li class="nav-item"><a class="nav-link" href="./Register.php">Register</a></li>
        </ul>
  </nav>
  <div class="container">
    <form action="action_page.php">

      <label for="fname">First Name</label>
      <input type="text" id="fname" name="firstname" placeholder="Your name..">

      <label for="lname">Last Name</label>
      <input type="text" id="lname" name="lastname" placeholder="Your last name..">

      <label for="country">Country</label>
      <input type="text" id="country" name="country" placeholder="Your Country for Shipping...">

      <label for="subject">Subject</label>
      <textarea id="subject" name="subject" placeholder="Let us know your thoughts..." style="height:200px"></textarea>

      <input type="submit" value="Submit">

    </form>
    <footer>
      <div class="container">
        <div class="row">
          <div class="row justify-content-center">
            <div class="col-auto">
              <p>?? Copyright 2022 EzMerch</p>
            </div>
            <a href="mailto:hege@example.com">maliccaoun@gmail.com</a></p>
          </div>
        </div>
      </div>
    </footer>
</body>

</html>