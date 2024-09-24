<?php
class UserController 
{
    //Função para registrar um novo usuario
    public function register(){
        //Verifique se a requisição HTTP é do tipo POST
        if($_SERVER['REQUEST_METHOD']== 'POST'){
            //Coleta dados enviados e armazena em um array
            $data = [
                'nome' => $_POST['nome'],
                'email' => $_POST['email'],
                'senha' => password_hash($_POST['senha'], PASSWORD_DEFAULT), //Criptografa a senha
                'perfil' => $_POST['perfil']
            ];

            //chama o metodo create do Model User para criar um novo usuario no BD
            User::create($data);
            header('Location: index.php');
        }else{
            include 'views/register.php';
        }
    }
}

?>