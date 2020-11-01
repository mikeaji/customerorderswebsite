<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
	<link rel="stylesheet" href="stylesheet.css" type="text/css">
    <title>Purchase</title>
  </head>
  <body>
    <?php
session_start();
$item_code = $_GET[ 'item_code' ];
$item_price = $_GET[ 'item_price' ];


echo "<p>Item Code = $item_code</p>\n";
echo "<p>Item Price = $item_price</p>\n";



echo "<p>We can now create an order or process in any way we choose.</p>\n";




if (isset($_POST['promo_button']) && isset($_POST['promotion_code']) && !empty($_POST['promotion_code'])) {

	$promotion_code = $_POST['promotion_code'];
	
	$dbname = 'majibo'; 
	$dbuser = 'majibo';
	$dbpass = 'obscure';
	$dbhost = 'localhost';

	$link = mysqli_connect( $dbhost, $dbuser, $dbpass )
	or die( "Unable to Connect to '$dbhost'" );

	mysqli_select_db( $link, $dbname )
	or die("Could not open the db '$dbname'");
	
	
	$test_query = "select * from promotion_code where code ='" .$promotion_code."'";
	$result = mysqli_query( $link, $test_query );
	$row = mysqli_fetch_array( $result, MYSQLI_ASSOC );
	
	$sold_item = false;
	
	if (mysqli_num_rows($result) > 0) {
		$sold_item = true;
		$final_price = $item_price * (1 - $row['discount']/100);
		$final_price = number_format($final_price, 2);
		echo "Original price: " . $item_price . "<br/>";
		echo "Final price: " . $final_price;
		
		mysqli_free_result($result);
		
		// -1 from stock, +1 to order
		$query = "UPDATE inventory SET item_stock_count = item_stock_count - 1, item_order_count = item_order_count + 1 WHERE item_code = '{$item_code}'";
		mysqli_query($link, $query);
		
		// Add to customer_order
		$query = "INSERT INTO customer_order(order_date, delivered, shipping_date, customer_number) VALUES  ( now(), false, adddate( now(), interval 3 day ), {$_SESSION['username']} )";
		mysqli_query($link, $query);
		
		// Grab last order number_format
		$query = "SELECT MAX(order_number) FROM customer_order";
		$result = mysqli_query($link, $query);
		$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
		
		mysqli_free_result($result);

		// Add to the order_item
		$query = "INSERT INTO order_item VALUES ('{$item_code}', {$final_price}, {$row['MAX(order_number)']}, 1)";
		mysqli_query($link, $query);
		
		echo "<br/>" . mysqli_error($link);
	} else {
		echo '<p>' .$item_price .'</p>';
		//echo "Original price: " . $item_price . "<br/>";
		//echo "Final price: " . $item_price;
		//$sold_item = true;
	}
	
	if (!isset($promotion_code)){
		echo "Nothing ha ";
		echo '<p>' .$item_price .'</p>'; 
	}
	
	if ($sold_item == true){
		echo '<form action ="index.php" method="post"> <button type="submit"> Return to Home Page </button> </form>';
	}
	
	
	
	
	
}





# If not logged in, send back to login page:
if ( !isset( $_SESSION[ 'username' ] ) )
{
      header( 'Location: customerlogin.php' );
    exit();
}

echo '<h2>You are successfully logged in</h2>', "\n";
echo '<p>Your Customer Number is: ', $_SESSION[ 'username' ], '</p>', "\n"; 

if ($_POST['Buy']) {
echo "You clicked the complete purchase button :";
}



?>

  <div id="content">
  
	<form method="post">
	
        <input type="text" name="promotion_code"/>
        <br />
        <button type="submit" name="promo_button">promotional code</button>
        <br />

    </form>
	
	
  </body>
</html>
