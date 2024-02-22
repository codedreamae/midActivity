<?php
	include 'connection.php';
    	if(ISSET($_GET['id'])){
    		$id = $_GET['id'];
    		$sql = $conn->prepare("DELETE from `member` WHERE `mem_id`='$id'");
    		$sql->execute();
    		header('location:index.php');
    	}
    ?>