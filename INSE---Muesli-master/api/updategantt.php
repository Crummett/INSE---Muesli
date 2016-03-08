<?php
	include '../inc/connection.php';
	
	$task = $_POST['task'];
	$presendingId = $_POST['presendingId'];
	$wbtx = $_POST['wbtx'];
	$wbty = $_POST['wbty'];
	$height = $_POST['height'];
	$width = $_POST['width'];
	
	$query = "INSERT INTO task (task, presendingId, wbtx, wbty, wbtwidth, wbtheight) VALUES ('${task}',${presendingId}, ,'${wbtx}','${wbty}', '${width}', '${height}');";
    $db->query($query);
?>