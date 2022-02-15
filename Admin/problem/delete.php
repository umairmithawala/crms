<?php 
include ("../../config.php");

$id=$_GET['id'];

$result = mysqli_query($conn,"DELETE FROM problem where id ='$id'");

header("Location:manage problems.php");
?>