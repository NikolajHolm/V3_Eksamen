<?php
	$heading = $_GET['heading'];
	$imgSrc = $_GET['imgSrc'];
	$imgAlt = $_GET['imgAlt'];
	$time = time();
	$price = $_GET['price'];
	$articleText = $_GET['articleText'];

	// echo $heading;
	// echo $imgSrc;
	// echo $imgAlt;
	// echo $articleText;


	require_once "connect.php";

	$statement = $dbh->prepare('INSERT INTO articles(imgSrc, imgAlt, heading, postDate, price, articleText)
		VALUES(?, ?, ?, ?, ?, ?)');
	$statement->bindParam(1, $imgSrc);
	$statement->bindParam(2, $imgAlt);
	$statement->bindParam(3, $heading);
	$statement->bindParam(4, $time);
	$statement->bindParam(5, $price);
	$statement->bindParam(6, $articleText);

	$statement->execute();
	header("location: index.php");
?>