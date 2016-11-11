<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Checkout Mirror Fashion</title>
	<meta name="viewport" content="width=device-width">
	<link rel="stylesheet" href="css/bootstrap-flatly.css">
	<link rel="stylesheet" href="css/estilos.css">
	<link rel="stylesheet" type="text/css" href="check.css">
</head>
<body>

	<nav class="navbar navbar-default navbar-fixed-top">	
		<div class="navbar-header">
			<a class="navbar-brand" href="index.php">Mirror Fashion</a>
			<button class="navbar-toggle" type="button" data-target=".navbar-collapse" data-toggle="collapse">
   				<span class="glyphicon glyphicon-align-justify"></span>
   			</button>
		</div>
		
		<ul class="nav navbar-nav collapse navbar-collapse">
			<li><a href="sobre.php">Sobre</a></li>
			<li><a href="#">Ajuda</a></li>
			<li><a href="#">Perguntas Frequentes</a></li>
			<li><a href="#">Entre em contato</a></li>
		</ul>

	</nav>

	<div class="jumbotron">
		<div class="container">
			<h1>Otima escolha!</h1>
			<p>Obrigado por comprar na Mirror Fashion!
			Preencha seus dados para efetivar a compra.</p>
			<p>eusou otimo</p>
		</div>
	</div>
	<div class="container">
	<div class="row">
			<div class="col-sm-4 col-lg-3">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h2 class="panel-title">Sua compra</h2>
				</div>
				<div class="panel-body">
					<img src="img/produtos/foto<?= $_POST['id'] ?>-<?= $_POST['cor'] ?>.png" class="img-thumbnail img-responsive" hidden-xs>
					<dl>
						<dt>Produto</dt>
						<dd><?= $_POST['nome'] ?></dd>

						<dt>Preco</dt>
						<dd><?= $_POST['preco'] ?></dd>

						<dt>Cor</dt>
						<dd><?= $_POST['cor'] ?></dd>

						<dt>Tamanho</dt>
						<dd><?= $_POST['tamanho'] ?></dd>
					</dl>
				</div>
			</div> <!-- fim .panel panel-default-->
			</div> <!-- fim .pcol-sm-4-->
	
	<div class="col-sm-8 col-lg-9">
	<form>
		<div class="row">
		<fieldset class="col-md-6">
			<legend>Dados Pessoais</legend>
			<div class="form-group">
				<label for="nome">Nome Completo</label>
				<input type="text" class="form-control" id="nome" name="nome" autofocus>
			</div>

			<div class="form-group">
				<label for="email">Email</label>
				<div class="input-group">
					<span class="input-group-addon">@</span>
				<input type="email" class="form-control" id="email" name="email" >

				</div>
			</div>

			<div class="form-group">
				<label for="cpf">CPF</label>
				<input type="text" class="form-control" id="cpf" name="cpf" placeholder="999.999.999-99" required>
			</div>

			<div class="checkbox">
				<label>
					<input type="checkbox" value="sim" name="spam" checked>
					Quero receber spam da Mirror Fashion
				</label>
			</div>
		</fieldset>
		<fieldset class="col-md-6">
			<legend>Cartao de credito</legend>

			<div class="form-group">
				<label for="numero-cartao">Numero - CVV</label>
				<input type="text" class="form-control" id="numero-cartao" name="numero-cartao">
			</div>

			<div class="form-group">
				<label for="bandeira-cartao">Bandeira</label>
				<select name="bandeira-cartao" id="bandeira-cartao" class="form-control">
					<option value="master">MasterCard</option>
					<option value="visa">Visa</option>
					<option value="amex">American Express</option>
				</select>
			</div>

			<div class="form-group">
				<label for="validade-cartao">Valiadde</label>
				<input type="month" class="form-control" id="validade-cartao"  name="validade-cartao">
			</div>
		</fieldset>
		</div> <!-- fim .row fieldset-->
		<button type="submit" class="btn btn-primary btn-lg pull-right">
			<span class="glyphicon glyphicon-thumbs-up"></span>
			Confirmar Pedido
		</button>
	
	</form>
	</div><!-- fim .col-sl-8-->
	</div> <!-- fim .row -->
	</div> <!-- fim .container -->
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/converteMoeda.js"></script>
</body>
</html>