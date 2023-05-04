<?php

include_once("conexao.php");
include_once("classes.php");


$email = $_POST["email"];
$senha = $_POST["senha"];


$user = new Usuario($conexao);

$user->email = $email;
$user->senha = $senha;


$user->loginUser(); 