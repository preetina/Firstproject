<?php
//This file is the base for all pages in the site. When creating a new page, we just open this one, then save a copy as the new page.
include("dbconnect.php");
?>
<html>
<head>
<title>Welcome to Classic Clothing</title>

<link href="file:///C|/Users/Preetina/AppData/Local/Temp/Temp1_project.zip/ChicTutorial2-3/styles.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div class="container">
	<?php
	include("header.php");
	?>
    <div class="maincontent">
 <!-- main content goes here-->
      <p>Main content goes here</p>
  </div>
   <?php
   include("seccontent.php");
   ?>
	<div class="footer"></div>
</div><!-- Container ends here-->
</body>
</html>
