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
            <table class="table">
                <thead align="center">
                    <th>Cate_ID</th>
                    <th>Cate_Name</th>
                    <th colspan="2">Action</th>
                </thead>
                <tbody>
                    <form action="config_cate.php" method="POST">
                        <input type="hidden" name="cate_id" class="form-control">
                        <td><input type="text" name="cate_id" class="form-control" placeholder="Cate_ID" disabled></td>
                        <td><input type="text" name="cate_name" class="form-control" placeholder="Cate_Name"></td>
                        <center>
                            <td colspan="2"><button type="submit" name="insert"
                                    class="btn btn-primary btn-lg form-control">Insert</button></td>
                        </center>
                    </form>
                </tbody>
                <?php 
                    include('../connect.php');
                    $sql ="SELECT * FROM cate_res";
                    $query = mysqli_query($connect,$sql);
                    while($result = mysqli_fetch_array($query)){
            ?>
                <tbody>
                    <form action="config_cate.php" method="POST">
                        <input type="hidden" name="cate_id" class="form-control"
                            value="<?php echo $result['cate_id']; ?>">
                        <td><input type="text" name="cate_id" disabled class="form-control"
                                value="<?php echo $result['cate_id']; ?>"></td>
                        <td><input type="text" name="cate_name" class="form-control"
                                value="<?php echo $result['cate_name']; ?>"></td>
                        <td><button type="submit" name="update"
                                class="btn btn-success btn-lg form-control">UpDate</button>
                        </td>
                        <td><button type="submit" name="delete"
                                class="btn btn-danger btn-lg form-control">Delete</button>
                        </td>
                </tbody>
                </form>
                <?php } ?>
            </table>
        </div>
    </div>
</body>

</html>