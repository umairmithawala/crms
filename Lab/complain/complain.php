<?php 
include ("../header.php"); 
?>

<div class="main-containt-complain-lab">
	<h1 class="lab-complain-head"> Complain </h1>

	<div class="lab-complain-main">

		<div>
			<label> Type : </label>
			<select class="lab-select-option">
				<option> -- select class type -- </option>
				<option> Class </option>
				<option> Lab </option>
				<option> Auditorium </option>
			</select>
		</div>

		<div class="lab-margin">
			<label> Problem :</label>
			<select class="lab-select-option-prob">
				<option> -- select problems -- </option> 
				<option> Computer not working </option>
				<option> Server not working </option>
				<option> Fan not working </option>
			</select>
		</div>

		<div class="lab-margin">
			<label> Description :</label>
			<textarea style="margin-left: 30px; width: 180px; height: 70px;" placeholder="Type here . . . "></textarea>
		</div>
		<div class="lab-complain-btn">
			<a href="" class="btn btn-secondary" style="width: 70px;"> Add </a>
		</div>
	</div>

</div>