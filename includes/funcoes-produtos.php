<?php
// funcoes-produtos.php

require "conecta.php";

function lerProdutos($conexao){
    $sql = "SELECT produtos.id, produtos.nome AS produtos, produtos.quantidade, produtos.preco, produtos.descricao, fabricantes.nome AS fabricante FROM produtos INNER JOIN fabricantes
    ON produtos.fabricante_id = fabricante.id ORDER BY produto";

    $resultado = mysqli_query($conexao, $sql) or die(mysqli_error($conexao));

    $produtos = [];
    
    while( $produto = mysqli_fetch_assoc($resultado) ){
        array_push( $produtos, $produto );
    }

    return $produtos;    
}

function inserirProduto($conexao, $nome){
    
    mysqli_query($conexao, $sql) or die(mysqli_error($conexao));
}

function lerUmFabricante($conexao, $id){
    // Montagem do comando SQL com o parâmetro id
    $sql = "SELECT id, nome FROM fabricantes WHERE id = $id";
    
    // Execução do comando e armazenamento do resultado
    $resultado = mysqli_query($conexao, $sql) 
                or die(mysqli_error($conexao));

    // Retornando para fora da função o resultado como array assoc.
    return mysqli_fetch_assoc($resultado);
} // final lerUmFabricante




function atualizarFabricante($conexao, $id, $nome){
    $sql = "UPDATE fabricantes SET nome = '$nome' WHERE id = $id";
    mysqli_query($conexao, $sql) or die(mysqli_error($conexao));
} // final atualizarFabricante


function excluirFabricante($conexao, $id) {
    $sql = "DELETE FROM fabricantes WHERE id = $id";
    mysqli_query($conexao, $sql) or die(mysqli_error($conexao));
}


