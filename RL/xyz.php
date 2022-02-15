<?php
if(isset ($_POST['create'])){
    include ("../config.php");

    $name =mysqli_real_escape_string($conn,$_POST['name']);
    $gender =mysqli_real_escape_string($conn,$_POST['gender']);
    $email =mysqli_real_escape_string($conn,$_POST['email']);
    $password =mysqli_real_escape_string($conn,md5($_POST['pass']));
    $address =mysqli_real_escape_string($conn,($_POST['address']));
    $user_type =mysqli_real_escape_string($conn,$_POST['user']);

    $sql ="SELECT email FROM approvaldata WHERE email = '{$email}'";
    $result=mysqli_query($conn,$sql) or die("Query Unsuccessful");

    if(mysqli_num_rows($result) > 0){

         "<p stlye='color:red; text-align:center;margin: 10px o'> Email already exist.</p>";
    }
    else{
            $sql1 ="INSERT INTO approvaldata (`name`, gender, email, `password`, `address`, user_type)
            VALUES ('{$name}','{$gender}','{$email}','{$password}','{$address}','{$user_type}')";
  
          //  if(mysqli_query($conn,$sql1)) {

            

           $result1 =mysqli_query($conn,$sql1) or die("Query Unsuccessful   2.");

          
                header("login.php");
            //}   

           }

}

?> 