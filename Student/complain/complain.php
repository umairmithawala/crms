<?php 
include ("../header.php");

if(isset($_SESSION['userEmail']))
{
	$email=$_SESSION['userEmail'];
}
?>

<html>
    <head>


    </head>
<body onload="Room('class')">

<form method="POST" action="add.php">
	<div class="main-containt-stu">

		<h1 class="admin-heading"> Complains </h1>

		<div class="complain-form-main">
			<div class="complain-form-con">
				<label class="lbl"> To : </label>
				<select name="type" class="option-to">

					<option value="admin">Admin</option>
					<option value="lab">Lab Operator</option>
				</select>
			</div>
			<div class="complain-form-con">
				<label class="lbl"> Type : </label>
				
				<select name="room"  class="option-type" onchange="Room(this.value)">
				<option value="class">Class</option>
				<option value="lab">Lab</option>
				<option value="auditorium">Auditorium</option>
				<option value="lobby">Lobby</option>
			</select>
			</div>

			<div id="result">

			</div>

			<div class="complain-form-con">
				<label class="lbl"> Problems : </label>
				<select name="problem" class="option-prob">
				<?php

					include ("../../config.php");
					$result = mysqli_query($conn, "SELECT * FROM problem");
					while($res = mysqli_fetch_array($result)){

					$problemid=$res['id'];
					$problem = $res['problem'];
					echo "<option value=$problemid >$problem</option>";
					}	
				?>
				</select>
			</div>
			<div class="complain-form-con">
				<label class="lbl" > Description : </label>
				<textarea name="description" placeholder="Write here" style="margin-left: 15px;"></textarea>
			</div>
			<div class="btn-complain-add">
			<input type="hidden" name="userid" value=<?php echo "$email"; ?>>
			<input type="submit" value="ADD" name="add" style="margin-left: 150px;" class="btn btn-secondary">
				
			</div>
		</div>

	</div>
</div>
</form>
</body>
</html>

 <script>
            function Room(room)
            {
                xmlHttp = new XMLHttpRequest();
                xmlHttp.onreadystatechange= function() {
                    if(this.readyState == 4 && this.status == 200)
                    {
                        document.getElementById("result").innerHTML=this.responseText;
                    }
                }
                xmlHttp.open("GET","ajax.php?room="+room,true);
                xmlHttp.send();
            }		
        </script>