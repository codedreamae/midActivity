<?php
include 'connection.php';
// add users
if (isset($_POST['registerUser'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $pass = $_POST['pass1'];
    $confirmPass = $_POST['pass2'];

    if ($pass == $confirmPass) {
        $hash = password_hash($pass, PASSWORD_DEFAULT);
        // INSERT INTO table_name (column1, column2, column3, ...)VALUES (value1, value2, value3, ...);
        $addUser = $conn->prepare("INSERT INTO users (u_fname, u_lname, u_email, u_pass) VALUES(?, ?, ?, ?)");
        $addUser->execute([
            $fname,
            $lname,
            $email,
            $hash
        ]);

        $msg = "User registered succesfully!";
        header("Location: login.php?msg=$msg");
    } else {
        $msg = "Password do not match!";
        header("Location: register.php?msg=$msg");
    }
}


// add Admin
if (isset($_POST['registerAdmin'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $pass = $_POST['pass1'];
    $confirmPass = $_POST['pass2'];

    if ($pass == $confirmPass) {
        $hash = password_hash($pass, PASSWORD_DEFAULT);
        // INSERT INTO table_name (column1, column2, column3, ...)VALUES (value1, value2, value3, ...);
        $addUser = $conn->prepare("INSERT INTO users (u_fname, u_lname, u_email, u_pass) VALUES(?, ?, ?, ?)");
        $addUser->execute([
            $fname,
            $lname,
            $email,
            $hash
        ]);

        $msg = "User registered succesfully!";
        header("Location: logAd.php?msg=$msg");
    } else {
        $msg = "Password do not match!";
        header("Location: regAd.php?msg=$msg");
    }
}


// login user
if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $pass = $_POST['pass'];

    // get the data on the database using the email input
    $getData = $conn->prepare("SELECT * FROM users WHERE u_email = ?");
    $getData->execute([$email]);

    foreach ($getData as $data) {
        if ($data['u_email'] == $email && password_verify($pass, $data['u_pass'])) {
            session_start();
            $_SESSION['logged_in'] = true;
            $_SESSION['user_id'] = $data['user_id'];

            $msg = "User logged-in successfully!";
            header("Location: index.php?msg=$msg");
        } else {
            $msg = "Email or Password do not match";
            header("Location: login.php?msg=$msg");
            
        }
    }
}


// admin login
if (isset($_POST['logAd'])) {
    $email = $_POST['email'];
    $pass = $_POST['pass'];

    // get the data on the database using the email input
    $getData = $conn->prepare("SELECT * FROM users WHERE u_email = ?");
    $getData->execute([$email]);

    foreach ($getData as $data) {
        if ($data['u_email'] == $email && password_verify($pass, $data['u_pass'])) {
            session_start();
            $_SESSION['logged_in'] = true;
            $_SESSION['user_id'] = $data['user_id'];

            $msg = "User logged-in successfully!";
            header("Location: admin.php?msg=$msg");
        } else {
            $msg = "Email or Password do not match";
            header("Location: logAd.php?msg=$msg");
        }
    }
}

// for logout
if (isset($_GET['logout'])) { 
    
    header("Location: landing.php");
}



