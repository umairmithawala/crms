<?php 
include ("../../config.php");
$id = $_GET['id'];

$res = mysqli_query($conn, "INSERT INTO solved SELECT * FROM complain WHERE id=$id");
$result= mysqli_query($conn, "DELETE FROM complain WHERE id=$id");

header("Location:manage complains.php");

?>