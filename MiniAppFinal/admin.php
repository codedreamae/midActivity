<?php
session_start();
include 'connection.php';

if(!isset($_SESSION['logged_in'])){
  header("Location: logAd.php");
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
 <!-- Include DataTables CSS and JavaScript -->
 <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>
<script src="js/bootstrap.bundle.js"></script>
</head>
<body class="bg-success-subtle">
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
            <li><a class="dropdown-item" href="index.php">User</a></li>
            <li><a class="dropdown-item" href="about.php">About Us</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="contact.php">Contact Us</a></li>
          </ul>
        </li>
		<ul class="navbar-nav">
                        <li class="nav-item">
                                    <a href="landing.php" class="nav-link position-absolute top-0 end-0 m-2">Logout</a>
                                
                        </li>
                    </ul>
      </ul>
    </div>
  </div>
</nav>
<center>
  <br>
  <br>
  <br>
  <div class="col-md-12">
  <div class="col-md-12 well">
		<div class="col-md-11">
		<div class="col-md-11">
<table id="datatable" class="table table-bordered" >
       
			<thead class="alert-danger">
				<tr>
					<th>Fullname</th>
					<th>Address</th>
					<th>Tracking Number</th>
          <th>Shipping Info</th>
					<th>Action</th> 
				</tr>
			</thead>
			<tbody class="alert-warning ">
				<?php
					$sql = $conn->prepare("SELECT * FROM `member` ORDER BY `mem_id` DESC");
					$sql->execute();
					while($row = $sql->fetch()){
				?>
				<tr>
					<td><?php echo $row['fullname']?></td>
					<td><?php echo $row['address']?></td>
					<td><?php echo $row['tracking']?></td>
          <td><?php echo $row['ship']?></td>
					<td><a href="edit.php?id=<?php echo $row['mem_id']?>">Edit</a> | <a href="delete.php?id=<?php echo $row['mem_id']?>">Delete</a></td>
				</tr>
				<?php
					}
				?>
			</tbody>
 
		</table>
    <script>
      $(document).ready(function() {
         $('#datatable').DataTable();
      });
   </script>
    </div>
    </div>
  </div>
  </div>
        </center>
</body>
</html>