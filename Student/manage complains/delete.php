<?php
//including the database connection file
include ("../../config.php");

//getting id of the data from url
$id = $_GET['id'];

//deleting the row from table
$result = mysqli_query($conn,"DELETE FROM complain WHERE id=$id");
header("Location:manage complains.php");
?>