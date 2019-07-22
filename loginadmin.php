<?php include('serveradmin.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>Admin Login</h2>
  </div>

  <form method="post" action="loginadmin.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
    <p>
		  Not yet a member? <a href="registeradmin.php">Sign up</a>
		  <a href="homepage.html">HOME</a>
  	</p>
  </form>
</body>
</html>
