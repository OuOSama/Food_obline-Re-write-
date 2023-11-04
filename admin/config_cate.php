<?php 
    session_start();
    include('../connect.php');
    if (isset($_POST['insert'])){
        $cate_id = $_POST['cate_id'];
        $cate_name = $_POST['cate_name'];
        $sql = "INSERT INTO cate_res Value('$cate_id','$cate_name')";
        $query = mysqli_query($connect,$sql);
        if($query){
            echo "<script>alert('เพิ่มข้อมูลเสร็จสิ้น'); window.location = 'manage_cate.php';</script>";
        }
        return('เพิ่มข้อมูลเสร็จสิ้น');
    }else if (isset($_POST['update'])){
        $cate_id = $_POST['cate_id'];
        $cate_name = $_POST['cate_name'];
        $sql = "UPDATE cate_res SET cate_name = '$cate_name' WHERE cate_id = '$cate_id'";
        $query = mysqli_query($connect,$sql);
        if($query){
            echo "<script>alert('อัพเดทข้อมูลเสร็จสิ้น'); window.location = 'manage_cate.php';</script>";
        }
    }else if (isset($_POST['delete'])){
        $cate_id = $_POST['cate_id'];
        $sql = "DELETE FROM cate_res WHERE cate_id = '$cate_id'";
        $query = mysqli_query($connect,$sql);
        if($query){
            echo "<script>alert('ลบข้อมูลเสร็จสิ้น'); window.location = 'manage_cate.php';</script>";
        }
    }
?>