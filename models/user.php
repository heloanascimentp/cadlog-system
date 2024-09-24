<?php

    //inclui o arquivo de conexão que contem a classe Database para genrenciar a conexão com o BD
    require_once 'models/database.php';

    class User 
    {
        //funçaõ para encontrar um usuário pelo email
        public static function findByEmail($email){
            //coleta a conexão com BD
            $conn = Database::getConnection();

            $stmt = $conn->prepare("SELECT * FROM usuarios WHERE email = :email");
            //executa a consulta com o e-mail pasado como parâmetro
            $stmt->execute(['email' => $email]);
            //retorna os dados do usuário encontrado como um array associativo
            return $stmt->fetch(PDO::FETCH_ASSOC);
        }
    }
?>

