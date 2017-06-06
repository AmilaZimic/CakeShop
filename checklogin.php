<?php
	session_start();
	include 'connection.php';
	$username = mysqli_real_escape_string($conn,$_POST['username']);
	$password = mysqli_real_escape_string($conn,$_POST['password']);
	$query = mysqli_query($conn,"SELECT * from login WHERE username='".$username."'"); //Query the users table if there are matching rows equal to $username
	$row=mysqli_fetch_assoc($query);
	$db_password=$row['password'];
	$db_username=$row['username'];
	$check=mysqli_query($conn,"select * from users where username = '".$username."'");
		if ($username==$db_username && $password==$db_password){
			$_SESSION['sid']=session_id();
			echo "Logged in successfully.";	
			//header("Location: http://localhost/WADAZ/cakes.php");
			echo 'logged in';
		}
		else{
			echo "Wrong password.";
		    header ("Location: http://localhost/login.html");
		}
		
	
	
	/*$exists = mysql_num_rows($query); //Checks if username exists
	$table_users = "";
	$table_password = "";
	if($exists > 0) //IF there are no returning rows or no existing username
	{
		while($row = mysql_fetch_assoc($query)) //display all rows from query
		{
			$table_users = $row['username']; // the first username row is passed on to $table_users, and so on until the query is finished
			$table_password = $row['password']; // the first password row is passed on to $table_users, and so on until the query is finished
		}
		if(($username == $table_users) && ($password == $table_password)) // checks if there are any matching fields
		{
				if($password == $table_password)
				{
					$_SESSION['user'] = $username; //set the username in a session. This serves as a global variable
					header("location: home.php"); // redirects the user to the authenticated home page
				}
				
		}
		else
		{
			Print '<script>alert("Incorrect Password!");</script>'; //Prompts the user
			Print '<script>window.location.assign("login.php");</script>'; // redirects to login.php
		}
	}
	else
	{
		Print '<script>alert("Incorrect Username!");</script>'; //Prompts the user
		Print '<script>window.location.assign("login.php");</script>'; // redirects to login.php
	}*/
?>