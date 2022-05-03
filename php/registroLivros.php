<?php

$titulo = $_POST['titulo'];
$autorPrincipal = $_POST['autorPrincipal'];
$dataDeRegistro = $_POST['dataDeRegistro'];
$editora = $_POST['editora'];

$opcoes = array();
$opcoes = $_POST['opcoes'];



echo "<h1 style= 'text-align: center; padding-top: 10vh;'>Resumo do Registro</h1>";
echo "<p style= 'text-align: center;'>Você Registrou o livro:</p>";
echo "<p style= 'text-align: center;'>Título: $titulo</p>";
echo "<p style= 'text-align: center;'>Autor: $autorPrincipal</p> ";
echo "<p style= 'text-align: center;'>Data de registro: $dataDeRegistro</p> ";
echo "<p style= 'text-align: center;'>Editora: $editora</p> ";

$classificacoes = "";

for($i = 0; $i<sizeof($opcoes); $i++) {
    $classificacoes.= $opcoes[$i].", ";
}

echo "<p style= 'text-align: center;'>Classificação: $classificacoes</p> ";





?>