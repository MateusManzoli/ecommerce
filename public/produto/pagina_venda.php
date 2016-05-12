<?php
include_once '../../gerenciador/gerenciador_produto/gerenciar_produtos.php';
$produto = buscarProduto($_GET['id']);
$produtos = buscarProdutos();
?>
<html>
    <?php include_once '../../dados/head.php'; ?>
    <body>
        <?php include_once '../../dados/cabecalho.php'; ?>
        <article class="conteudo">
            <nav>
                <a href="#">Home</a> > <a href="#">...</a>
            </nav>
            <div class="nome_produto">
                <strong><p><?php echo $produto['nome']; ?></p></strong>
                <img src="<?php echo $produto['imagem']; ?>">
            </div>
            <div class="informarcoes_compra">
                <p class="descricao"><?php echo $produto['descricao']; ?></p>
                <p class="valor"><?php echo $produto['valor']; ?></p>
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
            <div class="comprar">
                <input class="botao" type="submit" value="COMPRAR"><br><br><br>
                <input class="cep" type="text" placeholder="Digite seu CEP">
            </div>
        </article>
    </body>
</html>