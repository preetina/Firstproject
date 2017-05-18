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
<h1>Delete category</h1>
<?php $delcat_sql="SELECT * FROM category";
$delcat_query=mysqli_query($dbconnect,$delcat_sql);
$delcat_rs=mysqli_fetch_assoc($delcat_query);
do{?>
<p><a href="index.php?page=deletecategoryconfirm&categoryID=<?php echo $delcat_rs['categoryID'];?>"><?php echo $delcat_rs['name'];?></a></p>
<?php
}
while($delcat_rs=mysqli_fetch_assoc($delcat_query));
?>

</body>
</html>