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
//set session to blank if user has just entered this page from the admin panel
if (!isset($_SESSION['admincategory']['name'])){
	$_SESSION['addcategory']['name']="";
}
?>
<h1>Add new category</h1>
<form method="post" action="index.php?page=confirmcategory" />
<p><input type="text" name="name" value="<?php echo $_SESSION['addcategory']['name'];?>" size="40" maxlength="50" /></p>
<p><input type="submit"name="submit"value="Add category" /></p>
</form>
</body>
</html>