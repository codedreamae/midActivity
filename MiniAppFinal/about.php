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
<body class="bg-secondary">
           
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
                            <?php 
                                if(isset($_SESSION['logged_in'])){ ?>
                                    <a href="function.php?logout" class="nav-link">Logout</a>
                                <?php }else{ ?>
                                    <a href="landing.php" class="nav-link position-absolute top-0 end-0 m-2">Exit</a>
                                <?php } ?>
                        </li>
                    </ul>
      </ul>
    </div>
  </div>
</nav>
<div>
    <center>
    <img src="img/notessorg.jpg">

    <h1 class="fs-1 text-white "><b>Our History</b></h1></center>
    <img src="img/pic1.png">
</div>
</body>
</html>