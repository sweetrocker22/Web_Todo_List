<!DOCTYPE html>
<html>
<head>
<?php
	var_dump($_GET);
	var_dump($_POST);
?>	
	<title>TODO List</title>
</head>
<body>
	<h1>TODO List</h1>
		<ul>
			<li>Take out dogs</li>
			<li>Do dishes</li>
			<li>Get groceries</li>
		</ul>
	<h2>Add an item:</h2>	
<form method="POST">
	<label for="add"></label>
	<input id="add" name="add" type="text" placeholder="Enter new item">
	<button type="submit">Submit</button>
</form>		
</body>
</html>