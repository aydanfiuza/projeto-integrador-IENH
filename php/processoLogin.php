<?php
include_once("conexao.php");
include_once("classes.php");


$email = $_POST["email"];
$senha = $_POST["senha"];


$user = new Usuario($conexao);

$user->setEmail($email);
$user->setSenha($senha);

$user->loginUser();