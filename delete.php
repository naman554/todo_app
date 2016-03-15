

<?php
	include("include/conn.php");



	$i=$_GET["id"];
	//echo $i;
	mysql_query("DELETE  FROM todo WHERE id = '$i'");
	//die();

?>
