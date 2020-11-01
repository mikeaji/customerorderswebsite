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
		<h1>DVD's</h1>
		<?php
		$dbname = 'majibo'; 
		$dbuser = 'majibo';
		$dbpass = 'obscure';
		$dbhost = 'localhost';

		$link = mysqli_connect( $dbhost, $dbuser, $dbpass )
		or die( "Unable to Connect to '$dbhost'" );

		mysqli_select_db( $link, $dbname )
		or die("Could not open the db '$dbname'");

		$test_query = "select * from inventory where item_group=1004";
		$result = mysqli_query( $link, $test_query );

		echo '<table>';

		echo "<tr><th>Code</th><th>Item</th><th>Description</th><th>Author</th><th>Image</th><th>Group</th><th>Price</th><th>Location</th><th>Stock</th><th>Order</th><th>Buy</th><th>Review</th></tr>\n";

		while( $row = mysqli_fetch_array( $result, MYSQLI_ASSOC ) )
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
		'<td>', $row[ 'item_order_count' ], '</td>',"\n",
		'<td><form action ="purchase.php?item_code=' . $row[ 'item_code' ] ,'&item_price=' . $row[ 'item_price' ] . '" method="post"> <button type="submit"> Buy </button> </form></td>',
		'<td><form action ="review.php?item_code=' . $row[ 'item_code' ] ,'&item_price=' . $row[ 'item_price' ] . '" method="post"> <button type="submit"> Review</button> </form></td>';
		  echo "</tr>\n";
		}

		echo '</table>';

		mysqli_free_result( $result );
		mysqli_close( $link );
		?>
	</div>
	<?php
	require('footer.php');
	?>
	</div>
</body>
</html>