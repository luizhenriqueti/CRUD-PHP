<?php
require_once('conexao.php');

$sql = $pdo->query('SELECT * FROM contato');
$sql->execute();
$fetchPessoas = $sql->fetchAll(PDO::FETCH_ASSOC);

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Listar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="content">

        <h1>Hello, world!</h1>

        <button type="button" class="btn btn-primary"><a href="novo.php" class="novo">Novo</a></button>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NOME</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($fetchPessoas as $pessoa) : ?>
                    <tr>
                        <td><?= $pessoa['id'] ?></td>
                        <td><?= $pessoa['nome'] ?></td>
                        <td>
                            <button type="button" class="btn btn-info">
                                <a href="visualizar.php?id=<?=$pessoa['id']?>" class="novo">Visualizar</a>
                            </button>
                            <button type="button" class="btn btn-primary">
                                <a href="atualizar.php?id=<?=$pessoa['id']?>" class="novo">Editar</a>
                            </button>
                            <button type="button" class="btn btn-danger">
                                <a href="deletar.php?id=<?=$pessoa['id']?>" class="novo">Deletar</a>
                            </button>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>