<?php
       $conexao = mysqli_connect("localhost", "root", "", "WD43");
       $dados = mysqli_query($conexao, "SELECT * FROM produtos WHERE id = $_GET[id]");
       $produto = mysqli_fetch_array($dados);
?>

<link rel="stylesheet" href="css/produto.css">
<link rel="stylesheet" href="css/estilo.css">  
<link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">



       <?php
          $cabecalho_title = "Produtos";
          include("cabecalho.php"); 
        ?>
<div class="produto-back">
  <div class="container">
    <div class="produto">
      <h1><?= $produto['nome'] ?></h1>
      <p>por apenas <?= $produto['preco'] ?></p>

      <!--botao like do facebook-->
      <div class="fb-like" data-href="http://www.mirrorfashion.net"
      data-send="false" data-layout="box_count"
      data-width="58" data-show-faces="false">
      </div>

      <!--botao like do twitter-->
      <a href="https://twitter.com/share"
        class="twitter-share-button" data-count="vertical">Tweet</a>

      <form action="checkout.php" method="POST">
        <fieldset class="cores">
          <legend>Escolha a cor</legend>

          <input type="radio" name="cor" value="verde" id="verde" checked>
          <label for="verde">
            <img src="img/produtos/foto<?= $produto['id'] ?>-verde.png" alt="Produto na cor verde">
          </label>

          <input type="radio" name="cor" value="rosa" id="rosa">
          <label for="rosa">
            <img src="img/produtos/foto<?= $produto['id'] ?>-rosa.png" alt="Produto na cor rosa">
          </label>

          <input type="radio" name="cor" value="azul" id="azul">
          <label for="azul">
            <img src="img/produtos/foto<?= $produto['id'] ?>-azul.png" alt="Produto na cor azul"">
          </label>
      
      </fieldset>
        <fieldset class="tamanhos">
          <legend>Escolha o tamanho:</legend>
          <input type="range" min="36" max="46" value="42" step="2" name="tamanho" id="tamanho">
          <output for="tamanho" name="valortamanho">42</output>
        </fieldset>
      <input type="submit" class="compra" value="Compra">
      <input type="hidden" name="id" value="<?= $produto['id'] ?>">
    </form>
  </div>
  <div class="detalhes">
    <h2>Detalhes do produto</h2>
    <p><?= $produto['descricao'] ?></p>
    <table>
        <thead>
          <tr>
            <th>Caracteristicas</th>
            <th>Detalhes</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Modelo</td>
            <td>Cardiga 7845</td>
          </tr>
          <tr>
            <td>Material</td>
            <td>Algodao e poliester</td>
          </tr>
          <tr>
            <td>Cores</td>
            <td>Azul, Rosa e Verde</td>
          </tr>
          <tr>
            <td>Lavagem</td>
            <td>Lavar a mao</td>
          </tr>
        </tbody>
    </table>

    </div>
  </div>
</div>
  <?php include("rodape.php"); ?>

<!--botao facebook-->
<script src="js/jquery.js"></script>
<script src="js/produto.js"></script>
<div id="fb-root"></div>
   <script>(function(d, s, id) {
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) return;
     js = d.createElement(s); js.id = id;
     js.src = "http://connect.facebook.net/pt_BR/all.js#xfbml=1";
     fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<!--botao twitter-->
<script>
!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];
if(!d.getElementById(id)){js=d.createElement(s);js.id=id;
js.src="http://platform.twitter.com/widgets.js";
fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");
</script>

       </body>
     </html>
