<?php
//Inclui arquivos de controlador necessarios para lidar com diferentes ações
require 'controllers/AuthController.php'; //istancia controlador de autenticação
require 'controllers/UserController.php'; //Istancia o controlador de usuario 
require 'controllers/DashboardController.php'; //Istancia o controlador de dashboard

//cria istâcia dos controladores para utilizar seus métodos
$authController = new AuthController();
$userController = new UserController();
$dashboardController = new DashboardController();
?>