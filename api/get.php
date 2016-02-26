<?php
	include '../inc/all.php';

	$query = "SELECT * from task;";
    $rows = $db->query($query);
    $rows = $rows->fetchAll(PDO::FETCH_ASSOC);
    
    $results = [];
	$results["rows"] = $rows;
	header("Content-Type: application/json");
    echo json_encode($results);
?>