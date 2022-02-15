<?php 
include ("../header.php");
include ("../../config.php");

if(isset($_POST['update'])){
	$id=$_POST['id'];
	$name=$_POST['name'];
	$gender=$_POST['gender'];
	$password=base64_encode($_POST['pass']);
	$address=$_POST['address'];

				$result=mysqli_query($conn,"UPDATE userdata SET `name`='$name', `gender`='$gender', `password`='$password', `address`='$address' WHERE `id`='$id'");
				echo "<script>window.alert('Your data Upgrade Successfully');</script>";
				echo "<script>window.location.href='change details.php'</script>";

					$id=$_GET['id'];
					$result1=mysqli_query($conn,"SELECT * FROM userdata WHERE id='$id'");
					while($row=mysqli_fetch_array($result1))
					{
						$name=$row['name'];
						$address=$row['address'];
					}
	
	}	
?>

	<div class="">

		<h1 class="admin-heading"> Edit Details </h1>
		
		<form name="form1" method="post" action="change details.php">
		<div class="complain-form-detail">
			<div class="complain-form-con">
				<label class="lbl"> Name : </label>
				<input type="text" name="name" placeholder="Enter name" style="margin-left: 40px;" value="<?php echo $name;?>">
			</div>
			<div class="complain-form-con">
				<label class="lbl"> Gender : </label>
				<select name="gender" class="option-type" style="margin-left: 30px;">
					<option>Select Option</option>
					<option>Male</option>
					<option>Female</option>
				</select>
			</div>
			<div class="complain-form-con">
				<label class="lbl"> Password : </label>
				<input type="Password" name="pass" placeholder="Enter Password" style="margin-left: 10px;">
			</div>
			<div class="complain-form-con">
				<label class="lbl"> Address : </label>
				<input type="text" name="address" placeholder="Write here" style="margin-left: 25px;" value="<?php echo $address;?>">
			</div>
			<div class="btn-complain-add">
			 <input type="hidden" name="id"  value="<?php echo $_GET['id'];?>">
			<input type="submit" value="Update" name="update" class="btn btn-secondary" style="margin-left: 200px;">
			</div>
		</div>

	</div>
</div>
</form>
