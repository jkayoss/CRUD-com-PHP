<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de Usuários</title>
    <link rel="stylesheet" href="./main.css">
</head>
<body>
    <main>  
        <div class="container">
            <div class="row">
                <a href="./usuario.php" class="btn btn-blue grow">Novo</a>
            </div>
            <div class="row">
                <div class="card-title">
                    <div class="name">
                        Nome
                    </div>
                    <div class="login">
                        Login
                    </div>
                    <div class="type">
                        Tipo
                    </div>
                    <div class="status">
                        Status
                    </div>
                    <div class="actions">
                        #
                    </div>
                </div>
                <?php
                    require("connection.php");
                    $conexao = new Conexao;
                    $link = $conexao->getConexao();
                    $sql = "SELECT * FROM usuarios";
                    $result = mysqli_query($link, $sql);
                    while($row = $result->fetch_assoc()) {
                ?>
                <div class="card">
                    <div class="name grow">
                        <?php echo $row['nome']; ?>
                    </div>
                    <div class="login">
                        <?php echo $row['login']; ?>
                    </div>
                    <div class="type">
                        <?php echo $row['tipo']; ?>
                    </div>
                    <div class="status <?php echo $row['situacao']; ?>">
                        <?php echo $row['situacao']; ?>
                    </div>
                    <div class="actions">
                        <a href="./usuario.php?id=<?php echo $row['id'] ?>" class="btn">
                            <img src="./icons/editar.svg" alt="">
                        </a>
                    </div>
                </div>
                <?php 
                    } 
                ?>
            </div>
        </div>
    </main>
</body>
</html>