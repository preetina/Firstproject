<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
	//redirect back to index page if no stockID has been set
	if(!isset($_GET['stockID'])){
		header("Location:index.php");
	}
	$item_sql="SELECT *FROM stock WHERE stockID=".$_GET['stockID'];
	if ($item_query=mysqli_query($dbconnect,$item_sql)){
		$item_rs=mysqli_fetch_assoc($item_query);
		?>
        <h1><?php echo $item_rs['name'];?></h1>
        <p><?php echo $item_rs['price'];?></p>
        <p><?php echo $item_rs['description'];?></p>
        <?php
	}
?>
</body>
</html>