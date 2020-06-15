
<?php
// file name: login.php
// bmcc email: ling.fang@stu.bmcc.cuny.edu
// file creation date: feb 16, 2019
// This is login page, which is the top level file. 
// Enter username and password to login in, or register on the side.
?>

<html>
<head>
	<title><?php print'Income Tax Calculation' ?></title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" href="css/1.css" type="text/css" media="screen,projection" />
</head>
<body>
<div id="wrapper">
	<div id="header">
		<p class="description">Ling Fang</p>
		<h1>Income tax calculation!</h1>
	</div>
	
<div id="sidebar">
	<h2>Register Now!</h2>
	<p class="news">Click here -><a href="register.php">Register</a> <- to register now!</p>
	<p><?php // Print the current date and time...
			// Set the timezone:
			date_default_timezone_set('America/New_York');

			// Now print the date and time:
			print date('Y, m d G:ia');
			?></p>
</div>

	
	<div id="content">
<?php
$dbc = mysqli_connect('localhost', 'root', '');
	print '<h2>Login Form</h2>
	<p>Users who are logged in can start calculate.</p>';

// Check if the form has been submitted:
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	// Handle the form:
	if ( (!empty($_POST['user'])) && (!empty($_POST['password'])) ) {
		
		if ( (strtolower($_POST['user']) == 'admin') && ($_POST['password'] == 'csc350') ) { // Correct!
			session_start();
		$_SESSION['user'] = $_POST['user'];
		$_SESSION['loggedin'] = time();
			
			
			// Redirect the user to the home page!
			ob_end_clean(); // Destroy the buffer!
			header ('Location: home.php');
			exit();
		} else { // Incorrect!
			print '<p>The submitted user and password do not match those on file!<br />Go back and try again.</p>';
		}
	} else {
		print '<p>Please make sure you enter both an user and a password!<br />Go back and try again.</p>';
	
	}
}else { // Display the form.

	print '<form action="login.php" method="post">
	<p>Username: <input type="text" name="user" size="20" /></p>
	<p>Password: <input type="password" name="password" size="20" /></p>
	<p><input type="submit" name="submit" value="Log In!" /></p>
	</form>';

}


?>
</div>




