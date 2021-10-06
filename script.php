<?php
$categorias = ['Infantil', 'Adolecente', 'Adulto', 'Idoso'];
$nome = $_POST['nome'];
$idade = $_POST['idade'];

if ($idade >= 0 && $idade <= 12) {
    for ($i = 0; $i <= count($categorias); $i++) {
        if ($categorias[$i] == "Infantil")
            echo "O nadador " . $nome . " compete na categoria Infatil";
    }
} else if ($idade >= 13 && $idade <= 18) {
    for ($i = 0; $i <= count($categorias); $i++) {
        if ($categorias[$i] == "Adolecente")
            echo "O nadador " . $nome . " compete na categoria Adolecente";
    }

} else if ($idade >= 18 && $idade <= 65) {
    for ($i = 0; $i <= count($categorias); $i++) {
        if ($categorias[$i] == "Adulto")
            echo "O nadador " . $nome . " compete na categoria Adulto";
    }
} else {
    for ($i = 0; $i <= count($categorias); $i++) {
        if ($categorias[$i] == "Idoso")
            echo "O nadador " . $nome . " compete na categoria Idoso";
    }
}
