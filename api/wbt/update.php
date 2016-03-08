<?php
	include '../../inc/all.php';
	
	$ID = $_POST['ID'];
	$Text = $_POST['Text'];

	if (isset($_POST['PreseedingID'])) {
		$PreseedingID = $_POST['PreseedingID'];
		$query = "UPDATE Task SET Text = '${Text}', PreseedingID = ${PreseedingID} WHERE ID = ${ID};";
	}
	else {
		$query = "UPDATE Task SET Text = '${Text}' WHERE ID = ${ID};";
	}
	
    $db->query($query);
?>