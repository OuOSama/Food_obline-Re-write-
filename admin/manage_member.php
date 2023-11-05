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
        <div class="container shadow mb-5 p-5 rounded">
            <h1 align="center" class="p-1">Manage Member</h1>
            <table class="table">
                <form action="config.php" method="post">
                    <thead align="center">
                        <th>User</th>
                        <th>Password</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>Status</th>
                        <th>Enable</th>
                        <th colspan="2">Action</th>
                    </thead>
                    <tbody>
                        <form action="config.php" method="post">
                            <input type="hidden" name="mem_id">
                            <td><input type="text"     name="mem_user"    class="form-control"></td>
                            <td><input type="password" name="mem_pass"    class="form-control"></td>
                            <td><input type="text"     name="mem_name"    class="form-control"></td>
                            <td><input type="text"     name="mem_last"    class="form-control"></td>
                            <td><input type="email"    name="mem_mail"    class="form-control"></td>
                            <td><input type="tel"      name="mem_phone"   class="form-control"></td>
                            <td><input type="text"     name="mem_address" class="form-control"></td>
                            <td>
                                <select name="mem_status" class="form-select">
                                    <option value="user">User</option>
                                    <option value="rider">Rider</option>
                                    <option value="rest">Restaurant</option>
                            </td>
                            <td>
                                <select name="mem_check" class="form-select">
                                    <option value="enable">Enable</option>
                                    <option value="disable">Disable</option>
                            </td>
                            <td colspan="2"><button type="submit" name="insert" class="btn btn-secondary form-control">Insert</button></td>
                        </form>
                    </tbody>
                    <!--PHP Zone-->
                    <?php $sql = "SELECT * FROM member";?>
                    <?php $query = mysqli_query($connect, $sql);
                          while($result = mysqli_fetch_array($query)) {
                    ?>
                    <tbody>
                        <form action="config.php" method="post">
                            <input type="hidden"      name="mem_id" value="<?php echo$result['mem_id'];?>">
                            <td><input  type="text"   name="mem_user"    class="form-control" value=<?php echo$result['mem_user'];?>></td>
                            <td><input  type="text"   name="mem_pass"    class="form-control" value=<?php echo$result['mem_pass'];?>></td>
                            <td><input  type="text"   name="mem_name"    class="form-control" value=<?php echo$result['mem_name'];?>></td>
                            <td><input  type="text"   name="mem_last"    class="form-control" value=<?php echo$result['mem_last'];?>></td>
                            <td><input  type="email"  name="mem_mail"    class="form-control" value=<?php echo$result['mem_mail'];?>></td>
                            <td><input  type="tel"    name="mem_phone"   class="form-control" value=<?php echo$result['mem_phone'];?>></td>
                            <td><input  type="text"   name="mem_address" class="form-control" value=<?php echo$result['mem_address'];?>></td>
                            <td><input  type="text"   name="mem_status"  class="form-control" value=<?php echo$result['mem_status'];?> disabled></td>
                            <input      type="hidden" name="mem_status"  class="form-control" value=<?php echo$result['mem_status'];?>>
                            <td>
                                <select name="mem_check" class="form-select">
                                    <option value="<?php echo$result['mem_check'];?>"><?php echo$result['mem_check'];?></option>
                                    <option value="enable"> Enable</option>
                                    <option value="disable">Disable</option>
                                </select>
                            </td>
                            <td><button type="submit" name="update"      class="form-control btn btn-success">Update</button></td>
                            <td><button type="submit" name="delete"      class="form-control btn btn-danger" >Delete</button></td>
                        </form>
                    </tbody>
                    <?php }?>
                </form>
            </table>
        </div>
    </div>
</body>
</html>