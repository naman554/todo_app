<?php
	include("include/conn.php");
?>
<?php


	if(isset($_POST['addEntry'])) {

		$add=mysql_query("INSERT INTO `todo`(`title`, `description`) VALUES ('$_POST[title]','$_POST[description]');");
		header("Location:index.php");
	}



	
?>