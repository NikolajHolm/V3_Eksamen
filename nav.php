		<div class="row">
			<nav class="col-sm-4 col-md-2">
				<img class="img-fluid" src="img/logo2.jpg" alt="">
				<h4 class="text-center">
					<span class="oeko">ØKO</span>shop<span class="dk">.DK</span>
				</h4>
				<section class="text-center d-flex flex-column">
					<ul>
						<li><a href="index.php">Forside</a></li>
						<li><a href="shop.php">Shop</a></li>
						<li><a href="#">Garanti</a></li>
						<li><a href="#">Om os</a></li>
						<li><a class="log-ind"href="#">Log ind</a></li>
					</ul>
					<div id="login">
						<hr>
						

						<?php 
						session_start();
						if(isset($_SESSION['username'])){
							echo "Velkommen ".$_SESSION['username']. "";
									// echo "<a class='btn ' href='logOut.php?logOut=true'>Log ud</a>";
						} else{?>
						<form class="form-horizontal" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

							<div class="form-group">
								<label for="username" class="cols-sm-2 control-label">Brugernavn</label>
								<div class="cols-sm-10">
									<div class="input-group">
										<input type="text" class="form-control" name="username" id="username"  placeholder="Brugernavn"/>
									</div>
								</div>
							</div>

							<div class="form-group">
								<label for="password" class="cols-sm-2 control-label">Adgangskode</label>
								<div class="cols-sm-10">
									<div class="input-group">
										<input type="password" class="form-control" name="password" id="password"  placeholder="Adgangskode"/>
									</div>
								</div>
							</div>

							<div class="form-group ">
								<input type="submit" class="btn btn-primary btn-lg btn-block login-button" value="login">
								<?php
							}
							?>
						</div>
					</form>
				</div>
			</section>
		</nav>