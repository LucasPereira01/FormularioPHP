<?php
session_start();

$categorias = ['Infantil', 'Adolecente', 'Adulto', 'Idoso'];
$nome = $_POST['nome'];
$idade = $_POST['idade'];

if (empty($nome)) {
    $_SESSION['menssagem de erro'] = "O nome não póde ser vazio";
    header("location: intro.php");
    return;
}
else if (strlen($nome) < 3) {
    $_SESSION['menssagem de erro'] = "O nome deve conter mais de  3 caractéres";
    header("location: intro.php");
    return;
}
else if (strlen($nome) > 40) {
    $_SESSION['menssagem de erro'] = "Nome Execede o Tamanho. Max 40 Caractéres";
    header("location: intro.php");
    return;
}

else if (!is_numeric($idade)) {
    $_SESSION['menssagem de erro'] = "Informe um numero para Idade";
    header("location: intro.php");
    return;
}

if ($idade >= 0 && $idade <= 12) {
    for ($i = 0; $i <= count($categorias); $i++) {
        if ($categorias[$i] == "Infantil"){
            $_SESSION['menssagem de sucesso'] = "O Nadador " . $nome . " compete na categoria Infatil";
            header("location: intro.php");
            return;
        }
    }
} else if ($idade >= 13 && $idade <= 18) {
    for ($i = 0; $i <= count($categorias); $i++) {
        if ($categorias[$i] == "Adolecente"){
            $_SESSION['menssagem de sucesso'] = "O Nadador " . $nome . " compete na categoria Adolecente";
            header("location: intro.php");
            return;
        }
    }
} else if ($idade >= 18 && $idade <= 65) {
    for ($i = 0; $i <= count($categorias); $i++) {
        if ($categorias[$i] == "Adulto"){
            $_SESSION['menssagem de sucesso'] =  "O Nadador " . $nome . " compete na categoria Adulto";
            header("location: intro.php");
            return;
        }
    }
} else {
    for ($i = 0; $i <= count($categorias); $i++) {
        if ($categorias[$i] == "Idoso"){
            $_SESSION['menssagem de sucesso'] = "O Nadador " . $nome . " compete na categoria Idoso";
            header("location: intro.php");
            return;
        }
    }
}
