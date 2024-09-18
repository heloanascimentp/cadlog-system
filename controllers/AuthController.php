<?php

require_once 'models/user.php';
//classes re
class AuthController
{
    //Função responsável pelo processo de login 
    public function login(){

        //verifica se a requisão HTTP é do tipo POST, ou seja, se o formulario foi enviado 
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $email = $_POST['email'];
            $senha = $_POST['senha'];
        }
    }
}

?>