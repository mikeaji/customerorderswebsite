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
        <h1>Customer Information</h1>
		
		<form action="search.php" method="POST">
		search:<br>
		<input type="text" name="search">
		<input type="submit" value="search">
	</form> 
		
    
    <sql:query var="result" sql="SHOW TABLES" />
    <form method="post" action="view.jsp">
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
   
		
		
		 
		
		<table border="1" width="100%">
      <tr>
        <th>customer number</th>
		
         
      </tr>

      <c:forEach var = "row" items = "${result.rows}">
        <tr>
          <td><c:out value = "${row.customer_number}"/></td>
		  <td><c:out value = "${row.surname}"/></td>
		  <td><c:out value = "${row.initials}"/></td>
		  <td><c:out value = "${row.firstname}"/></td>
          <td><c:out value = "${row.title}"/></td>
		  <td><c:out value = "${row.address1}"/></td>
		  <td><c:out value = "${row.address2}"/></td>
		  <td><c:out value = "${row.city}"/></td>
		  <td><c:out value = "${row.county}"/></td>
		  <td><c:out value = "${row.postcode}"/></td>
		  <td><c:out value = "${row.passwd}"/></td>
		  <td><c:out value = "${row.passphrase}"/></td>
		  
		  
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