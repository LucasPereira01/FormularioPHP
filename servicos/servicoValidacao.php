<?php

function validaNome(string $nome): bool
{

    if (empty($nome)) {
       setarMensagemErro('O nome não póde ser vazio');
        return false;
    } else if (strlen($nome) < 3) {
        setarMensagemErro ('O nome deve conter mais de  3 caractéres');
        return false;
    } else if (strlen($nome) > 40) {
        setarMensagemErro ('Nome Execede o Tamanho. Max 40 Caractéres');
        return false;
    }
    return true;
}

function validaIdade(string $idade): bool
{
    if (!is_numeric($idade)) {
     setarMensagemErro('Informe um numero para Idade') ;
        return false;
    }
    return true;
}

