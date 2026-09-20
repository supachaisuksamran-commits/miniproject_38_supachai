<?php

$job_name = $_POST["job_name"];
$size = $_POST["size"];
$geender = $_POST["geender"];
$anime_id = $_POST["anime_id"];

include "connect.php";

$s = "INSERT INTO `model`
        (`job_name`, `size`, `geender`, `anime_id`)
        VALUES 
        ('$job_name','$size','$geender','$anime_id')";

$result = mysqli_query($con, $s);

if(!$result){
    echo "เพิ่มข้อมูลไม่สำเร็จ: " . mysqli_error($con);
}else{
    header("location: ../index.php");
    exit;
}