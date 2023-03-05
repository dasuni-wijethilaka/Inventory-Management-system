<?php
	session_start();
	
	// Check if user is already logged in
	if(isset($_SESSION['loggedIn'])){
		header('Location: index.php');
		exit();
	}
	
	require_once('inc/config/constants.php');
	require_once('inc/config/db.php');
	require_once('inc/header.html');
?>
<link rel="stylesheet" href="style.css">
  <body>

<?php
// Variable to store the action (login, register, passwordReset)
$action = '';
	if(isset($_GET['action'])){
		$action = $_GET['action'];
		if($action == 'register'){
?>
			<img src="wallpaperAc.jpg" alt="background" class="back">
			
	
			<div class="container">
			<img src="acLogo.png" alt="LOGO" class="logo">
      <div class="login_con">
				<div class="card">
				  <div class="card-header" style="background-color: orange; color:black; text-align:center; font-size:large; font-weight:bold;">
					Register
				  </div>
				  <div class="card-body">
					<form action="">
					<div id="registerMessage"></div>
					  <div class="form-group">
						
						<input type="text" class="form-control" id="registerFullName" name="registerFullName" placeholder="Enter Name *">
						<!-- <small id="emailHelp" class="form-text text-muted"></small> -->
					  </div>
					   <div class="form-group">
						
						<input type="email" class="form-control" id="registerUsername" name="registerUsername" autocomplete="on" placeholder="Enter Username *">
					  </div>
					  <div class="form-group">
						
						<input type="password" class="form-control" id="registerPassword1" name="registerPassword1" placeholder="Enter Password *">
					  </div>
					  <div class="form-group">
					
						<input type="password" class="form-control" id="registerPassword2" name="registerPassword2" placeholder="Re-enter Password *" required>
					  </div>
					  <a href="login.php" class="btn btn-primary">Login</a>
					  <button type="button" id="register" class="btn btn-success">Register</button>
					  <a href="login.php?action=resetPassword" class="btn btn-warning">Reset Password</a>
					  <button type="reset" class="btn btn-default">Clear</button>
					</form>
				  </div>
				</div>
				</div>
			  </div>
			</div>
<?php
			require 'inc/footer.php';
			echo '</body></html>';
			exit();
		} elseif($action == 'resetPassword'){
?>
			<img src="wallpaperAc.jpg" alt="background" class="back">
	<div class="namecon">
	
	</div>
			<div class="container">
			<img src="acLogo.png" alt="LOGO" class="logo">
      <div class="login_con">
				<div class="card">
				  <div class="card-header" style="background-color: orange; color:black; text-align:center; font-size:large; font-weight:bold;">
					Reset Password
				  </div>
				  <div class="card-body">
					<form action="">
					<div id="resetPasswordMessage"></div>
					  <div class="form-group">
				
						<input type="text" class="form-control" id="resetPasswordUsername" name="resetPasswordUsername" placeholder="Enter Username *">
					  </div>
					  <div class="form-group">
						
						<input type="password" class="form-control" id="resetPasswordPassword1" name="resetPasswordPassword1" placeholder="Enter New Password *">
					  </div>
					  <div class="form-group">
						
						<input type="password" class="form-control" id="resetPasswordPassword2" name="resetPasswordPassword2" placeholder="Confirm New Password *">
					  </div>
					  <a href="login.php" class="btn btn-primary">Login</a>
					  <a href="login.php?action=register" class="btn btn-success">Register</a>
					  <button type="button" id="resetPasswordButton" class="btn btn-warning">Reset Password</button>
					  <button type="reset" class="btn">Clear</button>
					</form>
				  </div>
				</div>
				</div>
			  </div>
			</div>
<?php
			require 'inc/footer.php';
			echo '</body></html>';
			exit();
		}
	}	
?>
	<!-- Default Page Content (login form) -->
	<img src="wallpaperAc.jpg" alt="background" class="back">
	<div class="namecon">
	<!--<div class="name">Gang Of Greatness</div>
	<div class="slog">Creativity is great but not in accounting</div>-->
	</div>

    <div class="container">
		<img src="acLogo.png" alt="LOGO" class="logo">
      <div class="login_con">
		<div class="card">
		  <div class="card-header" style="background-color: orange; color:black; font-weight:bold; text-align:center; font-size:large;">
			Login
		  </div>
		  <div class="card-body">
			<form action="">
			<div id="loginMessage"></div>
			  <div class="form-group">
				<!--<label for="loginUsername">Username</label>-->
				<input type="text" class="form-control" id="loginUsername" name="loginUsername" placeholder="Enter Username">
			  </div>
			  <div class="form-group">
				<!--<label for="loginPassword">Password</label>-->
				<input type="password" class="form-control" id="loginPassword" name="loginPassword" placeholder="Enter Password">
			  </div>
			  <button type="button" id="login" class="btn btn-success">Login</button>
			  <a href="login.php?action=register" class="btn btn-primary">Register</a>
			  <a href="login.php?action=resetPassword" class="btn btn-danger">Forgot Password</a>
			  <button type="reset" class="btn">Clear</button>
			</form>
		  </div>
		</div>
		</div>
      </div>
<?php
	require 'inc/footer.php';
?>
  </body>
</html>
