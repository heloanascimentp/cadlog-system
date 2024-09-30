# cadlog-system

# documentação do Sistema de Autenticação de Usuários

## Descrição
Este sistema é uma aplicação web simples para gerenciamento de autenticação de usuários, permitindo registro e login. Utiliza PHP para a lógica do servidor e MySQL para o banco de dados.

## Estrutura de Arquivos
### 1. AuthController.php
Controlador responsável pela autenticação de usuários.

login(): Processa o login. Verifica se a requisição é POST, valida o email e senha, e inicia uma sessão para o usuário, redirecionando-o para o dashboard ou mostrando o formulário de login em caso de falha.
### 2. UserController.php
Controlador responsável pela gestão de usuários.

register(): Processa o registro de um novo usuário. Verifica se a requisição é POST, coleta os dados do formulário, criptografa a senha e cria um novo registro no banco de dados. Redireciona para a página inicial após o registro.
### 3. Database.php
Gerencia a conexão com o banco de dados utilizando o padrão Singleton.

getConnection(): Retorna a instância única da conexão com o banco de dados MySQL. Define o modo de erro para exceções.
### 4. User.php
Modelo que manipula os dados do usuário.

findByEmail($email): Busca um usuário pelo email.
find($id): Busca um usuário pelo ID.
create($data): Insere um novo usuário no banco de dados.
### 5. login.php
Interface do usuário para login.

Formulário que coleta email e senha, enviando uma requisição POST para o controlador de autenticação.
### 6. register.php
Interface do usuário para registro.

Formulário que coleta nome, email, senha e perfil, enviando uma requisição POST para o controlador de usuários.
### 7. style.css
Estilos CSS para as páginas de login e registro.

Define a aparência visual dos formulários, botões e layout da aplicação.

## Funcionalidades
Registro de novos usuários com criptografia de senha.
Login com verificação de credenciais.
Gerenciamento de sessões para usuários autenticados.

## Requisitos
PHP 7.0 ou superior.
Extensão PDO habilitada.
Banco de dados MySQL.

## Instalação
Configure um servidor web com suporte a PHP e MySQL.
Crie um banco de dados chamado sistema_usuarios e a tabela usuarios conforme a estrutura desejada.
Coloque os arquivos no diretório do servidor e acesse index.php no navegador.

## Considerações
Este sistema é um exemplo básico de autenticação e pode ser expandido com funcionalidades adicionais, como recuperação de senha, validação de email e segurança avançada.
## Autor 
Heloá D'andrea Souza Nascimento