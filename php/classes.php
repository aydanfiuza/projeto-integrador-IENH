<?php

class Usuario {
    private $username;
    private $nome;
    private $email;
    private $senha;
    private $cnpj;
    private $conexao;

    public function __construct(PDO $conexao){
      $this->conexao = $conexao;
    }


    // GETTERS SETTERS USERNAME
    public function setUsername($username) {
        $this->username = $username;
    }

    public function getUsername() {
        return $this->username;
    }

    // GETTERS SETTERS NOME
    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getNome() {
        return $this->nome;
    }

    // GETTERS SETTERS EMAIL
    public function setEmail($email) {
        $this->email = $email;
    }

    public function getEmail() {
        return $this->email;
    }

    // GETTERS SETTERS SENHA
    public function setSenha($senha) { 
        $this->senha = MD5($senha);
    }

    public function getSenha() {
        return $this->senha;
    }

    // GETTERS SETTERS CNPJ
    public function setCNPJ($cnpj) {
        $this->cnpj = $cnpj;
    }

    public function getCNPJ() {
        return $this->cnpj;
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

      $email = $this->getEmail();
      $senha = $this->getSenha();
      $stmt->bindParam(":email", $email);
      $stmt->bindParam(":senha", $senha);

      $stmt->execute();

      $resultLogin = $stmt->fetch();
      
      if ($resultLogin) {
        session_start();
        $_SESSION['email'] = $resultLogin['email'];
        $_SESSION['id'] = $resultLogin['id'];
        $_SESSION['username'] = $resultLogin['username'];
        $_SESSION['nome'] = $resultLogin['nome'];

        header("Location: ../index.php");
      }
    }

}

