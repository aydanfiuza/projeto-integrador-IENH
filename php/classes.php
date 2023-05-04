<?php

require_once("url.php");

class Usuario {
    public $username;
    public $nome;
    public $email;
    public $senha;
    public $cnpj;


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

      $email = $this->getEmail();
      $senha = $this->getSenha();

      echo "$email <br>";
      echo "$senha <br>";
      $stmt->bindParam(":email", $email);
      $stmt->bindParam(":senha", $senha);


      $stmt->execute();

      $resultLogin = $stmt->fetch();
      
      echo $resultLogin['email'] . "<br>";
      echo $resultLogin['id'] . "<br>";
      echo $resultLogin['username'] . "<br>";
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