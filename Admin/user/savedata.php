<?php
/*
include ("../../config.php");

echo $name =mysqli_real_escape_string($conn,$_POST['name']);
echo $gender =mysqli_real_escape_string($conn,$_POST['gender']);
echo $email =mysqli_real_escape_string($conn,$_POST['email']);
echo $password =mysqli_real_escape_string($conn,md5($_POST['pass']));
echo $address =mysqli_real_escape_string($conn,($_POST['address']));
echo $user_type =mysqli_real_escape_string($conn,$_POST['user']);

        $sql ="INSERT INTO userdata (`name`, gender, email, `password`, `address`, user_type)
        VALUES ('{$name}','{$gender}','{$email}','{$password}','{$address}','{$user_type}')";
    
        $result =mysqli_query($conn,$sql) or die("Query Unsuccessful.");

        header("Location: index.php");


*/


if(isset($_POST ["create"]))
	{
        include ("../../config.php");

		$name=$_POST['name'];
		$gender=$_POST['gender'];
		$emailid=$_POST['email'];
		$address=$_POST['address'];
		$password=md5($_POST['pass']);
		$usertype=$_POST['user'];
		$test1=mysqli_query($conn,"SELECT `email` FROM `userdata` WHERE `email`='$emailid'");
		$test2=mysqli_query($conn,"SELECT `email` FROM `approvaldata` WHERE `email`='$emailid'");
		if(mysqli_num_rows($test1)!=0 OR mysqli_num_rows($test2)!=0)
		{
			echo "<script>window.alert('Data insertion failed Data Already Present');</script>";
			echo "<script>window.location.href='add.php'</script>";
		}
			else
			{
				$sql="INSERT INTO `userdata` (`name`,`gender`,`email`,`password`,`address`,`user_type`)
			VALUES ('$name','$gender','$emailid','$password','$address','$usertype')";
			$result=mysqli_query($conn,$sql);
			if($result)
			{
			echo "<script>window.alert('Data insert Successfully');</script>";
			echo "<script>window.location.href='index.php'</script>";
			}
		else
			{
			echo "<script>window.alert('Data insertion Failed');</script>";
			echo "<script>window.location.href='../index.php.php'</script>";
			}
			}
	}

?>





?>