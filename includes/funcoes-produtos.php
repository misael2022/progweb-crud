<?php
// funcoes-produtos.php

require "conecta.php";

function lerUmProdutos($conexao){
    $sql = "SELECT produtos.id, produtos.nome AS produtos, produtos.quantidade, produtos.preco, produtos.descricao, fabricante.nome AS fabricante FROM produtos INNER JOIN fabricantes
    ON produtos.fabricante_id = fabricantes.id ORDER BY produto";

    $resultado = mysqli_query($conexao, $sql) or die(mysqli_error($conexao));

    $produtos = [];
    
    while( $produto = mysqli_fetch_assoc($resultado) ){
        array_push( $produtos, $produto );
    }

    return $produtos;    
}

function inserirProduto($conexao, $nome, $preco, $quantidade, $descricao, $fabricanteId){
    $sql = "INSERT INTO produtos(nome, preco, quantidade, descricao, fabricante_id) VALUE('$nome', '$preco', '$quantidade', '$descricao', $fabricanteId)";
    
    mysqli_query($conexao, $sql) or die(mysqli_error($conexao));
}

function lerUmFabricante($conexao, $id){
    // Montagem do comando SQL com o parâmetro id
    $sql = "SELECT id, nome, preco, quantidade, descricao, fabricante_id FROM produtos WHERE id = $id";
    
    // Execução do comando e armazenamento do resultado
    $resultado = mysqli_query($conexao, $sql) 
                or die(mysqli_error($conexao));

    // Retornando para fora da função o resultado como array assoc.
    return mysqli_fetch_assoc($resultado);
} // final lerUmProduto




function atualizarProduto($conexao, $id, $nome, $preco, $quantidade, $descricao, $fabId){
    $sql = "UPDATE produtos SET nome = '$nome', preco = $preco, quantidade = $quantidade, descricao = '$descricao',
    fabricante_id = $fabId
    WHERE id = $id";
    mysqli_query($conexao, $sql) or die(mysqli_error($conexao));
} // final atualizarFabricante


function excluirProduto ($conexao, $id) {
    $sql = "DELETE FROM fabricantes WHERE id = $id";
    mysqli_query($conexao, $sql) or die(mysqli_error($conexao));
}


