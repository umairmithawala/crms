<?php 
include ("../header.php"); 
include ("../../config.php");

if(isset($_POST['update'])){
	$id = $_POST['id'];
	$type = $_POST['type'];
	$roomno = $_POST['roomno'];
	
		$result = mysqli_query($conn, "UPDATE room SET `type`='$type', `roomno`='$roomno' WHERE id='$id'");
		echo "<script>window.alert('Your data Upgrade Successfully');</script>";
		echo "<script>window.location.href='manage class and labs.php'</script>";
		
}
		$id =$_GET['id'];
		$result2 = mysqli_query($conn, "SELECT * FROM room WHERE id='$id'");
		while($row = mysqli_fetch_array($result2))
		{
			
			$roomno = $row['roomno'];
		}
?>

<div class="main-containt">
<h1 style="text-align: center; margin-top: -15px;"> Edit Page </h1>

<form name="form1" method="post" action="edit.php">
	<div class="edit-page-main-class">
		<div class="inner-edit-page-main"> 
			<label style="margin-right: 70px;"> Type :</label>
			<select class="form-control-sm" name="type">

			<option>---Select class---</option>
				<option name="Class">Class</option>
				<option name="Lab">Lab</option>
				<option name="Auditorium">Auditorium</option>
				<option name="Lobby">Lobby</option>
			</select>
			<br>
			<br>
			<br>
			<label style="margin-right: 30px;"> Room No :</label>
			<input type="text" name= "roomno" style="margin-left: 5px;" value="<?php echo $roomno;?>" >
		</div>	
		<input type="hidden" name="id" value="<?php echo $_GET['id'];?>">
		<input type="submit" value="Update" name="update" class="btn btn-secondary" style="margin-left: 300px;">
	</div>

</div>
</form>