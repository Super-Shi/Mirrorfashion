


		<?php
          $cabecalho_title = "Home";
          include("cabecalho.php"); 
        ?>

	<section id="main">
		<div class="container destaque">
			<section class="busca">
				<h2>Busca</h2>
				<form>
					<input type="search">
					<input type="image" src="img/busca.png">
				</form>
			</section>
			<section class="menu-departamentos">
				<h2>Departamentos</h2>
				<nav>
					<ul>
						<li><a href="#">Blusas e Camisetas</a>
							<ul>
								<li><a href="#">Manga curta</a></li>
								<li><a href="#">Manga comprida</a></li>
								<li><a href="#">Camisa social</a></li>
								<li><a href="#">Camisa casual</a></li>
							</ul>
						</li>
						<li><a href="#">Calcas</a></li>
						<li><a href="#">Saias</a></li>
						<li><a href="#">Vestidos</a></li>
						<li><a href="#">Sapatos</a></li>
						<li><a href="#">Bolsas e Carteiras</a></li>
						<li><a href="#">Acessorios</a></li>
					</ul>
				</nav>
			</section>
			<img src="img/destaque-home.png" alt="Promoção: Big City Night">
		</div>
	</section>
	<section id="destaques">
		<div class="container paineis">
			<section class="painel novidades">
				<h2>Novidades</h2>
					<ol>
						<li>
							<a href="produto.html">
								<figure>
									<img src="img/produtos/miniatura1.png">
									<figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
								</figure>
							</a>
						</li>
						<li>
							<a href="produto.html">
								<figure>
									<img src="img/produtos/miniatura2.png">
									<figcaption>T-shirt por R$ 10,00</figcaption>
								</figure>
							</a>
						</li>
						<li>
							<a href="produto.html">
								<figure>
									<img src="img/produtos/miniatura3.png">
									<figcaption>Casaco por R$ 50,00</figcaption>
								</figure>
							</a>
						</li>
						<li>
							<a href="produto.html">
								<figure>
									<img src="img/produtos/miniatura4.png">
									<figcaption>Jaqueta por R$ 200,00</figcaption>
								</figure>
							</a>
						</li>
						<li>
							<a href="produto.html">
								<figure>
									<img src="img/produtos/miniatura5.png">
									<figcaption>Blusa lycra por 30,00</figcaption>
								</figure>
							</a>
						</li>
						<li>
							<a href="produto.html">
								<figure>
									<img src="img/produtos/miniatura6.png">
									<figcaption>Blusa Algodao por R$60,00</figcaption>
								</figure>
							</a>
						</li>
					</ol>
			</section>
			<section class="painel mais-vendidos">
				<h2>Mais Vendidos</h2>
				<ol>
						<li>
							<a href="produto.html">
								<figure>
									<img src="img/produtos/miniatura7.png">
									<figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
								</figure>
							</a>
						</li>
						<li>
							<a href="produto.html">
								<figure>
									<img src="img/produtos/miniatura8.png">
									<figcaption>T-shirt por R$ 10,00</figcaption>
								</figure>
							</a>
						</li>
						<li>
							<a href="produto.html">
								<figure>
									<img src="img/produtos/miniatura9.png">
									<figcaption>Casaco por R$ 50,00</figcaption>
								</figure>
							</a>
						</li>
						<li>
							<a href="produto.html">
								<figure>
									<img src="img/produtos/miniatura10.png">
									<figcaption>Jaqueta por R$ 200,00</figcaption>
								</figure>
							</a>
						</li>
						<li>
							<a href="produto.html">
								<figure>
									<img src="img/produtos/miniatura11.png">
									<figcaption>Blusa lycra por 30,00</figcaption>
								</figure>
							</a>
						</li>
						<li>
							<a href="produto.html">
								<figure>
									<img src="img/produtos/miniatura12.png">
									<figcaption>Blusa Algodao por R$60,00</figcaption>
								</figure>
							</a>
						</li>
					</ol>
			</section>
		</div>
	</section>
	
	<?php include("rodape.php"); ?>

</body>
</html>