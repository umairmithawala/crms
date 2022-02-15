<?php


echo $user_id = $_GET['id'];


include ("../../config.php");

    $sql = "DELETE FROM approvaldata WHERE `id` = {$user_id}"; 
    $result = mysqli_query($conn, $sql) or die("Query Unsuccessfull");

    header('Location: manage approval.php');

    mysqli_close($conn);

?>