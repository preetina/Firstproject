<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
$cat_sql="SELECT * FROM category";
		$cat_query= mysqli_query($dbconnect, $cat_sql);
		$cat_rs=mysqli_fetch_assoc($cat_query);
		
		do{ ?>
        <a href="index.php?page=category&categoryID=<?php echo $cat_rs['categoryID'];?>"><?php
			echo $cat_rs['name'];?> 
            |
            </a>
            
            <?php
		}while($cat_rs=mysqli_fetch_assoc($cat_query))
		?>
</body>
</html>