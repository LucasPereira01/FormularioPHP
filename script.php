<?php
include ("./servicos/servicoCategoriaCompetidor.php");
include ("./servicos/servicoMensagemSessao.php");
include ("./servicos/servicoValidacao.php");


$nome = $_POST['nome'];
$idade = $_POST['idade'];


defineCatCompetidor($nome, $idade);

header("location: intro.php");