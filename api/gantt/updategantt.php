<?php
	include '../inc/all.php';
	
	$task = $_POST['task'];
	$presendingID = $_POST['presendingId'];
	$x = $_POST['x'];
	$y = $_POST['y'];
	$height = $_POST['height'];
	$width = $_POST['width'];
	
	$query = "UPDATE INTO Task (Task, PresendingID, GANTTX, GANTTY, GANTTWidth, GANTTHeight) VALUES ('${task}',${presendingId}, ,'${x}','${y}', '${width}', '${height}');";
    $db->query($query);
?>