<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include('../asset/head/head-admin.php'); ?>
</head>

<body>
    <div class="content">
        <div class="container shadow p-5 mb-5 bg-body rounded">
        <h1 align="center" class="p-1">Manage Member</h1>

            <table class="table">
                <thead align="center">
                    <th>User</th>
                    <th>Password</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Status</th>
                    <th>&nbsp;&nbsp;&nbsp;Enable&nbsp;&nbsp;&nbsp;</th>
                    <th colspan="2">Action</th>
                </thead>
                <tbody>
                    <form action="config.php" method="post">
                        <input type="hidden" name="mem_id">
                        <td><input type="text" class="form-control" name="mem_user"></td>
                        <td><input type="password" class="form-control" name="mem_pass"></td>
                        <td><input type="text" class="form-control" name="mem_name"></td>
                        <td><input type="text" class="form-control" name="mem_last"></td>
                        <td><input type="email" class="form-control" name="mem_mail"></td>
                        <td><input type="text" class="form-control" name="mem_phone"></td>
                        <input type="hidden" class="form-control" name="mem_img">
                        <td><input type="text" class="form-control" name="mem_address"></td>
                        <td><select class="form-select" name="mem_status">
                                <option value="user">User</option>
                                <option value="rest">Restaurant</option>
                                <option value="rider">Rider</option>
                            </select>
                        </td>
                        <td>
                            <select class="form-select" name="mem_check">
                                <option value="enable">Enable</option>
                                <option value="disable">Disable</option>
                            </select>
                        </td>
                        <td colspan="2"><button type="submit" name="insert"
                                class=" btn btn-secondary form-control">Insert</button></td>
                    </form>
                </tbody>
                <?php
                $sql = "SELECT * FROM member WHERE mem_check = 'enable'";
                $query = mysqli_query($connect,$sql);
                ?>
                <?php 
                while($result=mysqli_fetch_array($query)){
            ?>
                <tbody>
                    <form action="config.php" method=POST>
                        <input type="hidden" name="mem_id" value=<?php echo$result["mem_id"]?>>
                        <td><input type="text" class="form-control" name="mem_user"
                                value="<?php echo$result["mem_user"]; ?>"></td>
                        <td><input type="password" class="form-control" name="mem_pass"
                                value="<?php echo$result["mem_pass"]; ?>"></td>
                        <td><input type="text" class="form-control" name="mem_name"
                                value="<?php echo$result["mem_name"]; ?>"></td>
                        <td><input type="text" class="form-control" name="mem_last"
                                value="<?php echo$result["mem_last"]; ?>"></td>
                        <td><input type="text" class="form-control" name="mem_mail"
                                value="<?php echo$result["mem_mail"]; ?>"></td>
                        <td><input type="text" class="form-control" name="mem_phone"
                                value="<?php echo$result["mem_phone"]; ?>"></td>
                        <td><input type="text" class="form-control" name="mem_address"
                                value="<?php echo$result["mem_address"]; ?>"> </td>
                        <td><input type="text" disabled class="form-control" name="mem_status"
                                value="<?php echo$result["mem_status"]; ?>"></td>
                        <input type="hidden" class="form-control" name="mem_status"
                            value="<?php echo$result["mem_status"]; ?>">
                        <td><select class="form-control" name="mem_check">
                                <option value="enable">Enable</option>
                                <option value="disable">Disable</option>
                            </select></td>
                        <td><button type="submit" name="update" class="btn btn-primary">Update</button></td>
                        <td><button type="submit" name="delete" class="btn btn-danger">Delete</button></td>
                    </form>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>