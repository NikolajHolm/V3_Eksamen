<?php
require "header.php"
?>


<body>
	<div class="container">

		<!-- Nav med billede og links -->
		
		<?php 
		require "nav.php"
		?>






		<!-- Connect.php -->
		<?php 
		require "connect.php";
		?>

		<!-- sociale medier -->
		<main class="col- col-sm-8 col-md-10 ">
			<header class="">
				<div class="row">
					<div class="socialMedia d-flex">
						<div class="row justify-content-start">
							<a class="ml-4" href="#"><i class="fa fa-facebook facebook" aria-hidden="true"></i></a>
							<a href="#"><i class="fa fa-instagram instagram" aria-hidden="true"></i></a>
							<a href="#"><i class="fa fa-twitter twitter" aria-hidden="true"></i></a>
							<a href="#"><i class="fa fa-youtube youtube" aria-hidden="true"></i></a>
						</div>
					</div>
					<div class="shopCart d-flex nav navbar-nav navbar-right">
						<div class="row justify-content-end">
							<a href="#">Min konto</a>
							<i class="fa fa-shopping-cart shoppingCart ml-2 mr-2" aria-hidden="true"></i>
							<a class="mr-3" href="#">Min kurv</a>
						</div>
					</div>
				</div>
			</header>




			<!-- content -->

			<section class="noGutters">
				<img class="img-fluid" src="img/banner.jpg" alt="">
				<h5 class="text-center mt-5 mb-5">ØKOshop.DK - Økologiske og bæredygtigt fremsillede kvalitetsvarer - nemt og hurtigt</h5>

				<p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non hic ipsa laborum distinctio labore mollitia eligendi! Laborum omnis inventore praesentium provident corporis itaque, aliquam, repudiandae veniam tempore veritatis obcaecati asperiores!</p>
				
				



				<form class="form-horizontal" method="get" action="insertArticle.php">

					<div class="form-group">
						<label for="imgSrc" class="control-label">Billede</label>
						<div class="cols-sm-10">
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-picture-o" aria-hidden="true"></i></span>
								<input type="text" class="form-control" name="imgSrc" id="imgSrc"  placeholder="Skriv navn på billede plus fil-type"/>
							</div>
						</div>
					</div>

					<div class="form-group">
						<label for="imgAlt" class=" control-label">Billedets alt-tekst</label>
						<div class="cols-sm-10">
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-picture-o" aria-hidden="true"></i></span>
								<input name="imgAlt" type="text" class="form-control" name="imgAlt" id="imgAlt"  placeholder="Skriv alt teksten "/>
							</div>
						</div>
					</div>


					<div class="form-group">
						<label for="heading col-xs-3" class="cols-sm-2 control-label">Overskrift</label>
						<div class="cols-sm-10">

							<div class="input-group col-xs-9">
								<span class="input-group-addon "><i class="fa fa-header" aria-hidden="true"></i></span>
								<input type="text" class="form-control" name="heading" id="header"  placeholder="Skriv din overskrift til artiklen her"/>
							</div>
						</div>
					</div>



					<div class="form-group">
						<label for="articleText">Brødtekst</label>
						<textarea class="form-control" id="exampleTextarea" rows="3" placeholder="Skriv din tekst her" name="articleText"></textarea>
					</div>

						<div class="form-group">
						<label for="price" class=" control-label">Pris i kr.</label>
						<div class="cols-sm-10">
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-money" aria-hidden="true"></i></span>
								<input name="price" type="text" class="form-control" name="price" id="price"  placeholder="Pris i kr... "/>
							</div>
						</div>
					</div>
					


					<div class="form-group  ">
						<button class="btn  mb-5 submitButton" type="submit">Opret</button>
					</div>
				</form>
			</section>




			<!-- Nye produkter -->


			<section class="newProducts">	

				<div class="container-fluid">
					<div class="row">


						<!-- Udskriv artiklerne fra databasen -->
						<?php require "getArticle.php" ?>

							<!-- <article class="col-xs-3 col-sm-6 col-md-4 newArticle noGutters">
								<img class="img-fluid" src="img/1.jpg" alt="">
								<h3 class="mb-2">Produkt navn</h3>
								<hr>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus sequi, magnam rem, possimus expedita saepe non voluptatum quae vitae natus debitis! Perferendis alias earum pariatur repellat eaque totam in a.</p>
								<p class="jumbotron text-center">15 kr.</p>
								<div class="text-center">
									<button class="btn btn-green text-center buttonBuy" type="submit">KØB</button>
								</div>
							</article>
							<article class="col-xs-3 col-sm-6 col-md-4 newArticle noGutters">
								<img class=" img-fluid" src="img/2.jpg" alt="">
								<h3 class="mb-2">Produkt navn</h3>
								<hr>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus sequi, magnam rem, possimus expedita saepe non voluptatum quae vitae natus debitis! Perferendis alias earum pariatur repellat eaque totam in a.</p>
								<p class="jumbotron text-center">15 kr.</p>
								<div class="text-center">
									<button class="btn btn-primary mb-3 buttonBuy" type="submit">KØB</button>
								</div>
							</article>
							<article class="col-xs-3 col-sm-6 col-md-4 newArticle noGutters">
								<img class="img-fluid" src="img/3.jpg" alt="">
								<h3 class="mb-2">Produkt navn</h3>
								<hr>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus sequi, magnam rem, possimus expedita saepe non voluptatum quae vitae natus debitis! Perferendis alias earum pariatur repellat eaque totam in a.</p>
								<p class="jumbotron text-center">15 kr.</p>
								<div class="text-center">
									<button class="btn btn-primary mb-4  buttonBuy" type="submit">KØB</button>
								</div>
							</article>


							<article class="col-xs-3 col-sm-6 col-md-4 newArticle noGutters">
								<img class="img-fluid" src="img/4.jpg" alt="">
								<h3 class="mb-2">Produkt navn</h3>
								<hr>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus sequi, magnam rem, possimus expedita saepe non voluptatum quae vitae natus debitis! Perferendis alias earum pariatur repellat eaque totam in a.</p>
								<p class="jumbotron text-center">15 kr.</p>
								<div class="text-center">
									<button class="btn btn-primary mb-4  buttonBuy" type="submit">KØB</button>
								</div>
							</article>
							<article class="col-xs-3 col-sm-6 col-md-4 newArticle noGutters">
								<img class="img-fluid" src="img/5.jpg" alt="">
								<h3 class="mb-2">Produkt navn</h3>
								<hr>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus sequi, magnam rem, possimus expedita saepe non voluptatum quae vitae natus debitis! Perferendis alias earum pariatur repellat eaque totam in a.</p>
								<p class="jumbotron text-center">15 kr.</p>
								<div class="text-center">
									<button class="btn btn-primary mb-4  buttonBuy" type="submit">KØB</button>
								</div>
							</article>
							<article class="col-xs-3 col-sm-6 col-md-4 newArticle noGutters">
								<img class="img-fluid" src="img/6.jpg" alt="">
								<h3 class="mb-2">Produkt navn</h3>
								<hr>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus sequi, magnam rem, possimus expedita saepe non voluptatum quae vitae natus debitis! Perferendis alias earum pariatur repellat eaque totam in a.</p>
								<div class="text-center">
									<button class="btn btn-primary mb-4  buttonBuy" type="submit">KØB</button>
								</div>
							</article>


							<article class="col-xs-3 col-sm-6 col-md-12 newArticle noGutters">
								<img class="img-fluid mx-auto d-block" src="img/7.jpg" alt="">
								<h3 class="mb-2">Produkt navn</h3>
								<hr>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus sequi, magnam rem, possimus expedita saepe non voluptatum quae vitae natus debitis! Perferendis alias earum pariatur repellat eaque totam in a.</p>
								<p class="jumbotron text-center">15 kr.</p>
								<div class="text-center">
									<button class="btn btn-primary mb-4  buttonBuy" type="submit">KØB</button>
								</div>
							</article> -->
						</div>
					</div>	
				</section>
			</main>
		</div>




		<!-- Footer -->
		<?php 
		require "footer.php";
		?>
	</div>
</body>
</html>