<?php

include_once '../../conexao/con.php';

//funcao para buscar noticias
function buscarProdutos() {
    //metodo para buscar noticas
    $sql = "SELECT  * FROM ecommerce.produto";
    //retorna resultados da busca
    return pesquisar($sql);
}

function buscarProdutosPorCategoria($categoria) {
    //metodo para buscar noticas
    $sql = "SELECT  * FROM ecommerce.produto where categoria = $categoria order by id desc limit 18 ";
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
