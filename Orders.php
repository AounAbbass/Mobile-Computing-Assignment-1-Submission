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
          <li class="nav-item active"><a class="nav-link" href="./Orders.php">Orders</a></li>
          <li class="nav-item"><a class="nav-link" href="./Contact-Us.php">Contact Us</a></li>
          <li class="nav-item"><a class="nav-link" href="./Register.php">Register</a></li>
        </ul>
  </nav>

  </div>
  <div class="container">

    <div class="col-md-7 col-lg-8">
      <h4 class="mb-3">Billing Details</h4>
      <form class="needs-validation was-validated" novalidate="">
        <div class="row g-3">
          <div class="col-sm-6">
            <label for="firstName" class="form-label">First Name</label>
            <input type="text" class="form-control" id="firstName" placeholder="Enter your First Name" value=""
              required="" fdprocessedid="zzqx4">
            <div class="invalid-feedback">
              Valid first name is required.
            </div>
          </div>

          <div class="col-sm-6">
            <label for="lastName" class="form-label">Last Name</label>
            <input type="text" class="form-control" id="lastName" placeholder="Enter you Last Name" value=""
              required="">
            <div class="invalid-feedback">
              Valid last name is required.
            </div>
          </div>

          <div class="col-sm-6">
            <label for="email" class="form-label">Email <span class="text-muted">(Optional)</span></label>
            <input type="email" class="form-control" id="email" placeholder="you@gmail.com" value="">
            <div class="invalid-feedback">
              Please Enter a valid Email Address for Shipping purposes
            </div>
          </div>

          <div class="col-sm-6">
            <label for="address" class="form-label">Address</label>
            <input type="text" class="form-control" id="address" placeholder="1234 Main St" required="">
            <div class="invalid-feedback">
              Please enter a valid shipping address.
            </div>
          </div>

          <div class="col-md-3">
            <label for="zip" class="form-label">Zip</label>
            <input type="text" class="form-control" id="zip" placeholder="e.g. 46000" required="">
            <div class="invalid-feedback">
              Zip code required.
            </div>
          </div>
        </div>

        <button class="w-100 btn btn-primary btn-lg" type="submit">Continue to checkout</button>
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