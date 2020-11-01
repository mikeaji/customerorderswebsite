<!DOCTYPE html>
<html>
<head>
   <title>ManagerLogin</title>
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
<h1 style="color:black;">Manager please log in</h1>
		<?php
echo '<form action = "managerlogin.php" method = "GET">', "\n",
'<p><label for = "a">Username:</label>',
'<input id = "a" type = "text" name = "username" /></p>', "\n",
'<p><label for = "b">Password:</label>',
'<input id = "b" type = "text" name = "password" /></p>', "\n",
'<input type = "submit" value = "login" />', "\n",
'<p></form><p></p>', "\n";

session_start();
$_SESSION = array();
session_destroy();

if ( isset( $_GET[ 'username' ] ) && isset( $_GET[ 'password' ] ) )
{
  $username = $_GET[ 'username' ];
  $password = $_GET[ 'password' ];

  $dbname = 'majibo'; # Change to your username
  $dbuser = 'majibo';
  $dbpass = 'obscure';
  $dbhost = 'localhost';

  $link = mysqli_connect( $dbhost, $dbuser, $dbpass )
  or die( "Unable to Connect to '$dbhost'" );

  mysqli_select_db( $link, $dbname )
  or die("Could not open the db '$dbname'");

  $password_query = "select * from manager where manager_number = '" .
  $username . "' and passwd = MD5( '" . $password . "' )";
  $result = mysqli_query( $link, $password_query );

  if ( mysqli_num_rows( $result ) == 1 ) # Number of result rows
  {
    session_start();
    $_SESSION[ 'manager' ] = $username;
    header( 'Location: managertables.php' );
    exit();
  }

  else
  {
    echo '<p>Login failed. Please try again.</p>', "\n";
    '</p>';
  }
}
?>	  
	  
</body>
</html>
