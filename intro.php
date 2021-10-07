<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Inscrição</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
<div class="formulario">

    <h1>Formulario para Inscrição de Competidores</h1>
    <form action="script.php" method="post">
        <?php
        $menssagemDeSucesso = isset($_SESSION['menssagem de sucesso']) ?  $_SESSION['menssagem de sucesso'] : '';
        if (!empty($menssagemDeSucesso)) {
            echo $menssagemDeSucesso;
        } else {
            $menssagemDeErro = isset($_SESSION['menssagem de erro']) ?  $_SESSION['menssagem de erro'] : '';
            if (!empty($menssagemDeErro)) {
                echo $menssagemDeErro;
            }
        }

        ?>
        <p>Seu Nome <input type="text" name="nome"></p>
        <p>Sua Idade <input type="text" name="idade"></p>
        <p>Enviar Dados do Competidor</p>
        <input class="botao" type="submit">

    </form>

</div>
    

</body>

</html>