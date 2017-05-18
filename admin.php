<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php

session_start();
//check to see if user is logging out
if(isset($_GET['action'])){
	if($_GET['action']=="logout"){
		unset($_SESSION['admin']);
	}
}
//if login form has been submitted, check if username and passsword match
if(isset($_POST['login'])){
	$login_sql="SELECT * FROM user WHERE username='".$_POST['username']." ' AND password='".sha1($_POST['password'])."'";
	if($login_query=mysqli_query($dbconnect,$login_sql)){
		$login_rs=mysqli_fetch_assoc($login_query);
		$_SESSION['admin']=$login_rs['username'];
	}
}
if(isset($_SESSION['admin'])){
	include("cpanel.php");
}else{
	include("login.php");
}
?>
</body>
</html>