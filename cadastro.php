<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    session_start();
    $nome = $_POST["nome"];
    $cpf = $_POST["cpf"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    $senha2 = $_POST["senha2"];
    $erro = FALSE;
    $_SESSION['pessoa'] = $nome;

    if(empty($nome)){
        echo "Digite o <strong> nome </strong> <br><br>";
        $erro = TRUE;
    }
    if(empty($cpf)){
        echo "Digite o <strong> CPF </strong> <br><br>";
        $erro = TRUE;
    }
    if(empty($email)){
        echo "Digite o <strong> email </strong> <br><br>";
        $erro = TRUE;
    }
    if(!strstr($senha, $senha2)){
        echo "As senhas devem ser iguais!";
        $erro = TRUE;
    }
    if(strstr($senha, ' ')){
        echo "A senha nao pode ter espaço<br><br>";
        $erro = TRUE;
    }
    if(empty($senha)){
        echo "Digite a senha <br><br>";
        $erro = TRUE;
    }
    if(!$erro){
        echo "Tudo certo!<br>";
        echo "Cadastro realizado com sucesso<br>";
        echo "<a href='login.html'>Continuar para o Login</a>";
    }
    ?>
</body>
</html>