<?php 

session_start();
include 'connection.php';

if(!isset($_SESSION['logged_in'])){
    header("Location: login.php");
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
<body class="bg-image"
     style="background-image: url('img/express.jpg');">
	       <nav class="navbar navbar-expand-lg bg-success">
            <div class="container-fluid">
            <a class="navbar-brand text-white mt-2 " href="landing.php">Home</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand text-white mt-2" href="about.php">About Us</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand text-white mt-2" href="contact.php">Contact</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                         
                    </ul>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                                    <a href="function.php?logout" class="nav-link text-white mt-2">Logout</a>
                                
        
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
	<div class="position-absolute top-0 end-0 m-lg-5 p-4 my-5 ">
	<?php
		include 'add.php';

	?>
	

	<form method="POST" action="add.php">
    <div class="card justify-content-center mt-5 bg-success-subtle" style="width: 40rem;">
        <div class="card-body">
            <a href="editable.php" class="fs-4 link-dark float-end m-2 text-decoration-none ">⚙</a>
            <br>
            <h1 class="text-success text-center"><b>RMB EXPRESS</b></h1>
            <br>
            <div class="form-group">
                <label><b>Fullname</b></label>
                <input class="form-control" type="text" name="fullname" required/>
            </div>
            <br>
            <div class="form-group">
                <label><b>Address</b></label>
                <input class="form-control" type="text" name="address" required/>
            </div>
            <br>
            <div class="form-group">
                <label><b>Tracking Number</b></label>
                <?php
                    // Function to generate a random tracking code
                    function generateTrackingCode($length = 10) {
                        $characters = '01345ABCDEFGHI67JKLM2NO8PQR9STUVWXYZ';
                        $code = '';
                        for ($i = 0; $i < $length; $i++) {
                            $code .= $characters[rand(0, strlen($characters) - 1)];
                        }
                        return $code;
                    }

                    // Generate a random tracking code
                    $tracking = generateTrackingCode();
                ?>
                <input class="form-control" type="text" readonly name="tracking" value="<?php echo $tracking; ?>"/>
            </div>
            <br>
            <div class="form-group float-end">
                <button class="btn btn-primary form-control" type="submit" name="save">Save</button>
            </div>
        </div>
    </div>
</form>
		</div>
	</div>
		
	
	</div>
</body>
</html>