<?php
require_once('conexao.php');



if (isset($_GET['id'])) {
    $id = (int) $_GET['id'];
    $sql = $pdo->prepare('SELECT * FROM contato WHERE id = (?)');
    $sql->execute(array($id));
    $fetchPessoa = $sql->fetch(PDO::FETCH_ASSOC);
}


?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Read</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="content">

        <h1>CRUD PHP</h1>

        <div class="jumbotron">
            <h1 class="display-4"><?=$fetchPessoa['nome']?></h1>
            <p class="lead">
                <strong>ID: </strong><?=$fetchPessoa['id']?>
            </p>
        </div>
        
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>