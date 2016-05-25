<?php
include_once '../../gerenciador_de_funcoes/funcoes_produto/gerenciar_produtos.php';
$produto = buscarProduto($_GET['id']);
?>
<html>
    <?php include_once '../../dados/head.php'; ?>
    <body>
        <?php include_once '../../dados/cabecalho.php'; ?>
        <?php include_once '../../dados/menu.php'; ?>
        <article class="conteudo">
            <nav>
                <a href="../index.php">Home</a> > <a href="#">...</a>
            </nav>
            <div class="nome_produto">
                <strong><p><?= $produto['nome']; ?></p></strong>
                <img src="<?= $produto['imagem']; ?>">
            </div>
            <div class="informarcoes_compra">
                <p class="descricao"><?= $produto['descricao']; ?></p>
                <p class="valor"><?= number_format($produto['valor'], 2, ',', '.'); ?></p>
                <p>
                    <strong>Parcelas:</strong>
                    <select>
                        <?php for ($parcela = 1; $parcela <= 12; $parcela++): ?>
                            <option value="<?= $parcela; ?>"><?= $parcela; ?> - <?= number_format($produto['valor'] / $parcela, 2, ',', '.'); ?></option>
                        <?php endfor; ?>
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