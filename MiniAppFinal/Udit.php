
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
          <a class="nav-link dropdown-toggle text-white fs-5 " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Home
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="about.php">About Us</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="contact.php">Contact Us</a></li>
         </ul>
         <li>   <a href="index.php" class="nav-link position-absolute top-0 end-0 m-2 text-white fs-5">Exit</a></li>
          
    </div>
  </div>
</nav>

<br> 
	
<div class="position-absolute bottom-70 start-50 translate-middle-x" >
    <div class="card mt-4"  style="width: 40rem;">
  <div class="card-body">
 
<br>
<?php
    				if(ISSET($_GET['id'])){
    					require_once 'connection.php';
    					$id = $_GET['id'];
    					$sql = $conn->prepare("SELECT * FROM `member` WHERE `mem_id`='$id'");
    					$sql->execute();
    					$row = $sql->fetch();
    				}
    			?>
    			<form method="POST" action="response.php?id=<?php echo $id?>">
  
    <h3 class=""><center><b>Personal Details</b></center></h3>
<center> <img src="img/user pic.jpg" width="70px" ></center>
 <br> 
 <b> Fullname:</b>  <input type="text" class="col-md-10 p-1 mt-3 ms-5" placeholder="Fullname"  name="fullname"  value="<?php echo $row['fullname']?>" name="fullname"/>
   <br> <br>
  <b> Address:</b>  <input type="text" class="col-md-10 p-1 mt-3 ms-5" placeholder="Address"  name="address" value="<?php echo $row['address']?>" name="address"/>
    <br> <br>
    <center>
    <button type="submit" class="ms-2 btn-sm btn btn-success " name="restore">UPDATE</button>
    
    </center>
           </form> 
         
  </div>
</div>
    </div>
 <br> <br>
 
    </body>
     
    </html>