<?php 
include ("../header.php"); 
include ("../../config.php");
if(isset($_POST['update'])){
	$id=$_POST['id'];
	$problem=$_POST['problem'];

		$result=mysqli_query($conn,"UPDATE problem SET problem='$problem' WHERE id='$id'");
		echo "<script>window.alert('Your data Upgrade Successfully');</script>";
		echo "<script>window.location.href='manage problems.php'</script>";
}
		$id=$_GET['id'];
		$result1=mysqli_query($conn,"SELECT * FROM problem WHERE id=$id");
		while($row=mysqli_fetch_array($result1)){

			$problem = $row['problem'];
		}			
	
?> 

<div class="main-containt">
<h1 style="text-align: center; margin-top: -15px;"> Edit Page </h1>

<form name="form1" method="post" action ="edit.php">
	<div class="edit-page-main">		
		<div class="inner-edit-page-main"> 
			<label style="margin-right: 30px;"> Problem :</label>
			<input type="text" name="problem" value="<?php echo $problem;?>"> 
		</div>	
		<input type="hidden" name="id" value="<?php  echo $_GET['id'];?>">
		<input type="submit" name="update" value="Update" class="btn btn-secondary" style="margin-left: 350px;">
	</div>

</div>
</form>