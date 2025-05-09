<?php
require_once("modelo/Card.php");

$nome = $_POST['nome'];
$genero = $_POST['genero'];
$plataforma = $_POST['plataforma'];
$desenvolvedora = $_POST['desenvolvedora'];
$ano = $_POST['ano'];
$capa = $_POST['capa'];
$classificacao = $_POST['classIndi'];


$jogo = new Card($nome, $genero, $plataforma, $desenvolvedora, $ano, $classificacao, $capa);

echo " <body style='display: flex; flex-direction: column; align-items: center; padding: 10px;'>
        <h1 style='color: #2A4759; font-size: 40px;'>Jogo Cadastrado com Sucesso</h1>
        <div style='border: 1px solid #000; width: 300px; padding: 10px; color: #2A4759; background-color: #EEEEEE; border-radius: 10px;'>
            <p>Nome: " . $jogo->getNome() . "</p>
            <p>Gênero: " . $jogo->getGenero() . "</p>
            <p>Plataforma: " . $jogo->getPlataforma() . "</p>
            <p>Desenvolvedora: " . $jogo->getDesenvolvedora() . "</p>
            <p>Ano: " . $jogo->getAno() . "</p>
            <p>Classificação: " . $jogo->getClassificacao() . "</p>
            <img style='width: 250px; height: 250px; border-radius: 25px; padding: 10px' src='" . $jogo->getCapa() . "' alt='Capa do Jogo'>
        </div> 
    </body>";
