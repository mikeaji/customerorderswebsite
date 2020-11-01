/* <!DOCTYPE html>
<html>
<head>
   <title>managerlogin</title>
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
      <li><a href="inventoryinformation.php">Item Inventory</a></li>
      <li><a href="customerinformation.php">Customer Information</a></li>
	  <li><a href="customerorders.php">Customer Orders</a></li>
	  <li><a href="orderitems.php">Order Items</a></li>
	  <li><a href="managerinformation.php">Manager Information</a></li>
	  
      
		</ul>
      </div>

      <div class="content">                          
	  <ul>
	  <li><a href="logoff.php">Log off</a></li>
      
      
      </ul>
	  
	  <h1 id="managerid">You are now logged on as: <%= session.getAttribute( "username" ) %></h1>
	  <h1>Item Inventory</h1>
	  <sql:query var="result" sql="SHOW TABLES" />
    <form method="post" action="view.php">
      <fieldset>
        <legend>View the Table's Contents below:</legend>
        <select name="table">
          <optgroup label="Tables">
            <c:forEach var="row" items="${result.rowsByIndex}">
              <option><c:out value="${row[0]}"/></option>
            </c:forEach>
          </optgroup>
        </select>
        <input type="submit" value="view" />
      </fieldset>
    </form>
	  
        <sql:query var="result">
		select * from inventory;
		</sql:query>

    <table border="1" width="100%">
      <tr>
        <th>Code</th>
		
         <th>Title</th>
		 <th>Description</th>
		 <th>Author</th>
         <th>Price</th>
		 <th>Items left</th>
		 <th>Order count</th>
		 <th>Item group</th>
		 <th>Stock location</th>
		 
         
      </tr>

      <c:forEach var = "row" items = "${result.rows}">
        <tr>
          <td><c:out value = "${row.item_code}"/></td>
		  <td><c:out value = "${row.item_name}"/></td>
		  <td><c:out value = "${row.item_description}"/></td>
		  <td><c:out value = "${row.item_author}"/></td>
          <td><c:out value = "${row.item_price}"/></td>
		  <td><c:out value = "${row.item_stock_count}"/></td>
		  <td><c:out value = "${row.item_order_count}"/></td>
		  <td><c:out value = "${row.item_group}"/></td>
		  <td><c:out value = "${row.item_stock_location}"/></td>
		  
		  

          

        </tr>
      </c:forEach>
    </table>
		
		
	  
    </div>
	<div class="footer">
    </div>
   </div>	
</body>
</html>
 */