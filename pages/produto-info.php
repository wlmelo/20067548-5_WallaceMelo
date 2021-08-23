<?php
  if (isset($_GET['id']) && (!empty($_GET['id']))) {
      $cod_produto = (int) $_GET['id'];
      include_once '../dados/dados.php';
      $produto = $produtos["$cod_produto"]["produto"];
      $descricao = $produtos["$cod_produto"]["descricao"];
      $genero = $produtos["$cod_produto"]["genero"];
  }
?>
    
    <!-- Informações Sobre o Produto -->
    <section id="produto-info">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block">
                        <h1 class="heading wow">Saiba mais sobre <?=$genero?> </br><span><?=$produto?></span></h1>
                        </br></br>
                        <div>
                            <h3 class="font-400"><?=$descricao?></h3>
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
            <a class="btn btn-default wow" href="index.php" role="button">Voltar</a>
        </div>
    </section>