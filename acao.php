<?php

include_once("conexao.php");
   
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_NUMBER_FLOAT);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$nascimento = filter_input(INPUT_POST, 'nasc', FILTER_SANITIZE_NUMBER_INT);
$endereco = filter_input(INPUT_POST, 'end', FILTER_SANITIZE_STRING);
$numero = filter_input(INPUT_POST, 'num', FILTER_SANITIZE_NUMBER_INT);
$senha = filter_input(INPUT_POST, 'pin', FILTER_SANITIZE_STRING);
$estado = filter_input(INPUT_POST, 'estado', FILTER_SANITIZE_STRING);       

//preparar  para receber conexao com colunas e valores
$preparar = $conn->prepare("insert into usuarios(nome, cpf, email, nascimento, endereco, numero, senha, estado) values(?,?,?,?,?,?,?,?)");

//joga s valores para o metodo de preparacao 
$preparar->bind_param("ssssssss",$nome, $cpf, $email, $nascimento, $endereco, $numero, $senha, $estado);

//executar todo o codigo de conexao
$preparar->execute();

if(mysqli_insert_id($conn)){
    header("Location: sucesso.html");
}
else{
    header("Location: erro.html");
}
?>