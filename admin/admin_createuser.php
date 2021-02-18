<?php
  ini_set('display_errors', 1);
  error_reporting(E_ALL);

	require_once('phpscripts/config.php');
	//confirm_logged_in();
  if(isset($_POST['submit'])) {
    $fname = trim($_POST['fname']);
    $username = trim($_POST['username']);
    $password = md5(rand(0,5000));
    $email = trim($_POST['email']);
    $user1v1 = $_POST['user1v1'];
    $to = $email;
    $subject = 'congratulations on your success Signup';
    $message = 'Your username: '.$username.'
               Your password: '.$password.'
               Your email: '.$email.'
               congratulations on your success login!:http://localhost/Bian_E_3014_r2/admin/admin_login.php';

    //mail($to,$subject,$message);

    if(empty($user1v1)) {
      $message = "Please select a user level.";
    }else{
      $result = createUser($fname, $username, $password, $email, $user1v1);
      $message = $result;
    }
  }
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Create your account number</title>
<link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>
	<h1>Create your account number</h1>
  <?php if(!empty($message)){echo $message;}?>
  <form action="admin_createuser.php" method="post" class="form2">
    <label>First name:</label>
    <input type="text" name="fname" value="<?php if(!empty($fname)){echo $fname;}?>"><br><br>
    <label>Username:</label>
    <input type="text" name="username" value="<?php if(!empty($username)){echo $username;}?>"><br><br>
    <label>Password:</label>
    <input type="text" name="password" value="<?php if(!empty($password)){echo $password;}?>"><br><br>
    <label>Email:&nbsp;&nbsp;&nbsp;&nbsp;</label>
    <input type="text" name="email" value="<?php if(!empty($email)){echo $email;}?>"><br><br>
    <label>User Level:</label>
    <select name="user1v1">
      <option value="">Please select a user level</option>
      <option value="2">Web Admin</option>
      <option value="1">Web Master</option>
    </select><br><br>
    <input type="submit" name="submit" value="Create!">
  </form>
</body>
</html>
