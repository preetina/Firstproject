<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
//this file is the base for all the pages in the site when creating a new page,we just open this one and save a copy
include("dbconnect.php");
session_start();
if(!isset($_SESSION['admin'])){
	header("Location:index.php");
}
$delcat_sql="DELETE FROM category WHERE categoryID=".$_GET['categoryID'];
$delcat_query=mysqli_query($dbconnect,$delcat_sql);
$delstock_sql="DELETE FROM stock WHERE categoryID=".$_GET['categoryID'];
$delstock_query=mysqli_query($dbconnect,$delstock_sql);
?>
<h1>Category deleted</h1>
<p>Category has successfully been deleted</p>
<p><a href="index.php?page=admin">Return to admin panel</a></p>
</body>
</html>