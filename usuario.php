<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de Usuários</title>
    <link rel="stylesheet" href="./main.css">
    <?php $id = isset($_GET['id']) ? $_GET['id'] : ''; ?>
</head>
<body>
    <main>  
        <form class="container" action="./setUsuarios.php" method="post">
            <div class="row">
                <input type="hidden" name="id" value=<?php if(isset($_GET['id'])) { echo $_GET['id']; } else { echo ''; } 
                ?>>
                <?php 
                
                require("connection.php");
                $conexao = new Conexao;
                $link = $conexao->getConexao();
                $sql = "SELECT * FROM usuarios WHERE id='$id'";
                $result = mysqli_query($link, $sql);
                $row = mysqli_fetch_assoc($result);

                ?>
                <label for="nome">Nome</label>
                <input type="text" name="nome" id="nome" value=
                "<?php 
                    if(isset($row['nome'])) {
                        echo $row['nome'];
                    } else {echo '';}
                ?>" 
                required>
                <label for="login">Login</label>
                <input type="text" name="login" id="login" value=
                "<?php 
                    if(isset($row['login'])) {
                        echo $row['login'];
                    } else {echo '';}
                ?>" required>
                <label for="senha">Senha</label>
                <input type="password" name="senha" id="senha" value=
                "<?php 
                    if(isset($row['senha'])) {
                        echo $row['senha'];
                    } else {echo '';}
                ?>" required>
                <label for="tipo">Tipo</label>
                <select name="tipo" id="tipo" required>
                    <option value="">-</option>
                    <option value="administrador" 
                    <?php 
                        if(isset($row['tipo'])) {
                            if($row['tipo'] == 'administrador') {
                                echo 'selected';
                            } else {echo '';}
                        } 
                    ?>>Administrador</option>
                    <option value="usuario"
                    <?php 
                        if(isset($row['tipo'])) {
                            if($row['tipo'] == 'usuario') {
                                echo 'selected';
                            } else {echo '';}
                        } 
                    ?>>Usuario</option>
                </select>
                <label for="tipo">Status</label>
                <select name="status" id="status" required>
                    <option value="ativo"
                    <?php 
                        if(isset($row['situacao'])) {
                            if($row['situacao'] == 'ativo') {
                                echo 'selected';
                            } else {echo '';}
                        }
                    ?>>Ativo</option>
                    <option value="inativo"
                    <?php 
                        if(isset($row['situacao'])) {
                            if($row['situacao'] == 'inativo') {
                                echo 'selected';
                            } else {echo '';}
                        }
                    ?>>Inativo</option>
                </select>
            </div>
            <div class="row">
                <button type="submit" class="btn btn-blue">Cadastrar</button>
                <a href="./" class="btn btn-red">Cancelar</a>
            </div>
        </form> 
    </main>
</body>
</html>