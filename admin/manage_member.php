<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Member</title>
    <?php include('../asset/head/head-admin.php');?>
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
                            <td><input type="text"  name="mem_user"    class="form-control"></td>
                            <td><input type="text"  name="mem_pass"    class="form-control"></td>
                            <td><input type="text"  name="mem_name"    class="form-control"></td>
                            <td><input type="text"  name="mem_last"    class="form-control"></td>
                            <td><input type="email" name="mem_mail"    class="form-control"></td>
                            <td><input type="tel"   name="mem_phone"   class="form-control"></td>
                            <td><input type="text"  name="mem_address" class="form-control"></td>
                            <td>
                                <select name="mem_status" class="form-select">
                                    <option value="user">User</option>
                                    <option value="rest">Restaurant</option>
                                    <option value="rider">Rider</option>
                            </td>
                            <td>
                                <select class="form-select" name="mem_check">
                                    <option value="enable">Enable</option>
                                    <option value="disable">Disable</option>
                                </select>
                             </td>
                            <td colspan="2"><button type="submit" name="insert" class="btn btn-secondary form-control">Insert</button></td>
                        </form>
                    </tbody>
                    <?php $sql = "SELECT * FROM member WHERE mem_check = 'enable' ";?>
                    <?php $query = mysqli_query($connect, $sql);
                          while($result = mysqli_fetch_array($query)) {
                    ?>
                    <tbody>
                        <form action="config.php"   method="post">
                            <input type="hidden"            name="mem_id"    value= <?php echo$result['mem_id'];?>>
                            <td><input type="text"          name="mem_user"     class="form-control" value=<?php echo$result['mem_user'];?>></td>
                            <td><input type="password"      name="mem_user"     class="form-control" value=<?php echo$result['mem_user'];?>></td>
                            <td><input type="text"          name="mem_name"     class="form-control" value=<?php echo$result['mem_name'];?>></td>
                            <td><input type="text"          name="mem_last"     class="form-control" value=<?php echo$result['mem_last'];?>></td>
                            <td><input type="email"         name="mem_mail"     class="form-control" value=<?php echo$result['mem_mail'];?>></td>
                            <td><input type="tel"           name="mem_phone"    class="form-control" value=<?php echo$result['mem_phone'];?>></td>
                            <td><input type="text"          name="mem_address"  class="form-control" value=<?php echo$result['mem_address'];?>></td>
                            <td><input type="text" disabled name="mem_status"   class="form-control" Value=<?php echo$result['mem_status'];?>></td>
                            <input     type="hidden"        name="mem_status"   class="form-control" value=<?php echo$result['mem_status']; ?>>
                            <td>
                                <select name="mem_check" class="form-select">
                                    <option value="enable"> Enable</option>
                                    <option value="disable">Disable</option>
                                </select>
                            </td>
                            <td><button type="submit" name="update" class="form-control btn btn-success">Update</button></td>
                            <td><button type="submit" name="delete" class="form-control btn btn-danger"> Delete</button></td>
                        </form>
                    </tbody>
                    <?php }?>
                </form>
            </table>
        </div>
    </div>
</body>
</html>