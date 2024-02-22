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
		}catch(PDOException $e){
			echo $e->getMessage();
		}
		
		$conn = null;
		header('location:index.php');
	}
?>