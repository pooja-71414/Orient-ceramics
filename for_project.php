<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>menu</title>
  <?php include 'css.php'; ?>
  <style>
    .bg-image {
      background-image: url('image/bg1.jpeg');
      background-size: cover;
      background-position: center;
      height: 100vh;
    }
  </style>
</head>

<body class="bg-image">
  <nav class="navbar navbar-expand-lg navbar-light bg-dark">
    <div class="container">
      <a class="navbar-brand" href="index.php"><img src="image/logo.jpg" alt="Logo" height="50"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active"><button class="btn btn-dark"><a class="nav-link text-light" href="index.php">
                <h4>HOPE HOSPITAL</h4>
              </a></button></li>
        </ul>
      </div>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </nav>
  <nav class="navbar container align-item-center   viral-card  m-2 navbar-expand-lg mt-3 p-2 ">
    <div class="container-fluid text-center">

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item ">
            <a class="nav-link " href="index.php">
              <h5>Home</h5>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link  " href="about-us.php">
              <h5>About-Us</h5>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link  " href="contact-us.php">
              <h5>Contact-Us</h5>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link " href="feedback.php">
              <h5>feedback</h5>
            </a>
          </li>
        </ul>
        <a href="registration.php">registration</a>
      </div>
    </div>
  </nav>
  <?php include 'js.php' ?>
</body>

</html>