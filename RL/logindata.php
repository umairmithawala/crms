<?php
if(isset($_POST ["Login"]))
	{
        include ("../config.php");
        
        $email = mysqli_real_escape_string($conn,$_POST['email']);
        $password = base64_encode($_POST['pass']);  
       
	    $sql= "SELECT `id`,`email`,`user_type` FROM `userdata` WHERE `email` ='{$email}' AND `password`= '{$password}'";
        $result= mysqli_query($conn,$sql) or die('Query faild.');
        
         if(mysqli_num_rows($result) > 0){
            
            while($row=mysqli_fetch_assoc($result)){
                session_start();
                $_SESSION["userId"]= $row['id'];
                $_SESSION["userEmails"]= $row['email'];      
                $_SESSION["userType"]= $row['user_type'];
                $usertype= $row['user_type'];
            }  
            if($usertype=='Admin')  
            {
    
            echo "<script>window.alert('Login Successful');</script>";
                
			echo "<script>window.location.href='../Admin/user/index.php'</script>";
            }
         
    if($usertype=='Student')
    {
        echo "<script>window.alert('Login Successful');</script>";
    echo "<script>window.location.href='../Student/complain/complain.php'</script>";
    }
}else{

echo "<script>window.alert('Login failed ');</script>";
echo "<script>window.location.href='../login.php'</script>";
    }
}
?>