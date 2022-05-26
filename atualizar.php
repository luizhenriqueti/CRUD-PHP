<?php
require_once('conexao.php');

$id = (int) $_GET['id'];

if (isset($_GET['id'])) {
    $id = (int) $_GET['id'];
    $sql = $pdo->prepare('SELECT * FROM contato WHERE id = (?)');
    $sql->execute(array($id));
    $fetchPessoa = $sql->fetch(PDO::FETCH_ASSOC);
 
}

if (isset($_POST['nome'])) {
    $nome = $_POST['nome'];

    $sql = $pdo->prepare('UPDATE contato SET nome = (?) WHERE id = (?)');
    $sql->execute(array($nome, $id));
    echo 'atualizado com sucesso';

    header('Location: atualizar.php?id='.$id);
}


?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Update</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="content">

        <h1>CRUD PHP</h1>

        <button type="button" class="btn btn-secondary">
            <a href="listar.php" class="novo">Voltar</a>
        </button>

        <form action="" method="post">
            <div class="mb-3">
                <label for="nome" class="form-label">nome</label>
                <input type="text" class="form-control" id="nome" name="nome" autocomplete="off" value="<?= $fetchPessoa['nome'] ?>">
            </div>
            <button type="submit" class="btn btn-primary">Atualizar</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>