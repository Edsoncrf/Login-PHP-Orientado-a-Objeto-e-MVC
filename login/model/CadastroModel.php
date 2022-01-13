<?php

class CadastroModel {
  private $id;
  private $nome;
  private $email;
  private $senha;
  private $senha2;
    

  function getId() {
    return $this->id;
  }

  function setId($id) {
    $this->id = $id;
  }

  function getNome() {
    return $this->nome;
  }

  function setNome($nome) {
    $this->nome = $nome;
  }

  function getEmail() {
    return $this->email;
  }

  function setEmail($email) {
    $this->email = $email;
  }

  function getSenha() {
    return $this->senha;
  }

  function setSenha($senha) {
    $this->senha = $senha;
  }

  function getSenha2() {
    return $this->senha2;
  }

  function setSenha2($senha2) {
    $this->senha2 = $senha2;
  }

}


?>