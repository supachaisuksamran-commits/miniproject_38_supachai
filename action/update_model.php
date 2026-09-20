<?php

$model_id = $_POST["model_id"];
$job_name = $_POST["job_name"];
$size = $_POST["size"];
$geender = $_POST["geender"];

include "connect.php";

$s = "UPDATE `model` 
SET 
    `job_name`='$job_name',
    `size`='$size',
    `geender`='$geender'
WHERE model_id = '$model_id' ";

$result = mysqli_query($con, $s);

if(!$result){
    echo "อัปเดตไม่สำเร็จ: " . mysqli_error($con);
}else{
    header("location: ../manage_model.php");
    exit;
}