<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Register Food Online </title>
    <link rel="stylesheet" href="../asset/css/bootstrap.min.css"></head>
    <?php include('../connect.php') ?>
<body>

<div class="content">
    <section class="vh-100">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-6">
                    <div class="card shadow p-3 mb-5 bg-body rounded">
                        <div class="card-body p-5 text-center">
                            <form action="config_register.php" method="post">
                                    <input type="text" name="mem_name" id="mem_pass" class="form-control" placeholder="Username">
                                    <br>
                                    <input type="password" name="mem_pass" class="form-control" placeholder="Password">
                                    <br>
                                    <input type="email" name="mem_mail" id="mem_mail" class="form-control" placeholder="Email">
                                    <br>
                                    <button type="submit" value="Insert" class="btn btn-success form-control"> Register</button>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

</body>
</html>