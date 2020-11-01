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
	  <li><a href="index.php">Homepage</a></li>
	  <li><a href="logoff.php">Log off</a></li>
		</ul>
      </div>

      <div class="content">
<h1 style="color:black;">Manager Log In</h1>
		<?php
  $dbname = 'majibo'; # Change to your username
  $dbuser = 'majibo';
  $dbpass = 'obscure';
  $dbhost = 'localhost';

  $link = mysqli_connect( $dbhost, $dbuser, $dbpass )
or die( "Unable to Connect to '$dbhost'" );

mysqli_select_db( $link, $dbname )
or die("Could not open the db '$dbname'");
$test_query = "select * from inventory_group";
$result = mysqli_query( $link, $test_query );

$test_query = "select * from inventory";
$result2 = mysqli_query( $link, $test_query );
$test_query = "select * from customer";
$result3 = mysqli_query( $link, $test_query );
$test_query = "select * from customer_order";
$result4 = mysqli_query( $link, $test_query );
$test_query = "select * from order_item";
$result5 = mysqli_query( $link, $test_query );
$test_query = "select * from manager";
$result6 = mysqli_query( $link, $test_query );
$test_query = "select * from review";
$result7 = mysqli_query( $link, $test_query );
$test_query = "select * from promotion_code";
$result8 = mysqli_query( $link, $test_query );
       
echo '<table>';
echo "<tr><th>Group Code</th><th>Group Name</th></tr>\n";


while( $row = mysqli_fetch_array( $result, MYSQLI_ASSOC ) )
{
  echo "<tr>\n";
  echo '<td>', $row[ 'group_code' ], '</td>',
  '<td>', $row[ 'group_name' ], '</td>',"\n";
  echo "</tr>\n";
}

echo '</table>';

mysqli_free_result( $result );
mysqli_close( $link );
echo '<table>';

echo "<tr><th>Code</th><th>Item</th><th>Description</th><th>Author</th><th>Image</th><th>Group</th><th>Price</th><th>Location</th><th>Stock</th><th>Order</th></tr>\n";

while( $row = mysqli_fetch_array( $result2, MYSQLI_ASSOC ) )
{
  echo "<tr>\n";
  echo '<td>', $row[ 'item_code' ], '</td>',
  '<td>', $row[ 'item_name' ], '</td>',
'<td>', $row[ 'item_description' ], '</td>',
  '<td>', $row[ 'item_author' ], '</td>';
echo '<td>', '<img src="' . $row['item_image_loc'] . '" height= "70" alt="aa01-007">', '</td>';
echo
'<td>', $row[ 'item_group' ], '</td>',
'<td>', $row[ 'item_price' ], '</td>', 
'<td>', $row[ 'item_stock_location' ], '</td>', 
'<td>', $row[ 'item_stock_count' ], '</td>',  
'<td>', $row[ 'item_order_count' ], '</td>',"\n";
  echo "</tr>\n";
}

echo '</table>';

mysqli_free_result( $result2 );
mysqli_close( $link );
echo '<table>';

echo "<tr><th>Customer Number</th><th>Surname</th><th>Initials</th><th>Firstname</th><th>Title</th><th>Address1</th><th>Address2</th><th>City</th><th>Country</th><th>Postocde</th><th>Password</th><th>Passphrase</th></tr>\n";

while( $row = mysqli_fetch_array( $result3, MYSQLI_ASSOC ) )
{
  echo "<tr>\n";
  echo '<td>', $row[ 'customer_number' ], '</td>',
  '<td>', $row[ 'surname' ], '</td>',
'<td>', $row[ 'initials' ], '</td>',
'<td>', $row[ 'firstname' ], '</td>',
'<td>', $row[ 'title' ], '</td>',
'<td>', $row[ 'address1' ], '</td>',
'<td>', $row[ 'address2' ], '</td>',
'<td>', $row[ 'city' ], '</td>',
'<td>', $row[ 'county' ], '</td>',
'<td>', $row[ 'postcode' ], '</td>',
'<td>', $row[ 'passwd' ], '</td>',
'<td>', $row[ 'passphrase' ], '</td>',"\n";
  echo "</tr>\n";
}
         echo '</table>';
mysqli_free_result( $result3);
mysqli_close( $link );
//echo '<table>';

echo '<table>';

echo "<tr><th>Order Number</th><th>Order Date</th><th>Delivered</th><th>Shipping Date</th><th>Customer Number</th></tr>\n";

while( $row = mysqli_fetch_array( $result4, MYSQLI_ASSOC ) )
{
  echo "<tr>\n";
  echo '<td>', $row[ 'order_number' ], '</td>',
  '<td>', $row[ 'order_date' ], '</td>',
'<td>', $row[ 'delivered' ], '</td>',
'<td>', $row[ 'shipping_date' ], '</td>',
'<td>', $row[ 'customer_number' ], '</td>',"\n";
  echo "</tr>\n";
}
     echo '</table>';
mysqli_free_result( $result4);
mysqli_close( $link );
//echo '<table>';
echo '<table>';

echo "<tr><th>Item Code</th><th>Value</th><th>Order Number</th><th>Quantity</th></tr>\n";

while( $row = mysqli_fetch_array( $result5, MYSQLI_ASSOC ) )
{
  echo "<tr>\n";
  echo '<td>', $row[ 'item_code' ], '</td>',
  '<td>', $row[ 'value' ], '</td>',
'<td>', $row[ 'order_number' ], '</td>',
'<td>', $row[ 'quantity' ], '</td>',"\n";
  echo "</tr>\n";
}

mysqli_free_result( $result5);
    mysqli_close( $link );
echo '</table>';
echo '<table>';

echo "<tr><th>Manager Number</th><th>Surname</th><th>Initials</th><th>Firstname</th><th>Password</th><th>Passphrase</th></tr>\n";

while( $row = mysqli_fetch_array( $result6, MYSQLI_ASSOC ) )
{
  echo "<tr>\n";
  echo '<td>', $row[ 'manager_number' ], '</td>',
  '<td>', $row[ 'surname' ], '</td>',
'<td>', $row[ 'initials' ], '</td>',
'<td>', $row[ 'firstname' ], '</td>',
'<td>', $row[ 'passwd' ], '</td>',
'<td>', $row[ 'passphrase' ], '</td>',"\n";
  echo "</tr>\n";
}

mysqli_free_result( $result6);
    mysqli_close( $link );
echo '</table>';
echo '<table>';

echo "<tr><th>Review Number</th><th>Customer Number</th><th>Item Code</th><th>Rating</th></tr>\n";

while( $row = mysqli_fetch_array( $result7, MYSQLI_ASSOC ) )
{
  echo "<tr>\n";
  echo '<td>', $row[ 'review_number' ], '</td>',
  '<td>', $row[ 'customer_number' ], '</td>',
    '<td>', $row[ 'item_code' ], '</td>',
'<td>', $row[ 'rating' ], '</td>',"\n";
  echo "</tr>\n";
}

echo '</table>';

mysqli_free_result( $result7 );
mysqli_close( $link );
echo '<table>';

echo "<tr><th>Code</th><th>Discount</th></tr>\n";

while( $row = mysqli_fetch_array( $result8, MYSQLI_ASSOC ) )
{
  echo "<tr>\n";
  echo '<td>', $row[ 'code' ], '</td>',  
'<td>', $row[ 'discount' ], '</td>',"\n";
  echo "</tr>\n";
}

echo '</table>';

mysqli_free_result( $result8);
mysqli_close( $link );

?>	  
	  
    </div>
	<div class="footer">
    </div>
   </div>	
</body>
</html>
