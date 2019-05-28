<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Edit Password</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	
  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2">
  	</div>
	<div class="input-group">
  	  <a href="register.php?edit=<?php echo $row['id']; ?>"><button type="submit" class="btn" name="updatepass">Edit</button>
  	</div>
  </form>
</body>
</html>