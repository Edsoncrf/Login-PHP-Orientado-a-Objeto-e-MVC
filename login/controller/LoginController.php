<?php  
session_start();
require_once ('../model/CadastroModel.php');
require_once ('../DAO/CadastroDAO.php');
require_once ('Conexao.php');


class LoginController {

    public function logar() {

        

  if (isset($_POST['email']) && isset($_POST['senha'])) {
        $email = $_POST['email'];
        $senha = md5($_POST['senha']);

        $conexao = new Conexao();

        $cadastro = new CadastroModel();

        $cadastro->setEmail($email);
        $cadastro->setSenha($senha);

       
        $cadastroDAO = new CadastroDAO();
        $cadastroDAO->login($conexao, $cadastro);
        
    }
}
    
   
}
    $controller = new LoginController();
    $controller->logar();




?>