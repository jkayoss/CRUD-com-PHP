<?php 

class Usuarios{
    public function getUsuarios() {
        require("connection.php");
        $conexao = new Conexao;
        $link = $conexao->getConexao();
        $sql = "SELECT * FROM usuarios";
        $result = mysqli_query($link, $sql);
        return $result;
    }
}

?>