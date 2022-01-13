<?php

class CadastroDAO{
    
    function adiciona(Conexao $conexao, CadastroModel $cadastroModel) {

      $unic = "SELECT * FROM usuarios WHERE email = '{$cadastroModel->getEmail()}'";
        
      $exec = mysqli_query($conexao->conecta(), $unic);

      if(mysqli_num_rows($exec) > 0) {
        
        header("Location: ../novoUsuario.php?codMsg=001");
      } else {
        $query = "INSERT INTO usuarios (nome, email, senha) VALUES ('{$cadastroModel->getNome()}', 
        '{$cadastroModel->getEmail()}', '{$cadastroModel->getSenha()}')";    
        mysqli_query($conexao->conecta(), $query);
      }

       
    }

    function login(Conexao $conexao, CadastroModel $cadastroModel) {
     
      $unic = "SELECT id, nome FROM usuarios WHERE email = '{$cadastroModel->getEmail()}' 
      AND senha = '{$cadastroModel->getSenha()}' LIMIT 1";

      $exec = mysqli_query($conexao->conecta(), $unic);
      
      //retorna o dado
      $usuario = mysqli_fetch_object($exec);
      //atribui o valor do campo da tabela na variável.
      $nome = $usuario->nome;

      if (mysqli_num_rows($exec) == 1) {

        $_SESSION['verificaUsuarioLogado'] = true;
        $_SESSION['idLogado'] = $cadastroModel->getId();
        $_SESSION['nomeUsuarioLogado'] = $nome;

        header("Location: ../main.php");

      }else {
        //Usuario ou senha incorretos
        header("Location: ../index.php?codMsg=002");
        //echo 'usuario ou senha incorreta';
      }
    

    }

}

?>