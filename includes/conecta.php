<?php

// Parametros do servidor de BD
$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "vendas_misael";

// Conecta ao servidor
$conexao = mysqli_connect($servidor, $usuario, $senha, $banco);

// Habilitando o suporte ao charset utf8
mysqli_set_charset($conexao, "utf8");

/* Teste (provisorio) */
/* if ($conexao) {
   echo "Tudo ok!";
} */