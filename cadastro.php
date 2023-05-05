<?php


    session_start();
    $nome = $_POST["nome"];
    $cpf = $_POST["cpf"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    $senha2 = $_POST["senha2"];
    $erro = FALSE;
    $_SESSION['pessoa'] = $nome;

    if(!strstr($email, '@')){
        echo "A senha deve conter @ <br><br>";
        echo "<a href='cadastro.html'>Voltar para o Cadastro</a> <br><br>";
        $erro = TRUE;
    }
    if(empty($nome)){
        echo "Digite o <strong> nome... </strong> <br><br>";
        echo "<a href='cadastro.html'>Voltar para o Cadastro</a> <br><br>";
        $erro = TRUE;
    }
    if(empty($cpf)){
        echo "Digite o <strong> CPF... </strong> <br><br>";
        echo "<a href='cadastro.html'>Voltar para o Cadastro</a> <br><br>";
        $erro = TRUE;
    }
    if(empty($email)){
        echo "Digite o <strong> email... </strong> <br><br>";
        echo "<a href='cadastro.html'>Voltar para o Cadastro</a> <br><br>";
        $erro = TRUE;
    }
    if(!strstr($senha, $senha2)){
        echo "As senhas devem ser iguais!";
        echo "<a href='cadastro.html'>Voltar para o Cadastro</a> <br><br>";
        $erro = TRUE;
    }
    if(strstr($senha, ' ')){
        echo "A senha nao pode ter espaço...<br><br>";
        echo "<a href='cadastro.html'>Voltar para o Cadastro</a> <br><br>";
        $erro = TRUE;
    }
    if(empty($senha)){
        echo "Digite a senha... <br><br>";
        echo "<a href='cadastro.html'>Voltar para o Cadastro</a> <br><br>";
        $erro = TRUE;
    }
    if(!$erro){
        include "conexao.php";
    //instanciar objeto
    //url, nome do banco, user, senha
    //C:\xampp\phpMyAdmin\config.inc
    //1- 
    $sql = "INSERT INTO cadastro (nome, cpf, email, senha)
            VALUES (:nome, :cpf, :email, :senha)";

    //stmt = statement
        $stmt = $conexao->prepare($sql);

        $stmt->bindValue(':nome', $nome);
        $stmt->bindValue(':email', $email);
        $stmt->bindValue(':cpf', $cpf);
        $stmt->bindValue(':senha', $senha);
        $stmt->execute();
        header("Location: login.html");
    }
    ?>
</body>
