<?php
	include '../../inc/all.php';
	
	$Text = $_POST['Text'];
	
	if (isset($_POST['PreseedingID'])) {
		$PreseedingID = $_POST['PreseedingID'];
		$query = "INSERT INTO Task (Text, PreseedingID) VALUES ('${Text}', ${PresendingID});";
	}
	else {
		$query = "INSERT INTO Task (Text) VALUES ('${Text}');";
	}
	$db->query($query);
?>