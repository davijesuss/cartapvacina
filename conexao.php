<?php

$hostname = '127.0.0.1';
$bancodedados = 'cartaovacina';
$usuario = 'root';
$senha = '';

function ConexaoPDO1(){
    global $conexao_pdo; 
    $hostname = '127.0.0.1';
    $bancodedados = 'cartaovacina';
    $usuario = 'root';
    $senha = '';
    $config = "pgsql: host = $hostname; user = $usuario; password = $senha dbname = $bancodedados ";

     try{
             $conexao_pdo = new PDO($config);
        }catch(PDOException $e){
                echo $e->getMessage();
    }
}

?>
