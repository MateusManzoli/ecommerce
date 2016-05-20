<?php

include_once __DIR__ . '/../../conexao/con.php';

function buscarProdutos() {
    $sql = "SELECT  * FROM ecommerce.produto";
    return pesquisar($sql);
}

function buscarProduto($id) {
    $buscar = "SELECT * FROM ecommerce.produto where id = {$id}";
    $produto = pesquisar($buscar);
    return $produto[0];
}

function buscarCategorias() {
    $sql = "SELECT  * FROM ecommerce.categoria where id <= 4";
    return pesquisar($sql);
}

function buscarSubCategorias($idCategoria) {
    $sql = "SELECT  * FROM ecommerce.categoria where categoria_id = {$idCategoria}";
    return pesquisar($sql);
}

function buscarProdutosPorCategoria($categoria, $marca = null) {
    $sql = "SELECT * 
            FROM ecommerce.produto 
            where categoria_id = $categoria  ";
    if (!empty($marca)) {
        $sql.="AND marca = '{$marca}'";
    }
    $sql.=" order by id desc limit 18";
    return pesquisar($sql);
}

function buscarProdutosSubMenu($categoria) {
    $sql = "SELECT * FROM ecommerce.produto where categoria_id = $categoria order by id desc limit 18";
    return pesquisar($sql);
}

function buscarProdutoPorPesquisa($pesquisa) {
    $sql = "select * from ecommerce.produto where nome like '%{$pesquisa}%' or descricao like '%{$pesquisa}%'";
    return pesquisar($sql);
}

function buscarProdutosVitrine() {
    $sql = "SELECT  * FROM ecommerce.produto where vitrine = 1 order by id desc limit 18 ";
    return pesquisar($sql);
}
