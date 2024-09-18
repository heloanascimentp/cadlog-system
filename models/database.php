<?php
class Database{
    //utiliza o padrão Singleton, cujo objetivo é garantir que apenas uma única instância se uma classe seja criada durante a execução do programa, e que essa instância seja reutilizada sempre 
    private static $instance = null;

    //metodo publico que retorna a conexão com BD
    public static function getConnection(){
        if(!self::$instance){
            $host      = 'localhost';
            $db        = 'sistema_usuarios';
            $user      = 'root';
            $password  = '';
        }
    }
}
?>