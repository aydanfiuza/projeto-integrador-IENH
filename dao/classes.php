<?php

class Usuario {
    public $id;
    public $username;
    public $nome;
    public $email;
    public $senha;
    public $cnpj;

}

interface UserDAOInterface {
    public function buildUser($data);
    public function create(Usuario $user);
    public function authenticateUser($email, $password);
    public function findByEmail($email);
    public function findUserLogin($id, $username);

}