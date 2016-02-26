<?php
	$dsn = "mysql:host=localhost;charset-UTF-8";
	$username = "root";
	$password = "root";
	$dbase = "inse";
	$createquery = "CREATE TABLE Task (
				    ID int auto_increment PRIMARY KEY,
					Task VARCHAR(100) not null,
					PlanStartTime int,
					PlanDuraction int,
					PlanEndTime int,
					SlackStartTime int,
					SlackDuration int,
					SlackEndtTime int,
					ActualStartTime int,
					ActualDuration int,
					ActualEndTime int,
					PresendingID int,
					Complete int,
					WBTX float,
					WBTY float,
					WBTWidth float,
					WBTHeight float,
					PERTX float,
					PERTY float,
					PERTWidth float,
					PERTHeight float,  
					GANTTX float,
					GANTTY float,  
				    CONSTRAINT presendingIDIDFK
					FOREIGN KEY (PresendingID) REFERENCES Task(ID)
					);";
?>