<?php 

class Conexao{

    private $host = 'localhost';
    private $user = 'root';
    private $password = '';
    private $database = 'cadastro';

    public function getConexao() {
        $connection = mysqli_connect($this->host, $this->user, $this->password, $this->database);
        return $connection;
    }

}

?>