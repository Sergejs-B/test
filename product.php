<!DOCTYPE html>
<html>
  <head>

  	<? require_once 'PHP/Classes/database.php';?>
 	<title>Product Add</title>
 	 <script src="JS/validation.js"></script>

	
		<link rel="stylesheet" type="text/css" href="style.css">
	
  </head>
  <body>
    
  <h1>Product Add</h1>

	  <hr>
	  	<div id="dynamicbox">
		  	<form method="POST" action="PHP/add_product_to_db.php" id="dynform">

			      <label for="sku">SKU</label>
			          <input type="text" name="SKU" required>
			          
			     <label for="name">Name</label>
			          <input type="text" name="name" required >
			          
			      <label for="price">Price</label>
			          <input type="text" name="price" required onkeypress="javascript:return isNumber(event)">
			          
			     <label for="swithcer">Type Switcher</label>
			         <select id="switcher" name="swithcer">
			             <option value="disc" >DVD disc</option>
			             <option value="book" name="book">Book</option>
			             <option value="furniture">Furniture</option>
			        </select> 
			 
		    </form>
		</div>
	    <script src="JS/attribute1.js"></script>
	    
    </body>

</html>
