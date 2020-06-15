<?php
// file name: register2.php
// bmcc email: ling.fang@stu.bmcc.cuny.edu
// file creation date: feb 16, 2019
// This is register page with link(after login)
// enter user name and password to register
include('templates/header2.html');
print '<h2>Registration Form</h2>
	<p>Register so that you can start now.';
	

print '<style type="text/css" media="screen">
	.error { color: red; }
</style>';

// Check if the form has been submitted:
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

	$problem = FALSE; // No problems so far.
	
	// Check for each value...
	if (empty($_POST['user'])) {
		$problem = TRUE;
		print '<p class="error">Please enter your user name!</p>';
	}

	if (empty($_POST['password1'])) {
		$problem = TRUE;
		print '<p class="error">Please enter a password!</p>';
	}
	
	if ($_POST['password1'] != $_POST['password2']) {
		$problem = TRUE;
		print '<p class="error">Your password did not match your confirmed password!</p>';
	} 
	
	if (!$problem) { // If there weren't any problems...
	
		// Print a message:
		print '<p>You are now registered!<br />Click here -><a href="login.php">log in</a> <- to login in now!</p>';
		
	
		// Clear the posted values:
		$_POST = array();
	
	} else { // Forgot a field.
	
		print '<p class="error">Please try again!</p>';
		
	}

} // End of handle form IF.

// Create the form:
?>
<form action="register.php" method="post">

	<p>User name: <input type="text" name="user" size="20" value="<?php if (isset($_POST['user'])) { print htmlspecialchars($_POST['user']); } ?>" /></p>

	<p>Password: <input type="password" name="password1" size="20" value="<?php if (isset($_POST['password1'])) { print htmlspecialchars($_POST['password1']); } ?>" /></p>
	<p>Confirm Password: <input type="password" name="password2" size="20" value="<?php if (isset($_POST['password2'])) { print htmlspecialchars($_POST['password2']); } ?>" /></p>

	<p><input type="submit" user="submit" value="Register!" /></p>

</form>
</div>

<div id="footer">
<?php 
print '<p><a href="logout.php">
➝ Click here to logout.</a></p>';
?>

<a href="activity.php">my activity</a>
</div>