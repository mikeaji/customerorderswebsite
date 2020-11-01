<!DOCTYPE html>
<html>
<head>
   <title>Manager Page</title>
   <meta charset="utf-8">
   <link rel="stylesheet" href="stylesheet.css" type="text/css">
</head>
<body>
<?php
session_start();
?>
<div class="container">
      <div class="header">
        <h1 class="header">
        </h1>
      </div>

      <div class="left">                               
        <ul>
      
      <li><a href="books.php">Books</a></li>
      <li><a href="cds.php">CD's</a></li>
      <li><a href="games.php">Games</a></li>
	  <li><a href="dvds.php">DVD's</a></li>
		</ul>
      </div>
	  
     <div class="content">                           
	  <ul>
      <li><a href="customerlogin.php">Customer Log In</a></li>
	  <li><a href="customerlogin.php">User page</a></li>
	  <li><a href="manager_tables.php">Manager Page</a></li>
      <li><a href="managerlogin.php">Manager Log In</a></li>
	  <form id="logoff" action="logoff.php" method="GET"><input type="submit" id="logoffBtn" value="logoff"/></form>
	   <li><a href="index.php">Homepage</a></li>
	   <form id="searchbutton" action="search.php" method="GET"><input type="text" name="searchstring" placeholder="" value="tell me what you are looking for"><input type="submit" id="searchBtn" value="Search"/></form>
		</br>
	  
        <h1 style="color:black;">WELCOME TO MY SHOP!</h1>
		</br>
		</br>
    </div>
   </div>	
</body>
</html>
