<?php

include_once __DIR__ . '/../../conexao/con.php';

//funcao para buscar noticias
function buscarProdutos() {
    //metodo para buscar noticas
    $sql = "SELECT  * FROM ecommerce.produto";
    //retorna resultados da busca
    return pesquisar($sql);
}

function buscarProduto($id) {
    $buscar = "SELECT * FROM ecommerce.produto where id = $id";
    $produto = pesquisar($buscar);
    return $produto[0];
}

function buscarCategorias() {
    $sql = "SELECT  * FROM ecommerce.categoria";
    //retorna resultados da busca
    return pesquisar($sql);
}

function buscarProdutosPorCategoria($categoria) {
    //metodo para buscar noticas
    $sql = "SELECT * FROM ecommerce.produto where categoria_id = $categoria order by id desc limit 18";
    //retorna resultados da busca
    return pesquisar($sql);
}

function buscarProdutoPorPesquisa($pesquisa) {
    // manchete passado no pesquisa nao esta correto pois o nome do formulario de pesquisa era "pesquisa"
    $sql = "select * from ecommerce.produto where nome like '%{$pesquisa}%' or descricao like '%{$pesquisa}%'";
    return pesquisar($sql);
}

function buscarProdutosVitrine() {
    //metodo para buscar noticas
    $sql = "SELECT  * FROM ecommerce.produto where vitrine = 1 order by id desc limit 18 ";
    //retorna resultados da busca
    return pesquisar($sql);
}