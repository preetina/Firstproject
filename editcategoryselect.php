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
unset($_SESSION['editcategory']);
$editcat_sql="SELECT * FROM category";
$editcat_query=mysqli_query($dbconnect,$editcat_sql);
$editcat_rs=mysqli_fetch_assoc($editcat_query);

?>
<h1>Edit category</h1>
<?php do {?>
<p><a href="index.php?page=editcategory&categoryID=<?php echo $editcat_rs['categoryID'];?>"><?php echo $editcat_rs['name'];?></a></p>
<?php
}while($editcat_rs=mysqli_fetch_assoc($editcat_query))
?>

</body>
</html>