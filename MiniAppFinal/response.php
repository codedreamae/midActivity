<?php
include 'connection.php';

// Check if the form is submitted
if (ISSET($_POST['restore'])) {
    try {
        $id = $_GET['id'];
        $fullname = $_POST['fullname'];
        $address = $_POST['address'];

        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Update the member record
        $sql = "UPDATE `member` SET `fullname` = '$fullname', `address` = '$address' WHERE `mem_id` = '$id'";
        $conn->exec($sql);

        // Set a success message in the URL query parameter
        header('location:editable.php?status=success');
        exit();
    } catch (PDOException $e) {
        // Set an error message in the URL query parameter
        header('location:editable.php?status=error&message=' . urlencode($e->getMessage()));
        exit();
    }
}

// Check if there is a status message in the URL
if (ISSET($_GET['status'])) {
    $status = $_GET['status'];

    // Display the appropriate message based on the status
    if ($status === 'success') {
        echo '<div class="alert alert-success">Record updated successfully!
		<a class=" text-decoration-none btn-close float-end" aria-label="Close" href="editable.php"></a></div>';
	
    } elseif ($status === 'error' && ISSET($_GET['message'])) {
        $errorMessage = urldecode($_GET['message']);
        echo '<div class="alert alert-danger">Error: ' . $errorMessage . '</div>';
    }
}
?>