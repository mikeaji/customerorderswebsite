<?php 
session_start();
if(!isset($_SESSION['username'])){
   header('Location: index.php');
   exit();
} else if(!isset($_GET['star'])){
    header('Location: index.php');
   exit();
}  else if(!isset($_GET['itemCode'])){
   header('Location:index.php');
   exit();
}
?>



<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
   <link rel="stylesheet" href="stylesheet.css" type="text/css">
   <title> Regards </title>
   </head>
<body>
     <?php
	         require('.php');
			 require('.php');
			 
			 $dbname = 'majibo'; 
			 $dbuser = 'majibo';
			 $dbpass = 'obscure';
			 $dbhost = 'localhost';
			 
			 $link = mysqli_connect( $dbhost, $dbuser, $dbpass )
			 or die( "Unable to Connect to '$dbhost'" );
			 
			   mysqli_select_db( $link, $dbname )
			   or die("Could not open the db '$dbname'");
			   
			   $test_query = "select * from inventory";
			   $result = mysqli_query( $link, $test_query );
			   
			   
			   $username = $_SESSION['username'];
			   $itemCode = $_GET['itemCode'];
			   $star = $_GET['star'];
			   $query = "INSERT INTO review (customer_number,item_code, rating) VALUES ($username, '$itemcode', $star)";
			   mysqli_query($link, $query);
	?>

	
    <div id='main'>
	<h2> Please exit review have a nice day </h2>
	<button class='buy' style='width: auto' onclick="window.location.href='index.php'"> Exit back to home page thanks </button>
	</div>
</body>
</html>