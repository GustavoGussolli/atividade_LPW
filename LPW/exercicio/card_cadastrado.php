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

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrado</title>
</head>

<body>

    <div class="container">

        <?php

        echo "<h1 style='color: #2A4759; text-align: center;'>Jogo Cadastrado com Sucesso</h1>
        <div style='border: 1px solid #000; width: 300px; padding: 10px; color: #00adee,; background-color: #EEEEEE; border-radius: 10px;'>
            <p>Nome: " . $jogo->getNome() . "</p><br>
            <p>Gênero: " . $jogo->getGenero() . "</p><br>
            <p>Plataforma: " . $jogo->getPlataforma() . "</p><br>
            <p>Desenvolvedora: " . $jogo->getDesenvolvedora() . "</p><br>
            <p>Ano: " . $jogo->getAno() . "</p><br>
            <p>Classificação: " . $jogo->getClassificacao() . "</p><br>
            <img src='" . $jogo->getCapa() . "' style='width: 100%; height: auto;' alt='Capa do Jogo'>
        </div>";

        ?>

    </div>

</body>

</html>