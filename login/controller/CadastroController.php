<?php  
require_once ('../model/CadastroModel.php');
require_once ('../DAO/CadastroDAO.php');
require_once ('Conexao.php');


class CadastroController {

    

    public function insere() {
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = md5($_POST['senha']);
        $senha2 = md5($_POST['senha2']);

        $conexao = new Conexao();

        $cadastro = new CadastroModel();
        $cadastro->setNome($nome);
        $cadastro->setEmail($email);
        $cadastro->setSenha($senha);
        $cadastro->setSenha2($senha2);

        $cadastroDAO = new CadastroDAO();
        $cadastroDAO->adiciona($conexao, $cadastro);

        
    }

   
}


if ($senha = $_POST['senha'] == $senha2 = $_POST['senha2']) {

    $controller = new CadastroController();
    $controller->insere();
    //header("Location: ../index.php");
}else {
    header("Location: ../novoUsuario.php?codMsg=003");
}



?>