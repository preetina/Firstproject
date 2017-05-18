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
if(isset($_GET['categoryID'])){
	$_SESSION['editcategory']['categoryID']=$_GET['categoryID'];
}
$_SESSION['editcategory']['categoryID']=$_GET['categoryID'];
if(!isset($_SESSION['editcategory']['name'])){
$editcat_sql="SELECT * FROM category WHERE categoryID=".$_GET['categoryID'];
$editcat_query=mysqli_query($dbconnect,$editcat_sql);
$editcat_rs=mysqli_fetch_assoc($editcat_query);
$_SESSION['editcategory']['name']=$editcat_rs['name'];
}

?>
<h1>Edit category</h1>
<form action="index.php?page=editcategoryconfirm" method="post">
<input name="name"vale="<?php echo $_SESSION['editcategory']['name'];?>"/>
<input type="submit"name="update" value="update"/>
</form>



</body>
</html>