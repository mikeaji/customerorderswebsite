<!DOCTYPE html>
<html>
<head>
   <title></title>
   <meta charset="utf-8">
   <link rel="stylesheet" href="stylesheet.css" type="text/css">
</head>
<body>
	<div class="container">
	<?php
	require('header.php');
	require('left.php');
	?>
	<div class="content">
	
	
	<form method="get" action="logoff.php">
	<form method="get" action="reset.php">    
    <button type="submit" name="returnURL" value="assignment/index.php">reset database</button>
	</form>
	<h1 style="color:black;">WELCOME TO MY SHOP!</h1>
	</div>
	<?php
	require('footer.php');
	?>
	</div>
</body>
</html>