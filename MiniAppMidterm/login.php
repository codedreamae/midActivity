<?php 
include 'header.php';

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
        <div class="main-content"> 
        <div class="position-absolute bottom-30 start-50 translate-middle-x col-md-4 mb-5 mt-3">
        <?php
        if (isset($_GET['msg'])) { ?>
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong><?= $_GET['msg'] ?></strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php } ?>
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
                <a href="register.php" class="btn btn-warning">Register</a>
            </div>
  </div>
       </div>
        </form>
        </div>
    </div>
</body>
</html>