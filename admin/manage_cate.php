<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Catetagory</title>
    <?php include('../asset/head/head-admin.php');?>
</head>
<body>
    <div class="content">
        <div class="container shadow p-5 mb-5 bg-body rounded">
            <h1 align="center" class="p-1">Manage Category</h1>
            <table class="table">
                    <thead align="center">
                        <th>Cate Id</th>
                        <th>Cate Name</th>
                        <th colspan="2">Action</th>
                    </thead>
                    <tbody>
                        <form action="config_cate.php" method="post">
                            <input                  type="hidden" name="cate_id"   class="form-control">
                            <td><input              type="text"   name="cate_id"   class="form-control" placeholder="Cate_id"   disable></td>
                            <td><input              type="text"   name="cate_name" class="form-control" placeholder="Cate_name" disable></td>
                            <td colspan="2"><button type="submit" name="insert"    class="btn btn-secondary form-control">Insert</button></td>
                        </form>
                    </tbody>
                    <?php 
                        include('../connect.php');
                        $sql = "SELECT * FROM cate_res";
                        $query = mysqli_query($connect,$sql);
                        while($result = mysqli_fetch_array($query)){ 
                    ?>
                    <tbody>
                        <form action="config_cate.php"method="post">
                            <input type="hidden"      name="cate_id"           class="form-control" value="<?php echo$result['cate_id'];?>">
                            <td><input type="text"    name="cate_id" disabled  class="form-control" value="<?php echo$result['cate_id'];?>"></td>
                            <td><input type="text"    name="cate_name"         class="form-control" value="<?php echo$result['cate_name'];?>"></td>
                            <td><button type="submit" name="update"            class="form-control btn btn-success">Update</button></td>
                            <td><button type="submit" name="delete"            class="form-control btn btn-danger"> Delete</button></td>
                        </form>
                    </tbody>
                    <?php }?>
                </form>
            </table>
        </div>
    </div>
</body>
</html>