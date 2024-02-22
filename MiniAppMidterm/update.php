<?php
    	include 'connection.php';
     
    	if(ISSET($_POST['update'])){
    		try{
    			$id = $_GET['id'];
    			$fullname = $_POST['fullname'];
    			$address = $_POST['address'];
    			$tracking = $_POST['tracking'];
    			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    			$sql = "UPDATE `member`SET `fullname` = '$fullname', `address` = '$address', `tracking` = '$tracking' WHERE `mem_id` = '$id'";
    			$conn->exec($sql);
    		}catch(PDOException $e){
    			echo $e->getMessage();
    		}
     
    		$conn = null;
    		header('location:index.php');
    	}
    ?>