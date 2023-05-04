<?php

require_once("url.php");

class Usuario {
    public $username;
    public $nome;
    public $email;
    public $senha;
    public $cnpj;
    public $conexao;

    public function __construct(PDO $conn) {
      $this->conexao = $conn;
    }

    public function inserirUsuario() {
    
        $stmt = $this->conexao->prepare("INSERT INTO usuario (username, nome, email, senha, cnpj) VALUES (:username, :nome, :email, :senha, :cnpj)");

        $username = $this->getUsername();
        $nome = $this->getNome();
        $email = $this->getEmail();
        $senha = $this->getSenha();
        $cnpj = $this->getCNPJ();

        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':senha', $senha);
        $stmt->bindParam(':cnpj', $cnpj);

        $stmt->execute();
    }
    public function loginUser() {
      $stmt = $this->conexao->prepare("SELECT id, email, username, senha FROM usuario WHERE email = :email AND senha = :senha LIMIT 1");

      $email = $this->email;
      $senha = $this->senha;
      $senha2 = md5($senha);

      $stmt->bindParam(":email", $email);
      $stmt->bindParam(":senha", $senha2);


      $stmt->execute();

      $resultLogin = $stmt->fetch();
      
      if ($resultLogin) {
        session_start();
        $_SESSION['email'] = $resultLogin['email'];
        $_SESSION['id'] = $resultLogin['id'];
        $_SESSION['username'] = $resultLogin['username'];

        header("Location: ../index.php");
      }
    }

}

interface UserDAOInterface {
    public function buildUser($data);
    public function create(User $user, $authUser = false);
    public function authenticateUser($email, $password);

}