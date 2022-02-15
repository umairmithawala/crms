<?php 
include ("../header.php"); 
include ("../../config.php");
if(isset($_POST['add'])){
	$type=$_POST['type'];
	$roomno=$_POST['roomno']; 
	$result=mysqli_query($conn,"SELECT * FROM room WHERE `type`='$type' AND roomno='$roomno'");

	if(mysqli_num_rows($result)){
		echo "<script>window.alert('Data insertion failed Data Already Present');</script>";
		echo "<script>window.location.href='manage class and labs.php'</script>";
	}
	else{
		$sql="INSERT INTO room (`type`,`roomno`) VALUES ('$type','$roomno')";
		$result2=mysqli_query($conn,$sql);
	
		if($result2){
			echo "<script>window.alert('Your data Add On Successfully');</script>";
			echo "<script>window.location.href='manage class and labs.php'</script>";
		}
		else{
			echo "<script>window.alert('Data insertion failed');</script>";
			echo "<script>window.location.href='manage class and labs.php'</script>";

		}

	}

}
?>

<div class="main-containt">
<h1 style="text-align: center; margin-top: -15px;"> Add Page </h1>
<form name="form1" method="post" action="add.php">

	<div class="add-page-main-class-lab">
		<div class="inner-edit-page-main"> 
			<label style="margin-right: 100px;"> Type :</label>
			<select name="type" class="form-control-sm">
		
				<option>---Select class---</option>
				<option name="Class">Class</option>
				<option name="LAb">Lab</option>
				<option name="Auditorium">Auditorium</option>
				<option name="Lobby">Lobby</option>
			</select> 
			<br>
			<br>
			<br>
			<label style="margin-right: 30px;"> Room No :</label>
			<input  name="roomno" type="text" style="margin-left: 37px;" placeholder="Enter room no">
		</div>	
		<input type="submit" name="add" value="ADD" class="btn btn-secondary" style="margin-left: 300px;">
	</div>

</div>
</form>