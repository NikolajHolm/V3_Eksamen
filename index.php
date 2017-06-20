<?php 
require "header.php";
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


		<main class="col- col-sm-8 col-md-10">
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
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non hic ipsa laborum distinctio labore mollitia eligendi! Laborum omnis inventore praesentium provident corporis itaque, aliquam, repudiandae veniam tempore veritatis obcaecati asperiores!</p>
			</section>




			<!-- Nye produkter -->


			<section class="newProducts">	
				<h6 class="text-center">Nyeste produkter</h6>
				<hr>
				<div class="container-fluid">
					<div class="row">

						<!-- Database artikler -->
						<div class="newArticle">
							
							<?php require "getArticle.php" ?>
						</div>
							<!-- <article class="col-xs-3 col-sm-6 col-md-4 newArticle noGutters">
								<img class="img-fluid" src="img/1.jpg" alt="">
								<h3 class="mb-2">Produkt navn</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus sequi, magnam rem, possimus expedita saepe non voluptatum quae vitae natus debitis! Perferendis alias earum pariatur repellat eaque totam in a.</p>
								<div class="text-center">
									<button class="btn btn-green text-center buttonBuy" type="submit">KØB</button>
								</div>
							</article>
							<article class="col-xs-3 col-sm-6 col-md-4 newArticle noGutters">
								<img class=" img-fluid" src="img/2.jpg" alt="">
								<h3 class="mb-2">Produkt navn</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus sequi, magnam rem, possimus expedita saepe non voluptatum quae vitae natus debitis! Perferendis alias earum pariatur repellat eaque totam in a.</p>
								<div class="text-center">
									<button class="btn btn-primary mb-4 buttonBuy" type="submit">KØB</button>
								</div>
							</article>
							<article class="col-xs-3 col-sm-6 col-md-4 newArticle noGutters">
								<img class="img-fluid" src="img/3.jpg" alt="">
								<h3 class="mb-2">Produkt navn</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus sequi, magnam rem, possimus expedita saepe non voluptatum quae vitae natus debitis! Perferendis alias earum pariatur repellat eaque totam in a.</p>
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