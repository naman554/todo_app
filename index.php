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
		
		
	</head>
	<body>
		<div id="container">
			<h1>My To-Do List</h1>
			<ul id="tabs">
				<li id="todo-tab" class="selected"><a href="index.php">To-Do</a></li>
				<li id="todo-tab" class="selected"><a href="newitem.php">New Item</a></li>
				
				<div id="response"></div>


			</ul>
			<div id="main">
				<div id="todo">
					<?php
						$l = mysql_query("SELECT * FROM `todo`");
						//$res=mysql_fetch_array($l);
						$rows=mysql_num_rows($l);
						if($rows > 0){
							while($a=mysql_fetch_assoc($l))
							{
								$title = $a["title"];
								$description = $a["description"];
								$id = $a["id"];
								echo '<div class="item">';
								
									echo '<h4>
  								             
  											'.$title.'</h4>';
									echo'<p>'.$description.'</p>';
									echo'<input type="hidden" nam="id" id="id" value="$id"/>';
									echo'<div class="options">';
										echo'<a href="done.php?id='.$id.'" id="abc">done</a><a class="deleteEntryAnchor" href="delete.php?id='.$id.'">D</a>';
										
									echo'</div>';
							}// end of while
						}
						else
							{
								echo'<p>There are zero items.Add one.</p>';
							}
					?>
					
				</div><!-- end todo-->
				
				
			</div><!-- end main-->

		</div><!-- end container-->
	</body>
</html>