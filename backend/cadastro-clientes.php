<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include('../includes/conexao.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') { /* verificando se o método usado na requisição foi o POST */
    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    $email = $_POST['email'];
    $cidade = $_POST['cidade'];

    // prepara a consulta (corrigido com aspas)
    $sql = "INSERT INTO clientes (nome, idade, email, cidade) VALUES ('$nome', '$idade', '$email', '$cidade')";

    if ($conn->query($sql) === TRUE) {
        echo "Cadastro realizado com sucesso!";
        header("../frontend/home");
    } else {
        echo "Erro ao cadastrar! " . $conn->error;
    }
}
?>
