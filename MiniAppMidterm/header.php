<?php
session_start();
include 'connection.php';
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
<body class="bg-danger-subtle">
<div class="container-fluid">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">Home</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                         
                    </ul>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <?php 
                                if(isset($_SESSION['logged_in'])){ ?>
                                    <a href="function.php?logout" class="nav-link">Logout</a>
                                <?php }else{ ?>
                                    <a href="login.php" class="nav-link">Login</a>
                                <?php } ?>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
</body>
</html>