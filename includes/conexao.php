<?php 
//conectar com o banco de dados
$nome_servidor = "localhost";
$nome = "root";
$senha = "";
$nome_banco = "painel_clientes";

//criar a conexão
$conn = new mysqli("$nome_servidor","$nome","$senha","$nome_banco");

//verificar a conexão
if ($conn->connect_error){
    die("A conexão falhou." . connect_error);
}

?>