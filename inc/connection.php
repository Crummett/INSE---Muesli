<?php
	$dsn = "mysql:host=localhost;charset-UTF-8";
	$username = "root";
	$password = "root";
	$dbase = "INSE";
	$createquery = "CREATE TABLE IF NOT EXISTS Task (
				    ID int auto_increment,
					Text VARCHAR(100) not null,
					PreseedingID int,
					WBTX float,
					WBTY float,
					WBT Width float,
					WBT Height float,
					PlanStartTime int,
					PlanDuration int,
					PlanEndTime int,
					SlackStartTime int,
					SlackDuration int,
					SlackEndTime int,
					PERTX float,
					PERTY float,
					PERTWidth float,
					PERTHeight float,
					ActualStartTime int,
					ActualDuration int,
					ActualEndTime int,
					Complete int,
					PRIMARY KEY (ID),
				    CONSTRAINT PreseedingIDIDFK FOREIGN KEY (PreseedingID) REFERENCES Task(ID)
					);";
?>