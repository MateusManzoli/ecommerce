<?php
include_once __DIR__ . '/../gerenciador/gerenciador_produto/gerenciar_produtos.php';

if (isset($_POST['pesquisa'])) {
    $produtos = buscarProdutoPorPesquisa($_POST['pesquisa']);
} elseif ($_GET['categoria']) {
    $produtos = buscarProdutosPorCategoria($_GET['categoria']);
} else {
    $produtos = buscarProdutos();
}
?>
<html>
    <?php include_once '../dados/head.php'; ?>
    <body>
        <?php include_once '../dados/cabecalho.php'; ?>
        <article class="conteudo">
            <nav>
                <a href="#">Home</a> > <a href="#">...</a>
            </nav>
            <ul> 
                <?php foreach ($produtos as $produto) { ?>
                    <li>
                        <figure>
                            <a href="../produto/pagina_venda.php?id=<?php echo $produto['id']; ?>">
                                <img src="<?= $produto['imagem']; ?>">
                                <figcaption>
                                    <?= substr($produto['descricao'], 0, 80); ?> <b>....</b>
                                    <p>R$: <?= number_format($produto['valor'], 2, ',', '.'); ?></p>
                                </figcaption>
                            </a>
                            <input type="submit" value="Adicionar no carrinho">
                        </figure>
                    </li>
                <?php } ?>
            </ul>
        </article>
    </body>
</html>