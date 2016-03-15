<?php
	include("include/conn.php");
?>

<html>
	<head>
		<title>
			Untitled Document
		</title>
		<script src="bs/js/jquery.min.js"></script>
		<link rel="stylesheet" href="css/default.css">
		<script>

		
		</script>
	</head>
	<body>
		<div id="container">
			<h1>My To-Do List</h1>
			<ul id="tabs">
				<li id="todo-tab" class="selected"><a href="index.php">To-Do</a></li>
				<li id="todo-tab" class="selected"><a href="#">New Item</a></li>
				<div id="response"></div>


			</ul>
			<div id="main">

			<div id="addNewEntry">
					<hr /> 
												<h2>Add New Entry</h2> 
												<form action="addnewentry.php" method="post"> 
												    <p> 
												        <label for="title"> Title</label> 
												        <input type="text" name="title" id="title" class="input"/> 
												    </p> 
												  
												    <p> 
												        <label for="description"> Description</label> 
												        <textarea name="description" id="description" rows="10" cols="35"></textarea> 
												    </p>   
												      
												    <p> 
												        <input type="submit" name="addEntry" id="addEntry" value="Add New Entry" /> 
												    </p> 
												</form> 
  
				</div>
			</div>
		</div>
	</body>