<?php
	$dsn = "mysql:host=localhost;charset-UTF-8";
	$username = "root";
	$password = "root";
	$dbase = "inse";
	$createquery = "CREATE TABLE task (
				    id int auto_increment PRIMARY KEY,
					task VARCHAR(100) not null,
					planstarttime int,
					planduraction int,
					planendtime int,
					slackstarttime int,
					slackduration int,
					slackendtime int,
					actualstarttime int,
					actucalduration int,
					actualendtime int,
					presendingId int,
					complete int,
					wbtx float,
					wbty float,
					wbtwidth float,
					wbtheight float,
					pertx float,
					perty float,
					pertwidth float,
					pertheight float,  
					ganttx float,
					gantty float,  
				    CONSTRAINT presendingIdIDFK
					FOREIGN KEY (presendingId) REFERENCES task(id)
					);";
	$option = array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION);
	$db = new PDO($dsn, $username, $password, $option);
	$showresult = $db->query("show databases like 'inse'");
	if (!$showresult->fetch()) {
		$db->query("CREATE DATABASE inse"); 
	}
	$db->exec("USE inse");
	$db->exec($createquery);
?>