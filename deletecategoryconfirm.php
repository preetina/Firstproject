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
?>
<h1>Confirm category to delete</h1>
<?php $delcat_sql="SELECT * FROM category WHERE categoryID=".$_GET['categoryID'];
$delcat_query=mysqli_query($dbconnect,$delcat_sql);
$delcat_rs=mysqli_fetch_assoc($delcat_query);
//check if there are any stock items in the category
$check_sql="SELECT * FROM stock WHERE categoryID=".$_GET['categoryID'];
$check_query=mysqli_query($dbconnect,$check_sql);
$count=mysqli_num_rows($check_query);
?>
<p><?php if($count>0){
	echo"Warning!There are ".$count."stockitem(s) in this category.If you delete the category,they will also be removed from the database";
}?></p>
<p><?php echo "Do you really wish to delete".$delcat_rs['name']."?";?></p>
<p><a href="index.php?page=deletecategory&categoryID=<?php echo $_GET['categoryID'];?>"> Yes delete it!</a>|<a href="index.php?page=deletecategoryselect">No,go back </a>|<a href="index.php?page=admin">Back to admin panel</a></p>


</body>
</html>