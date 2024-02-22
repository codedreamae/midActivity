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

<body class="bg-success-subtle">
    <div class="justify-content-center">
        <div class="col-md-4">
        <div class="position-absolute bottom-30 start-50 translate-middle-x col-md-4 mb-5 mt-3">
        <?php
        if (isset($_GET['msg'])) { ?>
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong><?= $_GET['msg'] ?></strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php } ?>
        <form action="function.php" method="post" class="m-3">
        <div class="card justify-content-center mt-3 bg-dark-subtle" style="width: 30rem;"> 
  <div class="card-body">
            <div class="mb-3">
                <label for="">Firstname</label>
                <input type="text" name="fname" id="" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="">Lastname</label>
                <input type="text" name="lname" id="" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="">Email</label>
                <input type="email" name="email" id="" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="">Password</label>
                <input type="password" name="pass1" id="" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="">Confirm-Password</label>
                <input type="password" name="pass2" id="" class="form-control">
            </div>
            <div class="mb-3">
                <button class="btn btn-warning" name="registerUser">Register</button>
            </div>
  </div>
        </div>
        </form>

        </div>
        </div>
    </div>
    
</body>
</html>