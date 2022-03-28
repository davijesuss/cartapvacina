<?php

$hostname = '127.0.0.1';
$bancodedados = 'cartaovacina';
$usuario = 'root';
$senha = '';


$conexao = mysqli_connect($hostname, $usuario, $senha, $bancodedados);

if(!$conexao) {
  die("Houve um erro".mysqli_connect_error());
}



?>
