<?php
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
    <link rel="stylesheet" href="utilitario/css/style.css">

    <title>Menu Inicia</title>
</head>

<body class="corpo-principal">
    <?php require "utilitario/components/sidebar.html"; ?>
    <?php require "utilitario/components/navbar.html"; ?>
    <div>
        <form id="formulario" class="login" method="POST">
            <label class="login" for="cpf">CPF</label>
            <input name="cpf" id="cpf" type="text" maxlength="14">
            <label class="login" for="pass">Senha</label>
            <input name="pass" id="pass" type="text">
            <br>
            <input type="submit" value="Fazer Login">
            <a class="login" href="">Fazer Cadastro</a>
            <a class="login" href="">Esqueceu a senha</a>
        </form>

    </div>
</body>
<script src="utilitario/javascript/Index.js"></script>

</html>