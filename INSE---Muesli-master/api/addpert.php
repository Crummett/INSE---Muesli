<?php
	include '../inc/connection.php';
	
	$task = $_PUT['task'];
	$presendingId = $_PUT['presendingId'];
	$pertx = $_PUT['pertx'];
	$perty = $_PUT['perty'];
	$height = $_PUT['height'];
	$width = $_PUT['width'];
	
	$query = "INSERT INTO task (task, presendingId, pertx, perty, width, height) VALUES ('${task}',${presendingId}, ,'${pertx}','${perty}', '${width}', '${height}');";
    $db->query($query);
?>