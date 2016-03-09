<?php
	include '../../inc/all.php';
	
	$ID = $_POST['ID'];
	$Text = $_POST['Text'];
	$WBTX = $_POST['WBTX'];
	$WBTY = $_POST['WBTY'];
	$WBTWidth = $_POST['WBTWidth'];
	$WBTHeight = $_POST['WBTHeight'];

	if (isset($_POST['PrecedingID'])) {
		$PrecedingID = $_POST['PrecedingID'];
		$query = "UPDATE Task SET Text = '${Text}', PrecedingID = ${PrecedingID}, WBTX = ${WBTX}, WBTY = ${WBTY}, WBTWidth = ${Width}, WBTHeight = ${Height} WHERE ID = ${ID};";
	}
	else {
		$query = "UPDATE Task SET Text = '${Text}', WBTX = ${WBTX}, WBTY = ${WBTY}, WBTWidth = ${Width}, WBTHeight = ${Height} WHERE ID = ${ID};";
	}
	
    $db->query($query);
?>