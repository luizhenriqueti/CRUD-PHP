<?php
require_once('conexao.php');

if (isset($_POST['nome'])) {
    $nome = $_POST['nome'];

    $sql = $pdo->prepare('INSERT INTO contato (nome) VALUES (?)');
    $sql->execute(array($nome));

    echo 'Pessoa cadastrada com sucesso';
}

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Create</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<link rel="stylesheet" href="style.css">

<body>
    <div class="content">

        <h1>CRUD PHP</h1>

        <button type="button" class="btn btn-secondary">
            <a href="listar.php" class="novo">Voltar</a>
        </button>

        <form action="" method="post">
            <div class="mb-3">
                <label for="nome" class="form-label">nome</label>
                <input type="text" class="form-control" id="nome" name="nome" autocomplete="off">
            </div>
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>