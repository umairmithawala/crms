<?php 
include ("../header.php"); 
?>

<div class="main-containt-complain-lab">
	<h1 class="lab-complain-head"> Change Details </h1>

	<div class="lab-complain-main">

		<div>
			<label> Name : </label>
			<input type="text" name="" class="lab-name-det" placeholder="Enter your name">
		</div>

		<div class="lab-margin">
			<label> Gender :</label>
			<select class="lab-select-option-det">
				<option> -- select Gender -- </option>
				<option> Male </option>
				<option> Female </option>
			</select>
		</div>

		<div class="lab-margin">
			<label> Password : </label>
			<input type="password" name="" class="lab-password-det">
		</div>

		<div class="lab-margin">
			<label> Address :</label>
			<textarea style="margin-left: 80px;" placeholder="Address . . ."></textarea>
		</div>
		<div class="lab-add-btn-det">
			<a href="" class="btn btn-secondary" style="width: 60px;"> Add </a>
		</div>
	</div>

</div>