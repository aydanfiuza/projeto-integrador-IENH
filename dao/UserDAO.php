<?php

    require_once("../php/classes");

    class UserDAO implements UserDAOInterface {
        private $conn;
        private $url;

        public function __construct(PDO $conn, $url) {
            $this->conn = $conn;
            $this->url = $url;
        }

        public function buildUser($data) {
            $user = new User();

            $user->username = $data['username'];
            $user->nome = $data['nome'];
            $user->email = $data['email'];
            $user->senha = $data['senha'];
            $user->cnpj = $data['username'];

            return $user;

        }

        public function create(Usuario $user, $autenticar = false) {

            $stmt = $this->conn->prepare("INSERT INTO usuario
            (username, nome, email, senha, cnpj)
            VALUES (:username, :nome, :email, :senha, :cnpj)");

            $stmt->bindParam(":username", $user->username);
            $stmt->bindParam(":nome", $user->nome);
            $stmt->bindParam(":email", $user->email);
            $stmt->bindParam(":senha", $user->senha);
            $stmt->bindParam(":cnpj", $user->cnpj);

            $stmt->execute();
        }
    }