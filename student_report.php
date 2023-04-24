<?php require('header.php');
require('connection.php');
?>
<div class="container my-5 text-center">
    <h1 class="my-3">User Data</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>S.No.</th>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody tbody id="myTable">
            <?php
            $sql = "SELECT * FROM `users` ";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($result);
            // for column name
            // $row_all = mysqli_fetch_all($result,MYSQLI_ASSOC); // for column name
            // $row = mysqli_fetch_row($result); // for index value
            // $num = mysqli_num_rows($result); // for row count
            // echo "<pre>";
            // print_r($row_all);
            // echo "<pre/>";
            // echo $row->id;
            $i = 0;
            while ($row = mysqli_fetch_assoc($result)) {
                $i++;
                // $i += 1;
                // $i++;
                // foreach($row_all as $value){
            ?>
                <tr id="hide<?= $i ?>">
                    <td><?= $i ?></td>
                    <td><?= $row['id'] ?></td>
                    <td><?= $row['name'] ?></td>
                    <td><?= $row['email'] ?></td>
                    <td><?= $row['phone'] ?></td>
                    <td><?= $row['address'] ?></td>
                    <td><a href="delete.php?id=<?= $row['id'] ?>" type="button" class="btn btn-danger ">delete</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>

    <?php require('footer.php') ?>