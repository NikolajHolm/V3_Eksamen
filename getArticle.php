<?php
require "connect.php";

	// Vælg alt fra articles tabellen
$statement = $dbh->prepare("SELECT * FROM articles ORDER BY id DESC");
$statement->execute();


while ($row = $statement->fetch(PDO::FETCH_ASSOC)) { 
	// Formater dato så det er læseligt
	$postDate = date("d-M-Y H:i", $row["postDate"]); 
	?>
		<article class="col-xs-3 col-sm-6 col-md-4 mt-5 whiteBackground">
			<img class="img-fluid" src="img/<?php echo $row['imgSrc'] ?>" alt="<?php $row['imgAlt'] ?>"  >
			<h3 class="mb-2"><?php echo $row['heading'] ?></h3>
			<hr>
			<p><?php echo $row['articleText']?></p>
			<p class="jumbotron text-center"><?php echo $row['price'] ?> kr.</p>
			<div class="text-center">
				<button class="btn btn-green text-center buttonBuy" type="submit">KØB</button>
			</div>
			<p class="mt-3"><?php echo $postDate?></p>
		</article>


	<?php
}

?>