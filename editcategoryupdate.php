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
	header("Location:index.php");
}

$editcat_sql="Update category SET name='".$_SESSION['editcategory']['name']."'WHERE categoryID=".$_SESSION['editcategory']['categoryID'];

$editcat_query=mysqli_query($dbconnect,$editcat_sql);
unset($_SESSION['editcategory']);

?>
<h1>Edit category</h1>
<p>Category successfully updated</p>
<p><a href="index.php?page=admin">Back to admin panel</a></p>
</body>
</html>