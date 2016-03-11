<?php
	include '../../inc/all.php';
	
	$ID = $_POST['ID'];
	$Text = $_POST['Text'];

	if (isset($_POST['PrecedingID'])) {
		$PrecedingID = $_POST['PrecedingID'];
<<<<<<< HEAD
		$query = "UPDATE Task SET Text = '${Text}', PrecedingID = ${PrecedingID}, WBTX = ${WBTX}, WBTY = ${WBTY}, WBTWidth = ${Width}, WBTHeight = ${Height} WHERE ID = ${ID};";
=======
		$query = "UPDATE Task SET Text = '${Text}', PrecedingID = ${PrecedingID} WHERE ID = ${ID};";
>>>>>>> 52e59dd4ca08d63ed28d997f7f81a9d1c154ef2f
	}
	else {
		$query = "UPDATE Task SET Text = '${Text}' WHERE ID = ${ID};";
	}
	
    $db->query($query);
?>