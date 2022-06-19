<?php 

require("connection.php");
$conexao = new Conexao;
$link = $conexao->getConexao();

$id = $_POST['id'];
$nome = $_POST['nome'];
$login = $_POST['login'];
$senha = $_POST['senha'];
$tipo = $_POST['tipo'];
$status = $_POST['status'];

if($id != '') {
    $sql = "UPDATE `usuarios` SET `nome`='$nome',`login`='$login',`senha`='$senha',`tipo`='$tipo',`situacao`='$status' WHERE id='$id'";
    mysqli_query($link, $sql);
    header('Location: index.php');
} else {
    $sql = "INSERT INTO `usuarios`(`nome`, `login`, `senha`, `tipo`, `situacao`) VALUES ('$nome', '$login', '$senha', '$tipo', '$status')";
    mysqli_query($link, $sql);
    header('Location: index.php');
}

?>