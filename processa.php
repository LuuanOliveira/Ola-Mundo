<?php

include_once("conexao.php"); 
$db = new Connection();
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$nascimento = filter_input(INPUT_POST, 'nasc', FILTER_SANITIZE_STRING);
$endereco = filter_input(INPUT_POST, 'end', FILTER_SANITIZE_STRING);
$numero = filter_input(INPUT_POST, 'num', FILTER_SANITIZE_STRING);
$senha = filter_input(INPUT_POST, 'pin', FILTER_SANITIZE_STRING);
$estado = filter_input(INPUT_POST, 'estado', FILTER_SANITIZE_STRING);
echo "Nome: $nome <br>";

$conn = $db->getConnection();
if($conn->connect_error){
    echo "ERROR: " . $conn->connect_error;
}

$user = "INSERT INTO usuario (nome, cpf, email, nascimento, endereco, numero, senha, estado)
VALUES ('$nome', '$cpf', '$email', '$nascimento', '$endereco', '$numero', '$senha', '$estado')";
$result = mysqli_query($conn, $user);

//Inseriu com sucesso 
echo $response = mysqli_insert_id($conn);

if (mysqli_insert_id($conn)){
    header("Location: sucesso.html");
    exit();
}
else{
    header("Location: erro.html");
    exit();
}
