<?php

class Conexao{

private $host = "localhost";
private $username = "root";
private $password = "";
private $database = "login";


public function conecta() {
    $conexao = new mysqli($this->host, $this->username, $this->password, $this->database);
    return $conexao;
}

}
?>
