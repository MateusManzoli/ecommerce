<?php
include_once '../../gerenciador/gerenciador_produto/gerenciar_produtos.php';
$produtos = buscarProdutosPorCategoria($_GET['categoria']);
?>
<html>
    <?php include_once '../../dados/head.php'; ?>
    <body>
        <?php include_once '../../dados/cabecalho.php'; ?>
        <article class="conteudo">
            <nav>
                <a href="#">Home</a> > <a href="#">...</a>
            </nav>
            <ul> 
                <?php foreach ($produtos as $produto) { ?>
                    <li>
                        <figure>
                            <a href="../produto/pagina_venda.php?id=<?php echo $produto['id']; ?>">
                                <img src="<?php echo $produto['imagem']; ?>">
                                <figcaption>
                                    <?php echo substr($produto['descricao'], 0, 80); ?> <b>....</b>
                                    <p>R$: <?php echo $produto['valor']; ?></p>
                                </figcaption>
                            </a>
                            <input type="submit" value="Adicionar no carrinho">
                        </figure>
                    s</li>
                <?php } ?>
            </ul>
        </article>
    </body>
</html>