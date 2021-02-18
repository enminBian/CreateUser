<?php
	require_once('phpscripts/config.php');
	confirm_logged_in();
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Congratulations Login</title>
<link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>
	<h1>congratulations on your success login</h1>
	<?php echo $_SESSION['user_name'];  ?>
	<a href="admin_createuser.php">Create user</a>
	<a href="phpscripts/caller.php?caller_id=logout">Sign Out</a>
</body>
</html>
