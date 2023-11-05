<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Category</title>
    <?php include('../asset/head/head-admin.php');?>
</head>
<body>
    <div class="content">
        <div class="container shadow mb-5 p-5 rounded">
            <h1 align="center" class="p-1">Manage category</h1>
            <table class="table">
                <form action="config_cate.php" method="post">
                    <thead align="center">
                        <th>Cate ID</th>
                        <th>Cate name</th>
                        <th colspan="2">Action</th>
                    </thead>
                    <tbody>
                        <form action="config_cate.php" method="post">
                            <input type="hidden" name="cate_id">
                            <td><input type="text"     name="cate_id"      class="form-control"  placeholder="Cate Id"></td>
                            <td><input type="password" name="cate_name"    class="form-control"  placeholder="Cate Name"></td>
                            <td colspan="2"><button type="submit" name="insert" class="btn btn-secondary form-control">Insert</button></td>
                        </form>
                    </tbody>
                    <!--PHP Zone-->
                    <?php 
                        include('../connect.php');
                        $sql = "SELECT * FROM cate_res";
                        $query = mysqli_query($connect, $sql);
                    ?>
                    <?php 
                        while($result = mysqli_fetch_array($query)) {
                    ?>
                    <tbody>
                        <form action="config_cate.php" method="post">
                            <td><input  type="text"   name="cate_id"  disabled  class="form-control" value=<?php echo$result['cate_id'];?>></td>
                            <input      type="hidden" name="cate_id"            class="form-control" value=<?php echo$result['cate_id'];?>>
                            <td><input  type="text"   name="cate_name"          class="form-control" value=<?php echo$result['cate_name'];?>></td>
                            <td><button type="submit" name="update"             class="form-control btn btn-success">Update</button></td>
                            <td><button type="submit" name="delete"             class="form-control btn btn-danger" >Delete</button></td>
                        </form>
                    </tbody>
                    <?php }?>
                </form>
            </table>
        </div>
    </div>
</body>
</html>