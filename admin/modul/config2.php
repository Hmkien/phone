<?php
$conn = mysqli_connect("localhost" , "root" , "" , "shopdienthoai");
if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
}
?>