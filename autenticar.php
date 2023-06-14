<?php
//0 - criar sessão
session_start();

//1 - importar conexao bd
include "conexao.php";

//2 - receber variavel do input do login
$cpf_digitado   = $_POST["cpf"];
$senha_digitada = $_POST["senha"];

//3 - Query busca de dados
$buscar_cadastro = "SELECT * FROM usuarios WHERE cpf = '$cpf_digitado'";

//4 - statement prepara a query
$stmt = $conexao->prepare($buscar_cadastro);

//5 - executar statement
$stmt->execute();

//6 - receber os dados do statement
$receber_cadastros = $stmt->fetch(PDO::FETCH_ASSOC);

$id    = $receber_cadastros['id'];
$cpf   = $receber_cadastros['cpf'];
$senha = $receber_cadastros['senha'];
$nome  = $receber_cadastros['nome'];
$email = $receber_cadastros['email'];

$usuario = [
    'id'    => $id,
    'cpf'   => $cpf,
    'nome'  => $nome,
    'email' => $email,
];



if($cpf == $cpf_digitado){
    if($senha == $senha_digitada){
        $_SESSION["usuario_logado"] = $cpf_digitado;
        header("location: index.php");
    } else {
        header("Location: login.html?falhou=true");
    }//fim else
} else {
    header("Location: login.html?falhou=true");
}//fim else
?>