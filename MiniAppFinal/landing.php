<?php 
session_start();
include 'connection.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/all.min.css">
<script src="js/bootstrap.bundle.js"></script>
</head>
<body class="bg-image"
     style="background-image: url('img/expresscov.jpg');">
>
       
<nav class="navbar navbar-expand-lg bg-success">
  <div class="container-fluid">
   
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
       
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-white fs-5" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Home
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="logAd.php">Admin</a></li>
            <li><a class="dropdown-item" href="login.php">User</a></li>
            <li><a class="dropdown-item" href="about.php">About Us</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="contact.php">Contact Us</a></li>
          </ul>
        </li>
        <ul class="navbar-nav">
                        <li class="nav-item">
                          
                                    <a href="register.php" class="nav-link position-absolute top-0 end-0 m-2 text-white fs-5">Sign Up</a>

                        </li>
                    </ul>
      </ul>
    </div>
  </div>
</nav>

  <br>
  <br>
  <br>
  
<div class="container">

<h1 class="text-warning float-end"><b><i>RMB EXPRESS</i></b></h1>
  <br> <br> <br>
  <form method="POST">
    <input type="text" class="col-md-6 p-3 mt-5" placeholder="Type your tracking number" name="keyword" required>
    <button type="submit" class="btn btn-dark  btn-sm p-2 ms-3 " name="search"  >Search</button>

</form>
<br /><br />
    			<?php include'search.php'?>
</div>
 
    </body>
    </html>