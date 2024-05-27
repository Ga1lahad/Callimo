<?php
session_start();
$_SESSION['tela'] = 'login';
require '../autoload.php';
if (!empty($_POST)) {
    $cpf = $_POST["cpf"];
    $senha = $_POST["pass"];
    $senha = hash("sha256", $senha, false);
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../utilitario/css/style.css">

    <title>Menu Inicia</title>
</head>

<body>
    <?php
    include "nav.php"
    ?>
    <div class="centralizado">
        <form id="formulario" class="login" method="POST">
            <label class="formulario" for="cpf">CPF</label>
            <input name="cpf" id="cpf" type="text" maxlength="14">
            <label class="formulario" for="pass">Senha</label>
            <input name="pass" id="pass" type="text">
            <br>
            <input type="submit" value="Fazer Login">
            <a class="formulario" href="Cadastro.php">Fazer Cadastro</a>
            <a class="formulario" href="">Esqueceu a senha</a>
        </form>

    </div>
</body>
<script src="../utilitario/javascript/login.js"></script>

</html>