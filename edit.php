<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Edit email</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	
  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
  	<!--
	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>
	-->
	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
	<div class="input-group">
  	  <a href="register.php?edit=<?php echo $row['id']; ?>"><button type="submit" class="btn" name="update">Edit</button>
  	</div>
	<!--
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2">
  	</div>
  	
	-->
  	<!--Add Validation and redirect to login page-->
  </form>
</body>
</html>