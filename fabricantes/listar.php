<?php
require "../includes/funcoes-fabricantes.php";
$listaDeFabricantes = lerFabricantes($conexao);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title> Fabricantes | SELECT - CRUD com PHP e MySQL </title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
<!--
**Mudar o estilo, estara sobre screvendo
<style>
    .btn-primary {
        background-color: aquamarine;
    }
</style> -->
</head>
<body>

<nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="http://localhost/progweb-crud/index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://localhost/progweb-crud/produtos/listar.php">Produtos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://localhost/progweb-crud/fabricantes/listar.php">Fabricantes</a>
      </li>
    </ul>
  </div>
</nav>

<div class="container">
    <h1>Fabricantes | SELECT -
    <a href="../index.php">Home</a> </h1>
</div>
      

<div class="container text-center">
    
    <h2>Lendo e carregando todos os fabricantes</h2>
    <p><a class="btn btn-warning btn-lg" href="inserir.php">Inserir</a></p>    

    <table class="table table-striped">
        <caption> Lista de Fabricantes </caption>
        <thead class="thead-dark" >
            <tr>
                <th>Nome</th>
                <th>Opera????o</th>
            </tr>
        </thead>
                
        <tbody>

<?php 
$contador = 1;
foreach( $listaDeFabricantes as $fabricante ){ ?>        
            <tr>
                <td> <?=$contador.": ". $fabricante["nome"]?> </td>
                <td> 
<a class="btn btn-success" href="atualizar.php?id=<?=$fabricante["id"]?>">Atualizar</a> 
- <a class="btn btn-danger" href="excluir.php?id=<?=$fabricante["id"]?>">Excluir</a>
                </td>
            </tr> 
<?php 
$contador++;
} 

require "../includes/desconecta.php"; // opcional
?>

        </tbody>

    </table>
 
</div>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

</body>
</html>