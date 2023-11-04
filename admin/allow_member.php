<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include('../asset/head/head-admin.php'); ?>
</head>

<body>
    <div class="container shadow p-5 mb-5 bg-body rounded">
        <h1 align="center" class="p-1">Enable Member</h1>
        <table class="table ">
            <thead>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Status</th>
                <th colspan="2">Action</th>
            </thead>

            <tbody>
                <?php
                    $sql = "SELECT * FROM member WHERE mem_check = 'disable'";
                    $query = mysqli_query($connect,$sql);
                    while($result=mysqli_fetch_array($query)){
                ?>
                <form action="config.php" method=POST>
                    <tr>
                        <input type="hidden" name="mem_id" value=<?php echo$result["mem_id"]?>>
                        <td><?php echo$result["mem_name"]; ?></td>
                        <td><?php echo$result["mem_last"]; ?></td>
                        <td><?php echo$result["mem_status"]; ?></td>
                        <td><button type="submit" name="enable" class="btn btn-success">Enable</button></td>
                        <td><button type="submit" name="delete" class="btn btn-danger">Delete</button></td>
                    </tr>
                </form>
                <?php } ?>
        </table>
            </tbody>
    </div>
</body>

</html>