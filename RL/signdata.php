<?php

/*if(isset ($_POST["create"])){

    include ("../config.php");

    $name =mysqli_real_escape_string($conn,$_POST['name']);
    $gender =mysqli_real_escape_string($conn,$_POST['gender']);
    $email =mysqli_real_escape_string($conn,$_POST['email']);
    $password =mysqli_real_escape_string($conn,md5($_POST['pass']));
    $address =mysqli_real_escape_string($conn,($_POST['address']));
    $user_type =mysqli_real_escape_string($conn,$_POST['user']);

            $sql ="INSERT INTO approvaldata (`name`, gender, email, `password`, `address`, user_type)
            VALUES ('{$name}','{$gender}','{$email}','{$password}','{$address}','{$user_type}')";
        
            $result =mysqli_query($conn,$sql) or die("Query Unsuccessful.");

            if($result){

                echo "Done";

            }
 
            mysqli_close($conn);
                //header("Location: http://localhoast/CRMS prg/../login.php");

}
?>  */

if(isset($_POST ["create"]))
	{
        include ("../config.php");

		$name=$_POST['name'];
		$gender=$_POST['gender'];
		$emailid=$_POST['email'];
		$address=$_POST['address'];
		$password=base64_encode($_POST['pass']);
		$usertype=$_POST['user'];
		$test1=mysqli_query($conn,"SELECT `email` FROM `userdata` WHERE `email`='$emailid'");
		$test2=mysqli_query($conn,"SELECT `email` FROM `approvaldata` WHERE `email`='$emailid'");
		if(mysqli_num_rows($test1)!=0 OR mysqli_num_rows($test2)!=0)
		{
			echo "<script>window.alert('We are sorry, it looks like that email address is already in use. Please use a different email address.');</script>";
			echo "<script>window.location.href='../signup.php'</script>";
		}
			else
			{
				$sql="INSERT INTO `approvaldata` (`name`,`gender`,`email`,`password`,`address`,`user_type`)
			VALUES ('$name','$gender','$emailid','$password','$address','$usertype')";
			$result=mysqli_query($conn,$sql);
			if($result)
			{
			echo "<script>window.alert('Awesome, You have signed up Successfully');</script>";
			echo "<script>window.location.href='../login.php'</script>";
			}
		else
			{
			echo "<script>window.alert('Something went wrong.Sign Up Failed');</script>";
			echo "<script>window.location.href='../signup.php'</script>";
			}
			}
	}

?>

