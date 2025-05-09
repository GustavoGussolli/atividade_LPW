<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="container">

        <br><br>
        <h1>Cadastro de jogos</h1>
        <br><br>

        <form action="card_cadastrado.php" method="post" class="mb-3">

            <input type="text" class="form-control" placeholder="Insira o nome do jogo" name="nome" required>
            <br><br>
            <input type="text" class="form-control" placeholder="Insira o genero do jogo" name="genero" required>
            <br><br>
            <input type="text" class="form-control" placeholder="Insira a plataforma do jogo" name="plataforma" required>
            <br><br>
            <input type="text" class="form-control" placeholder="Insira a desenvolvedora do jogo" name="desenvolvedora" required>
            <br><br>
            <input type="number" class="form-control" placeholder="Insira o ano do Jogo" name="ano" required>
            <br><br>
            <input type="text" class="form-control" placeholder="Insira o link da capa do jogo" name="capa" required>
            <br><br>
            <select name="classIndi" class="form-control" required>
                <option value="">Selecione a classificação de Idade</option>
                <option value="L">Livre</option>
                <option value="14">14 anos</option>
                <option value="16">16 anos</option>
                <option value="18">18 anos</option>
            </select>
            <br><br>
            <button type="submit" class="btn" id="botao">Cadastrar</button>
            <br><br>

        </form>

    </div>

</body>

</html>