<!DOCTYPE html>
<html>
<head>
   <title>CD's</title>
   <meta charset="utf-8">
   <link rel="stylesheet" href="stylesheet.css" type="text/css">
</head>
<body>
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
      <li><a href="customerlogin.php">Log out</a></li>
	  <li><a href="index.php">Homepage</a></li>
      
      </ul>
	  <h1 id="loggedin">You are now logged on as: <%= session.getAttribute( "username" ) %></h1>
	
	 <form action="search.php" method="POST">
		search:<br>
		<input type="text" name="search">
		<input type="submit" value="search">
	</form> 
	  
        <h1>The Item you wish to purchase is currently out of stock</h1>
		
		
      
    </div>
	<div class="footer">
    </div>
   </div>	

</body>
</html>
