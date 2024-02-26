
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
	<div class="row justify-content-center">
    	<div class="col-md-5">
    			<?php
    				if(ISSET($_GET['id'])){
    					require_once 'connection.php';
    					$id = $_GET['id'];
    					$sql = $conn->prepare("SELECT * FROM `member` WHERE `mem_id`='$id'");
    					$sql->execute();
    					$row = $sql->fetch();
    				}
    			?>
				<br><br>
    			<form method="POST" action="update.php?id=<?php echo $id?>">
				<div class="card justify-content-center mt-5 bg-success-subtle" style="width: 30rem;"> 
  <div class="card-body">
  <h3 class="text-success text-center">RMB EXPRESS</h3>
    				<div class="form-group">
    					<label>Fullname</label>
    					<input class="form-control" type="text" value="<?php echo $row['fullname']?>" name="fullname"/>
    				</div>
    				<div class="form-group">
    					<label>Address</label>
    					<input class="form-control" type="text" value="<?php echo $row['address']?>" name="address"/>
    				</div>
    				<div class="form-group">
    					<label>Tracking Number</label> 
    					<input class="form-control" type="text" readonly value="<?php echo $row['tracking']?>" name="tracking"/>
    				</div>
					<div class="form-group">
    					<label>Shipping Information</label> 
    					<input class="form-control" type="text" value="<?php echo $row['ship']?>" name="ship"/>
    				</div>
					<div class="form-group float-end">
                <button type="submit" name="update" class="btn btn-success mt-2">Update</button>
                    <a href="admin.php" class="btn btn-danger float-end m-2">Exit</a> 
    				</div>
  				</div>
				</div>
    			</form>
    			<?php
    				$conn = null;
    			?>
    		</div>
    	</div>
     
    </body>
     
    </html>