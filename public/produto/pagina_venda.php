<?php
include_once '../../gerenciador/gerenciador_produto/gerenciar_produtos.php';
$produto = buscarProduto($_GET['id']);
$produtos = buscarProdutos();
?>
<html>
    <head>
        <meta charset="uft-8">
        <meta charset="UTF-8">
        <title>Ecommerce</title>
        <link rel="stylesheet" type="text/css" href="../../estilo-index.css">
    </head>
    <body>
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
            <input type="search" placeholder="procurar">
        </header>
        <nav class="navegacao">
            <a href="#">Vitrine</a> | <a href="#">DVDs</a> | <a href="#">Livros</a> | <a href="#">CDs</a>
        </nav>
        <article class="conteudo">
            <nav>
                <a href="#">Home</a> > <a href="#">...</a>
            </nav>
            <strong><p style=" padding: 2%; font-size: 2em;font-family: sans-serif; color: #195D9E;"><?php echo $produto['descricao']; ?></p></strong>
            <img src="<?php echo $produto['imagem']; ?>" style="float: left; width: 350px;padding-left: 3%;">

            <div class="informarcoes_compra" style="float: left; padding-left: 20%;">
                <p style="font-size: 2em; color: #195D9E; ">R$ <?php echo $produto['valor']; ?></p>
                <p>
                    <strong>Parcelas:</strong>
                    <select>
                        <option value="1">1 - 699,90</option>
                        <option value="2">2 - 349,95</option>
                        <option value="3">3 - 233,30</option>
                        <option value="4">4 - 174,97</option>
                        <option value="5">5 - 139,98</option>
                        <option value="6">6 - 116,65</option>
                        <option value="7">7 - 99,98</option>
                        <option value="8">8 - 87,48</option>
                        <option value="9">9 - 77,76</option>
                        <option value="10">10 - 69,99</option>
                        <option value="11">11 - 63,60</option>
                        <option value="12">12 - 58,32</option>
                    </select>
                </p>
            </div>
            <div class="comprar" style="padding-right: 10%;">
                <input type="submit" value="COMPRAR" style="background:#1A75CE; color:white; width: 10%; height: 5%; float: right;"><br><br><br>
                <input type="text" placeholder="Digite seu CEP" style="float: right;">
            </div>
        </article>
    </body>
</html>