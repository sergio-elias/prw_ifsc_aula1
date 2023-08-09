<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Fundamentos do PHP </title>
  <link rel="stylesheet" href="formata-formulario.css"> 
</head> 

<body> 
 <h1> Fundamentos do PHP - listaL1 - exercicio1 </h1>

 <?php

$nomeDoAluno = $_POST["nome-do-aluno"];
$nota1 = $_POST["nota1"];
$peso1 = $_POST["peso1"];
$nota2 = $_POST["nota2"];
$peso2 = $_POST["peso2"];

// calculando a média

$media = (nota1 * peso1 + nota2 * peso2) / ($peso1 + $peso2);

// saída, mostrando o resultado da  média

echo "<p> Caro(a) aluno(a), de acordo com os dados fornecidos, sua média na unidade Programação Web é $media </span> </p>;"

 ?>

 </body>
 </html>