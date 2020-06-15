
<?php
// file name: home.php
// bmcc email: ling.fang@stu.bmcc.cuny.edu
// file creation date: feb 16, 2019
// This is home page after user login in 
// user can fill the information on this page
session_start();
include('templates/header2.html');
print '<p>Hello, ' . $_SESSION
 ['user'] . '!</p>';
 print '<p>You have been logged
 in since: ' . date('g:i a',
 $_SESSION['loggedin']) . '</p>';
?>



<h2>Welcome to income tax calculation!</h2>
<p><h3>Single? Married?</h3><p>
<p>Enter your information to get start.</p>



<form action="handle_calculation.php" method="post">

<p><label>Status:
<select name="status">
	<option value="single">single</option>
	<option value="married">married</option>
</select></label></p>

<p><label>Income($): <input tpye="text" name="income" size="20" maxlength="30"></label></p>

<p><input type="submit" value="submit" name="submit"></p>

</form>

<div id="footer">
<?php 
print '<p><a href="logout.php">
➝ Click here to logout.</a></p>';
?>

<a href="activity.php">my activity</a>
</div>

</div>
</body>
</html>
