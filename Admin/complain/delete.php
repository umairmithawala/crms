<?php 
	include ("../../config.php");
    $id=$_GET['id'];

    $result= mysqli_query($conn,"DELETE FROM complain WHERE id=$id");
    header("Location:manage complains.php");

?>