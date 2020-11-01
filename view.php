<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
	<link rel="stylesheet" href="stylesheet.css" type="text/css">
    <title>Logged in</title>
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
	  <li><a href="logoff.php">Log out</a></li>
      
      
      </ul>
	  
	  
	  <h1 id="managerid">You are now logged on as: <%= session.getAttribute( "username" ) %></h1>
	  <sql:query var="result" sql="SHOW TABLES" />
	  <form method="post" action="view.php">
      <fieldset>
	  
	  <form action="search.php" method="POST">
		search:<br>
		<input type="text" name="search">
		<input type="submit" value="search">
	</form> 
	
        <legend>View Table's Contents Below:</legend>
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

    <sql:query var="result" sql="SELECT * FROM ${param.table}" />
    <table>
      <caption>Table: <c:out value="${param.table}"/></caption>
      <tr>
        <c:forEach var="head" items="${result.columnNames}">
          <th><c:out value="${head}"/></th>
        </c:forEach>
      </tr>
      <c:forEach var="row" items="${result.rows}">
        <tr>
          <c:forEach var="head" items="${result.columnNames}">
            <td>
              <c:out value="${row[head]}"/>
            </td>
          </c:forEach>
        </tr>
      </c:forEach>
    </table>
  </body>
</html>
