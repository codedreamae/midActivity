
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
<body class="bg-success">

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
            <li><a class="dropdown-item" href="about.php">About Us</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="contact.php">Contact Us</a></li>
          </ul>
        </li>
                        <li class="nav-item">
    <a href="index.php" class="nav-link position-absolute top-0 end-0 m-2 text-white fs-5">Exit</a>
                               
                        </li>
              
      </ul>
    </div>
  </div>
</nav>
<br><br><br>
	  <center>
      <h1 class="text-warning"><b>ACCOUNT CENTER</b> </h1>
<div class="container">
  <form method="POST">
    <input type="text" class="col-md-7 p-3 mt-5" placeholder="Type your fullname" name="find" required>
    <button class="btn btn-dark  btn-sm p-2 ms-3 " name="result">Search</button>

</form>

    
<br><br><br> <br><br>
           
    			<?php 
          include'act.php';
          include'response.php';
          ?> </center>

</div>

    </body>
     
    </html>