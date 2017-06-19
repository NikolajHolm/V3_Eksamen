<?php
$servername = "localhost";
$dbName = "økoshop";
$dbUsername = "root";
$dbPassword = "";


	try {
		// Prøv at køre koden

		// Opretter forbindelse til databasen
		$dbh = new PDO("mysql:host=$servername;dbname=$dbName; charset=utf8", $dbUsername, $dbPassword);

		// Henter potentielle fejl, og gør det muligt at udskrive dem
		$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} catch (PDOException $e){

		// Hvis det kode ovenfor ikke kunne køre, kør dette istedet

		// Udskriver en fejlmeddelelse
		echo "Connection failed: " . $e->getMessage();
	}
?>