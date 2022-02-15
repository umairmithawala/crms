<?php

echo $user_id = $_GET['id'];


    include ("../../config.php");

    $sql = "DELETE FROM userdata WHERE `id` = {$user_id}"; 
    $result = mysqli_query($conn, $sql) or die("Query Unsuccessfull");

    //echo "<script>window.alert('You have');</script>";

    header('Location:index.php');

    mysqli_close($conn);

?>

