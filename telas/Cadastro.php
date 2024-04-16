<?php
session_start();
$_SESSION["tela"] = 'cadastro';
require '../autoload.php';
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../utilitario/css/style.css">
    <title>Cadastro</title>
</head>

<body>
    <?php include "nav.php"; ?>
    <div class="centralizado">
        <form id="formulario" class="formulario" method="POST">
            <label class="formulario" for="">Nome</label>
            <input class="formulario" name="nome" type="text">
            <label class="formulario" for="">Email</label>
            <input class="formulario" name="email" type="email">
            <label class="formulario" for="">CPF</label>
            <input class="formulario" name="cpf" type="text">
            <label class="formulario" for="">Telefone</label>
            <input class="formulario" name="tel" type="text">
            <label class="formulario" for="">Senha</label>
            <input class="formulario" name="senha" type="password">
            <label class="formulario" for="">Repita a senha</label>
            <input class="formulario" name="repita" type="password">
            <br><input class="formulario" name="submit" type="submit">
        </form>
    </div>
</body>

</html>