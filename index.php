<?php




 if (isset($_POST['submit'])) {
 	
 	
 	if (isset($_POST['computer']['monitor']['price']) OR   isset($_POST['computer']['keyboard']['price']) OR isset($_POST['computer']['mouse']['price'])  ){

 		
   

 		$computer = $_POST['computer'];
        
        $totalPrice = 0;
        echo "You have selected :<br/> ";

        foreach ($computer as $part => $category) {
        	
        	if (isset($category['price'])) {
                  if ($category['quantity'] >1) {
                  	$sp = "s";
                  } else {
                  	$sp = "";
                  }
                  

        		echo $category['quantity'] ." ". $part.$sp , "<br/>";
        		$totalPrice += $category['price'] * $category['quantity'];
        	}
        	
        }

        echo "Total price is $", $totalPrice , " only.<br/>";
        echo '<hr/>';
    
 	} else {
 		echo 'Please select atleaset one computer part';
 	}
 	
 }



 ?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Shopping Cart</title>
</head>
<body>

	<form action="" method="POST">
		
		Monitor(Price $2): 
		<input type="checkbox" name="computer[monitor][price]" value="2">
		Quantity :
        <select  name="computer[monitor][quantity]" >
        	<option value="1">1</option>
        	<option value="2">2</option>
        	<option value="3">3</option>
        	<option value="4">4</option>
        </select>

		<br/>

		keyboard(Price $3): 
		<input type="checkbox" name="computer[keyboard][price]" value="3">
		Quantity :
		 <select  name="computer[keyboard][quantity]" >
        	<option value="1">1</option>
        	<option value="2">2</option>
        	<option value="3">3</option>
        	<option value="4">4</option>
        </select>

		<br/>

		mouse(Price $10): 
		<input type="checkbox" name="computer[mouse][price]" value="10">
		Quantity :
		 <select  name="computer[mouse][quantity]" >
        	<option value="1">1</option>
        	<option value="2">2</option>
        	<option value="3">3</option>
        	<option value="4">4</option>
        </select>

		<br/>

		<input type="submit" value="Submit" name="submit">

	</form>
	
</body>
</html>