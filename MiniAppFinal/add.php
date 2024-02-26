<?php
include 'connection.php';

if(ISSET($_POST['save'])){
    try{
        $fullname = $_POST['fullname'];
        $address = $_POST['address'];
        $tracking = $_POST['tracking'];
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "INSERT INTO `member` (`fullname`, `address`, `tracking`) VALUES ('$fullname', '$address', '$tracking')";
        $conn->exec($sql);

		header('location:index.php?status=success');
        exit();
    } catch (PDOException $e) {
        // Set an error message in the URL query parameter
        header('location:index.php?status=error&message=' . urlencode($e->getMessage()));
        exit();
    }
}

// Check if there is a status message in the URL
if (ISSET($_GET['status'])) {
    $status = $_GET['status'];

    // Display the appropriate message based on the status
    if ($status === 'success') {
        echo '<div class="alert alert-success">Record saved successfully!
		<a class=" text-decoration-none btn-close float-end" aria-label="Close" href="index.php"></a></div>';
	
    } elseif ($status === 'error' && ISSET($_GET['message'])) {
        $errorMessage = urldecode($_GET['message']);
        echo '<div class="alert alert-danger">Error: ' . $errorMessage . '</div>';
    }
}
?>