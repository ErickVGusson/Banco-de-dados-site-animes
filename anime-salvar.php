<?php

$servidor = '127.0.0.1';
$banco = 'bd_animes'; //Nome do meu banco
$usuarioBD = 'root';
$senha = '';

$conexao = mysqli_connect($servidor, $usuarioBD, $senha, $banco);

//Campos de cadastro
$titulo = $_POST['titulo'];
$categoria = $_POST['categoria'];
$qtd = $_POST['qtd'];
$descricao = $_POST['descricao'];

//Inserção no banco
$sqlGravar = "insert into tb_cadanimes(titulo, categoria, qtd, descricao) values ('$titulo', '$categoria', $qtd, '$descricao')";
mysqli_query($conexao, $sqlGravar);

mysqli_close($conexao);

header("location: index.php");

?>