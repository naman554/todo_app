<?php
	include("include/conn.php");



	$i=$_GET["id"];
	
	$l = mysql_query("SELECT * FROM `todo` where id='$i'");
	$b=mysql_fetch_assoc($l);
	mysql_query("INSERT INTO `done`(id,`title`, `description`) VALUES ($b[id],'$b[title]','$b[description]');");
	

	mysql_query("DELETE  FROM todo WHERE id = '$i'");
	header("Location:index.php");

						
						
?>