


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
			<img src="img/destaque-home.png" alt="Promoção: Big City Night">
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
 <link href='http://fonts.googleapis.com/css?family=PT+Sans|Bad+Script'
     rel='stylesheet'>

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
			<div class="destaque img">
			<img src="img/destaque-home.jpg" alt="Promoção: Big City Night">
			<a href="#" class="pause"></a>
			</div>
		</div>
	</section>
	<section id="destaques">
		<div class="container paineis">
			<section class="painel novidades">
				<h2>Novidades</h2>
					<ol>
						<?php
						$conexao = mysqli_connect("localhost", "root", "", "WD43");
						$dados = mysqli_query($conexao, "SELECT * FROM produtos ORDER BY data DESC LIMIT 0, 12");
						while ($produto = mysqli_fetch_array($dados)):
						?>
							<li>
								<a href="produto.php?id=<?= $produto['id'] ?>">
									<figure>
										<img src="img/produtos/miniatura<?= $produto['id'] ?>.png" alt="<?= $produto['nome'] ?>">
										<figcaption><?= $produto['nome'] ?> por <?= $produto['preco'] ?></figcaption>
									</figure>
								</a>
							</li>
						<?php endwhile; ?>
					</ol>
			
					<button type="button">Mostra mais</button>
			</section>
			<section class="painel mais-vendidos">
				<h2>Mais Vendidos</h2>
				<ol>
					<?php
						$conexao = mysqli_connect("localhost", "root", "", "WD43");
						$dados = mysqli_query($conexao, "SELECT * FROM produtos ORDER BY vendas DESC LIMIT 0, 12");
						while ($produto = mysqli_fetch_array($dados)):
						?>
							<li>
								<a href="produto.php?id=<?= $produto['id'] ?>">
									<figure>
										<img src="img/produtos/miniatura<?= $produto['id'] ?>.png" alt="<?= $produto['nome'] ?>">
										<figcaption><?= $produto['nome'] ?> por <?= $produto['preco'] ?></figcaption>
									</figure>
								</a>
							</li>
						<?php endwhile; ?>
					</ol>
			
					<button type="button">Mostra mais</button>

			</section>
		</div>
	</section>
	
	<?php include("rodape.php"); ?>

<script src="js/jquery.js"></script>
<script src="js/home.js" ></script>
<script src="js/banner.js"></script>
<script src="js/less.js"></script>
</body>
</html>
