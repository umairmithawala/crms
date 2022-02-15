<?php 
include ("../header.php"); 
include ("../../config.php");
if(isset($_POST['add'])){
	$problem =$_POST['problem'];
	$result = mysqli_query($conn,"SELECT * FROM problem WHERE problem='$problem'");

	if(mysqli_num_rows($result)){
		"<script>window.alert('Data insertion failed Data Already Present');</script>";
		"<script>window.location.href='manage problems.php'</script>";
	}
	else{
		$sql="INSERT INTO `problem` (`problem`) VALUES ('$problem')";
		$result1= mysqli_query($conn,$sql);

		if($result1){
			echo "<script>window.alert('Your data Add On Successfully');</script>";
			echo "<script>window.location.href='manage problems.php'</script>";
		}else{
			echo "<script>window.alert('Data insertion failed');</script>";
			echo "<script>window.location.href='manage problems.php'</script>";

		}

	}
}
?>

<div class="main-containt">
	<h1 style="text-align: center; margin-top: -15px;"> Add Problem  </h1>
	<form name="form1" method="post" action="add.php">
	<div class="add-page-main">

		<div class="inner-edit-page-main"> 

			<label style="margin-right: 30px;"> Problem :</label>
			<input type="text" name="problem" placeholder="Add Problem"> 
	
		</div>
			
		<input type="submit" value="ADD" name="add" class="btn btn-secondary" style="margin-left: 350px;">
	</div>

</div>
</form>