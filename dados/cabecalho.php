<?php
include_once '../gerenciador/gerenciador_produto/gerenciar_produtos.php';
$categorias = buscarCategorias();
?>
<header class="cabecalho">
    <div class="logo">
        <img src="../../imagens/simbolo-loja.png">
        <span>Minha loja</span>
    </div>
    <div class="carrinho">
        <span>1 item</span>
        <img src="../../imagens/carrinho.png">

    </div>
    <div class="cadastra-se"> 
        <a href="#">Entre</a> ou <a href="#">Cadastra-se</a>
    </div>
    <form class="pesquisa" action="../index.php" method="post">
        <input type="search" placeholder="procurar" name="pesquisa">
    </form>
</header>