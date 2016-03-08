<?php
	include '../inc/connection.php';
	
	$task = $_PUT['task'];
	$presendingId = $_PUT['presendingId'];
	$wbtx = $_PUT['wbtx'];
	$wbty = $_PUT['wbty'];
	$height = $_PUT['height'];
	$width = $_PUT['width'];
	
	$query = "INSERT INTO task (task, presendingId, wbtx, wbty, wbtwidth, wbtheight) VALUES ('${task}',${presendingId}, ,'${wbtx}','${wbty}', '${width}', '${height}');";
    $db->query($query);
?>