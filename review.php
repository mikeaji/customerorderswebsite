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
	
	session_start();
	
	$dbname = 'majibo'; # Change to your username
	$dbuser = 'majibo';
	$dbpass = 'obscure';
	$dbhost = 'localhost';

	$link = mysqli_connect( $dbhost, $dbuser, $dbpass )
	or die( "Unable to Connect to '$dbhost'" );

	mysqli_select_db( $link, $dbname )
	or die("Could not open the db '$dbname'");
	?>
	
	<div class="content">
	<form action='review.php' method='get'>
	<button type='submit' name='submit'> submit</button>
	<input type='radio' name='star' value='1' > 1
	<input type='radio' name='star' value='2' > 2
	<input type='radio' name='star' value='3' > 3
	<input type='radio' name='star' value='4' > 4
	<input type='radio' name='star' value='5' > 5
	<input type="hidden" name="item_code" value="<?php echo $_GET['item_code']; ?>" />
	</form>
	
	
	
	<?php

	//$query = "SELECT item_name, item_code, item_stock, item_price FROM inventory WHERE item_code = '{$_GET['item_code']}'";
	
	
	
	if (isset($_GET['submit']) && isset($_GET['star'])) {
		$star = $_GET['star'];
		$item_code = $_GET['item_code'];
		
		
		
		
		echo "<br/> Rating: {$star}";
		echo "<br/> Item code: {$item_code} </br>";
		
		$query = "INSERT INTO review(customer_number, item_code, rating) VALUES ({$_SESSION['username']}, '{$item_code}', {$star})";
		mysqli_query($link, $query);
		
		echo "Successfully submitted rating";
	
		
	}
	?>
	</div>
	<?php
	require('footer.php');
	?>
	</div>
</body>
</html>


	  