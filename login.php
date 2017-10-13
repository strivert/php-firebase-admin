<?php
session_start();
include('common/connection.php'); 
		
  if(isset($_POST['users_name']) ){

		$checkin = ($_POST['users_name'] == "admin" && $_POST['users_password']=="admin")?true:false;

		if($checkin){
			$_SESSION['AdminUser']  = $_POST['users_name'];
			ReDirect("index.php?page=home");
	      	exit();
			
		}else{
			$msg=base64_encode("Invalid username or password");
//			ReDirect("login.php?msg=$msg&msgtyp=error");
			exit();
		}
		
	}
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title><?php echo TITLE?></title>
<meta name="description" content="">

<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />

<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/jquery.fancybox.css">
<link rel="stylesheet" href="css/login.css">
</head>

<body class='login_body'>
	<div class="wrap">
		<h2><center><?php echo TITLE?> Admin Panel</center></h2>
		<h4>Welcome to the login page</h4>
		<form action="login.php"  autocomplete="off" method="post" class="validate">
		<?php 
		if ($_REQUEST['msgtyp'] == 'error') {
		?>
		<div class="alert alert-error">
			<strong>Error!</strong> Please enter valid username and a password.
		</div>
		<?php 
		}
		?>
		<div class="login">
			<div class="email">
				<label for="user">Username</label><div class="email-input"><div class="control-group"><div class="input-prepend"><span class="add-on"><i class="icon-lock"></i></span><input type="text" id="users_name" name="users_name" class="{required:true}"></div></div></div>
			</div>
			<div class="pw">
				<label for="pw">Password</label><div class="pw-input"><div class="control-group"><div class="input-prepend"><span class="add-on"><i class="icon-lock"></i></span><input type="password" id="users_password" name="users_password" class='{required:true}'></div></div></div>
			</div>
			<div class="remember">
				<label class="checkbox">
					<input type="checkbox" value="1" name="remember"> Remember me
				</label>
			</div>
		</div>
		<div class="submit">
			<!-- 
			<a href="#">Lost password?</a>
			 -->
			<button class="btn btn-red5">Login</button>
		</div>
		</form>
		<div class="social-shadow-hider"></div>
		
	</div>
<script src="js/jquery.js"></script>
<script src="js/jquery.validate.min.js"></script>
<script src="js/jquery.metadata.js"></script>
<script src="js/error.js"></script>
</body>
</html>