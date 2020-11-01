<!DOCTYPE html>
<html>
<head>
   <title>Games</title>
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
	  
      <form action="search.php" method="POST">
		search:<br>
		<input type="text" name="search">
		<input type="submit" value="search">
	</form> 
	
        <h1>Games</h1>
		
		<div id="games1">
		
		 <table border="1" width="100%">
      <tr>
        <th>Code</th>
		<th></th>
         <th>Title</th>
		 <th>Description</th>
         <th>Price</th>
		 <th>items left</th>
		 <th></th>
         
      </tr>

      <c:forEach var = "row" items = "${result.rows}">
        <tr>
          <td><c:out value = "${row.item_code}"/></td>
		   <td><img src='<c:out value= "${row.item_image_loc}"/>'></td>
          <td><c:out value = "${row.item_name}"/></td>
		  <td><c:out value = "${row.item_description}"/></td>
          <td><c:out value = "${row.item_price}"/></td>
		  <td><c:out value = "${row.item_stock_count}"/></td>
		  <td>
		  <form action= "purchase.jsp" method="GET">
	<input type = "hidden" name="item_code" value = "${row.item_code}"/>
	<input type = "hidden" name="item_stock_count" value = "${row.item_stock_count}"/>
	<input type = "hidden" name = "item_price" value ="${row.item_price}"/>
	<input type = "hidden" name= "page" value ="gamesL">
	<input type = "submit" value= "Buy" style ="width:100px;"style="height:100px;"style="font-size:40px"style="background-color:#339966;"/>
	</form>
			</td>

        </tr>
      </c:forEach>
    </table>

    
      </div>
	  <div class="footer">
    </div>
   </div>	

    </div>
</body>
</html>
