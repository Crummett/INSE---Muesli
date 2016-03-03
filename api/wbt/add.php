<?php
	include '../../inc/all.php';
	
	$Text = $_POST['Text'];
	$WBTX = $_POST['WBTX'];
	$WBTY = $_POST['WBTY'];
	$WBTWidth = $_POST['WBTWidth'];
	$WBTHeight = $_POST['WBTHeight'];
	
	if (isset($_POST['PreseedingID'])) {
		$PreseedingID = $_POST['PreseedingID'];
		$query = "INSERT INTO Task (Text, PreseedingID, WBTX, WBTY, WBTWidth, WBTHeight) VALUES ('${Text}', ${PresendingID}, ${WBTX}, ${WBTY}, ${WBTWidth}, ${WBTHeight});";
	}
	else {
		$query = "INSERT INTO Task (Text, WBTX, WBTY, WBTWidth, WBTHeight) VALUES ('${Text}', ${WBTX}, ${WBTY}, ${WBTWidth}, ${WBTHeight});";
	}
	$db->query($query);
?>