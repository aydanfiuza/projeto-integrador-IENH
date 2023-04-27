<?php



class NovoUsuario {
    private $username;
    private $nome;
    private $email;
    private $senha;
    private $cnpj;


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
        $this->senha = md5($senha);
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
        $user = 'root';
        $senha = '';
        
    
        $conexao = new PDO('mysql:host=127.0.0.1:1360;dbname=projeto_integrador', $user, $senha);
    
        $stmt = $conexao->prepare("INSERT INTO usuario (username, nome, email, senha, cnpj) VALUES (:username, :nome, :email, :senha, :cnpj)");

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

}