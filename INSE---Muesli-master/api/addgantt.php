<?php
	include '../inc/connection.php';
	
	$task = $_PUT['task'];
	$presendingId = $_PUT['presendingId'];
	$ganttx = $_PUT['pertx'];
	$gantty = $_PUT['perty'];
	$height = $_PUT['height'];
	$width = $_PUT['width'];
	
	$query = "INSERT INTO task (task, presendingId, ganttx, gantty, width, height) VALUES ('${task}',${presendingId}, ,'${ganttx}','${gantty}', '${width}', '${height}');";
    $db->query($query);
?>