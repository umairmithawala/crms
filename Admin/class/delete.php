<?php
include ("../../config.php");

$id =$_GET['id'];

$resutlt = mysqli_query($conn,"DELETE FROM room WHERE id=$id");

header("Location:manage class and labs.php");