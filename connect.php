<?php 

$connect = mysqli_connect("localhost","root","","food_online");
mysqli_query($connect, "SET NAMES 'utf8' "); 

if($connect){
    echo"connect success";
}
?>