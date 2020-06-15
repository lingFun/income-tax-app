<?php
/*This is the logout page. It destroys the session information.*/

session_start();
unset($_SESSION);
$_SESSION = array();

include('templates/header.html');
?>

<p>You are now logged out.</p>
<p>Thank you for using this site. We
hope that you liked it.</p>