<?php
//Inclui arquivos de controlador necessarios para lidar com diferentes ações
require 'controllers/AuthController.php'; //istancia controlador de autenticação
require 'controllers/UserController.php'; //Istancia o controlador de usuario 
require 'controllers/DashboardController.php'; //Istancia o controlador de dashboard

//cria istâcia dos controladores para utilizar seus métodos
$authController = new AuthController();
$userController = new UserController();
$dashboardController = new DashboardController();

// coleta a ação da URL, se não houver ação definida usa login como padrão
$action = $_GET['action'] ?? 'login'; //usa operador de coalescencia nula (??) para definir 'login' se 'action' não estiver presente 

switch ($action){
    case 'login':
        $authController->login();
        break;
    case 'register';
        $userController->register();
        break;
    case 'dashboard';
        $dashboardController->index();
        break;
    default:
    $authController->login();
    break;

}

?>