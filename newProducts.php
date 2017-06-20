
<!-- ///////////////////////////////////////////////////////////////////////////////////////// -->
<!-- ///////////////////////////////////////////////////////////////////////////////////////// -->
<!-- /////                                                                                //// -->
<!-- /////                                                                                //// -->
<!-- /////                                                                                //// -->
<!-- /////                                                                                //// -->
<!-- /////                                                                                //// -->
<!-- /////                                                                                //// -->
<!-- /////                            Ikke begyndt endnu                                  //// -->
<!-- /////                                                                                //// -->
<!-- /////                                                                                //// -->
<!-- /////                                                                                //// -->
<!-- /////                                                                                //// -->
<!-- /////                                                                                //// -->
<!-- /////                                                                                //// -->
<!-- /////                                                                                //// -->
<!-- ///////////////////////////////////////////////////////////////////////////////////////// -->
<!-- ///////////////////////////////////////////////////////////////////////////////////////// -->





<?php
require_once "connect.php";

	// Vælg alt fra articles tabellen
$statement = $DBH->prepare("SELECT * FROM articles ORDER BY id DESC");
$statement->execute();


while ($row = $statement->fetch(PDO::FETCH_ASSOC)) { 
$postDate = date("d-M-Y H:i", $row["postDate"]); 
	?>
	<article class="col-md-4  mb-5">
		<a href="#"><img class="img-fluid rounded" src="img/<?php echo $row['imgSrc'] ?>" alt="<?php echo $row['imgAlt'] ?>"></a>
		<h2 class="pt-2"><?php echo $row['heading'] ?></h2>
		<p><?php echo $row['articleText'] ?></p>
		<button class="btn btn-primary mb-4" type="submit">Læs om animeen</button>
		<br>
		<span class="jumbotron text-center"><?php echo $postDate?></span>
		<?php 
		?>
		<a href="deleteArticle.php"><button type="submit" class="btn btn-primary btn-lg btn-block login-button">Slet</button></a>

	</article>




	<?php
}

?>