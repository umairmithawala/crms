<?php

include ("../../config.php");

$id = $_GET['id'];

$result = mysqli_query($conn,"DELETE FROM `solved` WHERE `id`=$id");
header("Location:manage solved complains.php");

?>