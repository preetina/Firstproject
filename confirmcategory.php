<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
session_start();
//check to see if user is logged in.If not,redirect to admin page.
if(!isset($_SESSION['admin'])){
	header("Location:index.php?page=adminpanel");
}
//check to see if user is logged in.If not,redirect to admin page.
if(!isset($_SESSION['admin'])){
	header("Location:index.php?page=adminpanel");
}
	//set addcategory session
	$_SESSION['addcategory']['name']=$_POST['name'];
	$_POST['name'];
	
?>
<h1>Confirm category name</h1>
<p>You entered:<?php echo $_POST['name'];
?></p>
<p><a href="index.php?page=entercategory">Correct,continue</a>|<a href ="index.php?page=addcategory">Oops,go back</a></p>
</body>
</html>