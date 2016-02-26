<?php
	include '../inc/all.php';
	
	$task = $_PUT['task'];
	$presendingId = $_PUT['presendingId'];
	$ganttx = $_PUT['ganttx'];
	$gantty = $_PUT['gantty'];
	$height = $_PUT['height'];
	$width = $_PUT['width'];
	
	$query = "INSERT INTO task (task, presendingId, ganttx, gantty, width, height) VALUES ('${task}',${presendingId}, ,'${ganttx}','${gantty}', '${width}', '${height}');";
    $db->query($query);
?>