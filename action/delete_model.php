<?php

$id = $_GET["id"];

include "connect.php";

 $s = "DELETE FROM model WHERE model_id = '$id'";

  $result = mysqli_query($con, $s);

  if(!$result){
    echo "ERROR";
  }else{
    header("location: ../manage_model.php");
    exit;
  }