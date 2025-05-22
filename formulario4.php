<?php

    if(isset($_POST['submit']))
    {
        print_r('Usuário: ' . $_POST['usuario']);
        print_r('<br>');
        print_r('Senha: ' . $_POST['senha']);

        include_once('config_4.php');

        $usuario = $_POST['usuario'];
        $senha = $_POST['senha'];

        $result = mysqli_query($conexao, "INSERT INTO usuario(usuario, senha) 
        VALUES ('$usuario', '$senha')");
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>
<body>
<form action="formulario4.php" method="POST">
    <div class="main-login">
        <div class="left-login">
            <h1>Faça login<br>E entre para o nosso time</h1>
            <img src="astronaut-animate.svg" class="left-login-image" alt="Astronauta animação">
        </div>
        <div class="right-login">
            <div class="card-login">
                <h1>Login</h1>
                <div class="textfield">
                    <label for="usuario">Usuário</label>
                    <input type="text" name="usuario" placeholder="Usuário">
                </div>
                <div class="textfield">
                    <label for="senha">Senha</label>
                    <input type="password" name="senha" placeholder="Senha">
                </div>
                <button class="btn-login" name="submit">Login</button></a>
            </div>
        </div>
    </div>
</body>
</html>