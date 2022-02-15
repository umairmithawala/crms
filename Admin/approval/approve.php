<?php

 $user_id = $_GET['id'];

 include ("../../config.php");
/*
    $sql = "INSERT INTO userdata SELECT * FROM approvaldata WHERE id = {$user_id}";

    $sql1 = "DELETE FROM approvaldata WHERE id = {$user_id}";

    $result= mysqli_query($conn, $sql, $sql1) or die("Query Unsuccessfull");
    */


    $result = mysqli_query($conn, "INSERT INTO userdata SELECT * FROM approvaldata WHERE `id` = {$user_id}") or die("Query Unsuccessfull  1");
    
   $result1 = mysqli_query($conn,"DELETE FROM approvaldata WHERE id = {$user_id}") or die("Query Unsuccessfull  2");

    header('Location: manage approval.php');

    mysqli_close($conn);

?>
