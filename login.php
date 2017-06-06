<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Cake Shop</title>
<link rel="stylesheet" type="text/css" href="css/style.css" media="all" />
<!--[if IE 6]>
	<link rel="stylesheet" type="text/css" href="css/ie6.css" media="all" />
<![endif]-->
<!--[if IE 7]>
	<link rel="stylesheet" type="text/css" href="css/ie7.css" media="all" />
<![endif]-->
</head>
<body>
	<div id="header">
			<ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="about.php">About Us</a></li>
			<li><a href="cakes.php">Cakes</a></li>
			<li><a href="ordering.php">Ordering</a></li>
			<li class="selected"><a href="login.php">Login</a></li>
			<li><a href="register.php">Registration</a></li>
			<li><a href="contact.php">Contact Us</a></li>				
		</ul>
		<div class="logo">
			<a href="index.php"><img src="images/logo.gif" alt="" /></a>
		</div>
	</div>

	
	<div id="body">
		<div class="about">
			<h1>Login for ordering</h1>		
			<div>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation. Vis dolor singulis neglegentur an. Ad has falli posidonium accommodare, ei alienum liberavisse eos, odio reque nec te. Sit doming doctus dissentiet cu.</p>
			</div>

		<div class="login">

    			<form action="checklogin.php" method="post">
			<input type="text" placeholder="Username" name="username" required="required"/> 
			<input type="password" placeholder="Password"  name="password" required="required" /> 
			<input type="submit" value="Login"/>
			</form>

		</div>


		</div>
	</div>
	<div id="footer">
		<div>
			<div class="connect">
				<h4>Follow us:</h4>
				<ul>
					<li class="facebook"><a href="index.php"></a></li>
					<li class="twitter"><a href="index.php"></a></li>		
				</ul>
			</div>
			<p>Copyright &copy; 2016. All rights reserved.</p>
		</div>
	</div>
</body>
</html>