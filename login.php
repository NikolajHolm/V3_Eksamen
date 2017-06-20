	<?php 
	if(isset($_POST['username'])){
		$formUsername=$_POST['username'];
		$formPassword=$_POST['password'];
		
		// connect til DB
		require "connect.php";

		// Hent fra users alle brugere med det indtastede brugernavn/ password, gemmes i $statement


		$statement = $dbh->prepare("SELECT * FROM users WHERE dbUsername = ? AND dbPassword = ?");
		$statement->bindParam(1, $formUsername);
		$statement->bindParam(2, $formPassword);
		$statement->execute();

		if ($row = $statement->fetch()) {
			// brugeren korrekt logget ind - så start session ogskriv deri brugernavn samt accessLevel
			session_start();
			$_SESSION['username'] = $row['dbUsername'];
			$_SESSION['accesLevel'] = $row['accessLevel'];
			// Retuner til index.php
			header('location: index.php');
		} else{
			// Brugeren har indtastet forkert login
			echo "Brugernavn eller password er skrevet forkert. Prøv igen.";
			



		}	// -> hvis $statement->fetch() et tom: skriv fehlbesked og returnér bruger
	}
	?>