<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<h1>Login</h1>
<form name="login" method="post" action="index.php?page=admin">
<p>Username <input name="username" type="text" maxlength=30/></p>
<p>Password <input name="password" type="password" maxlength=30 /></p>
<?php
include("index.php");
if(isset($_POST['login']) && !isset($_SESSION['admin'])){
	?>
    <p><span class="error">Incorrect username or password</span></p>
    <?php
    }
	?>
    
<p><input type="submit" name="login" value="Submit"/></p>
</form>
</body>
</html>