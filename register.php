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
			<li><a href="login.php">Login</a></li>
			<li class="selected"><a href="register.php">Registration</a></li>
			<li><a href="contact.php">Contact Us</a></li>				
		</ul>
		<div class="logo">
			<a href="index.php"><img src="images/logo.gif" alt="" /></a>
		</div>
	</div>

	</div>
	<div id="body">
		<div class="about">
			<h1>Register for newsletters</h1>		
			<div>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation. Vis dolor singulis neglegentur an. Ad has falli posidonium accommodare, ei alienum liberavisse eos, odio reque nec te. Sit doming doctus dissentiet cu.</p>
			</div>

	<div class="register">

		<form action="register.php" method="post">
    			 <input type="text" placeholder="Username" name="username" required="required"/> 
  			<input type="password" placeholder="Password" name="password" required="required"/> 
  			<input type="submit" value="Register">
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

<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $bool = true;
	include 'connection.php';
	$username = mysqli_real_escape_string($conn,$_POST['username']);
	$password = mysqli_real_escape_string($conn,$_POST['password']);
	/*$query = mysqli_query($conn,"Select * from users"); //Query the users table	
	/*while($row = mysqli_fetch_array($query)) //display all rows from query
	{
		$table_users = $row['username']; // the first username row is passed on to $table_users, and so on until the query is finished
		if($username == $table_users) // checks if there are any matching fields
		{
			$bool = false; // sets bool to false
			Print '<script>alert("Username has been taken!");</script>'; //Prompts the user
			Print '<script>window.location.assign("register.php");</script>'; // redirects to register.php
		}
	}*/
	if($bool) // checks if bool is true
	{
		mysqli_query($conn,"INSERT INTO login VALUES ('','".$username."','".$password."')"); //Inserts the value to table users
		Print '<script>alert("Successfully Registered!");</script>'; // Prompts the user
		Print '<script>window.location.assign("register.php");</script>'; // redirects to register.php
	}
}
?>