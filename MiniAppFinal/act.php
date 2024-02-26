<?php
//SEARCH DATA
    	require 'connection.php';
    	if(ISSET($_POST['result'])){
    ?>
    	<table class="table table-bordered">
    		<thead class="alert-info">
    			<tr>
    				<th>Fullname</th>
    				<th>Address</th>
    				<th>Action</th>
    			</tr>
    		</thead>
    		<tbody>
    			<?php
    				$find = $_POST['find'];
    				$query = $conn->prepare("SELECT * FROM `member` WHERE `fullname` LIKE '%$find%' or `address` LIKE '%$find%' or `tracking` LIKE '%$find%' or `ship` LIKE '%$find%' ");
    				$query->execute();
					$count = $query->rowCount();

					if ($count > 0) {
						while ($row = $query->fetch()) {
					?>
    			<tr>
    				<td><?php echo $row['fullname']?></td>
    				<td><?php echo $row['address']?></td>
                    <td><a class=" text-decoration-none ms-3" href="Udit.php?id=<?php echo $row['mem_id']?>">Edit</a></td>
    			</tr>
     
     
    			<?php
    				}
				} else {
					echo '<tr><td colspan="4">Data not found</td></tr>';
				}
				?>
			</tbody>
		</table>
	<?php
	} else {
		echo '<b class="text-white fs-5">Please do searching your Name to be updated.</b>';
	}
	?>
		

   