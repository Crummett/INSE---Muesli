<?php
	$dsn = "mysql:host=localhost;charset-UTF-8";
	$username = "root";
	$password = "root";
	$dbase = "INSE";
	$createquery = "CREATE TABLE IF NOT EXISTS Task (
				    ID int auto_increment PRIMARY KEY,
					Text VARCHAR(100) not null,
					PreseedingID int,
					PlanStartTime int,
					PlanDuration int,
					PlanEndTime int,
					SlackStartTime int,
					SlackDuration int,
					SlackEndTime int,
					PERTX int,
					PERTY int,
					PERTWidth int,
					PERTHeight int,
					ActualStartTime int,
					ActualDuration int,
					ActualEndTime int,
					Complete int,
					CONSTRAINT PreseedingIDIDFK FOREIGN KEY (PreseedingID) REFERENCES Task(ID)
				    );";
?>