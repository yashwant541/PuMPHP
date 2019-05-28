<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="styles.css">
  <link href='https://fonts.googleapis.com/css?family=Roboto:500,400,300&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-2.1.4.js"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script type="text/javascript">
	var colors = ['#e51600','#e54000','#e57d00','#e5bb00','#b7e500','#7de500','#16e500','#00e557','#00e594','#00a4e5','#005be5','#210091','#6d2c7f','#7f2c54','#7f2c2c'];

	function UpdateColors() {
		$('.bg-primary').each(function(index) {
			var color = colors[Math.floor(Math.random() * colors.length)];
			$(this).css({
				'background-color': color,
			});
		});
	}
	$(document).on("click", function () {
        UpdateColors();
    });
	
	<!--EDIT 1>
	jQuery(function($) {

	  // MAD-RIPPLE // (jQ+CSS)
	  $(document).on("mousedown", "[data-ripple]", function(e) {
		
		var $self = $(this);
		
		if($self.is(".btn-disabled")) {
		  return;
		}
		if($self.closest("[data-ripple]")) {
		  e.stopPropagation();
		}
		
		var initPos = $self.css("position"),
			offs = $self.offset(),
			x = e.pageX - offs.left,
			y = e.pageY - offs.top,
			dia = Math.min(this.offsetHeight, this.offsetWidth, 100), // start diameter
			$ripple = $('<div/>', {class : "ripple",appendTo : $self });
		
		if(!initPos || initPos==="static") {
		  $self.css({position:"relative"});
		}
		
		$('<div/>', {
		  class : "rippleWave",
		  css : {
			background: $self.data("ripple"),
			width: dia,
			height: dia,
			left: x - (dia/2),
			top: y - (dia/2),
		  },
		  appendTo : $ripple,
		  one : {
			animationend : function(){
			  $ripple.remove();
			}
		  }
		});
	  });

	});
	
	<!--EDIT 1 CLOSES-->
	
	
	
  </script>
</head>
<body>

<div data-ripple="rgba(0,0,0, 0.4)" class="cell bg-primary">
<!--<div class="mydiv">-->
  <div class="header">
  	<h2>Register</h2>
  </div>
	
  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p>
  		Already a member? <a href="login.php">Sign in</a>
  	</p>
  </form>
 <!--</div>-->
 </div>
</body>
</html>