<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">

<div class="container-fluid menu-bg-color">
	<div class="container">
			<div class="menu-icon">
				<div class="menu-sub-icon">
				<img src="img/logo.png" class="web-logo"> </img>
				</div>
			</div>
			<div class="menu-detail">
				<div class="menu-sub-detail">
					<ul>
					<li><a href="index.php"> HOME </a></li>
						<li><a href="about.php"> ABOUT </a></li>
						<li><a href="contact.php"> CONTACT </a></li>
					</ul>
				</div>
			</div>
	</div>
</div>


<div class="container-fluid">
	<div class="container">
		<div class="signup-main">
			<div class="signup-head">
				<h1> Sign up </h1>
			</div>	
			<form  action="RL/signdata.php" method="POST"  class="signup-form">
			
				<div>
					<input type="text" name="name" placeholder="Name" class="signup-input" required>
				    	
				</div>
				<div>
					<select name="gender" class="signup-input" required>
						<option>Gender</option>
						<option> Male </option>
						<option> Female </option>
					</select>
				</div>
				<div>
					<input type="email" name="email" placeholder="Email address" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="You have entered an invalid e-mail address. Must be in the following order: characters@characters.domain" class="signup-input">
				</div>
				<div>
					<input type="password" name="pass" placeholder="Password" pattern=".{3,}" title="Password must contain at least 3 characters" class="signup-input" required>
				</div>
				<div>
					<textarea placeholder="Address" name="address" class="signup-input" style="height: 100px;" required></textarea>
				</div>
				<div>
					<select name="user" class="signup-input" style="height: 45px;" >
						<option>User Type </option>
						<option> Student </option required>
						<option> H.O.D </option>
						<option> Lab Operator </option>
						<option> Admin </option>
					</select>
				</div>
				<div class="signup-btn">
				<input type="submit" name="create" value="Sign up" class="btn btn-outline-secondary signup-inputbtn">
			</div>
			    
			</form>

			<div class="signup-btn-login">
				<a href="login.php" style="margin-top: 10px;">Login here</a>
			</div> 
		</div>
	</div>
</div>