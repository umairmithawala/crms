<link rel="stylesheet" type="text/css" href="../../css/style.css?v=<?php echo time(); ?>">
<link rel="stylesheet" type="text/css" href="../css/stylestu.css?v=<?php echo time(); ?>">
<link rel="stylesheet" type="text/css" href="../../css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="../../css/all.css?v=<?php echo time(); ?>">
<?php 
session_start();

if(!isset( $_SESSION["userEmails"])){
	echo "<script>window.location.href='../../login.php'</script>";
	$flag=1;
}
else{
	$type=$_SESSION['userType'];
	$email=$_SESSION['userEmails'];
	
	$flag=0;
}
?>

<div class="container-fluid menu-bg-color">
	<div class="container">
			<div class="menu-icon">
				<div class="menu-sub-icon">
				<img src="../../img/logo.png" class="web-logo"> </img>
				</div>
			</div>	
			<div class="menu-detail">
				<div class="menu-sub-detail">
					<ul>
						<li>
							<a href="../../logout.php"> 
							
	 <?php
		if($flag==1)
		{
			echo "<h1><u>Hello</u></h1>";
		}
		else
		{
			
			echo "User Id : $email"; 
			echo "&nbsp &nbsp";
			echo "User Type:$type";
		}
	?>  
	  <i class="fas fa-unlock-alt" style="color:white; font-size: 25px;"></i> 
	  
	   	</a>
						</li>
					</ul>
				</div>
			</div>
	</div>
</div>

<div class="container-fluid">

	<div class="admin-sidebar stu-sidebar">
		<a href="../complain/complain.php"  class="admin-sidebar-option"> Complains </a>
		<br>
		<a href="../manage complains/manage complains.php"  class="admin-sidebar-option"> Manage Complains </a>
		<br>
		<a href="../view solved complains/view solved complains.php"  class="admin-sidebar-option"> View Solved Complains </a>
		<br>
		<a href="../change details/change details.php"  class="admin-sidebar-option"> Change Details </a>
	</div>
