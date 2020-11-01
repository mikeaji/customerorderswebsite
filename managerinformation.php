<!DOCTYPE html>
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
	  
	  <form action="search.php" method="POST">
		search:<br>
		<input type="text" name="search">
		<input type="submit" value="search">
	</form> 
	
		<h1 id="managerid">You are now logged on as: <%= session.getAttribute( "username" ) %></h1>
        <h1>Manager Information</h1>
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
		select * from manager;
		</sql:query>
		
		
		<table border="1" width="100%">
      <tr>
         <th>Manager_number</th>
		 <th>Surname</th>
		 <th>Initials</th>
         <th>Firstname</th>
		 <th>Password</th>
		 <th>Passphrase</th>
		
         
      </tr>

      <c:forEach var = "row" items = "${result.rows}">
        <tr>
          <td><c:out value = "${row.manager_number}"/></td>
		  <td><c:out value = "${row.surname}"/></td>
		  <td><c:out value = "${row.initials}"/></td>
		  <td><c:out value = "${row.firstname}"/></td>
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
