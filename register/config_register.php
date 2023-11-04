<?php 
include('../connect.php');


if(isset($_POST['Insert'])){
    $mem_name = $_POST['mem_name'];
    $mem_pass = $_POST['mem_pass'];
    $mem_mail = $_POST['mem_mail'];
    $sql = "INSERT INTO member Value('$mem_name','$mem_pass')";
    $query = mysqli_query($connect,$sql);
    if($query){
        echo "<script>alert('สมัครเสร็จสิ้น'); window.location = 'login.php';</script>";

    }

}





?>