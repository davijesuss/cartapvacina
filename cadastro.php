<?php
 include './index.php';
ConexaoPDO1();
session_start();

$nome=$_POST["nome"];
$cpf=$_POST["cpf"];
$email=$_POST["email"];
$curso=$_POST["curso"];
$periodo=$_POST["periodo"];
$turno=$_POST["turno"];
$vacina=$_POST["vacina"];


$stmt2 = $conexao_pdo->prepare( "SELECT * FROM  ct_vacina WHERE  nome = '{$_POST ['nome']}' AND cpf = '{$_POST ['cpf']}' AND  email = '{$_POST ['email']}' 
curso = '{$_POST ['curso']}' perido = '{$_POST ['periodo']}' turno = '{$_POST ['turno']}' vacina = '{$_POST ['turno']}'");

$stmt2->execute();
if($stmt2->rowCount()>0){
    $id = $stmt2->fetchAll(PDO::FETCH_COLUMN, 0);
    $_SESSION["ct_vacina"]=$id[0];
     header("location:index.php");
 }else{
     echo '<script>alert("Credenciais não encontradas")</script>';
 } 




?>
