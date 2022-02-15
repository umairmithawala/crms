<link rel="stylesheet" type="text/css" href="css/style.css?v=<?php echo time(); ?>">
<link rel="stylesheet" type="text/css" href="css/bootstrap.css?v=<?php echo time(); ?>">

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
		<div class="login-id-main">

			<h2> Log in </h2>
			
			<form   action = "RL/logindata.php"  method = "POST">
				<input type="text" name="email" placeholder="Email address" class="login-input-txt"><br><br>
				<input type="password" name="pass" placeholder="Password" class="login-input-password"> 
				
				<p class="login-forgot"><a href="">Forgot password?</a> </p>
				<div class="login-btn">

				<input type ="submit" name ="Login" value ="Login" class="btn btn-outline-secondary signup-inputbtn" />
				</div>

				<p class="login-pera"> No account yet? <a href="signup.php">Sign up</a> </p>

			</form>
		</div>
	</div>
</div>


