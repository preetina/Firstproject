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

$_SESSION['editcategory']['name']=$_POST['name'];
?>

<h1>Edit category</h1>
<p> Updated category name: <?php echo $_SESSION['editcategory']['name'];?></p>
<p> <a href="index.php?page=editcategoryupdate">Confirm</a>|<a href="index.php?page=editcategory">Oops,go back</a>|<a href="index.php?page=admin">Back to adminn panel</a></p>

</body>
</html>