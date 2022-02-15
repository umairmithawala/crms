<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<?php 
include ("../header.php"); 
?>

<div class="container-fluid">
	<div class="container">
		<h1 style="text-align: center; margin-top: -15px;"> Add Page </h1>
		<div class="heading-addpage ">
		<form action="savedata.php"  method="POST">
			<div class="main-addpage">
						
				<div class="div-containet">
					<label> Name </label>
					<input type="text" name="name" placeholder="Enter name" class="name-txtbox">
				</div>
				<div class="div-containet" name= "gender">
					<label> Gender </label>
					<select  class="gender-option">
						<option>
							Select Gender
						</option>
						<option>
							Male
						</option>
						<option>
							Female
						</option>
					</select>	
				</div>
				<div class="div-containet">
					<label> Email id </label> 
					<input type="text" name="email" placeholder="Enter email id" class="email-txtbox">
				</div>
				<div class="div-containet">
					<label> Password </label> 
					<input type="Password" name="pass" placeholder="Enter Password" class="email-password">
				</div>
				<div class="div-containet">
					<label>Address</label>	
					<textarea name= "address"class="txt-area"> </textarea>	
				</div>
				<div class="div-containet">
					<label>User Type</label>
					<select name ="user"  class="usertype-select">
						<option>
							Select User type
						</option>
						<option>
							Student
						</option>
						<option>
							H.O.D
						</option>
						<option>
							Lab Operator
						</option>
						<option>
							Admin
						</option>
					</select>
					</form>
				</div>
		

				<input type="submit" name="create" value="Save" class="btn btn-outline-secondary addpage-submit-btn">

			</div>
		</div>
	</div>
</div>