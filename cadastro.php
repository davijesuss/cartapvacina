<?php
 include('conexao.php');

$nome=$_POST["nome"];
$cpf=$_POST["cpf"];
$email=$_POST["email"];
$curso=$_POST["curso"];
$periodo=$_POST["periodo"];
$turno=$_POST["turno"];
$vacina=$_POST["vacina"];

$sql="INSERT INT ct_vacina (id_nome, nr_cpf, id_email, id_curso, id_periodo, id_turno, id_vacina) VALUES ('$nome', '$cpf', '$email', '$curso', '$periodo' , '$turno',' $vacina')";

if(mysqli_querry($conexao, $sql)){
    echo "Usuario cadastrado com sucesso";
} else{
    echo "ERRO ! " . mysqli_connect_error($conexao);
}

mysqli_close($conexao);
?>
