<?php
require 'connection.php';

if (isset($_POST['search'])) {
?>
    <table class="table table-bordered">
        <thead class="alert-info">
            <tr>
                <th>Fullname</th>
                <th>Address</th>
                <th>Shipping Information
                <a class=" text-decoration-none btn-close float-end" aria-label="Close" href="landing.php"></a>
                </th>
            </tr>
        </thead>
        <tbody>
            <?php
            $keyword = $_POST['keyword'];
            $query = $conn->prepare("SELECT * FROM `member` WHERE `fullname` LIKE '%$keyword%' or `address` LIKE '%$keyword%' or `tracking` LIKE '%$keyword%' or `ship` LIKE '%$keyword%' ");
            $query->execute();
            $count = $query->rowCount();
            
            if ($count > 0) {
                while ($row = $query->fetch()) {
            ?>
                    <tr>
                        <td><?php echo $row['fullname'] ?></td>
                        <td><?php echo $row['address'] ?></td>
                        <td><?php echo $row['ship'] ?></td>
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
    echo '<b class="text-white fs-6 ms-5 ">Please track your item.</b>';
}
?>
