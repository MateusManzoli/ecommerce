<?php
include_once __DIR__ . '/../gerenciador/gerenciador_produto/gerenciar_produtos.php';

if (isset($_POST['pesquisa'])) {
    $produtos = buscarProdutoPorPesquisa($_POST['pesquisa']);
} elseif ($_GET['categoria']) {
    $produtos = buscarProdutosPorCategoria($_GET['categoria'], $_GET['marca']);
    $submenus = buscarSubCategorias($_GET['categoria']);
} else {
    $produtos = buscarProdutosVitrine();
}
?>
<html>
    <?php include_once '../dados/head.php'; ?>
    <body>
        <?php include_once '../dados/cabecalho.php'; ?>
        <nav style="margin-bottom: 10px;">
            <a href="index.php">Home</a> > <a href="#">...</a>
        </nav>
        <div class="subMenu" style="margin-right: 10px; width: 400px;" name="produtoCat">
            <?php foreach ($submenus as $submenu): ?>
                <a href="<?= 'index.php?categoria=' . $submenu['categoria_id']; ?>&marca=<?= $submenu['nome']; ?>"style=" text-decoration: none; margin: 10px; color: #195D9E;" ><?= $submenu['nome']; ?>
                <?php endforeach; ?>
        </div>
        <article class="conteudo">
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