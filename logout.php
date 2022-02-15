<?php 

include ("..\config");

session_start();

unset($_SESSION['userType']);
    unset($_SESSION['userEmail']);
	unset($_SESSION['userName']);
    unset($_SESSION['userGender']);
	unset($_SESSION['userId']);
    unset($_SESSION['userAddress']);

session_destroy();

//header("Location: http://localhost/CRMS prg/login.php");

echo "<script>window.alert('You have been Logged out');</script>";
echo "<script>window.location.href='index.php'</script>";

?>