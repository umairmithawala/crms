<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/style.css">

<?php 
include ("../header.php"); 
include ("../../config.php");
if(isset($_POST['update'])){
	$id=$_POST['id'];
	$name=$_POST['name'];
	$email=$_POST['email'];
	$type=$_POST['type'];

			$test=mysqli_query($conn,"UPDATE userdata SET `name`='$name', `email`='$email', `user_type`='$type' WHERE `id`=$id");
			echo "<script>window.alert('Your data Upgrade Successfully');</script>";
			echo "<script>window.location.href='index.php'</script>";
}
?>

<div class="update-header">
	<h1> EditUser Details </h1>	
	<div class="main-container">

		<?php

		$id= $_GET['id'];

		$sql = "SELECT * FROM userdata WHERE id = {$id}";
		$result = mysqli_query($conn,$sql) or die("Query Unsuccessful.");

		if(mysqli_num_rows($result)> 0){
		  while($row = mysqli_fetch_assoc($result)){
		?>

		<form method ="post"  action ="edit.php">
		<div class="div-containet">
			<label> Name </label>
			<input type="text" name="name" placeholder="Enter name" value ="<?php echo $row['name']; ?>" class="name-txtbox">
		</div>
		
		<div class="div-containet">
			<label> Email id </label> 
			<input type="text" name="email" placeholder="Enter email id" value ="<?php echo $row['email']; ?>" class="email-txtbox">
		
		</div>
		<div class="div-containet" >
			<label>User Type</label>
			<select  name="type" class="usertype-select" >
				<option>Select User type</option>
				<option>Admin</option>
				<option>H.O.D</option>
				<option>Lab Operator</option>
				<option>Student</option>
			</select>
		</div>
		<input type="hidden" name="id" value="<?php echo $_GET['id'];?>">
		<input type="submit" name="update" value="Update" class="btn btn-outline-secondary submit-btn">
		</form>
		<?php 
		}
	}
		?>

	</div>
</div>