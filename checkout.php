 <!doctype html>
   <html>
   <head>
       <meta charset="UTF-8">
       <title>Checkout Mirror Fashion</title>
       <meta name="viewport" content="width=device-width">
       <link rel="stylesheet" href="css/bootstrap-flatly.css">
       <link rel="stylesheet" href="css/check.css">
   </head>
   <body>
    
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="navbar-header">
        <a class="navbar-brand" href="index.php">
        <img src="img/logo.png" alt="Mirror Fashion">
        </a>

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
           <h1>Ótima escolha!</h1>
           <p>Obrigado por comprar na Mirror Fashion!
           Preencha seus dados para efetivar a compra.</p>
      </div><!--fim container-->
    </div><!--fim jumbotron-->
    
    <div class="container">
    <div class="row">
    <div class="col-sm-4 col-lg-3">
        <div class="panel panel-default">
            <div class="panel heading">
               <h2>Sua compra</h2>
            </div><!--fim panel heading-->
            <div class="panel-body">
              <img src="img/produtos/foto2<?= $_POST["id"] ?>-<?= $_POST["cor"] ?>.png" class="img-thumbnail img-responsive" hidden-xs>
               <dl>
                   <dt>Produto</dt>
                   <dd><?=$_POST['nome'] ?></dd>
                   
                   <dt>Preço</dt>
                   <dd><?=$_POST['preco'] ?></dd>                   

                   <dt>Cor</dt>
                   <dd><?=$_POST['cor'] ?></dd>

                   <dt>Tamanho</dt>
                   <dd><?=$_POST['tamanho'] ?></dd>

               </dl>
            </div><!--fim painel-body-->
        </div><!--fim panel panel-default-->
        </div><!--fim col-sm-4-->
      
      <form class="col-sm-8 col-lg-9">
      <div class="row">
        <fieldset class="col-md-6">
          <legend>Dados Pessoais</legend>

          <div class="form-group">
            <label for="nome">Nome completo</label>
            <input type="text"  class="form-control" id="nome" name="nome" autofocus required>
          </div>

          <div class="form-group">
            <label for="email">Email</label>
            <div class="input-group">
              <span class="input-group-addon">@</span>
              <input type="email" class="form-control"  id="email" name="email">
            </div> <!--fim div input-group-->
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

          <legend>Cartao de Credito</legend>

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
            <label for="validade-cartao">Validade</label>
            <input type="month" class="form-control" id="validade-cartao" name="validade-cartao">
          </div>
        </fieldset>
      </div><!--fim row-->

        <button type="submit" class="btn btn-primary btn-lg pull-right">
          <span class="glyphicon glyphicon-thumbs-up"></span>
          Confirmar Pedido
        </button>
      </form>
      </div><!--fim row-->
    </div><!--fim container painel-->

<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>

   </body>
   </html>