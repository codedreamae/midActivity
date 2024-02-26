<?php 
session_start();
include 'connection.php';

if(isset($_SESSION['logged_in'])){
  header("Location: index.php");
}
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
<body class="bg-primary-subtle">

<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
   
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
       
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Home
          </a>
          <ul class="dropdown-menu">
        
            <li><a class="dropdown-item" href="about.php">About Us</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="contact.php">Contact Us</a></li>
          </ul>
        </li>
        <ul class="navbar-nav">
                        <li class="nav-item">
                             
                                    <a href="register.php" class="nav-link position-absolute top-0 end-0 m-2">Sign Up</a>
                           
                        </li>
                    </ul>
        
      </ul>
    </div>
  </div>
</nav>
        <div class="main-content"> 
        <div class="position-absolute bottom-30 start-50 translate-middle-x col-md-4 mb-5 mt-3">
       
       <form action="function.php" method="post" class="m-4">
       <div class="card justify-content-center mt-5 bg-info-subtle " style="width: 30rem;"> 
  <div class="card-body">
            <div class="m-4 mb-3 ">
                <label for="" >Email</label>
                <input type="email" name="email" id="" class="form-control" required>
            </div>
            <div class="mb-3 m-4  mt-3">
                <label for="">Password</label>
                <input type="password" name="pass" id="" class="form-control" required>
            </div>
            <div class="float-end">
                <button class="btn btn-success" name="login">Login</button>
                
            </div>
  </div>
       </div>
        </form>
        </div>
    </div>
</body>
</html>