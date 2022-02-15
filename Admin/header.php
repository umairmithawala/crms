<link rel="stylesheet" type="text/css" href="../../css/style.css?v=<?php echo time(); ?>">
<link rel="stylesheet" type="text/css" href="../../css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="../../css/all.css?v=<?php echo time(); ?>">
<link rel="stylesheet" type="text/css" href="stylestu.css?v=<?php echo time(); ?>">
<?php 
session_start();

if(!isset( $_SESSION["userEmails"])){
	echo "<script>window.location.href='../../login.php'</script>";
	$flag=1;
}
else
{
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
					<li> <a href="../../logout.php">  
						 <?php
								if($flag==1)
								{
									echo "<h1><u>Hello</u></h1>";
								}
								else
								{
									
									echo " User Id: $email";
									echo "&nbsp &nbsp";
									echo "User Type: $type";
								}
							?>  
							<i class="fas fa-unlock-alt" style="color:white; font-size: 25px; margin-left:20px;"></i>
						 </a>
					</li>
				</ul>
			</div>
		</div>
</div>
</div>

<div class="container-fluid">		

	<div class="admin-sidebar" style="margin-top: -1px;">
		<a href="../user/index.php"  class="admin-sidebar-option"> Manage User </a> 
		<br>
		<a href="../approval/manage approval.php" class="admin-sidebar-option"> Manage Approval </a>
		<br>
		<a href="../complain/manage complains.php"  class="admin-sidebar-option"> Manage Complains </a>
		<br>
		<a href="../solved/manage solved complains.php"  class="admin-sidebar-option"> Manage Solved Complains </a>
		<br>
		<a href="../class/manage class and Labs.php"  class="admin-sidebar-option"> Manage Class And Labs </a>
		<br>
		<a href="../problem/manage Problems.php"  class="admin-sidebar-option"> Manage Problems </a>
		<br>
		<a href="../suggestion/View Suggestion.php"  class="admin-sidebar-option"> View Suggestion </a>
		<br>
		<a href="../request/manage resources request.php"  class="admin-sidebar-option"> Manage Resource Request </a>
	</div>
</div>	