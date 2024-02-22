<?php 

include 'header.php'; 

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
<body class="bg-primary">
	
		<form method="POST" action="add.php">
		<div class="card position-absolute top-40 end-0 m-4 mt-5 bg-success-subtle " style="width: 40rem;"> 
  <div class="card-body">
  <h3 class="text-primary text-center">RMB EXPRESS</h3>
				<div class="form-group">
					<label>Fullname</label>
					<input class="form-control" type="text" name="fullname"/>
				</div>
				<div class="form-group">
					<label>Address</label>
					<input class="form-control" type="text" name="address"/>
				</div>
				<div class="form-group">
					<label>Tracking Number</label> 
					<input class="form-control" type="text" name="tracking"/>
				</div>
				<div class="form-group float-end ">
					<button class="btn btn-primary form-control" type="submit" name="save">Save</button>
					
				</div>
			</div>
		</form>
	</div>
		
	<div class="position-absolute top-0 start-0 translate-middle-y m-4 mt-5 ">
		
			<table class="table table-bordered position-absolute top-40 mt-5 bg-info-subtle " style="width: 40rem;">
				<div class="row">
				<div class="col-md-10 p-5">
			<thead class="alert-danger mt-4 s">
				<tr>
					<th>Fullname</th>
					<th>Address</th>
					<th>Tracking Number</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody class="alert-warning m-3 bg-success-subtle ">
				<?php
					$sql = $conn->prepare("SELECT * FROM `member` ORDER BY `mem_id` DESC");
					$sql->execute();
					while($row = $sql->fetch()){
				?>
				<tr>
					<td><?php echo $row['fullname']?></td>
					<td><?php echo $row['address']?></td>
					<td><?php echo $row['tracking']?></td>
					<td><a href="edit.php?id=<?php echo $row['mem_id']?>">Edit</a> | <a href="delete.php?id=<?php echo $row['mem_id']?>">Delete</a></td>
				</tr>
				<?php
					}
				?>
			</tbody>
		</div>
	</div>
		</table>
	</div>
</body>
</html>