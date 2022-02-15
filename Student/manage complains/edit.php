<?php 
	include ("../header.php");
	include ("../../config.php");
	if(isset($_SESSION['userEmail']))
{
		$email=$_SESSION['userEmail'];
}

	if(isset($_POST ['update']))
	{
		$id=$_POST['id'];
		$userid=$_POST['userid'];
		$type=$_POST['type'];
		$problemid=$_POST['problem'];
		$room=$_POST['room'];
		$roomno=$_POST['roomno'];
		$description=$_POST['description'];
		
		$result = mysqli_query($conn,"SELECT * FROM problem where `id`='$problemid'");
			while($res = mysqli_fetch_array($result))
				{
					$problem = $res['problem'];
					break;
				}		
		
		$test=mysqli_query($conn,"SELECT * FROM `complain` WHERE `userid`='$userid' AND `type`='$type' AND `room`='$room' AND `roomno`='$roomno' AND `problem`='$problem' AND `description`='$description'");
		if(mysqli_num_rows($test)!=0)
		{
			echo "<script>window.alert('Complain insertion failed Complain Already Present');</script>";
			echo "<script>window.location.href='manage complains.php'</script>";
		}
		else
			{
			$sqlQuery="UPDATE complain SET `userid`='$userid',`type`='$type',`room`='$room',`roomno`='$roomno',`problem`='$problem',`description`='$description' WHERE `id`='$id'";
			$fireQuery=mysqli_query($conn,$sqlQuery);
			if($fireQuery)
			{
			echo "<script>window.alert('Your Complain Update Successfully');</script>";
			echo "<script>window.location.href='manage complains.php'</script>";
			}
		else
			{
			echo "<script>window.alert('Your Complain Updation Failed');</script>";
			echo "<script>window.location.href='manage complains.php'</script>";
			}
			}
	}

?>


<html>
    <head>
        <script>
            function Room(room)
            {
                xmlHttp = new XMLHttpRequest();
                xmlHttp.onreadystatechange= function() {
                    if(this.readyState == 4 && this.status == 200)
                    {
                        document.getElementById("result").innerHTML=this.responseText;
                    }
                };
                xmlHttp.open("GET","ajax.php?room="+room,true);
                xmlHttp.send();
            }
        </script>
    </head>





	<body onload="Room('class')">
	<div class="main-containt">

		<h1 class="admin-heading-stu"  > Edit Complains </h1>
		
		<form name="form1" method="post" action="edit.php">
		<div class="complain-form-edit">
			<div class="complain-form-con">
				<label class="lbl"> TO : </label>
				<select name="type" class="option-to">
					<option value="">Select</option>
					<option value="admin">Admin</option>
					<option value="lab">Lab Operator</option>	
				</select>
			</div>
			<div class="complain-form-con">
				<label class="lbl"> TYPE : </label>
				<select name="room" onchange="Room(this.value)" class="option-type">
				
					<option value="class">Class</option>
					<option value="lab">Lab</option>
					<option value="auditorium">Auditorium</option>
					<option value="lobby">Lobby</option>
				</select>

			</div>
			<div class="complain-form-con">

			<div id="result">	
			</div >
			</div>
			
			<div class="complain-form-con">
				<label class="lbl"> PROBLEM : </label>
				<select name="problem" class="option-prob">
				
				<?php
				include ("../../config.php");
					$result = mysqli_query($conn,"SELECT * FROM problem");
					while($res = mysqli_fetch_array($result))
					{
						$problemid=$res['id'];
						$problem=$res['problem'];
						echo "<option value=$problemid>$problem</option>";
					} 
				?>
				</select>
			</div>
			<div class="complain-form-con">
				<label class="lbl"> DESCRIPTION : </label>
				<input type="text" name="description" placeholder="Write here" style="margin-left: -15px;" >		
			</div>

			<div class="btn-complain-add">
			<input type="hidden" name="userid" value=<?php echo "$email";?>>
			<input type="hidden" name="id" value=<?php echo $_GET['id'];?>>
			<input type="submit" name="update" value="Update">
			</div>
		</div>

	</div>
</div>

</form>
</body>
</htm/>
