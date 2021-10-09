<?php


function defineCatCompetidor(string $nome, string $idade): ?string
{
    $categorias = ['Infantil', 'Adolecente', 'Adulto', 'Idoso'];

    if (validaNome($nome) && validaIdade($idade)) {
        removerMensagemErro();
        if ($idade >= 0 && $idade <= 12) {
            for ($i = 0; $i <= count($categorias); $i++) {
                if ($categorias[$i] == 'Infantil') {
                    setarMensagemSucesso('O Nadador ' . $nome . 'compete na categoria Infatil');
                    return null;
                }
            }
        } else if ($idade >= 13 && $idade < 18) {
            for ($i = 0; $i <= count($categorias); $i++) {
                if ($categorias[$i] == 'Adolecente') {
                    setarMensagemSucesso('O Nadador ' . $nome . ' compete na categoria Adolecente');
                    return null;
                }
            }
        } else if ($idade >= 18 && $idade <= 65) {
            for ($i = 0; $i <= count($categorias); $i++) {
                if ($categorias[$i] == 'Adulto') {
                    setarMensagemSucesso('O Nadador ' . $nome . ' compete na categoria Adulto');
                    return null;
                }
            }
        } else {
            for ($i = 0; $i <= count($categorias); $i++) {
                if ($categorias[$i] == 'Idoso') {
                    setarMensagemSucesso('O Nadador ' . $nome . ' compete na categoria Idoso');
                    return null;
                }
            }
        }
    } else {
        removerMensagemSucesso();
        return obterMensagemErro();
    }
}
