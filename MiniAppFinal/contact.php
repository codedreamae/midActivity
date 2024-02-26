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
<body class="bg">
           
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
            <li><a class="dropdown-item" href="#">Action</a></li>
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
      </ul>
    </div>
  </div>
</nav>
    <div class="m-5 mt-5 ">
    <center>
    <h1>Phone Support</h1>
    <p>(02) 8 858 59 99</p>
    <br>
    <h1>Email Support</h1>
    
    <p>customercare@lbcexpress.com</p>
    <br>
    <h4 class="bg-text">Send email at</h4>
    <p><b>10th Floor Tower B Two Ecom Center
Bayshore Ave. corner Harbor Drive,
Mall of Asia Complex, Pasay,
Metro Manila, Philippines</b></p>
</center>
</div>
</body>
</html>